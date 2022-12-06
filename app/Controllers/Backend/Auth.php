<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{
    /**
     * Renderiza la vista de inicio de sesión
     * y crea la sesión de un usuario.
     */
    public function login()
    {
        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'email'    => 'required|max_length[256]|valid_email|is_not_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[32]|password',
        ])) {
            $userModel = model('UserModel');

            // Consulta los datos del usuario.
            $user = $userModel->role()
                ->where('email', lowerCase(trim($this->request->getPost('email'))))->first();

            // Valida la contraseña del usuario.
            if (password_verify($this->request->getPost('password'), $user->password)) {
                // Asigna variables de sesión del usuario.
                session()->set([
                    'user' => [
                        'id'    => $user->id,
                        'name'  => $user->name,
                        'email' => $user->email,
                        'role'  => [
                            'name'        => $user->role_name,
                            'description' => $user->role,
                        ],
                    ],
                ]);

                return redirect()->route('backend.prospects.index');
            }

            return redirect()
                ->route('backend.login')
                ->withInput()
                ->with('error', 'La identificación de sesión o la contraseña son incorrectas');
        }

        return view('backend/auth/login', [
            'validation' => service('validation'),
        ]);
    }

    /**
     * Renderiza la vista de recuperación de contraseñas
     * y envía un enlace de recuperación por email.
     */
    public function recoverPassword()
    {
        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'email' => 'required|max_length[256]|valid_email|is_not_unique[users.email,active,1]',
        ])) {
            $userModel = model('userModel');

            // Consulta los datos del usuario.
            $user = $userModel->where('email', lowerCase(trim($this->request->getPost('email'))))
                ->where('active', true)
                ->first();

            $authModel = model('AuthModel');

            // Genera una llave aleatoria de autorización.
            $key = random_string('crypto', 32);

            $email = service('email');

            // Define el remitente y el destinatario del email.
            $email->setFrom(config('Email')->SMTPUser, setting()->get('App.siteName'));
            $email->setTo($user->email);

            // Define el asunto y el cuerpo del mensaje.
            $email->setSubject('Recupera tu cuenta');
            $email->setMessage(view('backend/emails/recoverPassword', [
                'user' => $user->name,
                'id'   => $user->id,
                'key'  => $key,
            ]));

            // Envía el mensaje del email.
            if (! $email->send()) {
                return redirect()
                    ->route('backend.recoverPassword')
                    ->withInput()
                    ->with('error', 'Tuvimos un problema para enviar tu mensaje de correo electrónico, por favor inténtelo de nuevo');
            }

            // Registra el hash de autorización del usuario con fecha de expiración.
            $authModel->save([
                'user_id' => $user->id,
                'hash'    => hash('sha512', $key),
                'expires' => (new Time('+1 hours'))->toDateTimeString(), // 1 hora
            ]);

            return redirect()
                ->route('backend.login')
                ->with('success', 'Por favor verifica tu dirección de correo electrónico');
        }

        return view('backend/auth/recoverPassword', [
            'validation' => service('validation'),
        ]);
    }

    /**
     * Renderiza la vista para restaurar contraseñas
     * y restaura la contraseña de un usuario.
     *
     * @param mixed|null $id
     * @param mixed|null $key
     */
    public function resetPassword($id = null, $key = null)
    {
        // Valida si existe el usuario.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[users.id,active,1]']
        )) {
            $authModel = model('AuthModel');

            // Consulta los datos de autenticación del usuario.
            $auth = $authModel->user()
                ->where('users.active', true)
                ->find($id);

            if ($auth !== null) {
                // Valida la llave autenticación.
                if (hash_equals($auth->hash, hash('sha512', $key))) {
                    // Valida si la llave de autenticación ha expirado.
                    if (Time::now()->isAfter(Time::parse($auth->expires))) {
                        return redirect()
                            ->route('backend.recoverPassword')
                            ->with('error', 'Tu enlace de recuperación de contraseña ha expirado, por favor inténtelo de nuevo');
                    }

                    // Valida los campos del formulario.
                    if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
                        'password'     => 'required|min_length[8]|max_length[32]|password',
                        'pass_confirm' => 'required|matches[password]',
                    ])) {
                        $userModel = model('UserModel');

                        // Actualiza la contraseña del usuario.
                        $userModel->update($auth->user_id, [
                            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                        ]);

                        // Elimina el registro de autenticación.
                        $authModel->delete($auth->user_id);

                        return redirect()
                            ->route('backend.login')
                            ->with('success', 'Tu contraseña se ha actualizado correctamente');
                    }

                    return view('backend/auth/resetPassword', [
                        'validation' => service('validation'),
                        'id'         => $id,
                        'key'        => $key,
                    ]);
                }
            }
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    /**
     * Cierra la sesión de un usuario.
     */
    public function logout()
    {
        session()->destroy()->stop();

        return redirect('backend.login');
    }
}

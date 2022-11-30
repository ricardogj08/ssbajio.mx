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
            return 'ok';
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
            $user = $userModel->where('email', lowerCase($this->request->getPost('email')))
                ->where('active', true)
                ->first();

            $authModel = model('AuthModel');

            // Genera una llave aleatoria de autorización.
            $key = random_string('crypto', 32);

            $email = service('email');

            // Define el remitente y el destinatario del email.
            $email->setFrom(config('Email')->SMTPUser, service('settings')->get('App.siteName'));
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
                    ->with('error', 'El mensaje de correo electrónico no se ha podido enviar');
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
     */
    public function resetPassword($id = null, $key = null)
    {
    }
}

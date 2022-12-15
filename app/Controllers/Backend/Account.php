<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Account extends BaseController
{
    /**
     * Renderiza la vista de los datos del usuario de sesión.
     */
    public function show()
    {
        $userModel = model('UserModel');

        // Consulta los datos del usuario de sesión.
        $user = $userModel->role()->find(session('user.id'));

        return view('backend/account/show', ['user' => $user]);
    }

    /**
     * Renderiza la vista para editar la cuenta del usuario de sesión
     * y modifica los datos del usuario de sesión.
     */
    public function update()
    {
        $userModel = model('UserModel');

        // Consulta los datos del usuario de sesión.
        $user = $userModel->role()->find(session('user.id'));

        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate(
            [
                'name'         => 'required|max_length[64]',
                'email'        => "required|max_length[256]|valid_email|is_unique[users.email,email,{$user->email}]",
                'password'     => 'permit_empty|min_length[8]|max_length[32]|password',
                'pass_confirm' => 'required_with[password]|matches[password]',
            ],
            [
                'password' => [
                    'password' => lang('Validation.regex_match'),
                ],
            ]
        )) {
            $password = $this->request->getPost('password');

            // Actualiza los datos del usuario de sesión.
            $userModel->update($user->id, [
                'name'     => trimAll($this->request->getPost('name')),
                'email'    => lowerCase(trim($this->request->getPost('email'))),
                'password' => empty($password)
                    ? $user->password
                    : password_hash($password, PASSWORD_DEFAULT),
            ]);

            return redirect()->route('backend.account.show')
                ->with('toast-success', 'Tu cuenta se ha modificado correctamente');
        }

        return view('backend/account/update', [
            'validation' => service('validation'),
            'user'       => $user,
        ]);
    }
}

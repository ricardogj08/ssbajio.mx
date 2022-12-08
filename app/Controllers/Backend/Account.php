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

    public function update()
    {

    }
}

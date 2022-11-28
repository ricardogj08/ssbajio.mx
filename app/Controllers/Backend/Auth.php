<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use Config\Services;

class Auth extends BaseController
{
    /**
     * Renderiza la vista de inicio de sesión
     * y crea la sesión de un usuario.
     */
    public function login()
    {
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'email'    => 'required|max_length[256]|valid_email',
            'password' => 'required|min_length[8]|max_length[32]|password',
        ])) {
            return 'ok';
        }

        return view('backend/auth/login', [
            'validation' => Services::validation(),
        ]);
    }

    /**
     * Renderiza la vista de recuperación de contraseñas
     * y envía un enlace de recuperación por email.
     */
    public function recoverPassword()
    {
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'email' => 'required|max_length[256]|valid_email',
        ])) {
            return 'ok';
        }

        return view('backend/auth/recoverPassword', [
            'validation' => Services::validation(),
        ]);
    }
}

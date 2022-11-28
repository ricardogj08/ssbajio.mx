<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use Config\Services;

class Users extends BaseController
{
    /**
     * Renderiza la vista de registro de usuarios
     * y registra un nuevo usuario.
     */
    public function new()
    {
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'name'         => 'required|max_length[64]',
            'email'        => 'required|max_length[256]|valid_email|is_unique[users.email]',
            'role'         => 'required|integer|is_not_unique[roles.id]',
            'password'     => 'required|min_length[8]|max_length[32]|password',
            'pass_confirm' => 'required|matches[password]',
        ])) {
            $userModel = model('userModel');

            $userModel->insert([
                'name'     => trimAll($this->request->getPost('name')),
                'email'    => lowerCase(trim($this->request->getPost('email'))),
                'role_id'  => $this->request->getPost('role'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ]);

            return redirect()->route('backend.users.index')
                ->with('toast-success', 'Un nuevo usuario se ha registrado correctamente');
        }

        $roleModel = model('RoleModel');

        $roles = $roleModel->orderBy('description', 'asc')->findAll();

        return view('backend/users/new', [
            'validation' => Services::validation(),
            'roles'      => $roles,
        ]);
    }

    /**
     * Renderiza la vista de la tabla de usuarios.
     */
    public function index()
    {
        $userModel = model('userModel');

        return view('backend/users/index', [
            'users' => $userModel->orderBy('id', 'asc')->paginate(8, 'users'),
            'pager' => $userModel->pager,
        ]);
    }
}

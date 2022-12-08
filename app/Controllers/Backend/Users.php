<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Users extends BaseController
{
    /**
     * Renderiza la vista de registro de usuarios
     * y registra un nuevo usuario.
     */
    public function create()
    {
        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'name'         => 'required|max_length[64]',
            'email'        => 'required|max_length[256]|valid_email|is_unique[users.email]',
            'role'         => 'required|is_natural_no_zero|is_not_unique[roles.id]',
            'password'     => 'required|min_length[8]|max_length[32]|password',
            'pass_confirm' => 'required|matches[password]',
        ])) {
            $userModel = model('userModel');

            // Registra el nuevo usuario.
            $userModel->insert([
                'name'     => trimAll($this->request->getPost('name')),
                'email'    => lowerCase(trim($this->request->getPost('email'))),
                'role_id'  => $this->request->getPost('role'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ]);

            return redirect()
                ->route('backend.users.index')
                ->with('toast-success', 'El usuario de acceso se ha registrado correctamente');
        }

        $roleModel = model('RoleModel');

        // Consulta todos los roles del backend.
        $roles = $roleModel->orderBy('description', 'asc')->findAll();

        return view('backend/users/create', [
            'validation' => service('validation'),
            'roles'      => $roles,
        ]);
    }

    /**
     * Renderiza la vista de la tabla de usuarios y
     * realiza búsquedas y consultas de todos los usuarios.
     */
    public function index()
    {
        // Valida el parámetro de búsqueda.
        if (! $this->validate([
            'q' => 'if_exist|max_length[256]',
        ])) {
            return redirect()->route('backend.users.index')->withInput();
        }

        // Patrón de búsqueda (por defecto: '').
        $query = trimAll($this->request->getGet('q') ?? '');

        $userModel = model('userModel');

        /**
         * Consulta los datos de los usuarios
         * que coinciden con el patrón de búsqueda
         * con paginación.
         */
        $users = $userModel->role()
            ->like('users.name', $query)
            ->orderBy('users.created_at', 'desc')
            ->paginate(8, 'users');

        return view('backend/users/index', [
            'users'      => $users,
            'pager'      => $userModel->pager,
            'validation' => service('validation'),
            'query'      => $query,
        ]);
    }

    /**
     * Modifica el estado de cuenta de un usuario.
     *
     * @param mixed|null $id
     */
    public function toggleActive($id = null)
    {
        // Valida si existe el usuario.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[users.id]']
        )) {
            $userModel = model('userModel');

            // Consulta los datos del usuario.
            $user = $userModel->find($id);

            // Realiza un toggle del estado de cuenta.
            $active = $user->active ? false : true;

            // Actualiza el estado de cuenta.
            $userModel->update($user->id, ['active' => $active]);

            return redirect()
                ->back()
                ->with('toast-success', 'El usuario de acceso se ha dado de ' . ($active ? 'alta' : 'baja') . ' correctamente');
        }

        return redirect()->back()->withInput();
    }

    /**
     * Renderiza la vista de los datos del usuario.
     *
     * @param mixed|null $id
     */
    public function show($id = null)
    {
        // Valida si existe el usuario.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[users.id]']
        )) {
            $userModel = model('userModel');

            // Consulta los datos del usuario.
            $user = $userModel->role()->find($id);

            return view('backend/users/show', ['user' => $user]);
        }

        throw PageNotFoundException::forPageNotFound();
    }

    /**
     * Renderiza la vista para editar un usuario
     * y modifica los datos de un usuario.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        // Valida si existe el usuario.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[users.id]']
        )) {
            $userModel = model('UserModel');

            $user = $userModel->find($id);

            // Valida los campos del formulario.
            if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
                'name'         => 'required|max_length[64]',
                'email'        => "required|max_length[256]|valid_email|is_unique[users.email,email,{$user->email}]",
                'role'         => 'required|is_natural_no_zero|is_not_unique[roles.id]',
                'password'     => 'permit_empty|min_length[8]|max_length[32]|password',
                'pass_confirm' => 'required_with[password]|matches[password]',
            ])) {
                $password = $this->request->getPost('password');

                // Actualiza los datos del usuario.
                $userModel->update($id, [
                    'name'     => trimAll($this->request->getPost('name')),
                    'email'    => lowerCase(trim($this->request->getPost('email'))),
                    'role_id'  => $this->request->getPost('role'),
                    'password' => empty($password)
                        ? $user->password
                        : password_hash($password, PASSWORD_DEFAULT),
                ]);

                return redirect()->route('backend.users.index')
                    ->with('toast-success', 'El usuario se ha modificado correctamente');
            }

            $roleModel = model('RoleModel');

            // Consulta todos los roles del backend.
            $roles = $roleModel->orderBy('description', 'asc')->findAll();

            return view('backend/users/update', [
                'user'       => $user,
                'validation' => service('validation'),
                'roles'      => $roles,
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }
}

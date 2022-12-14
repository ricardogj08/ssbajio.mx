<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Newsletter extends BaseController
{
    /**
     * Renderiza la vista de la tabla de usuarios
     * registrados al newsletter.
     */
    public function index()
    {
        // Valida el parámetro de búsqueda.
        if (! $this->validate([
            'q' => 'if_exist|max_length[256]',
        ])) {
            return redirect()
                ->route('backend.modules.newsletter.index')
                ->with('error', $this->validator->getError('q'));
        }

        // Patrón de búsqueda (por defecto: '').
        $query = trimAll($this->request->getGet('q'));

        $newsletterModel = model('NewsletterModel');

        /**
         * Consulta los datos de todos los usuarios
         * que coinciden con el patrón de búsqueda
         * con paginación.
         */
        $users = $newsletterModel->like('email', $query)
            ->orderBy('created_at', 'desc')
            ->paginate(8, 'emails');

        return view('backend/modules/newsletter/index', [
            'query'      => $query,
            'validation' => service('validation'),
            'users'      => $users,
            'pager'      => $newsletterModel->pager,
        ]);
    }

    /**
     * Elimina un usuario registrado al newsletter.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[newsletter.id]']
        )) {
            $newsletterModel = model('NewsletterModel');

            // Elimina al usuario.
            $newsletterModel->delete($id);

            return redirect()
                ->route('backend.modules.newsletter.index')
                ->with('toast-success', 'El usuario se ha eliminado correctamente');
        }

        throw PageNotFoundException::forPageNotFound();
    }

    /**
     * Renderiza la vista para registrar un usuario al newsletter
     * y registra un usuario al newsletter.
     */
    public function create()
    {
        // Valida los campos del formulario.
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'email' => 'required|max_length[256]|valid_email|is_unique[newsletter.email]',
        ])) {
            $newsletterModel = model('NewsletterModel');

            // Registra el nuevo usuario.
            $newsletterModel->insert([
                'email' => lowerCase(trim($this->request->getPost('email'))),
            ]);

            return redirect()
                ->route('backend.modules.newsletter.index')
                ->with('toast-success', 'El usuario se ha registrado correctamente');
        }

        return view('backend/modules/newsletter/create', [
            'validation' => service('validation'),
        ]);
    }

    /**
     * Renderiza la vista para editar el email del usuario
     * y modifica el email del usuario.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        // Valida si existe el usuario.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[newsletter.id]']
        )) {
            $newsletterModel = model('NewsletterModel');

            // Consulta los datos del usuario.
            $user = $newsletterModel->find($id);

            // Valida los campos del formulario.
            if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
                'email' => "required|max_length[256]|valid_email|is_unique[users.email,email,{$user->email}]",
            ])) {
                // Actualiza los datos del email.
                $newsletterModel->update($user->id, [
                    'email' => lowerCase(trim($this->request->getPost('email'))),
                ]);

                return redirect()
                    ->route('backend.modules.newsletter.index')
                    ->with('toast-success', 'El usuario se ha modificado correctamente');
            }

            return view('backend/modules/newsletter/update', [
                'validation' => service('validation'),
                'user'       => $user,
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }
}

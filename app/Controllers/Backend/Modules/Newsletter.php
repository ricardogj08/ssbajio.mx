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
         * Consulta los datos de todos los emails
         * que coinciden con el patrón de búsqueda
         * con paginación.
         */
        $emails = $newsletterModel
            ->like('email', $query)
            ->orderBy('created_at', 'desc')
            ->paginate(8, 'emails');

        return view('backend/modules/newsletter/index', [
            'query'      => $query,
            'validation' => service('validation'),
            'emails'     => $emails,
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
}

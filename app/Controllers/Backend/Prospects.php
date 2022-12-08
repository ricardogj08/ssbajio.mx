<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Prospects extends BaseController
{
    /**
     * Renderiza la vista de la tabla de prospectos y
     * realiza búsquedas y consultas de todos los prospectos.
     */
    public function index()
    {
        // Valida el parámetro de búsqueda.
        if (! $this->validate([
            'q' => 'if_exist|max_length[256]',
        ])) {
            return redirect()->route('backend.prospects.index')->withInput();
        }

        // Patrón de búsqueda (por defecto: '').
        $query = trimAll($this->request->getGet('q') ?? '');

        $prospectModel = model('ProspectModel');

        /**
         * Consulta los datos de los prospectos
         * que coinciden con el patrón de búsqueda
         * con paginación.
         */
        $prospects = $prospectModel->info()
            ->like('prospects.name', $query)
            ->orderBy('prospects.created_at', 'desc')
            ->paginate(8, 'prospects');

        return view('backend/prospects/index', [
            'validation' => service('validation'),
            'query'      => $query,
            'prospects'  => $prospects,
            'pager'      => $prospectModel->pager,
        ]);
    }

    /**
     * Renderiza la vista de los datos del prospecto.
     *
     * @param mixed|null $id
     */
    public function show($id = null)
    {
        // Valida si existe el prospecto.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[prospects.id]'],
        )) {
            $prospectModel = model('ProspectModel');

            // Consulta los datos del prospecto.
            $prospect = $prospectModel->info()->find($id);

            return view('backend/prospects/show', ['prospect' => $prospect]);
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    /**
     * Elimina el registro de un prospecto.
     *
     * @param mixed|null $id
     */
    public function delete($id = null)
    {
        // Valida si existe el prospecto.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[prospects.id]'],
        )) {
            $prospectModel = model('ProspectModel');

            // Elimina el prospecto.
            $prospectModel->delete($id);

            return redirect()
                ->back()
                ->with('toast-success', 'El prospecto se ha eliminado correctamente');
        }

        return redirect()->back()->withInput();
    }
}

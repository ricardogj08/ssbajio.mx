<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

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
            return redirect()
                ->route('backend.prospects.index')
                ->with('error', $this->validator->getError('q'));
        }

        // Patrón de búsqueda (por defecto: '').
        $query = trimAll($this->request->getGet('q'));

        $prospectModel = model('ProspectModel');

        /**
         * Consulta los datos de todos los prospectos
         * que coinciden con el patrón de búsqueda
         * con paginación.
         */
        $prospects = $prospectModel->solution()
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
     * Renderiza la vista de los datos de un prospecto.
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
            $prospect = $prospectModel->solution()
                ->origin()
                ->find($id);

            return view('backend/prospects/show', [
                'prospect' => $prospect,
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
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
                ->route('backend.prospects.index')
                ->with('toast-success', 'El prospecto se ha eliminado correctamente');
        }

        throw PageNotFoundException::forPageNotFound();
    }

    /**
     * Renderiza la vista para editar un prospecto
     * y modifica los datos de un prospecto.
     *
     * @param mixed|null $id
     */
    public function update($id = null)
    {
        // Valida si el prospecto existe.
        if ($this->validateData(
            ['id' => $id],
            ['id' => 'required|is_natural_no_zero|is_not_unique[prospects.id]'],
        )) {
            $prospectModel = model('ProspectModel');

            // Valida los campos del formulario.
            if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
                'name'         => 'required|max_length[64]',
                'phone'        => 'required|max_length[15]',
                'email'        => 'required|max_length[256]|valid_email',
                'company'      => 'required|max_length[64]',
                'origin'       => 'required|is_natural_no_zero|is_not_unique[origins.id]',
                'solution'     => 'required|is_natural_no_zero|is_not_unique[solutions.id]',
                'message'      => 'if_exist|max_length[4096]',
                'rating'       => 'required|is_natural|less_than_equal_to[10]',
                'observations' => 'if_exist|max_length[4096]',
            ])) {
                $message = trimAll($this->request->getPost('message'));

                $observations = trimAll($this->request->getPost('observations'));

                // Actualiza los datos del prospecto.
                $prospectModel->update($id, [
                    'name'         => trimAll($this->request->getPost('name')),
                    'phone'        => stripAllSpaces($this->request->getPost('phone')),
                    'email'        => lowerCase(trim($this->request->getPost('email'))),
                    'company'      => trimAll($this->request->getPost('company')),
                    'origin_id'    => $this->request->getPost('origin'),
                    'solution_id'  => $this->request->getPost('solution'),
                    'message'      => $message === '' ? null : $message,
                    'rating'       => trim($this->request->getPost('rating')),
                    'observations' => $observations === '' ? null : $observations,
                ]);

                return redirect()
                    ->route('backend.prospects.index')
                    ->with('toast-success', 'El prospecto se ha modificado correctamente');
            }

            // Consulta los datos del prospecto.
            $prospect = $prospectModel->find($id);

            $solutionModel = model('SolutionModel');

            // Consulta todas las soluciones de ssbajio.
            $solutions = $solutionModel->select('id, name')
                ->orderBy('name', 'asc')
                ->findAll();

            $originModel = model('OriginModel');

            // Consulta todos los orígenes de prospectos.
            $origins = $originModel->orderBy('id', 'asc')->findAll();

            return view('backend/prospects/update', [
                'prospect'   => $prospect,
                'validation' => service('validation'),
                'solutions'  => $solutions,
                'origins'    => $origins,
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }
}

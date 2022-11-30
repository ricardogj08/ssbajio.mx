<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Prospects extends BaseController
{
    /**
     * Renderiza la vista del formulario de contacto.
     */
    public function new()
    {
        $originModel = model('OriginModel');

        // Consulta todos los orígenes de prospectos.
        $origins = $originModel->findAll();

        return view('website/prospects/new', [
            'validation' => service('validation'),
            'origins'    => $origins,
        ]);
    }

    /**
     * Registra un nuevo prospecto y
     * renderiza la página de agradecimiento.
     */
    public function create()
    {
        // Valida los campos del formulario.
        if ($this->validate([
            'name'     => 'required|max_length[64]',
            'phone'    => 'required|max_length[15]',
            'email'    => 'required|max_length[256]|valid_email',
            'company'  => 'required|max_length[64]',
            'origin'   => 'required|is_natural_no_zero|is_not_unique[origins.id]',
            'solution' => 'required',
            'message'  => 'if_exist|max_length[2048]',
        ])) {
            return view('website/prospects/create');
        }

        return redirect()->route('website.prospects.new')->withInput();
    }
}

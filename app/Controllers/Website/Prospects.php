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
        return view('website/prospects/new');
    }

    /**
     * Registra un nuevo prospecto y
     * renderiza la página de agradecimiento.
     */
    public function create()
    {
        return view('website/prospects/create');
    }
}

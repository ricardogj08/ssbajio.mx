<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Settings extends BaseController
{
    /**
     * Renderiza la vista para editar las configuraciones del sitio web
     * y modifica las configuraciones del sitio web.
     */
    public function update()
    {
        return view('backend/settings/update');
    }

    public function index()
    {
        return view('backend/settings/index');
    }
}

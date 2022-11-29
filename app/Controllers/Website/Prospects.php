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
}

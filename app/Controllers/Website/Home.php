<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Home extends BaseController
{
    /**
     * Renderiza la página principal del sitio web.
     */
    public function index()
    {
        return view('website/home/index');
    }
}

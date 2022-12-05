<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Posts extends BaseController
{
    /**
     * Renderiza la vista de todos los artículos.
     */
    public function index()
    {
        return view('website/posts/index');
    }

    /**
     * Renderiza la vista de un artículo.
     */
    public function show()
    {
        return view('website/posts/show');
    }
}

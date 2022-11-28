<?php

namespace App\Controllers\Backend\Modules;

use App\Controllers\BaseController;

class Posts extends BaseController
{
    /**
     * Renderiza la vista de registro de artículos
     * y registra un nuevo artículo.
     */
    public function new()
    {
        if (strtolower($this->request->getMethod()) === 'post' && $this->validate([
            'title'      => 'required|max_length[256]',
            'cover'      => 'uploaded[cover]|max_size[cover,2048]|is_image[cover]',
            'excerpt'    => 'required|max_length[512]',
            'started_at' => 'permit_empty|valid_date[Y-m-d\TH:i]',
        ])) {
            $postModel = model('PostModel');

            return redirect()->route('backend.modules.posts.index')
                ->with('toast-success', 'Un nuevo artículo se ha registrado correctamente');
        }

        return view('backend/modules/posts/new', [
            'validation' => service('validation'),
        ]);
    }

    /**
     * Renderiza la vista de la tabla de artículos.
     */
    public function index()
    {
        return view('backend/modules/posts/index');
    }
}

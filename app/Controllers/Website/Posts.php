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
        $postModel = model('PostModel');

        // Consulta los datos de todos los artículos con paginación.
        $posts = $postModel->select('title, cover, slug, excerpt, created_at, started_at')
            ->where('active', true)
            ->orderBy('started_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(5, 'posts');

        return view('website/posts/index', [
            'posts' => $posts,
            'pager' => $postModel->pager,
        ]);
    }

    /**
     * Renderiza la vista de un artículo.
     *
     * @param mixed|null $id
     * @param mixed|null $slug
     */
    public function show($slug = null)
    {
        return view('website/posts/show');
    }
}

<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Posts extends BaseController
{
    /**
     * Renderiza la vista de todos los artículos.
     */
    public function index()
    {
        $solutionModel = model('SolutionModel');

        // Consulta todas las soluciones de ssbajio.
        $solutions = $solutionModel->select('name, thumbnail, slug')
            ->orderBy('created_at', 'asc')
            ->findAll();

        $postModel = model('PostModel');

        // Consulta los datos de todos los artículos con paginación.
        $posts = $postModel->select('title, cover, slug, excerpt, created_at, started_at')
            ->where('active', true)
            ->orderBy('started_at', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(5, 'posts');

        return view('website/posts/index', [
            'solutions' => $solutions,
            'posts'     => $posts,
            'pager'     => $postModel->pager,
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
        // Valida si existe el artículo.
        if ($this->validateData(
            ['slug' => $slug],
            ['slug' => 'required|max_length[256]|is_not_unique[posts.slug]']
        )) {
            $solutionModel = model('SolutionModel');

            // Consulta todas las soluciones de ssbajio.
            $solutions = $solutionModel->select('name, thumbnail, slug')
                ->orderBy('created_at', 'asc')
                ->findAll();

            $postModel = model('PostModel');

            // Consulta los datos del artículo.
            $post = $postModel->where('slug', $slug)->first();

            return view('website/posts/show', [
                'solutions' => $solutions,
                'post'      => $post,
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }
}

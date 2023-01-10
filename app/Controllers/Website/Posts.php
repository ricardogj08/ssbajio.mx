<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;
use DiDom\Document;

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

            $document = new Document($post->body);

            foreach ($document->find('br') as $element) {
                $element->setAttribute('class', 'mb-3.5 lg:mb-7.5');
            }

            foreach ($document->find('div') as $element) {
                $element->setAttribute('class', 'text-15 text-ssbajio-gray-dark-4 font-light tracking-wide');
            }

            foreach ($document->find('h1') as $element) {
                $element->setAttribute('class', 'text-4xl lg:text-50 text-ssbajio-dark-1 font-bold leading-none');
            }

            foreach ($document->find('h2') as $element) {
                $element->setAttribute('class', 'text-38 lg:text-48 text-ssbajio-dark-1 font-bold leading-none');
            }

            foreach ($document->find('h3') as $element) {
                $element->setAttribute('class', 'text-3xl lg:text-45 text-ssbajio-dark-1 font-bold leading-none');
            }

            foreach ($document->find('h4') as $element) {
                $element->setAttribute('class', 'text-2xl lg:text-38 text-ssbajio-dark-1 font-bold leading-none');
            }

            foreach ($document->find('h5') as $element) {
                $element->setAttribute('class', 'text-xl lg:text-28 text-ssbajio-dark-1 font-bold leading-none');
            }

            foreach ($document->find('h6') as $element) {
                $element->setAttribute('class', 'text-lg text-ssbajio-dark-1 font-bold leading-none');
            }

            foreach ($document->find('ol') as $element) {
                $element->setAttribute('class', 'list-decimal list-inside space-y-2 pl-4 text-15 text-ssbajio-gray-dark-4 font-light tracking-wide');
            }

            foreach ($document->find('ul') as $element) {
                $element->setAttribute('class', 'list-disc list-inside space-y-2 pl-4 text-15 text-ssbajio-gray-dark-4 font-light tracking-wide');
            }

            $post->body = $document->find('body')[0]->innerHtml();

            return view('website/posts/show', [
                'solutions' => $solutions,
                'post'      => $post,
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }
}

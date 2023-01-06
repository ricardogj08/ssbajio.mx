<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class Solutions extends BaseController
{
    /**
     * Renderiza la vista de una solución con sus productos.
     *
     * @param mixed|null $slug
     */
    public function show($slug = null)
    {
        // Valida si existe la solución.
        if ($this->validateData(
            ['slug' => $slug],
            ['slug' => 'required|max_length[256]|is_not_unique[solutions.slug]']
        )) {
            $solutionModel = model('SolutionModel');

            // Consulta la información de la solución.
            $solution = $solutionModel->where('slug', $slug)->first();

            // Consulta todas las soluciones de ssbajio.
            $solutions = $solutionModel->select('name, slug, cover')
                ->orderBy('created_at', 'asc')
                ->findAll();

            $categoryModel = model('CategoryModel');

            // Consulta todas las categorías de los productos de la solución.
            $categories = $categoryModel->select('name, description')
                ->where('solution_id', $solution->id)
                ->orderBy('created_at', 'asc')
                ->findAll();

            return view('website/solutions/show', [
                'solution'   => $solution,
                'title_size' => strlen($solution->title),
                'solutions'  => $solutions,
                'categories' => $categories,
            ]);
        }

        throw PageNotFoundException::forPageNotFound();
    }
}

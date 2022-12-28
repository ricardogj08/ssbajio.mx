<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Solutions extends BaseController
{
    /**
     * Renderiza la vista de una solución con sus productos.
     *
     * @param mixed|null $slug
     */
    public function show($slug = null)
    {
        $solutionModel = model('SolutionModel');

        // Consulta la información de la solución.
        $solution = $solutionModel->where('slug', $slug)->first();

        // Consulta todas las soluciones de ssbajio.
        $solutions = $solutionModel->select('name, slug, cover')
            ->orderBy('created_at', 'asc')
            ->findAll();

        return view('website/solutions/show', [
            'solution'   => $solution,
            'title_size' => strlen($solution->title),
            'solutions'  => $solutions,
        ]);
    }
}

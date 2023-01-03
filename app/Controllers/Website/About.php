<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class About extends BaseController
{
    /**
     * Renderiza la vista de acerca de nosotros.
     */
    public function index()
    {
        $solutionModel = model('SolutionModel');

        // Consulta todas las soluciones de ssbajio.
        $solutions = $solutionModel->select('name, cover, slug')
            ->orderBy('created_at', 'asc')
            ->findAll();

        return view('website/about/index', [
            'solutions' => $solutions,
        ]);
    }
}

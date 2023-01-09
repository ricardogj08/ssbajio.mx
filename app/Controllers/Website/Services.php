<?php

namespace App\Controllers\Website;

use App\Controllers\BaseController;

class Services extends BaseController
{
    /**
     * Renderiza la vista de servicios.
     */
    public function index()
    {
        $solutionModel = model('SolutionModel');

        // Consulta todas las soluciones de ssbajio.
        $solutions = $solutionModel->select('name, cover, thumbnail, slug')
            ->orderBy('created_at', 'asc')
            ->findAll();

        return view('website/services/index', [
            'solutions' => $solutions,
        ]);
    }
}

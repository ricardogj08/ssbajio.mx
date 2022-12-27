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
        $solutionModel = model('SolutionModel');

        $solutions = $solutionModel->orderBy('created_at', 'asc')->findAll();

        return view('website/home/index', [
            'solutions' => $solutions,
            'sectors'   => json_decode(json_encode([
                [
                    'name' => 'Sector alimenticio',
                    'icon' => 'bi-justify',
                ],
                [
                    'name' => 'Transporte y automotriz',
                    'icon' => 'bi-car-front-fill',
                ],
                [
                    'name' => 'Construcción y Ferretero',
                    'icon' => 'bi-wrench-adjustable',
                ],
                [
                    'name' => 'Sector industrial',
                    'icon' => 'bi-bar-chart-fill',
                ],
                [
                    'name' => 'Sector alimenticio',
                    'icon' => 'bi-justify',
                ],
                [
                    'name' => 'Transporte y automotriz',
                    'icon' => 'bi-car-front-fill',
                ],
                [
                    'name' => 'Construcción y Ferretero',
                    'icon' => 'bi-wrench-adjustable',
                ],
                [
                    'name' => 'Sector industrial',
                    'icon' => 'bi-bar-chart-fill',
                ],
            ])),
        ]);
    }
}

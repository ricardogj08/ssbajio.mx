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

        // Consulta todas las soluciones de ssbajio.
        $solutions = $solutionModel->select('name, cover, slug, excerpt, thumbnail')
            ->orderBy('created_at', 'asc')
            ->findAll();

        $sectors = json_decode(json_encode([
            [
                'name'      => 'Sector alimenticio',
                'icon'      => 'bi-justify',
                'thumbnail' => '1672764045_2597ad4f3552acc84aa3.webp',
            ],
            [
                'name'      => 'Transporte y automotriz',
                'icon'      => 'bi-car-front-fill',
                'thumbnail' => '1672764150_865148028672b1c8c122.jpg',
            ],
            [
                'name'      => 'Construcción y Ferretero',
                'icon'      => 'bi-wrench-adjustable',
                'thumbnail' => '1672764209_1e97c915d3411afa16ec.jpg',
            ],
            [
                'name'      => 'Sector industrial',
                'icon'      => 'bi-bar-chart-fill',
                'thumbnail' => '1672764267_9e1bd2dba0f266b84443.jpg',
            ],
        ]));

        return view('website/home/index', [
            'solutions' => $solutions,
            'sectors'   => $sectors,
        ]);
    }
}

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
        return view('website/home/index', [
            'solutions' => json_decode(json_encode([
                [
                    'name'        => 'Tornillería Industrial',
                    'description' => 'Gran variedad de tornillos, tuercas y rondanas.',
                    'cover'       => 'https://i.ibb.co/VNWbynM/tornillo.webp',
                    'dark'        => false,
                ],
                [
                    'name'        => 'Herramientas eléctricas y manuales',
                    'description' => 'Encuentra todo tipo de herramientas industriales de las mejores marcas.',
                    'cover'       => 'https://i.ibb.co/g7hK321/herramienta.webp',
                    'dark'        => true,
                ],
                [
                    'name'        => 'Pintura Automotriz',
                    'description' => 'Contamos con pinturas de esmalte y vinílica, línea Excelo de la marca Sherwin Williams.',
                    'cover'       => 'https://i.ibb.co/wsnxzWj/Bitmap.webp',
                    'dark'        => false,
                ],
                [
                    'name'        => 'Tornillería Industrial',
                    'description' => 'Gran variedad de tornillos, tuercas y rondanas.',
                    'cover'       => 'https://i.ibb.co/VNWbynM/tornillo.webp',
                    'dark'        => false,
                ],
                [
                    'name'        => 'Herramientas eléctricas y manuales',
                    'description' => 'Encuentra todo tipo de herramientas industriales de las mejores marcas.',
                    'cover'       => 'https://i.ibb.co/g7hK321/herramienta.webp',
                    'dark'        => true,
                ],
                [
                    'name'        => 'Pintura Automotriz',
                    'description' => 'Contamos con pinturas de esmalte y vinílica, línea Excelo de la marca Sherwin Williams.',
                    'cover'       => 'https://i.ibb.co/wsnxzWj/Bitmap.webp',
                    'dark'        => false,
                ],
            ])),
        ]);
    }
}

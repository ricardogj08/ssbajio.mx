<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicia la tabla de soluciones de ssbajio.
 */
class SolutionSeeder extends Seeder
{
    public function run()
    {
        $solutionModel = model('SolutionModel');

        $solutionModel->ignore()->insertBatch([
            [
                'name'        => null,
                'description' => 'Tornillería',
            ],
            [
                'name'        => null,
                'description' => 'Ferretería',
            ],
            [
                'name'        => null,
                'description' => 'Herramientas',
            ],
            [
                'name'        => null,
                'description' => 'Pintura Automotriz',
            ],
            [
                'name'        => null,
                'description' => 'Productos de Contingencia',
            ],
            [
                'name'        => null,
                'description' => 'Filtros y Refacciones',
            ],
        ]);
    }
}

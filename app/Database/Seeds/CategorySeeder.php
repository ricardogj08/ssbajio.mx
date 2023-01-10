<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicializa la tabla de las categorías de las soluciones.
 */
class CategorySeeder extends Seeder
{
    public function run()
    {
        $solutionModel = model('SolutionModel');

        $herramientas = $solutionModel->select('id')
            ->where('alias', 'herramientas')
            ->first();

        $pinturas = $solutionModel->select('id')
            ->where('alias', 'pinturas')
            ->first();

        $contingencia = $solutionModel->select('id')
            ->where('alias', 'contingencia')
            ->first();

        $filtros = $solutionModel->select('id')
            ->where('alias', 'filtros')
            ->first();

        $categoryModel = model('CategoryModel');

        $categoryModel->ignore()->insertBatch([
            [
                'solution_id' => $herramientas->id,
                'alias'       => 'herramientas_urrea',
                'name'        => 'Herramientas URREA',
                'description' => 'Líder en los mercados de herramientas y cerrajería, así como en el de soluciones hidráulicas y ambientes para baños y muchos más.',
            ],
            [
                'solution_id' => $herramientas->id,
                'alias'       => 'herramientas_surtek',
                'name'        => 'Herramientas Surtek',
                'description' => 'Filial del Grupo Urrea especializando sus productos para la construcción y oficios, relacionados con agricultura, jardinería y mecánica en general.',
            ],
            [
                'solution_id' => $herramientas->id,
                'alias'       => 'herramientas_milwaukee',
                'name'        => 'Herramientas Milwaukee',
                'description' => null,
            ],
            [
                'solution_id' => $pinturas->id,
                'alias'       => 'pintura_esmalte',
                'name'        => 'Pintura de esmalte',
                'description' => 'Gracias a su alta calidad podrás lograr un acabado mate, satinado o brillante. La pintura de esmalte esta creada principalmente para su uso en baños, cocinas y herrerías, ya sea para interior o exterior.',
            ],
            [
                'solution_id' => $pinturas->id,
                'alias'       => 'pintura_vinilica',
                'name'        => 'Pintura vinílica',
                'description' => 'Con la pintura vinílica obtendrás los mejores acabados gracias a su fácil aplicación y gran poder de cobertura. Se puede aplicar tanto en interiores como en exteriores, pues ofrece gran resistencia a la intemperie ademas de contar con una amplia gama de colores.',
            ],
            [
                'solution_id' => $pinturas->id,
                'alias'       => 'pintura_excelo',
                'name'        => 'Pintura automotriz línea Excelo',
                'description' => 'Esta línea de pintura se caracteriza por su excelente calidad, desempeño, confiabilidad y rentabilidad, ademas de ser un producto fácil de usar y de gran durabilidad. Contamos con una serie de sistemas de repintados como laca, acrílica, esmalte acrílico, poliuretano acrílico, esmalte alquidal o de secado rápido que permiten satisfacer cualquier necesidad.

Con Excelo obtén mejores acabados para los segmentos de repintado automotriz, flotillas y vehículos comerciales así como también para la industria metal mecánica.',
            ],
            [
                'solution_id' => $filtros->id,
                'alias'       => 'filtros_mann',
                'name'        => 'Tipos de filtros MANN FILTER',
                'description' => 'Contamos con una amplia variedad de filtros Mann Filter, la marca de filtros premium mas importante del mercado.',
            ],
            [
                'solution_id' => $contingencia->id,
                'alias'       => 'contingencia',
                'name'        => null,
                'description' => null,
            ],
        ]);
    }
}

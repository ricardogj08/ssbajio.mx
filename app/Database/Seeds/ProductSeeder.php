<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicializa la tabla de productos de las categorías de las soluciones.
 */
class ProductSeeder extends Seeder
{
    public function run()
    {
        $categoryModel = model('CategoryModel');

        $contingenciaCategory = $categoryModel->select('id')
            ->where('alias', 'contingencia')
            ->first();

        $productModel = model('ProductModel');

        $productModel->ignore()->insertBatch([
            [
                'name'        => 'Cubrebocas SMS',
                'title'       => null,
                'cover'       => '1673373929_3ff6ec084b42879fb30f.webp',
                'category_id' => $contingenciaCategory->id,
            ],
            [
                'name'        => 'Gel Antibacterial',
                'title'       => null,
                'cover'       => '1673373944_a4e4d635637db45a1ea2.webp',
                'category_id' => $contingenciaCategory->id,
            ],
            [
                'name'        => 'Guantes de Protección',
                'title'       => null,
                'cover'       => '1673373957_061c3cbc8223b80403e6.webp',
                'category_id' => $contingenciaCategory->id,
            ],
            [
                'name'        => 'Careta Pet Flexible',
                'title'       => null,
                'cover'       => '1673373973_3d3b7082d6a1b35b6649.webp',
                'category_id' => $contingenciaCategory->id,
            ],
            [
                'name'        => 'Lentes de Seguridad',
                'title'       => null,
                'cover'       => '1673373992_d5a0da2d16881480ed34.webp',
                'category_id' => $contingenciaCategory->id,
            ],
            [
                'name'        => 'Termómetro sin contacto',
                'title'       => null,
                'cover'       => '1673374026_df142812fab3457cdba7.webp',
                'category_id' => $contingenciaCategory->id,
            ],
            [
                'name'        => 'Tapete Sanitizante',
                'title'       => null,
                'cover'       => '1673374039_ffb900edb75b8cc55215.webp',
                'category_id' => $contingenciaCategory->id,
            ],
        ]);
    }
}

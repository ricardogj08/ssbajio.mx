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

        $pinturasCategoryEsmalte = $categoryModel->select('id')
            ->where('alias', 'pintura_esmalte')
            ->first();

        $pinturasCategoryVinilica = $categoryModel->select('id')
            ->where('alias', 'pintura_vinilica')
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
            [
                'name'        => 'Esmalte Acrílico Base agua',
                'title'       => null,
                'cover'       => '1673381773_20e1c74c127965969e12.png',
                'category_id' => $pinturasCategoryEsmalte->id,
            ],
            [
                'name'        => 'Evolución',
                'title'       => null,
                'cover'       => '1673381789_c821318269ba8aa39d6c.png',
                'category_id' => $pinturasCategoryEsmalte->id,
            ],
            [
                'name'        => 'P.A.B Ultra Lavable',
                'title'       => null,
                'cover'       => '1673381807_bb05649908ac46fbe276.png',
                'category_id' => $pinturasCategoryEsmalte->id,
            ],
            [
                'name'        => 'P.A.B. Acabado Metálico',
                'title'       => null,
                'cover'       => '1673381836_2fde7ead00390c88bb74.png',
                'category_id' => $pinturasCategoryEsmalte->id,
            ],
            [
                'name'        => 'Aditivo Mateante',
                'title'       => null,
                'cover'       => '1673381849_809897777489b8c465b1.png',
                'category_id' => $pinturasCategoryEsmalte->id,
            ],
            [
                'name'        => 'P.A.B. 3 en 1',
                'title'       => null,
                'cover'       => '1673381860_a1ab67868508e0c50987.png',
                'category_id' => $pinturasCategoryEsmalte->id,
            ],
            [
                'name'        => 'Pro Craft',
                'title'       => 'Pintura vinil - acrílica',
                'cover'       => '1673383423_b22f3f4984c205e155f6.png',
                'category_id' => $pinturasCategoryVinilica->id,
            ],
            [
                'name'        => 'Centinela',
                'title'       => 'Pintura vinil - acrílica',
                'cover'       => '1673383439_ecb36e7aa04ea29964cb.png',
                'category_id' => $pinturasCategoryVinilica->id,
            ],
            [
                'name'        => 'Evolución Extra Rendimiento',
                'title'       => 'Pintura vinil - acrilica',
                'cover'       => '1673383456_390d2c1543c48f504a11.png',
                'category_id' => $pinturasCategoryVinilica->id,
            ],
            [
                'name'        => 'Evolución Extra Cubrimiento',
                'title'       => 'Pintura viníl - acrílica',
                'cover'       => '1673383467_b21b94228f65f7db4fa0.png',
                'category_id' => $pinturasCategoryVinilica->id,
            ],
            [
                'name'        => 'Super Kem Tone',
                'title'       => 'Autolavable Exteriores',
                'cover'       => '1673383492_85fe8e6278564ea9fbb3.png',
                'category_id' => $pinturasCategoryVinilica->id,
            ],
            [
                'name'        => 'Super Kem Tone Desmanchable',
                'title'       => 'Pintura acrílica desmanchable',
                'cover'       => '1673383515_d6d82e46711c587c6c24.png',
                'category_id' => $pinturasCategoryVinilica->id,
            ],
            [
                'name'        => 'Super Kem Tone Acabado Perfecto',
                'title'       => 'Pintura vinil - acrílica',
                'cover'       => '1673383534_c9b017d0ba8858e2b0ec.png',
                'category_id' => $pinturasCategoryVinilica->id,
            ],
            [
                'name'        => 'Pro Constructor',
                'title'       => 'Pintura de látex',
                'cover'       => '1673383563_9605ec77b008703371b1.png',
                'category_id' => $pinturasCategoryVinilica->id,
            ],
        ]);
    }
}

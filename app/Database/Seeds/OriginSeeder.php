<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicializa la tabla de orígenes de prospectos.
 */
class OriginSeeder extends Seeder
{
    public function run()
    {
        $originModel = model('OriginModel');

        $originModel->ignore()->insertBatch([
            [
                'name'        => 'google',
                'description' => 'A través de Google',
            ],
            [
                'name'        => 'soc',
                'description' => 'Redes Sociales',
            ],
            [
                'name'        => 'print',
                'description' => 'Publicidad Impresa',
            ],
            [
                'name'        => 'exec',
                'description' => 'Visita de un Ejecutivo',
            ],
            [
                'name'        => 'recomm',
                'description' => 'Recomendación / Referencia',
            ],
            [
                'name'        => 'mailing',
                'description' => 'Mailing',
            ],
            [
                'name'        => 'other',
                'description' => 'Otro',
            ],
        ]);
    }
}

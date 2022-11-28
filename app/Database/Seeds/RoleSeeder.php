<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicia la tabla de roles.
 */
class RoleSeeder extends Seeder
{
    public function run()
    {
        $roleModel = model('RoleModel');

        $roleModel->ignore()->insertBatch([
            [
                'name'        => 'admin',
                'description' => 'Administrador',
            ],
            [
                'name'        => 'mod',
                'description' => 'Moderador',
            ],
        ]);
    }
}

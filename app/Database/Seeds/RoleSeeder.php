<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicializa la tabla de roles.
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

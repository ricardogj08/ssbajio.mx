<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicializa las tablas de la base de datos.
 */
class MainSeeder extends Seeder
{
    public function run()
    {
        $this->call('RoleSeeder');
        $this->call('UserSeeder');
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

/**
 * Inicializa la tabla de usuarios.
 */
class UserSeeder extends Seeder
{
    public function run()
    {
        $roleModel = model('RoleModel');

        $role = $roleModel->where('name', 'admin')->first();

        $userModel = model('UserModel');

        $userModel->ignore()->insert([
            'name'     => 'Genotipo',
            'email'    => 'hola@genotipo.com',
            'role_id'  => $role->id,
            'password' => '$2y$10$2HdS.cHH6tbNyD7qYKhK9OksJHCr56aEZCnQxhfcZ3pUTnE0CW5Xe',
        ]);
    }
}

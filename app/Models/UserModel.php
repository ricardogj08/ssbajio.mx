<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de usuarios.
 */
class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['name', 'email', 'role_id', 'password', 'active'];

    // Dates
    protected $useTimestamps = true;

    /**
     * Rol del usuario.
     */
    public function role()
    {
        $this->builder()->select('users.*, roles.description as role')->join('roles', 'roles.id = users.role_id', 'inner');

        return $this;
    }
}

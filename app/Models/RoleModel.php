<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de roles.
 */
class RoleModel extends Model
{
    protected $table            = 'roles';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['name', 'description'];
}

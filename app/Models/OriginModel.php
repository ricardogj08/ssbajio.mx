<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de orígenes de prospectos.
 */
class OriginModel extends Model
{
    protected $table            = 'origins';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['name', 'description'];
}

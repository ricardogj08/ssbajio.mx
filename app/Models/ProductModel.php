<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de productos.
 */
class ProductModel extends Model
{
    protected $table            = 'products';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['category_id', 'name', 'title', 'cover'];

    // Dates
    protected $useTimestamps = true;
}

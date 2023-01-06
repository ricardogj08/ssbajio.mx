<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'categories';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['solution_id', 'alias', 'name', 'description'];

    // Dates
    protected $useTimestamps = true;

    // Productos de la categoría.
    public function products()
    {
    }
}

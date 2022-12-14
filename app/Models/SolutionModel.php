<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de soluciones de ssbajio.
 */
class SolutionModel extends Model
{
    protected $table            = 'solutions';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = [
        'alias',
        'slug',
        'cover',
        'thumbnail',
        'name',
        'excerpt',
        'metatitle',
        'metadescription',
        'title',
        'caption',
        'subtitle',
        'description',
    ];

    // Dates
    protected $useTimestamps = true;
}

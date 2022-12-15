<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de newsletter.
 */
class NewsletterModel extends Model
{
    protected $table            = 'newsletter';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['email', 'hash'];

    // Dates
    protected $useTimestamps = true;
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table            = 'auth';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $allowedFields    = ['user_id', 'hash', 'expires'];

    // Dates
    protected $useTimestamps = true;

    /**
     * Usuario de autorización.
     */
    public function user()
    {
    }
}

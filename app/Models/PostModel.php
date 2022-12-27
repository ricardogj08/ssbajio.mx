<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de artículos.
 */
class PostModel extends Model
{
    protected $table            = 'posts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = [
        'title',
        'slug',
        'cover',
        'excerpt',
        'started_at',
        'body',
        'user_id',
        'active',
    ];

    // Dates
    protected $useTimestamps = true;

    /**
     * Usuario del artículo.
     */
    public function user()
    {
        $this->builder()
            ->select('posts.*, users.name as user')
            ->join('users', 'users.id = posts.user_id', 'inner');

        return $this;
    }
}

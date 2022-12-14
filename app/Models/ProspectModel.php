<?php

namespace App\Models;

use CodeIgniter\Model;

/**
 * Modelo que representa la tabla de prospectos.
 */
class ProspectModel extends Model
{
    protected $table            = 'prospects';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['name', 'phone', 'email', 'company', 'origin_id', 'solution_id', 'message'];

    // Dates
    protected $useTimestamps = true;

    /**
     * Solución del prospecto.
     */
    public function solution()
    {
        $this->builder()
            ->select('prospects.*, solutions.description as solution')
            ->join('solutions', 'solutions.id = prospects.solution_id', 'inner');

        return $this;
    }

    /**
     * Origen del prospecto.
     */
    public function origin()
    {
        $this->builder()
            ->select('prospects.*, origins.description as origin')
            ->join('origins', 'origins.id = prospects.origin_id', 'inner');

        return $this;
    }
}

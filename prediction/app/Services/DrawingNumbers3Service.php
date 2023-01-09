<?php

namespace App\Services;

use App\Models\Entities;
use App\Repositories;

class DrawingNumbers3Service
{
    private $DrawingNumbers3List = null;

    public function __construct()
    {
        $this->DrawingNumbers3List = Repositories\DrawingNumbers3Repository::toEntity();
    }

    public function findAll()
    {
        return $this->DrawingNumbers3List;
    }

    public function findByNumbers($Numbers)
    {
        return $this->DrawingNumbers3List->findDrawingNumbers3ByNumbers($Numbers);
    }
}
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

    public function search($SearchCondition)
    {
        if (empty($SearchCondition) || !$SearchCondition->hasCondition()) {
            return $this->DrawingNumbers3List;
        }
        return $this->DrawingNumbers3List->findByCondition($SearchCondition);
    }
}
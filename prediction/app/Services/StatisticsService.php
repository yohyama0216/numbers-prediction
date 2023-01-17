<?php

namespace App\Services;

use App\Models\Entities;
use App\Repositories;

class StatisticsService
{
    private $DrawingNumbers3List = null;

    public function __construct($DrawingNumbers3List)
    {
        $this->DrawingNumbers3List = $DrawingNumbers3List;
    }

    public function executeCounter()
    {
        $Counter = new Entities\Counter($this->DrawingNumbers3List);
        return $Counter->countStraightNumbers3();
    }
}
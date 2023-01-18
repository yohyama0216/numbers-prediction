<?php

namespace App\Services;

use App\Models\Entities\Statistics;

class StatisticsService
{
    private $DrawingNumbers3List = null;

    public function __construct($DrawingNumbers3List)
    {
        $this->DrawingNumbers3List = $DrawingNumbers3List;
    }

    public function executeCounter()
    {
        $Counter = new Statistics\Counter($this->DrawingNumbers3List);
        return $Counter->countStraightNumbers3AsChar();
    }
}
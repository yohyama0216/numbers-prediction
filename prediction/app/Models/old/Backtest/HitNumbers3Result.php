<?php

namespace App\Models\Entities\Backtest;

class HitNumbers3Result
{
    private $drawingNumbers3 = null;
    private $buyNumbers3List = null;
    private $hitStraightCount = 0;
    private $hitBoxCount = 0;
    private $return = 0;
    private $cost = 0;

    public function __construct($drawingNumbers3, $buyNumbers3List)
    {
        $this->DrawingNumbers3 = $drawingNumbers3;
        $this->BuyNumbers3List = $buyNumbers3List;
    }

    public function addHitStraightCount()
    {
        $this->hitStraightCount++;
    }

    public function addHitBoxCount()
    {
        $this->hitBoxCount++;
    }

    public function getHitStraightCount()
    {
        return $this->hitStraightCount;
    }

    public function getHitBoxCount()
    {
        return $this->hitBoxCount;
    }

    public function addReturn($return)
    {
        $this->return += $return;
    }

    public function addCost($cost)
    {
        $this->cost += $cost;
    }

    public function getReturn()
    {
        return $this->return;
    }

    public function getCost()
    {
        return $this->cost;
    }
}

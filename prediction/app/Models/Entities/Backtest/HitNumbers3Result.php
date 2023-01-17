<?php

namespace App\Models\Entities\Backtest;

class HitNumbers3Result {

    private $DrawingNumbers3 = null;
    private $BuyNumbers3List = null;
    private $hitStraightCount = 0;
    private $hitBoxCount = 0;
    private $return = 0;
    private $cost = 0;

    public function __construct($DrawingNumbers3,$BuyNumbers3List)
    {
        $this->DrawingNumbers3 = $DrawingNumbers3;
        $this->BuyNumbers3List = $BuyNumbers3List;
    }

    public function addHitStraightCount()
    {
        $this->hitStraightCount++;
    }

    public function addHitBoxCount()
    {
        $this->hitBoxCount++;
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
<?php

namespace App\Models\Entities;

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
        $this->check();
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

    public function check() //checkerに移すべき？
    {       
        $cost = 200;
        foreach($this->BuyNumbers3List as $BuyNumbers3) {
            $Numbers = $BuyNumbers3->getNumbers();
            if ($this->DrawingNumbers3->getDrawingNumbers3Result()->isStraightHit($Numbers)) {
                $straightReturn = 90000;
                $this->addHitStraightCount();
                $this->addReturn($straightReturn);
            } else if ($this->DrawingNumbers3->getDrawingNumbers3Result()->isBoxHit($Numbers)) {
                $boxReturn = 10000;
                $this->addHitBoxCount();
                $this->addReturn($boxReturn);
            }
            $this->addCost($cost);
        }
    }
}
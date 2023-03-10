<?php

namespace App\Models\Entities\Backtest;

use ArrayObject;

class HitNumbers3ResultList extends ArrayObject
{
    private $totalCount = 0;
    private $hitCount = 0;
    private $loseCount = 0;
    private $profit = 0;
    private $return = 0;
    private $cost = 0;

    public function getTotalCount()
    {
        return $this->totalCount;
    }

    public function getHitCount()
    {
        return $this->hitCount;
    }

    public function getLoseCount()
    {
        return $this->loseCount;
    }

    public function getProfit()
    {
        return $this->profit;
    }

    public function getReturn()
    {
        return $this->return;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function calcTotalResult()
    {
        foreach ($this as $item) {
            $return = $item->getHitStraightCount();
            if ($return) {
                $this->hitCount++;
            } else {
                $this->loseCount++;
            }
            $this->return += $item->getReturn();
            $this->cost += $item->getCost();
        }
        $this->totalCount = count($this);
        $this->profit = $this->return - $this->cost;
        return $this;
    }
}

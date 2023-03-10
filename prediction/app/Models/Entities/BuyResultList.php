<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Collection;

class BuyResultList extends Collection
{
    public function calcTotalCost()
    {
        $totalCost = 0;
        foreach ($this as $item) {
            $totalCost += $item->getBuyNumbers()->calcCost();
        }
        return $totalCost;
    }

    public function calcTotalReturn()
    {
        $totalReturn = 0;
        foreach ($this as $item) {
            $totalReturn += $item->getReturn();
        }
        return $totalReturn;
    }
}

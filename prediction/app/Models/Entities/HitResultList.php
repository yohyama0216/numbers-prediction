<?php

namespace App\Models\Entities;

use ArrayObject;

class HitResultList extends ArrayObject {
    public function displayTotalResult()
    {
        $return = 0;
        $cost = 0;
        foreach($this as $item) {
            $return += $item->getReturn();
            $cost += $item->getCost();
        }
        $count = count($this);
        $profit = $return - $cost;
        echo "cost:$cost return:$return profit:$profit count:$count";
    }
}
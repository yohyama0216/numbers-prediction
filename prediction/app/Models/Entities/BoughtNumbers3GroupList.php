<?php

namespace App\Models\Entities;

use ArrayObject;

class BoughtNumbers3GroupList extends ArrayObject {

    public function getTotalCost()
    {
        $allCost = 0;
        foreach($this as $item) {
            $allCost += $item->getGroupCost();
        }
        return $allCost;
    }
}

<?php

namespace App\Models\Entities;

use ArrayObject;

class BoughtNumbers3List extends ArrayObject {

    public function getAllCost()
    {
        $allCost = 0;
        foreach($this as $item) {
            $allCost += $item->getCost();
        }
        return $allCost;
    }
}
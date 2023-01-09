<?php

namespace App\Models\Entities;

use ArrayObject;

class DrawingNumbers3List extends ArrayObject {

    public function sortByDate($order = 'desc')
    {
        $this->uasort(function($a,$b) use ($order) {
            if ($order == 'desc') {
                return $a->getDate() < $b->getDate();
            } else {
                return $a->getDate() > $b->getDate();
            }
        });
    }
    
    public function getLatestDrawings()
    {
        if (empty($this->getArrayCopy())) {
            return null;
        }
        
        $this->sortByDate('asc');
        $lastKey = array_key_last($this->getArrayCopy());
        return $this[$lastKey];
    }

    public function findDrawingNumbers3ByNumbers($numbers)
    {
        $list = [];
        foreach($this as $item) {
            if ($numbers == $item->getDrawingNumbers3Result()->getNumbers()->toString()) {
                $list[] = $item;
            }
        }
        return new self($list);
    }

    public function getPrevNumbers3ResultList($start,$prev)
    {
        if ($start < $prev) {
            return [];
        }

        $list = array_slice($this->getArrayCopy(),$start,$prev);
        return new self($list);
    }
}
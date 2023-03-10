<?php

namespace App\Models\Entities\Common;

use ArrayObject;

class DrawingNumbers3List extends ArrayObject
{
    public function sortByDate($order = 'desc')
    {
        $this->uasort(function ($a, $b) use ($order) {
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

    public function findByCondition($SearchCondition)
    {
        $list = [];
        foreach ($this as $item) {
            if ($SearchCondition->match($item)) {
                $list[] = $item;
            }
        }
        return new self($list);
    }

    public function getPrevNumbers3ResultList($start, $prev)
    {
        if ($start < $prev) {
            return [];
        }

        $list = array_slice($this->getArrayCopy(), $start, $prev);
        return new self($list);
    }

    public function getResultNumbersAsArray($flag = false)
    {
        $array = [];
        $prefix = "";
        foreach ($this as $item) {
            if ($flag) {
                $prefix = "Numbers3:";
            }
            $array[] = $prefix . $item->getDrawingNumbers3Result()->getNumbers()->toString();
        }
        return $array;
    }
}

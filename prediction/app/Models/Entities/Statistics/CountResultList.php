<?php

namespace App\Models\Entities\Statistics;

use ArrayObject;

class CountResultList extends ArrayObject {

    public function addCountResult($Target,$type='straight')
    {
        $func = ($type == 'box') ? 'isSameBox' : 'isSameStraight';
        foreach($this as $key => $item) {
            if ($item->getTarget()->$func($Target)) {
                $this[$key]->addCount();
                return $this;
            }
        }
        $this[] = (new CountResult($Target));
        return $this;
    }

    public function sortByCount($order = 'desc')
    {
        $this->uasort(function($a,$b) use ($order) {
            if ($order == 'desc') {
                return $a->getCount() < $b->getCount();
            } else {
                return $a->getCount() > $b->getCount();
            }
        });
        return $this;
    }
}
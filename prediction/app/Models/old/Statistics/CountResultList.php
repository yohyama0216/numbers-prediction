<?php

namespace App\Models\Entities\Statistics;

use ArrayObject;

class CountResultList extends ArrayObject
{
    public function addCountResult($target, $type = 'straight')
    {
        $func = ($type == 'box') ? 'isSameBox' : 'isSameStraight';
        foreach ($this as $key => $item) {
            if ($item->getTarget()->$func($target)) {
                $this[$key]->addCount();
                return $this;
            }
        }
        $this[] = (new CountResult($target));
        return $this;
    }

    public function sortByCount($order = 'desc')
    {
        $this->uasort(function ($a, $b) use ($order) {
            if ($order == 'desc') {
                return $a->getCount() < $b->getCount();
            } else {
                return $a->getCount() > $b->getCount();
            }
        });
        return $this;
    }
}

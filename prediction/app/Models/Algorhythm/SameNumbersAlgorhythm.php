<?php

namespace App\Models\Algorhythm;

class SameNumbersAlgorhythm {
    
    public function predict()
    {
        return range(111,999,111);
    }

    public function predictByPrevResultList($resultList)
    {
        $list = [];
        if (empty($resultList)) {
            return [];
        }

        foreach($resultList as $result) {
            $list[] = $result->getNumbers()->toString();
        }
        return $list;
    }
}
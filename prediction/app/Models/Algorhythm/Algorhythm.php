<?php

namespace App\Models\Algorhythm;

use App\Models\Entities;

class Algorhythm {
    
    public function sameDigitNumbers3()
    {
        $NumbersList = [];
        foreach(range(111,999,111) as $number) {
            $NumbersList[] = new Entities\Numbers3($number);
        }
        return $NumbersList;
    }

    public function predictByPrevResultList($resultList)
    {
        $list = [];
        if (empty($resultList)) {
            return [];
        }

        foreach($resultList as $result) {
            $list[] = new Entities\Numbers3($result->getNumbers()->toString());
        }
        return $list;
    }

    public function generateMyNumbersList()
    {
        
    }
}
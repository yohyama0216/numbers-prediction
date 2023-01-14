<?php

namespace App\Models\Algorhythm;

use App\Models\Entities;

class NumbersGenerator {
    
    public function generateSameDigitAllNumbers()
    {
        $NumbersList = [];
        foreach(range(111,999,111) as $number) {
            $NumbersList[] = new Entities\Numbers3($number);
        }
        return $NumbersList;
    }

    public function generateBestHitNumbers()
    {
        $NumbersList = [];
        $bestHitNumbersList = [355,943,679,589,271,468,226,922,928,372];
        foreach($bestHitNumbersList as $number) {
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
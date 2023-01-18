<?php

namespace App\Models\Entities\Statistics;

use App\Models\Entities\Common;

class Counter {

    private $DrawingNumbers3list = '';

    public function __construct($DrawingNumbers3list)
    {
        $this->DrawingNumbers3list = $DrawingNumbers3list;
    }

    public function countStraightNumbers3()
    {        
        $CountResultList = new CountResultList();
        foreach($this->DrawingNumbers3list as $DrawingNumbers3) {
            $Numbers = $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers();
            $CountResultList->addCountResult($Numbers);
        }
        return $CountResultList->sortByCount();
    }

    public function countBoxNumbers3()
    {        
        $CountResultList = new CountResultList();
        foreach($this->DrawingNumbers3list as $DrawingNumbers3) {
            $Numbers = $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers();
            $CountResultList->addCountResult($Numbers,'box');
        }
        return $CountResultList->sortByCount();
    }

    public function countSerialNumbers3()
    {
        $array = $this->DrawingNumbers3list->getResultNumbersAsArray();
        $countResult = array_count_values($array);

        $result = [];
        foreach($array as $key => $item) {
            if ($key + 1 >= count($array)) {
                continue ;
            }
            $numbers = $item;
            $numbersNext = $array[$key+1];
            $result[] = $numbers."->".$numbersNext;
            
        }
        
        $result = array_count_values($result);
        arsort($result);
        //var_dump($result); 
    }
}
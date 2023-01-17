<?php

namespace App\Models\Entities\Statistics;

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

    // 重くて無理
    // public function countDoubleSerialNumbers3()
    // {        
    //     $result = [];
    //     foreach($this->DrawingNumbers3list as $DrawingNumbers3First) {
    //         $numbersFirst = $DrawingNumbers3First->getDrawingNumbers3Result()->getNumbers()->toString();
    //         foreach ($this->DrawingNumbers3list as $DrawingNumbers3Second) {
    //             $numbersSecond = $DrawingNumbers3Second->getDrawingNumbers3Result()->getNumbers()->toString();
    //             $string = implode("→",[$numbersFirst,$numbersSecond]);
    //             if (array_key_exists($string, $result)) {
    //                 $result[$string] += 1;
    //             } else {
    //                 $result[$string] = 1;
    //             }
    //         }
    //     }
    //     arsort($result);
    //     return $result;
    // }
}
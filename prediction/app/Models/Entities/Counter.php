<?php

namespace App\Models\Entities;

class Counter {

    private $DrawingNumbers3list = '';

    public function __construct($DrawingNumbers3list)
    {
        $this->DrawingNumbers3list = $DrawingNumbers3list;
    }

    public function countStraightNumbers3($border)
    {        
        $result = [];
        foreach($this->DrawingNumbers3list as $DrawingNumbers3) {
            $numbers = $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers()->toString();
            if (array_key_exists($numbers,$result)) {
                $result[$numbers] += 1;
            } else {
                $result[$numbers] = 1;
            }
        }
        arsort($result);
        return $result;
    }

    public function countBoxNumbers3()
    {        
        $result = [];
        foreach($this->DrawingNumbers3list as $DrawingNumbers3) {
            $numbers = $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers()->toString();
            $stringParts = str_split($numbers);
            sort($stringParts);
            $numbers = implode($stringParts);
            if (array_key_exists($numbers,$result)) {
                $result[$numbers] += 1;
            } else {
                $result[$numbers] = 1;
            }
        }
        arsort($result);
        return $result;
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
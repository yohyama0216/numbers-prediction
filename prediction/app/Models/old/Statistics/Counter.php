<?php

namespace App\Models\Entities\Statistics;

use App\Models\Entities\Common;

class Counter
{
    private $drawingNumbers3list = '';

    public function __construct($drawingNumbers3list)
    {
        $this->DrawingNumbers3list = $drawingNumbers3list;
    }

    public function countStraightNumbers3()
    {
        $array = $this->DrawingNumbers3list->getResultNumbersAsArray();
        $result = array_count_values($array);
        arsort($result);
        return $result;
    }

    public function countBoxNumbers3()
    {
        $array = $this->DrawingNumbers3list->getResultNumbersAsArray();
        array_walk($array,
        $result = array_count_values($array);
        arsort($result);
        return $result;
    }

    // 不要（有用なデータがなかったため）
    public function countSerialNumbers3()
    {
        $array = $this->DrawingNumbers3list->getResultNumbersAsArray();


        $result = [];
        foreach ($array as $key => $item) {
            if ($key + 1 >= count($array)) {
                continue ;
            }
            $numbers = $item;
            $numbersNext = $array[$key + 1];
            $result[] = $numbers . "->" . $numbersNext;
        }

        $result = array_count_values($result);
        arsort($result);
        return $result;
        //var_dump($result);
    }

    // 桁ごとのカウント

    //
}

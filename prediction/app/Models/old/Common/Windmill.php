<?php

namespace App\Models\Entities\Common;

class Windmill {

    /**
     * 百の桁：0 9 8 7 6 5 4 3 2 1
     * 十の桁：0 3 6 9 2 5 8 1 4 7
     * 一の桁：0 1 2 3 4 5 6 7 8 9
     */
    public static function getUraNumber($numbers)
    {
        $uraList = [
            0 => 5,
            1 => 6,
            2 => 7,
            3 => 8,
            4 => 9,
            5 => 0,
            6 => 1,
            7 => 2,
            8 => 3,
            9 => 4,
        ];

        foreach(str_split($numbers) as $number) {
            $uraNumbers[] = $uraList[$number];
        }
        return implode($uraNumbers);
    }
}
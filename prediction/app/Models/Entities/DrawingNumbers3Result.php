<?php

namespace App\Models\Entities;

use DateTime;

class DrawingNumbers3Result {
    private $numbersType = 3;
    private $Numbers = null;
    private $PrizeNumbers3 = null;

    public function __construct($Numbers, $PrizeNumbers3)
    {
        $this->Numbers = $Numbers;
        $this->PrizeNumbers3 = $PrizeNumbers3;
    }

    public function getNumbers()
    {
        return $this->Numbers;
    }

    public function isStraightHit($Numbers)
    {
        return $this->Numbers->toString() == $Numbers->toString();
    }

    public function isBoxHit($Numbers)
    {
        $arr1 = str_split($this->Numbers->toString());
        sort($arr1);
        $arr2 = str_split($Numbers->toString());
        sort($arr2);        
        return implode($arr1) == implode($arr2);
    }
}

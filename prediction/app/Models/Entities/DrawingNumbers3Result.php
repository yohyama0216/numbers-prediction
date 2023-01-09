<?php

namespace App\Models\Entities;

use DateTime;

class DrawingNumbers3Result {
    private $numbersType = 3;
    private $Numbers = null;
    private $straightPrize = 0;
    private $boxPrize = 0;
    private $setPrize = 0;
    private $miniPrize = 0;

    public function __construct($Numbers, $straightPrize, $boxPrize, $setPrize, $miniPrize)
    {
        $this->Numbers = $Numbers;
        $this->straightPrize = $straightPrize;
        $this->boxPrize = $boxPrize;
        $this->setPrize = $setPrize;
        $this->miniPrize = $miniPrize;
    }

    public function getNumbers()
    {
        return $this->Numbers;
    }

    public function getStraightPrize()
    {
        return $this->straightPrize;
    }

    public function getBoxPrize()
    {
        return $this->boxPrize;
    }

    public function getSetPrize()
    {
        return $this->setPrize;
    }

    public function getMiniPrize()
    {
        return $this->miniPrize;
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

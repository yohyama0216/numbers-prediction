<?php

namespace App\Models\Entities\Backtest;

use ArrayObject;
use App\Models\Entities\Common;

class BuyNumbers3List extends ArrayObject{
    private $Numbers = '';
    private $size = 1;
    private CONST YEN_PER_SIZE = 200;

    public function __construct($Numbers)
    {
        $this->Numbers = $Numbers;
    }

    public function fromArray($array)
    {

    }

    public function getNumbers()
    {
        return $this->Numbers;
    }

    public function toString()
    {
        return $this->Numbers->toString();
    }

    public function getSize()
    {
        return $this->size;
    }

    public function calcCost()
    {
        return $this->size * self::YEN_PER_SIZE;
    }

    public static function createSameDigitBuyNumbers3()
    {
        $numbers = range(111,999);
        foreach($numbers as $number) {
            $BuyNumbers3List[] = new BuyNumbers3(new Common\Numbers3($number),1);
        }
        return $BuyNumbers3List;
    }
}

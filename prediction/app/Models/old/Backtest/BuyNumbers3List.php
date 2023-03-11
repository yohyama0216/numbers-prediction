<?php

namespace App\Models\Entities\Backtest;

use ArrayObject;
use App\Models\Entities\Common;

class BuyNumbers3List extends ArrayObject
{
    public function addBuyNumbers3($buyNumbers3)
    {
        $this[] = $buyNumbers3;
        return $this;
    }

    public static function createSameDigitBuyNumbers3()
    {
        $numbers = ["000", "111", "222", "333", "444", "555", "666", "777", "888", "999"];
        $buyNumbers3List = new BuyNumbers3List();
        foreach ($numbers as $number) {
            $buyNumbers3List->addBuyNumbers3(new BuyNumbers3(new Common\Numbers3($number), 1));
        }
        return $buyNumbers3List;
    }
}

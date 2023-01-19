<?php

namespace App\Models\Entities\Backtest;

use ArrayObject;
use App\Models\Entities\Common;

class BuyNumbers3List extends ArrayObject{

    public function addBuyNumbers3($BuyNumbers3)
    {
        $this[] = $BuyNumbers3;
        return $this;
    }

    public static function createSameDigitBuyNumbers3()
    {
        $numbers = ["000","111","222","333","444","555","666","777","888","999"];
        $BuyNumbers3List = new BuyNumbers3List();
        foreach($numbers as $number) {
            $BuyNumbers3List->addBuyNumbers3(new BuyNumbers3(new Common\Numbers3($number),1));
        }
        return $BuyNumbers3List;
    }
}

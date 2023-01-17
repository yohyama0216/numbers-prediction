<?php

namespace App\Models\Entities\Backtest;

use App\Models\Entities\Common;

class Backtester {

    private $DrawingNumbers3list = '';

    public function __construct($DrawingNumbers3list)
    {
        $this->DrawingNumbers3list = $DrawingNumbers3list;
    }

    public function buySameDigitNumbers()
    {        
        $numbers = range(111,999);
        foreach($numbers as $number) {
            $BuyNumbers3List[] = new BuyNumbers3(new Common\Numbers3($number),1);
        }
        $hitNumbers3ResultList = [];
        foreach($this->DrawingNumbers3list as $DrawingNumbers3) {
            $hitNumbers3ResultList[] = new HitNumbers3Result($DrawingNumbers3,$BuyNumbers3List);
        }
        return new HitNumbers3ResultList($hitNumbers3ResultList);
    }

    /**
     * 再頻出の数字だけを買う。（赤字）
     */
    public function buyFluentNumbers()
    {        
        $numbers = ['089'];
        foreach($numbers as $number) {
            $BuyNumbers3List[] = new BuyNumbers3(new Common\Numbers3($number),1);
        }
        $hitNumbers3ResultList = [];
        foreach($this->DrawingNumbers3list as $DrawingNumbers3) {
            $hitNumbers3ResultList[] = new HitNumbers3Result($DrawingNumbers3,$BuyNumbers3List);
        }
        return new HitNumbers3ResultList($hitNumbers3ResultList);
    }
}
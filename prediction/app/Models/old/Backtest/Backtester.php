<?php

namespace App\Models\Entities\Backtest;

use App\Models\Entities\Common;

class Backtester
{
    private $drawingNumbers3list = '';

    public function __construct($drawingNumbers3list)
    {
        $this->DrawingNumbers3list = $drawingNumbers3list;
    }

    public function buySameDigitNumbers()
    {
        $buyNumbers3List = BuyNumbers3List::createSameDigitBuyNumbers3();
        $hitNumbers3ResultList = new HitNumbers3ResultList();
        foreach ($this->DrawingNumbers3list as $drawingNumbers3) {
            $hitNumbers3ResultList[] = HitChecker::check($drawingNumbers3, $buyNumbers3List);
        }
        return $hitNumbers3ResultList->calcTotalResult();
    }

    // 駄目だったケース
    // 再頻出の数字だけを買う
}

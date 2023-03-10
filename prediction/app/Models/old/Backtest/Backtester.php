<?php

namespace App\Models\Entities\Backtest;

use App\Models\Entities\Common;

class Backtester
{
    private $DrawingNumbers3list = '';

    public function __construct($DrawingNumbers3list)
    {
        $this->DrawingNumbers3list = $DrawingNumbers3list;
    }

    public function buySameDigitNumbers()
    {
        $BuyNumbers3List = BuyNumbers3List::createSameDigitBuyNumbers3();
        $HitNumbers3ResultList = new HitNumbers3ResultList();
        foreach ($this->DrawingNumbers3list as $DrawingNumbers3) {
            $HitNumbers3ResultList[] = HitChecker::check($DrawingNumbers3, $BuyNumbers3List);
        }
        return $HitNumbers3ResultList->calcTotalResult();
    }

    // 駄目だったケース
    // 再頻出の数字だけを買う
}

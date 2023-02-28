<?php

namespace App\Services;

use App\Models\Entities;
use App\Models\Entities\Backtest\Backtester;
use App\Repositories\DrawingResultRepository;

class BacktestService
{
    private $DrawingResultRepository = null;

    public function __construct(
        DrawingResultRepository $DrawingResultRepository
    )
    {
        $this->DrawingResultRepository = $DrawingResultRepository;
    }

    public function buySameDigitNumbers()
    {        
        $numbersList = $this->getSameDigitNumbers(3);
        // todo 買う処理？
        // foreach($this->testDrawingResultData as $DrawingResult) {
        //     $HitNumbers3ResultList[] = HitChecker::check($DrawingNumbers3,$BuyNumbers3List);
        // }
        // return $HitNumbers3ResultList->calcTotalResult();
    }

    /**
     * 同じ数字　Serviceに書くべきかは議論の余地あり　3桁4桁でも出来るようにすべき
     */
    private function getSameDigitNumbers($numbersType)
    {
        return ["000","111","222","333","444","555","666","777","888","999"];
    }
}
<?php

namespace App\Services;

use App\Models\Entities;
use App\Models\Entities\Backtest\Backtester;
use App\Repositories;

class BacktestService
{
    private $DrawingNumbers3List = null;

    public function __construct($DrawingNumbers3List)
    {
        $this->DrawingNumbers3List = $DrawingNumbers3List;
    }

    public function execute()
    {
        $Backtester = new Backtester($this->DrawingNumbers3List);
        return $Backtester->buySameDigitNumbers();
    }
}
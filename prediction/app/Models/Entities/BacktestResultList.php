<?php

namespace App\Models\Entities;

use App\Models\Value;

class BacktestResultList
{
    private Value\Round $round;
    private Value\Numbers $numbers;
    private Value\Prize $prize;

    // DrawingResult と BuyNumers と BuyNumbersResult?

    private function __construct()
    {
        // todo
    }
}

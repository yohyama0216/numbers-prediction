<?php

namespace App\Models\Entities\Backtest;

class BuyNumbers3 {
    private $Numbers = '';
    private $size = 1;
    private CONST YEN_PER_SIZE = 200;

    public function __construct($Numbers,$size)
    {
        $this->Numbers = $Numbers;
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
}

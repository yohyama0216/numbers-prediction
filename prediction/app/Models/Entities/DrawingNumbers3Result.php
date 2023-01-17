<?php

namespace App\Models\Entities;

use DateTime;

class DrawingNumbers3Result {
    private $numbersType = 3;
    private $Numbers = null;
    private $PrizeNumbers3 = null;

    public function __construct($Numbers, $PrizeNumbers3)
    {
        $this->Numbers = $Numbers;
        $this->PrizeNumbers3 = $PrizeNumbers3;
    }

    public function getNumbers()
    {
        return $this->Numbers;
    }
}

<?php

namespace App\Models\Entities\Common;

use DateTime;

class DrawingNumbers3Result
{
    private $numbersType = 3;
    private $numbers = null;
    private $prizeNumbers3 = null;

    public function __construct($numbers, $prizeNumbers3)
    {
        $this->Numbers = $numbers;
        $this->PrizeNumbers3 = $prizeNumbers3;
    }

    public function getNumbers()
    {
        return $this->Numbers;
    }
}

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
        $this->numbers = $numbers;
        $this->prizeNumbers3 = $prizeNumbers3;
    }

    public function getNumbers()
    {
        return $this->numbers;
    }
}

<?php

namespace App\Models\Entities;

class Numbers3Result {
    private $numbersType = 3;
    private $round = "";
    private $date = "";
    private $Numbers = null;

    public function __construct($round, $date, $numbers)
    {
        if ($this->numbersType != strlen($numbers)) {
            return null;
        }
        $this->round = $round;
        $this->date = $date;
        $this->Numbers = new Numbers3($numbers);
    }

    public function getNumbersType()
    {
        return $this->numbersType;
    }

    public function getRound()
    {
        return $this->round;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getNumbers()
    {
        return $this->Numbers;
    }
}

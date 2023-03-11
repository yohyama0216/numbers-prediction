<?php

namespace App\Models\Entities;

use App\Models\Value\Round;

class BuyNumbers
{
    private Round $round;
    private $type;
    private $numbers = '';
    private $size;
    private const YEN_PER_SIZE = 200;

    public function __construct($round, $type, $numbers, $size = 1)
    {
        $this->round = $round;
        $this->type = $type;
        $this->numbers = $numbers;
        $this->size = $size;
    }

    public function getRound()
    {
        return $this->round;
    }

    public function getNumbers()
    {
        return $this->numbers;
    }

    public function toString()
    {
        return $this->numbers->toString();
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getType()
    {
        return $this->type;
    }

    public function calcCost()
    {
        return $this->size * self::YEN_PER_SIZE;
    }
}

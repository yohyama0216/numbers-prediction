<?php

namespace App\Models\Entities;

use App\Models\Value\Round;

class BuyNumbers
{
    private Round $Round;
    private $type;
    private $Numbers = '';
    private $size;
    private const YEN_PER_SIZE = 200;

    public function __construct($Round, $type, $Numbers, $size = 1)
    {
        $this->Round = $Round;
        $this->type = $type;
        $this->Numbers = $Numbers;
        $this->size = $size;
    }

    public function getRound()
    {
        return $this->Round;
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

    public function getType()
    {
        return $this->type;
    }

    public function calcCost()
    {
        return $this->size * self::YEN_PER_SIZE;
    }
}

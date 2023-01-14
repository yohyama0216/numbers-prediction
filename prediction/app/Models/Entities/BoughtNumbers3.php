<?php

namespace App\Models\Entities;

class BoughtNumbers3 {
    private $Numbers = null;
    private $size = 1;
    private CONST COST_PER_UNIT = 200; 

    public function __construct($Numbers,$size)
    {
        $this->Numbers = $Numbers;
        $this->size = $$size;
    }

    public function getNumbers()
    {
        return $this->Numbers;
    }

    public function getCost()
    {
        return $this->size * self::COST_PER_UNIT;
    }
}

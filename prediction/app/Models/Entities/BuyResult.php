<?php

namespace App\Models\Entities;

use App\Models\Entities\BuyNumbers;
// use App\Models\Value\BuyNumbers;

class BuyResult
{
    private BuyNumbers $Numbers;
    private string $hit;
    private int $return;

    public function __construct($Numbers,$hit,$return)
    {
        $this->Numbers = $Numbers;
        $this->hit = $hit;
        $this->return = $return;
    }

    public function getHit()
    {
        return $this->hit;
    }

    public function getReturn()
    {
        return $this->return;
    }
}
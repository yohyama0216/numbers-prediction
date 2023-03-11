<?php

namespace App\Models\Entities;

use App\Models\Entities\BuyNumbers;

class BuyResult
{
    private BuyNumbers $buyNumbers;
    private string $hit;
    private int $return;

    public function __construct($buyNumbers, $hit, $return)
    {
        $this->BuyNumbers = $buyNumbers;
        $this->hit = $hit;
        $this->return = $return;
    }

    public function getBuyNumbers()
    {
        return $this->BuyNumbers;
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

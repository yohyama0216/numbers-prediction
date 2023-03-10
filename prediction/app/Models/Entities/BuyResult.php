<?php

namespace App\Models\Entities;

use App\Models\Entities\BuyNumbers;

class BuyResult
{
    private BuyNumbers $BuyNumbers;
    private string $hit;
    private int $return;

    public function __construct($BuyNumbers, $hit, $return)
    {
        $this->BuyNumbers = $BuyNumbers;
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

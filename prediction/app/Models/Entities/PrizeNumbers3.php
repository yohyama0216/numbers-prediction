<?php

namespace App\Models\Entities;

use DateTime;

class PrizeNumbers3 {
    private $straightPrize = 0;
    private $boxPrize = 0;
    private $setPrize = 0;
    private $miniPrize = 0;

    public function __construct($straightPrize, $boxPrize, $setPrize, $miniPrize)
    {
        $this->straightPrize = $straightPrize;
        $this->boxPrize = $boxPrize;
        $this->setPrize = $setPrize;
        $this->miniPrize = $miniPrize;
    }

    public function getStraightPrize()
    {
        return $this->straightPrize;
    }

    public function getBoxPrize()
    {
        return $this->boxPrize;
    }

    public function getSetPrize()
    {
        return $this->setPrize;
    }

    public function getMiniPrize()
    {
        return $this->miniPrize;
    }
}

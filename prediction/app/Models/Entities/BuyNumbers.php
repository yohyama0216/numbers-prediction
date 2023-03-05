<?php

namespace App\Models\Entities;

use App\Models\Value\Round;

class BuyNumbers {
    private Round $Round;
    private $type;
    private $Numbers = '';
    private $size;
    private CONST YEN_PER_SIZE = 200;
    private $return ;

    public function __construct($Round, $type, $Numbers,$size=1)
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

    public function checkResult($DrawingResult)
    {
        // boxの場合は？
        if ($DrawingResult->getNumbers == $this->Numbers->toString()) {
            $this->return = $this->size * $DrawingResult->getPrize('straight');
        }
        
        // コスト分
        $this->return -= $this->calcCost();
    }
}

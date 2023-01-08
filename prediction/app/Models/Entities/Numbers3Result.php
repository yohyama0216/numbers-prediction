<?php

namespace App\Models\Entities;

use DateTime;

class Numbers3Result {
    private $numbersType = 3;
    private $round = "";
    private $DateTime = null;
    private $Numbers = null;

    public function __construct($round, $date, $numbers)
    {
        if ($this->numbersType != strlen($numbers)) {
            return null;
        }
        $this->round = $round;
        $this->DateTime = new DateTime($date);
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
        return $this->DateTime->format('Y/m/d');
    }

    public function getNumbers()
    {
        return $this->Numbers;
    }

    public function checkNumbers($numbersList)
    {
        $hitResult = [];
        $straightReturn = 90000;
        $boxReturn = 15000;
        $cost = count($numbersList) * 200;
        foreach($numbersList as $numbers) {
            if ($this->isStraightHit($numbers)) {
                $hitResult[] = new HitResult($this,'straight',$straightReturn,$cost);
            } else if ($this->isBoxHit($numbers)) {
                $hitResult[] = new HitResult($this,'box',$boxReturn,$cost);
            } else {
                $hitResult[] = new HitResult($this,'lose',0,$cost);
            }
        }
        return $hitResult;
    }

    public function isStraightHit($numbers)
    {
        return $this->Numbers->toString() == $numbers;
    }

    public function isBoxHit($numbers)
    {
        $arr1 = str_split($this->Numbers->toString());
        sort($arr1);
        $arr2 = str_split($numbers);
        sort($arr2);        
        return implode($arr1) == implode($arr2);
    }
}

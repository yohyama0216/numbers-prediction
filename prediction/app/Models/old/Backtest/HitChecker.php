<?php

namespace App\Models\Entities\Backtest;

use App\Models\Entities\Common;

class HitChecker
{
    public static function check($drawingNumbers3, $buyNumbers3List)
    {
        $hitNumbers3Result = new HitNumbers3Result($drawingNumbers3, $buyNumbers3List);
        foreach ($buyNumbers3List as $buyNumbers3) {
            $numbers = $buyNumbers3->getNumbers();
            $numbersHit = $drawingNumbers3->getDrawingNumbers3Result()->getNumbers();
            if ($numbersHit->isSameStraight($numbers)) {
                $straightReturn = 90000;
                $hitNumbers3Result->addHitStraightCount();
                $hitNumbers3Result->addReturn($straightReturn);
            } elseif ($numbersHit->isSameBox($numbers)) {
                $boxReturn = 10000;
                $hitNumbers3Result->addHitBoxCount();
                $hitNumbers3Result->addReturn($boxReturn);
            }
            $hitNumbers3Result->addCost($buyNumbers3->calcCost());
        }
        return $hitNumbers3Result;
    }
}

<?php

namespace App\Models\Entities\Backtest;

use App\Models\Entities\Common;

class HitChecker {

    public static function check($DrawingNumbers3, $BuyNumbers3List)
    {
        $HitNumbers3Result = new HitNumbers3Result($DrawingNumbers3,$BuyNumbers3List);
        foreach($BuyNumbers3List as $BuyNumbers3) {
            $Numbers = $BuyNumbers3->getNumbers();
            $NumbersHit = $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers();
            if ($Numbers->isSameStraight($NumbersHit)) {
                $straightReturn = 90000;
                $HitNumbers3Result->addHitStraightCount();
                $HitNumbers3Result->addReturn($straightReturn);
            } else if ($Numbers->isSameBox($NumbersHit)) {
                $boxReturn = 10000;
                $HitNumbers3Result->addHitBoxCount();
                $HitNumbers3Result->addReturn($boxReturn);
            }
            $HitNumbers3Result->addCost($BuyNumbers3->calcCost());
        }
        return $HitNumbers3Result;
    }
}
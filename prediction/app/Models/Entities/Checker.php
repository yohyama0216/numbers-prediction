<?php

namespace App\Models\Entities;

use App\Models\Algorhythm\Algorhythm;

class Checker {

    public function check($DrawingNumbers3,$BoughtNumbers3Group)
    {
        $round = $BoughtNumbers3Group->getDrawingNumbers3()->getRound();

        
        $hitResults = [];
        foreach($BoughtNumbers3Group->getBoughtNumbers3List() as $BoughtNumbers3) {

            $DrawingNumbers3 = $DrawingNumbers3->findByRound($round);
            $hitResults[] = $DrawingNumbers3->check($BoughtNumbers3Group->getBoughtNumbersList());
        }
        return new HitResultList($hitResults);
    }   
}
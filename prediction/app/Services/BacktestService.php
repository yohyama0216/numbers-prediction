<?php

namespace App\Services;

use App\Models\Entities;
use App\Repositories;

class BacktestService
{
    private $DrawingNumbers3List = null;
    private $algorhythm = null;

    public function __construct($DrawingNumbers3List,$algorhythm)
    {
        $this->DrawingNumbers3List = $DrawingNumbers3List;
        $this->algorhythm = $algorhythm;
    }

    public function execute()
    {
        $hitResultList = [];
        foreach($this->DrawingNumbers3List as $key => $DrawingNumbers3) {
            //$prevResultList = $this->resultList->getPrevNumbers3ResultList($key+1,5);
            $numbersList = $this->algorhythm->predict(); //正しくはGenerateMyNumbers;
            // $hitResultList[]??/ = $DrawingNumbers3->calc($MyNumbers);

            $straightReturn = 90000;
            $boxReturn = 15000;
            $cost = count($numbersList) * 200;
            foreach($numbersList as $numbers) {
                if ($DrawingNumbers3->getDrawingNumbers3Result()->isStraightHit($numbers)) {
                    $hitResultList[] = new Entities\HitResult($DrawingNumbers3,'straight',$straightReturn,$cost);
                } else if ($DrawingNumbers3->getDrawingNumbers3Result()->isBoxHit($numbers)) {
                    $hitResultList[] = new Entities\HitResult($DrawingNumbers3,'box',$boxReturn,$cost);
                } else {
                    $hitResultList[] = new Entities\HitResult($DrawingNumbers3,'lose',0,$cost);
                }
            }
        }
        return new Entities\HitResultList($hitResultList);
    }
}
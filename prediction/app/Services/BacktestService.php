<?php

namespace App\Services;

use App\Models\Entities;
use App\Repositories;

class BacktestService
{
    private $resultList = null;
    private $algorhythm = null;

    public function __construct($resultList,$algorhythm)
    {
        $this->resultList = $resultList;
        $this->algorhythm = $algorhythm;
    }

    public function execute()
    {
        $hitResultList = [];
        $numbersList = $this->algorhythm->predict();
        foreach($this->resultList as $result) {

            $straightReturn = 90000;
            $boxReturn = 15000;
            $cost = count($numbersList) * 200;
            foreach($numbersList as $numbers) {
                if ($result->isStraightHit($numbers)) {
                    $hitResultList[] = new Entities\HitResult($result,'straight',$straightReturn,$cost);
                } else if ($result->isBoxHit($numbers)) {
                    $hitResultList[] = new Entities\HitResult($result,'box',$boxReturn,$cost);
                } else {
                    $hitResultList[] = new Entities\HitResult($result,'lose',0,$cost);
                }
            }
        }
        return new Entities\HitResultList($hitResultList);
    }
}
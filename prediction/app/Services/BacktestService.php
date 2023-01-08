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
        foreach($this->resultList as $result) {
            $hits = $result->checkNumbers($this->algorhythm->predict());
            if (empty($hits)) {
                continue ;
            }
            foreach($hits as $hit) {
                $hitResultList[] = $hit;
            }
        }
        return new Entities\HitResultList($hitResultList);
    }
}
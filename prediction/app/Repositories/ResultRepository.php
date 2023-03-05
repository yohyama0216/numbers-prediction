<?php

namespace App\Repositories;

use App\Models\Entities\DrawingResult;
use App\Models\Entities\DrawingResultList;
use App\Models\Entities\CountResult;
use App\Models\Entities\CountResultList;
use App\Models\Eloquent\Drawing;
use App\Models\Eloquent\Result;
use App\Models\Value\Round;
use App\Models\Value\Date;
use App\Models\Value\Numbers;
use App\Models\Value\Prize;
use App\Models\Value\Money;
use Illuminate\Support\Facades\DB;

class ResultRepository
{
    // public function getCountByNumbers($numbersList)
    // {
    //     $countList = [];
    //     $query = Result::groupBy('numbers')
    //                 ->select('browser', DB::raw('numbers, count(*) as count'));
    //     if ($numbersList) {
    //         $query = $query->whereIn('numbers',$numbersList);
    //     }

    //     $countList = $query->get();
    //     return $this->toCountResultList($countList);
    // }

    public function getCountList($length,$order='desc')
    {
        $countList = [];
        $query = Result::groupBy('numbers')
                    ->select('browser', DB::raw('numbers, count(*) as count'))
                    ->orderBy('count',$order)
                    ->limit($length);
        $countList = $query->get();
        return $this->toCountResultList($countList);
    }

    private function toCountResultList($array)
    {
        $list = [];
        foreach($array as $item) {
            $list[] = new CountResult($item['numbers'],$item['count']);
        }
        return new CountResultList($list);
    }
}
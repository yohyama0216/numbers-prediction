<?php

namespace App\Services;

use App\Models\Eloquent\Result;
use App\Models\Entities\CountResult;
use App\Models\Entities\CountResultList;
use Illuminate\Support\Facades\DB;

class CountService
{
    public function count($numbersList)
    {
        $countList = [];
        $query = Result::groupBy('numbers')
                    ->select('browser', DB::raw('numbers, count(*) as count'));
        if ($numbersList) {
            $query = $query->whereIn('numbers',$numbersList);
        }
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
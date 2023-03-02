<?php

namespace App\Services;

use App\Models\Eloquent\Result;
use App\Models\Entities\CountResult;
use App\Models\Entities\CountResultList;

class CountService
{
    public function count($numbersList)
    {
        $countList = [];
        foreach($numbersList as $numbers) {
            $countList[] = [
                'numbers' => $numbers,
                'count' => Result::where('numbers','=',$numbers)->count(),
            ];
        }
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
<?php

namespace App\Repositories;

use App\Models\Entities\DrawingResult;
use App\Models\Entities\DrawingResultList;
use App\Models\Eloquent\Drawing;
use App\Models\Value\Round;
use App\Models\Value\Date;
use App\Models\Value\Numbers;
use App\Models\Value\Prize;
use App\Models\Value\Money;

class DrawingRepository
{
    public function findAll()
    {
        $collection = Drawing::where('id','>',0)->limit(5)->get();
        return $this->toDomainModel($collection);
    }

    public function find($numbers)
    {
        $collection = Drawing::where('numbers','=',$numbers)->limit(10)->get();
        return $collection;
    }

    private function toDomainModel($collection)
    {
        $list = [];
        foreach($collection as $item) {
            $list[] = new DrawingResult(
                new Round($item['round']),
                new Date($item['date']),
                new Numbers($item['result']['numbers']),
                new Prize(
                    new Money($item['result']['prize']['straight']),
                    new Money($item['result']['prize']['box']),
                    new Money($item['result']['prize']['set']),
                    new Money($item['result']['prize']['mini'])                  
                )
            );
        }
        return new DrawingResultList($list);
    }
}
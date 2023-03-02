<?php

namespace App\Services;

use App\Models\Entities\DrawingResult;
use App\Models\Entities\DrawingResultList;
use App\Models\Eloquent\Drawing;
use App\Models\Value\Round;
use App\Models\Value\Date;
use App\Models\Value\Numbers;
use App\Models\Value\Prize;
use App\Models\Value\Money;

class SearchService
{
    public function find($SearchCondition)
    {
        $collection = Drawing::all();
        $filtered = $collection->filter(function($item) use ($SearchCondition){
            return $SearchCondition->match($item);
        });
        return $this->toDrawingResultList($SearchCondition,$filtered->slice(0,20));
    }

    private function toDrawingResultList($SearchCondition,$collection)
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
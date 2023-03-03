<?php

namespace App\Services;

use App\Models\Entities\DrawingResult;
use App\Models\Entities\DrawingResultList;
use App\Models\Eloquent\Drawing;
use App\Models\Eloquent\Result;
use App\Models\Value\Round;
use App\Models\Value\Date;
use App\Models\Value\Numbers;
use App\Models\Value\Prize;
use App\Models\Value\Money;

class SearchService
{
    public function find($SearchCondition)
    {
        $collection = Result::with(['drawing','prize'])->get();
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
                new Round($item['drawing']['round']),
                new Date($item['drawing']['date']),
                new Numbers($item['numbers']),
                new Prize(
                    new Money($item['prize']['straight']),
                    new Money($item['prize']['box']),
                    new Money($item['prize']['set']),
                    new Money($item['prize']['mini'])                  
                )
            );
        }
        return new DrawingResultList($list);
    }
}
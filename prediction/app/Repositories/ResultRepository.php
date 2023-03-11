<?php

namespace App\Repositories;

use App\Models\Entities\DrawingResult;
use App\Models\Entities\DrawingResultList;
use App\Models\Entities\CountResult;
use App\Models\Entities\CountResultList;
use App\Models\Eloquent\Result;
use App\Models\Value\Round;
use App\Models\Value\Date;
use App\Models\Value\Numbers;
use App\Models\Value\Prize;
use App\Models\Value\Money;
use Illuminate\Support\Facades\DB;

class ResultRepository
{
    public function getCountList($length, $order = 'desc')
    {
        $countList = [];
        $query = Result::groupBy('numbers')
            ->select('browser', DB::raw('numbers, count(*) as count'))
            ->orderBy('count', $order)
            ->limit($length);
        $countList = $query->get();
        return $this->toCountResultList($countList);
    }

    private function toCountResultList($array)
    {
        $list = [];
        foreach ($array as $item) {
            $list[] = new CountResult($item['numbers'], $item['count']);
        }
        return new CountResultList($list);
    }

    public function find($searchCondition)
    {
        $collection = Result::with(['drawing', 'prize'])->get();
        $filtered = $collection->filter(function ($result) use ($searchCondition) {
            return $searchCondition->match($result);
        });

        return $this->toDrawingResultList($searchCondition, $filtered->slice(0, 20));
    }

    public function findAll()
    {
        $collection = Result::with(['drawing', 'prize'])->get();
        return $this->toDrawingResultList(null, $collection);
    }

    private function toDrawingResultList($searchCondition, $collection)
    {
        $list = [];
        foreach ($collection as $item) {
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

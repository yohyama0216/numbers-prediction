<?php

namespace App\Repositories;

use App\Models\Entities\DrawingResult;
use App\Models\Entities\DrawingResultList;
use App\Models\Entities\ConsecutiveResult;
use App\Models\Entities\ConsecutiveResultList;
use App\Models\Entities\CountResult;
use App\Models\Entities\CountResultList;
use App\Models\Eloquent\Numbers3Result;
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
        $query = Numbers3Result::groupBy('numbers')
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

    public function findSingle($searchCondition)
    {
        $table = $searchCondition->getTargetTable();
        $query = DB::table($table);
        return  $this->toDrawingResultList($searchCondition, $query->get()->slice(0, 20));
    }

    public function findDouble($searchCondition)
    {
        $query = DB::table('VIEW_DOUBLE_NUMBERS3');
        return $this->toConsecutiveResultList($searchCondition, $query->get()->slice(0, 20));
    }

    public function findAll()
    {
        $collection = Numbers3Result::all();
        return $this->toDrawingResultList(null, $collection);
    }

    private function toConsecutiveResultList($searchCondition, $collection)
    {
        $list = [];
        foreach ($collection as $item) {
            $item = (array)$item;
            $list[] = new ConsecutiveResult(
                $item['consecutive_round'],
                $item['consecutive_date'],
                $item['consecutive_numbers']
            );
        }
        return new ConsecutiveResultList($list);
    }

    private function toDrawingResultList($searchCondition, $collection)
    {
        $list = [];
        foreach ($collection as $item) {
            $item = (array)$item;
            $list[] = new DrawingResult(
                new Round($item['round']),
                new Date($item['date']),
                new Numbers($item['numbers']),
                new Prize(
                    new Money($item['straight']),
                    new Money($item['box']),
                    new Money($item['set']),
                    new Money($item['mini'])
                )
            );
        }
        return new DrawingResultList($list);
    }
}

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

    public function find($table, $searchCondition)
    {
        if ($searchCondition->hasConsecutiveCondition()) {
            $query = DB::table($table . ' as t1')->leftJoin($table . ' as t2', DB::raw('t1.id - 1'), '=', 't2.id')
                ->select(
                    "t1.numbers as t1_numbers",
                    "t2.numbers as t2_numbers",
                    DB::raw("t1.numbers || ' -> ' || t2.numbers as consecutive_numbers"),
                    "t2.round as t2_round",
                    "t1.round as t1_round",
                    DB::raw("t1.round || ' -> ' || t2.round as consecutive_round"),
                    "t2.date as t2_date",
                    "t1.date as t1_date",
                    DB::raw("t1.date || ' -> ' || t2.date as consecutive_date")
                );
            return $this->toConsecutiveResultList($searchCondition, $query->get()->slice(0, 20));
        } else {
            $query = DB::table($table)->whereRaw($searchCondition->createWhereQuery());
            return  $this->toDrawingResultList($searchCondition, $query->get()->slice(0, 20));
        }
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

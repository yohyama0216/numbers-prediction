<?php

namespace App\Repositories;

use App\Models\Entities\Common;

class DrawingNumbers3Repository
{
    private static function getResource()
    {
        $jsonPath = database_path() . "/data/Numbers3ResultList.json";
        if (file_exists($jsonPath)) {
            return json_decode(file_get_contents($jsonPath), true);
        }
        return [];
    }

    public static function findAllHistory()
    {
        $numbersList = self::getResource();
        return $numbersList;
    }

    public static function toEntity() // 名前かえる？
    {
        $numbersList = self::getResource();
        $list = [];
        foreach ($numbersList as $key => $numbers) {
            $prizeNumbers3 = new Common\PrizeNumbers3(0, 0, 0, 0);
            $drawingNumbers3 = new Common\DrawingNumbers3($key, $numbers['date']);
            $drawingNumbers3Result = new Common\DrawingNumbers3Result(
                new Common\Numbers3($numbers['numbers']),
                $prizeNumbers3
            );
            $drawingNumbers3->setDrawingNumbers3Result($drawingNumbers3Result);
            $list[] = $drawingNumbers3;
        }
        return new Common\DrawingNumbers3List($list);
    }
}

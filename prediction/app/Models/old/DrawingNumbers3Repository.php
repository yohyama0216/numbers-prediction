<?php

namespace App\Repositories;

use App\Models\Entities\Common;

class DrawingNumbers3Repository
{
    private static function getResource()
    {
        $jsonPath = database_path()."/data/Numbers3ResultList.json";
        if (file_exists($jsonPath)) {
            return json_decode(file_get_contents($jsonPath),true);
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
        foreach($numbersList as $key => $numbers) {
            $PrizeNumbers3 = new Common\PrizeNumbers3(0,0,0,0);
            $DrawingNumbers3 = new Common\DrawingNumbers3($key,$numbers['date']);
            $DrawingNumbers3Result = new Common\DrawingNumbers3Result(new Common\Numbers3($numbers['numbers']),$PrizeNumbers3);
            $DrawingNumbers3->setDrawingNumbers3Result($DrawingNumbers3Result);
            $list[] = $DrawingNumbers3;
        }
        return new Common\DrawingNumbers3List($list);
    } 
}
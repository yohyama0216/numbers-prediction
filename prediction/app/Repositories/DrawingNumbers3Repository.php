<?php

namespace App\Repositories;

use App\Models\Entities;

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
            $PrizeNumbers3 = new Entities\PrizeNumbers3(0,0,0,0);
            $DrawingNumbers3 = new Entities\DrawingNumbers3($key,$numbers['date']);
            $DrawingNumbers3Result = new Entities\DrawingNumbers3Result(new Entities\Numbers3($numbers['numbers']),$PrizeNumbers3);
            $DrawingNumbers3->setDrawingNumbers3Result($DrawingNumbers3Result);
            $list[] = $DrawingNumbers3;
        }
        return new Entities\DrawingNumbers3List($list);
    } 
}
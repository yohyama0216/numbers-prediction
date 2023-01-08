<?php

namespace App\Repositories;

use App\Models\Entities;

class Numbers3ResultsRepository
{
    private static function getResource()
    {
        $jsonPath = database_path()."/data/numbers3Results.json";
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
            $list[] = new Entities\Numbers3Result($key,$numbers['date'],$numbers['numbers']);
        }
        return new Entities\Numbers3Results($list);
    } 
}
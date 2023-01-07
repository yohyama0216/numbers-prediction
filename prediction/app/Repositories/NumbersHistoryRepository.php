<?php

namespace App\Repositories;

use App\Models\Entities;

class NumbersHistoryRepository
{
    private static function getResource()
    {
        $jsonPath = database_path()."/data/numbers3history.json";
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

    public static function toEntity()
    {
        $numbersList = self::getResource();
        foreach($numbersList as $key => $numbers) {
            $list[] = new Entities\Numbers(strlen($numbers['numbers']),$key,$numbers['date'],$numbers['numbers']);
        }
        return new Entities\NumbersHistory($list);
    } 
}
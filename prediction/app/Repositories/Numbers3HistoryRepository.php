<?php

namespace App\Repositories;

class Numbers3HistoryRepository
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
}
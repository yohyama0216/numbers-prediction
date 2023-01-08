<?php

namespace App\Services;

use App\Models\Entities;
use App\Repositories;

class Numbers3ResultService
{
    public function findAll()
    {
        $Numbers3ResultList = Repositories\Numbers3ResultListRepository::toEntity();
        return $Numbers3ResultList;
    }
}
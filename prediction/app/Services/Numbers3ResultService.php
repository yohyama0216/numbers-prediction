<?php

namespace App\Services;

use App\Models\Entities;
use App\Repositories;

class Numbers3ResultService
{
    private $Numbers3ResultList = null;

    public function __construct()
    {
        $this->Numbers3ResultList = Repositories\Numbers3ResultListRepository::toEntity();
    }

    public function findAll()
    {
        return $this->Numbers3ResultList;
    }

    public function findByNumbers($numbers)
    {
        return $this->Numbers3ResultList->findResultByNumbers($numbers);
    }
}
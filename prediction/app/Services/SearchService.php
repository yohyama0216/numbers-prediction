<?php

namespace App\Services;

use App\Repositories\ResultRepository;
use App\Models\Entities\DrawingResult;
use App\Models\Entities\DrawingResultList;
use App\Models\Eloquent\Drawing;
use App\Models\Eloquent\Result;
use App\Models\Value\Round;
use App\Models\Value\Date;
use App\Models\Value\Numbers;
use App\Models\Value\Prize;
use App\Models\Value\Money;

class SearchService
{
    private $ResultRepository;

    public function __construct(
        ResultRepository $ResultRepository
    )
    {
        $this->ResultRepository = $ResultRepository;
    }

    public function findAll()
    {
        return $this->ResultRepository->findAll();
    }
    

    public function findByCondition($SearchCondition)
    {
        return $this->ResultRepository->find($SearchCondition);
    }

}
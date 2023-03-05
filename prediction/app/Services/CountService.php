<?php

namespace App\Services;

use App\Models\Eloquent\Result;
use App\Models\Entities\CountResult;
use App\Models\Entities\CountResultList;
use App\Repositories\ResultRepository;
use Illuminate\Support\Facades\DB;

class CountService
{
    private $ResultRepository;

    public function __construct(
        ResultRepository $ResultRepository
    )
    {
        $this->ResultRepository = $ResultRepository;
    }
    
    // public function countByNumbers($numbers)
    // {
    //     return $this->ResultRepository->getCountByNumbers($numbers);
    // }

    public function getCountTop5()
    {
        return $this->ResultRepository->getCountList(5,'desc');
    }

    public function getCountWorst5()
    {
        return $this->ResultRepository->getCountList(5,'desc');
    }
}
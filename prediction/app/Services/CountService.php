<?php

namespace App\Services;

use App\Repositories\ResultRepository;

class CountService
{
    private $ResultRepository;

    public function __construct(
        ResultRepository $ResultRepository
    ) {
        $this->ResultRepository = $ResultRepository;
    }

    public function getCountTop5()
    {
        return $this->ResultRepository->getCountList(5, 'desc');
    }

    public function getCountWorst5()
    {
        return $this->ResultRepository->getCountList(5, 'desc');
    }
}

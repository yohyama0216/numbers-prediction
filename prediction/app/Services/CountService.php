<?php

namespace App\Services;

use App\Repositories\ResultRepository;

class CountService
{
    private $resultRepository;

    public function __construct(
        ResultRepository $resultRepository
    ) {
        $this->resultRepository = $resultRepository;
    }

    public function getCountTop5()
    {
        return $this->resultRepository->getCountList(5, 'desc');
    }

    public function getCountWorst5()
    {
        return $this->resultRepository->getCountList(5, 'desc');
    }
}

<?php

namespace App\Services;

use App\Repositories\ResultRepository;

class SearchService
{
    private $ResultRepository;

    public function __construct(
        ResultRepository $ResultRepository
    ) {
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

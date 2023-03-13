<?php

namespace App\Services;

use App\Repositories\ResultRepository;

class SearchService
{
    private $resultRepository;

    public function __construct(
        ResultRepository $resultRepository
    ) {
        $this->resultRepository = $resultRepository;
    }

    public function findAll()
    {
        return $this->resultRepository->findAll();
    }

    public function findSingleByCondition($searchCondition)
    {
        return $this->resultRepository->findSingle($searchCondition);
    }

    public function findDoubleByCondition($searchCondition)
    {
        return $this->resultRepository->findDouble($searchCondition);
    }
}

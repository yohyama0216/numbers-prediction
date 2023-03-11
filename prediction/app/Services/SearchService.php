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

    public function findByCondition($searchCondition)
    {
        return $this->resultRepository->find('numbers3_results', $searchCondition); // tableもSearchConditionに入れるか？
    }
}

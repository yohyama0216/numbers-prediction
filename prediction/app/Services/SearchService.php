<?php

namespace App\Services;

use App\Repositories\DrawingResultRepository;

class SearchService
{
    private $DrawingResultRepository = null;

    public function __construct(
        DrawingResultRepository $DrawingResultRepository
    )
    {
        $this->DrawingResultRepository = $DrawingResultRepository;
    }

    public function findAll()
    {
        return $this->DrawingResultRepository->findAll();
    }

    public function findByNumbers($numbers)
    {
        return $this->DrawingResultRepository->find($numbers);
    }
}
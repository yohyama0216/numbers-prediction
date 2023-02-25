<?php

namespace App\Services;

use App\Repositories\DrawingResultRepository;

class DrawingResultService
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

    public function count($numbers)
    {
        return $this->DrawingResultRepository->countNumbers($numbers);
    }

    public function findByNumbers($numbers)
    {
        return $this->DrawingResultRepository->find($numbers);
    }
}
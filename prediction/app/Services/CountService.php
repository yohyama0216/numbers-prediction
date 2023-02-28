<?php

namespace App\Services;

use App\Repositories\DrawingResultRepository;

class CountService
{
    private $DrawingResultRepository = null;

    public function __construct(
        DrawingResultRepository $DrawingResultRepository
    )
    {
        $this->DrawingResultRepository = $DrawingResultRepository;
    }

    public function count($numbers)
    {
        return $this->DrawingResultRepository->countNumbers($numbers);
    }
}
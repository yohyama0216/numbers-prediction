<?php

namespace App\Services;

use App\Services\Shared\GenerateService;
use App\Repositories\DrawingResultRepository;

class PredictionService
{
    private $DrawingResultRepository = null;
    private $GenerateService = null;

    public function __construct(
        DrawingResultRepository $DrawingResultRepository,
        GenerateService $GenerateService
    )
    {
        $this->DrawingResultRepository = $DrawingResultRepository;
        $this->GenerateService = $GenerateService;
    }

    public function predictFromRecentFiveNumbers()
    {
        return null;
    }


}
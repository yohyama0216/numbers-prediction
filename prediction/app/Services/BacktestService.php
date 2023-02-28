<?php

namespace App\Services;

use App\Models\Entities;
use App\Services\Shared\GenerateService;
use App\Repositories\DrawingResultRepository;

class BacktestService
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

    public function buySameDigitNumbers()
    {        
        $numbersList = $this->GenerateService->getSameDigitNumbers(3);
        // todo 買う処理？
        // foreach($this->testDrawingResultData as $DrawingResult) {
        //     $HitNumbers3ResultList[] = HitChecker::check($DrawingNumbers3,$BuyNumbers3List);
        // }
        // return $HitNumbers3ResultList->calcTotalResult();
    }
}
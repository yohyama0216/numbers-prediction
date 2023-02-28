<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PredictionService;

class PredictionController extends Controller
{
    private $PredictionService = null;

    public function __construct(
        PredictionService $PredictionService
    )
    {
        $this->PredictionService = $PredictionService; 
    }
    
    public function index(Request $request)
    {
        $data = $this->PredictionService->fromRecentFiveNumbers(999);
        return view('Prediction.list', compact('data'));
    }
}

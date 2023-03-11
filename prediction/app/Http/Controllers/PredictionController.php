<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PredictionService;

class PredictionController extends Controller
{
    private $predictionService = null;

    public function __construct(
        PredictionService $predictionService
    ) {
        $this->predictionService = $predictionService;
    }

    public function index(Request $request)
    {
        $data = $this->predictionService->predictFromRecentFiveNumbers();
        return view('Prediction.list', compact('data'));
    }
}

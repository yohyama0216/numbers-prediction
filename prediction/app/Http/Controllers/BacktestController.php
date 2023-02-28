<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DrawingResultService;
use App\Services\BacktestService;

class CountController extends Controller
{
    private $DrawingResultService = null;
    private $BacktestService = null;

    public function __construct(
        BacktestService $BacktestService
    )
    {
        $this->BacktestService = $BacktestService;
    }
    
    public function index(Request $request)
    {
        $data = $this->BacktestService->buySameDigitNumbers();
        return view('count.list', compact('data'));
    }
}

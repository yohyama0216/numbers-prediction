<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SearchService;
use App\Services\BacktestService;

class BacktestController extends Controller
{
    private $searchService = null;
    private $backtestService = null;

    public function __construct(
        BacktestService $backtestService
    ) {
        $this->BacktestService = $backtestService;
    }

    public function index(Request $request)
    {
        $data = $this->BacktestService->buySameDigitNumbers();
        return view('backtest.list', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SearchService;
use App\Services\BacktestService;

class CountController extends Controller
{
    private $SearchService = null;
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

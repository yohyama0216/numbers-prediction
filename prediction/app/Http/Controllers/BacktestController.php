<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Models\Algorhythm;

class BacktestController extends Controller
{
    public function index(Request $request)
    {
        $DrawingNumbers3Service = new Services\DrawingNumbers3Service();
        $data = $DrawingNumbers3Service->findAll();
        $BacktestService = new Services\BacktestService($data,new Algorhythm\SameNumbersAlgorhythm());
        $data = $BacktestService->execute();
        return view('backtest.index', compact('data'));
    }
}

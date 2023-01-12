<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class StatisticsController extends Controller
{
    public function index(Request $request)
    {
        $DrawingNumbers3Service = new Services\DrawingNumbers3Service();
        $data = $DrawingNumbers3Service->findAll();
        $statisticsService = new Services\statisticsService($data);
        $data = $statisticsService->executeCounter();
        return view('statistics.index', compact('data'));
    }
}

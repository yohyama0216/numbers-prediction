<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class StaticsController extends Controller
{
    public function index(Request $request)
    {
        $DrawingNumbers3Service = new Services\DrawingNumbers3Service();
        $data = $DrawingNumbers3Service->findAll();
        $StaticsService = new Services\StaticsService($data);
        $data = $StaticsService->executeCounter();
        return view('statics.index', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DrawingResultService;

class DrawingResultController extends Controller
{
    private $DrawingResultService = null;

    public function __construct(
        DrawingResultService $DrawingResultService
    )
    {
        $this->DrawingResultService = $DrawingResultService; 
    }
    
    public function index(Request $request)
    {
        $data = $this->DrawingResultService->findAll();
        return view('drawing_result.list', compact('data'));
    }
}

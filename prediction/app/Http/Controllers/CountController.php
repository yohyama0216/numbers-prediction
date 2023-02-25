<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DrawingResultService;

class CountController extends Controller
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
        $data = $this->DrawingResultService->count([111,222,333]);
        return view('count.list', compact('data'));
    }
}

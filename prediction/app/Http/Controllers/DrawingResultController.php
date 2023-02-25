<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DrawingResultRepository;

class DrawingResultController extends Controller
{
    private $DrawingResultRepository = null;

    public function __construct(
        DrawingResultRepository $DrawingResultRepository
    )
    {
        $this->DrawingResultRepository = $DrawingResultRepository; 
    }
    
    public function index(Request $request)
    {
        $data = $this->DrawingResultRepository->findAll();
        return view('drawing_result.list', compact('data'));
    }
}

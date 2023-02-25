<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DrawingResultRepository;

class CountController extends Controller
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
        $data = $this->DrawingResultRepository->countNumbers([111,222,333]);
        return view('count.list', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DrawingRepository;

class CountController extends Controller
{
    private $DrawingRepository = null;

    public function __construct(
        DrawingRepository $DrawingRepository
    )
    {
        $this->DrawingRepository = $DrawingRepository; 
    }
    
    public function index(Request $request)
    {
        $data = $this->DrawingRepository->countNumbers([111,222,333]);
        return view('count.list', compact('data'));
    }
}

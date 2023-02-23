<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DrawingRepository;

class DrawingController extends Controller
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
        $data = $this->DrawingRepository->findAll();
        return view('drawing.list', compact('data'));
    }
}

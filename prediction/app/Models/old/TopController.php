<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Models\Algorhythm;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $drawingNumbers3Service = new Services\DrawingNumbers3Service();
        $data = $drawingNumbers3Service->findAll();
        return view('top.index', compact('data'));
    }
}

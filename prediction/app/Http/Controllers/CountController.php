<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CountService;

class CountController extends Controller
{
    private $CountService = null;

    public function __construct(
        CountService $CountService
    )
    {
        $this->CountService = $CountService; 
    }
    
    public function index(Request $request)
    {
        $data = $this->CountService->count([111,222,333]);
        return view('count.list', compact('data'));
    }
}
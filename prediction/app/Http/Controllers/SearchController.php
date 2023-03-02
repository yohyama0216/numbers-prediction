<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SearchService;

class SearchController extends Controller
{
    private $SearchService = null;

    public function __construct(
        SearchService $SearchService
    )
    {
        $this->SearchService = $SearchService; 
    }
    
    public function index(Request $request)
    {
        $data = $this->SearchService->find($request);
        return view('drawing_result.list', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SearchService;
use App\Models\Entities\SearchCondition;

class SearchController extends Controller
{
    private $SearchService;
    private $SearchCondition;

    public function __construct(
        SearchService $SearchService,
    )
    {
        $this->SearchService = $SearchService;
    }
    
    public function index(Request $request)
    {
        $SearchCondition = new SearchCondition($request);
        $data = $this->SearchService->find($SearchCondition);
        return view('drawing_result.list', compact('data'));
    }
}

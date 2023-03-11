<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SearchService;
use App\Models\Entities\SearchCondition;

class SearchController extends Controller
{
    private $searchService;
    private $searchCondition;

    public function __construct(
        SearchService $searchService,
    ) {
        $this->searchService = $searchService;
    }

    public function index(Request $request)
    {
        $searchCondition = new SearchCondition($request);
        $data = $this->searchService->findByCondition($searchCondition);
        return view('search.list', compact('data'));
    }
}

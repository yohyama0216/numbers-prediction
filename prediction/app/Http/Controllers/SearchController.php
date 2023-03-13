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

    public function single(Request $request)
    {
        $searchCondition = new SearchCondition($request);
        $data = $this->searchService->findSingleByCondition($searchCondition);
        return view('search.list', compact('data'));
    }

    public function double(Request $request)
    {
        $searchCondition = new SearchCondition($request);
        $data = $this->searchService->findDoubleByCondition($searchCondition);
        return view('search.consecutive_list', compact('data'));
    }
}

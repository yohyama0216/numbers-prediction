<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Models\Algorhythm;
use App\Models\Entities\Common\SearchCondition;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $DrawingNumbers3Service = new Services\DrawingNumbers3Service();
        $SearchCondition = new SearchCondition('');
        $data = $DrawingNumbers3Service->search($SearchCondition);
        return view('search.index', compact('data'));
    }
}

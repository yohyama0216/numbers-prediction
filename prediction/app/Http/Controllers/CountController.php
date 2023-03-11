<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CountService;

class CountController extends Controller
{
    private $countService = null;

    public function __construct(
        CountService $countService
    ) {
        $this->countService = $countService;
    }

    public function index(Request $request)
    {
        $data = $this->countService->getCountTop5();
        return view('count.list', compact('data'));
    }
}

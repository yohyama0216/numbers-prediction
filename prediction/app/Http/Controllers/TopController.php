<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories;
use App\Repositories\NumbersHistoryRepository;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $data = NumbersHistoryRepository::toEntity();
        return view('index', compact('data'));
    }
}

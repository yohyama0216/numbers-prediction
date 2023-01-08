<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories;
use App\Http\Service;
use App\Repositories\Numbers3ResultListRepository;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $data = Numbers3ResultListRepository::toEntity();
        return view('index', compact('data'));
    }
}

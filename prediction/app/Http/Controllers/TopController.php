<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories;
use App\Repositories\Numbers3HistoryRepository;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $data = Numbers3HistoryRepository::findAllHistory();
       // var_dump($data);
        return view('index', compact('data'));
    }
}

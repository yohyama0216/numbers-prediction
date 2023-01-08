<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $Numbers3ResultService = new Services\Numbers3ResultService();
        $data = $Numbers3ResultService->findAll();
        return view('index', compact('data'));
    }
}

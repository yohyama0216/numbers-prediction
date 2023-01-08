<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;
use App\Models\Algorhythm;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $Numbers3ResultService = new Services\Numbers3ResultService();
        $data = $Numbers3ResultService->findAll();
        //var_dump($BacktestService->execute());
        //
        //$data = $Numbers3ResultService->findByNumbers(111);
        //var_dump($data->getLatestResult());
        return view('top.index', compact('data'));
    }
}

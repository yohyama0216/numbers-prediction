<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class StatisticsController extends Controller
{
    public function index(Request $request)
    {
        $DrawingNumbers3Service = new Services\DrawingNumbers3Service();
        $data = $DrawingNumbers3Service->findAll();
        $statisticsService = new Services\statisticsService($data);
        $data = $statisticsService->executeCounter();
        //$data = $this->convertForChart($data);
        return view('statistics.index', compact('data'));
    }

    private function convertForChart($data)
    {
        $str = "";
        foreach ($data as $key => $item) {
            $str .= "{x:$key,y:$item},";
        }
        return $str;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => "画像を入力してください",
        ];
        return view('index', $data);
    }
}

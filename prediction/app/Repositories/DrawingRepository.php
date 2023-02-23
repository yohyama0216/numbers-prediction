<?php

namespace App\Repositories;

use App\Models\Eloquent\Drawing;

class DrawingRepository
{
    public function findAll()
    {
        return Drawing::all();
    }

    public function find($numbers)
    {
        return Drawing::where('numbers','=',$numbers)->get();
    }
}
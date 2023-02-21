<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Drawing extends Model
{
    use HasFactory;

    public function result(): hasOne
    {
        return $this->hasOne(Result::class);
    }
}
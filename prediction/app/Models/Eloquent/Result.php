<?php

namespace App\Models\Eloquent;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Result extends Model
{
    use HasFactory;

    public function drawings(): BelongsTo
    {
        return $this->belongsTo(Drawing::class);
    }

    public function prize(): hasOne
    {
        return $this->hasOne(Prize::class);
    }
}
<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Collection;

class CountResultList extends Collection
{
    public function getCountTopList($length,$order='desc')
    {

        $sorted = $this->sortByDesc(function ($countResult, $key) {
            return $countResult->getCount();
        });
        return $sorted->slice(0,$length);
    }

}
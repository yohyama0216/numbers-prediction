<?php

namespace App\Models\Value;

class Count
{
    private int $count;

    public function __construct()
    {
        $this->count = 0;
    }

    public function addCount($count=1)
    {
        $this->count = $this->count + $count;
    }

    public function toString()
    {
        return $this->count;
    }
}

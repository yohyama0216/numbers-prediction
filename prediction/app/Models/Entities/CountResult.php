<?php

namespace App\Models\Entities;

class CountResult
{
    private string $countTarget;
    private int $count;

    public function __construct(string $countTarget, int $count)
    {
        $this->countTarget = $countTarget;
        $this->count = $count;
    }

    public function getTarget()
    {
        return $this->countTarget;
    }

    public function getCount()
    {
        return $this->count;
    }
}
<?php

namespace App\Models\Entities;

class CountResult {

    private $Target = '';
    private $count = 1;

    public function __construct($Target)
    {
        $this->Target = $Target;
    }

    public function getTarget()
    {
        return $this->Target;
    }

    public function addCount()
    {
        $this->count++;
    }

    public function getCount()
    {
        return $this->count;
    }
}
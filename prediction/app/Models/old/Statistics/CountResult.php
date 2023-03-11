<?php

namespace App\Models\Entities\Statistics;

class CountResult
{
    private $target = '';
    private $count = 1;

    public function __construct($target)
    {
        $this->Target = $target;
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

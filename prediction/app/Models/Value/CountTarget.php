<?php

namespace App\Models\Value;

class CountTarget
{
    private Numbers $numbers;

    public function __construct($numbers)
    {
        $this->Numbers = $this->validate($numbers);
    }

    private function validate($round)
    {
    }

    public function isCountTarget(Numbers $numbers)
    {
        return $this->Numbers->isSameStraight($numbers);
    }
}

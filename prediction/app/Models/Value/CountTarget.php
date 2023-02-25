<?php

namespace App\Models\Value;

class CountTarget
{
    private Numbers $Numbers;

    public function __construct($Numbers)
    {
        $this->Numbers = $this->validate($Numbers);
    }

    private function validate($round)
    {

    }

    public function isCountTarget(Numbers $Numbers)
    {
        return $this->Numbers->isSameStraight($Numbers);
    }
}

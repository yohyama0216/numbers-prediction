<?php

namespace App\Models\Value;

class Round
{
    private $round = '';

    public function __construct($round)
    {
        $this->round = $this->validate($round);
    }

    private function validate($round)
    {
        if (!is_string($round) && !ctype_digit($round)) {
            // invalidException
        }
        return $round;
    }

    public function toString()
    {
        return str_pad($this->round,4,'0');
    }
}

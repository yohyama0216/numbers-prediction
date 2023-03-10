<?php

namespace App\Models\Value;

class Round
{
    private int $round;

    public function __construct($round)
    {
        $this->round = $this->validate($round);
    }

    private function validate($round)
    {
        if (!ctype_digit($round)) {
            // invalidException
            return null;
        }
        return (int)$round;
    }

    public function toString()
    {
        return str_pad($this->round, 4, '0', STR_PAD_LEFT);
    }
}

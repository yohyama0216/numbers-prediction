<?php

namespace App\Models\Value;

class Money
{
    private int $money;

    public function __construct($money)
    {
        $this->money = $this->validate($money);
    }

    private function validate($money)
    {
        if (!ctype_digit($money)) {
            // invalidException
            return null;
        }
        return (int)$money;
    }

    public function toString($format=false)
    {
        if ($format) {
            return number_format($this->money);
        }
        return $this->money;
    }
}

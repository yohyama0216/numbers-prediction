<?php

namespace App\Models\Entities\Common;

class Numbers3List
{
    private $numbersType = 3; //不要？
    private $numbers = '';

    public function __construct($numbers)
    {
        if ($this->numbersType != strlen($numbers)) {
            return null;
        }
        $this->numbers = $numbers;
    }

    public function fromArray()
    {
        return $this->numbersType;
    }
}

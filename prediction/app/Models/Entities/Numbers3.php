<?php

namespace App\Models\Entities;

class Numbers3 {
    private $numbersType = 3; //不要？
    private $numbers = '';

    public function __construct($numbers)
    {
        if ($this->numbersType != strlen($numbers)) {
            return null;
        }
        $this->numbers = $numbers;
    }

    public function getNumbersType()
    {
        return $this->numbersType;
    }

    public function toString()
    {
        return $this->numbers;
    }

    public function isSameDigit()
    {
        return count(array_unique($this->numbers)) == 1;
    }

    public function isStepUp()
    {
        $arr = str_split($this->numbers);
        return ($arr[0] + 1 == $arr[1]) && ($arr[1] + 1 == $arr[2]);
    }

    public function isMirror()
    {
        return $this->numbers == strrev($this->numbers);
    }

    public function getMini()
    {
        return substr($this->numbers,2);
    }

    private function getUraNumbers()
    {
        return Windmill::getUraNumber($this->numbers);
    }
}

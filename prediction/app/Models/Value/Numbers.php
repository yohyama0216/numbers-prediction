<?php

namespace App\Models\Value;

class Numbers
{
    private int $numbersType;
    private int $numbers;

    public function __construct($numbers)
    {
        $this->numbers = $this->validate($numbers);
        $this->numbersType = (int)strlen($numbers);
    }

    private function validate($numbers)
    {
        if (strlen($numbers) !== 4 && strlen($numbers) !== 3) {
            // invalidException
        }
        return (int)$numbers;
    }

    public function getNumbersType()
    {
        return $this->numbersType;
    }

    public function isNumbers3()
    {
        return ($this->numbersType == 3);
    }

    public function toString()
    {
        return str_pad($this->numbers,$this->numbersType,'0',STR_PAD_LEFT);
    }

    public function getDigit100()
    {
        return substr($this->toString(),0,1);
    }

    public function getDigit10()
    {
        return substr($this->toString(),1,1);
    }

    public function getDigit1()
    {
        return substr($this->toString(),2,1);
    }

    public function isSameBox($Numbers)
    {
        $arr1 = str_split($this->toString());
        sort($arr1);
        $arr2 = str_split($Numbers->toString());
        sort($arr2);        
        return implode($arr1) == implode($arr2);
    }

    public function isSameStraight($Numbers)
    {
        return $this->toString() == $Numbers->toString();
    }

    public function isSameDigit()
    {
        $arr = str_split($this->numbers);
        return count(array_unique($arr)) == 1;
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
        if ($this->isNumbers3()) {
            return substr($this->numbers,2);
        }
        // invalidNumbersException?
        return null;
    }
}

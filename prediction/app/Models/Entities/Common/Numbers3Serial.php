<?php
namespace App\Models\Entities\Common;

use ArrayObject;

class Numbers3Serial extends ArrayObject {

    public function toString()
    {
        $stringSplit = [];
        foreach($this as $item) {
            $stringSplit[] = $this->toString();
        }        
        return implode('→',$stringSplit);
    }
    public function isSameStraight($NumbersSerial)
    {
        return $this->toString() == $NumbersSerial->toString();
    }
}

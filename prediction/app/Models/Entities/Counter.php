<?php

namespace App\Models\Entities;

class Counter {

    private $DrawingNumbers3list = '';

    public function __construct($DrawingNumbers3list)
    {
        $this->DrawingNumbers3list = $DrawingNumbers3list;
    }

    public function countNumbers3()
    {        
        $result = [];
        foreach($this->DrawingNumbers3list as $DrawingNumbers3) {
            $numbers = $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers()->toString();
            if (array_key_exists($numbers,$result)) {
                $result[$numbers] += 1;
            } else {
                $result[$numbers] = 1;
            }
        }
        arsort($result);
        return $result;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getReturn()
    {
        return $this->return;
    }

    public function getCost()
    {
        return $this->cost;
    }
}
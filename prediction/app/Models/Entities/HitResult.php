<?php

namespace App\Models\Entities;

class HitResult {

    private $result = '';
    private $type = '';
    private $return = 0;
    private $cost = 0;

    public function __construct($result,$type,$return,$cost)
    {
        $this->result = $result;
        $this->type = $type;
        $this->return = $return;
        $this->cost = $cost;
    }

    public function getResult()
    {
        return $this->result;
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
<?php

namespace App\Models\Entities;

class SearchCondition {
    private $numbers;
    private $dateFrom;
    private $dateTo;

    public function __construct($Request)
    {
        $this->numbers = $Request->query('numbers');
        $this->dateFrom = $Request->query('dateFrom');
        $this->dateTo = $Request->query('dateTo');
    }

    public function hasCondition()
    {
        return $this->numbers || $this->dateFrom || $this->dateTo;
    }

    public function match($Drawing)
    {
        if (empty($this->numbers)){
            return true;
        }
        
        // boxとかは？
        if ($this->numbers && $this->numbers != $Drawing->result['numbers']) {
            return false;
        }
        return true;
    }
}

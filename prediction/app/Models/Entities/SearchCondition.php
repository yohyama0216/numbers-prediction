<?php

namespace App\Models\Entities;

class SearchCondition
{
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

    public function match($Result)
    {
        if (empty($this->numbers)) {
            return true;
        }

        // boxとかは？
        if ($this->numbers && $this->numbers != $Result['numbers']) {
            return false;
        }
        return true;
    }
}

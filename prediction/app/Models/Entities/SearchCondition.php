<?php

namespace App\Models\Entities;

class SearchCondition
{
    private $numbers;
    private $dateFrom;
    private $dateTo;

    public function __construct($request)
    {
        $this->numbers = $request->query('numbers');
        $this->dateFrom = $request->query('dateFrom');
        $this->dateTo = $request->query('dateTo');
    }

    public function hasCondition()
    {
        return $this->numbers || $this->dateFrom || $this->dateTo;
    }

    public function match($result)
    {
        if (empty($this->numbers)) {
            return true;
        }

        // boxとかは？
        if ($this->numbers && $this->numbers != $result['numbers']) {
            return false;
        }
        return true;
    }

    public function createWhereQuery()
    {
        if ($this->numbers) {
            return "`numbers` = $this->numbers";
        } else {
            return "1 = 1";
        }
    }

    public function hasConsecutiveCondition()
    {
        return true;
    }
}

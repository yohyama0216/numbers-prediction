<?php

namespace App\Models\Entities;

use Illuminate\Http\Request;

class SearchCondition
{
    private $path;
    private $numbers;
    private $dateFrom;
    private $dateTo;

    public function __construct(Request $request)
    {
        $this->path = $request->path();
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
        return false;
    }

    public function getTargetTable()
    {
        $type = explode('/',$this->path);
        if (in_array($type[1],['numbers3','numbers4'])){
            return $type[1]."_results";
        }
    }
}

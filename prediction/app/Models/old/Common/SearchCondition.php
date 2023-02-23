<?php

namespace App\Models\Entities\Common;

class SearchCondition {
    private $numbers = '';
    private $dateFrom = '';
    private $dateTo = '';

    public function __construct($numbers='',$dateFrom='',$dateTo='')
    {
        // 引数多くなるのでスッキリさせたい
        $this->numbers = $numbers;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
    }

    public function hasCondition()
    {
        return $this->numbers || $this->dateFrom || $this->dateTo;
    }

    public function match($DrawingNumbers3)
    {
        if ($this->numbers && $this->numbers != $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers()->toString()) {
            return false;
        }

        // todo if ($this->dateFrom && $this->dateTo && )
        return true;
    }
}

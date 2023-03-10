<?php

namespace App\Models\Entities\Common;

use DateTime;

class DrawingNumbers3
{
    private $numbersType = 3;
    private $round = "";
    private $DateTime = null;
    private $status = 0; // 0:未抽選
    private $DrawingNumbers3Result = null;

    public function __construct($round, $date)
    {
        $this->round = $round;
        $this->DateTime = new DateTime($date);
    }

    public function getNumbersType()
    {
        return $this->numbersType;
    }

    public function getRound()
    {
        return $this->round;
    }

    public function getDateTime()
    {
        return $this->DateTime->format('Y/m/d');
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getDrawingNumbers3Result()
    {
        return $this->DrawingNumbers3Result;
    }

    public function setDrawingNumbers3Result($DrawingNumbers3Result)
    {
        return $this->DrawingNumbers3Result = $DrawingNumbers3Result;
    }
}

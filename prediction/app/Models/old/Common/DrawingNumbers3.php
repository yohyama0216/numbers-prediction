<?php

namespace App\Models\Entities\Common;

use DateTime;

class DrawingNumbers3
{
    private $numbersType = 3;
    private $round = "";
    private $dateTime = null;
    private $status = 0; // 0:未抽選
    private $drawingNumbers3Result = null;

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

    public function setDrawingNumbers3Result($drawingNumbers3Result)
    {
        return $this->DrawingNumbers3Result = $drawingNumbers3Result;
    }
}

<?php

namespace App\Models\Entities;

use App\Models\Value\Round;
use App\Models\Value\Date;
use App\Models\Value\Numbers;
use App\Models\Value\Prize;

class DrawingResult
{
    private Round $round;
    private Date $date;
    private Numbers $numbers;
    private Prize $prize;

    public function __construct(Round $round, Date $date, Numbers $numbers, Prize $prize)
    {
        $this->round = $round;
        $this->date = $date;
        $this->numbers = $numbers;
        $this->prize = $prize;
    }

    public function getRound()
    {
        return $this->round;
    }

    public function getDate()
    {
        return $this->date->toString();
    }

    public function getNumbers()
    {
        return $this->numbers;
    }

    public function getResultNumbers()
    {
        return $this->numbers->toString();
    }

    public function getPrize($type)
    {
        $method = 'get' . ucfirst($type);
        return $this->prize->$method()->toString();
    }
}

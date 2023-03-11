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
        $this->Round = $round;
        $this->Date = $date;
        $this->Numbers = $numbers;
        $this->Prize = $prize;
    }

    public function getRound()
    {
        return $this->Round;
    }

    public function getDate()
    {
        return $this->Date->toString();
    }

    public function getNumbers()
    {
        return $this->Numbers;
    }

    public function getResultNumbers()
    {
        return $this->Numbers->toString();
    }

    public function getPrize($type)
    {
        $method = 'get' . ucfirst($type);
        return $this->Prize->$method()->toString();
    }
}

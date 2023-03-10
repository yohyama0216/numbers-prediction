<?php

namespace App\Models\Entities;

use App\Models\Value\Round;
use App\Models\Value\Date;
use App\Models\Value\Numbers;
use App\Models\Value\Prize;

class DrawingResult
{
    private Round $Round;
    private Date $Date;
    private Numbers $Numbers;
    private Prize $Prize;

    public function __construct(Round $Round, Date $Date, Numbers $Numbers, Prize $Prize)
    {
        $this->Round = $Round;
        $this->Date = $Date;
        $this->Numbers = $Numbers;
        $this->Prize = $Prize;
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

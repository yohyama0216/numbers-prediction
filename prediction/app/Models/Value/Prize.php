<?php

namespace App\Models\Value;

class Prize
{
    private Money $straight;
    private Money $box;
    private Money $set;
    private Money $mini;

    public function __construct($straight,$box,$set,$mini)
    {
        $this->straight = $straight;
        $this->box = $box;
        $this->set = $set;
        $this->mini = $mini;
    }

    public function getStraight()
    {
        return $this->straight;
    }

    public function getBox()
    {
        return $this->box;
    }

    public function getSet()
    {
        return $this->set;
    }

    public function getMini()
    {
        // ロトタイプ必要では？
        return $this->mini;
    }
}



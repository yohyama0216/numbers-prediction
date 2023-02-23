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
}

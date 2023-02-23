<?php

namespace App\Models\Value;

use Illuminate\Support\Carbon;

class Date
{
    private $DateTime = '';

    public function __construct($datetimeString)
    {
        $this->DateTime = $this->validate($datetimeString);
    }

    private function validate($datetimeString)
    {
        $datetime = new Carbon($datetimeString);
        $year = $datetime->format('Y');
        $month = $datetime->format('m');
        $day = $datetime->format('d');
        if (checkdate($month,$day,$year)) {
            return $datetime;
        }
        // inValideDatetimeException ?
    }

    public function toString()
    {
        return $this->DateTime->toDateString();
    }
}

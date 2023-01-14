<?php

namespace App\Models\Entities;

class BoughtNumbers3Group {
    private $DrawingNumbers3 = null;
    private $BoughtNumbers3List = null;

    public function __construct($DrawingNumbers3, $BoughtNumbers3List,)
    {
        $this->DrawingNumbers3 = $DrawingNumbers3;
        $this->BoughtNumbers3List = $BoughtNumbers3List;
    }

    public function getDrawingNumbers3()
    {
        return $this->DrawingNumbers3;
    }

    public function getBoughtNumbers3List()
    {
        return $this->BoughtNumbers3List;
    }

    public function getGroupCost()
    {
        return $this->BoughtNumbers3List->getAllCost();
    }
}

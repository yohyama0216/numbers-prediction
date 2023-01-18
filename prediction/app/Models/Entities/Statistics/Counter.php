<?php

namespace App\Models\Entities\Statistics;

use App\Models\Entities\Common;

class Counter {

    private $DrawingNumbers3list = '';

    public function __construct($DrawingNumbers3list)
    {
        $this->DrawingNumbers3list = $DrawingNumbers3list;
    }

    public function countStraightNumbers3()
    {        
        $CountResultList = new CountResultList();
        foreach($this->DrawingNumbers3list as $DrawingNumbers3) {
            $Numbers = $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers();
            $CountResultList->addCountResult($Numbers);
        }
        return $CountResultList->sortByCount();
    }

    public function countBoxNumbers3()
    {        
        $CountResultList = new CountResultList();
        foreach($this->DrawingNumbers3list as $DrawingNumbers3) {
            $Numbers = $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers();
            $CountResultList->addCountResult($Numbers,'box');
        }
        return $CountResultList->sortByCount();
    }

    // 重くて無理
    // 2重ループやめて前の数字は $prevに保存して取得する
    public function countSerialNumbers3()
    {        
        $CountResultList = new CountResultList();
        foreach($this->DrawingNumbers3list as $key => $DrawingNumbers3) {
            if (count($this->DrawingNumbers3list) == $key+1){
                continue;
            }
            $NumbersNext = $this->DrawingNumbers3list[$key+1]->getDrawingNumbers3Result()->getNumbers();
            $Numbers = $DrawingNumbers3->getDrawingNumbers3Result()->getNumbers();
            $Numbers3Serial = new Common\Numbers3Serial([$Numbers,$NumbersNext]);
            $CountResultList->addCountResult($Numbers3Serial);
        }
        return $CountResultList->sortByCount();
    }
}
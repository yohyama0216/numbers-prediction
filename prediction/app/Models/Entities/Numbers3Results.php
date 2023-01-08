<?php

namespace App\Models\Entities;

use ArrayObject;

class Numbers3Results extends ArrayObject {

    // // n回以内に今の数字と同じ数字が存在しているか
    // public function inPrevNumbers($index,$times)
    // {
    //     if ($index < $times) {
    //         return false;
    //     }
        
    //     $pastNumbers = [];
    //     $currentNumber = $this->data[$index]->getNumbersString();
    //     $range = range(1,$times);
    //     foreach ($range as $num) {
    //         $pastNumbers[] = $this->data[$index-$num]->getNumbersString();
    //     }
    //     return in_array($currentNumber,$pastNumbers);
    // }

    // // 途中
    // public function hasHippariNumber($predict_number) {
    //     $result = array_filter($this->NumbersPastData->getData(),function($v,$k) {
    //         $prevNumbers = $this->NumbersPastData->getData()[$k-1];
    //         $hasHippari = false;
    //         foreach($v->getNumbers() as $number) {
    //             if (in_array($number, $prevNumbers)) {
    //                 $hasHippari = true;
    //             }
    //         }
    //         return $hasHippari;

    //     },ARRAY_FILTER_USE_BOTH);
    //     $this->searchResult = $result;
    // }

    // public function getPatternWithinPrevs($index,$times,$step,$digit)
    // {
    //     if ($index < $times*$step) {
    //         return false;
    //     }
        
    //     $numbersPattern = [];
    //     $range = range(0,$times*$step, $step);
    //     foreach ($range as $num) {
    //         $numbersPattern[] = $this->data[$index-$num]->getNumbers()[$digit];
    //     }
    //     return implode('->',$numbersPattern).PHP_EOL;
    // }
}
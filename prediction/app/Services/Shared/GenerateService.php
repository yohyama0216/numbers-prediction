<?php

namespace App\Services\Shared;

class GenerateService
{
    /**
     * 同じ数字
     */
    public function getSameDigitNumbers($numbersType)
    {
        $list = [];
        foreach (range(0, 9) as $number) {
            $list[] = str_repeat($number, $numbersType);
        }
        return $list;
    }

    /**
     * 過去5回の数字から出ていない数字と出た数字の組み合わせを作る
     */
    public function fromRecentFiveNumbers($list)
    {
        $list = [111, 123, 456, 887, 991];
        $list = array_unique(str_split(implode($list)));
        // todo
        return ['111', '333'];
    }
}

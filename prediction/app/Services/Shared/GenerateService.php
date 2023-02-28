<?php

namespace App\Services\Shared;

use App\Repositories\DrawingResultRepository;

class GenerateService
{
    private $DrawingResultRepository = null;

    public function __construct(
        DrawingResultRepository $DrawingResultRepository
    )
    {
        $this->DrawingResultRepository = $DrawingResultRepository;
    }

    /**
     * 同じ数字
     */
    public function getSameDigitNumbers($numbersType)
    {
        return ["000","111","222","333","444","555","666","777","888","999"];
    }

    public function fromRecentFiveNumbers($resultCount)
    {
        // todo 5回前の数字から予想するアルゴリズム　
        // バックテストからも呼べるようにするか？　今のでOK?
        // 色んな数字を作るアルゴリズムだけのクラスが必要。そうすればbacktestでも使える
        return ['111','333'];
    }
}
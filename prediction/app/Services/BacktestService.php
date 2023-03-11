<?php

namespace App\Services;

use App\Models\Entities\BuyNumbers;
use App\Models\Entities\BuyResult;
use App\Models\Entities\BuyResultList;
use App\Models\Value\Numbers;
use App\Repositories\ResultRepository;
use App\Services\Shared\GenerateService;

class BacktestService
{
    private $resultRepository;
    private $generateService;

    public function __construct(
        ResultRepository $resultRepository,
        GenerateService $generateService
    ) {
        $this->resultRepository = $resultRepository;
        $this->generateService = $generateService;
    }

    public function buySameDigitNumbers()
    {
        $collection = $this->resultRepository->findAll();
        $buyResultList = [];
        foreach ($collection as $result) {
            $buyNumbersList = [
                new BuyNumbers($result->getRound(), 'straight', new Numbers(355))
            ];
            foreach ($buyNumbersList as $buyNumbers) {
                if ($buyNumbers->getRound()->toString() != $result->getRound()->toString()) {
                    continue;
                }

                $hit = '';
                $return = 0;
                if (
                    $buyNumbers->getType() == 'straight'
                    && $result->getNumbers()->isSameStraight($buyNumbers->getNumbers())
                ) {
                    $hit = 'straight';
                    $return = $result->getPrize('straight');
                } elseif (
                    $buyNumbers->getType() == 'box'
                    && $result->getNumbers()->isSameBox($buyNumbers->getNumbers())
                ) {
                    $hit = 'box';
                    $return = $result->getPrize('box');
                } elseif ($buyNumbers->getType() == 'set') {
                    if ($result->getNumbers()->isSameStraight($buyNumbers->getNumbers())) {
                        $hit = 'set';
                        $return = $result->getPrize('setStraight');
                    } elseif ($result->getNumbers()->isSameBox($buyNumbers->getNumbers())) {
                        $hit = 'set';
                        $return = $result->getPrize('setBox');
                    }
                }
                $buyResultList[] = new BuyResult(
                    $buyNumbers,
                    $hit,
                    $return,
                );
            }
        }
        return new BuyResultList($buyResultList);
    }
}

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
    private $ResultRepository;
    private $GenerateService;

    public function __construct(
        ResultRepository $ResultRepository,
        GenerateService $GenerateService
    ) {
        $this->ResultRepository = $ResultRepository;
        $this->GenerateService = $GenerateService;
    }

    public function buySameDigitNumbers()
    {
        $collection = $this->ResultRepository->findAll();
        $BuyResultList = [];
        foreach ($collection as $Result) {
            $BuyNumbersList = [
                    new BuyNumbers($Result->getRound(), 'straight', new Numbers(355))
            ];
            foreach ($BuyNumbersList as $BuyNumbers) {
                if ($BuyNumbers->getRound()->toString() != $Result->getRound()->toString()) {
                    continue ;
                }

                $hit = '';
                $return = 0;
                if ($BuyNumbers->getType() == 'straight' && $Result->getNumbers()->isSameStraight($BuyNumbers->getNumbers())) {
                    $hit = 'straight';
                    $return = $Result->getPrize('straight');
                } elseif ($BuyNumbers->getType() == 'box' && $Result->getNumbers()->isSameBox($BuyNumbers->getNumbers())) {
                    $hit = 'box';
                    $return = $Result->getPrize('box');
                } elseif ($BuyNumbers->getType() == 'set') {
                    if ($Result->getNumbers()->isSameStraight($BuyNumbers->getNumbers())) {
                        $hit = 'set';
                        $return = $Result->getPrize('setStraight');
                    } elseif ($Result->getNumbers()->isSameBox($BuyNumbers->getNumbers())) {
                        $hit = 'set';
                        $return = $Result->getPrize('setBox');
                    }
                }
                $BuyResultList[] = new BuyResult(
                    $BuyNumbers,
                    $hit,
                    $return,
                );
            }
        }
        return new BuyResultList($BuyResultList);
    }
}

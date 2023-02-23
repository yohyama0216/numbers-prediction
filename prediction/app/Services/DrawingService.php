<?php

namespace App\Services;

use App\Repositories\DrawingRepository;

class DrawingService
{
    private $DrawingRepository = null;

    public function __construct(
        DrawingRepository $DrawingRepository
    )
    {
        $this->DrawingRepository = $DrawingRepository;
    }

    public function findAll()
    {
        return $this->DrawingRepository->findAll();
    }

    public function findByNumbers($numbers)
    {
        return $this->DrawingRepository->find($numbers);
    }
}
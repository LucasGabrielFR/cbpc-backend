<?php

namespace App\Repositories;

use App\Models\PlayerContract;

class PlayerContractRepository
{
    protected $entity;

    public function __construct(PlayerContract $model)
    {
        $this->entity = $model;
    }
}

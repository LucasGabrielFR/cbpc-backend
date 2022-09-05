<?php

namespace App\Repositories;

use App\Models\Player;

class PlayerRepository
{
    protected $entity;

    public function __construct(Player $model)
    {
        $this->entity = $model;
    }

    public function getAllPlayers()
    {
        return $this->entity->get();
    }
}

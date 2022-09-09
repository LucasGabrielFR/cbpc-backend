<?php

namespace App\Repositories;

use App\Models\Team;

class TeamRepository
{
    protected $entity;

    public function __construct(Team $model)
    {
        $this->entity = $model;
    }

    public function getAllTeams()
    {
        return $this->entity->get();
    }

    public function getTeam(string $id)
    {
        return $this->entity->findOrFail($id);
    }

    public function getTeamPlayers(string $id)
    {
        return $this->entity->findOrFail($id)->load('contracts');
    }
}

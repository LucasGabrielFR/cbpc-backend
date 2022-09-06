<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TeamResource;
use App\Repositories\TeamRepository;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    protected $repository;

    public function __construct(TeamRepository $teamReporitory)
    {
        $this->repository = $teamReporitory;
    }

    public function index()
    {
        return TeamResource::collection($this->repository->getAllTeams());
    }

    public function show($id)
    {
        return new TeamResource($this->repository->getTeam($id));
    }
}

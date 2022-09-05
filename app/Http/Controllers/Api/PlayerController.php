<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlayerResource;
use App\Repositories\PlayerRepository;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    protected $repository;

    public function __construct(PlayerRepository $playerReporitory)
    {
        $this->repository = $playerReporitory;
    }

    public function index()
    {
        return PlayerResource::collection($this->repository->getAllPlayers());
    }
}

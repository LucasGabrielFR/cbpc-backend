<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;

    protected $keyTipe = 'uuid';

    protected $fillable = [
        'tag',
        'number',
        'wins',
        'loses',
        'draws',
        'matches',
        'goals',
        'assists',
        'defences'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function positions()
    {
        return $this->belongsToMany(Position::class,"player_positions","player_id","position_id");
    }

    public function contracts()
    {
        return $this->belongsToMany(Team::class,"player_contracts","player_id","team_id");
    }
}

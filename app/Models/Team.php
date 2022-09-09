<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;

    protected $keyTipe = 'uuid';

    protected $fillable = [
        'shortname',
        'fullname',
        'matches',
        'wins',
        'loses',
        'draws',
        'goals',
        'goals_conceded',
        'contact',
        'country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function contracts()
    {
        return $this->belongsToMany(Player::class,"player_contracts","team_id","player_id");
    }

}

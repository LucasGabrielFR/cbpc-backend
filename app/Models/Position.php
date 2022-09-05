<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;

    protected $keyTipe = 'uuid';

    protected $fillable = [
        'shortname',
        'longname'
    ];

    public function players()
    {
        return $this->belongsToMany(Player::class,"player_positions","position_id","player_id");
    }
}

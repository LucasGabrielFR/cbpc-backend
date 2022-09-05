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
}

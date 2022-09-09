<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerContract extends Model
{
    use HasFactory,UuidTrait;

    public $incrementing = false;

    protected $keyTipe = 'uuid';

    protected $fillable = [
        'start_date',
        'end_date',
        'situation',
    ];
}

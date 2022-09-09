<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;

class PlayerPositions extends Model
{
    use UuidTrait;

    public $incrementing = false;

    protected $keyTipe = 'uuid';

}

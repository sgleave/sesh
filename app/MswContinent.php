<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MswContinent extends Model
{
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zones extends Model
{
    protected $table = 'zones';

    protected $fillable = [
        'zonename',
    ];

}
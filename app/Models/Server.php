<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    protected $table = 'servers';

    protected $fillable = [
        'machine_id',
        'user_id',
        'zone',
        'true_zone',
        'provider'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User');
    }
}
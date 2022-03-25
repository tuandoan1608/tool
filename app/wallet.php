<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    protected $table = 'wallet';
    protected $fillable = [
        'bep20', 'sol','terra','updated_at','created_at','acc_name'
    ];
}
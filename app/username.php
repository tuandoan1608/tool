<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class username extends Model
{
    protected $table = 'username';
    protected $fillable = [
        'name_tw', 'name_tele','name_ins','name_discord','name_medium','updated_at','created_at','acc_name'
    ];
}
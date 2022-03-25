<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $table = 'account';
    protected $fillable = [
        'name', 'updated_at','created_at'
    ];
}
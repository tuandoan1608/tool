<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tb_links extends Model
{
    protected $table = 'tb_links';
    protected $fillable = [
        'link_tw','link_yt','link_fb','link_medium','link_red','link_email','link_lk','acc_name','link_ins' ,'updated_at','created_at'
    ];
}
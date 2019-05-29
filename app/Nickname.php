<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nickname extends Model
{
    public $timestamps = false;
    protected $fillable= array(‘name’,‘from’, ‘nickname’);
}

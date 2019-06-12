<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Find extends Model
{
    public $timestamps = false;

    protected $fillable = array('name', 'from', 'sex', 'date_of_birth');
}
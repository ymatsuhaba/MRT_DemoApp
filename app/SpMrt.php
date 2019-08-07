<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpMrt extends Model
{
    protected $table = '_sp_mrt';

    protected $guarded = array('id');

    public $timestamps = false;

    protected $fillable =[
        'Chinese_sei','Chinese_mei','Japanese_sei','Japanese_mei',
        'gender','email','password','graduation_year','university'];
}

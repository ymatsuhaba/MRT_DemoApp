<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class yukiLab extends Model
{
    protected $table = 'yucky_books';

    protected $guarded = array('id');

    public $timestamps = true;

    protected $fillable =[
        'book_title','author_name','release_date','lending_situation'
    ];
}

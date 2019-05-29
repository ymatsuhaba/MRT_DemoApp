<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nickname extends Model
{
    public $timestamps = false;
    protected $fillable= array('name','from', 'nickname');

    public function getData()
    {
        $name = $this -> name;
        $from = $this -> from;
        $nickname = $this -> nickname;

        return compact('name', 'from', 'nickname');

//        return '名前：'.$this -> name.' 出身地：'.$this -> from.' ニックネーム：'.$this -> nickname;
    }
}

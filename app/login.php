<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
        public $timestamps = false;

        protected $fillable= array('name','from', 'password');

        public function getData()
        {
            $name = $this -> name;
            $from = $this -> from;
            $password = $this -> password;

            return compact('name', 'from', 'password');

        }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    public $timestamps = false;

    protected $fillable= array('id','num1', 'calc', 'num2', 'CalculatedNumber');
    protected $hidden = array('id');

    public function Calculator()
    {
        $num1 = $this -> num1;
        $calc = $this -> calc;
        $num2 = $this -> num2;
        $CalculatedNumber = $this -> CalculatedNumber;

        return compact('num1','calc', 'num2', 'CalculatedNumber');

    }

    public function isAdd()
    {
        if($this->calc === '+'){
            return true;
        }else{
            return false;
        }
    }

    public function isSubtract()
    {
        if($this->calc === '-'){
            return true;
        }else{
            return false;
        }
    }


    public function isMultify()
    {
        if($this->calc === '/'){
            return true;
        }else{
            return false;
        }
    }

    public function isDivide()
    {
        if($this->calc === '/'){
            return true;
        }else{
            return false;
        }
    }
}

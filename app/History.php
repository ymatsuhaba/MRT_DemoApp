<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    function isplus()
    {
        if ($this->operator === '+') {
            return true;

        } else {
            return false;
        }

    }

    function isminus()
    {
        if ($this->operator === '-') {
            return true;

        } else {
            return false;
        }

    }

    function istime()
    {
        if ($this->operator === '×') {
            return true;

        } else {
            return false;
        }

    }

    function isdivide()
    {
        if ($this->operator === '÷') {
            return true;

        } else {
            return false;

        }
    }
}



<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mrtdb extends Model
{
    public $timestamps = true;

    protected $fillable= array('id', 'type', 'start_date','end_date', 'prefecture', 'place', 'start_time', 'end_time',
        'salary', 'salary_system', 'transportation_system', 'transportation_expenses', 'work_form', 'facility_type');

    protected $hidden = array('id');

}

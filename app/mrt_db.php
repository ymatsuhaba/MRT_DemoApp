<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class mrt_db extends Model
{
    protected $hidden = array('id');

    public $timestamps = true;

    protected $fillable= array('type', 'start_date','end_date', 'prefecture', 'place', 'start_time', 'end_time',
        'salary', 'salary_system', 'transportation_system', 'transportation_expenses', 'work_form', 'facility_type');
}

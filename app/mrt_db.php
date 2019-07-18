<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class mrt_db extends Model
{

    protected $guarded = array('id');

    protected $fillable = ['type', 'start_date','end_date', 'prefecture', 'place', 'start_time', 'end_time',
        'salary', 'salary_system', 'transportation_system', 'transportation_expenses', 'work_form', 'facility_type'];

    public $timestamps = false;

}

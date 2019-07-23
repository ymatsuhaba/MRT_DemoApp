<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mrtdbFind extends Model
{
    public $timestamps = false;

    protected $fillable = ['type', 'startDate','endDate', 'week','prefecture', 'place', 'startTime', 'endTime',
    'salary', 'salarySystem', 'transportationSystem', 'transportationExpenses', 'workForm', 'facilityType'];

}

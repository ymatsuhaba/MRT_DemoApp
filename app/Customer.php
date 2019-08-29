<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    public $guarded = 'id';

    public $fillable = [
        'customer'
        , 'postcode'
        , 'prefectures'
        , 'city'
        , 'block_number'
        , 'building_name_or_apartment_number'
        , 'tel'
        , 'fax'
    ];
}

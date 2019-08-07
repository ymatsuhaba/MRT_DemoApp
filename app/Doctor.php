<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //作成時間と更新時間の自動更新をOFFに設定
    public $timestamp = false;

    public static function findOrfail($doctor_id)
    {
    }

}

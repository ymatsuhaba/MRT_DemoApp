<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //schemaでテーブルを作成
        schema::create('doctors', function (Blueprint $table){
            //カラムを作成
            $table->bigIncrements('id');
            $table->string('doctor_name', 20);
            $table->string('birthplace');
            $table->string('sex');
            $table->date('date_of_birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //ロールバック処理（前のバージョンに戻す）
        schema::drop('doctors');
    }
}

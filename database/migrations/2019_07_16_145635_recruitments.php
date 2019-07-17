<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recruitments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitments', function (Blueprint $table) {
            $table->bigIncrements('recruitment_id');
            $table->string('job_offer_type');
            $table->date('work_start_date');
            $table->date('work_end_date');
            $table->time('work_start_time');
            $table->time('work_end_time');
            $table->string('prefectures');
            $table->string('location');
            $table->string('salary_type');
            $table->integer('salary');
            $table->string('transport_money_type');
            $table->integer('transport_money');
            $table->string('work_form');
            $table->string('facility_type');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruitments');
    }
}

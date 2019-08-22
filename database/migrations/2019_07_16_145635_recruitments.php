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
            $table->time('work_start_time')->nullable();
            $table->time('work_end_time')->nullable();
            $table->string('prefectures');
            $table->string('location')->nullable();
            $table->string('salary_type')->nullable();
            $table->integer('salary')->nullable();
            $table->string('transport_money_type')->nullable();
            $table->integer('transport_money')->nullable();
            $table->string('work_form')->nullable();
            $table->string('facility_type')->nullable();
            $table->string('medical')->nullable();


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

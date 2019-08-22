<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spot_job', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('job_offer_type', 1);
            $table->date('work_start_date');
            $table->date('work_end_date');
            $table->time('work_start_time')->nullable();
            $table->time('work_end_time')->nullable();
            $table->string('prefectures', 10);
            $table->string('location', 300)->nullable();
            $table->string('salary_type')->nullable();
            $table->integer('salary')->nullable();
            $table->string('transport_money_type', 1)->nullable();
            $table->integer('transport_money')->nullable();
            $table->string('clinical_department')->nullable();
            $table->string('work_form')->nullable();
            $table->string('facility_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spot_job');
    }
}

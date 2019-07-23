<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMrtdbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrt_dbs', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('主キー');
            $table->string('type')->comment('求人種別');
            $table->date('startDate')->comment('開始日付');
            $table->date('endDate')->comment('終了日付');
            $table->string('prefecture',10)->comment('都道府県名');
            $table->string('place',200)->comment('住所');
            $table->time('startTime')->comment('開始時間');
            $table->time('endTime')->comment('終了時間');
            $table->integer('salary')->comment('給料');
            $table->integer('hourlySalary')->comment('希望時給');
            $table->string('salarySystem')->comment('給与体系');
            $table->string('medical')->comment('診療科目');
            $table->integer('transportationExpenses')->comment('交通費');
            $table->string('transportationSystem')->comment('交通費体系');
            $table->string('workForm')->comment('勤務体系');
            $table->string('facilityType')->comment('施設種別');
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
        Schema::dropIfExists('mrt_dbs');
    }
}

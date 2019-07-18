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
            $table->date('start_date')->comment('開始日付');
            $table->date('end_date')->comment('終了日付');
            $table->string('prefecture',10)->comment('都道府県名');
            $table->string('place',200)->comment('住所');
            $table->time('start_time')->comment('開始時間');
            $table->time('end_time')->comment('終了時間');
            $table->integer('salary')->comment('給料');
            $table->string('salary_system')->comment('給与体系');
            $table->integer('transportation_expenses')->comment('交通費');
            $table->string('transportation_system')->comment('交通費体系');
            $table->string('work_form')->comment('勤務体系');
            $table->string('facility_type')->comment('施設種別');
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
        Schema::dropIfExists('mrtdbs');
    }
}

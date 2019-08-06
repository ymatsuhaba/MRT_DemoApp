<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpMrtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_sp_mrt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('Chinese_sei');
            $table->char('Chinese_mei');
            $table->char('Japanese_sei');
            $table->char('Japanese_mei');
            $table->integer('gender');
            $table->char('email');
            $table->char('password');
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
        Schema::dropIfExists('_sp_mrt');
    }
}

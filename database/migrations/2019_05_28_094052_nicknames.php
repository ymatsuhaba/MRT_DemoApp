<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Nicknames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(‘nicknames’, function (Blueprint $table) {
            $table->bigIncrements(‘id’);
            $table->string(‘name’);
            $table->string(‘from’);
            $table->string(‘nickname’);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(‘nicknames’);
    }
}

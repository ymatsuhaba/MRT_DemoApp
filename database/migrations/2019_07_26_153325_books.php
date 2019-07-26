<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('books', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title');
                $table->string('author');
                $table->integer('release_date');
                $table->string('cover');
                $table->string('status');
                $table->integer('registration_date');
                $table->integer('update_date');
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('books');

    }
}

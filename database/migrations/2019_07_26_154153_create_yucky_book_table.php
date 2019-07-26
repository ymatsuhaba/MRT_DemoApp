<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYuckyBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yucky_books', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id');
            $table->string('book_title')->comment('タイトル');
            $table->string('author_name')->comment('著者');
            $table->date('release_date')->comment('発売日');
            $table->integer('lending_situation')->comment('貸出フラグ');
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
        Schema::dropIfExists('yucky_books');
    }
}

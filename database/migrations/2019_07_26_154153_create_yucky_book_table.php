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
            $table->string('image_url')->comment('本の画像イメージ');
            $table->integer('lending_situation')->comment('貸出フラグ');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
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

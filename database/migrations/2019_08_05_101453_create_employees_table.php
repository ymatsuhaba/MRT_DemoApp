<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id')->comment('従業員ID');
            $table->integer('dept_id')->comment('部署ID');
            $table->string('name')->comment('名前');
            $table->string('address')->comment('住所');
            $table->string('email')->comment('メールアドレス');
            $table->integer('old')->comment('年齢');
            $table->string('tel')->comment('電話番号');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}

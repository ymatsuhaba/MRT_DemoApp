<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MRTCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MRTCustomerTable', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('customer')->comment('医療法人様名または病医院様名');
            $table->string('postcode')->comment('郵便番号');
            $table->string('prefectures')->comment('住所（都道府県）');
            $table->string('city')->comment('住所（市区町村）');
            $table->string('block_number')->comment('住所（丁目番地）');
            $table->string('building_name or apartment_number')->comment('住所（建物名・部屋番号）');
            $table->string('tel')->comment('電話番号');
            $table->string('fax')->comment('FAX');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MRTCustomerTable');

    }
}

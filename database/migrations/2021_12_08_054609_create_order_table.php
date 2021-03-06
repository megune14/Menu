<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//<<<<<<<< HEAD:Menu/database/migrations/2021_12_08_054609_create_order_table.php
        Schema::create('order', function (Blueprint $table) {
            $table->id();
           
            $table->string('name');
            $table->integer('price');
            $table->integer('quantity');
        });
//========

      // Schema::table('order_lists', function (Blueprint $table) {
      //     // noteカラムにNULLを許容
      //     $table->text('image')->nullable()->change();
      // });


      //  Schema::create('order_lists', function (Blueprint $table) {
      ////      $table->id();
      //      $table->string('name');
      //      $table->integer('price');
      //      $table->integer('quantity');
      //      $table->integer('point');
      //      $table->integer('total');
//>>>>//>>>> 41e182fcf79638e61bd9f2eb54c21e61cad30f26:Menu/database/migrations/2021_12_02_062356_create_order_lists_table.php
        //    $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP //on update CURRENT_TIMESTAMP'));
        //    $table->timestamp('created_at')->default(DB::raw//('CURRENT_TIMESTAMP'));
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
    
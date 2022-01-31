<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_detail_tables', function (Blueprint $table) {
            $table->bigIncrements('OrderDetailID');
            $table->unsignedBigInteger('order_table_OrderID')->constrained('order_tables');
            $table->unsignedBigInteger('CommodityID')->constrained('commodity_tables');
            $table->integer('Quantity');
            $table->integer('Flag')->default(0);
            $table->foreign('order_table_OrderID')->references('OrderID')->on('order_tables')->cascadeOnDelete();
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
        Schema::dropIfExists('order_detail_tables');
    }
}

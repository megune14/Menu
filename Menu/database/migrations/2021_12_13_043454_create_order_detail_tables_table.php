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
            $table->unsignedBigInteger('OrderDetailID')->primary();
            $table->unsignedBigInteger('OrderID')->constrained('order_tables');
            $table->unsignedBigInteger('CommodityID')->constrained('commodity_tables');
            $table->integer('Quantity');
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

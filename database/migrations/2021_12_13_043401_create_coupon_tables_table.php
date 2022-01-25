<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupon_tables', function (Blueprint $table) {
            $table->bigIncrements('CouponID');
            $table->unsignedBigInteger('StoreID')->constrained('admins')->cascadeOnDelete()->cascadeOnDelete();
            $table->unsignedBigInteger('CommodityID')->constrained('commodity_tables')->cascadeOnDelete();
            $table->integer('Point');
            $table->date('FirstDay');
            $table->date('LastDay');
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
        Schema::dropIfExists('coupon_tables');
    }
}

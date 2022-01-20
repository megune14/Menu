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
            $table->unsignedBigInteger('CouponID')->primary();
            $table->unsignedBigInteger('StoreID')->constrained('admins');
            $table->unsignedBigInteger('CommodityID')->constrained('commodity_tables');
            $table->integer('Point');
            $table->date('Day');
            $table->softDeletes();
            $table->rememberToken();
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

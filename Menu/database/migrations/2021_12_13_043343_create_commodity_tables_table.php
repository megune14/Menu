<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommodityTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodity_tables', function (Blueprint $table) {
            $table->unsignedBigInteger('CommodityID')->primary();
            $table->string('CommodityName');
            $table->string('CommodityDetail');
            $table->string('Allergy');
            $table->string('Calory');
            $table->integer('Price');
            $table->integer('StopFlag');
            $table->unsignedBigInteger('CategoryID');
            $table->unsignedBigInteger('StoreID')->constrained('store_tables');
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
        Schema::dropIfExists('commodity_tables');
    }
}

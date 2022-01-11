<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_foods', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->string('explanation');
            $table->integer('price');
            $table->integer('quantity');
            $table->string('allergy');
            $table->integer('calorie');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP    on update CURRENT_TIMESTAMP'));
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_foods');
    }
}

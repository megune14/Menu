<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->integer('point');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('firstname'); //苗字を追加
            $table->string('lastname'); //名前を追加
            $table->date('birthday'); //誕生日を追加
            $table->softDeletes();
            $table->unique(['email', 'deleted_at']);
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
        Schema::dropIfExists('users');
    }
}

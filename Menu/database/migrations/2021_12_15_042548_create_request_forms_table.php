<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<<< HEAD:Menu/database/migrations///2021_12_13_043329_create_admin_tables_table.php
class CreateAdminTablesTable extends Migration
========
class CreateRequestFormsTable extends Migration
>>>>>>>> f7a55355cd2abf74ef3c77cbd2d5c3357fd8bc66:Menu/database/migrations/2021_12_15_042548_create_request_forms_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:Menu/database/migrations2021_12_13_043329_create_admin_tables_table.php
        Schema::create('admin_tables', function (Blueprint $table) {
========
        Schema::create('request_forms', function (Blueprint $table) {
>>>>>>>> f7a55355cd2abf74ef3c77cbd2d5c3357fd8bc66:Menu/database/migrations///2021_12_15_042548_create_request_forms_table.php
            $table->id();
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
<<<<<<<< HEAD:Menu/database/migrations/2021_12_13_043329_create_admin_tables_table.php
        Schema::dropIfExists('admin_tables');
========
        Schema::dropIfExists('request_forms');
>>>>>>>> f7a55355cd2abf74ef3c77cbd2d5c3357fd8bc66:Menu/database/migrations/2021_12_15_042548_create_request_forms_table.php
    }
}

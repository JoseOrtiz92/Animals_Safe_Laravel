<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('direccion');
            $table->string('telefono');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /* 
        administrador,
        direccion,
        telefono
    */
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        $table->dropColumn('name');
        $table->dropColumn('email');
        $table->dropColumn('password');
        $table->dropColumn('direccion');
        $table->dropColumn('telefono');
    }
}

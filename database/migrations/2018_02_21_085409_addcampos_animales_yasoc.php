<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddcamposAnimalesYasoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('asociaciones', function(Blueprint $table){
            $table->string('telefono')->nullable()->change();
            $table->string('cif')->nullable();
        });

        Schema::table('animales', function(Blueprint $table){
            $table->date('fechaRecogida')->nullable()->change();
        });

        Schema::table('users', function(Blueprint $table){
            $table->string('dni')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

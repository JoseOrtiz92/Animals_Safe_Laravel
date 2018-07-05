<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animales', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('tipoAnimal');
            $table->string('raza');
            $table->string('nombre');
            $table->integer('edad')->nullable();
            $table->string('sexo');
            $table->string('color');
            $table->text('descripcion');
            $table->date('fechaRecogida');
            $table->integer('id_asociacion')->unsigned();
            $table->foreign('id_asociacion')->references('id')->on('asociaciones');
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
        Schema::dropIfExists('animals');
    }
}

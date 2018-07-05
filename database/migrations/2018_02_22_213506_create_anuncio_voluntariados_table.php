<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnuncioVoluntariadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuncio_voluntariados', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->increments('id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->integer('id_asociacion')->unsigned();
            $table->foreign('id_asociacion')->references('id')->on('asociaciones');
            $table->date('fechaEvento');
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
        Schema::dropIfExists('anuncio_voluntariados');
    }
}

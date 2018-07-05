<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CambiarTrabajas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trabajas', function(Blueprint $table){           
            $table->integer('id_AnuncioVoluntariado')->unsigned();
            $table->foreign('id_AnuncioVoluntariado')->references('id')->on('anuncio_voluntariados');
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

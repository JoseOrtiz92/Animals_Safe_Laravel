<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnunciosManual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('anuncios')->insert([
        'telefono'=> '684327158',        
        'descripcion' => 'Mi gatito se ha escapado, por la zona de la zona franca en cadiz, por favor es muy pequeño, solo tiene 4 meses. Responde al nombre de Kira, es marron, parece un tigre pequeñito.',        
        'imagen' => 'kira.png',
        'id_usuario' => 26,
       ]
        );
        DB::table('anuncios')->insert([
        'telefono'=> '956874139',        
        'descripcion' => 'Mi perra se ha perdido, lo deje jugar en el parque con otros perros y ha desaparecido, por favor si alguien lo encuentra pongase en contacto. Recompensa economica. Responde al nombre de Peca, es un dalmata y es muy amigable.',        
        'imagen' => 'peca.png',
        'id_usuario' => 26,
       ]
        );
        DB::table('anuncios')->insert([
        'telefono'=> '667341892',        
        'descripcion' => 'Mi gato se ha escapado, vivo en la barriada de la Bazan en San Fernando. Si al guien lo ve o lo encuentra llame al telefono por favor.',       
        'imagen' => 'gato1.png',
        'id_usuario' => 26,
       ]
        );
        DB::table('anuncios')->insert([
        'telefono'=> '842913745',        
        'descripcion' => 'Mi perro se ha escapado, nos levantamos por la mañana y no estaba en el campo, puede que haya salido a cerretera. Vivo en la carretera del marquesado, es un bebe de Husky. Llame si lo encuentra por favor.',        
        'imagen' => 'perro1.png',
        'id_usuario' => 26,
       ]
        );
        DB::table('anuncios')->insert([
        'telefono'=> '967012064',        
        'descripcion' => 'Mi perrita Tana desapareció esta mañana en el parque genoves entre dos matorrales, y cuando llegué no estaba. Si alguien la ve por esa zona o la encuentra llame al numero de telefono. Se ofrece una Recompensa economica para el que la encuentre. Tiene solo 6 meses y es de color blanco.',        
        'imagen' => 'tana.png',
        'id_usuario' => 26,
       ]
        );
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

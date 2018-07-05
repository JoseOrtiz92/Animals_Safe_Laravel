<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FactoriaManual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       DB::table('asociaciones')->insert([
        'nombre'=> 'AGAM',
        'direccion'=>'Calle Parlamento, 9, Cadiz',
        'telefono' =>'956843921',
        'email'=> 'AGAMong@gmail.com',
        'capacidad' => 25,
        'ocupacion' => 12,
        'descripcion' => 'Asociacion Gaditana de acuarios y mascotas. Ven e informate sobre como adoptar animales en la ciudad de Cadiz. ¡Tenemos muchos amiguitos que puedes conocer!',
        'latitud' => 36.51598510000001,
        'longitud' => -6.280958100000021,
        'imagen' => 'asociaciones/February2018/AGAM.png',
        'id_usuario' => 1,

       ]
        );
        
        DB::table('asociaciones')->insert([
        'nombre'=> 'Aprodea',
        'direccion'=>'Calle Real, 76, San Fernando, Cadiz',
        'telefono' =>'651609153',
        'email'=> 'AprodeaSanFer@gmail.com',
        'capacidad' => 30,
        'ocupacion' => 26,
        'descripcion' => 'Asociacion Pro Defensa Animal.Por los que sufren en silencio. ¡Ven y pasa un rato con nuestros animales y llevate uno a casa!',
        'latitud' => 36.4640679,
        'longitud' => -6.198412299999973,
        'imagen' => 'asociaciones/February2018/Aprodea.png',
        'id_usuario' => 1,

       ]
        );

        DB::table('asociaciones')->insert([
        'nombre'=> 'Refugio Kimba Chiclana',
        'direccion'=>'Diseminado Pago el Cuartillo, 177, 11130, Cádiz',
        'telefono' =>'679968900',
        'email'=> 'RefugioKimbaChiclana@gmail.com',
        'capacidad' => 60,
        'ocupacion' => 46,
        'descripcion' => 'La Sociedad Protectora de Animales y Plantas de Cádiz, más conocida como Refugio Kimba, es una sociedad sin ánimo de lucro, legalmente constituida, fundada en el año 1872. Totalmente independiente, se mantiene económicamente gracias a las cuotas de los socios y a los donativos, sobre todo extranjeros.',
        'latitud' => 36.3834638,
        'longitud' => -6.077997200000027,
        'imagen' => 'asociaciones/February2018/Kimba.png',
        'id_usuario' => 1,

       ]
        );

        DB::table('asociaciones')->insert([
        'nombre'=> 'Zarpa Proteccion Animal',
        'direccion'=>'Calle de Cristóbal Colón, 6 - 8, 50007 Zaragoza',
        'telefono' =>'637412867',
        'email'=> 'info@zarpa.org',
        'capacidad' => 100,
        'ocupacion' => 67,
        'descripcion' => 'Zarpa es una asociación sin ánimo de lucro que se dedica a mejorar la vida de los animales abandonados o maltratados.',
        'latitud' => 41.6411303,
        'longitud' => -0.8852532999999312,
        'imagen' => 'asociaciones/February2018/Zarpa.png',
        'id_usuario' => 1,

       ]
        );

        DB::table('asociaciones')->insert([
        'nombre'=> 'ADPCA',
        'direccion'=>'Calle Amsterdam, 18, 50003 Zaragoza',
        'telefono' =>'976444897',
        'email'=> 'info@adpca.es',
        'capacidad' => 82,
        'ocupacion' => 34,
        'descripcion' => 'El nombre de nuestra Asociación, Asociación Para la Defensa y Prevención de la Crueldad contra los Animales, define muy bien el objetivo que persigue: la defensa y la prevención de la crueldad contra los animales, fundamentalmente de los animales domésticos.',
        'latitud' => 41.663341,
        'longitud' => -0.9038553999999976,
        'imagen' => 'asociaciones/February2018/apdca.png',
        'id_usuario' => 1,

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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnimalesManual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('animales')->insert([
        'nombre'=> 'Rex',
        'tipoAnimal'=>'Perro',
        'raza' =>'Pastor Aleman',
        'edad'=> '1',
        'sexo' => 'Macho',
        'color' => 'Negro y Marron',
        'descripcion' => 'Rex es un perrito muy cariñoso. Siempre quiere jugar. Es muy pequeñito y esta en perfecto estado de salud. ¡Busca Familia que le de mucho cariño!',        
        'imagen' => 'animales/February2018/rex.png',
        'id_asociacion' => 23,
       ]
        );
        DB::table('animales')->insert([
        'nombre'=> 'Rayo',
        'tipoAnimal'=>'Perro',
        'raza' =>'Husky',
        'edad'=> '1',
        'sexo' => 'Macho',
        'color' => 'Blanco',
        'descripcion' => 'Rayo es un perrito muy activo y necesita una casa con espacio para jugar. Es muy bueno y y listo. ¡Busca Familia que le de mucho cariño!',        
        'imagen' => 'animales/February2018/rayo.png',
        'id_asociacion' => 23,
       ]
        );
        DB::table('animales')->insert([
        'nombre'=> 'Rufus',
        'tipoAnimal'=>'Perro',
        'raza' =>'Chucho',
        'edad'=> '4',
        'sexo' => 'Macho',
        'color' => 'Negro',
        'descripcion' => 'Rufus es un perrito abandonado deseando encontrar una familia de nuevo. Es un poco mayor, pero es muy tranquilo y se relaciona muy bien con el resto de animales.',        
        'imagen' => 'animales/February2018/rufus.png',
        'id_asociacion' => 23,
       ]
        );
        DB::table('animales')->insert([
        'nombre'=> 'Pisky',
        'tipoAnimal'=>'Gato',
        'raza' =>'Atigrado',
        'edad'=> '1',
        'sexo' => 'Hembra',
        'color' => 'Tigre',
        'descripcion' => 'Es una gatita muy bonita, lista y cariñosa. Siempre busca la compañia y es muy divertido verla jugar.',        
        'imagen' => 'animales/February2018/pisky.png',
        'id_asociacion' => 23,
       ]
        );
        DB::table('animales')->insert([
        'nombre'=> 'Neko',
        'tipoAnimal'=>'Gato',
        'raza' =>'Azul Ruso',
        'edad'=> '1',
        'sexo' => 'Macho',
        'color' => 'Gris',
        'descripcion' => 'Gato precioso que necesita mimos y atencion debido a que es muy pequeño. Esta deseando encontrar una familia que lo quiera!',        
        'imagen' => 'animales/February2018/neko.png',
        'id_asociacion' => 23,
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

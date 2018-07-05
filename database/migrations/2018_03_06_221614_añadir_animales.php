<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AñadirAnimales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('animales')->insert([
        'nombre'=> 'Saltarina',
        'tipoAnimal'=>'Perro',
        'raza' =>'Mestizo',
        'edad'=> '4',
        'sexo' => 'Hembra',
        'color' => 'Marron',
        'descripcion' => 'Deambulaba su mami por el campo, la rescataron, y comprobaron que tenía varios premios en su tripita. Días después, en una tarde de lluvia y tormenta, nacieron Pulga Saltarina y sus 7 hermanitos.',        
        'imagen' => 'animales/February2018/saltarina.jpg',
        'id_asociacion' => 23,
       ]
        );
        
        DB::table('animales')->insert([
        'nombre'=> 'Fender',
        'tipoAnimal'=>'Perro',
        'raza' =>'Mestizo',
        'edad'=> '2',
        'sexo' => 'Macho',
        'color' => 'Marron y Negro',
        'descripcion' => 'Fender es un perro muy sociable con personas, además de obediente. Le encanta recibir mimos, es cariñosote.',        
        'imagen' => 'animales/February2018/fender.jpg',
        'id_asociacion' => 24,
       ]
        );

        DB::table('animales')->insert([
        'nombre'=> 'Musi',
        'tipoAnimal'=>'Gato',
        'raza' =>'Común Europeo',
        'edad'=> '10',
        'sexo' => 'Hembra',
        'color' => 'Negro y Blanco',
        'descripcion' => 'Me llamo Músi, nací junto a otros 3 hermanitos. Mi mamá nos cuidó muy bien, pero no es vida en la calle con tanto frio, y nuestras cuidadores de la colonia, decidieron darnos una oportunidad de mejorar.',        
        'imagen' => 'animales/February2018/musi.jpg',
        'id_asociacion' => 24,
       ]
        );

        DB::table('animales')->insert([
        'nombre'=> 'Lupita',
        'tipoAnimal'=>'Gato',
        'raza' =>'Común Europeo',
        'edad'=> '8',
        'sexo' => 'Hembra',
        'color' => 'Blanco y Marron',
        'descripcion' => 'La pequeña Lupita apareció en un parque frotandose contra las piernas de la gente, limpita y pidiendo mimos y comida, no pudimos dejarla en la calle y nos la llevamos en brazos a casa.',        
        'imagen' => 'animales/February2018/lupita.jpg',
        'id_asociacion' => 25,
       ]
        );
        DB::table('animales')->insert([
        'nombre'=> 'Namibia',
        'tipoAnimal'=>'Perro',
        'raza' =>'Cruce Labrador/Mastín',
        'edad'=> '2',
        'sexo' => 'Hembra',
        'color' => 'Marron Claro y Negro',
        'descripcion' => 'Namibia nació, junto con sus 9 hermanos. Es muy cariñosa y juguetona, y está muy sana.
',        
        'imagen' => 'animales/February2018/namibia.jpg',
        'id_asociacion' => 25,
       ]
        );
        DB::table('animales')->insert([
        'nombre'=> 'Filipeti',
        'tipoAnimal'=>'Perro',
        'raza' =>'Labrador',
        'edad'=> '1',
        'sexo' => 'Macho',
        'color' => 'Marron Claro',
        'descripcion' => 'A Filipeti lo echaron a la terraza de una casa a la que solo van de vacaciones...asique el pobre se paso la noche y el dia llorando hasta que un vecino lo vio y se lo llevó para sacarlo de alli.',        
        'imagen' => 'animales/February2018/filipeti.jpg',
        'id_asociacion' => 26,
       ]
        );
        DB::table('animales')->insert([
        'nombre'=> 'Samba',
        'tipoAnimal'=>'Perro',
        'raza' =>'Mestizo',
        'edad'=> '12',
        'sexo' => 'Hembra',
        'color' => 'Marron y Negro',
        'descripcion' => 'Samba es una perra que lo único que demanda es cariño, ese que quizás, nunca haya tenido. Es muy buena, y sabe hacer sus necesidades fuera de casa.',        
        'imagen' => 'animales/February2018/samba.jpg',
        'id_asociacion' => 26,
       ]
        );
        DB::table('animales')->insert([
        'nombre'=> 'Frida',
        'tipoAnimal'=>'Gato',
        'raza' =>'Común Europeo',
        'edad'=> '16',
        'sexo' => 'Hembra',
        'color' => 'Negro y Marron',
        'descripcion' => 'Ella es casi una cachorrita, convive perfectamente en una casa, es sociable, y sería feliz teniendo un hogar definitivo.',        
        'imagen' => 'animales/February2018/frida.jpg',
        'id_asociacion' => 26,
       ]
        );

        DB::table('asociaciones')->insert([
        'nombre'=> 'Sociedad Canina de Aragon',
        'direccion'=>'Calle del Conde de Aranda, 32, 50003 Zaragoza',
        'telefono' =>'976445094',
        'email'=> 'info@scaragon.net',
        'capacidad' => 36,
        'ocupacion' => 22,
        'descripcion' => 'La Sociedad Canina de Aragón nace una pasión común por las razas caninas y se mantiene por la ilusión diaria en este mundo "de perros"',
        'latitud' => 41.6549392,
        'longitud' => -0.8870742000000291,
        'imagen' => 'asociaciones/February2018/sca.jpg',
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

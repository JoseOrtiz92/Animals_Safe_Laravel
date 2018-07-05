<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asociacion extends Model
{
    protected $table = 'asociaciones';

    protected $fillable=[
         'nombre', 'direccion', 'telefono', 'capacidad', 'ocupacion', 'descripcion', 
         'latitud', 'longitud', 'id_usuario', 'email',
    ];

   public function trabaja(){
        return $this->belongsToMany('\App\Trabaja','trabaja')
            ->withPivot('id_usuario','status');
    }

    public function usuario(){
    	return $this->belongsTo(user::class, 'id_usuario');
    }

    public function animal(){
    	return $this->hasMany(Animal::class);
    }

    
    public function anuncioVoluntariado(){
        return $this->hasMany(anuncioVoluntariado::class);
 }
}

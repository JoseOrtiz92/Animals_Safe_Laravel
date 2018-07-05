<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
   protected $table='anuncios';

   protected $fillable=[
         'descripcion', 'imagen', 'telefono', 
   ];

   public function Usuario(){
         return $this->belongsTo(User::class, 'id_usuario');
   }

   public function pathImagen(){
      return "/app/anuncios/".$this->imagen;
   }
}

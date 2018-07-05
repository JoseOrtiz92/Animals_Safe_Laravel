<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabaja extends Model
{
    protected $table = 'trabajas';

    
    public function usuario(){
    	return $this->belongsTo(user::class, 'id_usuario');
    }

    public function asociacion(){
    	return $this->belongsTo(asociacion::class, 'id_asociacion');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnuncioVoluntariado;
use App\Http\Request\TrabajaRequest;
use App\User;
use App\Trabaja;
use Illuminate\Support\Facades\Auth;

class AnuncioVoluntariadoController extends Controller
{
	public function index(){
		$anunciosVol = AnuncioVoluntariado::latest('titulo', 'descripcion','fechaEvento','id_asociacion')->paginate(6);
        $trabajas = Trabaja::where('id_usuario',Auth::id())->get();

		return view('anunciosVoluntariado.index', compact('anunciosVol', 'trabajas'));
	}

	 public function store() {
        $trabaja = new Trabaja;        
        $trabaja->id_usuario = request() -> input('id_usuario');
        $trabaja->id_asociacion = request() -> input('id_asociacion');
        $trabaja->fecha_Trabajo = request() -> input('fecha_Trabajo');
        $trabaja->id_AnuncioVoluntariado = request() -> input('id_anuncio');
        
        $trabaja -> save();
        return back()->with('message', ['success', __("Te has apuntado al Evento!!")]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnuncioRequest;
use App\Anuncio;
use App\User;

class AnuncioController extends Controller
{
    //Metodo index, para mostrar la pagina Anuncios

    public function index(){
        $anuncios = Anuncio::latest('imagen', 'descripcion','telefono','id_usuario')->paginate(6);
        return view('anuncios.index')->with('anuncios', $anuncios);     
    }

    public function modal(){
        return view('anuncios.AnuncioForm');
    }

    public function store(AnuncioRequest $anuncio_request) {
        $anuncio = new Anuncio;
        $anuncio->descripcion = $anuncio_request -> input('descripcion');
        $anuncio->telefono = $anuncio_request -> input('telefono');
        $anuncio->id_usuario = $anuncio_request ->input('id_usuario');
        if($anuncio_request->hasFile('file')) {
            $filename = uploadFile('file','anuncios');
            $anuncio->imagen = $filename;
        }      
        //dd($anuncio_request);
        $anuncio -> save();
        return back()->with('message', ['success', __("Anuncio creado correctamente")]); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Asociacion;
use APP\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class DondeAdoptar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animal=Animal::latest()->paginate(6);
        return view('animales.dondeadoptar', compact('animal'));
    }

    public function adoptar($id_animal, $id_asociacion){

        $animal= Animal::find($id_animal);
        $asociacion=Asociacion::find($id_asociacion);

        return view('animales.adoptar', compact('animal', 'asociacion'));
    }


    public function contrato($id_asociacion, $id_animal){
        $allUsers=User::all();
        $idUser=Auth::id();
        $animal=Animal::find($id_animal);
        $asoc=Asociacion::find($id_asociacion);
        $user=0;
        foreach($allUsers as $usuario) {
            if($usuario->id==$idUser){
                $user=$usuario;
            }
        }
        $pdf=PDF::loadView('animales.contrato', compact('user', 'animal', 'asoc'));
        return $pdf->download('contrato.pdf');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

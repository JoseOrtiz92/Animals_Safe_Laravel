<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Asociacion;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'role_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'direccion' => 'required|string',
            'telefono' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        if($data['role_id']==2){
            $user=User::create([
                'role_id' => $data['role_id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'direccion' => $data['direccion'],
                'telefono' => $data['telefono'],
            ]);
            return $user;
        }else{
            $user=User::create([
                'role_id' => $data['role_id'],
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'direccion' => $data['direccion'],
                'telefono' => $data['telefono'],
            ]);
            $maxid=DB::table('users')->max('id');

            $address = $data['direccion']; // Google HQ
            $prepAddr = str_replace(' ','+',$address);
            $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
            $output= json_decode($geocode);
            $latitude = $output->results[0]->geometry->location->lat;
            $longitude = $output->results[0]->geometry->location->lng;

            $asoc=Asociacion::create([
                'nombre' => $data['name'],
                'direccion' => $data['direccion'],
                'telefono' => $data['telefono'],
                'capacidad' => $data['capacidad'],
                'ocupacion'=> $data['ocupacion'],
                'email' => $data['email'],
                'descripcion' => $data['descripcion'],
                'id_usuario' => $maxid,
                'latitud' => $latitude,
                'longitud' => $longitude,
            ]);
            $asoc -> save();

            return $user;
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Asociacion;

class IndexController extends Controller
{

	public function mapa(){
		/*$datos=Asociacion::all();

	    $config = array();
		$marker = array();

	    $config['center'] = 'auto';

	    $config['zoom'] = 19;
	    $config['onboundschanged'] = '{
	            var mapCentre = map.getCenter();
	            marker_0.setOptions({
	                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
	            });
	    }';


	    $config['places'] = TRUE;
		$config['placesLocation'] = '36.5089, -6.2783';
		$config['google_host'] = 'maps.google.es';
		$config['placesRadius'] = 1; 

	    app('map')->initialize($config);

		foreach($datos as $dato){
			$marker['position'] = $dato['latitud'].','.$dato['longitud'];
			$marker['infowindow_content'] = "'".$dato["nombre"]."'".", ocupacion:'".$dato["ocupacion"].", capacidad:".$dato["capacidad"];
			$marker['animation'] = 'DROP';
			$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|EE2244|000000';
			app('map')->add_marker($marker);
		} 


	    $data['map'] = app('map')->create_map();
		return view('bienvenida', $data);*/

		$datos=Asociacion::all();
		return view('bienvenida', compact('datos'));
	}
}

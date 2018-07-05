<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{

	public function mapa(){
	    $config = array();
	    $config['center'] = 'auto';
	    $config['zoom'] = 17;
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

	    // set up the marker ready for positioning
	    // once we know the users location
	    $marker = array();
	    app('map')->add_marker($marker);



	    $marker = array();
		$marker['position'] = '36.5089, -6.2783';
		$marker['infowindow_content'] = 'Hospital Puerta del Mar';
		$marker['animation'] = 'DROP';
		$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		app('map')->add_marker($marker);


	    $marker = array();
		$marker['position'] = '36.5107, -6.2785';
		$marker['infowindow_type'] = 'html';
		$marker['infowindow_content'] = '<p>Otra casa</p></br><a href="http://www.escuelaempresacadiz.es">Página web</a>';
		$marker['animation'] = 'DROP';
		$marker['icon'] = 'https://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=B|EE2244|000000';
		app('map')->add_marker($marker);


	    //$map = app('map')->create_map();
	    //echo "<html><head><script type='text/javascript'>var centreGot = false;</script>".$map['js']."</head><body>".$map['html']."</body></html>";

	    $data['map'] = app('map')->create_map();
		return view('bienvenida', $data);
	}
}

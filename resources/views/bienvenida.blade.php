@extends('layouts.plantilla')
@section('css')
@endsection
@section('mapa')
<?php //echo $map['js']; ?>
@endsection

@section('content')
  <!-- Slider -->
  <div class="slider">
    <div class="container">
	    <div id="map"></div>
	    <script>
	      	function initMap() {
		        //var uluru = {lat: -25.363, lng: 131.044};
		        var donde = geoLocalizar();
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 11,
		          center: donde
		          //center: uluru
		          //center: new google.maps.LatLng(36.510662,-6.278709)
		          
		        });

			    //ponerMarcadores();

		        function geoLocalizar() {

			        // AQUÍ EMPIEZA LA GEOLOCALIZACIÓN
			        var infoWindow = new google.maps.InfoWindow({map: map});

			        // Try HTML5 geolocation.
			        if (navigator.geolocation) {
			          	navigator.geolocation.getCurrentPosition(function(position) {
			            	var pos = {
			              		lat: position.coords.latitude,
			              		lng: position.coords.longitude
			            	};

			            	infoWindow.setPosition(pos);
			            	infoWindow.setContent('Location found.');
			            	map.setCenter(pos);
			          	}, function() {
			            	handleLocationError(true, infoWindow, map.getCenter());
			          	});

			        } else {
			          	// Browser doesn't support Geolocation
			          	handleLocationError(false, infoWindow, map.getCenter());
			        }		        	
		        }


		        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
		        	infoWindow.setPosition(pos);
		        	infoWindow.setContent(browserHasGeolocation ?
		                'Error: The Geolocation service failed.' :
		                'Error: Your browser doesn\'t support geolocation.');
		      	}


		      	/*function ponerMarcadores() {
			        // AQUÍ COGEMOS LOS MARCADORES QUE HA MANDADO EL CONTROLADOR DESDE LA BD
			        var marcadores=<?php //echo json_encode($datos);?>;

			        for (var i = 0; i < marcadores.length; i++) {

			        	var latLng = new google.maps.LatLng(marcadores[i]['latitud'], marcadores[i]['longitud']);
				        var marker = new google.maps.Marker({
				           	position: latLng,
				            map: map
				        });


		      		}		      		
		      	}*/
		        
		      	/*var markers = [];*/

				var infoWin = new google.maps.InfoWindow({
					maxWidth:240
					});

		      	var markers = locations.map(function(location, i) {
				    var marker = new google.maps.Marker({
				      position: location
				    });
				    google.maps.event.addListener(marker, 'click', function(evt) {
				      infoWin.setContent(location.info);
				      infoWin.open(map, marker);
				    })
				    return marker;
			  	});

		        /*for (var i = 0; i < marcadores.length; i++) {
			        var marker = new google.maps.Marker({
		    	        position: new google.maps.LatLng(marcadores[i]['latitud'], marcadores[i]['longitud'])
		        	});
		        	markers.push(marker);
		        }*/

		        var markerCluster = new MarkerClusterer(map, markers, {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
	      	}
	      	/*Rellenar localizaciones*/
	      	var marcadores=<?php echo json_encode($datos);?>;
	      	var locations = [];
	      	for (var i = marcadores.length - 1; i >= 0; i--) {
	      		if(marcadores[i]['imagen']==null){
	      			locations[i]={
			      			lat: marcadores[i]['latitud'],
					  		lng: marcadores[i]['longitud'],
					  		info:
					  		'<br><label>Casa acogida de '+marcadores[i]['nombre']+'</label>'
					  		+'<br>Telefono: '+marcadores[i]['telefono']
					  		+'<br>Plazas disponibles: '+(marcadores[i]['capacidad']-marcadores[i]['ocupacion'])
					  		+'<br>Direccion: '+marcadores[i]['direccion']
		      		}
	      		}else{
		      		if (marcadores[i]['web']=='#'){
		      			locations[i]={
			      			lat: marcadores[i]['latitud'],
					  		lng: marcadores[i]['longitud'],
					  		info:
					  		'<a href="#" onclick="alerta()"><img src=storage/app/public/'+marcadores[i]['imagen']+' width="70px" height="70px"></img></a>'
					  		+'<br><label>'+marcadores[i]['nombre']+'</label>'
					  		+'<br>Telefono: '+marcadores[i]['telefono']
					  		+'<br>Plazas disponibles: '+(marcadores[i]['capacidad']-marcadores[i]['ocupacion'])
					  		+'<br>Direccion: '+marcadores[i]['direccion']
		      			}
		      		}else{
		      			locations[i]={
			      			lat: marcadores[i]['latitud'],
					  		lng: marcadores[i]['longitud'],
					  		info:
					  		'<a href='+marcadores[i]['web']+' target="blank"><img src=storage/app/public/'+marcadores[i]['imagen']+' width="70px" height="70px"></img></a>'
					  		+'<br><label>'+marcadores[i]['nombre']+'</label>'
					  		+'<br>Telefono: '+marcadores[i]['telefono']
					  		+'<br>Plazas disponibles: '+(marcadores[i]['capacidad']-marcadores[i]['ocupacion'])
					  		+'<br>Direccion: '+marcadores[i]['direccion']
		      			}
		      		}
	      		}
	      		
	      	}

	      	google.maps.event.addDomListener(window, 'load', initMap);

	      	function alerta(){
	      		alert("Esta asociacion no tiene pagina web :(")
	      	}
	    </script>
	
	    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
	    </script>

	    <script async defer
	    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDClXvmJmAKPFtnPK0_Vb0FetYjFR2I9io&callback=initMap">
	    </script>

      <?php //echo $map['html']; ?>
    </div>
  </div>
  <!-- Slider Ends! -->
	<div class="modal fade" tabindex="-1" id="modalWeb" role="dialog" aria-labelledby="favoritesModalLabel">
        <div class="modal-dialog" role="document">
         	<div class="modal-content">

         	</div>
        </div>
    </div>
  
@endsection
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
		          zoom: 8,
		          center: donde
		          //center: uluru
		          //center: new google.maps.LatLng(36.510662,-6.278709)
		          
		        });

			    ponerMarcadores();

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


		      	function ponerMarcadores() {
			        // AQUÍ COGEMOS LOS MARCADORES QUE HA MANDADO EL CONTROLADOR DESDE LA BD
			        var marcadores=<?php echo json_encode($datos);?>;

			        for (var i = 0; i < marcadores.length; i++) {

			        	var latLng = new google.maps.LatLng(marcadores[i]['latitud'], marcadores[i]['longitud']);
				        var marker = new google.maps.Marker({
				           	position: latLng,
				            map: map
				        });


		      		}		      		
		      	}


	      	}
	    </script>
	    <script async defer
	    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDClXvmJmAKPFtnPK0_Vb0FetYjFR2I9io&callback=initMap">
	    </script>




      <?php //echo $map['html']; ?>
    </div>
  </div>
  <!-- Slider Ends! -->

  
@endsection
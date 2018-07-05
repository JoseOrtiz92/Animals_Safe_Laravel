<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Animal's Safe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="Keywords" content="">
	<meta name="Description" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/animate.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	@yield('css')
	@yield('script')
	@yield('mapa')

</head>
	<body>
		<div class="main-container">
	  		<!-- Header -->
		  <div class="header fondoNav">
		    <div class="container fondoContain">
		      <h1><a href="{{ route('map') }}"></a></h1>
		      		
		      <!-- Links -->
		      <div class="links">
		      	<nav class="navbar navbar-default menu">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
				      </button>
				      <a class="navbar-brand" href="{{ route('map') }}"></a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li>
			        		<li><a href="{{ route('anuncios') }}">Animales perdidos</a></li>
			        		<li><a href="{{ route('adoptar') }}">Adopciones</a></li>
			        		<li><a href="{{ route('asociaciones') }}">Asociaciones</a></li>
			        		<li><a href="{{ route('voluntariado') }}">Voluntariado</a></li>
			        	</li>
				      </ul>
				      <ul class="nav navbar-nav navbar-right">
				        @guest
                            <li><a href="{{ route('login') }}" data-toggle='modal' data-target='#modalLogin'>Login</a></li>
                            <li><a href="{{ route('register') }}" data-toggle='modal' data-target='#modalRegistro'>Registro</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                    	@if (Auth::user()->role_id!=2)
                                    		<a href="/AnimalSafe/admin">Administracion</a>
                                    	@endif
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Desconectarse
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
				      </ul>
				    </div>
				  </div>
				</nav>
		        <!-- Main Menu -->
		        <!-- Main Menu Ends! -->
		      </div>
		      <!-- Links Ends! -->
		    </div>
		  </div>
		</div>
		<div style="background-color: #FFEBFA">
			@yield('content')
		</div>
		  

		  <!-- footer -->
		  <div class="footer col-md-12">
		    <div class="container">

		      <p>copyright 2018. Premios don Bosco</a></p>
			    <ul class="menu">
				    <li><a href="https://www.facebook.com/Animal-Safe-349221578894256/" target="blank"><i class="fa fa-facebook fa-3x"></i></a></li>
				    <li><a href="https://twitter.com/AnimalSafeWeb?lang=es" target="blank"><i class="fa fa-twitter fa-3x"></i></a></li>
				    <li><a href="https://www.instagram.com/animalsafeweb/" target="blank"><i class="fa fa-instagram fa-3x"></i></a></li>
			  	</ul>

		    </div>
		  </div>
		  <!-- footer ends -->

		  <!-- back to top -->
		  <div class="back">
		    <div class="container">
		      <a href="#top"><i class="fa fa-angle-up fa-3x"></i></a>
		    </div>
		  </div>
		  <!-- back to top ends -->
		</div>

		<!-- Scripts -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery.flexslider-min.js') }}"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagelightbox.min.js"></script>
		<script src="js/theme.js"></script>
		<script src="js/jquery.inview.min.js"></script>
		<script src="js/form.js"></script>

		<!-- Scripts Ends! -->
		<!-- Modal Login -->
		<div class="modal fade" tabindex="-1" id="modalLogin" role="dialog" aria-labelledby="favoritesModalLabel">
        	<div class="modal-dialog" role="document">
         		<div class="modal-content">

         		</div>
        	</div>
      	</div>

      	<!-- Modal Register -->
      	<div class="modal fade" tabindex="-1" id="modalRegistro" role="dialog" aria-labelledby="favoritesModalLabel">
        	<div class="modal-dialog" role="document">
         		<div class="modal-content">

         		</div>
        	</div>
      	</div>
		<script>
		/* When the user clicks on the button, 
		toggle between hiding and showing the dropdown content */
		function mostrar() {
		    document.getElementById("dropbtn1").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event){
		  if (!event.target.matches('.dropbtn')){

		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		}
		</script>

	</body>
</html>
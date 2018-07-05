@extends('layouts.plantilla')
@section('css')
<link href="{{ asset('css/dondeadoptar.css') }}" rel="stylesheet" type="text/css">

	
@section('content')
		<div class="contenedor row">
			
			<div class="titulo text-center col-md-12">
				<h2>{{ __("Mascotas en Adopcion") }}</h2>
			</div>
			@forelse($animal as $a)
				<div class="col-md-3 tablon">
					<div class="cabecera">
						<img class="imagen" src="{{ 'storage/app/public/'.$a->imagen }}" width="280px">
					</div>
					<div class="nombre text-center">
						<h5>{{ $a->nombre }}</h5>
					</div>
					<div class="raza">
						<label for="raza">{{ __("Raza") }}:</label>
						<p id="raza">{{ $a->raza }}</p>
					</div>
					<div class="edad">
						<label for="edad">{{ __("Edad") }}:</label>
						<p id="edad">{{ $a->edad }}</p>
					</div>
					<a href='javascript:leermas({{ $a->id }})' '><span id='{{$a->id}}' class="glyphicon glyphicon-menu-down"></span></a>
						<div id="descripcion{{$a->id}}" style='display:none;' class="descripcion">
							<p>{{ $a->descripcion }}</p>
							<form action="adoptar/{{ $a->id }}/{{ $a->id_asociacion }}" method="POST">
								{{ csrf_field() }}
								@auth
									<button class="btn btn-success">{{ __("Adoptar") }}</button>
								@else
									<a href="{{ route ('login') }}" data-toggle='modal' data-target='#modalLogin'>{{ __("Tienes que iniciar sesión para adoptar") }}</a>
								@endauth
							</form>
						</div>
				</div>
			@empty
				<div class="alert alert-danger">
					{{ __("No hay ningún animal en este momento") }}
				</div>
			@endforelse
			<div class="col-md-12">
				@if($animal->count())
					{{ $animal->links() }}
				@endif
			</div>
		</div>
		<div class="modal fade" tabindex="-1" id="modalLogin" role="dialog" aria-labelledby="favoritesModalLabel">
        	<div class="modal-dialog" role="document">
         		<div class="modal-content">

         		</div>
        	</div>
      	</div>
		<script type="text/javascript">
			function leermas(id){
				desc=document.getElementById("descripcion"+id);
				span=document.getElementById(id);
				if(desc.style.display=='none'){
					desc.style.display='';
					span.className="glyphicon glyphicon-menu-up";
				}else{
					desc.style.display='none';
					span.className="glyphicon glyphicon-menu-down";
				}
			}
		</script>
@endsection


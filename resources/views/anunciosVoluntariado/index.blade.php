@extends('layouts.plantilla')
@section('css')
<link href="{{ asset('css/voluntariado.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
<div class="todo">
	<div class="contenedor col-md-12">			
			@foreach($anunciosVol as $anuncio)
			<div class="row">
				<div class="col-md-3">
					<img src="{{ 'storage/app/public/'.$anuncio->Asociacion->imagen }}" alt="" width="200px" height="160px">
					<h4>{{$anuncio->Asociacion->nombre}}</h4>				
				</div>
				<div class="col-md-7 anuncioContent">
					<h2>{{$anuncio -> titulo}}</h3>
					<p>{{$anuncio->descripcion }}</p>
					<label for="fecha">{{ __("Fecha del Evento") }}:</label>
					<p id="fecha">{{$anuncio->fechaEvento}}</p>
				</div>
					


				<div class="col-md-2 formulario">
					@auth
					<form action="voluntariado" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}					
							@if($trabajas->count())
								@foreach($trabajas as $t)
									@if($t->id_AnuncioVoluntariado==$anuncio->id && $t->id_usuario==auth()->user()->id)
										<p>¡{{ __("Ya participas en este evento") }}!</p>
									@else
										<input type="hidden" id="id_anuncio" name="id_anuncio" value="{{$anuncio->id}}">
										<input type="hidden" id="id_asociacion" name="id_asociacion" value="{{$anuncio->id_asociacion}}">
										<input type="hidden" id="fecha_Trabajo" name="fecha_Trabajo" value="{{$anuncio->fechaEvento}}">
										<input type="hidden" id="id_usuario" name="id_usuario" value="{{ auth()->user()->id}}">
										<button type="submit" class="btn btn-success">{{ __("Apúntate") }}</button>
									@endif
								@endforeach
							@else
								<input type="hidden" id="id_anuncio" name="id_anuncio" value="{{$anuncio->id}}">
								<input type="hidden" id="id_asociacion" name="id_asociacion" value="{{$anuncio->id_asociacion}}">
								<input type="hidden" id="fecha_Trabajo" name="fecha_Trabajo" value="{{$anuncio->fechaEvento}}">
								<input type="hidden" id="id_usuario" name="id_usuario" value="{{ auth()->user()->id}}">
								<button type="submit" class="btn btn-success">{{ __("Apúntate") }}</button>
							@endif									
							
					</form>
					@else
						<a href="{{ route ('login') }}" data-toggle='modal' data-target='#modalLogin'>{{ __("Tienes que iniciar sesión para poder participar") }}</a>
					@endauth	
				</div>
			</div>
			@endforeach
			<div class="col-md-12">
				@if($anunciosVol->count())
					{{$anunciosVol->links()}}
				@endif
			</div>
			
	</div>

	<div class="modal fade" tabindex="-1" id="modalLogin" role="dialog" aria-labelledby="favoritesModalLabel">
        	<div class="modal-dialog" role="document">
         		<div class="modal-content">

         		</div>
        	</div>
      	</div>

</div>
@endsection
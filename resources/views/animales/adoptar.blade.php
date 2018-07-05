@extends('layouts.plantilla')
@section('css')
<link href="{{ asset('css/adoptar.css') }}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@section('content')
<div class="todo" onresize="tam()">
	<div class="contenedor row">
		<div class="animal col-md-5">
			<img class="imagen" src="{{ '../../storage/app/public/'.$animal->imagen }}" width="320px">	
			<p id="nombre"><label for="nombre">{{ __("Nombre") }}:</label> {{ $animal->nombre }}</p>
			<p id="edad"><label for="edad">{{ __("Edad") }}:</label> {{ $animal->edad }}</p>
			<p id="raza"><label for="raza">{{ __("Raza") }}:</label> {{ $animal->raza }}</p>
			<p id="descripcion"><label for="descripcion">{{ __("Descripción") }}:</label> {{ $animal->descripcion }}</p>
		</div>
		<div class="pertenece col-md-2">
			<p>¡{{ __("Adóptalo aquí") }}!</p>
			<span class="glyphicon glyphicon-hand-right fa-5x" id="manoDerecha"></span>
		</div>
		<div class="asociacion col-md-5">
			<img class="imagen" src="{{ '../../storage/app/public/'.$asociacion->imagen }}" width="320px">
			<p><label>{{ __("Nombre Asociacion") }}:</label> {{ $asociacion->nombre }}</p>
			<p><label>{{ __("Direccion") }}:</label> {{ $asociacion->direccion }}</p>
			<p><label>{{ __("Teléfono") }}:</label> {{ $asociacion->telefono }}</p>
		</div>
	</div>
	<div class="reglas col-md-12">
		<h2>¿{{ __("Cómo Adoptar") }}?</h2>
		<p class="grande">{{ __("Nosotros te facilitamos y te informamos de todo lo necesario para ello. Debes cumplir unos requisitos") }}.</p>
		<h4 class="text-left">{{ __("Requisitos para adoptar una mascota") }}:</h4>
		<ul class="text-left list-group-item no">
			<li>{{ __("Ser mayor de edad. Se presentará el DNI de identificación") }}.</li>
			<li>{{ __("Contrato de adopción. Debes firmar un acta, con la asociación correspondiente, que te compromete a") }}:</li>
			<ul class="si">
				<li>{{ __("Cuidar de tu mascota y mantenerla en unas condiciones óptimas de espacio, tiempo, alimentación, ejercicio") }}...</li>
				<li>{{ __("Dotarle de los cuidados veterinarios que necesite. La mascota se entregará desparasitada y con las correspondientes vacunas, los perros llevarán además microchip") }}.</li>
				<li>{{ __("No destinarlo a la cría o reproducción") }}.</li>
				<li>{{ __("Notificar cualquier cambio a la asociación (pérdida, muerte...)") }}.</li>
			</ul>
		</ul>
		<br>
		<h4 class="text-left">¿{{ __("Cumples los requisitos y quieres adoptar a la mascota seleccionada") }}?</h4>
		<p class="text-left">{{ __("Pues muy sencillo, descarga el contrato que te adjuntamos a continuación, ponte en contacto con el teléfono que te facilitamos de la asociación correspondiente a la mascota. ¡Llamalos sin dudarlo y personate en la asociación con tu contrato de adopción!. ¡Muchas gracias!") }}</p>
			<form action="../../contrato/{{$asociacion->id}}/{{$animal->id}}" method="POST">
				{{ csrf_field() }}
				<button class="btn btn-success"><span class="fa fa-file-pdf-o"> {{ __("Contrato") }}</span></button>
			</form>
	</div>
</div>
@endsection
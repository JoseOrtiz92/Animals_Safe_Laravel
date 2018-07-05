@extends('layouts.plantilla')
@section('css')
<link href="{{ asset('css/asociaciones.css') }}" rel="stylesheet" type="text/css">

@section('content')
		<div class="contenedor row">
			<div class="titulo text-center">
				<h2>{{ __("Asociaciones Colaboradoras") }}</h2>
			</div>
			@forelse($asociacion as $asoc)
				@if($asoc->imagen)
					<div class="col-md-3 tablon">
							<div class="cabecera">
								<img class="imagen" src="{{ 'storage/app/public/'.$asoc->imagen }}" width="280px">
							</div>
							<div class="nombre text-center">
								<h5>{{ $asoc->nombre }}</h5>
							</div>
							<div class="descripcion text-center">
								<p>{{ $asoc->descripcion }}</p>
							</div>
					</div>
				@endif
			@empty
				<div class="alert alert-danger">
					{{ __("No hay ninguna asociación en este momento") }}
				</div>
			@endforelse
			<div class="col-md-12">
				@if($asociacion->count())
					{{ $asociacion->links() }}
				@endif
			</div>
		</div>
@endsection
@extends('layouts.plantilla')
@section('css')
<link href="{{ asset('css/anuncios.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')
<div class="contenedor row">
  <div class="text-center">
    <h2>{{ __("Animales Perdidos") }}</h2>
  </div>
  <div class="Anuncios">
    @foreach($anuncios as $anuncio)
          <div class="col-md-3 tablon">
              <div class="cabecera">
                @if($anuncio->imagen)
                  <img src="{{ 'storage/app/anuncios/'.$anuncio->imagen }}" class="imagen" width="280px"/>
                @endif
              </div>
              <div class="descripcion">
                <p><label class="rosa">{{ __("Descripcion") }}:</label> {{$anuncio->descripcion}}</p>
              </div>
              <div class="nombre">
                <p class="text-center"><label class="rosa">{{ __("Telefono") }}:</label> {{$anuncio->telefono}}</p>
                <p><label class="rosa">{{ __("Usuario") }}:</label> {{$anuncio->Usuario->name}}</p>
                <p>{{$anuncio->created_at}}</p>
              </div> 
          </div>
    @endforeach
    <div class="col-md-12">
      @if($anuncios->count())
        {{ $anuncios->links() }}
      @endif
    </div>
  </div>

@Logged()
  <div class="col-md-12 text-center">
    <p><a href="{{ route('modal') }}" data-toggle='modal' data-target='#modalAnuncio' class="btn btn-success">Publicar Anuncio</a></p>
  </div>
@endLogged
</div>

<!-- Modal Anuncio -->
    <div class="modal fade" tabindex="-1" id="modalAnuncio" role="dialog" aria-labelledby="favoritesModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">

        </div>
      </div>
    </div>
@endsection

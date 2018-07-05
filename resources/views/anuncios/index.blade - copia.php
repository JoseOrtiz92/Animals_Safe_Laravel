@extends('layouts.plantilla')
@section('css')
<link href="{{ asset('css/anuncios.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('script')
<script type="text/javascript">
    function nuevoAnuncio(){
      div = document.getElementById('PublicaAnuncio');
      div.style.display = '';
    }
  
    function cerrar() {
            div = document.getElementById('PublicaAnuncio');
            div.style.display = 'none';
    }
</script>
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
                  <img src="{{ 'storage/app/anuncios/'.$anuncio->imagen }}" class="img-rounded stretch" width="280px" height="250px" />
                @endif
              </div>
              <div class="descripcion">
                <p><label>{{ __("Descripcion") }}:</label> {{$anuncio->descripcion}}</p>
              </div>
              <div class="nombre">
                <p class="text-center"><label>{{ __("Telefono") }}:</label> {{$anuncio->telefono}}</p>
                <p><label>{{ __("Usuario") }}:</label> {{$anuncio->Usuario->name}}</p>
                <p>{{$anuncio->created_at}}</p>
              </div> 
          </div>
    @endforeach
    @if($anuncios->count())
      {{ $anuncios->links() }}
    @endif
  </div>

@Logged()
  <div class="col-md-12 text-center">
    <label>{{ __("Publica tu anuncio") }}</label><span onclick="nuevoAnuncio()" class="glyphicon glyphicon-file icono btn"></span>
  </div>


    <div id="PublicaAnuncio" style="display: none;" class=" col-md-12 contentNuevoAnuncio">

      <div class="contentAnuncio">

          <form action="/AnimalSafe/anuncios" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" id="id_usuario" name="id_usuario" value="{{auth()->user()->id}}">
            <div class="col-md-12">
              <div class="contentInformacionAnuncio">
                <label for="descripcion">{{ __("Descripcion") }}:</label>
                <textarea id="descripcion" name="descripcion" value="{{ old('descripcion') }}" type="textarea" class="form-control"></textarea> 
              </div>   
              <div class="contentInformacionAnuncio">
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" class="form-control telefonoForm">
              </div>
              <div class="contentInformacionAnuncio">
                <label for="file">{{ __("Imagen") }}:</label>
                <label class="btn btn-warning" for="file">
                <input id="file" name="file" type="file" style="display:none;">
                  {{ __("Subir archivo") }}
                </label>            
              </div>
            </div>
            <div class="col-md-12 text-center">
              <button type="submit" name="AñadirAnuncio" class="btn btn-default btnAñadir">{{   __("Añadir Anuncio") }}</button>
            </div>
        </form>

        <div id="Cerrar" class="col-md-12 text-center btnCerrar">
          <button onclick="cerrar()">{{ __("Cerrar Publicacion") }}</button>
        </div>
      </div>      
    </div>
@endLogged
</div>
@endsection

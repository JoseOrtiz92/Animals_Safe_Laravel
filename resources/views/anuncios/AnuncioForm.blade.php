<div class="container modal-dialog" id="modalRegistro">
    <div class="row">
                <div class="model-header">Publicar Anuncio</div>

                <div class="modal-body">
                    <form class="form-horizontal" action="/AnimalSafe/anuncios" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <input type="hidden" id="id_usuario" name="id_usuario" value="{{auth()->user()->id}}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">{{ __("Descripcion") }}:</label>

                            <div class="col-md-6">
                                <textarea id="descripcion" name="descripcion" value="{{ old('descripcion') }}" type="textarea" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">{{ __("Telefono") }}:</label>

                            <div class="col-md-6">
                                <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">{{ __("Imagen") }}:</label>

                            <div class="col-md-6">
                                <label class="btn btn-warning" for="file"><span class="glyphicon glyphicon-file"></span>
                                  <input id="file" name="file" type="file" style="display:none;">
                                </label>
                            </div>
                        </div>
                      
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" name="AñadirAnuncio" class="btn btn-success btnAñadir">{{   __("Añadir Anuncio") }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-7">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
        </div>
</div>


<div class="container modal-dialog" id="modalRegistro">
    <div class="row">
                <div class="modal-header"><label>Registro</label></div>

                <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo electronico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="direccion" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telefono" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role_id" class="col-md-4 control-label">Tipo de usuario</label>
        
                            <div class="col-md-6">
                                <input type="radio" class="h" name="role_id" value="2">Usuario<br>
                                <input type="radio" class="r" name="role_id" value="3">Casa de acogida<br>
                            </div>
                        </div>
                        
                        <div class="collapse" id="formOculto">
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">Capacidad:</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="capacidad" value="{{ old('capacidad') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Ocupación:</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="ocupacion" value="{{ old('ocupacion') }}">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-4 control-label">Descripcion:</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrarse
                                </button>
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
<script>
    $(document).ready(function(){
        $(".r").click(function(){
            $(".collapse").collapse('toggle');
        });
        $(".h").click(function(){
            $(".collapse").collapse('hide');
        });
    });
</script>
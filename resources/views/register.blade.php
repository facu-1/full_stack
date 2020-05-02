@extends('layouts.master')

@section('title', 'Registro')

@section('cuerpo')
<!--Inicio formulario de registro -->
<div class="row container-fluid">
    <div class="col-xl-8 offset-xl-2 py-5">
        <form id="registro" method="post" action="registro.php" role="form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="campo_nombre">Nombre </label>
                        <input id="campo_nombre" type="text" name="nombre" class="form-control"
                            placeholder="Ingrese su nombre " required="required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="campo_apellido">Apellido </label>
                        <input id="campo_apellido" type="text" name="apellido" placeholder="Ingrese su apellido"
                            class="form-control" required="required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="campo_username">Nickname </label>
                        <input id="campo_username" type="text" minlength="4" name="username" class="form-control"
                            placeholder="Ingrese un nombre de usuario" required="required"
                            data-error="Ingrese un nombre de usuario valido">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="img_perfil">Elija una foto de Perfil, formato aceptados: png (opcional) </label>
                        <input type="file" name="img_perfil" id="img_pefil" class="form-control-file">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="campo_email">Email </label>
                        <input id="campo_email" type="email" name="email" class="form-control"
                            placeholder="Ingrese su email " required="required" data-error="Ingrese un email válido.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="campo_fecha">Ingrese su fecha de nacimiento </label>
                    <div class="row ml-1 mr-1">
                        <input type="date" id="campo_fecha" class="form-control" name="nacimiento" min="1900-01-01"
                            max="2019-12-31">
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="campo_contraseña">Contraseña </label>
                        <input id="campo_contraseña" type="password" name="pass" class="form-control"
                            placeholder="Minimo 8 caracteres" required="required"
                            data-error="Por favor ingrese una contraseña valida" minlength="8">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="campo_confirm">Confirme su contraseña </label>
                        <input id="campo_confirm" type="password" name="confirm_pass" class="form-control"
                            placeholder="Confirmación" required="required"
                            data-error="Por favor ingrese una contraseña valida" minlength="8">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center mt-4">
                <input type="submit" class="btn btn-success btn-send w-25" value="Registro">
            </div>
        </form>
    </div>
</div>
<!--Fin formulario de registro -->
<!-- Message-->
<div class="alert alert-danger text-center w-50 ml-auto mr-auto" role="alert">
    Complete todos los campos requeridos!
</div>
<div class="alert alert-danger text-center w-50 ml-auto mr-auto" role="alert">
    Las contraseñas no coinciden.
</div>
<div class="alert alert-danger text-center w-50 ml-auto mr-auto" role="alert">
    Ingrese un email valido.
</div>
<div class="alert alert-danger text-center w-50 ml-auto mr-auto" role="alert">
    Error en la imagen, formato incopatible o error en la subida.
</div>
<div class="alert alert-warning text-center w-50 ml-auto mr-auto" role="alert">
    Ya se ha registrado ese email en nuestro sitio!
</div>
<div class="alert alert-warning text-center w-50 ml-auto mr-auto" role="alert">
    El username ya está en uso, elija otro.
</div>
<!-- Message-->

@endsection
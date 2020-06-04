@extends('layouts.admin')

@section('title', 'Administracion')

@section('cuerpo')
<script src="{{asset('js/admin.js')}}"></script>
<div class="col-10 d-flex">
    <div class="jumbotron jumbotron-fluid my-auto bg-white">
        <div class="container">
            <h1 class="display-4">Bienvenido</h1>
            <p class="lead">Seleccione una categoria.
            </p>
            @if ($sucessfull ?? '')
            <div class="alert alert-success" role="alert">
                {{$sucessfull ?? ''}}
            </div>
            @endif
        </div>
    </div>
</div>


@endsection
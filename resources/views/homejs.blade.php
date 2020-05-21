@extends('layouts.alljs')

@section('title', 'Home')

@section('cuerpo')

<script>
    let content=@JSON($html_compactado) //le pasamos el html a javascript
    let user=@JSON($user); //le pasamos el usurario a javascript
    let token= @JSON($token);//le pasamos el token a js para poder iniciar sesion
    let pagina=@JSON($pag); //le pasamos que pagina debe mostrar la vista
    let errores={}; //creamos un array de errores
    let old_values={};
</script>

@if (!$errors->isEmpty())
@foreach ($errors->keys() as $key)
<script>
    errores.{{$key}}=@JSON($errors->get($key)); //indice [0]
</script>
@endforeach
@endif

@php
$input_fields=['name','email']; //inputs que se pueden recuperar sus valores viejos
@endphp
@foreach ($input_fields as $field)
@if (old($field))
<script>
    old_values.{{$field}}=@JSON(old($field)); //le pasamos los valores antiguos a js
</script>
@endif
@endforeach

<div id="fill" class="container-fluid">
</div>

@endsection
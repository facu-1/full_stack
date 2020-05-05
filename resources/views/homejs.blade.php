@extends('layouts.alljs')

@section('title', 'Home')

@section('cuerpo')

<script>
    let user=@JSON($user); //le pasamos el usurario a javascript
    let token= @JSON($token);
</script>

<div id="fill">
</div>

@endsection
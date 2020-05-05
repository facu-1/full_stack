@extends('layouts.master')

@section('title', 'Home')

@section('cuerpo')

<script>
    let user=@JSON($user); //le pasamos el usurario a javascript
</script>

<div id="fill">
</div>

@endsection
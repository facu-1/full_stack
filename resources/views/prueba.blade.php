@extends('layouts.master')

@section('cuerpo')

<script>
    let errors=@JSON($errors);
    let user=@JSON($user);
    let token= @JSON($token);
</script>

<div id="fill">
</div>

@endsection
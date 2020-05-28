@extends('layouts.alljs')

@section('title', 'Carrito')

@section('cuerpo')

<script src="{{asset('js/carrito.js')}}"></script>
<div id="carritoTabla">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @php
            $i=1;
            @endphp
            @foreach ($cart as $item)
            <tr>
                <th scope="row">{{$i}}</th>
                <td><a href="/test/producto/{{$item->id}}">{{$item->nombre}}</a></td>
                <td>
                    {{$item->cantidadElegida}}
                </td>
                <td>${{$item->precio}}</td>
                <td><a href="/carritoDelete/{{$item->id}}">
                        <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                        </svg></a></td>
            </tr>
            @php
            $i++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>



@endsection
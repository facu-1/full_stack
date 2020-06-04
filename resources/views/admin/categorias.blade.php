@extends('layouts.admin')

@section('title', 'Administracion')

@section('cuerpo')

<script src="{{asset('js/categoriasAdmin.js')}}"></script>

<div class="col-10 d-flex">
    <div class="jumbotron jumbotron-fluid my-auto bg-white w-100">
        <div class="container">
            <h1 class="display-4">Categorias</h1>

            <h2 class="my-3">
                Agregar
            </h2>

            <div id="agregarCategoria">

                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
                <form class="w-100" id="formularioAgregar" method="POST" action="/categoria/add"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Nombre del la Categoria" value="{{old('nombre')}}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                            Agregar
                        </button>
                    </div>
                </form>
            </div>

            <div id="tablaProd">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Actualizar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($categorias as $categoria)

                        @if ($categoria->id!=1)
                        <tr>
                            <th scope="row">{{$categoria->id}}</th>
                            <td>
                                {{$categoria->nombre}}
                            </td>
                            <td>
                                <button class="btn botonActualizar" id="{{$categoria->id}}">
                                    <svg class="bi bi-arrow-clockwise" width="1em" height="1em" viewBox="0 0 16 16"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3.17 6.706a5 5 0 0 1 7.103-3.16.5.5 0 1 0 .454-.892A6 6 0 1 0 13.455 5.5a.5.5 0 0 0-.91.417 5 5 0 1 1-9.375.789z" />
                                        <path fill-rule="evenodd"
                                            d="M8.147.146a.5.5 0 0 1 .707 0l2.5 2.5a.5.5 0 0 1 0 .708l-2.5 2.5a.5.5 0 1 1-.707-.708L10.293 3 8.147.854a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </button>
                            </td>

                            <td>
                                <form action="/categoria/delete/" method="post" id="formDelete{{$categoria->id}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="idDelete" value="{{$categoria->id}}">
                                    <button type="submit" class="btn">
                                        <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr class="d-none" id="#editar{{$categoria->id}}">
                            <td colspan="10">
                                <form class="w-100" id="formularioEditar" method="POST" action="/categoria/edit"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$categoria->id}}">
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="nombreEditar">Nombre</label>
                                        <input type="text" class="form-control" id="nombreEditar" name="nombreEditar"
                                            placeholder="Nombre de la Categoria" value="{{$categoria->nombre}}"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Actualizar
                                        </button>
                                    </div>
                                </form>

                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>





@endsection
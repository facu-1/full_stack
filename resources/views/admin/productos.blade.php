@extends('layouts.admin')

@section('title', 'Administracion')

@section('cuerpo')

<script src="{{asset('js/productosAdmin.js')}}"></script>

<div class="col-10 d-flex">
    <div class="jumbotron jumbotron-fluid my-auto bg-white w-100">
        <div class="container">
            <h1 class="display-4">Productos</h1>

            <h2 class="my-3">
                Agregar
            </h2>
            <div id="agregarProductos">

                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
                @endforeach
                <form class="w-100" id="formularioAgregar" method="POST" action="/producto/add"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Nombre del Producto" value="{{old('nombre')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="categoriaId">Categoria</label>
                        <select class="form-control" name="categoriaId" id="categoriaId" required>
                            <option value="" selected disabled hidden>Categorias</option>
                            @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="marcaId">Marca</label>
                        <select class="form-control" name="marcaId" id="marcaId" required>
                            <option value="" selected disabled hidden>Marcas</option>
                            @foreach ($marcas as $marca)
                            <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion del producto</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion"
                            placeholder="Descripcion del Producto" value="{{old('descripcion')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="img">Imagen</label>
                        <input type="file" class="form-control-file" name="img" id="img" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" min=1 name="cantidad"
                            placeholder="Ingrese la cantidad del producto" value="{{old('cantidad')}}" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" step="0.01" min=0 class="form-control" name="precio" id="precio"
                            placeholder="Ingrese el precio del producto" value="{{old('precio')}}" required>
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
                            <th scope="col">Categoria</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Img</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Actualizar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($productos as $producto)
                        <tr>
                            <th scope="row">{{$producto->id}}</th>
                            <td>
                                {{$producto->nombre}}
                            </td>
                            <td>
                                @if ($producto->categoria)
                                {{$producto->categoria->nombre}}
                                @else
                                Sin categoria
                                @endif
                            </td>
                            <td>
                                @if ($producto->marca)
                                {{$producto->marca->nombre}}
                                @else
                                Sin marca
                                @endif
                            </td>
                            <td>{{$producto->descripcion}}</td>
                            <td><img class="imageTableAdmin" src="/storage/img/productos/{{$producto->img}}"></td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>
                                <button class="btn botonActualizar" id="{{$producto->id}}">
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
                                <form action="/producto/delete/" method="post" id="formDelete{{$producto->id}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="idDelete" value="{{$producto->id}}">
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
                        <tr class="d-none" id="#editarProd{{$producto->id}}">
                            <td colspan="10">
                                <form class="w-100" id="formularioEditar" method="POST" action="/producto/edit"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$producto->id}}">
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="nombreEditar">Nombre</label>
                                        <input type="text" class="form-control" id="nombreEditar" name="nombreEditar"
                                            placeholder="{{$producto->nombre}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="categoriaIdEditar">Categoria</label>
                                        <select class="form-control" name="categoriaIdEditar" id="categoriaIdEditar">
                                            @if ($producto->categoria)
                                            <option value="{{$producto->categoria->id}}" selected>
                                                {{$producto->categoria->nombre}}
                                            </option>
                                            @else
                                            <option value="" disabled hidden>Sin categoria</option>
                                            @endif
                                            @foreach ($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="marcaIdEditar">Marca</label>
                                        <select class="form-control" name="marcaIdEditar" id="marcaIdEditar">
                                            @if ($producto->marca)
                                            <option value="{{$producto->marca->id}}" selected>
                                                {{$producto->marca->nombre}}
                                            </option>
                                            @else
                                            <option value="" disabled hidden>Sin Marca</option>
                                            @endif
                                            @foreach ($marcas as $marca)
                                            <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcionEditar">Descripcion del producto</label>
                                        <input type="text" class="form-control" id="descripcionEditar"
                                            name="descripcionEditar" placeholder="{{$producto->descripcion}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="imgEditar">Imagen</label>
                                        <input type="file" class="form-control-file" name="imgEditar" id="imgEditar">
                                    </div>
                                    <div class="form-group">
                                        <label for="cantidadEditar">Cantidad</label>
                                        <input type="number" class="form-control" id="cantidadEditar" min=1
                                            name="cantidadEditar" placeholder="{{$producto->cantidad}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="precioEditar">Precio</label>
                                        <input type="number" step="0.01" min=0 class="form-control" name="precioEditar"
                                            id="precioEditar" placeholder="Ingrese el precio del producto"
                                            placeholder="{{$producto->precio}}">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Actualizar
                                        </button>
                                    </div>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $productos->links() }}

        </div>
    </div>
</div>





@endsection
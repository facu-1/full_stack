@extends('layouts.admin')

@section('title', 'Administracion')

@section('cuerpo')

<script src="{{asset('js/usersAdmin.js')}}"></script>

<div class="col-10 d-flex">
    <div class="jumbotron jumbotron-fluid my-auto bg-white w-100">
        <div class="container">
            <h1 class="display-4">Usuarios</h1>

            <h2 class="my-3">
                Usuarios registrados:
            </h2>
            <div id="tablaProd">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Img</th>
                            <th scope="col">Actualizar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)
                        @if ($user->id!=1)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                @if ($user->img)
                                <img class="imageTableAdminUser" src="/storage/img/users/{{$user->img}}">
                                @else
                                <img src="/img/default.png" class="imageTableAdminUser">
                                @endif
                            </td>
                            <td>
                                <button class="btn botonActualizar" id="{{$user->id}}">
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
                                <form action="/user/delete/" method="post" id="formDelete{{$user->id}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="idDelete" value="{{$user->id}}">
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
                        <tr class="d-none" id="#editar{{$user->id}}">
                            <td colspan="10">
                                <form class="w-100" id="formularioEditar" method="POST" action="/user/edit"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                    <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group">
                                        <label for="rolEditar">Rol</label>
                                        <select class="form-control" name="rolEditar" id="rolEditar" required>
                                            <option value="{{$user->role->id}}" selected disabled hidden>
                                                {{$user->role->name}}
                                            </option>
                                            @foreach ($roles as $rol)
                                            <option value="{{$rol->id}}">{{$rol->name}}</option>
                                            @endforeach
                                        </select>
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
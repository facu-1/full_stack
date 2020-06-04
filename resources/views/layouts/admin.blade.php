<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>

<body class="container-fluid">
    <header>
        <!--Barra de navegacion-->
        <nav class="navbar navbar-expand-lg navbar-light bg-ligth rounded">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="/test/home" class="nav-link">Home</a>
                    </li>
                    </li>
                </ul>
            </div>
        </nav>
        <!--Fin de barra de navegacion-->
    </header>

    <div class="row container-fluid mt-2 ">

        <div class="col-2  d-flex tabla-admin sticky-top">
            <ul class="nav flex-column my-auto">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Administracion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/admin/productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/categorias">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/marcas">Marcas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/usuarios">Usuarios</a>
                </li>

            </ul>
        </div>
        @yield('cuerpo')
    </div>
</body>

</html>
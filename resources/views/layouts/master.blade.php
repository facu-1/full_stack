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
            <a href="/" class="navbar-brand">
                <img src="img/logo.svg" width="60" height="60" alt="logo" />
                Marca
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/faq" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a href="/register" class="nav-link">Registro</a>
                    </li>
                    <li class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link">Contacto</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-auto">
                    <div class="btn-group dropright mr-2">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            username
                            <img src="/img/default.png" alt="" width="30" height="30" class="ml-3 rounded-circle">
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Editar perfil</a>
                            <a class="dropdown-item" href="">Log Out</a>
                        </div>
                    </div>
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar" />
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">
                        Buscar
                    </button>
                </form>
            </div>
        </nav>
        <!--Fin de barra de navegacion-->
    </header>
    @yield('cuerpo')
    <footer class="page-footer font-small mdb-color lighten-3 pt-4 text-light bg-dark rounded mt-1">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Lorem</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident
                        voluptate
                        esse
                        quasi, veritatis totam voluptas nostrum.</p>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mb-4">PÁGINAS</h5>
                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <a href="">Paginas</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="">De</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="">Interes</a>
                            </p>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">
                    <!-- Contact details -->
                    <h5 class="font-weight-bold text-uppercase mb-4">DIRECCIÓN</h5>
                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <i class="fas fa-home mr-3"></i> Mendoza, DH 2019, AR</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                    <!-- Social buttons -->
                    <h5 class="font-weight-bold text-uppercase mb-4">SEGUINOS</h5>
                    <div id="iconos">
                        <!--Twitter-->
                        <a href="#" class="p-1">
                            <img src="img/tw.svg" alt="logo_tw" width="40" height="40">
                        </a>
                        <!--Twitter-->
                        <!-- facebook -->
                        <a href="#" class="p-1">
                            <img src="img/fb.svg" alt="face_logo" width="40" height="40">
                        </a>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
    </footer>
</body>

</html>
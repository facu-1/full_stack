@extends('layouts.master')

@section('title', 'Home')

@section('cuerpo')
<!--Categorias-->
<nav class="nav nav-pills nav-fill d-inline justify-content-around mx-2">
    <ul class="nav mr-2 ml-2">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Zapatillas</a>
            <div class="dropdown-menu">
                <a href="productGrid.php" class="dropdown-item">Deportivas</a>
                <a href="productVestir.php" class="dropdown-item">De vestir</a>
                <a href="productTrekking.php" class="dropdown-item">Trekking</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Indumentaria</a>
            <div class="dropdown-menu">
                <a href="productInvierno.php" class="dropdown-item">Ropa de invierno</a>
                <a href="productVerano.php" class="dropdown-item">Ropa de verano</a>
                <a href="productTemporada2019.php" class="dropdown-item">Temporada 2019</a>
            </div>
        </li>
        <li class="nav-item">
            <a href="ropa-accesorios.php" class="nav-link">Accesorios</a>
        </li>
    </ul>
</nav>
<!--Fin de categorias-->
<!--Carrousel-->
<div id="carrouselprincipal" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carrouselprincipal" data-slide-to="0" class="active"></li>
        <li data-target="#carrouselprincipal" data-slide-to="1"></li>
        <li data-target="#carrouselprincipal" data-slide-to="2"></li>
        <li data-target="#carrouselprincipal" data-slide-to="3"></li>
        <li data-target="#carrouselprincipal" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/amanda-jones-V1LGk9cQMts-unsplash.jpg" alt="" class="d-block w-100" />
        </div>
        <div class="carousel-item">
            <img src="img/fachry-zella-devandra-RQ9RUaWtU5Q-unsplash.jpg" class="d-block w-100" alt="" />
        </div>
        <div class="carousel-item">
            <img src="img/joseph-barrientos-4qSb_FWhHKs-unsplash.jpg" class="d-block w-100" alt="" />
        </div>
        <div class="carousel-item">
            <img src="img/revolt-164_6wVEHfI-unsplash.jpg" class="d-block w-100" alt="" />
        </div>
        <div class="carousel-item">
            <img src="img/zell-3JCykI6YHRE-unsplash.jpg" class="d-block w-100" alt="" />
        </div>
    </div>
    <a href="#carrouselprincipal" class="carousel-control-prev" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carrouselprincipal" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
</div>
<!--Fin carrousel-->
<!--Secciones-->
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow rounded-circle border-0 shadow-lg">
                    <img class="card-img-top rounded-circle border-0 shadow-lg" src="img\rev-index1.jpg" alt="">
                </div>
                <div class="product-text text-center">
                    <h6>
                        <b>ZAPATILLAS DEPORTIVAS</b>
                    </h6>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow rounded-circle border-0 shadow-lg">
                    <img class="card-img-top rounded-circle border-0 shadow-lg" src="img\rev-index2.jpg" alt="">
                </div>
                <div class="product-text text-center">
                    <h6>
                        <b>ZAPATILLAS DE VESTIR</b>
                    </h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow rounded-circle border-light border-0 shadow-lg">
                    <img class="card-img-top rounded-circle border-0 shadow-lg" src="img\Adidas-Ultra-Boost-ST.jpg"
                        alt="">
                </div>
                <div class="product-text text-center">
                    <h6>
                        <b>TEMPORADA 2020</b>
                    </h6>

                </div>
            </div>
        </div>
    </div>
</div>
<!--Fin Secciones-->
@endsection
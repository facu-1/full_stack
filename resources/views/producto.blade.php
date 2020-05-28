@extends('layouts.alljs')

@section('title', 'Producto')

@section('cuerpo')

<script>
    let producto=@JSON($prod);
    let nombreMarca=@JSON($nombreMarca);
</script>
<script type="text/javascript">
    window.CSRF_TOKEN = '{{ csrf_token() }}';
</script>
<script src="{{asset('js/producto.js')}}"></script>
<div class="row container-fluid contenedorProducto">
    <div class="col-xl-8 col-12" id="un_producto">
        <div class="card cartaVistaProducto">
            <div class="container-fluid cajaVistaProductoImg rounded">
                <img src="" class="card-img-top imagenVistaProducto" id="imagenProducto" />
            </div>
        </div>
    </div>

    <div class="col-12 col-xl-4 cajaVistaProductoOptionsContainer">
        <div class="card text-center" id="cajaVistaProductoOptions">
            <div class="card-header" id="productoTitulo"></div>
            <div class="card-body">
                <h5 class="card-title" id="productoPrecio"></h5>
                <p class="card-text" id="productoDescripcion"></p>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="productoCantidad">Cantidad</label>
                    </div>
                    <select class="custom-select" id="productoCantidad">
                        <option selected value="1">Una</option>
                        <option value="2">Dos</option>
                        <option value="3">Tres</option>
                    </select>
                </div>
                <a href="#" id="agregarAlCarrito" class="btn btn-primary">Agregar al carrito</a>
                <div class="loading my-2">
                    <div class="progress-bar d-none mx-auto bg-dark">
                        <div class="progress"></div>
                    </div>
                    <div class="alert alert-success mt-3 d-none" role="alert" id="addCorrectamente">
                        Producto agregado al <a class="alert-link" href="/test/showCarrito">carrito</a>!!
                    </div>
                    <div class="alert alert-warning mt-3 d-none" role="alert" id="addFail">
                        Debes <a href="/test/login" class="alert-link">loguearte</a> para eso.
                    </div>

                </div>
            </div>
            <div class="card-footer text-muted" id="productoMarca"></div>
        </div>
    </div>
</div>

@endsection
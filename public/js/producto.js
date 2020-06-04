window.onload = () => {

    document.querySelector('img[id=imagenProducto]').src = '/storage/img/productos/' + producto.img;
    document.querySelector('div[id=productoTitulo]').textContent = producto.nombre;
    document.querySelector('h5[id=productoPrecio]').textContent = 'Precio: $' + producto.precio;
    document.querySelector('p[id=productoDescripcion]').textContent = producto.descripcion;
    document.querySelector('div[id=productoMarca]').textContent = nombreMarca;


    let links = document.querySelectorAll('span.fake-link');
    links.forEach(link => {
        link.onclick = function () {
            window.location.href = '/test/' + link.getAttribute('id');
        }
    });

    let botonAgregar = document.querySelector('a[id=agregarAlCarrito]');

    async function postApi(url, objeto) {
        try {
            let raw = JSON.stringify(objeto);
            let requestOptions = {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': window.CSRF_TOKEN
                },
                body: raw,
                redirect: 'follow'
            };
            let response = await fetch(url, requestOptions);
            let results = await response.json();
            return results;
        } catch (e) {
            console.log('Error en el post', e);
        }
    }
    function barAnimation(inicio, fin, tiempo) {
        let progress = document.querySelector('.progress');
        let count = inicio;
        let load = setInterval(animate, tiempo);
        function animate() {
            if (count == fin) {
                if (fin == 100) {
                    progress.style.backgroundColor = '#28a745';
                    document.querySelector('div[id=addCorrectamente]').classList.remove('d-none');
                }
                clearInterval(load);
            } else {
                count++;
                progress.style.width = count + '%';
            }
        }

    }

    botonAgregar.onclick = async function (event) {

        event.preventDefault()

        if (user != null) {
            document.querySelector('.progress-bar').classList.remove('d-none');
            barAnimation(0, 50, 20);
            let cantidad = parseInt(document.querySelector('select[id=productoCantidad]').value);
            producto.cantidadElegida = cantidad;
            let passed = await postApi('http://localhost:8000/carritoAdd', producto);
            barAnimation(50, 100, 15);
        } else {
            document.querySelector('div[id=addFail]').classList.remove('d-none');
        }
    }






}
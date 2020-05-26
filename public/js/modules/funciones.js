const funciones = {
    tabActiva: function (valor) { //esta funcion recibe cambia la tab activa (Visual)
        let lis = document.querySelectorAll('li.nav-item'); //mostramos la tab activa cada vez que cambiamos de pagina
        lis.forEach(li => {
            if (li.getAttribute('id') == valor) {
                li.classList.add('active');
            } else {
                li.classList.remove('active');
            }
        });
    },
    addToken: function () {//esta funcion agrega el input token en los formularios
        let form = document.querySelector('form[id=formulario]');
        let temp = document.createElement('div');
        temp.innerHTML = token;
        let token_input = temp.firstChild;
        form.append(token_input);
    },
    profilePicPreview: function () {  //esta funcion muestra una preview de la imagen de prefil en el registro y la valida
        let img_input = document.querySelector('input[id=img]');
        let div = document.querySelector('div[id=img]'); //capturamos el div para poner los mensajes
        img_input.onchange = function () {

            let tipos_aceptados = ['image/jpg', 'image/jpeg', 'image/png'];

            if (tipos_aceptados.includes(this.files[0].type)) {
                let reader = new FileReader();
                reader.readAsDataURL(this.files[0]);
                reader.onload = function () {
                    let profile_img_preview = document.querySelector('img[id=profilePreviewImage]');
                    profile_img_preview.src = reader.result;
                }
                if (img_input.classList.contains('is-invalid')) {
                    img_input.classList.remove('is-invalid');
                    div.removeChild(div.lastElementChild);
                }
            } else {
                img_input.classList.add('is-invalid');
                let span_mensaje = document.createElement('span');
                span_mensaje.classList.add('invalid-feedback');
                span_mensaje.setAttribute('role', 'alert');
                let strong_mensaje = document.createElement('strong');
                let mensaje_text = document.createTextNode('Solo imagenes (png, jpg, jpeg)');
                strong_mensaje.append(mensaje_text);
                span_mensaje.append(strong_mensaje);
                div.append(span_mensaje);
            }

        }
    },
    manejoNavProductos: function () {
        //logica de la seccion de productos

        let menu = document.querySelector('div[id=menu]');
        let lista = document.querySelector('div[id=lista]');
        let nav = document.querySelector('nav[id=nav]');
        let seccion_productos = document.querySelector('div[id=seccion_productos]');

        let bandera = false; //bandera

        nav.querySelector('button').onclick = function () {
            this.querySelector('svg[id=down]').classList.toggle('d-none');
            this.querySelector('svg[id=right]').classList.toggle('d-none');
            window.scrollTo(0, 0);

            if (nav.classList.contains('col-12')) { //cuando esta colapsada
                seccion_productos.classList.remove('d-xl-none');
                seccion_productos.classList.add('d-none');
                document.querySelector('div[id=carrouselprincipal]').classList.add('d-none'); //ocultamos el carrousel
                document.querySelector('div[id=secciones_home]').classList.add('d-none'); // ocultamos las secciones
                seccion_productos.classList.replace('col-xl-12', 'col-xl-9');
                nav.classList.replace('col-12', 'col-4');
                nav.classList.add('col-xl-1', 'rounded-right');
                lista.classList.add('col-8', 'col-xl-2');
                nav.classList.add('vh-100');
                nav.addEventListener('transitionend', function (event) {

                    if (event.propertyName == 'max-width' && this.classList.contains('col-4')) {
                        lista.classList.replace('d-none', 'd-flex');
                        $('#lista').collapse('show');
                        lista.classList.add('vh-100');
                        seccion_productos.querySelector('div').querySelectorAll('div[id=un_producto]').forEach(producto => {
                            producto.classList.replace('col-xl-3', 'col-xl-4');
                        });
                    }
                });

            } else if (nav.classList.contains('rounded-right')) { //cuando esta expandida
                nav.classList.replace('col-4', 'col-12');
                nav.classList.remove('rounded-right', 'col-xl-1', 'vh-100');
                lista.classList.remove('col-8', 'col-xl-2');
                lista.classList.replace('d-flex', 'd-none');
                lista.classList.remove('vh-100');
                $('#lista').collapse('hide');
                seccion_productos.classList.replace('col-xl-9', 'col-xl-12');
                seccion_productos.classList.remove('d-none');
                seccion_productos.querySelector('div').querySelectorAll('div[id=un_producto]').forEach(producto => {
                    producto.classList.replace('col-xl-4', 'col-xl-3');
                    seccion_productos.classList.add('col-12');
                });

            }

            //llamado a las funciones asincronas UNA SOLA VEZ;
            if (bandera == false) {
                bandera = true;
                proxyFunciones.asyncHandler();
            }

        }
    },
    showErrores: function () {
        Object.entries(errores).forEach(error => {
            let error_id = error[0]; //nos devuelve el id del input que fallo
            let error_mensajes = error[1];//nos devuelve un array con los mensajes de error
            let invalid_input = document.querySelector('input[id=' + error_id + ']');
            invalid_input.classList.add('is-invalid');//mostramos el input con error

            let div = document.querySelector('div[id=' + error_id + ']'); //capturamos el div para poner los mensajes

            error_mensajes.forEach(mensaje => { //por cada error mostramos los errores
                let span_mensaje = document.createElement('span');
                span_mensaje.classList.add('invalid-feedback');
                span_mensaje.setAttribute('role', 'alert');
                let strong_mensaje = document.createElement('strong');
                let mensaje_text = document.createTextNode(mensaje);
                strong_mensaje.append(mensaje_text);
                span_mensaje.append(strong_mensaje);
                div.append(span_mensaje);
            })
        })
        errores = null; //destruimos los errores
    },
    restoreOldValues: function () {
        Object.entries(old_values).forEach(old_value => {
            let input = document.querySelector('input[id=' + old_value[0] + ']'); //capturamos el input para poner el old value
            input.setAttribute('value', old_value[1]);
        });
        old_values = null;
    },
    cortarArray: function (array, size) {
        let results = [];

        while (array.length) {
            results.push(array.splice(0, size));
        }

        return results;
    },
    searchProducts: function (productos, arrayCategoriasId, arrayMarcasId, string) {
        let filter1;
        let filter2;
        let filter3;

        if (arrayCategoriasId.length) {
            filter1 = productos.filter(producto => arrayCategoriasId.includes(producto.categoria_id));
        } else {
            filter1 = productos;
        }
        if (arrayMarcasId.length) {
            filter2 = filter1.filter(producto => arrayMarcasId.includes(producto.marca_id));
        } else {
            filter2 = filter1;
        }
        if (string.length) {
            filter3 = filter2.filter(producto => {
                let text = producto.nombre + ' ' + producto.descripcion;
                if (text.search(string) != -1) {
                    return true;
                }
            })
        } else {
            filter3 = filter2;
        }

        return filter3;
    },
    createCard: function (arrayProductos) {
        let productosContainer = document.querySelector('div[id=productos_container]');

        let fragmento = document.createDocumentFragment();

        arrayProductos.forEach(producto => {

            let parentCard = document.createElement('div');
            parentCard.classList.add('col-xl-4', 'mb-4');
            parentCard.setAttribute('id', 'un_producto');

            let card = document.createElement('div');
            card.classList.add('card');

            let imgBox = document.createElement('div');
            imgBox.classList.add('container-fluid', 'caja-img-producto', 'rounded');

            let imgProduct = document.createElement('img');
            imgProduct.classList.add('card-img-top', 'img-producto-list');
            imgProduct.src = '/storage/img/productos/' + producto.img;

            let cardBody = document.createElement('div');
            cardBody.classList.add('card-body');

            let cardTitle = document.createElement('h5');
            cardTitle.classList.add('card-title');
            cardTitle.textContent = producto.nombre;

            let cardDescripcion = document.createElement('p');
            cardDescripcion.classList.add('card-text');
            cardDescripcion.textContent = producto.descripcion;

            let cardButton = document.createElement('a');
            cardButton.classList.add('btn', 'btn-dark');
            cardButton.setAttribute('href', 'pruebas');
            cardButton.textContent = 'Ver Más';

            let cardPrecio = document.createElement('p');
            cardPrecio.classList.add('card-text', 'text-right', 'd-flex', 'float-right', 'mt-2');
            cardPrecio.textContent = producto.precio;

            //usamos append
            imgBox.append(imgProduct);

            cardBody.append(cardTitle, cardDescripcion, cardButton, cardPrecio);

            card.append(imgBox, cardBody);

            parentCard.append(card);

            fragmento.appendChild(parentCard);
        })

        productosContainer.append(fragmento);

    },
    clearProducts: function () {
        let productosContainer = document.querySelector('div[id=productos_container]');
        while (productosContainer.firstChild) {
            productosContainer.removeChild(productosContainer.firstChild);
        }
    },
    updateMenuList: function (arrayEntradas, lista, propiedad) {
        let fragmento = document.createDocumentFragment();
        arrayEntradas.forEach(categoria => {
            let boton = document.createElement('button');
            boton.setAttribute('type', 'button');
            boton.classList.add('list-group-item', 'list-group-item-action', 'bg-dark', 'text-white');
            boton.textContent = categoria.nombre;
            boton.setAttribute('id', categoria.id);
            fragmento.appendChild(boton);
        });

        lista.append(fragmento);

        let botonTodas = lista.querySelector('button[id=all]');

        let botones = lista.querySelectorAll('button');
        botones.forEach(boton => {
            boton.onclick = function () {
                if (this.id == 'all') {
                    propiedad.length = 0; //resetamos el array de busqueda
                    this.classList.remove('bg-dark');
                    this.classList.add('active');
                    botones.forEach(btn => {
                        if (btn.getAttribute('id') != 'all') {
                            btn.classList.remove('active');
                            btn.classList.add('bg-dark');
                        }
                    });
                } else {

                    if (propiedad.includes(parseInt(this.getAttribute('id')))) { //agregamos al array la busque o quitamos
                        let index = propiedad.indexOf(parseInt(this.getAttribute('id')));
                        propiedad.splice(index, 1);
                    } else {
                        propiedad.push(parseInt(this.getAttribute('id')));
                    }
                    this.classList.toggle('bg-dark');
                    this.classList.toggle('active');
                    botonTodas.classList.add('bg-dark');
                    botonTodas.classList.remove('active');
                }
            }
        })

    },
    showProductos: function (productos) {
        console.log(productos);
    },
    showCategorias: function (categorias) {
        console.log(categorias);
    },
    accesApi: async function (url) {
        try {
            let response = await fetch(url);
            let results = await response.json();
            return results;
        } catch (e) {
            console.log('accesApi error:', e);
        }
    },
    getData: async function (objectReq) {
        try {
            let constructor = Object.entries(objectReq);
            let requests = constructor.map(request => this.accesApi(request[1]));
            let results = await Promise.all(requests);

            for (let i = 0; i <= constructor.length - 1; i++) {
                constructor[i][1] = results[i];
            }
            let objectData = Object.fromEntries(constructor);
            return objectData;

        } catch (e) {
            console.log(e);
        }
    },
    asyncHandler: async function () {
        let pedido = {
            productos: 'http://localhost:8000/api/productos',
            categorias: 'http://localhost:8000/api/categorias',
            marcas: 'http://localhost:8000/api/marcas'
        }
        //objetos de busqueda:
        let categoriasId = []
        const proxyBusquedaCategorias = new Proxy(categoriasId, {
            set: function (target, prop, valor) {
                target[prop] = valor;
                proxyFunciones.clearProducts();
                let resultado = proxyFunciones.searchProducts(data.productos, categoriasId, marcasId, proxyString);
                proxyFunciones.createCard(resultado);
                return true;
            }
        })

        let marcasId = [];
        const proxyBusquedaMarcas = new Proxy(marcasId, {
            set: function (target, prop, valor) {
                target[prop] = valor;
                proxyFunciones.clearProducts();
                let resultado = proxyFunciones.searchProducts(data.productos, categoriasId, marcasId, proxyString);
                proxyFunciones.createCard(resultado);
                return true;
            }
        });

        let proxyString = '';
        document.querySelector('input[id=string_busqueda]').oninput = function () {
            proxyString = this.value;
            proxyFunciones.clearProducts();
            let resultado = proxyFunciones.searchProducts(data.productos, categoriasId, marcasId, proxyString);
            proxyFunciones.createCard(resultado);
        }
        let data = await this.getData(pedido);
        this.updateMenuList(data.categorias, document.querySelector('div[id=lista_categorias'), proxyBusquedaCategorias);
        this.updateMenuList(data.marcas, document.querySelector('div[id=lista_marcas]'), proxyBusquedaMarcas);
        //opcionales abajo
        //this.clearProducts();
        // this.createCard(data.productos);





    }
}

const proxyFunciones = new Proxy(funciones, {
    get: function (target, prop) {
        console.trace('from proxy', prop);
        return target[prop];
    }
});


export { proxyFunciones };
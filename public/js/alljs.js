window.onload = () => {

    //manejo de usuarios
    let boton = document.querySelector('div[id=usuario_logueado]');
    let login = document.querySelector('li[id=login]');
    let registro = document.querySelector('li[id=registro]');


    if (user != null) {
        boton.classList.remove('d-none');
        let username_placeholder = document.querySelector('span[id=username]');
        let profile_img_placehoolder = document.querySelector('img[id=profile]');
        let username = document.createTextNode(user.name);
        username_placeholder.append(username);

        if (user.img) {
            profile_img_placehoolder.setAttribute('src', '/storage/' + user.img);
        }
        boton.classList.remove('d-none');

    } else {
        boton.classList.add('d-none');
        login.classList.remove('d-none');
        registro.classList.remove('d-none');
    }

    //manejo de paginas//
    let fill = document.querySelector('div[id=fill]'); //bloque principal

    let pagina_actual = { //definimos un obejto para poder seguir los cambios que le ocurren a este
        valor: null,
        funcionObjeto: function (valor) { }, //un prototipo para ejecutar funciones
        set set(valor) {
            this.valor = valor;
            this.funcionObjeto(valor);
        },
        get get() {
            return this.valor;
        }
    };

    //funciones

    function tabActiva(valor) { //esta funcion recibe cambia la tab activa (Visual)
        let lis = document.querySelectorAll('li.nav-item'); //mostramos la tab activa cada vez que cambiamos de pagina
        lis.forEach(li => {
            if (li.getAttribute('id') == valor) {
                li.classList.add('active');
            } else {
                li.classList.remove('active');
            }
        });
    }

    function add_token() { //esta funcion agrega el input token en los formularios
        let form = document.querySelector('form[id=formulario]');
        let temp = document.createElement('div');
        temp.innerHTML = token;
        let token_input = temp.firstChild;
        form.append(token_input);
    }

    function profile_pic_preview() { //essta funcion muestra una preview de la imagen de prefil en el registro y la valida
        let img_input = document.querySelector('input[id=img]');
        let div = document.querySelector('div[id=img]'); //capturamos el div para poner los mensajes
        img_input.onchange = function () {

            let tipos_aceptados = ['image/jpg', 'image/jpeg', 'image/png'];

            if (tipos_aceptados.includes(this.files[0].type)) {
                let reader = new FileReader();
                reader.readAsDataURL(this.files[0]);
                reader.onload = function () {
                    let profile_img_preview = document.querySelector('img[class=profile-img]');
                    profile_img_preview.src = reader.result;
                }
                img_input.classList.remove('is-invalid');
                div.removeChild(div.lastElementChild);
                console.log(div.lastElementChild);

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
    }


    function manejo_nav_productos() {
        //logica de la seccion de productos

        let menu = document.querySelector('div[id=menu]');
        let lista = document.querySelector('div[id=lista]');
        let nav = document.querySelector('nav[id=nav]');
        let productos = document.querySelector('div[id=productos]');
        console.log(productos.querySelector('div').querySelectorAll('div[id=un_producto]'));

        nav.querySelector('button').onclick = function () {
            this.querySelector('svg[id=down]').classList.toggle('d-none');
            this.querySelector('svg[id=right]').classList.toggle('d-none');
            window.scrollTo(0, 0);

            if (nav.classList.contains('col-12')) { //cuando esta colapsada
                productos.classList.remove('d-xl-none');
                productos.classList.add('d-none');
                document.querySelector('div[id=carrouselprincipal]').classList.add('d-none'); //ocultamos el carrousel
                document.querySelector('div[id=secciones_home]').classList.add('d-none'); // ocultamos las secciones
                productos.classList.replace('col-xl-12', 'col-xl-9');
                productos.classList.remove('mt-4');
                nav.classList.replace('col-12', 'col-4');
                nav.classList.add('col-xl-1', 'rounded-right');
                lista.classList.add('col-8', 'col-xl-2');
                nav.classList.add('vh-100');
                productos.querySelector('div').querySelectorAll('div[id=un_producto]').forEach(producto => {
                    producto.classList.replace('col-xl-3', 'col-xl-4');
                });


                nav.addEventListener('transitionend', function (event) {

                    if (event.propertyName == 'max-width' && this.classList.contains('col-4')) {
                        lista.classList.replace('d-none', 'd-flex');
                        $('#lista').collapse('show');
                        lista.classList.add('vh-100');
                    }
                });

            } else if (nav.classList.contains('rounded-right')) { //cuando esta expandida
                nav.classList.replace('col-4', 'col-12');
                nav.classList.remove('rounded-right', 'col-xl-1', 'vh-100');
                lista.classList.remove('col-8', 'col-xl-2');
                lista.classList.replace('d-flex', 'd-none');
                lista.classList.remove('vh-100');
                $('#lista').collapse('hide');
                productos.classList.replace('col-xl-9', 'col-xl-12');
                productos.classList.add('mt-4');
                productos.classList.remove('d-none');
                productos.querySelector('div').querySelectorAll('div[id=un_producto]').forEach(producto => {
                    producto.classList.replace('col-xl-4', 'col-xl-3');
                    productos.classList.add('col-12');
                });

            }
        }


        //fin de la logica de la seccion de productos
    }


    //fin de funciones


    pagina_actual.funcionObjeto = function (valor) { //cosas que ocurren cuando cambiamos de pagina
        fill.innerHTML = content[valor]; //llenamos el div con la pagina seleccionada

        window.history.replaceState({}, '', valor); //cambiamos el url de la pagina

        tabActiva(valor);

        if ((valor == 'login' || valor == 'register') && user == null) { //agregamos los tokens a las paginas de login y registro

            add_token();

        } else if (valor == 'login' || valor == 'register') {//redirigimos a la home si el usuario quiere acceder a register o login y esta logueado
            pagina_actual.set = 'home';
        }

        if (valor == 'register') { //cuando estamos en la pagina register
            profile_pic_preview(); //llamamos a la funcion
        }

        if (valor == 'home') { //cuando estamos en la pagina del home
            manejo_nav_productos();  //llamamos a la funcion
        }

    }


    pagina_actual.set = pagina; //atualizamos la pagina actual

    //con esto generamos los "links" para navergar
    let links = document.querySelectorAll('span.fake-link');

    links.forEach(link => {
        link.onclick = function () {
            pagina_actual.set = link.getAttribute('id');
        }
    })





    //muestra de errores y recuperacion de old values

    if (Object.entries(errores).length !== 0) {
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
    }
    if (Object.entries(old_values).length !== 0) {
        Object.entries(old_values).forEach(old_value => {
            let input = document.querySelector('input[id=' + old_value[0] + ']'); //capturamos el input para poner el old value
            input.setAttribute('value', old_value[1]);
        });
    }
    //fin de recuperacion y old values


}
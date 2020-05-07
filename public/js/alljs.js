window.onload = () => {

    //manejo de usuarios
    let boton = document.querySelector('div[id=usuario_logueado]');
    let login = document.querySelector('li[id=login]');
    let registro = document.querySelector('li[id=registro]');
    if (user != null) {
        let username_placeholder = document.querySelector('span[id=username]');
        let profile_img_placehoolder = document.querySelector('img[id=profile]');
        let username = document.createTextNode(user.name);
        username_placeholder.append(username);

        if (user.img) {
            profile_img_placehoolder.setAttribute('src', '/storage/' + user.img);
        }
        boton.classList.remove('d-none');

    } else {
        login.classList.remove('d-none');
        registro.classList.remove('d-none');
    }
    //manejo de paginas//
    let fill = document.querySelector('div[id=fill]'); //bloque principal
    let last_page = sessionStorage.getItem('last_page'); //obtenemos la ultima pagina visitada
    let pagina_actual = null; //la pagina en donde nos encontramos puede servir mas tarde
    if (last_page == null) { //si la es la primera vez que accedemos a la pag en la session muestra el home
        fill.innerHTML = content.home;
        pagina_actual = 'home';
    } else {
        fill.innerHTML = content[last_page];
        pagina_actual = last_page;
        if (last_page == 'login' || last_page == 'register') {
            let form = document.querySelector('form[id=formulario]');
            let temp = document.createElement('div');
            temp.innerHTML = token;
            let token_input = temp.firstChild;
            form.append(token_input);
        }
        let lis = document.querySelectorAll('li.nav-item');
        lis.forEach(li => {
            if (li.getAttribute('id') == last_page) {
                li.classList.add('active');
            } else {
                li.classList.remove('active');
            }
        })
    }

    if (user != null && (pagina_actual == 'login' || pagina_actual == 'register')) {
        fill.innerHTML = content['home'];
        pagina_actual = 'home';
        last_page = 'home';
    }


    let links = document.querySelectorAll('span.fake-link');

    links.forEach(link => {
        link.onclick = () => {
            fill.innerHTML = content[link.getAttribute('id')];
            if (link.getAttribute('id') == 'login' || link.getAttribute('id') == 'register') { //le pasamos el token al formulario de registro o login
                let form = document.querySelector('form[id=formulario]');
                let temp = document.createElement('div');
                temp.innerHTML = token;
                let token_input = temp.firstChild;
                form.append(token_input);
            }
            let lis = document.querySelectorAll('li.nav-item'); //mostramos la tab activa
            lis.forEach(li => {
                if (li.getAttribute('id') == link.getAttribute('id')) {
                    li.classList.add('active');
                } else {
                    li.classList.remove('active');
                }
            })
            sessionStorage.setItem('last_page', link.getAttribute('id'));
            pagina_actual = link.getAttribute('id');
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

    console.log(errores);

}
window.onload = () => {
    //manejo de paginas//
    let fill = document.querySelector('div[id=fill]'); //bloque principal
    let content = {
        home: '<!--Categorias--> <nav class="nav nav-pills nav-fill d-inline justify-content-around mx-2"> <ul class="nav mr-2 ml-2"> <li class="nav-item dropdown"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zapatillas</a> <div class="dropdown-menu"> <a href="/nosabemos" class="dropdown-item">Deportivas</a> <a href="/nosabemos" class="dropdown-item">De vestir</a> <a href="/nosabemos" class="dropdown-item">Trekking</a> </div> </li> <li class="nav-item dropdown"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Indumentaria</a> <div class="dropdown-menu"> <a href="/nosabemos" class="dropdown-item">Ropa de invierno</a> <a href="/nosabemos" class="dropdown-item">Ropa de verano</a> <a href="/nosabemos" class="dropdown-item">Temporada 2019</a> </div> </li> <li class="nav-item"> <a href="/nosabemos" class="nav-link">Accesorios</a> </li> </ul></nav><!--Fin de categorias-- >< !--Carrousel--> <div id="carrouselprincipal" class="carousel slide" data-ride="carousel"> <ol class="carousel-indicators"> <li data-target="#carrouselprincipal" data-slide-to="0" class="active"></li> <li data-target="#carrouselprincipal" data-slide-to="1"></li> <li data-target="#carrouselprincipal" data-slide-to="2"></li> <li data-target="#carrouselprincipal" data-slide-to="3"></li> <li data-target="#carrouselprincipal" data-slide-to="4"></li> </ol> <div class="carousel-inner"> <div class="carousel-item active"> <img src="/img/amanda-jones-V1LGk9cQMts-unsplash.jpg" alt="" class="d-block w-100" /> </div> <div class="carousel-item"> <img src="/img/fachry-zella-devandra-RQ9RUaWtU5Q-unsplash.jpg" class="d-block w-100" alt="" /> </div> <div class="carousel-item"> <img src="/img/joseph-barrientos-4qSb_FWhHKs-unsplash.jpg" class="d-block w-100" alt="" /> </div> <div class="carousel-item"> <img src="/img/revolt-164_6wVEHfI-unsplash.jpg" class="d-block w-100" alt="" /> </div> <div class="carousel-item"> <img src="/img/zell-3JCykI6YHRE-unsplash.jpg" class="d-block w-100" alt="" /> </div> </div> <a href="#carrouselprincipal" class="carousel-control-prev" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Anterior</span> </a> <a class="carousel-control-next" href="#carrouselprincipal" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Siguiente</span> </a></div><!--Fin carrousel-- >< !--Secciones--> <div class="album py-5 bg-light"> <div class="container"> <div class="row"> <div class="col-md-4"> <div class="card mb-4 box-shadow rounded-circle border-0 shadow-lg"> <img class="card-img-top rounded-circle border-0 shadow-lg" src="/img/rev-index1.jpg" alt=""> </div> <div class="product-text text-center"> <h6> <b>ZAPATILLAS DEPORTIVAS</b> </h6> </div> </div> <div class="col-md-4"> <div class="card mb-4 box-shadow rounded-circle border-0 shadow-lg"> <img class="card-img-top rounded-circle border-0 shadow-lg" src="/img/rev-index2.jpg" alt=""> </div> <div class="product-text text-center"> <h6> <b>ZAPATILLAS DE VESTIR</b> </h6> </div> </div> <div class="col-md-4"> <div class="card mb-4 box-shadow rounded-circle border-light border-0 shadow-lg"> <img class="card-img-top rounded-circle border-0 shadow-lg" src="img/Adidas-Ultra-Boost-ST.jpg" alt=""> </div> <div class="product-text text-center"> <h6> <b>TEMPORADA 2020</b> </h6> </div> </div> </div> </div></div><!--Fin Secciones-->',
        faq: '<div class= "container py-3" > <div class="row"> <div class="col-12 mx-auto "> <div class="accordion" id="faqExample"> <div class="card"> <div class="card-header p-2" id="headingOne"> <h5 class="mb-0"> <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Q: How does this work? </button> </h5> </div> <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample"> <div class="card-body"> <b>Answer:</b> It works using the Bootstrap 4 collapse component with cards to make a vertical accordion that expands and collapses as questions are toggled. </div> </div> </div> <div class="card"> <div class="card-header p-2" id="headingTwo"> <h5 class="mb-0"> <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Q: What is Bootstrap 4? </button> </h5> </div> <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample"> <div class="card-body"> Bootstrap is the most popular CSS framework in the world. The latest version released in 2018 is Bootstrap 4. Bootstrap can be used to quickly build responsive websites. </div> </div> </div> <div class="card"> <div class="card-header p-2" id="headingThree"> <h5 class="mb-0"> <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Q. What is another question? </button> </h5> </div> <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample"> <div class="card-body"> The answer to the question can go here. </div> </div> </div> <div class="card"> <div class="card-header p-2" id="headingFour"> <h5 class="mb-0"> <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree"> Q. What is the next question? </button> </h5> </div> <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample"> <div class="card-body"> The answer to this question can go here. This FAQ example can contain all the Q/A that is needed. </div> </div> </div> <div class="card"> <div class="card-header p-2" id="headingFive"> <h5 class="mb-0"> <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> Q. What is the next question? </button> </h5> </div> <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample"> <div class="card-body"> The answer to this question can go here. This FAQ example can contain all the Q/A that is needed. </div> </div> </div> <div class="card"> <div class="card-header p-2" id="headingSix"> <h5 class="mb-0"> <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"> Q. What is the next question? </button> </h5> </div> <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExample"> <div class="card-body"> The answer to this question can go here. This FAQ example can contain all the Q/A that is needed. </div> </div> </div> </div> </div> </div></div>',
        contact: '<div class= "container" > <div class="row"> <div class="col-xl-8 offset-xl-2 py-5"> <form id="contact-form" method="post" action="/nosabemos" role="form"> <div class="messages"></div> <div class="controls"> <div class="row"> <div class="col-md-6"> <div class="form-group"> <label for="form_name">Nombre *</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Ingrese su nombre *" required="required" data-error="Por favor ingrese su nombre."> <div class="help-block with-errors"></div> </div> </div> <div class="col-md-6"> <div class="form-group"> <label for="form_lastname">Apellido *</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Ingrese su apellido *" required="required" data-error="Por favor ingrese su apellido."> <div class="help-block with-errors"></div> </div> </div> </div> <div class="row"> <div class="col-md-6"> <div class="form-group"> <label for="form_email">Email *</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Ingrese su email *" required="required" data-error="Ingrese un email válido."> <div class="help-block with-errors"></div> </div> </div> <div class="col-md-6"> <div class="form-group"> <label for="form_need">Por favor seleccione una de las opciones *</label> <select id="form_need" name="need" class="form-control" required="required" data-error="Por favor elija una de las opciones."> <option value=""></option> <option value="tercera opcion">1</option> <option value="segunda opcion">2</option> <option value="tercera opcion">3</option> <option value="Other">Otro</option> </select> <div class="help-block with-errors"></div> </div> </div> </div> <div class="row"> <div class="col-md-12"> <div class="form-group"> <label for="form_message">Mensaje *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Escribe tu mensaje acá *" rows="4" required="required" data-error="Por favor, dejanos tu mensaje."></textarea> <div class="help-block with-errors"></div> </div> </div> <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send" value="Send message"> </div> </div> <div class="row"> <div class="col-md-12"> <p class="text-muted"> <strong>*</strong> Estos campos son necesarios. <h6 class=text-secondary>¿Necesitás mas info? ¡Estamos acá!</h6> <!--Google map--> <div class="embed-container"> <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1992.2033089120123!2d-68.82266103301583!3d-32.885653916654874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x916460b7d67d1fdc!2sEscuela%20N%C2%B04-118%20San%20Jose!5e0!3m2!1ses!2sar!4v1574969186491!5m2!1ses!2sar" frameborder="0" allowfullscreen></iframe> </div> </div> </div> </div> </form> </div> </div></div>',
        login: '<div class="container"> <div class="row justify-content-center"> <div class="col-md-8"> <div class="card"> <div class="card-header">Login</div> <div class="card-body"> <form id="formulario" method="POST" action="/login"> <div class="form-group row"> <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label> <div id="email" class="col-md-6"> <input id="email" type="email" class="form-control" name="email" required autocomplete="email" autofocus> </div> </div> <div class="form-group row"> <label for="password" class="col-md-4 col-form-label text-md-right">Password</label> <div id="password" class="col-md-6"> <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password"> </div> </div> <div class="form-group row"> <div class="col-md-6 offset-md-4"> <div class="form-check"> <input class="form-check-input" type="checkbox" name="remember" id="remember"> <label class="form-check-label" for="remember"> Remember Me </label> </div> </div> </div> <div class="form-group row mb-0"> <div class="col-md-8 offset-md-4"> <button type="submit" class="btn btn-primary"> Login </button> </div> </div> </form> </div> </div> </div> </div></div>',
        register: '<div class="container"> <div class="row justify-content-center"> <div class="col-md-8"> <div class="card"> <div class="card-header">Register</div> <div class="card-body"> <form id="formulario" method="POST" action="/register" enctype="multipart/form-data"> <div class="form-group row"> <label for="name" class="col-md-4 col-form-label text-md-right">Name</label> <div id="name" class="col-md-6"> <input id="name" type="text" class="form-control" name="name" required autocomplete="name" autofocus> </div> </div> <div class="form-group row"> <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label> <div id="email" class="col-md-6"> <input id="email" type="email" class="form-control" name="email" required autocomplete="email"> </div> </div> <div class="form-group row"> <label for="img" class="col-md-4 col-form-label text-md-right">Image</label> <div class="col-md-6"> <div id="img" class="custom-file"> <input type="file" class="custom-file-input" id="img" name="img"> <label class="custom-file-label" for="inputGroupFile01">Choose file</label> </div> </div> </div> <div class="form-group row"> <label for="password" class="col-md-4 col-form-label text-md-right">Password</label> <div id="password" class="col-md-6"> <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password"> </div> </div> <div class="form-group row"> <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label> <div class="col-md-6"> <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> </div> </div> <div class="form-group row mb-0"> <div class="col-md-6 offset-md-4"> <button type="submit" class="btn btn-primary"> Register </button> </div> </div> </form> </div> </div> </div> </div></div>'
    };//html comprimido

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
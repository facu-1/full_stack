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
}
window.onload = () => {
    fetch('http://localhost:8000/api/test')
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            let user = data;
            let boton = document.querySelector('div[id=usuario_logueado]');
            let login = document.querySelector('li[id=login]');
            let registro = document.querySelector('li[id=registro]');
            console.log(user);
            if (user != null) {
                boton.classList.remove('d-none');
            } else {
                login.classList.remove('d-none');
                registro.classList.remove('d-none');
            }
        })
        .catch(function (error) {
            console.log('El error en el pedido de la api fue:' + error);
        })
}
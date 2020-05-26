import { proxyFunciones as funciones } from './funciones.js';

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

let fill = document.querySelector('div[id=fill]'); //bloque principal

pagina_actual.funcionObjeto = function (valor) { //cosas que ocurren cuando cambiamos de pagina

    fill.innerHTML = content[valor]; //llenamos el div con la pagina seleccionada

    window.history.replaceState({}, '', valor); //cambiamos el url de la pagina

    funciones.tabActiva(valor);

    if ((valor == 'login' || valor == 'register') && user == null) { //agregamos los tokens a las paginas de login y registro
        funciones.addToken();
        if (Object.entries(errores).length !== 0) {
            funciones.showErrores();
        }
        if (Object.entries(old_values).length !== 0) {
            funciones.restoreOldValues();
        }
    } else if (valor == 'login' || valor == 'register') {//redirigimos a la home si el usuario quiere acceder a register o login y esta logueado
        pagina_actual.set = 'home';
    }

    if (valor == 'register') { //cuando estamos en la pagina register
        funciones.profilePicPreview();
    }

    if (valor == 'home') { //cuando estamos en la pagina del home
        funciones.manejoNavProductos();  //llamamos a la funcion

    }

}

export { pagina_actual };
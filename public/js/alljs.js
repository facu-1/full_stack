import { manejo_user } from './modules/manejo_user.js';
import { pagina_actual } from './modules/object_pag.js';

window.onload = () => {

    manejo_user();

    pagina_actual.set = pagina; //atualizamos la pagina actual pagina viene de laravel

    //con esto generamos los "links" para navergar
    let links = document.querySelectorAll('span.fake-link');
    links.forEach(link => {
        link.onclick = function () {
            pagina_actual.set = link.getAttribute('id');
        }
    })


}
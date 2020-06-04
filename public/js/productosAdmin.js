window.onload = () => {

    let actualizarBtns = document.querySelectorAll('.botonActualizar');
    actualizarBtns.forEach(btn => {
        btn.onclick = function () {
            document.getElementById('#editarProd' + this.getAttribute('id')).classList.remove('d-none');
        }
    })

}
window.onload = () => {


    let links = document.querySelectorAll('span.fake-link');
    links.forEach(link => {
        link.onclick = function () {
            window.location.href = '/test/' + link.getAttribute('id');
        }
    });
}
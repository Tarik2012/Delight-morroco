document.addEventListener("DOMContentLoaded", function () {
    fetch('../base_de_datos/cargar_galeria.php')
        .then(response => response.text())
        .then(html => {
            document.getElementById('gallery').innerHTML = html;
        })
        .catch(error => {
            console.error('Error al cargar la galería:', error);
        });
});
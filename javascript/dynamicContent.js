// dynamicContent.js
function changeContent() {
    const content = document.getElementById('main-content');
    content.innerHTML = "<h2>Nuestro Plato Especial del Día</h2><p>¡Prueba nuestro delicioso Couscous!</p>";
}

document.getElementById('special-button').addEventListener('click', changeContent);

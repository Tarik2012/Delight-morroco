// contactForm.js
function validateForm() {
    let name = document.forms["contactForm"]["name"].value;
    if (name == "") {
        alert("El nombre es obligatorio.");
        return false;
    }
    // Aquí puedes añadir más validaciones
}

document.getElementById('contact-form').addEventListener('submit', validateForm);

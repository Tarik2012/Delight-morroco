// imageGallery.js
let currentImageIndex = 0;
const images = ["img1.jpg", "img2.jpg", "img3.jpg"]; // Asegúrate de reemplazar esto con tus imágenes

function showNextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    document.getElementById('gallery-img').src = images[currentImageIndex];
}

document.getElementById('next-button').addEventListener('click', showNextImage);

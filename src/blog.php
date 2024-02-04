
<?php
include('header.php'); // Incluir el footer de tu sitio
?>

        <!-- Asegúrate de que la ruta de la imagen de fondo sea correcta -->

        <!-- <div class="logo">
    <a href="index.php">
        <img src="../img/logo.png" alt="Logo" class="h-16 w-16 rounded-full object-cover" />
    </a> -->
</div>

        
    <nav class="flex text-xl">
        <!-- Navegación -->
        <a href="index.php" class="text-white hover:text-gray-900 mx-2">Inicio</a>
        <a href="servicios.html" class="text-white hover:text-gray-900 mx-2">Servicios</a>
        <a href="blog.php" class="text-white hover:text-gray-900 mx-2">Blog</a>
        <a href="contacto.php" class="text-white hover:text-gray-900 mx-2">Contacto</a>
    </nav>
</header>
    
   <!-- aqui cagamos la galeria con -->
<div id="gallery" >
    <!-- Las imágenes se cargarán aquí dinámicamente -->
</div>


<footer class="text-white text-center lg:text-left">
    <div class="text-center p-4 bg-orange-400 mt-4">
        © 2024 Derechos Reservados:
        <a class="text-white" href="https://tupagina.com/">SaborGeoparqueMarruecos.com</a>
    </div>
</footer>
    <script src="../javascript/welcome.js"></script>
    <script src="../javascript/dynamicContent.js"></script>
    <script src="../javascript/contactForm.js"></script>
    <script src="../javascript/imageGallery.js"></script>
    <script src="../javascript/cargarGaleria.js"></script>

</body>
</html>

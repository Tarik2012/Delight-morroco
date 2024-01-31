

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>MorrocDelight</title>
    <style>
    .swiper-container {
        /* Ajusta estas propiedades según necesites */
        max-width: 600px; /* Limita el ancho del carrusel */
        margin: auto; /* Centra el carrusel */
    }
    .swiper-slide img {
        height: auto; /* Mantiene la proporción de la imagen */
        max-height: 300px; /* Limita la altura de la imagen */
        width: auto; /* Ajusta el ancho de la imagen según la altura */
        max-width: 100%; /* Asegura que la imagen no exceda el ancho del slide */
    }
</style>
</head>
<body class="flex flex-col min-h-screen">
<header style="height: 10rem; background-image: url('../img/img1.png');" class="bg-no-repeat flex justify-between items-center p-4 bg-orange-400 bg-cover bg-center">

        <!-- Asegúrate de que la ruta de la imagen de fondo sea correcta -->
        <div class="logo">

  <img src="../img/img1.png" alt="Logo" class="h-12" />
</div>
        
        <nav class="flex text-xl">
            <!-- Navegación -->
            <a href="index.php" class="text-white hover:text-gray-900 mx-2">Inicio</a>
            <a href="servicios.html" class="text-white hover:text-gray-900 mx-2">Servicios</a>
            <a href="blog.php" class="text-white hover:text-gray-900 mx-2">Blog</a>
            <a href="contacto.php" class="text-white hover:text-gray-900 mx-2">Contacto</a>
        </nav>
    </header>
    

    <div class="swiper-container">
    <div class="swiper-wrapper">
        <?php
        // Parámetros de conexión a la base de datos
        $servername = "localhost"; // Ejemplo: "localhost"
        $username = "root"; // Ejemplo: "root"
        $password = ""; // La contraseña de tu base de datos
        $dbname = "marocdelight"; // El nombre de la base de datos que hemos creado

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("La conexión ha fallado: " . $conn->connect_error);
        }

        $sql = "SELECT ruta_imagen, descripcion FROM imagenes";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Salida de datos de cada fila
            while($row = $result->fetch_assoc()) {
                // Aplicar clases de Tailwind CSS a las imágenes
                echo '<div class="swiper-slide"><img class="w-full h-auto object-cover" src="' . $row["ruta_imagen"] . '" alt="' . htmlspecialchars($row["descripcion"]) . '"></div>';
            }
        } else {
            echo "0 resultados";
        }

        $conn->close();
        ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-scrollbar"></div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>

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

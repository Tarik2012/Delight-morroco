// // welcome.js
// document.addEventListener('DOMContentLoaded', (event) => {
//     alert("Bienvenido a MorrocDelight, ¡disfruta de nuestra auténtica comida casera marroquí!");
// });

// cargar galeria php





// <?php
// // Parámetros de conexión a la base de datos
$servername = "localhost"; // Ejemplo: "localhost"
$username = "root"; // Ejemplo: "root"
$password = ""; // La contraseña de tu base de datos
$dbname = "marocdelight"; // El nombre de la base de datos que hemos creado

// // Crear conexión
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Verificar conexión
// if ($conn->connect_error) {
//     die("La conexión ha fallado: " . $conn->connect_error);
// }

// // Consulta SQL para recuperar las imágenes
// $sql = "SELECT ruta_imagen, descripcion FROM imagenes";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Salida de datos de cada fila
//     while($row = $result->fetch_assoc()) {
//         echo '<div class="max-w-sm rounded overflow-hidden shadow-lg">';
//         echo '<img class="w-full" src="' . $row["ruta_imagen"] . '" alt="' . htmlspecialchars($row["descripcion"]) . '">';
//         echo '<div class="px-6 py-4">';
//         echo '<p class="text-gray-700 text-base">' . htmlspecialchars($row["descripcion"]) . '</p>';
//         echo '</div></div>';
//     }
// } else {
//     echo "0 resultados";
// }

// // Cerrar conexión
// $conn->close();






// codigo javascript original
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



// anadir imagen a la base de datos
// INSERT INTO imagenes(ruta_imagen, descripcion) VALUES('img/foto1.jpg', 'Descripción de la imagen');


// /Delight-morroco/img/img1.png


{/* <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    <img src="ruta/a/imagen1.jpg" alt="Descripción 1" class="object-cover rounded overflow-hidden shadow-lg">
    <img src="ruta/a/imagen2.jpg" alt="Descripción 2" class="object-cover rounded overflow-hidden shadow-lg">
    <img src="ruta/a/imagen3.jpg" alt="Descripción 3" class="object-cover rounded overflow-hidden shadow-lg">
    <img src="ruta/a/imagen4.jpg" alt="Descripción 4" class="object-cover rounded overflow-hidden shadow-lg">
    <!-- Agrega más imágenes si es necesario -->
</div> */}

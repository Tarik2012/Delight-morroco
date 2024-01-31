<?php
// Parámetros de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marocdelight";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

$sql = "SELECT ruta_imagen, descripcion FROM imagenes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Agrega aquí tus enlaces a los estilos de Tailwind CSS si no lo has hecho -->
    <link href="ruta_a_tus_estilos.css" rel="stylesheet">
    <title>MorrocDelight</title>
    <style>
        /* Estilos personalizados para las imágenes */
        .custom-image {
            max-width: 100%;
            height: auto;
        }

        .image-container {
            width: calc(100% / 4); /* Divide en 4 columnas (hasta 4 imágenes por fila) */
            padding: 8px; /* Espacio entre las imágenes */
            float: left;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<main class="container mx-auto px-4">
    <h1 class="text-2xl font-bold text-center my-8 mt-4 mb-4">Galería de Comida Marroquí</h1>
    <div class="clearfix"> <!-- Limpieza de flotantes para la cuadrícula -->
        <?php
        $imageCounter = 0;
        while($row = $result->fetch_assoc()) {
            $imageCounter++;
            echo '<div class="image-container">';
            echo '<div class="rounded overflow-hidden shadow-lg">';
            echo '<img class="custom-image" src="' . $row["ruta_imagen"] . '" alt="' . htmlspecialchars($row["descripcion"]) . '">';
            echo '<div class="p-4">';
            echo '<p class="text-gray-700 text-base">' . htmlspecialchars($row["descripcion"]) . '</p>';
            echo '</div></div></div>';
            
            if ($imageCounter % 4 == 0) {
                echo '<div style="clear:both;"></div>'; // Nueva fila después de 4 imágenes
            }
        }
        ?>
    </div>
</main>
</body>
</html>

<?php
// Cierra la conexión a la base de datos
$conn->close();
?>


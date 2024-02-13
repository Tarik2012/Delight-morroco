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
   
    <title>MorrocDelight</title>

</head>
<body>
<main class="container mx-auto px-4">
    <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-center mb-4 mt-4 my-8">Galería de Comida Marroquí</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4"> <!-- Grid responsive con espacio entre elementos -->
        <?php
        while($row = $result->fetch_assoc()) {
            // Agrega 'mx-2' para margen lateral en cada contenedor de imagen
            echo '<div class="image-container bg-white rounded-lg overflow-hidden shadow-lg mx-2 mb-4">';
            echo '<img class="w-full h-auto object-cover" src="' . $row["ruta_imagen"] . '" alt="' . htmlspecialchars($row["descripcion"]) . '">';
            echo '<div class="p-4">';
            echo '<p class="text-gray-700 text-base text-center">' . htmlspecialchars($row["descripcion"]) . '</p>';
            echo '</div></div>';
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


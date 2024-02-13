# MorrocDelight

carrito

<?php
// Asegúrate de incluir el archivo de conexión donde sea necesario
include('db.php');

function obtenerDetallesDelProductoPorId($conexion, $id) {
    $stmt = $conexion->prepare("SELECT nombre, descripcion, precio, imagen FROM productos WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        if ($resultado->num_rows > 0) {
            $producto = $resultado->fetch_assoc();
        } else {
            $producto = null;
        }
    } else {
        // Manejo del error en caso de que la consulta falle
        error_log("Error al ejecutar la consulta: " . $stmt->error);
        $producto = null;
    }

    $stmt->close();
    return $producto;
}
?>
<?php
session_start();
include('header.php'); // Incluir el header de tu sitio
include('db.php'); // Incluir el archivo de conexión a la base de datos

if (!empty($_SESSION['carrito'])) {
    // Tu código para mostrar el carrito
    foreach ($_SESSION['carrito'] as $producto_id => $cantidad) {
        $producto = obtenerDetallesDelProductoPorId($conexion, $producto_id);
        if ($producto) {
            // Tu código para mostrar los detalles del producto
        } else {
            echo "<p>Producto con ID $producto_id no encontrado.</p>";
        }
    }
    // Cerrar la conexión a la base de datos si ya no es necesaria
    $conexion->close();
} else {
    echo '<p>Tu carrito está vacío.</p>';
}

include('footer.php'); // Incluir el footer de tu sitio
?>

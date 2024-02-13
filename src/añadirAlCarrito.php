<?php
session_start();

// Verifica si el carrito ya existe en la sesión, si no, lo inicializa
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Verifica si se ha enviado el ID del producto
if (isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];

    // Verifica si el producto ya está en el carrito y actualiza la cantidad
    if (array_key_exists($producto_id, $_SESSION['carrito'])) {
        $_SESSION['carrito'][$producto_id]++;
    } else {
        // Si el producto no está en el carrito, lo añade con cantidad 1
        $_SESSION['carrito'][$producto_id] = 1;
    }
}

// Redirige al usuario a carrito.php
header('Location: carrito.php');
exit();
?>


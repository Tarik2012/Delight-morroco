<?php
session_start();

// Verificar si el ID del producto está establecido
if (isset($_POST['producto_id'])) {
    $producto_id = $_POST['producto_id'];

    // Verificar si el producto existe en el carrito
    if (isset($_SESSION['carrito'][$producto_id])) {
        // Eliminar el producto del carrito
        unset($_SESSION['carrito'][$producto_id]);
    }
}

// Redirigir de vuelta a la página del carrito
header('Location: carrito.php'); // Asegúrate de reemplazar 'tu_pagina_del_carrito.php' con el nombre real de tu página del carrito
exit();
?>
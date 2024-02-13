


<?php

session_start();
include('header.php');
include('productos.php'); // Asegúrate de que este archivo devuelve un array de productos

if (!empty($_SESSION['carrito'])) {
    echo '<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">';
    echo '<h1 class="text-3xl font-bold text-center mb-10">Tu Carrito de Compras</h1>';

    $total = 0;

    echo '<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">';
    

    foreach ($_SESSION['carrito'] as $producto_id => $cantidad) {
        foreach ($productos as $producto) {
            if ($producto['id'] == $producto_id) {
                echo '<div class="border border-gray-200 rounded-lg shadow-sm overflow-hidden  ">';
                // Aquí se muestra la imagen del producto en un tamaño más pequeño
                echo '<img src="../img/' . htmlspecialchars($producto['imagen']) . '" alt="' . htmlspecialchars($producto['nombre']) . '" style="max-width:100px; max-height:100px; display:block; margin:auto;">';
                echo '<div class="p-6">';
                echo '<h2 class="font-bold text-xl mb-2">' . htmlspecialchars($producto['nombre']) . '</h2>';
                // echo '<p class="text-gray-700 mb-4">' . htmlspecialchars($producto['descripcion']) . '</p>';
                echo '<p class="text-lg font-semibold">Precio: €' . htmlspecialchars($producto['precio']) . '</p>';
                echo '<p class="text-lg font-semibold">Cantidad: ' . htmlspecialchars($cantidad) . '</p>';

                echo '<form action="eliminar_del_carrito.php" method="post">';
                echo '<input type="hidden" name="producto_id" value="' . htmlspecialchars($producto_id) . '">';
                echo '<button type="submit" class="bg-orange-400 hover:bg-red-700 text-black font-bold py-2 px-4 rounded">Eliminar</button>';
                echo '</form>';

                echo '</div>';
                echo '</div>';

                $total += $producto['precio'] * $cantidad;
                
                break; // Salir del bucle una vez que se encuentra el producto
            }
        }
    }

    echo '</div>'; // Fin del grid
    echo '<div class="text-center mt-8">';
    echo '<h2 class="text-2xl font-bold">Total: €' . htmlspecialchars($total) . '</h2>';
    echo '</div>';
    echo '</div>'; // Fin del contenedor principal
} else {
    echo '<p class="text-center text-xl text-zinc-600">Tu carrito está vacío.</p>';
}

include('footer.php');
?>


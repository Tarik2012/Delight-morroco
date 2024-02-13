<?php
include('productos.php'); // Incluir el archivo de productos

include('header.php'); // Incluir el header de tu sitio
?>


<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h1 class="text-3xl font-bold text-center mb-10">Nuestra Tienda Virtual</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($productos as $producto): ?>
            <div class="border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                <!-- Reducir aún más el tamaño de la imagen con max-h-16 -->
                <img style="height: 20rem; width: auto;" src="../img/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>">


                <div class="p-6">
                    <h2 class="font-bold text-xl mb-2"><?php echo $producto['nombre']; ?></h2>
                    <p class="text-gray-700 mb-4"><?php echo $producto['descripcion']; ?></p>
                    <p class="text-lg font-semibold">Precio: eur <?php echo $producto['precio']; ?></p>
                    <form action="añadirAlCarrito.php" method="post">
                    <input type="hidden" name="producto_id" value="<?php echo $producto['id']; ?>">
                    <button type="submit" class="mt-4 bg-orange-400 text-black font-bold py-2 px-4 rounded">Anadir al Carrito</button>
                    </form>

                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>



<?php
include('footer.php'); // Incluir el footer de tu sitio
?>
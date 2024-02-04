<?php
// Definir algunos productos de ejemplo
$productos = [
    [
        'nombre' => 'Pan Casero',
        'descripcion' => 'Pan recién horneado con ingredientes orgánicos.',
        'precio' => '3.50',
        'imagen' => 'img2.png' // Asegúrate de tener esta imagen en tu servidor
    ],
    [
        'nombre' => 'Tarta de Manzana',
        'descripcion' => 'Tarta de manzana tradicional, hecha con manzanas frescas.',
        'precio' => '5.00',
        'imagen' => 'tajin.png'
    ],
    [
        'nombre' => 'Empanadas de Carne',
        'descripcion' => 'Empanadas argentinas rellenas de carne y huevo.',
        'precio' => '2.00',
        'imagen' => 'tajin.png'
    ]
];

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
                    <p class="text-lg font-semibold">Precio: $<?php echo $producto['precio']; ?></p>
                    <button class="mt-4 bg-blue-500 text-black font-bold py-2 px-4 rounded">Añadir al Carrito</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
include('footer.php'); // Incluir el footer de tu sitio
?>
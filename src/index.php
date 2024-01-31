<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
    <title>MorrocDelight</title>
</head>
<body class="flex flex-col min-h-screen">
<header class="h-32 bg-no-repeat flex justify-between items-center p-4 bg-orange-400 bg-cover bg-center sm:h-24 sm:p-2">
    <div class="logo">
        <a href="index.php">
            <img src="../img/logo.png" alt="Logo" class="h-16 w-16 rounded-full object-cover sm:h-12 sm:w-12" />
        </a>
    </div>
    <nav class="flex text-xl sm:text-sm">
        <a href="index.php" class="text-white hover:text-gray-900 mx-2">Inicio</a>
        <a href="servicios.php" class="text-white hover:text-gray-900 mx-2">Servicios</a>
        <a href="blog.php" class="text-white hover:text-gray-900 mx-2">Blog de cocina marroquí</a>
        <a href="contacto.php" class="text-white hover:text-gray-900 mx-2">Contacto</a>
    </nav>
</header>

<div>Hola mundo</div>

<section class="text-center py-16 bg-gray-100">
    <h2 class="text-4xl font-semibold text-gray-800 sm:text-2xl">Descubre los Sabores de Marruecos</h2>
    <p class="max-w-xl mx-auto mt-4 text-gray-600 sm:text-sm sm:px-4">Sumérgete en una experiencia culinaria única con nuestros auténticos platos marroquíes, llenos de especias exóticas y sabores vibrantes.</p>
</section>

<section class="container mx-auto py-16">
    <h3 class="text-center text-3xl font-semibold mb-10 sm:text-2xl">Platos Destacados</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="max-w-sm mx-auto">
            <img class="w-full h-64 object-cover" src="../img/cuscus.png" alt="Plato 1">
            <div class="p-4">
                <h4 class="font-semibold text-lg">Cuscús Marroquí</h4>
                <p class="text-gray-600">El cuscús tradicional, servido con vegetales de temporada y carne tierna.</p>
            </div>
        </div>
        <div class="max-w-sm mx-auto">
            <img class="w-full h-64 object-cover" src="../img/tajin.png" alt="Plato 2">
            <div class="p-4">
                <h4 class="font-semibold text-lg">Tajín de Pollo</h4>
                <p class="text-gray-600">Pollo cocinado lentamente en especias marroquíes, aceitunas y limones en conserva.</p>
            </div>
        </div>
        <div class="max-w-sm mx-auto">
            <img class="w-full h-64 object-cover" src="../img/pastela-pescado.png" alt="Plato 3">
            <div class="p-4">
                <h4 class="font-semibold text-lg">Pastela Marroquí</h4>
                <p class="text-gray-600">Una deliciosa mezcla de carne y especias dentro de una crujiente capa de masa filo, espolvoreada con azúcar y canela.</p>
            </div>
        </div>
    </div>
</section>

<section class="container mx-auto py-16">
   <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class='max-w-sm mx-auto text-2xl text-neutral-800 sm:text-xl'>
            Nuestra cultura
        </div>
        <div class="max-w-sm mx-auto text-2xl text-neutral-800 sm:text-xl">
            Sitio a visitar
        </div>
        <div class="max-w-sm mx-auto text-2xl text-neutral-800 sm:text-xl">
            Sitio a visitar
        </div>
   </div>
</section>

<section class="bg-gray-200 py-16">
    <div class="container mx-auto">
        <h3 class="text-center text-3xl font-semibold mb-8 sm:text-2xl">Lo que Nuestros Clientes Dicen</h3>
        <div class="flex flex-wrap justify-center gap-8">
            <div class="max-w-md p-4 bg-white rounded-lg shadow sm:max-w-sm">
                <p class="text-gray-600">"La experiencia culinaria más auténtica fuera de Marruecos. Cada plato nos transportó a las calles de Marrakech. ¡Simplemente excepcional!"</p>
                <div class="mt-4">
                    <p class="font-semibold">- Alejandro G.</p>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow sm:max-w-sm">
                <p class="text-gray-600">"Increíble atención al detalle en cada plato. Los sabores son ricos y complejos. Definitivamente regresaré con más amigos."</p>
                <div class="mt-4">
                    <p class="font-semibold">- María R.</p>
                </div>
            </div>
            <div class="max-w-md p-4 bg-white rounded-lg shadow sm:max-w-sm">
                <p class="text-gray-600">"El mejor cuscús que he probado en mi vida. La atmósfera y la comida te hacen sentir como si estuvieras en Marruecos."</p>
                <div class="mt-4">
                    <p class="font-semibold">- Carlos S.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
</body>
</html>

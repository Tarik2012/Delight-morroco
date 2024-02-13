
<?php
include('header.php'); // Incluir el footer de tu sitio
?>

    <main id="" class="flex-grow">
      <form
        action="../base_de_datos/formulario.php"
        method="post"
        id="contact-form"
        name="contactForm"
        class="max-w-lg mx-auto bg-white p-8 mt-10 rounded shadow"
      >
        <h2 class="text-2xl font-semibold mb-4">Contacto</h2>
        <div class="mb-4">
          <label for="name" class="block text-gray-700 text-sm font-bold mb-2"
            >Nombre:</label
          >
          <input
            type="text"
            id="name"
            name="name"
            required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          />
        </div>
        <div class="mb-4">
          <label for="email" class="block text-gray-700 text-sm font-bold mb-2"
            >Correo electrónico:</label
          >
          <input
            type="email"
            id="email"
            name="email"
            required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          />
        </div>
        <div class="mb-4">
          <label for="phone" class="block text-gray-700 text-sm font-bold mb-2"
            >Teléfono:</label
          >
          <input
            type="tel"
            id="phone"
            name="phone"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
          />
        </div>
        <div class="mb-6">
          <label
            for="message"
            class="block text-gray-700 text-sm font-bold mb-2"
            >Mensaje:</label
          >
          <textarea
            id="message"
            name="message"
            required
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline h-32"
          ></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button
            type="submit"
            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
          >
            Enviar
          </button>
        </div>
      </form>
    </main>

    <?php
include('footer.php'); // Incluir el footer de tu sitio
?>

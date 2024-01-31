<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y limpiar los datos del formulario
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['message'])));

    // Validación simple (puedes expandirla según tus necesidades)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Por favor, completa todos los campos requeridos.";
    } else {
        // Procesar los datos

        // Conexión a la base de datos
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=marocdelight', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare("INSERT INTO contactos (nombre, email, telefono, mensaje) VALUES (:nombre, :email, :telefono, :mensaje)");
            $stmt->bindParam(':nombre', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telefono', $phone);
            $stmt->bindParam(':mensaje', $message);

            $stmt->execute();

            echo "Mensaje guardado exitosamente en la base de datos.<br>";
        } catch(PDOException $e) {
            echo "Error de conexión a la base de datos: " . $e->getMessage();
        }

        // Enviar por correo electrónico
        $to = 'tarikerrochdi@gmail.com'; // Cambia esto por tu dirección de correo electrónico
        $subject = 'Nuevo mensaje de contacto';
        $email_content = "Nombre: $name\n";
        $email_content .= "Email: $email\n\n";
        $email_content .= "Mensaje:\n$message\n";

        $email_headers = "From: $name <$email>";

        if(mail($to, $subject, $email_content, $email_headers)) {
            echo "Mensaje enviado exitosamente por correo electrónico.";
        } else {
            echo "Error al enviar el mensaje por correo electrónico.";
        }
    }
} else {
    // No se accedió a través de un POST, redirigir o mostrar un error
    echo "Acceso no permitido.";
}
?>

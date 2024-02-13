<?php
// db.php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$nombreBaseDeDatos = "marocdelight";

$conexion = new mysqli($servidor, $usuario, $contrasena, $nombreBaseDeDatos);

if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}
?>
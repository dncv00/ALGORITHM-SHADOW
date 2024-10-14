<?php
$host = 'localhost'; // Cambia esto si es necesario
$usuario = 'root'; // Cambia esto si tienes un usuario diferente
$contrasena = ''; // Cambia esto si tienes una contraseña
$nombreBaseDatos = 'formulario'; // Cambia esto al nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($host, $usuario, $contrasena, $nombreBaseDatos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

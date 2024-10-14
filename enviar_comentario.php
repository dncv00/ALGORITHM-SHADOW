<?php
session_start();

// Incluir la conexión a la base de datos
include_once "conexion.php";

// Función para generar un código alfanumérico
function generarCodigoAlfanumerico($longitud = 20)
{
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $codigo = '';
    for ($i = 0; $i < $longitud; $i++) {
        $codigo .= $caracteres[mt_rand(0, strlen($caracteres) - 1)];
    }
    return $codigo;
}

try {
    // Verificar que el comentario haya sido enviado
    if (!isset($_POST['comentario']) || empty(trim($_POST['comentario']))) {
        throw new Exception('¡Debes tener contenido en tu comentario!');
    }

    // Crear las variables
    $vcodigo = generarCodigoAlfanumerico();
    $vcomentario = filter_var(trim($_POST["comentario"]), FILTER_SANITIZE_STRING);
    
    // Asignar 'anónimo' si no hay sesión
    $vusuario = isset($_SESSION['identificacion']) ? $_SESSION['identificacion'] : 'anónimo'; 
    $vfecha = date('Y-m-d H:i:s'); // Usar fecha y hora completa

    // Verificar si el usuario 'anónimo' existe en la tabla persona
    $usuarioAnonimo = 'anónimo';
    $query = "INSERT INTO persona (identificacion, nombre) VALUES (?, 'Usuario Anónimo') 
              ON DUPLICATE KEY UPDATE nombre = 'Usuario Anónimo'";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("s", $usuarioAnonimo); // Usar parámetros para evitar inyecciones SQL
    $stmt->execute();
    $stmt->close();

    // Realizar la sintaxis del insert en SQL para realizar el añadido
    $insertar = $conexion->prepare("INSERT INTO comentarios (id, usuario, comentario, fecha) VALUES (?, ?, ?, ?)");
    
    // Verificar si la preparación fue exitosa
    if (!$insertar) {
        throw new Exception('Error al preparar la consulta: ' . $conexion->error);
    }

    // Aquí se añaden los valores de las variables al insert
    $insertar->bind_param("ssss", $vcodigo, $vusuario, $vcomentario, $vfecha);
    
    // Ejecutar la consulta
    if (!$insertar->execute()) {
        throw new Exception('Error al ejecutar la consulta: ' . $insertar->error);
    }

    // Cerrar la declaración de inserción
    $insertar->close();

    // Redirigir al usuario después de insertar el comentario
    header("Location: teoria1.php"); // Cambia esto si es necesario
    exit();
} catch (mysqli_sql_exception $e) {
    // Manejo de errores de mysqli
    echo 'Error: ' . $e->getMessage();
    echo "<a href='teoria1.php'> Volver</a>";
} catch (Exception $e) {
    // Manejo de otros errores
    echo 'Error: ' . $e->getMessage();
    echo "<a href='teoria1.php'> Volver</a>";
}
?>

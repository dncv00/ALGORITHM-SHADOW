<?php
include_once("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $introducir_nombre = $_POST['introducir_nombre'] ?? '';
    $introducir_email = $_POST['introducir_email'] ?? '';
    $introducir_telefono = $_POST['introducir_telefono'] ?? '';
    $introducir_asunto = $_POST['introducir_asunto'] ?? '';
    $introducir_mensaje = $_POST['introducir_mensaje'] ?? '';

    $errores = [];
    
    if (empty($introducir_nombre)) {
        $errores[] = "El nombre es obligatorio.";
    }
    
    if (empty($introducir_email) || !filter_var($introducir_email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El email es obligatorio y debe ser válido.";
    }
    
    if (empty($introducir_telefono)) {
        $errores[] = "El teléfono es obligatorio.";
    }
    
    if (empty($introducir_asunto)) {
        $errores[] = "El asunto es obligatorio.";
    }
    
    if (empty($introducir_mensaje)) {
        $errores[] = "El mensaje es obligatorio.";
    }
    
    if (!empty($errores)) {
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        $stmt = $conexion->prepare("INSERT INTO contacto (introducir_nombre, introducir_email, introducir_telefono, introducir_asunto, introducir_mensaje) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $introducir_nombre, $introducir_email, $introducir_telefono, $introducir_asunto, $introducir_mensaje);

        if ($stmt->execute()) {
            echo '
            <script>
            alert("Mensaje enviado con éxito");
            window.location.href="http://localhost/algorithmshadow/index.php";
            </script>
            ';
            exit();
        } else {
            echo "<p>Hubo un problema al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</p>";
        }

        $stmt->close();
    }
} else {
    header("Location: contactanos.php");
    exit();
}

$conexion->close();
?>

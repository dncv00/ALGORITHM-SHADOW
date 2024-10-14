<?php
session_start();
require_once "conexion.php"; // Incluye el archivo de conexión

// Verificar el método de solicitud
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    $correo = $_POST["correo"];

    // Preparar la consulta para evitar inyecciones SQL
    $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ? AND correo = ? AND contrasena = ?");
    $stmt->bind_param("sss", $usuario, $correo, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado && $resultado->num_rows > 0) { // si hay datos en la base de datos
        // Guardar el nombre del usuario en la sesión
        $fila = $resultado->fetch_assoc(); // Obtener la fila
        $_SESSION["usuario"] = $usuario; // Almacenar el nombre de usuario
        $_SESSION["nombre"] = $fila["nombre"]; // Suponiendo que tienes un campo 'nombre' en tu tabla de usuarios

        if ($fila["perfil"] == '1') { // === para comparación estricta
            echo '
            <script>
            alert("Bienvenido admin");
            window.location.href = "http://localhost/algorithmshadow/administradores/admin.php";
            </script>
            ';
        } else {  
            echo '
            <script>
            alert("Ha iniciado sesión exitosamente");
            window.location.href = "http://localhost/algorithmshadow/index.php";
            </script>
            ';
        }
    } else {
        echo '
        <script>
        alert("Las credenciales son incorrectas");
        window.location.href = "http://localhost/algorithmshadow/acceso.php";
        </script>
        ';
    }

    $stmt->close();
}
?>

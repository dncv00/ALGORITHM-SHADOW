<?php
include 'conexion.php';

// Recibir los datos y almacenarlos en variables


$usuario = $_POST["usuario"];
$correo = $_POST["correo"];

$contrasena = $_POST["contrasena"];

$perfil = $_POST["perfil"];

// Consulta para verificar si ya existe el usuario, correo o teléfono
$query = "
    SELECT * FROM usuarios 
    WHERE usuario = '$usuario' 
    OR correo = '$correo' 
   
";

// Ejecutar consulta
$resultado = mysqli_query($conexion, $query);

// Verificar si ya hay algún registro con el mismo usuario, correo o teléfono
if (mysqli_num_rows($resultado) > 0) {
    $mensaje = '';

    // Verificar el motivo del conflicto
    $row = mysqli_fetch_assoc($resultado);
    if ($row['usuario'] == $usuario) {
        $mensaje = "El nombre de usuario ya está registrado";
    } elseif ($row['correo'] == $correo) {
        $mensaje = "El correo ya está registrado";
    
    }

    echo '<script>
        alert("' . $mensaje . '");
        window.location.href = "registro.php";
    </script>';
    exit;
}

// Consulta para insertar
$insertar = "
    INSERT INTO usuarios ( usuario, correo, contrasena, perfil) 
    VALUES ( '$usuario', '$correo', '$contrasena', '$perfil')
";

// Ejecutar consulta de inserción
if (mysqli_query($conexion, $insertar)) {
    echo '<script>
        alert("Registro exitoso");
        window.location.href = "http://localhost/algorithmshadow/acceso.php";
    </script>';
} else {
    echo '<script>
        alert("Error al registrarse");
        window.location.href = "registro.php";
    </script>';
}

// Cerrar conexión
mysqli_close($conexion);
?>

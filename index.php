<?php
include "conexion.php"; // Asegúrate de que este archivo conecta correctamente a la base de datos

session_start(); // Iniciar la sesión

// Verificar si la sesión del usuario está configurada
if (!isset($_SESSION["usuario"])) {
    header("Location: acceso.php"); // Redirigir si no está logueado
    exit();
}

$usuario = $_SESSION["usuario"]; // Obtener el nombre de usuario de la sesión


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styless.css">
    <link rel="website icon" type="png" href="logo.png"> 
    
    <title>Inicio</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Logo del foro">
        </div>
        <nav>
            <ul class="menu">
                <li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li> 
                <li><a href="foros.php"><i class="fas fa-comments"></i> Foros</a></li>
                <li><a href="miperfil.php"><i class="fas fa-user"></i> Mi Perfil</a></li>
                <li><a href="contactanos.php"><i class="fas fa-envelope"></i> Contáctanos</a></li>
                <li><a href="ensayocarrito.php"><i class="fas fa-shopping-bag"></i> Tienda</a></li>
                <li><a href="cerrar.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>  
    <main>
        <section class="hero">
            <video src="video.mp4" autoplay loop muted></video>
            <div class="contenido">
                <h1>Bienvenidos a Algorithm Shadow</h1>
                <p>Únete a la comunidad, comparte tus ideas y descubre nuevos horizontes.</p>
                <a href="nosotros.php" class="boton1">Sobre nosotros</a>
            </div>
        </section>
    </main>
    <footer>
        <div class="redes-sociales">
            <a href="https://www.facebook.com/profile.php?id=61551864575302&mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com/AlgorithmShadow?t=2grC225JOwrPfak4G41uMg&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/algorithm.shadow?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="right"> <br><br>
        <p>&copy; 2024 Algorithm Shadow</p> 
        </div>
    </footer>
</body> 
</html>

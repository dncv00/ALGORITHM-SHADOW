<?php
include "conexion.php";

session_start(); // Iniciar la sesión

// Verificar si la sesión del usuario está configurada
if (!isset($_SESSION["usuario"])) {
    header("Location: acceso.php");
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
    <link rel="stylesheet" href="foros.css">
    <title>Algorithm Shadow - Foros</title>
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
                <li><a href="ensayocarrito.php"><i class="fas fa-shopping-bag"></i>Tienda</a></li>
                <li><a href="cerrar.php"><i class="fas fa-user"></i>Cerrar Sesion</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="foro">
            <h1>Bienvenido al Foro Misterioso</h1>
            <div class="tema">
                <h2>Tema #1</h2>
                <p> Teorías conspirativas</p>
                <a href="tema1.php" class="boton-ver-tema">Ver más</a>
            </div>
            <div class="tema">
                <h2>Tema #2</h2>
                <p>Ciberseguridad</p>
                <a href="tema2.html" class="boton-ver-tema">Ver más</a>
            </div>
            <div class="tema">
                <h2>Tema #3</h2>
                <p>Casos sin resolver</p>
                <a href="tema3.html" class="boton-ver-tema">Ver más</a>
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
        <p>&copy; 2023 Algorithm Shadow</p> 
        </div>
    </footer>
</body>
</html>
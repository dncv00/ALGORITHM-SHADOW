<?php
include "conexion.php";

session_start(); // Iniciar la sesión

// Verificar si el usuario está logueado
if (!isset($_SESSION["usuario"])) {
    header("Location: ../algorithmshadow/acceso.php");
    exit();
}


$usuario = $_SESSION["usuario"];


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="miperfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Mi Perfil</title>
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
        <section class="perfil">
            <div class="perfil-info">
                <img src="logo.png" alt="Foto de perfil">
                <h1>¡Bienvenido <?php echo htmlspecialchars($usuario);?>!</h1>
                <p>Aquí podrás explorar teorías conspirativas, misterios sin resolver y secretos ocultos. 
                Nos encanta que formes parte de nuestra comunidad curiosa. 
                ¡Déjanos tus pensamientos en los comentarios y comparte tus propias teorías!</p>
            </div>
        </section>
        
    </main>
    <footer>
        <div class="redes-sociales">
            <a href="https://www.facebook.com/profile.php?id=61551864575302&mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com/AlgorithmShadow?t=2grC225JOwrPfak4G41uMg&s=09" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://instagram.com/algorithm.shadow?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="right"> <br>
        <p>&copy; 2024 Algorithm Shadow</p> 
        </div>
        <script src="script.js"></script>
    </footer>
</body>
</html>

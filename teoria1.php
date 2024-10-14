<?php
session_start();

// Incluir la conexión a la base de datos
include_once "conexion.php";

// Realizar una consulta para obtener los comentarios
$consulta = "SELECT usuario, comentario, fecha FROM comentarios ORDER BY fecha DESC";
$resultado = $conexion->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="teoria1.css">
    <title>AS - Teorías conspirativas</title>
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
                <li><a href="cerrar.php"><i class="fas fa-user"></i> Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="descripcion-tema">
            <div class="titulo">¿Los Misteriosos Hombres de Negro: Guardianes del Enigma Extraterrestre?</div>
            <div class="parrafo">
                ¿Te has preguntado qué harías si, después de presenciar un avistamiento de un OVNI, te encuentras con individuos vestidos de negro, con una apariencia inquietante y un comportamiento intimidante, que aparecen en tu puerta? Estos enigmáticos "Hombres de Negro" salen de las sombras y despiertan temores profundos. ¿Son simples agentes gubernamentales encargados de ocultar la verdad sobre los OVNIs, o podría tener un origen aún más oscuro y misterioso?
            </div>
            <div class="parrafo">
                Los MIB son una parte fascinante de la cultura popular y la mitología de los OVNIs. Llegan en vehículos misteriosos y hacen preguntas detalladas a los testigos, a menudo advirtiéndoles que guarden silencio bajo amenaza de consecuencias desconocidas. Nadie sabe realmente quiénes son ni de dónde vienen, lo que añade un elemento adicional de misterio a su aura.
            </div>
            <div class="parrafo">
                Desde su misteriosa aparición hasta su desconocido propósito, los Hombres de Negro siguen siendo un enigma sin resolver en el mundo de los misterios paranormales. ¿Agentes gubernamentales, guardianes del secreto extraterrestre, o algo más allá de nuestra comprensión? Acompáñanos en un viaje a lo desconocido mientras exploramos el enigma de los MIB y desentrañamos las teorías que rodean a estos misteriosos visitantes vestidos de negro. ¿Estás listo para adentrarte en el mundo de lo inexplicable?
            </div>
        </div>

        <section class="comentarios">
            <h2>Comentarios</h2>
            
            <!-- Formulario para enviar comentario -->
            <form action="enviar_comentario.php" method="POST">
                <div class="nuevo-comentario">
                    <textarea id="comentario" name="comentario" rows="4" placeholder="Deja tu comentario aquí." required></textarea>
                    <button class="publicar-comentario" type="submit">Publicar</button>
                </div>
            </form>

            <div class="comentarios-lista">
                <h3>Comentarios anteriores:</h3>
                <!-- Aquí aparecerán los comentarios previos cargados desde la base de datos -->
                <?php
                if ($resultado->num_rows > 0) {
                    // Mostrar cada comentario
                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<div class='comentario'>";
                        echo "<p><strong>" . htmlspecialchars($fila['usuario']) . "</strong> dijo el " . htmlspecialchars($fila['fecha']) . ":</p>";
                        echo "<p>" . htmlspecialchars($fila['comentario']) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Aún no hay comentarios.</p>";
                }

                // Cerrar la conexión
                $conexion->close();
                ?>
            </div>
        </section>  
    </main>
    
    <footer>
        <div class="redes-sociales">
            <a href="https://www.facebook.com/profile.php?id=61551864575302&mibextid=LQQJ4d" target="_blank" rel="noopener" title="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://x.com/AlgorithmShadow?t=2grC225JOwrPfak4G41uMg&s=09" target="_blank" rel="noopener" title="Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com/algorithm.shadow?igshid=MzRlODBiNWFlZA==" target="_blank" rel="noopener" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
         </div>
        <div class="right"> <br><br>
        <p>&copy; 2024 Algorithm Shadow</p> 
        </div>
    </footer>
</body> 
</html>

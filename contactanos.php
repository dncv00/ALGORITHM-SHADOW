<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="contactanos.css">
    <title>Contáctanos - Algorithm Shadow</title>
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
        <form method="post" action="registro-contacto.php">
            <div class="contact_form">
                <div class="formulario">			
                    <h1>¡Escríbenos!</h1>
                    <h3>Escríbenos y en breve nos pondremos en contacto contigo</h3>
                    
                    <p>
                        <label for="nombre" class="colocar_nombre">Nombre
                        <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="introducir_nombre" id="nombre" required placeholder="Escribe tu nombre">
                    </p> 
                    
                    <p>
                        <label for="email" class="colocar_email">Email
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="email" name="introducir_email" id="email" required placeholder="Escribe tu Email">
                    </p>
                    
                    <p>
                        <label for="telefono" class="colocar_telefono">Teléfono
                        </label>
                        <input type="tel" name="introducir_telefono" id="telefono" placeholder="Escribe tu teléfono">
                    </p>		
                    
                    <p>
                        <label for="asunto" class="colocar_asunto">Asunto
                            <span class="obligatorio">*</span>
                        </label>
                        <input type="text" name="introducir_asunto" id="asunto" required placeholder="Escribe un asunto">
                    </p>		
                    
                    <p>
                        <label for="mensaje" class="colocar_mensaje">Mensaje
                            <span class="obligatorio">*</span>
                        </label>                     
                        <textarea name="introducir_mensaje" class="texto_mensaje" id="mensaje" required placeholder="Deja aquí tu comentario..."></textarea> 
                    </p>	  
                    
                    <input type="submit" name="Enviar" value="Enviar Mensaje">
                    
                    <p class="aviso">
                        <span class="obligatorio"> * </span>los campos son obligatorios.
                    </p>					
                </div>	
            </div>
        </form>
    </main>
    <footer>
        <div class="redes-sociales">
            <a href="https://www.facebook.com/profile.php?id=61551864575302&mibextid=LQQJ4d" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com/AlgorithmShadow?t=2grC225JOwrPfak4G41uMg&s=09" target="_blank"><i class="fab fa-x"></i></a>
            <a href="https://instagram.com/algorithm.shadow?igshid=MzRlODBiNWFlZA==" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="right"> <br><br>
        <p>&copy; 2024 Algorithm Shadow</p> 
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">
    <title>Formulario</title>
</head>
<body>
    <main>
        <form method="post" action="send.php" autocomplete="off" class="loginForm">
            <header class="login">
                <h1>Registrarse</h1>
            </header>

            <section class="inputForm">
                <div class="userForm">
                    <i class="fa-solid fa-user" style="color: #222d3f;"></i> 
                    <input type="text" name="usuario" id="user" placeholder="Usuario">
                </div> 

                <div class="emailForm">
                    <i class="fa-brands fa-google" style="color: #222d3f;"></i> 
                    <input type="email" name="correo" id="email" placeholder="Correo">
                </div> 

                <div class="passForm">
                    <i class="fa-solid fa-lock" style="color: #222d3f;"></i> 
                    <input type="password" name="contrasena" id="pass" placeholder="Contraseña">
                </div> 

                <div class="emailForm">
                    <i class="fa-solid fa-user" style="color: #222d3f;"></i> 
                    <input type="" name="perfil" id="user" placeholder="Perfil">
                </div>

                <input type="submit" name="enviar" id="loginBtn" value="Registrarse">
            </section>

            <span>o usa tu cuenta</span>
            
            <section class="social-container">
                <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
                <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
            </section>

            <footer class="footer">
                <p>¿Ya tienes una cuenta? <a href="acceso.php" id="signUp">Entrar</a></p>
            </footer>
        </form>
    </main>
</body>
</html>

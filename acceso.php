<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="acceso.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer">
    <title>Inicio de Sesion</title>
</head>
<body>
     <form method="post" action="login.php">
        
        <div class="loginForm">
        <span>o usa tu cuenta</span>
        <div class="social-container">
          <a href="#" class="social"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fa-brands fa-google"></i></a>
          <a href="#" class="social"><i class="fa-brands fa-tiktok"></i></a>
        </div>
        <div class="login">
            <h1>Iniciar sesión</h1>
        </div>
        <div class="inputForm">
        <div class="username">
        <div class="userForm">
             <i class="fa-solid fa-user" style="color: #222d3f;"></i> 
             <input type="text" name="usuario" id="user" placeholder= "Usuario">
        </div>
        <br>
        <div class="userForm">
             <i class="fa-solid fa-user" style="color: #222d3f;"></i> 
             <input type="text" name="correo" id="user" placeholder= "Correo">
        </div>
        </div> 
        <div class="pass">
              <div class="passForm">
        <i class="fa-solid fa-lock" style= "color: #222d3f;"></i>
         <input type="password" name="contrasena" id="pass" placeholder= "Contraseña">
        </div> </div>
        <div class="forgot">
        <a href="#" id="forgotText">¿Olvidaste tu contraseña?</a>
        </div> 
        
        <button id="loginBtn" type="submit">Entrar</button>
        
        
      </div> <div class="footer">
        <p> Crea una nueva cuenta <a href="registro.php" id="signUp">aquí</a></p> </div>
        </div>
    
      </form>
</body>
</html>

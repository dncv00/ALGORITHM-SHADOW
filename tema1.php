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
    <link rel="stylesheet" href="tema1.css">
    <title>Tema 1 - Algorithm Shadow</title>
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
        <div class="carrusel-list" id="carrusel-list">
            <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
            onclick="app.processingButton(event)">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path fill="currentColor"
                    d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                </path>
            </svg>
        </button>
            <div class="carrusel-track" id="track">

                <div class="carrusel">
                    <div>
                        <a  href="teoria1.php">
                           
                            <picture>
                             
                                    <img src="hombres.png">
                                    <div class="capa">
                                       <h3>Hombres de Negro</h3>
                                    </div>

                            </picture>   
                        </a>
                    </div>
                </div>
                <div class="carrusel">
                    <div>
                        <a  href="teoria2.html">
                           
                            <picture>
                                <img src="teoria2.png" alt="">
                                <div class="capa">
                                    <h3>¿Quién creó las<br>pirámides?</h3>
                                 </div>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="carrusel">
                    <div>
                        <a  href="teoria3.html">
                            
                            <picture>
                                <img src="matrix.png" alt="">
                                <div class="capa">
                                    <h3>¿Vivimos en una<br>simulación?</h3>
                                 </div>
                            </picture>
                        </a>
                    </div>
                </div>

                <div class="carrusel">
                    <div>
                        <a href="teoria4.html">
                           
                            <picture>
                             
                                    <img src="teoria4.png">
                                    <div class="capa">
                                        <h3>Los Simpson</h3>
                                     </div>
                            
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="carrusel">
                    <div>
                        <a  href="teoria5.html">
                           
                            <picture>
                             
                                    <img src="img/6.png">
                                    <div class="capa">
                                        <h3>¿Dios existe?</h3>
                                     </div>
                            
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="carrusel">
                    <div>
                        <a  href="teoria6.html">
                           
                            <picture>
                             
                                    <img src="teoria6.png">
                                    <div class="capa">
                                        <h3></h3>
                                     </div>
                            
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="carrusel">
                    <div>
                        <a  href="teoria7.html">
                           
                            <picture>
                             
                                    <img src="tema7.png">
                                    <div class="capa">
                                        <h3></h3>
                                     </div>
                            
                            </picture>
                        </a>
                    </div>
                </div>
                
            </div>
            <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
            onclick="app.processingButton(event)">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512">
                <path fill="currentColor"
                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                </path>
            </svg>
        </button>
    
        </div>
    </div>
       
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
    <script src="tema1.js"></script>
</body>
</html>



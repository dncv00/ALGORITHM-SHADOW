<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="ensayocarrito.css">
    <script src="ensayocarrito.js" async></script>
    <title>Carrito de compras </title>
</head>
<body>
<header>
        <a href="index.php">
        <img src="logo.png" alt="Logo de la Tienda Algorithm Shadow" style="height: 50px; vertical-align: middle; margin-right: 10px; margin-top: 2px;">
        </a>
        <h1><i>Tienda Algorithm Shadow</i></h1>
    </header>
    <main>
    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Bolso</span>
                <img src="producto1.png" alt="" class="img-item">
                <span class="precio-item">$190.000</span>
                <div class="info-item">
                    <p>Bolso de diseño minimalista hecho de cuero sintético duradero, ideal para llevar tus pertenencias con estilo. Perfecto para viajes cortos o como complemento elegante en tu día a día.</p>
                </div>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            
            <div class="item">
                <span class="titulo-item">Taza</span>
                <img src="producto2.png" alt="" class="img-item">
                <span class="precio-item">$25.000</span>
                <div class="info-item">
                    <p>Taza de cerámica con un acabado mate y un diseño llamativo, perfecta para disfrutar de tu café o té matutino. Añade un toque de originalidad a tu colección de tazas.</p>
                </div>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            
            <div class="item">
                <span class="titulo-item">Sombrilla</span>
                <img src="producto3.png" alt="" class="img-item">
                <span class="precio-item">$40.000</span>
                <div class="info-item">
                    <p>Sombrilla negra de alta resistencia con diseño compacto y estilizado. Perfecta para llevar en días lluviosos o soleados, asegurando protección con un estilo sobrio.</p>
                </div>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            
            <div class="item">
                <span class="titulo-item">Camiseta</span>
                <img src="producto4.png" alt="" class="img-item">
                <span class="precio-item">$55.000</span>
                <div class="info-item">
                    <p>Camiseta de estilo oscuro con un diseño enigmático que presenta un ojo simbólico. Hecha de algodón de alta calidad para mayor comodidad. Talla única.</p>
                </div>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            
            <div class="item">
                <span class="titulo-item">Camiseta</span>
                <img src="producto5.png" alt="" class="img-item">
                <span class="precio-item">$60.000</span>
                <div class="info-item">
                    <p>Camiseta con un impresionante diseño gráfico que evoca un misterioso portal cósmico. Perfecta para los amantes de lo enigmático. Talla única.</p>
                </div>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            
            <div class="item">
                <span class="titulo-item">Camibuso</span>
                <img src="producto6.png" alt="" class="img-item">
                <span class="precio-item">$45.000</span>
                <div class="info-item">
                    <p>Camibuso con un diseño industrial de engranajes y elementos mecánicos, ideal para quienes buscan un look único y alternativo. Talla única.</p>
                </div>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
        </div>

        
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
               
            </div>

            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <a href="formulario_premium.html" class="btn-pagar">Pagar<i class="fa-solid fa-bag-shopping"></i></a>

            </div>
        </div>
    </section>
</main>
</body>
</html>

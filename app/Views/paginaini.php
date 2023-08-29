<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aereoz - Tu aerolínea de confianza</title>
    <link rel="stylesheet" href="/estilo.css"> <!-- Enlaza tu archivo de estilos CSS -->
    <link rel="icon" href="<?php echo base_url("/images/logoo.png") ?>" type="image/x-icon">
    
</head>
<body>
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <img src="<?php echo base_url("/images/logon.png")?>" alt="Aereoz Logo">
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="http://localhost:8080/signup">Registrarse</a></li>
                    <li><a href="http://localhost:8080/index.php/signin">Iniciar sesion</a></li>
                    <li><a href="http://localhost/pruebitaashe/public/reservavuelos">Reserva de Vuelos</a></li>
                    <li><a href="http://localhost/pruebitaashe/public/destinos">Destinos</a></li>
                    <!-- Agrega más enlaces de navegación aquí -->
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="hero">
        <div class="container">
            <h2>Descubre el mundo con Aereoz</h2>
            <p>Encuentra los mejores vuelos y destinos para tus próximas aventuras.</p>
            <a href="http://localhost/pruebitaashe/public/reservavuelos" class="btn">Reservar ahora</a>
        </div>
    </section>
    <section class="image-gallery">
    <div class="image">
        <img src="/images/destinoo1.jpg" alt="Imagen 1">
    </div>
    <div class="image">
        <img src="/images/destino2.jpg" alt="Imagen 2">
    </div>
    <div class="image">
        <img src="/images/destino3.jpg" alt="Imagen 3">
    </div>
    
    <!-- Agrega más imágenes aquí -->
</section>
    
    <footer>
        <div class="container">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
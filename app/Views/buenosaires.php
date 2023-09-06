<!DOCTYPE html>
<html>
<head>
    <title>Información del Destino</title>
    <link rel="stylesheet" href="destinon.css">
    <link rel="icon" href="<?php echo base_url("/images/logoo.png") ?>" type="image/x-icon">
</head>
<body>
    <header class="main-header">
        <div class="header-content">
            <div class="logo">
                <img src="<?php echo base_url("/images/logon.png")?>" alt="Aereoz Logo">
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="http://localhost:8080/index.php/profile">Inicio</a></li>
                    <li><a href="http://localhost:8080/signup">Registrarse</a></li>
                    <li><a href="http://localhost:8080/index.php/signin">Iniciar sesión</a></li>
                    <li><a href="http://localhost/pruebitaashe/public/destinos">Destinos</a></li>
                    <!-- Agrega más enlaces de navegación aquí -->
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Información del Destino</h1>
        <div class="destino-info">
            <h2>Destino: Buenos Aires</h2>
            <p>Descripción: Buenos Aires es una hermosa provincia del pais Argentina, conocida por sus playas y lugares turistico como el Obelisco.</p>
            <p>Ciudades Populares: Mar de Plata,Pinamar,Palermo</p>
            <p>Moneda: Peso Argentino (PA)</p>
            <a href="http://localhost/pruebitaashe/public/reservavuelos" class="btn">Reservar ahora</a>
        </div>
        <img src="<?php echo base_url("/images/bsas.jpg") ?>" class="destination-card">
    </div>
    
    <footer>
        <div class="footersito">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
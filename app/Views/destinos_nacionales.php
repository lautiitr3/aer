<!DOCTYPE html>
<html>
<head>
    <title>Destinos de Viaje</title>
    <link rel="stylesheet" href="estilodestino.css">
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
                    <li><a href="http://localhost/pruebitaashe/public/reservavuelos">Reserva de Vuelos</a></li>
                    <li><a href="http://localhost/pruebitaashe/public/destinos">Destinos</a></li>
                    <!-- Agrega más enlaces de navegación aquí -->
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Destinos Nacionales</h1>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/bsas.jpg") ?>" alt="Destino 1">
            <h2>Buenos Aires</h2>
            <p>¡No te lo pierdas!</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/cordoba.jpg") ?>" alt="Destino 2">
            <h2>Cordoba</h2>
            <p>Descubre las maravillas de la ciudad de Cordoba</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/misiones.jpg") ?>" alt="Destino 3">
            <h2>Misiones</h2>
            <p>Lugar que vale la pena visitar.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/mendoza.jpg") ?>"alt="Destino 4">
            <h2>Mendoza</h2>
            <p>No te pierdas conocer esta maravilla.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/jujuy.jpg") ?>"alt="Destino 5">
            <h2>Jujuy</h2>
            <p>Conoce toda la historia de la realeza.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/bariloche.jpg") ?>"alt="Destino 6">
            <h2>Rio Negro</h2>
            <p>Pasea por las calles hermosas de Amsterdam.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/larioja.png") ?>"alt="Destino 7">
            <h2>La Rioja</h2>
            <p>Disfruta de la playa soñada.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/tierradelfuego.png") ?>"alt="Destino 8">
            <h2>Tierra Del Fuego</h2>
            <p>Recorre la ciudad tecnologica de Tokyo.</p>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>

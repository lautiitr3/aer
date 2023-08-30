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
                    <li><a href="http://localhost/pruebitaashe/public/destinos">Destinos</a></li>
                    <!-- Agrega más enlaces de navegación aquí -->
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <h1>Destinos Internacionales</h1>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/destino4.png") ?>" alt="Destino 1">
            <a href="http://localhost/pruebitaashe/public/reservavuelos">Cancún, México</a>
            <p>¡No te lo pierdas!</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/madrid.jpeg") ?>" alt="Destino 2">
            <a href="http://localhost/pruebitaashe/public/reservavuelos">Madrid, España</a>
            <p>Descubre las maravillas de la gran ciudad de Madrid.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/grecia.jpg") ?>" alt="Destino 3">
            <a href="http://localhost/pruebitaashe/public/reservavuelos">Islas Griegas, Grecia</a>
            <p>Lugar que vale la pena visitar.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/islandia.jpg") ?>"alt="Destino 4">
            <a href="http://localhost/pruebitaashe/public/reservavuelos">Húsavík, Islandia</a>
            <p>No te pierdas conocer esta maravilla.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/inglaterra.jpg") ?>"alt="Destino 5">
            <a href="http://localhost/pruebitaashe/public/reservavuelos">Londres, Inglaterra</a>
            <p>Conoce toda la historia de la realeza.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/paisesbajos.jpg") ?>"alt="Destino 6">
            <a href="http://localhost/pruebitaashe/public/reservavuelos">Amsterdam, Paises Bajos</a>
            <p>Pasea por las calles hermosas de Amsterdam.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/brasi.png") ?>"alt="Destino 7">
            <a href="http://localhost/pruebitaashe/public/reservavuelos">Rio de Janeiro, Brasil</a>
            <p>Disfruta de la playa soñada.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/tokyo.png") ?>"alt="Destino 7">
            <a href="http://localhost/pruebitaashe/public/reservavuelos">Tokyo, Japón</a>
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

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
        <h1>Destinos Nacionales</h1>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/bsas.jpg") ?>" alt="Destino 1">
            <a href="http://localhost/pruebitaashe/public/buenosaires">Buenos Aires</a>
            <p>¡No te lo pierdas!</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/cordoba.jpg") ?>" alt="Destino 2">
            <a href="http://localhost/pruebitaashe/public/cordoba">Cordoba</a>
            <p>Descubre las maravillas de la ciudad de Cordoba</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/misiones.jpg") ?>" alt="Destino 3">
            <a href="http://localhost/pruebitaashe/public/misiones">Misiones</a>
            <p>Veni a conocer una de las maravillas del mundo.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/mendoza.jpg") ?>"alt="Destino 4">
            <a href="http://localhost/pruebitaashe/public/mendoza">Mendoza</a>
            <p>No te pierdas conocer esta maravilla.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/jujuy.jpg") ?>"alt="Destino 5">
            <a href="http://localhost/pruebitaashe/public/jujuy">Jujuy</a>
            <p>Conoce el cerro de los siete colores.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/bariloche.jpg") ?>"alt="Destino 6">
            <a href="http://localhost/pruebitaashe/public/rionegro">Rio Negro</a>
            <p>Veni a disfrutar de la nieve.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/larioja.png") ?>"alt="Destino 7">
            <a href="http://localhost/pruebitaashe/public/larioja">La Rioja</a>
            <p>Conoce la puerta del norte argentino.</p>
        </div>
        <div class="destination-card">
            <img src="<?php echo base_url("/images/tierradelfuego.png") ?>"alt="Destino 8">
            <a href="http://localhost/pruebitaashe/public/tierradelfuego">Tierra Del Fuego</a>
            <p>El fin del mundo.</p>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>

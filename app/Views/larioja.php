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
            <h2>Destino: La Rioja</h2>
            <p>Descripción:La Rioja es una provincia del noroeste de Argentina que se extiende desde las cimas nevadas de los Andes, como el Monte Pissis de 6,793 m de altura, hasta los valles llenos de viñas.  </p>
            <p>Lugares Populares: Santuario Nuestra Madre de La Merced,Museo Folklórico,Casa Museo Rosario Vera Peñaloza.</p>
            <p>Moneda: Peso Argentino (PA)</p>
            <a href="http://localhost/pruebitaashe/public/reservavuelos" class="btn">Reservar ahora</a>
        </div>
        <p>Otro contenido de la página...</p>
    </div>
    <footer>
        <div class="fotersito">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
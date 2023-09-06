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
            <h2>Destino: Jujuy</h2>
            <p>Descripción:San Salvador de Jujuy es una ciudad del noroeste de Argentina, cabecera del departamento Doctor Manuel Belgrano y capital y ciudad más poblada de la provincia de Jujuy </p>
            <p>Lugares Populares: Pucará de Tilcara,Catedral Basílica del Santísimo Salvador,Parque Botánico Municipal "Barón Carlos María Schüel".</p>
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
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
            <h2>Destino: Rio Negro</h2>
            <p>Descripción: Río Negro es una provincia en el norte de la Patagonia argentina. Sus paisajes naturales incluyen desde la nevada Cordillera de los Andes en el oeste hasta el océano Atlántico en el este, y se destacan los lagos glaciales y mesetas con bosques. La ciudad de Bariloche, que se encuentra a los pies de los Andes en el Parque Nacional Nahuel Huapi, es conocida por sus playas de piedras, el chocolate casero y el área de esquí en el cerro Catedral.</p>
            <p>Lugares Populares: Teleferico Cerro Otto, Centro Civico Bariloche,Catedral Alta Patagonia, Piedras Blancas,Parque Nahuelito,San Carlos de Bariloche,El Bolsón,Cajón Del Azul. </p>
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
<!DOCTYPE html>
<html>
<head>
    <title>Reservaciones de Vuelos</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
                </ul>
            </nav>
        </div>
</header>
    <!-- Formulario de reserva -->
    
    <div class="container">
        <h1>Reserva de Vuelos</h1>
        <form action="<?= base_url('reservavuelos/procesarreserva') ?>" method="post">
            <div class="form-group">
                <label for="nombre">Nombre completo:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" name="telefono" class="form-control">
            </div>
            <div class="form-group">
                <label for="origen">Origen:</label>
                <input type="text" name="origen" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="destino">Destino:</label>
                <input type="text" name="destino" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha de viaje:</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>
            <button type="submit" class="submit-button">Reservar</button>
        </form>   
        </div>  
    <section class="image-gallery">
    <div class="image">
    <a href="http://localhost/pruebitaashe/public/destinos"><img src="<?php echo base_url("/images/aurora-boreal.png")?>" ></a>
    </div>
    <div class="image">
    <a href="http://localhost/pruebitaashe/public/destinos"><img src="<?php echo base_url("/images/brasi.png" )?>"></a>
    </div>
    <div class="image">
    <a href="http://localhost/pruebitaashe/public/destinos"><img src="<?php echo base_url("/images/grecia.jpg")?>"></a>
    </div>
    <div class="imagen">
    <a href="http://localhost/pruebitaashe/public/destinos"><img src="<?php echo base_url("/images/bariloche.jpg")?>" ></a>
    </div>
    <div class="imagen">
    <a href="http://localhost/pruebitaashe/public/destinos"><img src="<?php echo base_url("/images/corrientes.png" )?>"></a>
    </div>
    <div class="imagen">
    <a href="http://localhost/pruebitaashe/public/destinos"><img src="<?php echo base_url("/images/jujuy.jpg")?>"></a>
    </div>
</section>
    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
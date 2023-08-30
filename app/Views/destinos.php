<!DOCTYPE html>
<html>
<head>
    <title>Seleccionar Destinos</title>
    <link rel="stylesheet" href="destino.css">
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
        <h1>Seleccione el tipo de Destinos</h1>
        <a href='http://localhost/pruebitaashe/public/destinosviaje' class="option-link">Destinos Internacionales</a>
        <a href='http://localhost/pruebitaashe/public/destinosnacionales' class="option-link">Destinos Nacionales</a>
    </div>
    <footer>
        <div class="footer-content">
            <p>&copy; 2023 Aereoz. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
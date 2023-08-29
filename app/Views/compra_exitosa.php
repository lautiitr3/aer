<!DOCTYPE html>
<html>
<head>
    <title>Compra Exitosa</title>
</head>
<body>
    <h1>¡Compra Exitosa!</h1>
    <p>Tu boleto ha sido comprado exitosamente.</p>

    <h2>Detalles de la Reserva:</h2>
    <p>Destino: <?= esc($nombreDestino) ?></p>
    <p>Asiento: <?= esc($asientoSeleccionado) ?></p>
    <p>Total pagado: <?= esc($totalPagar) ?></p>

    <h2>Boleto Electrónico:</h2>
    <p>Presenta esta información al abordar el vuelo:</p>
    <p>Código de Reserva: <?= esc($codigoReserva) ?></p>
    <p>Asiento: <?= esc($asientoSeleccionado) ?></p>
    <p>Destino: <?= esc($nombreDestino) ?></p>

    <a href="<?= site_url('/') ?>">Volver a la página de inicio</a>
</body>
</html>

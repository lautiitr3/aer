<!DOCTYPE html>
<html>
<head>
    <title>Confirmación de Compra</title>
    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_CLIENT_ID&currency=USD"></script>
</head>
<body>
    <h1>Confirmación de Compra</h1>
    
    <p>Destino: <?= esc($nombreDestino) ?></p>
    <p>Asiento seleccionado: <?= esc($asientoSeleccionado) ?></p>
    <p>Total a pagar: <?= esc($totalPagar) ?></p>

    <div id="paypal-button-container"></div>

    <a href="<?= site_url('http://localhost:8080/index.php/profile') ?>">Volver a la página de inicio</a>

    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '<?= esc($totalPagar) ?>'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // Puedes manejar acciones después de que el usuario aprueba el pago aquí.
                // Por ejemplo, redireccionar a una página de éxito.
                window.location.href = '<?= site_url('destino/compraExitosa') ?>';
            }
        }).render('#paypal-button-container');
    </script>
</body>
</html>

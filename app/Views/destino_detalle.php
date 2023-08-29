<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Destino - <?= esc($nombreDestino) ?></title>
    <style>
        /* Estilos para los asientos */
        .asiento {
            display: inline-block;
            width: 30px;
            height: 30px;
            margin: 5px;
            text-align: center;
            line-height: 30px;
            background-color: #E0E0E0;
            border: 1px solid #CCCCCC;
            cursor: pointer;
        }

        .asiento.seleccionado {
            background-color: #4CAF50;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <h1>Detalles del Destino: <?= esc($nombreDestino) ?></h1>

    <h2>Selecciona tu asiento:</h2>
    <div>
        <?php for ($fila = 1; $fila <= 5; $fila++): ?>
            <?php for ($numero = 1; $numero <= 6; $numero++): ?>
                <div class="asiento" data-fila="<?= $fila ?>" data-numero="<?= $numero ?>"></div>
            <?php endfor; ?>
            <br>
        <?php endfor; ?>
    </div>

    <h2>Detalles de la Reserva:</h2>
    <div>
        <p>Destino: <?= esc($nombreDestino) ?></p>
        <p>Asiento seleccionado: <span id="asientoSeleccionado"></span></p>
        <p>Total a pagar: <span id="totalPagar">$0</span></p>
    </div>

    <button id="btnComprar" disabled>Comprar Boleto</button>

    <a href="<?= site_url('/') ?>">Volver a la página de inicio</a>

    <script>
        const asientos = document.querySelectorAll('.asiento');
        const asientoSeleccionado = document.getElementById('asientoSeleccionado');
        const totalPagar = document.getElementById('totalPagar');
        const btnComprar = document.getElementById('btnComprar');

        let selectedSeat = null;
        let totalAmount = 0;

        asientos.forEach(asiento => {
            asiento.addEventListener('click', () => {
                if (selectedSeat) {
                    selectedSeat.classList.remove('seleccionado');
                }

                selectedSeat = asiento;
                selectedSeat.classList.add('seleccionado');

                asientoSeleccionado.textContent = `Fila ${asiento.dataset.fila}, Asiento ${asiento.dataset.numero}`;
                totalAmount = calculateTotalAmount();
                totalPagar.textContent = `$${totalAmount}`;
                btnComprar.disabled = false;
            });
        });

        function calculateTotalAmount() {
            // Puedes implementar tu lógica para calcular el precio del asiento aquí.
            // Por ejemplo, podrías asignar diferentes precios a los asientos y sumarlos.
            // En este ejemplo, se asigna un precio fijo de $50 por asiento.
            return 50;
        }

        btnComprar.addEventListener('click', () => {
            // Aquí puedes redirigir al usuario a la página de pago o realizar otras acciones necesarias.
            alert('¡Gracias por tu compra!');
        });
        btnComprar.addEventListener('click', () => {
    // Redireccionar a la página de confirmación de compra
    window.location.href = `<?= site_url('destino/confirmacionCompra/') ?>${selectedSeat.dataset.fila}/${selectedSeat.dataset.numero}/${totalAmount}`;
});

    </script>
    
</body>
</html>

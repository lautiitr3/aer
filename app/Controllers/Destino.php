<?php

namespace App\Controllers;

class Destino extends BaseController
{
    public function detalle($nombreDestino)
    {
        // Aquí debes cargar los detalles del destino desde tu base de datos o algún otro lugar.
        // Luego, cargar la vista para mostrar los detalles.
        $data['nombreDestino'] = $nombreDestino;
        return view('destino_detalle', $data);
    }
    public function confirmacionCompra($nombreDestino, $asientoSeleccionado, $totalPagar)
{
    $data = [
        'nombreDestino' => $nombreDestino,
        'asientoSeleccionado' => $asientoSeleccionado,
        'totalPagar' => $totalPagar
    ];

    return view('confirmacion_compra', $data);
}
public function compraExitosa($nombreDestino, $asientoSeleccionado, $totalPagar)
{
    // Genera un código de reserva simulado para mostrar en el boleto.
    $codigoReserva = strtoupper(substr(md5(uniqid(rand(), true)), 0, 8));

    $data = [
        'nombreDestino' => $nombreDestino,
        'asientoSeleccionado' => $asientoSeleccionado,
        'totalPagar' => $totalPagar,
        'codigoReserva' => $codigoReserva
    ];

    return view('compra_exitosa', $data);
}
public function procesoPago()
{
    // Obtén los detalles del formulario de confirmación de compra
    $nombreDestino = $this->request->getPost('destino');
    $asientoSeleccionado = $this->request->getPost('asiento');
    $totalPagar = $this->request->getPost('total');

    // Aquí debes integrar la lógica de pago con PayPal.
    // Consulta la documentación de PayPal para obtener información detallada.

    // Después de completar el pago, redirige a la página de confirmación de compra.
    return redirect()->to('destino/compraExitosa/' . urlencode($nombreDestino) . '/' . urlencode($asientoSeleccionado) . '/' . urlencode($totalPagar));
}

}

<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class ReservaVuelos extends BaseController
{
    public function index()
    {
        // Muestra el formulario de reserva
        return view('reserva_form');
    }

    public function procesarReserva()
    {
        // Lógica para procesar la reserva
        // Aquí deberías validar el formulario, verificar disponibilidad, guardar en la base de datos, etc.

        // Después de procesar la reserva, muestra una confirmación
        return view('reserva_confirmacion');
    }
    
}
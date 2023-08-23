<?php

namespace App\Controllers;

class DestinosViaje extends BaseController
{
    public function index()
    {
        return view('destinos_viaje'); // Nombre de la vista sin extensión
    }
}
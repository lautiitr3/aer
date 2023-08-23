<?php

namespace App\Controllers;

class DestinosNacionales extends BaseController
{
    public function index()
    {
        return view('destinos_nacionales'); // Nombre de la vista sin extensión
    }
}
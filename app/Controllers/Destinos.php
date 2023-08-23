<?php

namespace App\Controllers;

class Destinos extends BaseController
{
    public function index()
    {
        return view('destinos'); // Nombre de la vista sin extensión
    }
}
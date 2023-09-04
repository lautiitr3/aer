<?php

namespace App\Controllers;

class DestinoNacio extends BaseController
{
    public function bsas()
    {
        return view('buenosaires'); // Nombre de la vista sin extensión
    }
    public function cap()
    {
        return view('cordoba'); // Nombre de la vista sin extensión
    }
    public function misi()
    {
        return view('misiones'); // Nombre de la vista sin extensión
    }
    public function men()
    {
        return view('mendoza'); // Nombre de la vista sin extensión
    }
    public function ju()
    {
        return view('jujuy'); // Nombre de la vista sin extensión
    }
    public function rio()
    {
        return view('rionegro'); // Nombre de la vista sin extensión
    }
    public function lari()
    {
        return view('larioja'); // Nombre de la vista sin extensión
    }
    public function tie()
    {
        return view('tierradelfuego'); // Nombre de la vista sin extensión
    }
    
}
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
        return view('cordoba'); 
    }
    public function misi()
    {
        return view('misiones'); 
    }
    public function men()
    {
        return view('mendoza'); 
    }
    public function ju()
    {
        return view('jujuy'); 
    }
    public function rio()
    {
        return view('rionegro'); 
    }
    public function lari()
    {
        return view('larioja'); 
    }
    public function tie()
    {
        return view('tierradelfuego'); 
    }
    
}
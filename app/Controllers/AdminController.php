<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        // Asegurarse de que solo los administradores tengan acceso
        $session = session();
        if (!$session->isLoggedIn || $session->rol !== 'admin') {
            return redirect()->to('/');
        }
    }

    public function index()
    {
        // Página de administración
        return view('admin');
    }
}

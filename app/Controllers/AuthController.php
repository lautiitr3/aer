<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\Config\Services;
use CodeIgniter\HTTP\RedirectResponse;

class AuthController extends Controller
{
    public function login()
    {
        // Muestra el formulario de inicio de sesión
        return view('signin');
    }

    public function registro()
    {
        // Muestra el formulario de registro
        return view('signup');
    }

    public function procesarRegistro()
    {
        // Procesa el formulario de registro
        $validation = Services::validation();
        
        // Define las reglas de validación aquí
        
        if ($this->request->getMethod() === 'post' && $validation->withRequest($this->request)->run()) {
            $userModel = new UserModel();
            $data = [
                'nombre' => $this->request->getPost('nombre'),
                'email' => $this->request->getPost('email'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'rol' => 'usuario', // Por defecto, todos los registros son usuarios
            ];
            $userModel->save($data);
            return redirect()->to('login')->with('success', 'Registro exitoso. Inicia sesión para continuar.');
        } else {
            return view('registro');
        }
    }

    public function procesarLogin()
    {
        // Procesa el formulario de inicio de sesión
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $userModel = new UserModel();
        $userData = $userModel->where('email', $email)->first();

        if ($userData && password_verify($password, $userData['password'])) {
            // Inicio de sesión exitoso, configurar la sesión
            $session = session();
            $session->set([
                'id' => $userData['id'],
                'nombre' => $userData['nombre'],
                'email' => $userData['email'],
                'rol' => $userData['rol'],
                'isLoggedIn' => true,
            ]);
            return redirect()->to('/');
        } else {
            // Error de inicio de sesión
            return redirect()->to('login')->with('error', 'Credenciales incorrectas. Inténtalo de nuevo.');
        }
    }

    public function logout(): RedirectResponse
    {
        // Cierra la sesión y redirige a la página de inicio
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}

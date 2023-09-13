<?php
 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SigninController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('signin');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                if ($data['id_rango'] == 2) {
                    return redirect()->to(base_url(''));
                } elseif ($data['id_rango'] == 1){
                    return redirect()-> to(base_url(''));
                }
                $session->set($ses_data);
                return redirect()->to('/profile');
            
            }else{
                $session->setFlashdata('msg', 'Email o Password es incorrecta');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email o Password es incorrecta');
            return redirect()->to('/signin');
        }
    }

        public function admin(): string
    {
        return view('admin');
    }

}
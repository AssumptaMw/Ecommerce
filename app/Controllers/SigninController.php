<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  

class SigninController extends Controller
{
    public function index()
    {
        if (session()->get('isLoggedIn'))
        {
            return redirect()
                ->to('/');
        }
        return view('login');
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
                unset($data['password']);
                $sessionData = $data;
                $sessionData['isLoggedIn'] = TRUE;


                $session->set($sessionData);
                return redirect()->to('/');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/login');
            }

        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/login');
        }
    }
    public function logout(){
        session()->destroy();
        return redirect()->to('/login');
    }
}
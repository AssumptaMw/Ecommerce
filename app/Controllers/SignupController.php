<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SignupController extends Controller
{
    public function index()
    {
        if (session()->get('isLoggedIn'))
        {
            return redirect()
                ->to('/');
        }
        return view('register');
    }
  
    public function store()
    {
        helper(['form']);
        $rules = [
            'fname'          => 'required|min_length[2]|max_length[50]',
            'lname'          => 'required|min_length[2]|max_length[50]',
            'gender'         => 'required',
            'username'       => 'required|is_unique[users.username]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
//            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();

            $data = [
                'firstname'     => $this->request->getVar('fname'),
                'lastname'     => $this->request->getVar('lname'),
                'username'     => $this->request->getVar('username'),
                'gender'     => $this->request->getVar('gender'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->save($data);

            return redirect('login');
        }else{
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
          
    }
  
}
<?php 

namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
use Illuminate\Support\Arr;

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
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[tbl_users.email]',
            'password'      => 'required|min_length[4]|max_length[50]'
           //'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new UserModel();

            $data = [
                'first_name'     => $this->request->getVar('fname'),
                'last_name'     => $this->request->getVar('lname'),
                'gender'     => $this->request->getVar('gender'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];


            if($data['role'] == 1){

            }

            $userModel->save($data);

            //return json_encode(['status' => true, 'view' => view('login')]);
            return view('login');
        }else{
            return json_encode(['status' => false, 'message' => Arr::first($this->validator->getErrors())]);
        }
          
    }
  
}
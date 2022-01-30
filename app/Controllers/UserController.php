<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;
use Illuminate\Support\Arr;

class UserController extends Controller{

    // show users list
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('user_id', 'ASC')->findAll();

        return view('pages/Admin/users/index', $data);
    }

    // add user form
    public function create(){
        return view('pages/Admin/users/add_user');
    }


    // insert data
    public function store() {
        $userModel = new UserModel();
        $data = [
            'first_name'     => $this->request->getVar('fname'),
            'last_name'     => $this->request->getVar('lname'),
            'gender'     => $this->request->getVar('gender'),
            'email'    => $this->request->getVar('email'),
            'role'     => $this->request->getVar('role'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        if($data['role']=='admin'){
            $data['role']= 1;
        }elseif($data['role']=='client'){
            $data['role']= 2;
        }else{
            echo "ANYTHING";
        }

        $userModel->insert($data);
        $data['users'] = $userModel->orderBy('user_id', 'ASC')->findAll();

        return $this->response->redirect('/users');
    }

    // show single user
    public function fetch_single_data($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('user_id', $id)->first();
        return view('Views/pages/Admin/users/edit_user', $data);
    }

    public function edit_validation(){

        helper(['form','url']);

        $error = $this->validate([
            'first_name' => 'required|minlength[3]',
            'last_name' => 'required|minlength[3]',
            'email' => 'required|valid_email',
            'gender' => 'required',
            'role' => 'required'
        ]);

        if(!$error)
        {
            echo view('Views/pages/Admin/categories/edit_cat', [
                'error' => $this->validator
            ]);
        }
        else{
            $userModel = new UserModel();
            $id = $this->request->getVar('user_id');

            $data = [
                'category_name'=> $this->request->getVar('category_name'),
            ];

            $userModel->update($id, $data);

            $session = \Config\Services::sesssion();

            $session->setFlashdata('success', 'User Updated');

            return $this->response->redirect(site_url("/"));
        }
    }

    // update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('user_id');
        $data = [
            'first_name'     => $this->request->getVar('fname'),
            'last_name'     => $this->request->getVar('lname'),
            'gender'     => $this->request->getVar('gender'),
            'role'     => $this->request->getVar('role'),
            'email'    => $this->request->getVar('email'),
            //'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        if($data['role'] == 'admin'){
            $data['role'] = 1;
        }else{
            $data['role'] = 2;
        }
        //print_r($data);
        $userModel->update($id, $data);
        return view('../Views/pages/Admin/users/index');
    }

    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('user_id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }

    public function test(){
        return view('../Views/pages/Admin/users/edit_user');
    }


}

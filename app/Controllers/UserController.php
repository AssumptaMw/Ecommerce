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
        return view('../../Views/Admin/users/user_view', $data);
    }

    // add user form
    public function create(){
        return view('../../Views/pages/add_user');
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
        print_r($data);
        $userModel->insert($data);
        $data['users'] = $userModel->orderBy('user_id', 'ASC')->findAll();
        return view('../Views/pages/display_users', $data);
        //return $this->response->redirect(site_url('/users-list'));
    }

    // show single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('user_id', $id)->first();
        return view('upsert', $data);
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
        print_r($data);
        //$userModel->update($id, $data);
        //return $this->response->redirect(site_url('/users-list'));
    }

    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('user_id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }
}

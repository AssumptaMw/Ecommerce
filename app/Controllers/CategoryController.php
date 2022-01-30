<?php

namespace App\Controllers;
use App\Models\Category;
use CodeIgniter\Controller;
use Illuminate\Support\Arr;

class CategoryController extends Controller{

    // show category list
    public function index(){
        $userModel = new Category();
        $data['category'] = $userModel->orderBy('category_id', 'ASC')->findAll();

        return view('pages/Admin/categories/index', $data);
    }

    public function create(){
        return view('pages/Admin/categories/add_cat');
    }

    // insert data
    public function store()
    {
        $userModel = new Category();
        $data = [
            'category_name' => $this->request->getVar('catname')
        ];


        $userModel->insert($data);
        $data['category'] = $userModel->orderBy('category_id', 'ASC')->findAll();

        return $this->response->redirect('/category');
    }

    public function fetch_single_data($id = null)
    {
        $categoryModel = new Category();
        $data['category_obj'] = $categoryModel->where('category_id', $id)->first();
        return view('Views/pages/Admin/categories/edit_cat', $data);
    }

    public function edit_validation(){

        helper(['form','url']);

        $error = $this->validate([
            'category_name' => 'required|minlength[3]',
            'description' => 'required|minlength[3]'
        ]);

        if(!$error)
        {
            echo view('Views/pages/Admin/categories/edit_cat', [
                'error' => $this->validator
            ]);
        }
        else{
            $categoryModel = new Category();
            $id = $this->request->getVar('category_id');

            $data = [
                'category_name'=> $this->request->getVar('category_name'),
            ];

            $categoryModel->update($id, $data);

            $session = \Config\Services::sesssion();

            $session->setFlashdata('success', 'Category Updated');

            return $this->response->redirect(site_url("/"));
        }
    }

    // update category
    public function update(){
        $userModel = new Category();
        $id = $this->request->getVar('category_id');
        $data = [
            'category_name' => $this->request->getVar('category_name')
        ];

        //print_r($data);
        $userModel->update($id, $data);
        $userModel = new Category();
        $data['category'] = $userModel->orderBy('category_id', 'ASC')->findAll();
        return view("../Views/pages/Admin/categories/index", $data);

        //return $this->response->redirect(site_url('/users-list'));
    }

    // delete category
    public function delete($id = null){
        $userModel = new Category();
        $data['category'] = $userModel->where('category_id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }

}

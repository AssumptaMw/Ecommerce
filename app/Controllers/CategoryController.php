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

    // update category
    public function update(){
        $userModel = new Category();
        $id = $this->request->getVar('category_id');
        $data = [
            'category_name' => $this->request->getVar('catname')

        ];
        print_r($data);
        //$userModel->update($id, $data);
        //return $this->response->redirect(site_url('/users-list'));
    }

    // delete category
    public function delete($id = null){
        $userModel = new Category();
        $data['category'] = $userModel->where('category_id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }

}

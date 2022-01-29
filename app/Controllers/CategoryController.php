<?php

namespace App\Controllers;
use App\Models\Category;
use CodeIgniter\Controller;
use Illuminate\Support\Arr;

class CategoryController extends Controller{

    // show users list
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

}

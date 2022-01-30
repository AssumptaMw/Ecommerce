<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ProductModel;
use Illuminate\Support\Arr;

class ProductController extends Controller{

    // show product list
    public function index(){
        $userModel = new ProductModel();
        $data['products'] = $userModel->orderBy('product_id', 'ASC')->findAll();

        return view('pages/Admin/products/index', $data);
    }

    // add user form
    public function create(){
        return view('pages/Admin/products/add_prod');
    }

    // insert data
    public function store()
    {
        $userModel = new ProductModel();
        $data = [
            'product_name' => $this->request->getVar('product_name'),
            'subcategory_id' => $this->request->getVar('subcategory_id'),
            'price' => $this->request->getVar('price'),
            'stock' => $this->request->getVar('stock'),
            'image' => $this->request->getVar('image'),
            'description' => $this->request->getVar('description')
        ];

        $userModel->insert($data);
        $data['products'] = $userModel->orderBy('product_id', 'ASC')->findAll();

        return $this->response->redirect('/products');
    }

    //update product
    public function update(){
        $userModel = new ProductModel();
        $id = $this->request->getVar('product_id');
        $data = [
            'product_name' => $this->request->getVar('product_name'),
            'subcategory_id' => $this->request->getVar('subcategory_id'),
            'price' => $this->request->getVar('price'),
            'stock' => $this->request->getVar('stock'),
            'image' => $this->request->getVar('image'),
            'description' => $this->request->getVar('description')
        ];

        $userModel->update($id, $data);
        return view('../Views/pages/Admin/products/index');
    }

}
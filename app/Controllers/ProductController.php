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
            'unit_price' => $this->request->getVar('product_price'),
            'available_quantity' => $this->request->getVar('product_stock'),
            'product_image' => $this->request->getVar('product_image'),
            'description' => $this->request->getVar('product_desc')
        ];

        if($data['subcategory_id'] == 'Men-Formal'){
            $data['subcategory_id'] .= 1;
        }elseif($data['subcategory_id'] == 'Men-Casual'){
            $data['subcategory_id'] .= 2;
        }elseif($data['subcategory_id'] == 'Men-Sportswear'){
            $data['subcategory_id'] .= 3;
        }elseif($data['subcategory_id'] == 'Women-Formal'){
            $data['subcategory_id'] .= 4;
        }elseif($data['subcategory_id'] == 'Women-Casual'){
            $data['subcategory_id'] .= 5;
        }elseif($data['subcategory_id'] == 'Women-Sportswear'){
            $data['subcategory_id'] .= 6;
        }elseif($data['subcategory_id'] == 'Children-Formal'){
            $data['subcategory_id'] .= 7;
        }elseif($data['subcategory_id'] == 'Children-Casual'){
            $data['subcategory_id'] .= 8;
        }elseif($data['subcategory_id'] == 'Children-Sportswear'){
            $data['subcategory_id'] .= 9;
        }elseif($data['subcategory_id'] == 'Pets-Cats'){
            $data['subcategory_id'] .= 10;
        }elseif($data['subcategory_id'] == 'Pets-Dogs'){
            $data['subcategory_id'] .= 11;
        }else{
            $data['subcategory_id'] .= 12;
        }

        //print_r($data);
        $userModel->insert($data);
        $data['products'] = $userModel->orderBy('product_id', 'ASC')->findAll();

        return $this->response->redirect('/products');
    }

    public function fetch_single_data($id = null)
    {
        $productModel = new ProductModel();
        $data['product_obj'] = $productModel->where('product_id', $id)->first();
        return view('Views/pages/Admin/product/edit_prod', $data);
    }

    public function edit_validation(){

        helper(['form','url']);

        $error = $this->validate([
            'product_name' => 'required|minlength[3]',
            'subcategory_id' => 'required|minlength[3]',
            'unit_price' => 'required',
            'available_quantity' => 'required',
            'product_image' => 'required',
            'description' => 'required'

        ]);

        if(!$error)
        {
            echo view('Views/pages/Admin/products/edit_prod', [
                'error' => $this->validator
            ]);
        }
        else{
            $productModel = new ProductModel();
            $id = $this->request->getVar('product_id');

            $data = [
                'product_name'=> $this->request->getVar('product_name'),
                'subcategory_id' => $this->request->getVar('subcategory_id'),
                'unit_price' => $this->request->getVar('product_price'),
                'available_quantity' => $this->request->getVar('product_stock'),
                'product_image' => $this->request->getVar('product_image'),
                'description' => $this->request->getVar('product_desc')
            ];

            $productModel->update($id, $data);

            $session = \Config\Services::sesssion();

            $session->setFlashdata('success', 'Product Updated');

            return $this->response->redirect(site_url("/"));
        }
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
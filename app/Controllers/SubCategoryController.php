<?php

namespace App\Controllers;
use App\Models\SubCategory;
use CodeIgniter\Controller;
use Illuminate\Support\Arr;

class SubCategoryController extends Controller{

    // show category list
    public function index(){
        $userModel = new SubCategory();
        $data['subcategory'] = $userModel->orderBy('subcategory_id', 'ASC')->findAll();

        return view('pages/Admin/subcategories/index', $data);
    }

    public function create(){
        return view('pages/Admin/subcategories/add_subcat');
    }

    // insert data
    public function store()
    {
        $userModel = new SubCategory();
        $data = [
            'subcategory_name' => $this->request->getVar('subcatname'),
            'category' => $this->request->getVar('category')
        ];

        if($data['category']=='Men'){
            $data['category']= 1;
        }elseif($data['category']=='Women') {
            $data['category'] = 2;
        }elseif($data['category']=='Children') {
            $data['category'] = 3;
        }else {
            $data['category'] = 4;
        }
        //print_r($data);

        $userModel->insert($data);
        $data['subcategory'] = $userModel->orderBy('subcategory_id', 'ASC')->findAll();

        return $this->response->redirect('/subcategory');
    }

    public function fetch_single_data($id = null)
    {
        $subcategoryModel = new SubCategory();
        $data['subcategory_obj'] = $subcategoryModel->where('subcategory_id', $id)->first();
        return view('Views/pages/Admin/subcategories/edit_subcat', $data);
    }

    public function edit_validation(){

        helper(['form','url']);

        $error = $this->validate([
            'subcategory_name' => 'required|minlength[3]',
            'category' => 'required',
            'description' => 'required|minlength[3]'
        ]);

        if(!$error)
        {
            echo view('Views/pages/Admin/subcategories/edit_subcat', [
                'error' => $this->validator
            ]);
        }
        else{
            $subcategoryModel = new SubCategory();
            $id = $this->request->getVar('subcategory_id');

            $data = [
                'subcategory_name'=> $this->request->getVar('subcategory_name'),
            ];

            $subcategoryModel->update($id, $data);

            $session = \Config\Services::sesssion();

            $session->setFlashdata('success', 'SubCategory Updated');

            return $this->response->redirect(site_url("/"));
        }
    }

    // update subcategory data
    public function update(){
        $userModel = new SubCategory();
        $id = $this->request->getVar('subcategory_id');
        $data = [
            'subcategory_name' => $this->request->getVar('subcatname')

        ];
        print_r($data);
        //$userModel->update($id, $data);
        //return $this->response->redirect(site_url('/users-list'));
    }

    // delete subcategory
    public function delete($id = null){
        $userModel = new SubCategory();
        $data['subcategory'] = $userModel->where('subcategory_id', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }
}

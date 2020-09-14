<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\CategoryModel;
Class Category extends BaseController{
    public function index()
    {

        $category = new CategoryModel();
        $data = ['data'=>$category->findAll()];
        echo view('partials/header');
        echo view('partials/footer');
        echo view('partials/navbar');
        echo view('category/main',$data);
    }

    public function create()
    {
        $category = new CategoryModel();
        if($this->request->getMethod() == 'post' )
        {
            if(!$this->validate(['category' => 'required|is_unique[appcategories.category]',
                                  'category_type' => 'required'                                                    
            ]))
            {
               $data = ['validatior'   => $this->validator->listErrors('my_list'),
                        'category'     => $this->request->getPost('category'),
                        'category_type'=> $this->request->getPost('category_type'),
                        ];
               //return redirect()->to('create');
                echo view('partials/header');
                echo view('partials/navbar');
                echo view('category/create',$data);
                echo view('partials/footer');
            }
            else
            {
                $data = [
                        'category'     => $this->request->getPost('category'),
                        'category_type'=> $this->request->getPost('category_type'),
                        ];
                $category->insert($data);
                $this->session->setFlashdata('message', 'Category save successfully');
                return redirect()->to('create');
            }
        }
        else
        {
            echo view('partials/header');
            echo view('partials/navbar');
            echo view('category/create');
            echo view('partials/footer');
        }
    }

    public function update()
    {
        $category = new CategoryModel();
        if($this->request->getMethod() == 'post' )
        {
            if(!$this->validate(['category' => 'required|is_unique[appcategories.category]',
                                  'category_type' => 'required'                                                    
            ]))
            {
               $data = ['validatior'   => $this->validator->listErrors('my_list'),
                        'category'     => $this->request->getPost('category'),
                        'category_type'=> $this->request->getPost('category_type'),
                        ];
               //return redirect()->to('create');
                
            }
            else
            {
                $data = [
                    'category' => $this->request->getPost('category'),
                    'category_type'  => $this->request->getPost('category_type'),
                ];
                $category_id = $this->request->getPost('category_id');
                $ca = $category->where('id', $category_id);
                $ca->set($data);
                $ca->update();
                $this->session->setFlashdata('message', 'Category updated successfully');
                return redirect()->to('category');
            }
        }
    }
    public function destroy()
    {
        $category = new CategoryModel();
        $category_id = $this->request->getPost('category_id');
        $category->where('id',$category_id)->delete();
        $this->session->setFlashdata('message', 'Category delete successfully');
        return redirect()->to('category');
    }
}
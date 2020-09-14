<?php
namespace App\Controllers;

use App\Models\CategoryModel;

Class Apps extends BaseController{

    public function index()
    {

        echo view('apps/main');
    }

    public function create()
    {
       if($this->request->getMethod() == 'post')
       {
            if(!$this->validate(['app_name'=>'required|min_length[10]',
                                'app_path' => 'uploaded[app_path]',
                                'app_icon'=> 'uploaded[app_icon]|mime_in[app_icon,image/jpg,image/jpeg,image/gif,image/png]|is_image[app_icon]|max_size[app_icon,1024*1024*1024*2 ]',                   
                                'app_description' => 'required|min_length[10]',
                                'app_detail' => 'required',
                                'app_thumbnails' => 'uploaded[app_thumbnails]|mime_in[app_icon,image/jpg,image/jpeg,image/gif,image/png]|is_image[app_thumbnails]|max_size[app_icon,1024*1024*1024*2 ]',
                            ],['app_name' => [
                                    'required' => 'App name must be required',
                                    'min_length' => 'App name must be greater than {10} charcter',
                                ]] ))
            {
               $data = ['valiator' => $this->validator->listErrors()];
                return redirect('upload',$data);
            }
            else
            {
                $app_path = $this->request->getFile('app_path');
                $app_path->move(WRITEPATH . 'uploads/apk');
                $icon = $this->request->getFile('app_icon');
                $icon->move(WRITEPATH . 'uploads/icon');
         
                  $data = [
         
                    'name' =>  $icon->getClientName(),
                    'type'  => $icon->getClientMimeType()
                  ];
         
                  //$save = $builder->insert($data);
                  $msg = 'File has been uploaded';
        
            }
       }
       else
       {
        $category = new CategoryModel();
        $data = ['data'=> $category->findAll()];
        echo view('apps/upload',$data);
       }
    }


}
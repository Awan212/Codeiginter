<?php 
namespace App\Controllers;

use App\Models\BlogModel;

class Home extends BaseController
{

	public function index()
	{
		$blog = new BlogModel();
		$data =['data' => $blog->findAll()];
		echo view('partials/header');
		echo view('partials/navbar');
		echo view('home',$data);
	}

	//--------------------------------------------------------------------
	public function create()
	{
		//$data['data'] = $blog;
		// $data = [
		//	'title' => 'This is my blog',
		//	'body'  => 'Body of my blog',
		//	'author'=> 'admin',
		//];
		// $insert = $blog->insert($data);
		// $data = $blog->find(1);
		// $data['title'] = 'this is my first blog';
		// $blog->save($data);
		//var_dump($data);

		if($this->request->getMethod() == 'post'){
			if(!$this->validate([
				'title'  => 'required',
				'body'   => 'required',
				'author' => 'required',
			])){
				$data = [
					'validator' => $this->validator->listErrors('my_list'),
					'title' => $this->request->getPost('title'),
					'body' => $this->request->getPost('body'),
					'author' => $this->request->getPost('author'),
				];
			echo view('partials/header');
			echo view('partials/navbar');
			echo view('create',$data);
			echo view('partials/footer');
			exit;
			}
			else
			{
				$data = [
					'title' => $this->request->getPost('title'),
					'body' => $this->request->getPost('body'),
					'author' => $this->request->getPost('author'),
				];
				$blog = new BlogModel();
				$blog->insert($data);
				$this->request->getPost('');
				$data = [
					'message' => 'Blog save successfully',
					'title' => '',
					'body' => '',
					'author' => '',
				];
				echo view('partials/header');
				echo view('partials/navbar');
				echo view('create',$data);
				echo view('partials/footer');
				exit;
			}
		}
		else
		{
			$data = [
				'title' => '',
				'body' => '',
				'author' => '',
			];
			echo view('partials/header');
			echo view('partials/navbar');
			echo view('create',$data);
			echo view('partials/footer');
		}
	}


	public function save()
	{

		
	}
}

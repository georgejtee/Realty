<?php namespace App\Controllers;


use App\Models\PropertyModel;

class Home extends BaseController
{
	public function index()
	{
		helper(['form']);
		$model = new PropertyModel();
		$data['property'] = $model->getProperty();
		echo view('template/header', $data);
		echo view('login');
		echo view('template/footer');
	}

	public function data(){

		echo view('templates/header');
		echo view('form');
		echo view('templates/footer');
	}

	public function About(){
		echo view('templates/header');
		echo view('about');
		echo view('templates/footer');
	}

	public function sendEmail(){


		$email = \Config\Services::email();

		$email->setTo('georgejanasi@gmail.com');

		$email->setSubject('Email Test');
		$email->setMessage('Testing the email class.');

		if ($email->send()) 
		{
			echo 'Email successfully sent';
		} 
		else 
		{
			$data = $email->printDebugger(['headers']);
			print_r($data);
			print_r($email);
		}
	}

	function getFileName(){
		$file = new \CodeIgniter\Files\File($path);
	}

	function form(){

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$newData = [
					'firstname' => $this->request->getVar('firstname'),
					'lastname' => $this->request->getVar('lastname'),
					'email' => $this->request->getVar('email'),
					'password' => $this->request->getVar('password'),
				];
				$model = new PropertyModel();
				$model->saveProperty($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/');

			}

		}
		return view('form');
	}

	function  addData(){
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$fileNames = [];
			$files = $this->request->getFileMultiple('photo');
			foreach ($files as $file) {
				$fileName = $file->getRandomName();
				array_push($fileNames,$fileName);
				$file->move('./public/upload/'.$session['User'], $fileName);
			}
			$newData = [

				'developmentTime'    => $this->request->getVar('firstname'),
				'description' => $this->request->getVar('lastname'),
				'location' => $this->request->getVar('email'),
				'shortDescription' => $this->request->getVar('password'),
				'imagepath1' => $fileNames[0],
				'imagepath2' => $fileNames[1],
				'imagepath3' => $fileNames[2],
				'investmentRequired' => $this->request->getVar('investmentRequired'),
				'dateUploaded' => new DateTime(),


			];
			$model = new PropertyModel();
			$model->saveProperty($newData);
			$session = session();
			$session->setFlashdata('success', 'Successful Registration');
			return redirect()->to('/addData');

		}
		echo view('template/header', $data);
		echo view('data');
		echo view('template/footer');
	}

}

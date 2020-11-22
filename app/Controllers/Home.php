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

	public function sendEmail($email, $subject, $message){


		$email = \Config\Services::email();

		$email->setTo($email);

		$email->setSubject($subject);
		$email->setMessage($message);

		if ($email->send()) 
		{
			echo 'Email successfully sent';
		} 
		else 
		{
			$data = $email->printDebugger(['headers']);
		}
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

	

}

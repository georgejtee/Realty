<?php namespace App\Controllers;


use App\Models\UserModel;
use App\Models\DepoitsModel;

class User extends BaseController
{
	public function index()
	{
		echo view('template/header');
		echo view('data');
		echo view('template/footer');
	}

	public function addFunds(){
		$data = [];
		helper(['form']);
		$id = session()->get('id');
		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'amount' => 'required',
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();
				$deposit = new DepoitsModel();
				$session = session();

				$model = new UserModel();
				$user = $model->find($id);
				
				$user['amount' ] =  floatval($user['amount']) + floatval($this->request->getVar('amount')) ;
				$model->update($id, $user);
				$data = [
					'userId' =>session()->get('id'),
					'amount' => $this->request->getVar('amount')
				];
				$deposit->save($data);
				$session->setFlashdata('success', 'Successfully Added Funds');

			}
		}

		echo view('template/header');
		echo view('user/addFunds');
		echo view('template/footer');
	}

	public function depositHistory(){
		$model = new DepoitsModel();
		$data['deposits'] = $model->where('userId', session()->get('id'))->findAll();

		echo view('template/header', $data);
		echo view('user/deposit_history');
		echo view('template/footer');
	}

	public function sendEmail()
	{


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
		}
	}

	function getFileName(){
		$file = new \CodeIgniter\Files\File($path);
	}

	function form(){
		return view('form');
	}

	private function setUserSession($user){
		$data = [
			'id' => $user['id'],
			'firstname' => $user['firstname'],
			'lastname' => $user['lastname'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	public function register(){
		$data = [];
		helper(['form']);

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

				$model = new UserModel();
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('/');

			}
		}


		echo view('template/header', $data);
		echo view('user/register');
		echo view('template/footer');
	}

	public function login()
	{
		$data = [];
		helper(['form']);
		helper(['url']);


		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Email or Password don\'t match'
				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$user = $model->where('email', $this->request->getVar('email'))
				->first();

				$this->setUserSession($user);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to(base_url('Property/index'));

			}
		}

		echo view('template/header', $data);
		echo view('user/login');
		echo view('template/footer');
	}

	public function profile(){
		
		$data = [];
		helper(['form']);
		$model = new UserModel();

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$rules = [
				'firstname' => 'required|min_length[3]|max_length[20]',
				'lastname' => 'required|min_length[3]|max_length[20]',
			];

			if($this->request->getPost('password') != ''){
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}


			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{

				$newData = [
					'id' => session()->get('id'),
					'firstname' => $this->request->getPost('firstname'),
					'lastname' => $this->request->getPost('lastname'),
				];
				if($this->request->getPost('password') != ''){
					$newData['password'] = $this->request->getPost('password');
				}
				$model->save($newData);

				session()->setFlashdata('success', 'Successfuly Updated');
				return redirect()->to('User/profile');

			}
		}

		$data['user'] = $model->where('id', 2)->first();
		echo view('template/header', $data);
		echo view('user/profile');
		echo view('template/footer');
	}

	public function logout(){
		session()->destroy();
		return redirect()->to(base_url('User/login'));
	}
}

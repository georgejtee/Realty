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
		return view('form');
	}

	function  addData(){
		 $data = [
    'propertId' => '32',
    'investmentRequired'    => '50000',

];
		$model = new PropertyModel();
		$model->saveProperty($data);
	}

}

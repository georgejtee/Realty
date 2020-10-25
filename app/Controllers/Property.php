<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PropertyModel;
class Property extends BaseController
{
	public function index()
	{
		
		echo view('template/header', $data);
		echo view('property/property_list');
		echo view('template/footer');
	}

	
	public function properties(){
		$model = new PropertyModel();
		$data['property'] = $model->getProperty();
		echo view('template/header', $data);
		echo view('property/property_list');
		echo view('template/footer');
	}

	public function addProperty()
	{
		echo view('template/header');
		echo view('property/add_property');
		echo view('template/footer');	
	}

	function saveProperty(){

		$data = [];
		helper(['form']);
		
		$model = new PropertyModel();
		$model->saveProperty($data);
	}

}

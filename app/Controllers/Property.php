<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PropertyModel;
use App\Models\UserProperiesModel;

class Property extends BaseController
{
	public function index()
	{

		$model = new PropertyModel();
		$data['property'] = $model->getProperty();
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

	public function property($propertyId){

		$model = new PropertyModel();
		$data['property'] = $model->find($propertyId);

		echo view('template/header', $data);
		echo view('property/property');
		echo view('template/footer');
	}

	public function addProperty()
	{

		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			//let's do the validation here
			$x =0;
			$fileNames=["", "", ""];
			$path = ('./uploads/'.session()->get('id'));
			if($imagefile = $this->request->getFiles())
			{
				foreach($imagefile['photo'] as $img)
				{
					if ($img->isValid() && ! $img->hasMoved())
					{
						$fileNames[$x] = $newName = $img->getRandomName();
						$img->move($path , $newName);
						$x++;
					}
				}
			}
			
			$newData = [

				'developmentTime'    => $this->request->getVar('developmentTime'),
				'description' => $this->request->getVar('description'),
				'location' => $this->request->getVar('location'),
				'investmentReturnPercentage' => $this->request->getVar('investmentReturnPercentage'),
				'shortDescription' => $this->request->getVar('shortDescription'),
				'createdBy' => session()->get('id'),
				'imagepath1' => $fileNames[0],
				'imagepath2' =>$fileNames[1],
				'imagepath3' => $fileNames[2],
				'investmentRequired' => $this->request->getVar('investmentRequired'),


			];
			
			$model = new PropertyModel();
			$model->insert($newData);
			$session = session();
			$session->setFlashdata('success', 'Property Added Successfully');
			
			return redirect()->to(base_url('Property/properties'));
		}
		echo view('template/header');
		echo view('property/add_property');
		echo view('template/footer');	


	}

	public function createdProperties(){
		$model = new PropertyModel();
		$data['properties'] = $model->where('createdBy', session()->get('id'))->findAll();

		echo view('template/header', $data);
		echo view('property/my_properties');
		echo view('template/footer');
	}

	public function saveProperty(){

		$data = [];
		helper(['form']);

		$model = new PropertyModel();
		$model->saveProperty($data);
	}

	public function  addData(){
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

	public function invest(){

		helper(['form']);

		if ($this->request->getMethod() == 'post') {

			$newData = [

				'userId'    => session()->get('id'),
				'propertyId' => $this->request->getVar('propertyId'),
				'amount' => $this->request->getVar('amount'),
			];
			print_r($newData);
			$model = new UserProperiesModel();
			$model->insert($newData);
			$session = session();
			$session->setFlashdata('success', 'Invested in Property');
			return redirect()->to('Property/properties');

		}
		echo view('template/header', $data);
		echo view('data');
		echo view('template/footer');

	}

	public function userProperties($userId=null){

		$userId = $userId ?? session()->get('id');
		$model = new UserProperiesModel();

		$data['properties']  = $model->where('userId', $userId)
		->findAll();
		echo view('template/header', $data);
		echo view('property/user_properties');
		echo view('template/footer');

	} 

	public function getMonthlyIncome(){

	}

	public function edit($Id){
		$model = new PropertyModel();
		$property = $model->find($Id);
		print_r($property);
	}

	public	function delete($id){

		$model = new PropertyModel();
		
		$property = $model->delete($id);
		print_r($property);
	}

	public function verify($id){

		$data  = [
			'verifiedBy' => session()->get('id'),
			'verified'=> 1
		];

		$model = new PropertyModel();
		$property = $model->find($id);
		$model->update($id, $data);
		session()->setFlashdata('success', 'Verified Property Successfully');
		return redirect()->to('Property/properties');
	}
}

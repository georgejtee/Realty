<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\PropertyModel;
use App\Models\InvestmentGroupsModel;

class Admin extends BaseController
{
	public function users()
	{
		// check if user is signed-in if not redirect to login page
		// current year and month variable 
		$ym = date("Y-m");

		// load user model
		$users = new UserModel();

		// getall users
		$allusers = $users->findAll(); 

		$countusers = $users->countAll(); 
		$newusers = $users->like("created_at", $ym)->countAllResults(); 

		// count all active users
		//$activeusers = $users->where('active', 1)->countAllResults(); 

		
		// load the view with session data
		$data = [
			'data' => $allusers, 
			'usercount' => $countusers, 
			'newusers' => $newusers,
			'percentofactiveusers' => 12
		];

		echo view('template/header', $data);
		echo view('admin/users');
		echo view('template/footer');


	}

	public function edit($Id){
		$model = new UserModel();
		$user = $model->find($Id);
		
	}

	public function delete($id){

		$model = new UserModel();
		
		$user = $model->delete($id);
	}

	public function properties(){

		$model = new PropertyModel();

		$properties = $model->findAll(); 

		$countusers = $model->countAll(); 


		$data = [
			'properties' => $model->findAll(), 
			'propertiesCount' => $model->countAll(), 
			'unverifiedProperties' => count($model->where('verified', 0)->findAll())
		];

		echo view('template/header', $data);
		echo view('admin/properties');
		echo view('template/footer');
	}

	public function unverifiedProperties(){
		$model = new PropertyModel();

		$data['properties'] = $model->where('verified', 0)
		->findAll();

		echo view('template/header', $data);
		echo view('admin/unverified_properties');
		echo view('template/footer');
	}

	public function InvestmentGroups(){

		$model = new InvestmentGroupsModel();
		$groups = $model->findAll();

		$data['groups']= $groups;
		$data["groupsCount"]  = $model->countAll(); 
		echo view('template/header', $data);
		echo view('admin/groups');
		echo view('template/footer');
	}

	public function deleteGroup($id){
		$model = new InvestmentGroupsModel();
		
		$user = $model->delete($id);
	}

	public function editGroups($Id){
		$model = new InvestmentGroupsModel();
		$user = $model->find($Id);
		
	}

}
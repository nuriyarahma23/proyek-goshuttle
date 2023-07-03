<?php

namespace Modules\Passanger\Controllers;

use App\Controllers\BaseController;
use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Role\Models\RoleModel;
use CodeIgniter\API\ResponseTrait;

use App\Libraries\Rolepermission;

class Passanger extends BaseController
{

	protected $Viewpath;
	protected $userModel;
	protected $userDetailModel;
	protected $roleModel;

	use ResponseTrait;
	
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Passanger\Views";
		$this->userModel = new UserModel ();
		$this->userDetailModel = new UserDetailModel ();
		$this->roleModel = new RoleModel ();
		$this->db = \Config\Database::connect();
      
    }


	public function new()
	{
		$builder =$this->db->table('country');
		$query   = $builder->get(); 
		$data['country']= $query->getResult();

	
		$data['module'] =    lang("Localize.passanger") ; 
		$data['title']  =    lang("Localize.add_passanger") ;

		$data['pageheading'] = lang("Localize.add_passanger");
		
		echo view($this->Viewpath.'\passanger/new',$data);
	}

	public function index()
	{
		$builder =$this->db->table('country');
		$query   = $builder->get(); 
		$data['country']= $query->getResult();
		
		$data['userDetail'] = $this->userModel->join('user_details','user_details.user_id = users.id','left')->where('role_id',3)->findAll();

		$data['module'] =    lang("Localize.passanger") ; 
		$data['title']  =    lang("Localize.passanger_list") ;

		$data['pageheading'] = lang("Localize.passanger_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_passanger";
        $list_data = "passanger_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);
		
		echo view($this->Viewpath.'\passanger/index',$data);
	}


	public function create()
	{
		$password = password_hash("12345",PASSWORD_DEFAULT);
		$bytes = random_bytes(5);
		$slug = bin2hex($bytes);
		$role_id = 3;
		$status = 1;

		$userData = array(
					"login_email"=> $this->request->getVar('login_email'),
					"login_mobile"=> $this->request->getVar('login_mobile'),
					"password"=> $password,
					"slug"=> $slug,
					"role_id"=>$role_id,
					"status"=> $status,
				);

		

		if($this->validation->run($userData, 'user'))
		{
			$this->db->transStart();

			

			$userId = $this->userModel->insert($userData);

			$validdata= array(
				"user_id"=> $userId,
				"first_name"=> $this->request->getVar('first_name'),
				"last_name"=> $this->request->getVar('last_name'),
				"id_type"=> $this->request->getVar('id_type'),
				"id_number"=> $this->request->getVar('id_number'),
				"country_id"=> $this->request->getVar('country_id'),
				
				
			);


			if ($this->validation->run($validdata, 'userDetail')) {




				$data= array(
					"user_id"=> $userId,
					"first_name"=> $this->request->getVar('first_name'),
					"last_name"=> $this->request->getVar('last_name'),
					"id_type"=> $this->request->getVar('id_type'),
					"country_id"=> $this->request->getVar('country_id'),
					"id_number"=> $this->request->getVar('id_number'),
					"address"=> $this->request->getVar('address'),
					"city"=> $this->request->getVar('city'),
					"zip_code"=> $this->request->getVar('zip_code'),
					
				);

			

				$this->userDetailModel->insert($data);
			}

			else
			{
				$builder =$this->db->table('country');
				$query   = $builder->get(); 
				$data['country']= $query->getResult();
				$data['validation'] = $this->validation;

				$data['module'] =    lang("Localize.passanger") ; 
				$data['title']  =    lang("Localize.passanger_list") ;

				echo view($this->Viewpath.'\passanger/new',$data);
			}

			$this->db->transComplete();
			
			return redirect()->route('index-passanger')->with("success","Data Save");
		}
		
		else
		{
			$builder =$this->db->table('country');
			$query   = $builder->get(); 
			$data['country']= $query->getResult();
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.passanger") ; 
			$data['title']  =    lang("Localize.passanger_list") ;

			echo view($this->Viewpath.'\passanger/new',$data);

		}
		// 
	}

	public function edit($id)
	{
		$builder =$this->db->table('country');
		$query   = $builder->get(); 
		$data['country']= $query->getResult();
		$data['passanger'] = $this->userDetailModel->find($id);


		$data['module'] =    lang("Localize.passanger") ; 
		$data['title']  =    lang("Localize.passanger_list") ;

		$heading = lang("Localize.passanger").' '.lang("Localize.edit");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\passanger/edit',$data);
	}


	public function update($id)
	{
		$data= array(
			"id"=> $id,
			"user_id"=> $this->request->getVar('user_id'),
			"first_name"=> $this->request->getVar('first_name'),
			"last_name"=> $this->request->getVar('last_name'),
		    "country_id"=> $this->request->getVar('country_id'),
			"id_type"=> $this->request->getVar('id_type'),
			"id_number"=> $this->request->getVar('id_number'),
			"address"=> $this->request->getVar('address'),
			"city"=> $this->request->getVar('city'),
			"zip_code"=> $this->request->getVar('zip_code'),
			
		);
		$validdata= array(

				"user_id"=> $this->request->getVar('user_id'),
				"first_name"=> $this->request->getVar('first_name'),
				"last_name"=> $this->request->getVar('last_name'),
				"id_type"=> $this->request->getVar('id_type'),
				"id_number"=> $this->request->getVar('id_number'),
				"country_id"=> $this->request->getVar('country_id'),
			
		);



		if($this->validation->run($validdata, 'userDetail'))
		{
			$this->userDetailModel->save($data);
			return redirect()->route('index-passanger')->with("success","Data Save");
		}
		
		else
		{
			$builder =$this->db->table('country');
			$query   = $builder->get(); 
			$data['country']= $query->getResult();
			$data['passanger'] = $this->userDetailModel->find($id);
			$data['validation'] = $this->validation;


			$data['module'] =    lang("Localize.passanger") ; 
			$data['title']  =    lang("Localize.passanger_list") ;

			echo view($this->Viewpath.'\passanger/edit',$data);

		}


	}

	public function delete($id)
	{
		$userDetails = $this->userDetailModel->find($id);
		$this->userModel->delete($userDetails->user_id);
		$this->userDetailModel->delete($id);
		return redirect()->route('index-passanger')->with("fail","Data Deleted");
	
	}



}

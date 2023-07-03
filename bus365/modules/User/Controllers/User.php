<?php

namespace Modules\User\Controllers;

use App\Controllers\BaseController;

use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Role\Models\RoleModel;
use Modules\Agent\Models\AgentModel;
use Modules\Website\Models\WebsettingModel;
use CodeIgniter\API\ResponseTrait;


class User extends BaseController
{


	use ResponseTrait;
	protected $Viewpath;
	protected $userModel;
	protected $userDetailModel;
	protected $agentDetailModel;
	protected $roleModel;
	protected $websetting;
	
	
	public function __construct()
    {

		$this->Viewpath = "Modules\User\Views";
		$this->userModel = new UserModel ();
		$this->userDetailModel = new UserDetailModel ();
		$this->agentDetailModel = new AgentModel ();
		$this->roleModel = new RoleModel ();
		$this->db = \Config\Database::connect();

		$this->websetting = new WebsettingModel ();
      
    }


	public function editprofile()
	{
		$userId = $this->session->get('user_id');
		$data['user'] = $this->userModel->find($userId); 
		$data['user_detail'] = $this->userDetailModel->where('user_id',$data['user']->id)->first(); 
		$builder =$this->db->table('country');
		$query   = $builder->get(); 
		$data['country']= $query->getResult();

		$heading = lang("Localize.profile").' '.lang("Localize.settings");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath . '\user/edit',$data);
		
	}


	public function changelogininfo()
	{
		$userId = $this->session->get('user_id');
		$userdata = $this->userModel->find($userId); 

		

		$oldpassword = $this->request->getVar('password');

		$pass = $userdata->password;
		$verify_pass = password_verify($oldpassword, $pass);

		

		if ($verify_pass) 
		{
			$data= array(
				"id"=> $userId,
				"login_email"=> $this->request->getVar('login_email'),
				"login_mobile"=> $this->request->getVar('login_mobile'),
				"password"=> password_hash($oldpassword,PASSWORD_DEFAULT),
				
			);


			if($this->validation->run($data, 'adminlogin'))
			{
				
				$this->userModel->save($data);

				return redirect()->route('editprofile-user')->with("success","Data Update");
			}

			else
			{
				$builder =$this->db->table('country');
				$query   = $builder->get(); 
				$data['country']= $query->getResult();
				


				$userId = $this->session->get('user_id');
				$data['user'] = $this->userModel->find($userId); 
				$data['user_detail'] = $this->userDetailModel->where('user_id',$data['user']->id)->first(); 
				$data['validation'] = $this->validation;

				$heading = lang("Localize.profile").' '.lang("Localize.settings");
				$data['pageheading'] = $heading;

				echo view($this->Viewpath . '\user/edit',$data);
			}
	
			
			
		}
		 
		else
		{
			return redirect()->route('editprofile-user')->with("fail","Old Password Not Match");
		}
		

	}



	public function changepassword()
	{
		$userId = $this->session->get('user_id');
		$userdata = $this->userModel->find($userId); 

		

		$oldpassword = $this->request->getVar('oldpassword');
		$newpassword = $this->request->getVar('password');

		$pass = $userdata->password;
		$verify_pass = password_verify($oldpassword, $pass);

		

		if ($verify_pass) 
		{
			$data= array(
				"id"=> $userId,
				"password"=> $this->request->getVar('password'),
				"repassword"=> $this->request->getVar('repassword'),
				"oldpassword"=> $oldpassword,
				
			);
			
			$updatedata= array(
				"id"=> $userId,
				"password"=> password_hash($newpassword,PASSWORD_DEFAULT),
				
				
			);


			if($this->validation->run($data, 'resetpassadmin'))
			{
				
				$this->userModel->save($updatedata);

				return redirect()->route('editprofile-user')->with("success","Data Update");
			}

			else
			{
				$builder =$this->db->table('country');
				$query   = $builder->get(); 
				$data['country']= $query->getResult();

				$userId = $this->session->get('user_id');
				$data['user'] = $this->userModel->find($userId); 
				$data['user_detail'] = $this->userDetailModel->where('user_id',$data['user']->id)->first(); 
				$data['validation'] = $this->validation;
				
				$heading = lang("Localize.profile").' '.lang("Localize.settings");
				$data['pageheading'] = $heading;

				echo view($this->Viewpath . '\user/edit',$data);
			}
	
			
			
		}
		 
		else
		{
			return redirect()->route('editprofile-user')->with("fail","Old Password Not Match");
		}
		

	}


	public function changeprofileinfo()
	
	{
		$userId = $this->session->get('user_id');
		$userdata = $this->userDetailModel->where('user_id',$userId)->first();; 

		$data= array(
			"id"=> $userdata->id,
			"user_id"=> $userId,
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

				"user_id"=> $userId,
				"first_name"=> $this->request->getVar('first_name'),
				"last_name"=> $this->request->getVar('last_name'),
				"id_type"=> $this->request->getVar('id_type'),
				"id_number"=> $this->request->getVar('id_number'),
				"country_id"=> $this->request->getVar('country_id'),
			
		);
		

		if($this->validation->run($validdata, 'userDetail'))
		{
			
			$this->userDetailModel->save($data);
			return redirect()->route('editprofile-user')->with("success","Data Save");
		}

		else
		{
			

				$builder =$this->db->table('country');
				$query   = $builder->get(); 
				$data['country']= $query->getResult();

				$userId = $this->session->get('user_id');
				$data['user'] = $this->userModel->find($userId); 
				$data['user_detail'] = $this->userDetailModel->where('user_id',$data['user']->id)->first(); 
				$data['validation'] = $this->validation;
				
				$heading = lang("Localize.profile").' '.lang("Localize.settings");
				$data['pageheading'] = $heading;

				echo view($this->Viewpath . '\user/edit',$data);

		}

	}



	public  function ProfilePicUpload($userDetailId)
	{
		$path = 'image/agent';
		$imagenid = '';
		$profileimage =  $this->request->getFile('image');


		if ($profileimage->isValid() && ! $profileimage->hasMoved()) {
			$imagenid	 = $this->imgaeCheck($profileimage,$path);
			
		}
		else{
			
			$imagenid = $this->request->getVar('adminprofile');
			
		}

		$data= array(
			"id" => $userDetailId,
			"image"=> $imagenid,
		);

		$result = $this->userDetailModel->save($data);

		if (!empty($result)) {

			return redirect()->route('editprofile-user')->with("success","Picture Upload Successful");
			
		} 
		else 
		{
			return redirect()->route('editprofile-user')->with("fail","Picture Upload Fail");
		}
		
		
	}


	public function imgaeCheck($image,$path)
	{
		$newName = $image->getRandomName();
		$path = $path;
		$image->move($path, $newName);
		return $path.'/'.$newName;
	}





}

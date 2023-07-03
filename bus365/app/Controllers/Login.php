<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Role\Models\RoleModel;
use Modules\Agent\Models\AgentModel;
use Modules\Website\Models\WebsettingModel;
use CodeIgniter\API\ResponseTrait;

class Login extends BaseController
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

     
		$this->userModel = new UserModel ();
		$this->userDetailModel = new UserDetailModel ();
		$this->agentDetailModel = new AgentModel ();
		$this->roleModel = new RoleModel ();
		$this->db = \Config\Database::connect();

		$this->websetting = new WebsettingModel ();
      
    }

	public function auth()
	{
		$segment	= $this->request->getVar('userid');
		$password = $this->request->getVar('password');
		$userid = null;
		
		$first_name = null;
		$last_name = null;
		$id_number = null;
		$id_type = null;
		$role_id = null;
		$address = null;
		$country_id = null;
		$city = null;
		$zip_code = null;
		

		$userdetail = $this->userModel  ->where('status',1)
										->where('login_email',$segment)
										->orwhere('login_mobile',$segment)
										->findAll();
								

		 foreach ($userdetail as $key => $rvalue) {

			$userid = $rvalue->id;
			 if ($rvalue->role_id == 3) {
				return redirect()->route('login')->with("fail","User Id or Password don't match" );
			 }
			
		 }

		
		
		if($userdetail)
		{
			$pass = $userdetail[0]->password;
			$verify_pass = password_verify($password, $pass);

			

            if ($verify_pass) {



                foreach ($userdetail as $key => $value) {

					if ($rvalue->role_id == 2) {
						$userDetails = $this->agentDetailModel->where('user_id',$value->id)->first();
						
						$first_name = $userDetails->first_name;
						$last_name = $userDetails->last_name;
						$id_number = $userDetails->id_number;
						$id_type = $userDetails->id_type;
						
						$address = $userDetails->address;
						$country_id = $userDetails->country_id;
						$city = $userDetails->city;
						$zip_code = $userDetails->zip;
						$profilepic = $userDetails->profile_picture;
					 }
					if ($rvalue->role_id == 1) {
						

						$userDetails = $this->userDetailModel->where('user_id',$value->id)->first();
						

						$first_name = $userDetails->first_name;
						$last_name = $userDetails->last_name;
						$id_number = $userDetails->id_number;
						$id_type = $userDetails->id_type;
						
						$address = $userDetails->address;
						$country_id = $userDetails->country_id;
						$city = $userDetails->city;
						$zip_code = $userDetails->zip_code;
						$profilepic = $userDetails->image;
						
					 }

            	}

					$settings = $this->websetting->first();


					$currencybuilder = $this->db->table('currencies');
					$curencyquery = $currencybuilder->where('id',$settings->currency)->get();
					$currency = $curencyquery->getResult();
					
					$userdata['user_id'] = $userid;
					$userdata['login_email'] = $userdetail[0]->login_email;
					$userdata['login_mobile'] = $userdetail[0]->login_mobile;
					$userdata['slug'] = $userdetail[0]->slug;
					$userdata['status'] =$userdetail[0]->status;
					$userdata['first_name'] = $first_name;
					$userdata['last_name'] = $last_name;
					$userdata['id_number'] = $id_number;
					$userdata['id_type'] = $id_type;
					$userdata['role_id'] = $userdetail[0]->role_id;
					$userdata['address'] = $address;
					$userdata['country_id'] = $country_id;
					$userdata['city'] = $city;
					$userdata['zip_code'] = $zip_code;

					$userdata['profile_pic'] = base_url().'/public/'.$profilepic;

					$userdata['isLoggedIn'] = true;
					$userdata['logo'] = base_url().'/public/'. $settings->headerlogo;
					$userdata['logotext'] =  $settings->logotext;

					$userdata['currency_country'] = $currency[0]->country;
					$userdata['currency_code'] = $currency[0]->code;
					$userdata['currency_symbol'] = $currency[0]->symbol;

					if (!empty($settings->fontfamely)) {
						$userdata['fontfamily'] = $settings->fontfamely;
					}
					if (!empty($settings->localize_name)) {
						$userdata['lang'] = $settings->localize_name;
					}
					
					
					
					$this->session->set($userdata);

					$name = $this->session->get('first_name');

					
					
				
				return redirect()->route('admin-home')->with("success","Welcome " . $first_name ." ".$last_name . " " );


			}

			 else {
				return redirect()->route('login')->with("fail","User Id or Password don't match" );
			}
			

		}


		else {
			return redirect()->route('login')->with("fail","User Not Found or Disable by Admin" );
		}


	}


	public function logout()
	{
		$this->session->destroy();
		return redirect()->route('login');
	}
}

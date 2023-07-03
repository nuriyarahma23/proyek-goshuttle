<?php

namespace Modules\Agent\Controllers;

use App\Controllers\BaseController;
use Modules\Agent\Models\AgentModel;
use Modules\Agent\Models\Agentcommission;
use Modules\Agent\Models\AgenttotalModel;
use Modules\User\Models\UserModel;
use Modules\User\Models\UserDetailModel;
use Modules\Role\Models\RoleModel;
use Modules\Location\Models\LocationModel;

use App\Libraries\Rolepermission;



class Agent extends BaseController
{

	protected $Viewpath;
	protected $db;
	protected $userModel;
	protected $userDetailModel;
	protected $agentModel;
	protected $roleModel;
	protected $locationModel;
	protected $agentCommissionModel;
	protected $agentTotal;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Agent\Views";
		$this->agentModel = new AgentModel ();
		$this->userModel = new UserModel ();
		$this->userDetailModel = new UserDetailModel ();
		$this->roleModel = new RoleModel ();
		$this->locationModel = new LocationModel ();
		$this->db = \Config\Database::connect();

		$this->agentCommissionModel = new Agentcommission();
		$this->agentTotal = new AgenttotalModel();
      
    }

	public function new()
	{
		
		$builder =$this->db->table('country');
		$query   = $builder->get(); 
		$data['country']= $query->getResult();
		$data['location'] = $this->locationModel->findAll();

		$data['pageheading'] = lang("Localize.add_agent");

		$data['module'] =    lang("Localize.agent") ; 
		$data['title']  =    lang("Localize.add_agent") ; 

		echo view($this->Viewpath.'\agent/new',$data);
	}


	public function create()
	{
		$path = 'image/agent';
		$password = password_hash("123456",PASSWORD_DEFAULT);
		$bytes = random_bytes(5);
		$slug = bin2hex($bytes);
		$role_id = 2;
		$status = 1;

		$login_email = $this->request->getVar('login_email');
		$login_mobile = $this->request->getVar('login_mobile');

		if ($this->userModel->where('login_email',$login_email)->countAllResults() > 0) {
			return redirect()->back()->with("fail","Email is taken");
		}
		if ($this->userModel->where('login_mobile',$login_mobile)->countAllResults() > 0 ) {
			return redirect()->back()->with("fail","Mobile is taken");
		}

		$userData = array(
					"login_email"=> $this->request->getVar('login_email'),
					"login_mobile"=> $this->request->getVar('login_mobile'),
					"password"=> $password,
					"slug"=> $slug,
					"role_id"=>$role_id,
					"status"=> $status,
				);

		
		$imagenid = '';
		$imagedocu ='';

		$nidimage =  $this->request->getFile('nid_picture');
		$profileimage =  $this->request->getFile('profile_picture');

		if ($nidimage->isValid() && ! $nidimage->hasMoved() ) {
			$imagenid	 = $this->imgaeCheck($nidimage,$path);
		}
		
		if ($profileimage->isValid() && ! $profileimage->hasMoved() ) {
			$imagedocu	 = $this->imgaeCheck($profileimage,$path);
			
		}

       if ($this->validation->run($userData, 'user'))
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
				"location_id"=> $this->request->getVar('location_id'),
				"commission"=> $this->request->getVar('commission'),
				"address"=> $this->request->getVar('address'),
				
			);

            if ($this->validation->run($validdata, 'agent'))
			
			{
				
				$data= array(
					"user_id"=> $userId,
					"first_name"=> $this->request->getVar('first_name'),
					"last_name"=> $this->request->getVar('last_name'),
					"id_type"=> $this->request->getVar('id_type'),
					"country_id"=> $this->request->getVar('country_id'),
					"id_number"=> $this->request->getVar('id_number'),
					"address"=> $this->request->getVar('address'),
					"city"=> $this->request->getVar('city'),
					"zip"=> $this->request->getVar('zip'),
					"location_id"=> $this->request->getVar('location_id'),
					"blood"=> $this->request->getVar('blood'),
					"commission"=> $this->request->getVar('commission'),
					"profile_picture"=> $imagedocu,
			 		"nid_picture"=> $imagenid,
					
				);


				$this->agentModel->insert($data);

            }


			else
			{
				$builder =$this->db->table('country');
				$query   = $builder->get(); 
				$data['country']= $query->getResult();
				$data['location'] = $this->locationModel->findAll();
				$data['validation'] = $this->validation;
				$data['pageheading'] = "Add Agent";

				$data['module'] =    lang("Localize.agent") ; 
				$data['title']  =    lang("Localize.agent_list") ;

				echo view($this->Viewpath.'\agent/new',$data);
			}
			
			
			$this->db->transComplete();
			return redirect()->route('index-agent')->with("success","Data Save");
        }


		else
			{
				$builder =$this->db->table('country');
				$query   = $builder->get(); 
				$data['country']= $query->getResult();
				$data['location'] = $this->locationModel->findAll();
				$data['validation'] = $this->validation;
				$data['pageheading'] = "Add Agent";

				$data['module'] =    lang("Localize.agent") ; 
				$data['title']  =    lang("Localize.agent_list") ;

				echo view($this->Viewpath.'\agent/new',$data);
			}

	}

	public function index()
	{
		$builder =$this->db->table('country');
		$query   = $builder->get(); 
		$data['country']= $query->getResult();
		$data['location'] = $this->locationModel->findAll();

		$userRole = $this->session->get('role_id');

		if ($userRole == 1) {
			$data['agentdetail'] = $this->userModel->join('agents','agents.user_id = users.id','left')->where('role_id',2)->findAll();
			$data['role_id'] = $userRole;
		}

		if ($userRole == 2) {
			$agentid = $this->session->get('user_id');
			$data['agentdetail'] = $this->userModel->join('agents','agents.user_id = users.id','left')->where('role_id',2)->where('agents.user_id',$agentid)->findAll();
			$data['role_id'] = $userRole;
		}

		$data['pageheading'] = lang("Localize.agent_list");
		
		$data['module'] =    lang("Localize.agent") ; 
		$data['title']  =    lang("Localize.agent_list") ;

		$rolepermissionLibrary = new Rolepermission();
        $add_agent = "add_agent";
        $agent_list = "agent_list";

        $data['add_agent'] = $rolepermissionLibrary->create($add_agent); 
        $data['edit_agent'] = $rolepermissionLibrary->edit($agent_list); 
        $data['delete_agent'] = $rolepermissionLibrary->delete($agent_list); 
		
		echo view($this->Viewpath.'\agent/index',$data);
	}


	public function edit($id)
	{
		

		$builder =$this->db->table('country');
		$query   = $builder->get(); 
		$data['country']= $query->getResult();
		$data['location'] = $this->locationModel->findAll();
		$data['agentdetail'] =  $this->agentModel->select('users.*,agents.*,users.id as userid,agents.id as agentid')->join('users','users.id = agents.user_id')->where('users.role_id',2)->where('agents.id',$id)->first(); 
		
		$data['module'] =    lang("Localize.agent") ; 
		$data['title']  =    lang("Localize.agent_list") ;

		$heading = lang("Localize.agent").' '.lang("Localize.edit");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\agent/edit',$data);
	}


	public function update($userId,$agentId)
	{
		$path = 'image/agent';
		$imagenid = '';
		$imagedocu ='';
		$nidimage =  $this->request->getFile('nid_picture');
		$profileimage =  $this->request->getFile('profile_picture');
		
		if ($nidimage->isValid() && ! $nidimage->hasMoved()) {
			$imagenid	 = $this->imgaeCheck($nidimage,$path);
			
		}
		else{
			
			$imagenid= $this->request->getVar('documentoldpic');
			
		}

		if ($profileimage->isValid() && ! $profileimage->hasMoved()) {
			$imagedocu	 = $this->imgaeCheck($profileimage,$path);
			
		}

		else{
			$imagedocu = $this->request->getVar('profileoldpic');
			
		}

		$userData = array(
			"id" => $this->request->getVar('userId'),
			"login_email"=> $this->request->getVar('login_email'),
			"login_mobile"=> $this->request->getVar('login_mobile'),
		);
		$this->db->transStart();

		 $this->userModel->save($userData);

		 $userId = $this->request->getVar('userId');
		 $agentId = $this->request->getVar('agentId');

		$validdata= array(
			"user_id"=> $userId,
			"first_name"=> $this->request->getVar('first_name'),
			"last_name"=> $this->request->getVar('last_name'),
			"id_type"=> $this->request->getVar('id_type'),
			"id_number"=> $this->request->getVar('id_number'),
			"country_id"=> $this->request->getVar('country_id'),
			"location_id"=> $this->request->getVar('location_id'),
			"commission"=> $this->request->getVar('commission'),
			"address"=> $this->request->getVar('address'),
			
		);


		if ($this->validation->run($validdata, 'agent'))
			
			{
				$adata= array(
					"id" => $agentId,
					"user_id"=> $userId,
					"first_name"=> $this->request->getVar('first_name'),
					"last_name"=> $this->request->getVar('last_name'),
					"id_type"=> $this->request->getVar('id_type'),
					"country_id"=> $this->request->getVar('country_id'),
					"id_number"=> $this->request->getVar('id_number'),
					"address"=> $this->request->getVar('address'),
					"city"=> $this->request->getVar('city'),
					"zip"=> $this->request->getVar('zip'),
					"location_id"=> $this->request->getVar('location_id'),
					"blood"=> $this->request->getVar('blood'),
					"commission"=> $this->request->getVar('commission'),
					"profile_picture"=> $imagedocu,
					"nid_picture"=> $imagenid,
					
				);

				$this->agentModel->save($adata);

			}

			else
			{
				$builder =$this->db->table('country');
				$query   = $builder->get(); 
				$data['country']= $query->getResult();
				$data['location'] = $this->locationModel->findAll();
				$data['agentdetail'] =  $this->agentModel->select('users.*,agents.*,users.id as userid,agents.id as agentid')->join('users','users.id = agents.user_id')->where('users.role_id',2)->where('agents.id',$agentId)->first(); 
				$data['validation'] = $this->validation;

				$data['module'] =    lang("Localize.agent") ; 
				$data['title']  =    lang("Localize.agent_list") ;

				echo view($this->Viewpath.'\agent/edit',$data);

			}

		


		$this->db->transComplete();
		return redirect()->route('index-agent')->with("success","Data Save");

		
	}

	public function agentCommissionDetails($agentid)

	
	{
		$passangerinfo = $this->userDetailModel->findAll();

		$commission= $this->agentCommissionModel->select('agentcommissions.*,agents.*,agentcommissions.id as commissionid,
															agentcommissions.user_id as commission_user_id,
															agentcommissions.commission as commissionamount,
															agents.id as agentid')
												->join('agents','agents.id  = agentcommissions.agent_id')
												->join('subtrips','subtrips.id   = agentcommissions.subtrip_id')
												->where('agentcommissions.agent_id',$agentid)->findAll(); 
				foreach ($commission as $key => $cvalue) {

					foreach ($passangerinfo as $nkey => $pvalue) {
						
						if ($pvalue->user_id == $cvalue->commission_user_id ) {
							
							$commission[$key]->commission_user_id = $pvalue->first_name . ' ' .$pvalue->last_name;
						}
					}
					
					$commission[$key]->first_name = $cvalue->first_name.' '.$cvalue->last_name;  
					
				}	
				$data['commission'] = $commission;
				
				$data['module'] =    lang("Localize.agent") ; 
				$data['title']  =    lang("Localize.transaction_list") ;		
				echo view($this->Viewpath.'\commission/index',$data);

	}

	public function agentTransactionDetails($agentid)
	{
		$fromDate = date('Y-m-01');
		$toDate = date('Y-m-d');
		$data['transaction'] = $this->agentTotal->where('DATE(created_at) >=', $fromDate)->where('DATE(created_at) <=', $toDate)->where('agent_id',$agentid)->findAll();
		$data['filepath'] = $this->Viewpath;
		$data['agentId'] = $agentid;

 		$data['agentdetail'] =  $this->agentModel->select('users.*,agents.*,users.id as userid,agents.id as agentid')->join('users','users.id = agents.user_id')->where('users.role_id',2)->where('agents.id',$agentid)->first(); 

		$heading = lang("Localize.agent").' '.lang("Localize.transaction_list");
		$data['pageheading'] = $heading;

		$data['module'] =    lang("Localize.agent") ; 
		$data['title']  =    lang("Localize.transaction_list") ;
		
		$data['currency_symbol']  =    $this->session->get('currency_symbol');

		echo view($this->Viewpath.'\transaction/index',$data);

	}

	public function agentTranDateRange()
	{
		$fromDate = $this->request->getVar('start_date');
		$toDate = $this->request->getVar('end_date');
		$agetnID = $this->request->getVar('agetnID');
		$data['transaction'] = $this->agentTotal->where('DATE(created_at) >=', $fromDate)->where('DATE(created_at) <=', $toDate)->where('agent_id',$agetnID)->findAll();
		$data['agentId'] = $agetnID;
		$data['filepath'] = $this->Viewpath;

		$heading = lang("Localize.agent").' '.lang("Localize.transaction_list");
		$data['pageheading'] = $heading;

		$data['agentdetail'] =  $this->agentModel->select('users.*,agents.*,users.id as userid,agents.id as agentid')->join('users','users.id = agents.user_id')->where('users.role_id',2)->where('agents.id',$agetnID)->first(); 

		
		$data['module'] =    lang("Localize.agent") ; 
		$data['title']  =    lang("Localize.transaction_list") ;

		$data['currency_symbol']  =    $this->session->get('currency_symbol');
		
		echo view($this->Viewpath.'\transaction/index',$data);
	}


	public function imgaeCheck($image,$path)
	{
		$newName = $image->getRandomName();
		$path = $path;
		$image->move($path, $newName);
		return $path.'/'.$newName;
	}

	public function status($useragentId)
	{
		$userStatus = $this->userModel->find($useragentId);
		
		if ($userStatus->status ==1) {
			$upData= array(
				"id"=> $useragentId,
				"status"=> 0
			);
			$this->userModel->save($upData);
		} 
		if ($userStatus->status == 0) {
			$upData= array(
				"id"=> $useragentId,
				"status"=> 1
			);
			$this->userModel->save($upData);
		}
		return redirect()->route('index-agent')->with("success","Data Update");
	}
}

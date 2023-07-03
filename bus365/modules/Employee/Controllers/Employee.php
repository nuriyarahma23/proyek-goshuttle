<?php

namespace Modules\Employee\Controllers;

use App\Controllers\BaseController;
use Modules\Employee\Models\EmployeeModel;
use Modules\Employee\Models\EmployeeTypeModel;
use App\Libraries\Rolepermission;

class Employee extends BaseController
{

	protected $Viewpath;
	protected $employeeModel;
	protected $employeeTypeModel;
	protected $db;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Employee\Views";
		$this->employeeModel = new EmployeeModel ();
		$this->employeeTypeModel = new EmployeeTypeModel ();
		$this->db = \Config\Database::connect();
      
    }


	public function new()
	{
		$builder =$this->db->table('country');
		$query   = $builder->get(); 
		$data['country']= $query->getResult();
		$data['employeetype'] = $this->employeeTypeModel->findAll();

		$data['module'] =    lang("Localize.employee") ; 
		$data['title']  =    lang("Localize.add_employee") ;

		$data['pageheading'] = lang("Localize.add_employee");

		echo view($this->Viewpath.'\employee/new',$data);
	}

	public function index()
	{

		$data['employee'] = $this->employeeModel->select('employees.*,employeetypes.type')
							->join('employeetypes', 'employeetypes.id = employees.employeetype_id ')
	   						->findAll();

		$data['module'] =    lang("Localize.employee") ; 
		$data['title']  =    lang("Localize.employee_list") ;

		$data['pageheading'] = lang("Localize.employee_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_employee";
        $list_data = "employee_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


		echo view($this->Viewpath.'\employee/index',$data);
	}


	public function create()
	{
		$imagenid = ''; $imagedocu ='';
		$nidimage =  $this->request->getFile('nid_picture');
		$profileimage =  $this->request->getFile('profile_picture');

		if ($nidimage->isValid() && ! $nidimage->hasMoved() ) {
			$imagenid	 = $this->imgaeCheck($nidimage);
		}
		
		if ($profileimage->isValid() && ! $profileimage->hasMoved() ) {
			$imagedocu	 = $this->imgaeCheck($profileimage);
			
		}
	
		$data= array(
			"first_name"=> $this->request->getVar('first_name'),
			"last_name"=> $this->request->getVar('last_name'),
			"phone"=> $this->request->getVar('phone'),
			"email"=> $this->request->getVar('email'),
			"employeetype_id"=> $this->request->getVar('employeetype_id'),
			"country_id"=> $this->request->getVar('country_id'),
			"blood"=> $this->request->getVar('blood'),
			"nid"=> $this->request->getVar('nid'),
			"address"=> $this->request->getVar('address'),
			"city"=> $this->request->getVar('city'),
			"zip"=> $this->request->getVar('zip'),
			 "profile_picture"=> $imagedocu,
			 "nid_picture"=> $imagenid,
		);
		$validdata= array(
			"first_name"=> $this->request->getVar('first_name'),
			"last_name"=> $this->request->getVar('last_name'),
			"phone"=> $this->request->getVar('phone'),
			"email"=> $this->request->getVar('email'),
			"employeetype_id"=> $this->request->getVar('employeetype_id'),
			"country_id"=> $this->request->getVar('country_id'),
			"address"=> $this->request->getVar('address'),
			
		);

		

		if($this->validation->run($validdata, 'employee'))
		{
			$this->employeeModel->insert($data);
			return redirect()->route('index-employee')->with("success","Data Save");
		}
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.employee") ; 
			$data['title']  =    lang("Localize.add_employee") ;

			echo view($this->Viewpath.'\employee/new',$data);

		}
		// 
	}

	public function edit($id)
	{
		$builder =$this->db->table('country');
		$query   = $builder->get(); 
		$data['country']= $query->getResult();
		$data['employeetype'] = $this->employeeTypeModel->findAll();
		$data['employee'] = $this->employeeModel->find($id);

		$data['module'] =    lang("Localize.employee") ; 
		$data['title']  =    lang("Localize.employee_list") ;

		$heading = lang("Localize.employee").' '.lang("Localize.edit");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\employee/edit',$data);
	}


	public function update($id)
	{
		
		$imagenid = ''; $imagedocu ='';
		$nidimage =  $this->request->getFile('nid_picture');
		$profileimage =  $this->request->getFile('profile_picture');
		
		if ($nidimage->isValid() && ! $nidimage->hasMoved()) {
			$imagenid	 = $this->imgaeCheck($nidimage);
			
		}
		else{
			
			$imagenid= $this->request->getVar('documentoldpic');
			
		}

		if ($profileimage->isValid() && ! $profileimage->hasMoved()) {
			$imagedocu	 = $this->imgaeCheck($profileimage);
			
		}

		else{
			$imagedocu = $this->request->getVar('profileoldpic');
			
		}

		// dd($imagenid,$imagedocu);
		$data= array(
			"id"=> $id,
			"first_name"=> $this->request->getVar('first_name'),
			"last_name"=> $this->request->getVar('last_name'),
			"phone"=> $this->request->getVar('phone'),
			"email"=> $this->request->getVar('email'),
			"employeetype_id"=> $this->request->getVar('employeetype_id'),
			"country_id"=> $this->request->getVar('country_id'),
			"blood"=> $this->request->getVar('blood'),
			"nid"=> $this->request->getVar('nid'),
			"address"=> $this->request->getVar('address'),
			"city"=> $this->request->getVar('city'),
			"zip"=> $this->request->getVar('zip'),
			 "profile_picture"=> $imagedocu,
			 "nid_picture"=> $imagenid,
		);
		$validdata= array(
			"first_name"=> $this->request->getVar('first_name'),
			"last_name"=> $this->request->getVar('last_name'),
			"phone"=> $this->request->getVar('phone'),
			"email"=> $this->request->getVar('email'),
			"employeetype_id"=> $this->request->getVar('employeetype_id'),
			"country_id"=> $this->request->getVar('country_id'),
			"address"=> $this->request->getVar('address'),
			
		);



		if($this->validation->run($validdata, 'employee'))
		{
			$this->employeeModel->save($data);
			return redirect()->route('index-employee')->with("success","Data Save");
		}
		
		else
		{
			$builder =$this->db->table('country');
			$query   = $builder->get(); 
			$data['country']= $query->getResult();
			$data['employeetype'] = $this->employeeTypeModel->findAll();
			$data['employee'] = $this->employeeModel->find($this->request->getVar('id'));
			$data['validation'] = $this->validation;


			$data['module'] =    lang("Localize.employee") ; 
			$data['title']  =    lang("Localize.employee_list") ;

			echo view($this->Viewpath.'\employee/edit',$data);

		}


	}

	public function delete($id)
	{
		
		$this->employeeModel->delete($id);
		return redirect()->route('index-employee')->with("fail","Data Deleted");
	
	}



	public function imgaeCheck($image)
	{
		$newName = $image->getRandomName();
		$path = 'image/employee';
		$image->move($path, $newName);
		return $path.'/'.$newName;
	}


}

<?php

namespace Modules\Role\Controllers;

use App\Controllers\BaseController;
use Modules\Role\Models\RoleModel;
use App\Libraries\Rolepermission;


class Role extends BaseController
{
	protected $Viewpath;
	protected $roleModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Role\Views";
		$this->roleModel = new RoleModel();
		
      
    }

	public function new()
	{
		$data['module'] =    lang("Localize.role") ; 
		$data['title']  =    lang("Localize.add_role") ;

		$data['pageheading'] = lang("Localize.add_role");

		echo view($this->Viewpath.'\role/new',$data);
	}

	public function create()
	{
		
		
		$data= array(
			
			"name"=> $this->request->getVar('name'),	
			"status"=> $this->request->getVar('status'),	
		);

		if($this->validation->run($data, 'role'))
		{
			$this->roleModel->insert($data);
			return redirect()->route('index-role')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.role") ; 
			$data['title']  =    lang("Localize.role_list") ;

			$data['pageheading'] = lang("Localize.add_role");

			echo view($this->Viewpath.'\role/new',$data);

		}
		
	}

	public function index()
	{
		$data['role'] = $this->roleModel->findAll();

		$data['module'] =    lang("Localize.role") ; 
		$data['title']  =    lang("Localize.role_list") ;
		$data['pageheading'] = lang("Localize.role_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_role";
        $list_data = "role_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);


		echo view($this->Viewpath.'\role/index',$data);
	}


	public function edit($id)
	{
		$data['role'] = $this->roleModel->find($id);

		$data['module'] =    lang("Localize.role") ; 
		$data['title']  =    lang("Localize.role_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.role");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\role/edit',$data);
	}

	public function update($id)
	{
		
		$validdata= array(
			"name"=> $this->request->getVar('name'),	
			"status"=> $this->request->getVar('status'),	
		);
		$data= array(
			"id"=> $id,
			"name"=> $this->request->getVar('name'),	
			"status"=> $this->request->getVar('status'),	
		);

		if($this->validation->run($validdata, 'role'))
		{
			$this->roleModel->save($data);
			return redirect()->route('index-role')->with("success","Data Update");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;
			$data['role'] = $this->roleModel->find($id);

			$data['module'] =    lang("Localize.role") ; 
			$data['title']  =    lang("Localize.role_list") ;

			$heading = lang("Localize.edit").' '.lang("Localize.role");
			$data['pageheading'] = $heading;
			
			echo view($this->Viewpath.'\role/edit',$data);

		}
	}

	public function delete($id)
	{
		$this->roleModel->delete($id);
		return redirect()->route('index-role')->with("fail","Data Deleted");
	}
}

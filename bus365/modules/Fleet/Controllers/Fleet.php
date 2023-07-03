<?php

namespace Modules\Fleet\Controllers;

use App\Controllers\BaseController;
use Modules\Fleet\Models\FleetModel;
use App\Libraries\Rolepermission;

class Fleet extends BaseController
{
	private $Viewpath;
	protected $fleetModel;
	protected $session;
	public function __construct()
    {

        $this->Viewpath = "Modules\Fleet\Views";
		$this->fleetModel = new FleetModel();
      
    }
	public function new()
	{
		$data['module'] =    lang("Localize.fleet") ; 
		$data['title']  =    lang("Localize.add_fleet") ;
		$data['pageheading'] = lang("Localize.add_fleet");

		echo view($this->Viewpath.'\fleet/new',$data);
	}
	public function create()
	{
		if($this->request->getVar('last_seat') == null)
		{
			$lastseat = 0;
		}
		else{
			$lastseat = 1;
		}

		$data= array(
			"type"=> $this->request->getVar('type'),
			"layout"=> $this->request->getVar('layout'),
			"last_seat"=> $lastseat,
			"total_seat"=> $this->request->getVar('total_seat'),
			"seat_number"=> $this->request->getVar('seat_number'),
			"status"=> $this->request->getVar('status'),
			"total_wait"=> $this->request->getVar('total_wait'),
			"luggage_service"=> $this->request->getVar('luggage_service'),
		);

		if($this->validation->run($data, 'fleet'))
		{
			$this->fleetModel->insert($data);
			return redirect()->route('index-fleet')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.fleet") ; 
			$data['title']  =    lang("Localize.add_fleet") ;

			$data['pageheading'] = lang("Localize.add_fleet");

			echo view($this->Viewpath.'\fleet/new',$data);

		}
		
	}

	public function index()
	{
		$data['fleet'] = $this->fleetModel->findAll();

		$data['module'] =    lang("Localize.fleet") ; 
		$data['title']  =    lang("Localize.fleet_list") ;

		$data['pageheading'] = lang("Localize.fleet_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_fleet";
        $list_data = "fleet_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\fleet/index',$data);
	}

	public function edit($id)
	{
		$data['fleet'] = $this->fleetModel->find($id);

		$data['module'] =    lang("Localize.fleet") ; 
		$data['title']  =    lang("Localize.fleet_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.fleet");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\fleet/edit',$data);
	}

	public function update($id)
	{
		if($this->request->getVar('last_seat') == null)
		{
			$lastseat = 0;
		}
		else{
			$lastseat = 1;
		}

		

		$validdata= array(
			"type"=> $this->request->getVar('type'),
			"layout"=> $this->request->getVar('layout'),
			"last_seat"=> $lastseat,
			"total_seat"=> $this->request->getVar('total_seat'),
			"seat_number"=> $this->request->getVar('seat_number'),
			"status"=> $this->request->getVar('status'),
			"total_wait"=> $this->request->getVar('total_wait'),
			"luggage_service"=> $this->request->getVar('luggage_service'),
		);




		$data= array(
			"id"=> $id,
			"type"=> $this->request->getVar('type'),
			"layout"=> $this->request->getVar('layout'),
			"last_seat"=> $lastseat,
			"total_seat"=> $this->request->getVar('total_seat'),
			"seat_number"=> $this->request->getVar('seat_number'),
			"status"=> $this->request->getVar('status'),
			"total_wait"=> $this->request->getVar('total_wait'),
			"luggage_service"=> $this->request->getVar('luggage_service'),
		);

		if($this->validation->run($validdata, 'fleet'))
		{
			$this->fleetModel->save($data);
			return redirect()->route('index-fleet')->with("success","Data Update");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.fleet") ; 
			$data['title']  =    lang("Localize.fleet_list") ;

			echo view($this->Viewpath.'\fleet/edit',$data);

		}
	}


	public function delete($id)
	{

		$this->fleetModel->delete($id);
		return redirect()->route('index-fleet')->with("fail","Data Deleted");
	
	}
}

<?php

namespace Modules\Fleet\Controllers;

use App\Controllers\BaseController;
use Modules\Fleet\Models\VehicleModel;
use Modules\Fleet\Models\FleetModel;
use Modules\Fleet\Models\Vehicalimage;
use App\Libraries\Rolepermission;

class Vehicle extends BaseController
{
	private $Viewpath;
	protected $vehiclModel;
	protected $fleetModel;
	protected $vImageModel;
	protected $session;
	public function __construct()
    {

        $this->Viewpath = "Modules\Fleet\Views";
		$this->vehiclModel = new VehicleModel();
		$this->fleetModel = new FleetModel();
		$this->vImageModel = new Vehicalimage();
      
    }

	public function new()
	{
		$data['fleet'] = $this->fleetModel->findAll();

		$data['module'] =    lang("Localize.fleet") ; 
		$data['title']  =    lang("Localize.add_vehicle") ;

		$data['pageheading'] = lang("Localize.add_vehicle");

		echo view($this->Viewpath.'\vehical/new',$data);
	}


	public function create()
	{

		$imgpath= array(); 
		$imgbus =  $this->request->getFileMultiple('busimg');
		

		if(!empty($imgbus))
			{
				foreach ($imgbus as $key => $imgvalue) {
					if ($imgvalue->isValid() && ! $imgvalue->hasMoved() ) {
						$busimag	 = $this->imgaeCheck($imgvalue);
						array_push($imgpath,$busimag);
					}
					
				}
			
			}
			
			
		
		$data= array(
			"fleet_id"=> $this->request->getVar('fleet_id'),
			"reg_no"=> $this->request->getVar('reg_no'),
			"engine_no"=> $this->request->getVar('engine_no'),
			"model_no"=> $this->request->getVar('model_no'),
			"chasis_no"=> $this->request->getVar('chasis_no'),
			"woner"=> $this->request->getVar('woner'),
			"woner_mobile"=> $this->request->getVar('woner_mobile'),
			"company"=> $this->request->getVar('company'),
			"status"=> $this->request->getVar('status'),
			"assign"=> $this->request->getVar('assign'),
			
		);

		if($this->validation->run($data, 'vehical'))
		{
			
			$vehicleid =  $this->vehiclModel->insert($data);

            if (!empty($imgpath)) {
                foreach ($imgpath as $key => $imgvalue) {
                    $storedata[ $key] = array(
                                            "vehicle_id"=> $vehicleid,
                                            "img_path"=> $imgvalue,
                                            );
                }


                $this->vImageModel->insertBatch($storedata);
            }
			return redirect()->route('index-vehicle')->with("success","Data Save");
			
		}
		
		
		else
		{
			$data['validation'] = $this->validation;

			$data['module'] =    lang("Localize.fleet") ; 
			$data['title']  =    lang("Localize.add_vehicle") ;

			echo view($this->Viewpath.'\vehical/new',$data);

		}
		
	}

	public function index()
	{
		$data['vehical'] = $this->vehiclModel->select('vehicles.*,fleets.id,fleets.type,vehicles.id as vehicleid')
					->join('fleets', 'fleets.id = vehicles.fleet_id')
					->findAll();
	
		$data['module'] =    lang("Localize.fleet") ; 
		$data['title']  =    lang("Localize.vehicle_list") ;

		$data['pageheading'] = lang("Localize.vehicle_list");

		$rolepermissionLibrary = new Rolepermission();
        $add_data = "add_vehicle";
        $list_data = "vehicle_list";

        $data['add_data'] = $rolepermissionLibrary->create($add_data); 
        $data['edit_data'] = $rolepermissionLibrary->edit($list_data); 
        $data['delete_data'] = $rolepermissionLibrary->delete($list_data);

		echo view($this->Viewpath.'\vehical/index',$data);
	}

	public function edit($id)
	{
		$data['vehical'] = $this->vehiclModel->find($id);
		$data['imagevehical'] = $this->vImageModel->where('vehicle_id',$id)->findAll();
		$data['fleet'] = $this->fleetModel->findAll();

		$data['module'] =    lang("Localize.fleet") ; 
		$data['title']  =    lang("Localize.vehicle_list") ;

		$heading = lang("Localize.edit").' '.lang("Localize.vehicle_list");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\vehical/edit',$data);
	}


	public function update($id)
	{
		
		$imgpath= array(); 
		$imgbus =  $this->request->getFileMultiple('busimgedit');
		

		if($imgbus[0]->isValid())
			{
				$vehicaleImage = $this->vImageModel->where('vehicle_id',$id)->findAll();
				foreach ($vehicaleImage as $key => $vehicalvalue) {
					$this->vImageModel->delete($vehicalvalue->id);
					unlink($vehicalvalue->img_path);
				}
				$this->vImageModel->purgeDeleted();
				
				foreach ($imgbus as $key => $imgvalue) {
					if ($imgvalue->isValid() && ! $imgvalue->hasMoved() ) {
						$busimag	 = $this->imgaeCheck($imgvalue);
						array_push($imgpath,$busimag);
					}
					
				}
			
			}
		

		$validdata= array(
			"fleet_id"=> $this->request->getVar('fleet_id'),
			"reg_no"=> $this->request->getVar('reg_no'),
			"engine_no"=> $this->request->getVar('engine_no'),
			"model_no"=> $this->request->getVar('model_no'),
			"chasis_no"=> $this->request->getVar('chasis_no'),
			"woner"=> $this->request->getVar('woner'),
			"woner_mobile"=> $this->request->getVar('woner_mobile'),
			"company"=> $this->request->getVar('company'),
			"status"=> $this->request->getVar('status'),
			"assign"=> $this->request->getVar('assign'),
		);


		

		$data= array(
			"id"=> $id,
			"fleet_id"=> $this->request->getVar('fleet_id'),
			"reg_no"=> $this->request->getVar('reg_no'),
			"engine_no"=> $this->request->getVar('engine_no'),
			"model_no"=> $this->request->getVar('model_no'),
			"chasis_no"=> $this->request->getVar('chasis_no'),
			"woner"=> $this->request->getVar('woner'),
			"woner_mobile"=> $this->request->getVar('woner_mobile'),
			"company"=> $this->request->getVar('company'),
			"status"=> $this->request->getVar('status'),
			"assign"=> $this->request->getVar('assign'),
		);

		if($this->validation->run($validdata, 'vehical'))
		{
			$this->vehiclModel->save($data);

			if (!empty($imgpath)) {
				foreach ($imgpath as $key => $imgvalue) {
					$storedata[ $key] = array(
											"vehicle_id"=> $id,
											"img_path"=> $imgvalue,
											);
						}
						$this->vImageModel->insertBatch($storedata);
			}

			
			return redirect()->route('index-vehicle')->with("success","Data Save");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;
			$data['fleet'] = $this->fleetModel->findAll();

			$data['module'] =    lang("Localize.fleet") ; 
			$data['title']  =    lang("Localize.vehicle_list") ;
			
			echo view($this->Viewpath.'\vehical/edit',$data);

		}
	}

	public function delete($id)
	{

		$this->vehiclModel->delete($id);
		return redirect()->route('index-vehicle')->with("fail","Data Deleted");
	
	}


	


	public function imgaeCheck($image)
	{
		$newName = $image->getRandomName();
		$path = 'image/bus';
		$image->move($path, $newName);
		return $path.'/'.$newName;
	}


	
}

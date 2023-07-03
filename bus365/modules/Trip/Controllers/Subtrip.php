<?php

namespace Modules\Trip\Controllers;

use App\Controllers\BaseController;


use Modules\Trip\Models\SubtripModel;
use Modules\Location\Models\LocationModel;


class Subtrip extends BaseController
{

	protected $Viewpath;
	protected $subtripModel;
	protected $locationModel;
	protected $db;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Trip\Views";
		$this->subtripModel = new SubtripModel();
		$this->locationModel = new LocationModel();
		$this->db      = \Config\Database::connect();
	
      
    }
	public function index($id)
	{
		$heading = lang("Localize.sub").' '.lang("Localize.trip").' '.lang("Localize.list");
		$data['pageheading'] = $heading;

		$data['subtrip'] = $this->subtripModel->where('trip_id',$id)->where('type','subtrip')->find();
		$data['createTrip'] = $id;
		echo view($this->Viewpath.'\subtrip/index',$data);

		
	}

	public function new($id)
	{
		
		$data['maintripid'] =  $id;
		$data['location'] = $this->locationModel->findAll();

		$heading = lang("Localize.add").' '.lang("Localize.sub").' '.lang("Localize.trip");
		$data['pageheading'] = $heading; 

		echo view($this->Viewpath.'\subtrip/new',$data);
	}

	public function create()

	{	
		$show = $this->request->getVar('show');
		$tripimage = $this->request->getFile('imagesubtrip');
		$tripImagePath = null;
		if ($show == 1) {
			if ($tripimage->isValid() && ! $tripimage->hasMoved() ) {
				$tripImagePath	 = $this->imgaeCheck($tripimage);
				
			}
			else
			{
				return redirect()->back()->withInput()->with('fail', 'image fill reqired');;
			}
		}
		else {
			$show = 0;
		}

		
		
		$data= array(
			"trip_id"=> $this->request->getVar('id'),
			"pick_location_id"=> $this->request->getVar('pick_location_id'),
			"drop_location_id"=> $this->request->getVar('drop_location_id'),
			"adult_fair"=> $this->request->getVar('adult_fair'),
			"child_fair"=> $this->request->getVar('child_fair'),
			"special_fair"=> $this->request->getVar('special_fair'),
			"type"=> 'subtrip',
			"status"=> $this->request->getVar('status'),
			"show"=> $show,
			"imglocation"=> $tripImagePath,
			
		);


		$validdata= array(
			"trip_id"=> $this->request->getVar('id'),			
			"pick_location_id"=> $this->request->getVar('pick_location_id'),
			"drop_location_id"=> $this->request->getVar('drop_location_id'),
			"adult_fair"=> $this->request->getVar('adult_fair'),
			"type"=> 'subtrip',
			"status"=> $this->request->getVar('status'),
			
		);
		if($this->validation->run($validdata, 'subtrip'))
		{
			$this->subtripModel->insert($data);
			$maintripid = $this->request->getVar('id');
			$trip= array();
			array_push($trip,$maintripid);
			return redirect()->route('index-Subtrip',$trip)->with("success","Data Save");
		}
		else
		{
			$heading = lang("Localize.add").' '.lang("Localize.sub").' '.lang("Localize.trip");
			$data['pageheading'] = $heading; 
			$data['maintripid'] =  $this->request->getVar('id');
			$data['location'] = $this->locationModel->findAll();
			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\subtrip/new',$data);
		}

	}




	public function edit($id)
	{
		$data['subtrip'] = $this->subtripModel->find($id);
		$data['location'] = $this->locationModel->findAll();

		$heading = lang("Localize.edit").' '.lang("Localize.sub").' '.lang("Localize.trip");
		$data['pageheading'] = $heading; 
	
		echo view($this->Viewpath.'\subtrip/edit',$data);
	}

	public function update($subtrip_id)
	{

		$show = $this->request->getVar('show');
		$tripimage = $this->request->getFile('imagesubtrip');
		$tripImagePath = $this->request->getVar('imagepath');
		if ($show == 1) {
			if ($tripimage->isValid() && ! $tripimage->hasMoved() ) {
				$tripImagePath	 = $this->imgaeCheck($tripimage);
				
			}

			elseif(empty($tripImagePath))
			{
				return redirect()->back()->withInput()->with('fail', 'image fill reqired');;
			}
		}
		else {
            $show = 0;
        }


		$data= array(
			"id"=> $subtrip_id,
			"trip_id"=> $this->request->getVar('trip_id'),
			"pick_location_id"=> $this->request->getVar('pick_location_id'),
			"drop_location_id"=> $this->request->getVar('drop_location_id'),
			"adult_fair"=> $this->request->getVar('adult_fair'),
			"child_fair"=> $this->request->getVar('child_fair'),
			"special_fair"=> $this->request->getVar('special_fair'),
			"type"=> 'subtrip',
			"status"=> $this->request->getVar('status'),
			"show"=> $show,
			"imglocation"=> $tripImagePath,
			
		);


		$validdata= array(
			"trip_id"=> $this->request->getVar('trip_id'),			
			"pick_location_id"=> $this->request->getVar('pick_location_id'),
			"drop_location_id"=> $this->request->getVar('drop_location_id'),
			"adult_fair"=> $this->request->getVar('adult_fair'),
			"type"=> 'subtrip',
			"status"=> $this->request->getVar('status'),
			
		);



		if($this->validation->run($validdata, 'subtrip'))
		{
			$this->subtripModel->save($data);
			$maintripid = $this->request->getVar('trip_id');
			$trip= array();
			array_push($trip,$maintripid);
			return redirect()->route('index-Subtrip',$trip)->with("success","Data Save");
			
		}
		else
		{

			$heading = lang("Localize.edit").' '.lang("Localize.sub").' '.lang("Localize.trip");
			$data['pageheading'] = $heading;

			$data['subtrip'] = $this->subtripModel->find($subtrip_id);
			$data['location'] = $this->locationModel->findAll();
			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\subtrip/edit',$data);
		}
		
	}

	public function delete($id)
	{
		$mainid = $this->subtripModel->where('id',$id)->where('type','subtrip')->first();
		$this->subtripModel->delete($id);
		$trip= array();
		array_push($trip,$mainid->trip_id);
		return redirect()->route('index-Subtrip',$trip)->with("fail","Data Deleted");
		
	
	}



	public function imgaeCheck($image)
	{
		$newName = $image->getRandomName();
		$path = 'image/subtrip';
		$image->move($path, $newName);
		return $path.'/'.$newName;
	}


}

<?php

namespace Modules\Trip\Controllers\Api;



use App\Controllers\BaseController;
use Modules\Trip\Models\TripModel;
use Modules\Trip\Models\StuffassignModel;
use Modules\Trip\Models\SubtripModel;
use Modules\Trip\Models\PickdropModel;
use Modules\Location\Models\LocationModel;
use Modules\Employee\Models\EmployeeModel;
use Modules\Fleet\Models\FleetModel; 
use Modules\Fleet\Models\VehicleModel; 
use Modules\Schedule\Models\ScheduleModel; 
use CodeIgniter\API\ResponseTrait;

use Modules\Rating\Models\RatingModel;

use Modules\Ticket\Models\TicketModel;

class Trip extends BaseController
{
	protected $Viewpath;
	protected $tripModel;
	protected $subtripModel;
	protected $stuffassignModel;
	protected $locationModel;
	protected $employeeModel;
	protected $fleetTypeModel;
	protected $scheduleeModel;
	protected $vehicleModel;
	protected $pickdropModel;
	protected $db;
	use ResponseTrait;

	protected $ratingModel;

	protected $ticketModel;

	
	public function __construct()
    {

        $this->Viewpath = "Modules\Trip\Views";
		$this->tripModel = new TripModel();
		$this->subtripModel = new SubtripModel();
		$this->stuffassignModel = new StuffassignModel();
		$this->locationModel = new LocationModel();
		$this->employeeModel = new EmployeeModel();
		$this->fleetTypeModel = new FleetModel(); 
		$this->vehicleModel = new VehicleModel(); 
		$this->scheduleeModel = new ScheduleModel(); 
		$this->pickdropModel = new PickdropModel(); 
		$this->db      = \Config\Database::connect();
	
		$this->ratingModel = new RatingModel(); 

		$this->ticketModel = new TicketModel(); 
    }
	

	public function test()
	{
		echo "helo";
	}

	public function getAllTrip()
	{
		$day = $this->request->getVar('journeydate');
		
		$day =date('Y-m-d', strtotime($day));

		$monthcomparedate =  date('Y-m-d', strtotime('+1 month'));

		if ($day > $monthcomparedate ) {
			
			$data = [
				'message' => "No advance booking for this day",
				'status' => "failed",
				'response' => 204,
			];
			return $this->response->setJSON($data);
		}
		
		
		$dayofweek = date('N', strtotime($this->request->getVar('journeydate')));
		$picklocation = $this->request->getVar('pick_location_id');
		$droplocation = $this->request->getVar('drop_location_id');

		
		

		$maintripId = array();
		
		if (empty($picklocation)) {
			$data = [
				'message' => "Please pick a location",
				'status' => "failed",
				'response' => 204,
			];
			return $this->response->setJSON($data);
		}
		if (empty($droplocation)) {
			$data = [
				'message' => "Please pick  a droping point",
				'status' => "failed",
				'response' => 204,
			];
			return $this->response->setJSON($data);
		}
		if (empty($day)) {
			$data = [
				'message' => "Please select your journey date",
				'status' => "failed",
				'response' => 204,
			];
			return $this->response->setJSON($data);
		}
		if (date('Y-m-d')>$day) {
			
			$data = [
				'message' => "No Past Data allow",
				'status' => "failed",
				'response' => 204,
			];
			
			return $this->response->setJSON($data);
		}

		$getdata =  $this->tripModel->select('trips.id')->Where('startdate >',$day)->where('status',1)->orwhere("find_in_set($dayofweek, weekend)")->findAll();
		
		
		foreach ($getdata as $key => $value) {
			array_push($maintripId,(int)$value->id);
		}
		
		if ($getdata) {
			$getMainTripid = array();
			$subtrips =  $this->subtripModel->select('trip_id')->where('pick_location_id',$picklocation)->where('drop_location_id',$droplocation)->whereNotIn('trip_id',$maintripId)->findAll();
			


			foreach ($subtrips as $key => $svalue) {
				array_push($getMainTripid,(int)$svalue->trip_id);
			}
			

			if ($subtrips) {
				$allTripList =  $this->subtripModel->select('trips.id as tripid,trips.*,fleets.*,schedules.*,vehicles.*,subtrips.id as subtripId,subtrips.*')
								->join('trips', 'trips.id = subtrips.trip_id')
								->join('fleets', 'fleets.id = trips.fleet_id')
								->join('schedules', 'schedules.id = trips.schedule_id')
								->join('vehicles', 'vehicles.id = trips.vehicle_id')
								->whereIn('trip_id',$getMainTripid)
								->where('subtrips.status',1)
								->findAll();

							foreach ($allTripList as $tkey => $tripvalue) {

								$totalReview = $this->ratingModel->where('status',1)->where('subtrip_id',$tripvalue->subtripId)->countAllResults();
								$rating = $this->ratingModel->where('status',1)->where('subtrip_id',$tripvalue->subtripId)->select('sum(rating) as totalrating')->first();
								$allTripList[$tkey]->totalreview = $totalReview;
								if (!empty($rating->totalrating)) {
									$avarage = $rating->totalrating / $totalReview;
								}
								else
								{
									$avarage = 0;
								}
								
								$allTripList[$tkey]->rating = number_format($avarage, 1);

								$bookTicket = $this->ticketModel->where('journeydata',$day)->where('subtrip_id',$tripvalue->subtripId)->where('cancel_status',0)->where('refund',0)->findAll();
								$bookTicket = array_sum(array_column($bookTicket,'totalseat'));
								$allTripList[$tkey]->totalbooking = $bookTicket;
								$allTripList[$tkey]->available_seat = (int) $tripvalue->total_seat - $bookTicket;
							}

								$data = [
									'status' => "success",
									'response' => 200,
									'data' => $allTripList,
								];
								
					
								return $this->response->setJSON($data);
			}
			else {

				$data = [
					'message' => "Holiday for all trip No trip found",
					'status' => "failed",
					'response' => 204,
				];
				
				return $this->response->setJSON($data);
				
				
			}
			

			
		}
		else {
			$getMainTripid = array();
			$subtrips =  $this->subtripModel->select('trip_id')->where('pick_location_id',$picklocation)->where('drop_location_id',$droplocation)->findAll();

			foreach ($subtrips as $key => $svalue) {
				array_push($getMainTripid,(int)$svalue->trip_id);
			}
            if ($subtrips) {
               
				$allTripList =  $this->subtripModel->select('trips.id as tripid,trips.*,fleets.*,schedules.*,vehicles.*,subtrips.id as subtripId,subtrips.*')
                            ->join('trips', 'trips.id = subtrips.trip_id')
                            ->join('fleets', 'fleets.id = trips.fleet_id')
                            ->join('schedules', 'schedules.id = trips.schedule_id')
                            ->join('vehicles', 'vehicles.id = trips.vehicle_id')
                            ->whereIn('trip_id', $getMainTripid)
                            ->where('subtrips.status', 1)
                            ->findAll();
                
							foreach ($allTripList as $tkey => $tripvalue) {
								$totalReview = $this->ratingModel->where('status',1)->where('subtrip_id',$tripvalue->subtripId)->countAllResults();
								$rating = $this->ratingModel->where('status',1)->where('subtrip_id',$tripvalue->subtripId)->select('sum(rating) as totalrating')->first();
								$allTripList[$tkey]->totalreview = $totalReview;
								if (!empty($rating->totalrating)) {
									$avarage = $rating->totalrating / $totalReview;
								}
								else
								{
									$avarage = 0;
								}
								
								$allTripList[$tkey]->rating = number_format($avarage, 1);


								$bookTicket = $this->ticketModel->where('journeydata',$day)->where('subtrip_id',$tripvalue->subtripId)->where('cancel_status',0)->where('refund',0)->findAll();
								$bookTicket = array_sum(array_column($bookTicket,'totalseat'));
								$allTripList[$tkey]->totalbooking = $bookTicket;
								$allTripList[$tkey]->available_seat = (int) $tripvalue->total_seat - $bookTicket;
							}


				
				$data = [
					'status' => "success",
					'response' => 200,
					'data' => $allTripList,
				];
				
	
				return $this->response->setJSON($data);
            }

			else {
				$data = [
					'message' => "No trip found for this location",
					'status' => "failed",
					'response' => 204,
				];
				
				return $this->response->setJSON($data);
				
			}
			
		}
		
		
	}


	public function showsubtrip()
	{
		$url = base_url();
		$allFronSubTrip =  $this->subtripModel->select('trips.id as tripid,trips.*,schedules.*,subtrips.id as subtripId,subtrips.*')
								->join('trips', 'trips.id = subtrips.trip_id')
								->join('schedules', 'schedules.id = trips.schedule_id')
								->where('subtrips.status',1)
								->where('subtrips.show',1)
								->findAll();

		if ($allFronSubTrip) {
			foreach ($allFronSubTrip as $key => $value) {
				$value->imglocation = $url.'/public/'.$value->imglocation;
			}

			$data = [
				'status' => "success",
				'response' => 200,
				'data' => $allFronSubTrip,
			];

			return $this->response->setJSON($data);
			
		}
		else
		{
			$data = [
				'message' => "No trip found for this location",
				'status' => "failed",
				'response' => 204,
			];
			
			return $this->response->setJSON($data);
		}						
			

								

	}


	public function boarding($id)
	{
		$boarding =  $this->pickdropModel->where('type',1)->where('trip_id',$id)->findAll();

		if ($boarding) {
			
			$data = [
				'status' => "success",
				'response' => 200,
				'data' => $boarding,
			];

			return $this->response->setJSON($data);
			
		}
		else
		{
			$data = [
				'message' => "No Boarding Pint Found",
				'status' => "failed",
				'response' => 204,
			];
			
			return $this->response->setJSON($data);
		}

	}

	public function dropping($id)
	{
		$boarding =  $this->pickdropModel->where('type',0)->where('trip_id',$id)->findAll();

		if ($boarding) {
			
			$data = [
				'status' => "success",
				'response' => 200,
				'data' => $boarding,
			];

			return $this->response->setJSON($data);
			
		}
		else
		{
			$data = [
				'message' => "No Dropping Pint Found",
				'status' => "failed",
				'response' => 204,
			];
			
			return $this->response->setJSON($data);
		}

	}

	


}

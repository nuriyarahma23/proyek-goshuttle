<?php

namespace Modules\Ticket\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Employee\Models\EmployeeModel;
use Modules\Fleet\Models\FleetModel;
use Modules\Fleet\Models\VehicleModel;
use Modules\Location\Models\LocationModel;
use Modules\Location\Models\StandModel;
use Modules\Paymethod\Models\PaymethodModel;
use Modules\Schedule\Models\ScheduleModel;
use Modules\Tax\Models\TaxModel;
use Modules\Ticket\Models\JourneylistModel;
use Modules\Ticket\Models\PartialpaidModel;
use Modules\Ticket\Models\TicketModel;
use Modules\Ticket\Models\MaxtimeModel;
use Modules\Trip\Models\FacilityModel;
use Modules\Trip\Models\PickdropModel;
use Modules\Trip\Models\StuffassignModel;
use Modules\Trip\Models\SubtripModel;
use Modules\Trip\Models\TripModel;
use Modules\User\Models\UserDetailModel;
use Modules\User\Models\UserModel;

class Journeylist extends BaseController
{
	protected $Viewpath;
    protected $ticketModel;
    protected $tripModel;
    protected $subtripModel;
    protected $stuffassignModel;
    protected $locationModel;
    protected $employeeModel;
    protected $fleetTypeModel;
    protected $scheduleeModel;
    protected $vehicleModel;
    protected $standModel;
    protected $picdropModel;
    protected $facilitypModel;
    protected $taxModel;
    protected $db;
    protected $paymethodModel;
    protected $userModel;
    protected $userDetailModel;
    protected $journeylistModel;
    protected $partialpaidModel;
    protected $maxtimeModel;

	public function __construct()
    {

        $this->Viewpath = "Modules\Ticket\Views";
        $this->ticketModel = new TicketModel();
        $this->tripModel = new TripModel();
        $this->subtripModel = new SubtripModel();
        $this->stuffassignModel = new StuffassignModel();
        $this->locationModel = new LocationModel();
        $this->employeeModel = new EmployeeModel();
        $this->fleetTypeModel = new FleetModel();
        $this->vehicleModel = new VehicleModel();
        $this->scheduleeModel = new ScheduleModel();
        $this->standModel = new StandModel();
        $this->picdropModel = new PickdropModel();
        $this->facilitypModel = new FacilityModel();
        $this->taxModel = new TaxModel();
        $this->db = \Config\Database::connect();
        $this->paymethodModel = new PaymethodModel();

        $this->userModel = new UserModel();
        $this->userDetailModel = new UserDetailModel();

        $this->journeylistModel = new JourneylistModel();
        $this->partialpaidModel = new PartialpaidModel();

        $this->maxtimeModel = new MaxtimeModel();

    }


	function new () {
        $data['pick_location_id'] = null;
        $data['drop_location_id'] = null;
        $data['filterjourneydate'] = null;
        $data['filterreturndate'] = null;
        $data['fleet_id'] = null;

        $data['filterpath'] = $this->Viewpath;
        $data['location'] = $this->locationModel->findAll();
        $data['fleet_type'] = $this->fleetTypeModel->findAll();

        $data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.journey_list") ;

        $data['pageheading'] = lang("Localize.journey_list");

        echo view($this->Viewpath . '\journeylist/new', $data);
    }

	public function findtrip()
    {
        $pick_location_id = $this->request->getVar('pick_location_id');
        $drop_location_id = $this->request->getVar('drop_location_id');
        $filterjourneydate = $this->request->getVar('filterjourneylistdate');
        $fleet_id = $this->request->getVar('fleet_id');

        $data['pick_location_id'] = $pick_location_id;
        $data['drop_location_id'] = $drop_location_id;
        $data['filterjourneydate'] = $filterjourneydate;
      
        $data['fleet_id'] = $fleet_id;

        $data['filterpath'] = $this->Viewpath;
        $data['location'] = $this->locationModel->findAll();
        $data['fleet_type'] = $this->fleetTypeModel->findAll();
        $data['alltriplist'] = $this->getAllTrip($pick_location_id, $drop_location_id, $filterjourneydate, $fleet_id);

        $data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.journey_list") ;

        $data['pageheading'] = lang("Localize.journey_list");

        echo view($this->Viewpath . '\journeylist/index', $data);
    }


	public function getAllTrip($pick_location_id, $drop_location_id, $filterjourneydate, $fleet_id)
    {
        $day = $filterjourneydate;
		$day =date('Y-m-d', strtotime($day));

        $dayofweek = date('N', strtotime($filterjourneydate));
        $picklocation = $pick_location_id;
        $droplocation = $drop_location_id;
        $maintripId = array();

        $getdata = $this->tripModel->select('trips.id')->Where('startdate >',$day)->where('status', 1)->orwhere("find_in_set($dayofweek, weekend)")->findAll();
	
	

        foreach ($getdata as $key => $value) {
            array_push($maintripId, (int) $value->id);
        }

        if ($getdata) {
            $getMainTripid = array();
            $subtrips = $this->subtripModel->select('trip_id')->where('pick_location_id', $picklocation)->where('drop_location_id', $droplocation)->whereNotIn('trip_id', $maintripId)->findAll();
			
            foreach ($subtrips as $key => $svalue) {
                array_push($getMainTripid, (int) $svalue->trip_id);
            }

            if ($subtrips) {

                if (empty($fleet_id)) {

                    $allTripList = $this->subtripModel->select('trips.id as tripid,trips.*,fleets.*,schedules.*,vehicles.*,subtrips.id as subtripId,subtrips.*')
                        ->join('trips', 'trips.id = subtrips.trip_id')
                        ->join('fleets', 'fleets.id = trips.fleet_id')
                        ->join('schedules', 'schedules.id = trips.schedule_id')
                        ->join('vehicles', 'vehicles.id = trips.vehicle_id')
                        ->whereIn('trip_id', $getMainTripid)
                        ->where('subtrips.status', 1)
                        ->findAll();
                    return $allTripList;
                } else {
                    $allTripList = $this->subtripModel->select('trips.id as tripid,trips.*,fleets.*,schedules.*,vehicles.*,subtrips.id as subtripId,subtrips.*')
                        ->join('trips', 'trips.id = subtrips.trip_id')
                        ->join('fleets', 'fleets.id = trips.fleet_id')
                        ->join('schedules', 'schedules.id = trips.schedule_id')
                        ->join('vehicles', 'vehicles.id = trips.vehicle_id')
                        ->whereIn('trip_id', $getMainTripid)
                        ->where('subtrips.status', 1)
                        ->where('trips.fleet_id', $fleet_id)
                        ->findAll();
                    return $allTripList;
                }

            } else {

                $allTripList = null;

                return $allTripList;

            }

        } else {

            $getMainTripid = array();
            $subtrips = $this->subtripModel->select('trip_id')->where('pick_location_id', $picklocation)->where('drop_location_id', $droplocation)->findAll();
			
            foreach ($subtrips as $key => $svalue) {
                array_push($getMainTripid, (int) $svalue->trip_id);
            }
            if ($subtrips) {

                if (empty($fleet_id)) {

                    $subtrips = $this->subtripModel->select('trips.id as tripid,trips.*,fleets.*,schedules.*,vehicles.*,subtrips.id as subtripId,subtrips.*')
                        ->join('trips', 'trips.id = subtrips.trip_id')
                        ->join('fleets', 'fleets.id = trips.fleet_id')
                        ->join('schedules', 'schedules.id = trips.schedule_id')
                        ->join('vehicles', 'vehicles.id = trips.vehicle_id')
                        ->whereIn('trip_id', $getMainTripid)
                        ->where('subtrips.status', 1)
                        ->findAll();

                    return $subtrips;
                } else {
                    $subtrips = $this->subtripModel->select('trips.id as tripid,trips.*,fleets.*,schedules.*,vehicles.*,subtrips.id as subtripId,subtrips.*')
                        ->join('trips', 'trips.id = subtrips.trip_id')
                        ->join('fleets', 'fleets.id = trips.fleet_id')
                        ->join('schedules', 'schedules.id = trips.schedule_id')
                        ->join('vehicles', 'vehicles.id = trips.vehicle_id')
                        ->whereIn('trip_id', $getMainTripid)
                        ->where('subtrips.status', 1)
                        ->where('trips.fleet_id', $fleet_id)
                        ->findAll();

                    return $subtrips;
                }

            } else {

                $subtrips = null;
                return $subtrips;
            }

        }

    }

    public function getJourneylistData($tripid,$date,$print)
    {
        $journeyList = $this->journeylistModel->where('trip_id',$tripid)->where('journeydate',$date)->findAll();
        foreach ( $journeyList as $key => $value) {
            
            $data['ticket'] =   $this->ticketModel->where('booking_id',$value->booking_id)->first();
         
          $value->seatnumbers =  $data['ticket']->seatnumber;
        }

        $data['pageheading'] = lang("Localize.journey_list");
        
       
        // show section copu
        $namefacility = array();
        $stopagepoint = array();
		$start = null;
		$destination = null;

		
		
		$gettripdata =  $this->tripModel->find($tripid);

		
        $travelartripdata = $this->picdropModel
							->select('pickdrops.*,stands.*,pickdrops.id as pickdropid')
							->join('stands','stands.id = pickdrops.stand_id')
                            ->where('trip_id',$tripid)
							->findAll();
		
		$locationModel = $this->locationModel->findAll();

        foreach ($journeyList as $key => $picdropvalue) {
            
            foreach ($locationModel as $key => $locvalue) {
                if ($locvalue->id == $picdropvalue->pick_location_id) {
                    $picdropvalue->pick_loc_name = $locvalue->name;
                }
                if ($locvalue->id == $picdropvalue->drop_location_id) {
                    $picdropvalue->drop_loc_name = $locvalue->name;
                }
            }
        }

       
        foreach ($journeyList as $key => $standpicdropvalue) {

            foreach ($travelartripdata as $key => $picdropstandvalue) {
                
               
                if ($picdropstandvalue->pickdropid == $standpicdropvalue->pick_stand_id) {
                    
                    $standpicdropvalue->picstand = $picdropstandvalue->name.'('.$picdropstandvalue->time.')';
                   
                }
               
                if ($picdropstandvalue->pickdropid == $standpicdropvalue->drop_stand_id) {
                    
                    $standpicdropvalue->dropstand = $picdropstandvalue->name.'('.$picdropstandvalue->time.')';
                }
            }

        }



        
		foreach ($locationModel as $key => $locvalue) {
			
			if ($locvalue->id == $gettripdata->pick_location_id ) {
				$start = $locvalue->name;
			}
			if ($locvalue->id == $gettripdata->drop_location_id ) {
				$destination = $locvalue->name;
			}

		}

        
		$data['from'] = $start;
		$data['to'] = $destination;

       
		

		$data['schedule'] = $this->scheduleeModel->find($gettripdata->schedule_id);
		
		$getfacility = $gettripdata->facility;

        if (!empty($getfacility)) {

            $facility = explode(",",$getfacility);
		    foreach ($facility as $key => $facilityvalue) {
			$facilityname =  $this->facilitypModel->find($facilityvalue);
			array_push($namefacility,$facilityname->name);
		    }
            $data['facility'] = implode(", ",$namefacility);
        }

        else{
            $data['facility'] = "No facility";
        }
		
		
		
		

        $getstopagepoint = $gettripdata->stoppage;

        if (!empty($getstopagepoint)) {
                $getstopagepoint = explode(",",$getstopagepoint);
            foreach ($getstopagepoint as $key => $stopvalue) {
                $stopname =  $this->locationModel->find($stopvalue);
                array_push($stopagepoint,$stopname->name);
            }
             $data['stopagepoint'] = implode(", ",$stopagepoint);
        } 

        else

        {
            $data['stopagepoint'] = "No Stoppage Point";
        }
        

        $drivername =  array();
        $assistance =  array();
        $driver =  $this->stuffassignModel->select('stuffassigns.*,employees.*')
                                            ->join('employees','employees.id = stuffassigns.employee_id')
                                            ->where('trip_id',$tripid)
                                            // ->where('employee_type',1)
                                            ->findAll();
        foreach ($driver as $key => $dvalue) {
            if ($dvalue->employee_type == 1) {
                array_push($drivername,$dvalue->first_name.' '.$dvalue->last_name);
            }
            else
            {
                array_push($assistance,$dvalue->first_name.' '.$dvalue->last_name);
            }
            
        }
		
        $data['drivername'] = implode(", ",$drivername);
        $data['assistance'] = implode(", ",$assistance);


		$data['pageheading'] = "Journey List";
		$data['pickdrop'] = $this->picdropModel
							->select('pickdrops.*,stands.*,pickdrops.id as pickdropid')
							->join('stands','stands.id = pickdrops.stand_id')
							->findAll();
        $data['journeydate'] = 	 $date;	
        $data['journeylist'] = 	$journeyList;	
        $data['tripId'] = $tripid;	
        $data['date'] = $date;	
        
        if ($print == 0) {

            $data['module'] =    lang("Localize.ticket_booking") ; 
		    $data['title']  =    lang("Localize.journey_list") ;

            echo view($this->Viewpath.'\journeylist/show',$data);
        }
         if ($print == 1) {
            echo view($this->Viewpath.'\journeylist/print',$data);
         } 
            
        
        
	    
        // show section copu


    }
}

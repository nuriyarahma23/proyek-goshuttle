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
use Modules\Role\Models\RoleModel;
use Modules\Agent\Models\AgentModel;
use Modules\Agent\Models\Agentcommission;
use Modules\Website\Models\WebsettingModel;
use Modules\Coupon\Models\CoupondiscountModel;
use Modules\Coupon\Models\CouponModel;
use PhpParser\Node\Expr\Cast\Double;


use App\Libraries\Rolepermission;

use App\Libraries\Ticketmail;


class Ticket extends BaseController
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
    protected $roleModel;
    protected $agentModel;
    protected $agentCommissionModel;

    protected $websettingModel;
    protected $couponModel;
    protected $coupondiscountModel;

    use ResponseTrait;

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
        $this->roleModel = new RoleModel();

        $this->agentModel = new AgentModel();
        $this->agentCommissionModel = new Agentcommission();

        $this->websettingModel = new WebsettingModel();

        $this->coupondiscountModel = new CoupondiscountModel();
        $this->couponModel = new CouponModel();

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
		$data['title']  =    lang("Localize.book_ticket") ;

        $heading = lang("Localize.search").' '.lang("Localize.ticket");
		$data['pageheading'] = $heading;

        echo view($this->Viewpath . '\ticket/new', $data);

    }

    public function findtrip()
    {
        $websetting	= $this->websettingModel->first();
     

        $pick_location_id = $this->request->getVar('pick_location_id');
        $drop_location_id = $this->request->getVar('drop_location_id');
        $filterjourneydate = $this->request->getVar('filterjourneydate');
        $filterreturndate = $this->request->getVar('filterreturndate');
        $fleet_id = $this->request->getVar('fleet_id');

        $monthcomparedate =  date('Y-m-d', strtotime('+1 month'));

		if ($filterjourneydate > $monthcomparedate ) {
			
			return redirect()->route('new-ticket')->with("fail","No advance booking for this day");
		}

        $data['pick_location_id'] = $pick_location_id;
        $data['drop_location_id'] = $drop_location_id;
        $data['filterjourneydate'] = $filterjourneydate;
        $data['filterreturndate'] = $filterreturndate;
        $data['fleet_id'] = $fleet_id;

        $data['filterpath'] = $this->Viewpath;
        $data['location'] = $this->locationModel->findAll();
        $data['fleet_type'] = $this->fleetTypeModel->findAll();
        $data['alltriplist'] = $this->getAllTrip($pick_location_id, $drop_location_id, $filterjourneydate, $filterreturndate, $fleet_id);

        

        $data['taxtype'] = $websetting->tax_type;

        $data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.book_ticket") ;

        $heading = lang("Localize.book").' '.lang("Localize.ticket");
		$data['pageheading'] = $heading;

        echo view($this->Viewpath . '\ticket/index', $data);
    }

    public function getAllTrip($pick_location_id, $drop_location_id, $filterjourneydate, $filterreturndate, $fleet_id)
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

    public function getSingleTrip($subTripId,$journeydate)
    {
        $maintripid = $this->subtripModel->find($subTripId);
        $maxtime = $this->maxtimeModel->first();

        $maxtime =  60* (int)$maxtime->maxtime;
        
        $bookseat = array();

        
        $journeydate = $journeydate;
        $getData = $this->ticketModel->where('trip_id',$maintripid->trip_id)->where('journeydata',$journeydate)->where('payment_status',"unpaid")->where('cancel_status',0)->where('refund',0)->findAll();
       
        foreach ($getData as $key => $delvalue) {
            $cratetime = strtotime($delvalue->created_at);
            $timenow = strtotime("now");
            if(($timenow - $cratetime)>  $maxtime)
            {
                $this->ticketModel->where('id',$delvalue->id)->set(['cancel_status' => 1])->update();
                $bookingId =   $this->ticketModel->find($delvalue->id);
                $this->journeylistModel->where('booking_id',  $bookingId->booking_id)->delete();
            }
           
        }

        $getseat = $this->ticketModel->where('trip_id',$maintripid->trip_id)->where('journeydata',$journeydate)->where('cancel_status',0)->where('refund',0)->findAll();

        foreach ($getseat as $key => $svalue) {
           
            array_push($bookseat,$svalue->seatnumber);
        }
        $bookseat = implode(",",$bookseat);
       
        $pickdrop = $this->picdropModel->select('pickdrops.id as pickdropid,pickdrops.*,stands.*')
            ->join('stands', 'stands.id = pickdrops.stand_id')
            ->where('trip_id', $maintripid->trip_id)
            ->findAll();

        $stands = $this->standModel->findAll();

        $tax = $this->taxModel->where('status', 1)->findAll();

        $subtrips = $this->subtripModel->select('trips.id as tripid,trips.*,fleets.*,schedules.*,vehicles.*,subtrips.id as subtripId,subtrips.*')
            ->join('trips', 'trips.id = subtrips.trip_id')
            ->join('fleets', 'fleets.id = trips.fleet_id')
            ->join('schedules', 'schedules.id = trips.schedule_id')
            ->join('vehicles', 'vehicles.id = trips.vehicle_id')
            ->where('subtrips.status', 1)
            ->where('subtrips.id', $subTripId)
            ->findAll();

        $data = [
            'status' => "success",
            'response' => 200,
            'subtrips' => json_encode($subtrips),
            'pickdrop' => json_encode($pickdrop),
            'tax' => json_encode($tax),
            'bookseat' => json_encode($bookseat),

        ];

        return $this->response->setJSON($data);
    }

    public function booking()
    {
        $data['filterpath'] = $this->Viewpath;
        $builder = $this->db->table('country');
        $query = $builder->get();
        $data['country'] = $query->getResult();

        $data['subtripId'] = $this->request->getVar('subtripId');
        $data['seatnumbers'] = $this->request->getVar('seatnumbers');

        $array = explode(",", $data['seatnumbers']);

        $daynamic = count($array);
        $data['dynamicfield'] = $daynamic - 1;

        $data['totalseat'] = $daynamic;

        $data['journeydate'] = $this->request->getVar('journeydate');

        $data['aseat'] = $this->request->getVar('aseat');
        $data['spseat'] = $this->request->getVar('spseat');
        $data['cseat'] = $this->request->getVar('cseat');

        $data['totalprice'] = $this->request->getVar('totalprice');
        $data['tax'] = $this->request->getVar('tax');
        $data['grandtotal'] = $this->request->getVar('grandtotal');

        $data['pickstand'] = $this->request->getVar('pickstand');
        $data['dropstand'] = $this->request->getVar('dropstand');

        
        $data['paymethod'] = $this->paymethodModel->where('status', 1)->findAll();

        $data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.ticket_list") ;

        $heading = lang("Localize.book").' '.lang("Localize.ticket");
		$data['pageheading'] = $heading;

        echo view($this->Viewpath . '\ticket/booking', $data);

    }

    public function create()
    {
        $ticketmailLibrary = new Ticketmail();

        $rand = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 1, 8);
        $rand = "TB".$rand;
        $maitripid = null;
        $subtripid = null;
        $piclocation = null;
        $droplocation = null;
        $vehicles_id = null;
        $backUserId = $this->session->get('user_id');
        $subTripId = $this->request->getVar('subtripId');
        $payment_detail_rocord = $this->request->getVar('paydetail');

        $subtrips = $this->subtripModel->select('trips.id as tripid,trips.*,fleets.*,schedules.*,vehicles.*,subtrips.id as subtripId,subtrips.*')
            ->join('trips', 'trips.id = subtrips.trip_id')
            ->join('fleets', 'fleets.id = trips.fleet_id')
            ->join('schedules', 'schedules.id = trips.schedule_id')
            ->join('vehicles', 'vehicles.id = trips.vehicle_id')
            ->where('subtrips.status', 1)
            ->where('subtrips.id', $subTripId)
            ->findAll();

        foreach ($subtrips as $key => $value) {
            $maitripid = $value->tripid;
            $subtripid = $value->id;
            $piclocation = $value->pick_location_id;
            $droplocation = $value->drop_location_id;
            $vehicles_id = $value->vehicle_id;
        }

        $login_email = $this->request->getVar('login_email');
        $login_mobile = $this->request->getVar('login_mobile');

        $userid = $this->userCheck($login_email, $login_mobile);
       
        $loginUserId = $this->session->get('user_id');

        $bookUserId = $this->session->get('role_id');
        
        $roelinfo = $this->roleModel->find($bookUserId);

        $bookUserType = $roelinfo->name;

        $ticketbooking = array(
            "booking_id" => $rand,
            "trip_id" => $maitripid,
            "subtrip_id" => $subtripid,
            "passanger_id" => $userid,
            "pick_location_id" => $piclocation,
            "drop_location_id" => $droplocation,
            "pick_stand_id" => $this->request->getVar('pickstand'),
            "drop_stand_id" => $this->request->getVar('dropstand'),
            "price" => $this->request->getVar('totalprice'),
            "discount" => $this->request->getVar('discount'),
            "totaltax" => $this->request->getVar('tax'),
            "paidamount" => $this->request->getVar('grandtotal'),
            "adult" => $this->request->getVar('aseat'),
            "chield" => $this->request->getVar('cseat'),
            "special" => $this->request->getVar('spseat'),
            "refund" => 0,
            "bookby_user_id" =>  $loginUserId,
            "bookby_user_type" => $bookUserType,
            "journeydata" => $this->request->getVar('journeydate'),
            "pay_type_id" => $this->request->getVar('pay_method'),
            "payment_status" => $this->request->getVar('payment_status'),
            "payment_detail" => $this->request->getVar('paydetail'),
            "vehicle_id" => $vehicles_id,
            "cancel_status" => 0,

            "offerer" => $this->request->getVar('offerer'),
            // "offerer" => 0,
            "seatnumber" => $this->request->getVar('seatnumbers'),
            "totalseat" => $this->request->getVar('totalseat'),

        );

        $validTicketbooking = array(

            "booking_id" => $rand,
            "trip_id" => $maitripid,
            "subtrip_id" => $subtripid,
            "passanger_id" => $userid,

            "pick_location_id" => $piclocation,
            "drop_location_id" => $droplocation,
            "pick_stand_id" => $this->request->getVar('pickstand'),
            "drop_stand_id" => $this->request->getVar('dropstand'),

            "price" => $this->request->getVar('totalprice'),
            "paidamount" => $this->request->getVar('grandtotal'),
            "seatnumber" => $this->request->getVar('seatnumbers'),
            "totalseat" => $this->request->getVar('totalseat'),
            "bookby_user_id" => 1,
            "journeydata" => $this->request->getVar('journeydate'),
            "pay_type_id" => $this->request->getVar('pay_method'),
            "payment_status" => $this->request->getVar('payment_status'),
            "vehicle_id" => $vehicles_id,

        );
            
        if ($this->validation->run($validTicketbooking, 'ticket')) {
            $this->db->transStart();
            $paymentStatus = $this->request->getVar('payment_status');

            if($paymentStatus == "unpaid")
            {
                $paidamount = 0;
            }
            if($paymentStatus == "paid")
            {
                $paidamount = $this->request->getVar('grandtotal');
            }
            if($paymentStatus == "partial")
            {
                $paidamount = $this->request->getVar('partialpay');
            }


            $partialPaid = array(
                "booking_id" => $rand,
                "trip_id" => $maitripid,
                "subtrip_id" => $subtripid,
                "passanger_id" => $userid,
                "paidamount" => $paidamount,
                "pay_type_id" => $this->request->getVar('pay_method'),
              );
            $paidpartial = array(
                "booking_id" => $rand,
                "trip_id" => $maitripid,
                "subtrip_id" => $subtripid,
                "passanger_id" => $userid,
                "paidamount" => $paidamount,
                "pay_type_id" => $this->request->getVar('pay_method'),
                "payment_detail" => $this->request->getVar('paydetail'),
             );

            $this->ticketModel->insert($ticketbooking);
           

            if ($this->validation->run($partialPaid, 'partialpay')) {

                $this->partialpaidModel->insert($paidpartial);

                $pick_stand_id = $this->request->getVar('pickstand');
                $drop_stand_id = $this->request->getVar('dropstand');

                $journeylist = $this->journeylist($rand,$userid,$maitripid, $subtripid,$piclocation,$droplocation,$pick_stand_id,$drop_stand_id);

                $userRole = $this->session->get('role_id');
                
              
               
                if (($userRole == 2) && ($paymentStatus != "unpaid")) {
                    $totalprice =  $paidamount;
                    $type = "income";
                    $message = "For Ticket Booking";
                   
                    $agentIncome = agentIncomeCommission($backUserId,$totalprice,$rand,$subtripid,$userid,$message);

                    $agentTotalIncome =   agentTotal($backUserId,$totalprice,$rand,$type,$payment_detail_rocord);

                    
                   
                  }
               
            }

            if($paymentStatus != "unpaid")
            {
                $paymethod_id = $this->request->getVar('pay_method');
                $payDetail = $this->request->getVar('paydetail');
                $type = "income";
                $detail = "Ticket Booking (".$rand.") ";
                accoutTranjection($type,$detail,$paidamount,$backUserId);
                paymethodTeanjection($rand,$paymethod_id,$paidamount,$payDetail,$maitripid,$subtripid,$backUserId);

                $couponcode = $this->request->getVar('offerer');

                if(!empty($couponcode))
                {
                    $validDetail = $this->couponModel->where('code',$couponcode)->findAll();

                   
                    $coupondetail = array(
                        "code" => $couponcode,
                        "coupon_id" =>$validDetail[0]->id,
                        "booking_id" => $rand,
                        "subtrip_id" => $subtripid,
                        "amount" => $validDetail[0]->discount,
                       
                     );

                     $this->coupondiscountModel->insert($coupondetail);

                }

            }

            

            $this->db->transComplete();

            $emaildata = $ticketmailLibrary->getticketEmailData($rand);

            $status = sendTicket($login_email,$emaildata );

            if ($status == true) {
                return redirect()->route('allbookinglist-ticket')->with("success", "Ticket Booking");
            } else {
               print_r($status);
            }
            

           

        }

       
        
        else {

            $data['filterpath'] = $this->Viewpath;
            $builder = $this->db->table('country');
            $query = $builder->get();
            $data['country'] = $query->getResult();

            $data['subtripId'] = $subtripid;
            $data['seatnumbers'] = $this->request->getVar('seatnumbers');

            $array = explode(",", $data['seatnumbers']);

            $daynamic = count($array);
            $data['dynamicfield'] = $daynamic - 1;

            $data['totalseat'] = $daynamic;

            $data['journeydate'] = $this->request->getVar('journeydate');

            $data['aseat'] = $this->request->getVar('aseat');
            $data['spseat'] = $this->request->getVar('spseat');
            $data['cseat'] = $this->request->getVar('cseat');

            $data['totalprice'] = $this->request->getVar('totalprice');
            $data['tax'] = $this->request->getVar('tax');
            $data['grandtotal'] = $this->request->getVar('grandtotal');

            $data['pickstand'] = $this->request->getVar('pickstand');
            $data['dropstand'] = $this->request->getVar('dropstand');

            $data['paymethod'] = $this->paymethodModel->where('status', 1)->findAll();
            $data['validation'] = $this->validation;

            $data['module'] =    lang("Localize.book_ticket") ; 
		    $data['title']  =    lang("Localize.ticket_list") ;

            echo view($this->Viewpath . '\ticket/booking', $data);

        }

    }

    public function userCheck($login_email, $login_mobile)
    {
        $evalue = $this->userModel->where('login_email', $login_email)->findAll();
        $mvalue = $this->userModel->where('login_mobile', $login_mobile)->findAll();
        $userid = null;
        if (!empty($evalue) || !empty($mvalue)) {

            if ($evalue) {
                foreach ($evalue as $key => $mobilevalue) {
                    $userid = $mobilevalue->id;
                }
            }
            if ($mvalue) {
                foreach ($mvalue as $key => $emailvalue) {
                    $userid = $emailvalue->id;
                }
            }

            return $userid;

        } else {

           
            $inputPass = "12345";
            $password = password_hash($inputPass,PASSWORD_DEFAULT);
            $bytes = random_bytes(5);
            $slug = bin2hex($bytes);
            $role_id = 3;
            $status = 1;

            $userData = array(
                "login_email" => $login_email,
                "login_mobile" => $login_mobile,
                "password" => $password,
                "slug" => $slug,
                "role_id" => $role_id,
                "status" => $status,
            );

            if ($this->validation->run($userData, 'user')) {
                $this->db->transStart();

                $userid = $this->userModel->insert($userData);

                $validdata = array(
                    "user_id" => $userid,
                    "first_name" => $this->request->getVar('first_name'),
                    "last_name" => $this->request->getVar('last_name'),
                    "id_type" => $this->request->getVar('id_type'),
                    "id_number" => $this->request->getVar('id_number'),
                    "country_id" => $this->request->getVar('country_id'),
                );

                if ($this->validation->run($validdata, 'userDetail')) {
                    $data = array(
                        "user_id" => $userid,
                        "first_name" => $this->request->getVar('first_name'),
                        "last_name" => $this->request->getVar('last_name'),
                        "id_type" => $this->request->getVar('id_type'),
                        "country_id" => $this->request->getVar('country_id'),
                        "id_number" => $this->request->getVar('id_number'),
                        "address" => $this->request->getVar('address'),
                        "city" => $this->request->getVar('city'),
                        "zip_code" => $this->request->getVar('zip_code'),

                    );

                    $this->userDetailModel->insert($data);

                    $this->db->transComplete();

                }
     
            }

            return $userid;

        }

    }

    public function journeylist($rand,$userid,$maitripid, $subtripid,$piclocation,$droplocation,$pick_stand_id,$drop_stand_id)
    {
        $journeydate = date("Y-m-d", strtotime($this->request->getVar('journeydate')));
       $joruneylistid = null;

        $mainpassanger = array(
            "booking_id" => $rand,
            "trip_id" => $maitripid,
            "subtrip_id" => $subtripid,
            "pick_location_id" => $piclocation,
            "drop_location_id" => $droplocation,
            "pick_stand_id" => $pick_stand_id,
            "drop_stand_id" => $drop_stand_id,
            "first_name" => $this->request->getVar('first_name'),
            "last_name" => $this->request->getVar('last_name'),
            "phone"=>$this->request->getVar('login_mobile'),
            "journeydate"=> $journeydate,
            "id_number" => $this->request->getVar('id_number'),
         );

         if ($this->validation->run($mainpassanger, 'journeylist')) {

            $joruneylistid =$this->journeylistModel->insert($mainpassanger);
         }

        

         $newPassangerFName = $this->request->getVar('first_name_new');
         $newPassangerLName = $this->request->getVar('last_name_new');
         $newPassangerMobile = $this->request->getVar('login_mobile_new');
         $newPassangerNidNumber = $this->request->getVar('id_number_new');

         if (!empty($newPassangerFName)) {
             foreach ($newPassangerFName as $nkey => $newpassanger) {
                 $newpassangerlist[$nkey] = array(

                "booking_id" => $rand,
                "trip_id" => $maitripid,
                "subtrip_id" => $subtripid,
                "pick_location_id" => $piclocation,
                "drop_location_id" => $droplocation,
                "pick_stand_id" => $pick_stand_id,
                "drop_stand_id" => $drop_stand_id,
                "first_name" => $newPassangerFName[$nkey],
                "last_name"=> $newPassangerLName[$nkey],
                "phone"=>$newPassangerMobile[$nkey],
                "journeydate"=> $journeydate,
                "id_number"=> $newPassangerNidNumber[$nkey],
                
            );

            }

        

             $this->journeylistModel->insertBatch($newpassangerlist);
         }


        return   $joruneylistid;

    }
   

    public function allbookinglist()
    {
        $rolepermissionLibrary = new Rolepermission();
        $refund_action = "refund_list";
        $cancel_action = "cancel_list";

        $data['refund_create'] = $rolepermissionLibrary->create($refund_action); 
        $data['cancel_create'] = $rolepermissionLibrary->create($cancel_action); 

        $pickdrops =  $this->picdropModel->select('stands.id as standId,stands.*,pickdrops.*')
            ->join('stands', 'stands.id = pickdrops.stand_id')
            ->findAll();
       

        $data['ticket'] = $this->filterBooking();
        $data['location'] =  $this->locationModel->findAll();
        $data['pickdropstand'] =  $pickdrops;

      
        
        $data['paymethod'] = $this->paymethodModel->where('status', 1)->findAll();

        $data['module'] =    lang("Localize.ticket_booking") ; 
		$data['title']  =    lang("Localize.ticket_list") ;

        
		$data['pageheading'] = lang("Localize.ticket_list") ;

        echo view($this->Viewpath . '\ticket/bookinglist', $data);
    }

    public function filterBooking()
    {
        $userRole = $this->session->get('role_id');
        $userId = $this->session->get('user_id');
        
        if ($userRole == 1) {
            
           
        }
        else
        {

           $agentDetail = $this->agentModel->where('user_id', $userId)->first();

            $this->ticketModel->where('bookby_user_id', $userId);
            $this->ticketModel->orwhere('pick_location_id', $agentDetail->location_id);
            $this->ticketModel->orwhere('drop_location_id', $agentDetail->location_id);

        }

        $this->ticketModel->where('refund', 0);
        $this->ticketModel->where('cancel_status', 0);
        $this->ticketModel->orderBy('id', 'DESC');
        $filterTicket =   $this->ticketModel->findAll();
        return $filterTicket;
    }

    public function agentCommission($totalprice)
    {
        $userId = $this->session->get('user_id');
        $agetnDetail =  $this->agentModel->where('user_id',$userId)->first();
        (double)$commission = (double)(($totalprice)* ($agetnDetail->commission/100));
        return $commission;

    }

}

<?php

namespace Modules\Ticket\Controllers;

use App\Controllers\BaseController;
use Modules\Ticket\Models\PartialpaidModel;
use Modules\Ticket\Models\TicketModel;
use Modules\Paymethod\Models\PaymethodModel;

use App\Libraries\Ticketmail;

use Modules\Agent\Models\AgentModel;
use Modules\Agent\Models\Agentcommission;

use Modules\User\Models\UserModel;

class Partialpaid extends BaseController
{

	protected $Viewpath;
	protected $partialpayModel;
	protected $ticketpayModel;
	protected $paymethodModel;
	protected $db;
	protected $agentModel;
    protected $agentCommissionModel;
    protected $userModule;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Ticket\Views";
		$this->partialpayModel = new PartialpaidModel();
		$this->ticketpayModel = new TicketModel();
		$this->paymethodModel = new PaymethodModel();

		$this->agentModel = new AgentModel();
        $this->agentCommissionModel = new Agentcommission();
		$this->db = \Config\Database::connect();

		$this->userModule = new UserModel();
    }

	public function new($ticketid)
	{
		

		$data['ticket'] = $this->ticketpayModel->find($ticketid);
		$partialpayamount = $this->partialpayModel->selectSum('paidamount')->where('booking_id',$data['ticket']->booking_id)->findAll();
		$data['paid'] = $partialpayamount;
		// dd($partialpayamount[0]->paidamount);
		
		$data['paymethod'] = $this->paymethodModel->findAll();

		$heading = lang("Localize.partial").' '.lang("Localize.pay");
		$data['pageheading'] = $heading;

		echo view($this->Viewpath.'\partialpay/new',$data);
	}

	public function create()
	{
		$ticketmailLibrary = new Ticketmail();
		$passangerid = $this->request->getVar('passanger_id');
		$passengeremail = $this->userModule->find($passangerid);


		$bookingid = $this->request->getVar('booking_id');
		$tickeid = 	$this->request->getVar('ticket_id');
		$backUserId = $this->session->get('user_id');
		$payment_detail_rocord = $this->request->getVar('paydetail');
		$paidamount = $this->request->getVar('paidamount');
		$subtripid = $this->request->getVar('subtrip_id');
		$maitripid = $this->request->getVar('trip_id');
		$rand = $this->request->getVar('booking_id');
		
		$validPaid = array(
			"booking_id" => $this->request->getVar('booking_id'),
			"trip_id" => $this->request->getVar('trip_id'),
			"subtrip_id" => $this->request->getVar('subtrip_id'),
			"passanger_id" => $this->request->getVar('passanger_id'),
			"paidamount" => $this->request->getVar('paidamount'),
			"pay_type_id" => $this->request->getVar('pay_method'),
		  );
		$paidpartial = array(
			"booking_id" => $this->request->getVar('booking_id'),
			"trip_id" => $this->request->getVar('trip_id'),
			"subtrip_id" => $this->request->getVar('subtrip_id'),
			"passanger_id" => $this->request->getVar('passanger_id'),
			"paidamount" => $this->request->getVar('paidamount'),
			"pay_type_id" => $this->request->getVar('pay_method'),
			"payment_detail" => $this->request->getVar('paydetail'),
		 );


		 if ($this->validation->run($validPaid, 'partialpay')) {

			$this->db->transStart();
			
			$this->partialpayModel->insert($paidpartial);

			$totalamount = $this->partialpayModel->selectSum('paidamount')->where('booking_id',$bookingid)->findAll();
			
			$ticketamout = $this->ticketpayModel->where('booking_id',$bookingid)->first();
			

			if ((int)$totalamount[0]->paidamount >= (int)$ticketamout->paidamount ) {

				$data = [
					'id' => $tickeid,
					'payment_status' => "paid",
				];
				
				$this->ticketpayModel->save($data);
  
			
			} else {
				$data = [
					'id' => $tickeid,
					'payment_status' => "partial",
				];
				
				$this->ticketpayModel->save($data);
			}

			$userRole = $this->session->get('role_id');
			if ($userRole == 2) {

				$totalprice = $this->request->getVar('paidamount');
                $type = "income";
				
				
				$userid = $ticketamout->passanger_id;
			
				$message = "For Partial Ticket Payment";

				$agentIncome = agentIncomeCommission($backUserId,$totalprice,$rand,$subtripid,$userid,$message);

				$agentTotalIncome =   agentTotal($backUserId,$totalprice,$rand,$type,$payment_detail_rocord);
			   
				

			  }


			  	$paymethod_id = $this->request->getVar('pay_method');
                $payDetail = $payment_detail_rocord;
                $type = "income";
                $detail = "Ticket Booking (".$rand.") ";
                accoutTranjection($type,$detail,$paidamount,$backUserId);
                paymethodTeanjection($rand,$paymethod_id,$paidamount,$payDetail,$maitripid,$subtripid,$backUserId);


				$this->db->transComplete();



			$emaildata = $ticketmailLibrary->getticketEmailData($bookingid);

            $status = sendTicket($passengeremail->login_email,$emaildata );

            if ($status == true) {
				return redirect()->route('allbookinglist-ticket')->with("success", "Payment Successfull");
            } else {
               print_r($status);
            }
	

			
		}

		else
		{
			

			$data['ticket'] = $this->ticketpayModel->find($tickeid);
			$partialpayamount = $this->partialpayModel->selectSum('paidamount')->where('booking_id',$data['ticket']->booking_id)->findAll();
			$data['paid'] = $partialpayamount;
			$data['paymethod'] = $this->paymethodModel->findAll();
			$data['validation'] = $this->validation;
			echo view($this->Viewpath.'\partialpay/new',$data);

		}
		
		

	}

	public function paymentdetail($ticketbookingid)

	{
		$data['ticket'] = $this->ticketpayModel->find($ticketbookingid);
		
		$data['allpayment'] = $this->partialpayModel
									->select('user_details.*,paymethods.*,partialpaids.created_at as date,partialpaids.*')
									->join('user_details','user_details.user_id = partialpaids.passanger_id')
									->join('paymethods','paymethods.id = partialpaids.pay_type_id')
									->where('booking_id',$ticketbookingid)
									->findAll();

			$heading = lang("Localize.payment").' '.lang("Localize.details");
			$data['pageheading'] = $heading;
				
	    echo view($this->Viewpath.'\partialpay/index',$data);			
									
	}



	public function agentCommission($totalprice)
    {
        $userId = $this->session->get('user_id');
        $agetnDetail =  $this->agentModel->where('user_id',$userId)->first();
        (double)$commission = (double)(($totalprice)* ($agetnDetail->commission/100));
        return $commission;

    }
}

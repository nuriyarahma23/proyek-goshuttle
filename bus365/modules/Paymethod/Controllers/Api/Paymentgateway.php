<?php

namespace Modules\Paymethod\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use Modules\Paymethod\Models\PaymentGatewayModel;
use Modules\Paymethod\Models\PaypalModel;
use Modules\Paymethod\Models\PaystackModel;
use Modules\Paymethod\Models\RazorModel;
use Modules\Paymethod\Models\StripeModel;
use \stdClass;

class Paymentgateway extends BaseController
{
    use ResponseTrait;
    protected $paymentGatewayModel;
    protected $razorModel;
    protected $payStackModel;
    protected $stripeModel;
    protected $paypalModel;
    protected $db;

    public function __construct()
    {
        $this->paymentGatewayModel = new PaymentGatewayModel();
        $this->razorModel = new RazorModel();
        $this->payStackModel = new PaystackModel();
        $this->stripeModel = new StripeModel();
        $this->paypalModel = new PaypalModel();
        $this->db = \Config\Database::connect();

    }

    public function paymentGateway()
    {
        $paymentGateway = $this->paymentGatewayModel->where('status', 1)->findAll();

        if (!empty($paymentGateway)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $paymentGateway,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "No not found.",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }

    public function paypal()
    {
        $paypaldata = new stdClass();
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(1);

        if (!empty($paymentGatewayStatus)) {

            $paypal = $this->paypalModel->first();

            if (!empty($paypal)) {

                if ($paypal->environment == 1) {
                    $paypaldata->secrate_id = $paypal->live_s_kye;
                    $paypaldata->client_id = $paypal->live_c_kye;
                    $paypaldata->email = $paypal->email;
                    $paypaldata->merchantid = $paypal->marchantid;
                    $paypaldata->environment = "live";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paypaldata,
                    ];

                    return $this->response->setJSON($data);
                } else {

                    $paypaldata->secrate_id = $paypal->test_s_kye;
                    $paypaldata->client_id = $paypal->test_c_kye;
                    $paypaldata->email = $paypal->email;
                    $paypaldata->merchantid = $paypal->marchantid;
                    $paypaldata->environment = "Test";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paypaldata,
                    ];

                    return $this->response->setJSON($data);

                }

            } else {
                $data = [
                    'message' => "No Credential found for Paypal",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }

           

        } else {

            $data = [
                'message' => "Paypal is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }



	public function paystack()
    {
        $paydata = new stdClass();
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(2);

        if (!empty($paymentGatewayStatus)) {

            $getPayData = $this->payStackModel->first();

            if (!empty($getPayData)) {

                if ($getPayData->environment == 1) {
                    $paydata->secrate_key = $getPayData->live_s_kye;
                    $paydata->private_key = $getPayData->live_p_kye;
                  	 $paydata->environment = "live";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);
                } else {

                    $paydata->secrate_key = $getPayData->test_s_kye;
                    $paydata->private_key = $getPayData->test_p_kye;
                    $paydata->environment = "Test";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);

                }

            } else {
                $data = [
                    'message' => "No Credential found for Paystack",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }

           

        } else {

            $data = [
                'message' => "Paystack is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }


	public function stripe()
    {
        $paydata = new stdClass();
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(3);

        if (!empty($paymentGatewayStatus)) {

            $getPayData = $this->stripeModel->first();

            if (!empty($getPayData)) {

                if ($getPayData->environment == 1) {
                    $paydata->secrate_key = $getPayData->live_s_kye;
                    $paydata->private_key = $getPayData->live_p_kye;
                  	 $paydata->environment = "live";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);
                } else {

                    $paydata->secrate_key = $getPayData->test_s_kye;
                    $paydata->private_key = $getPayData->test_p_kye;
                    $paydata->environment = "Test";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);

                }

            } else {
                $data = [
                    'message' => "No Credential found for Stripe",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }

           

        } else {

            $data = [
                'message' => "Stripe is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }




	public function razor()
    {
        $paydata = new stdClass();
        $paymentGatewayStatus = $this->paymentGatewayModel->where('status', 1)->find(4);

        if (!empty($paymentGatewayStatus)) {

            $getPayData = $this->razorModel->first();

            if (!empty($getPayData)) {

                if ($getPayData->environment == 1) {
                    $paydata->secrate_key = $getPayData->live_s_kye;
                   
                  	 $paydata->environment = "live";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);
                } else {

                    $paydata->secrate_key = $getPayData->test_s_kye;
                   
                    $paydata->environment = "Test";

                    $data = [
                        'status' => "success",
                        'response' => 200,
                        'data' => $paydata,
                    ];

                    return $this->response->setJSON($data);

                }

            } else {
                $data = [
                    'message' => "No Credential found for RazorPay",
                    'status' => "failed",
                    'response' => 204,
                ];

                return $this->response->setJSON($data);
            }

           

        } else {

            $data = [
                'message' => "RazorPay is Disable in System",
                'status' => "failed",
                'response' => 204,
            ];

            return $this->response->setJSON($data);
        }
    }



}

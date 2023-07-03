<?php

// namespace Frontend\Controllers\Api;
namespace Modules\Frontend\Controllers\Api;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class Front extends BaseController
{

	private $db;
	use ResponseTrait;

    public function __construct()
    {

        $this->db = \Config\Database::connect();
    }

	public function secOne()
	{
		//
		$builder =$this->db->table('section_one_home');
		$query   = $builder->get(); 
		$secOne = $query->getResult();


		if (!empty($secOne)) {

            foreach ($secOne as $key => $value) {
                $value->image = base_url().'/public/'.$value->image;
            }

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $secOne,
            ];
                                   

            return $this->response->setJSON($data);

        } else {
            $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}

	public function secTwo()
	{
		//
		$builder =$this->db->table('section_two_work_flow');
		$query   = $builder->get(); 
		$secTow = $query->getResult();


		if (!empty($secTow)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $secTow,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}


	public function secTwoArticleAll()
	{
		//
		$builder =$this->db->table('section_two_detail');
		$query   = $builder->get(); 
		$sectwoarticle = $query->getResult();


		if (!empty($sectwoarticle)) {

            foreach ($sectwoarticle as $key => $value) {
                $value->image = base_url().'/public/'.$value->image;
            }

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $sectwoarticle,
            ];

            return $this->response->setJSON($data);

        } else {

           $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}

	public function secTwoArticleSingle($id)
	{
		//
		$builder =$this->db->table('section_two_detail')->where('id',$id);
		$query   = $builder->get(); 
		$sectwoarticle = $query->getResult();

        foreach ($sectwoarticle as $key => $value) {
            $value->image = base_url().'/public/'.$value->image;
        }

		if (!empty($sectwoarticle)) {
            

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $sectwoarticle,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
           
        }

		
	}



    public function secThree()
	{
		
		$builder =$this->db->table('section_three_heading');
		$query   = $builder->get(); 
		$secThree = $query->getResult();


		if (!empty($secThree)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $secThree,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}

    public function secThreeAllTrip()
	{
		
		$builder =$this->db->table('subtrips');
		$query   = $builder->where('status',1)->where('show',1)->get(); 
		$allsubtrips = $query->getResult();


		if (!empty($allsubtrips)) {

            foreach ($allsubtrips as $key => $value) {
                $value->imglocation = base_url().'/public/'.$value->imglocation;
            }

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $allsubtrips,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}




    public function secThreeSingleTrip($id)
	{
		//
		$builder =$this->db->table('subtrips');
		$query   = $builder->where('status',1)->where('show',1)->where('id',$id)->get(); 
		$allsubtrips = $query->getResult();

        foreach ($allsubtrips as $key => $value) {
            $value->imglocation = base_url().'/public/'.$value->imglocation;
        }

		if (!empty($allsubtrips)) {
            

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $allsubtrips,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
           
        }

		
	}



	public function secFour()
	{
		//
		$builder =$this->db->table('section_four_comment');
		$query   = $builder->get(); 
		$secFour = $query->getResult();


		if (!empty($secFour)) {

            $data = [

                'status' => "success",
                'response' => 200,
                'data' => $secFour,
            ];

            return $this->response->setJSON($data);

        } else {

             $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}

	public function secFourAll()
	{
		//
		$builder =$this->db->table('section_four_detail');
					$builder->orderBy('serial', 'ASC');
		$query   = $builder->get(); 
		$comments = $query->getResult();


		if (!empty($comments)) {

            foreach ($comments as $key => $value) {
                $value->image = base_url().'/public/'.$value->image;
            }

            $data = [

                'status' => "success",
                'response' => 200,
                'data' => $comments,
            ];

            return $this->response->setJSON($data);

        } else {

            $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}


	public function secFive()
	{
		//
		$builder =$this->db->table('section_five_app');
		$query   = $builder->get(); 
		$app = $query->getResult();
        foreach ($app as $key => $value) {
            $value->image = base_url().'/public/'.$value->image;
        }


		if (!empty($app)) {

            $data = [

                'status' => "success",
                'response' => 200,
                'data' => $app,
            ];

            return $this->response->setJSON($data);

        } else {

             $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}


	public function secSix()
	{
		//
		$builder =$this->db->table('section_six_blog');
		$query   = $builder->get(); 
		$secblog = $query->getResult();


		if (!empty($secblog)) {

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $secblog,
            ];

            return $this->response->setJSON($data);

        } else {

             $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}


    public function secSeven()
	{
		//
		$builder =$this->db->table('section_seven_subscrib');
		$query   = $builder->get(); 
		$subscrib = $query->getResult();


		if (!empty($subscrib)) {

            foreach ($subscrib as $key => $value) {
                $value->image = base_url().'/public/'.$value->image;
            }

            $data = [
                'status' => "success",
                'response' => 200,
                'data' => $subscrib,
            ];

            return $this->response->setJSON($data);

        } else {


           $data = [
                'message' => "No Data not found.",
				'status' => "failed",
				'response' => 204,
            ];
            return $this->response->setJSON($data);
        }

		
	}

}

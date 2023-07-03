<?php

namespace Modules\Localize\Controllers;

use App\Controllers\BaseController;
use Modules\Localize\Models\LangstringModel;
use Modules\Localize\Models\LocalizeModel;
use Modules\Localize\Models\LngstngvalueModel;

class Langstring extends BaseController
{
	protected $Viewpath;
	protected $lngStringModel;

	protected $localizeModel;
	protected $langstringvalueModel;
	
	public function __construct()
    {

        $this->Viewpath = "Modules\Localize\Views";
		$this->lngStringModel = new LangstringModel();

		$this->localizeModel = new LocalizeModel();

		$this->langstringvalueModel = new LngstngvalueModel();
      
    }

	public function new()
	{
		$data['languagestr'] = $this->lngStringModel->orderBy('id', 'DESC')->findAll();

		$data['module'] =    lang("Localize.language") ; 
		$data['title']  =    lang("Localize.language_string_list") ;

		$data['pageheading'] = lang("Localize.language_string_list");

		echo view($this->Viewpath.'\lngstring/new',$data);
	}

	public function create()
	{
		
		$getdata = $this->request->getVar('name');

		$getdata = preg_replace('/[^A-Za-z0-9\-]/', ' ', $getdata);
		$getdata = preg_replace('/[\/\&%#\$]/', ' ', $getdata);
		$getdata = str_replace(' ', '_', $getdata);
		$getdata = strtolower($getdata);

		$data= array(
			"name"=>$getdata,
		);
	
		
		if($this->validation->run($data, 'lanstr'))
		{
			
			$lanStrId = $this->lngStringModel->insert($data);

			$localize =	$this->localizeModel->orderBy('id', 'DESC')->findAll();
			$inserData = array();
			foreach ($localize as $key => $value) {
				$inserData[$key] = array(
					"string_id"=> $lanStrId,
					"localize_id"=> $value->id,
				);
			}

			$this->langstringvalueModel->insertBatch($inserData);
			return redirect()->route('new-langstring')->with("success","Data Save");
		}
		
		
		else
		{
			$data['validation'] = $this->validation;
			$data['languagestr'] = $this->lngStringModel->orderBy('id', 'DESC')->findAll();

			$data['module'] =    lang("Localize.language") ; 
			$data['title']  =    lang("Localize.language_string_list") ;

			$data['pageheading'] = lang("Localize.language_string_list");

			echo view($this->Viewpath.'\lngstring/new',$data);

		}
		// 
	}

	
}

<?php

namespace App\Libraries;
use Modules\Localize\Models\LocalizeModel;
use Modules\Localize\Models\LangstringModel;
use Modules\Localize\Models\LngstngvalueModel;

Class Language

{
    public $localizeModel;
    protected $lngStringModel;
    protected $langstringvalueModel;

    public function __construct()
    {

        $this->localizeModel = new LocalizeModel();
        $this->lngStringModel = new LangstringModel();
        $this->langstringvalueModel = new LngstngvalueModel();


    }
    public function getAllLanguage()
    {
       
        $this->localizeModel = new LocalizeModel();
        $data['languagelist']  =  $this->localizeModel->orderBy('id', 'DESC')->findAll();
        return view('common/getLanguage',$data);
        
    }

    public function testdata()
    {  
        $kye =  "'apples dfdfd'";
        $sam = "=>";
        $value =  'I have';

        $return = 'return [';
        $return .= $kye;
        $return .= $sam ;
        $return .= $value ;
        $return .= '];';

        return $return ;
        
    }

    public function writeLanguage($lngid)

    {
        $indicator = "=>";
       
        $this->langstringvalueModel->select('lngstngvalues.id,lngstngvalues.value,langstrings.name')->join('langstrings','langstrings.id = lngstngvalues.string_id','left');
		$lngStrDtail =  $this->langstringvalueModel->where('localize_id',$lngid)->orderBy('langstrings.id', 'DESC')->findAll();

       

        $return = '<?php';
        $return .= "\n" ;
        $return .= 'return [';
        foreach ($lngStrDtail as $key => $langvalud) {
            $kye = "'$langvalud->name'";
            $return .= $kye;
            $return .= $indicator ;
            $return .= "'$langvalud->value'" ;
            $return .= ',' ;
            $return .= "\n" ;
        }

        $return .= '];';

        $return .= '?>';

        return $return;

    }
    


}




?>
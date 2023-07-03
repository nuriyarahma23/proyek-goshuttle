<?php

namespace App\Libraries;

use Modules\Account\Libraries\Tree;

Class Folder

{
    public function folderCheck($lan_code)
    {
        helper('filesystem');

        $map = directory_map(APPPATH.'Language',1);
       

        $valTest = 0;
		foreach ($map as $key => $value) {
			
	 		$res = preg_replace('#[^\w()/.%\-&]#',"",$value);
			

			if ($res == $lan_code) {
				$valTest = 1;
			}
			
		}


        if ($valTest == 1) {

		}

		else
		{
            // ----------------For local server
            // mkdir(APPPATH.'Language//'.$lan_code,0777,TRUE);
			// $sourceDirectory = APPPATH.'Language//default//';
			// directory_mirror($sourceDirectory, APPPATH.'Language\\'.$lan_code.'\\');
            // ----------------For local server

            // ----------------For Live server
            mkdir(APPPATH.'Language//'.$lan_code,0777,TRUE);
			$sourceDirectory = APPPATH.'Language//default//';
			directory_mirror($sourceDirectory, APPPATH.'Language//'.$lan_code.'//');
            // ----------------For Live server
            

		}
         
        return true;

    }

    public function folderNameEdit($folderName,$newName)
    {
        // ----------------For local server
    //   rename (APPPATH.'Language\\'.$folderName, APPPATH.'Language\\'.$newName);
        // ----------------For local server

    // ----------------For Live server
          rename (APPPATH.'Language/'.$folderName, APPPATH.'Language/'.$newName);
    // ----------------For Live server
      return $newName; 


    }


    
}
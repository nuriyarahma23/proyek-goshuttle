<?php

namespace App\Libraries;
use Modules\Role\Models\PermissionModel;
use Modules\Role\Models\MenuModel;

Class Rolepermission

{
    
    protected $permissionModel;
    protected $menuModel;
    protected $librarysession;

    public function __construct()
    {

        $this->permissionModel = new PermissionModel();
        $this->menuModel = new MenuModel();
        $this->librarysession = session();
        
    }

    public function mainmenu($value)
    {
        $mainmenureturnids= array();

        $return = false;

        $havechild = $this->menuModel->where('menu_title',$value)->first();
        

        if ($havechild->have_chield == 1) {
            array_push($mainmenureturnids,$havechild->id);
            $menuid = $this->menuModel->where('parent_menu_id',$havechild->id)->findAll();

            foreach ($menuid as $key => $mainvalue) {


                array_push($mainmenureturnids,$mainvalue->id);

                if ($mainvalue->have_chield == 1) {

                    $menuidarray = $this->checksubmenus($mainvalue->id);

                    foreach ($menuidarray as $key => $chekidvalue) {
                        array_push($mainmenureturnids,$chekidvalue);
                    }
                   
                }

                 else {
                    array_push($mainmenureturnids,$mainvalue->id);
                }
                
                
            }
            
        } else {
            
           array_push($mainmenureturnids,$havechild->id);
        }

         $arrayid =  array_unique($mainmenureturnids) ;

           
        //  $getmenupermission = $this->permissionModel->where('role_id',$this->librarysession->role_id)->where('user_id',$this->librarysession->user_id)->whereIn('menu_id',$arrayid)->findAll();
           
         
         $getmenupermission = $this->permissionModel->where('role_id',$this->librarysession->role_id)->whereIn('menu_id',$arrayid)->findAll();
                    
            foreach ($getmenupermission as $key => $pvalue) {
                        if (($pvalue->create == 1) || ($pvalue->read == 1 ) || ($pvalue->edit == 1) || ($pvalue->delete == 1 )) {
                            $return = true;
                            break;
                        } 
                       
                    }
         
         return $return;


    }

    public function checksubmenus($checkid)
    {
        $returnidmenu = array();
        $menuid = $this->menuModel->where('parent_menu_id',$checkid)->findAll();
         
        foreach ($menuid as $key => $value) {
            array_push($returnidmenu,$value->id);
        }
        return $returnidmenu;
    }


    public function read($value)
    {
        
    //    $result = $this->permissionModel->where('role_id',$this->librarysession->role_id)->where('user_id',$this->librarysession->user_id)->where('menu_title',$value)->first();

       $result = $this->permissionModel->where('role_id',$this->librarysession->role_id)->where('menu_title',$value)->first();
      
       if ( $result->read == 1) {
        return true;
       } else {
        return false;
       }
       
      
    }


    public function create($value)
    {
        
       $result = $this->permissionModel->where('role_id',$this->librarysession->role_id)->where('menu_title',$value)->first();
      
       if ( $result->create == 1) {
        return true;
       } else {
        return false;
       }
       
      
    }

    public function edit($value)
    {
        
       $result = $this->permissionModel->where('role_id',$this->librarysession->role_id)->where('menu_title',$value)->first();
      
       if ( $result->edit == 1) {
        return true;
       } else {
        return false;
       }
       
      
    }

    public function delete($value)
    {
        
       $result = $this->permissionModel->where('role_id',$this->librarysession->role_id)->where('menu_title',$value)->first();
      
       if ( $result->delete == 1) {
        return true;
       } else {
        return false;
       }
       
      
    }



    public function submainmenu($value)
    {
        $mainmenureturnids= array();

        $return = false;

        $havechild = $this->menuModel->where('menu_title',$value)->first();

        

        if ($havechild->have_chield == 1) {
            array_push($mainmenureturnids,$havechild->id);
            $menuid = $this->menuModel->where('parent_menu_id',$havechild->id)->findAll();

            foreach ($menuid as $key => $mainvalue) {


                array_push($mainmenureturnids,$mainvalue->id);

                if ($mainvalue->have_chield == 1) {

                    $menuidarray = $this->checksubmenus($mainvalue->id);

                    foreach ($menuidarray as $key => $chekidvalue) {
                        array_push($mainmenureturnids,$chekidvalue);
                    }
                   
                }

                 else {
                    array_push($mainmenureturnids,$mainvalue->id);
                }
                
                
            }
            
        } else {
            
           array_push($mainmenureturnids,$havechild->id);
        }

         $arrayid =  array_unique($mainmenureturnids) ;

        
            // $getmenupermission = $this->permissionModel->where('role_id',$this->librarysession->role_id)->where('user_id',$this->librarysession->user_id)->whereIn('menu_id',$arrayid)->findAll();
            
            $getmenupermission = $this->permissionModel->where('role_id',$this->librarysession->role_id)->whereIn('menu_id',$arrayid)->findAll();
            
            // return $getmenupermission;      
            foreach ($getmenupermission as $key => $pvalue) {
                        if (($pvalue->create == 1) || ($pvalue->read == 1 ) || ($pvalue->edit == 1) || ($pvalue->delete == 1 )) {
                            $return = true;
                            break;
                        } 
                        
                    }
                return $return; 
        //  return $return;


    }


   

    

   
    


}




?>
<?php
    $sessiondata = \Config\Services::session(); // Needed for Point 5
    $uri = service('uri');
    $menuname = $uri->getSegment(3);
  
?>


                
                <div class="sidebar-header">
                    <a href="<?php echo base_url(route_to( 'admin-home' )) ?>" class="sidebar-brand">
                        <!-- <img class="sidebar-brand_icon" src="assets/dist/img/mini-logo.png" alt=""> -->
                        <img class="img-fluid" src="<?php echo  $sessiondata->get('logo');?>" alt="">
                        <!-- <span class="sidebar-brand_text"><?php echo  $sessiondata->get('logotext');?></span> -->
                    </a>
                </div><!--/.sidebar header-->
                <div class="profile-element d-flex align-items-center flex-shrink-0">
                    <div class="avatar online">
                       
                        <img src="<?php echo  $sessiondata->get('profile_pic');?>" class="img-fluid rounded-circle" alt="">
                    </div>
                    <div class="profile-text">
                        <h6 class="m-0"><?php echo  $sessiondata->get('first_name');?> <?php echo  $sessiondata->get('last_name');?></h6>
                         
                         
                    </div>
                </div>
                <div class="sidebar-body">
                    <nav class="sidebar-nav">
                        <ul class="metismenu">


                           
                            <!-- <li><a href="<?php echo base_url(route_to( 'admin-home' )) ?>"><i class="fab fa-slack"></i>Dashboard</a></li> -->

                            <li class="<?php echo ($menuname == "admin") ? "mm-active" : "" ?>" ><a href="<?php echo base_url(route_to( 'admin-home' )) ?>"><i class="fab fa-slack"></i>
                            <?php echo lang("Localize.dashboard") ?>
                           </a></li>
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
                            

                           

                            <?php  
                                helper('filesystem');
                                $path = ROOTPATH.'modules/';
                               
                                $map  = directory_map($path);
                                ksort($map);
                                // $HmvcMenu   = array();
                                if (is_array($map) && sizeof($map) > 0)
                                foreach ($map as $key => $value) {
                                    $menu = str_replace("\\", '/', $path.$key.'Config/Menu.php'); 
                                    if (file_exists($menu)) {
                                
                                        
                                            @include($menu);
                                        
                                        
                                    }  
                                }  
                            ?> 
           



<!-- ------------------------------------------------------------------------------------------------------------------------ -->  



                        </ul>
                    </nav>
                </div>
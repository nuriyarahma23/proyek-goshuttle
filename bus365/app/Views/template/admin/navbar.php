<?php
    $sessiondata = \Config\Services::session(); // Needed for Point 5
?>
 <div class="sidebar-toggle-icon" id="sidebarCollapse">
                            sidebar toggle<span></span>
                        </div><!--/.sidebar toggle icon-->
                        <!-- Collapse -->
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Toggler -->
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-expanded="true" aria-label="Toggle navigation"><span></span> <span></span></button>
                            <ul class="navbar-nav">
                               
                            </ul>
                        </div>

                      

                        <div class="navbar-icon d-flex">
                            
                       
                        
                            <ul class="navbar-nav flex-row align-items-center">

                                    
                                    <li class="nav">
                                        <!-- <?php echo view_cell('\App\Libraries\Language::getAllLanguage') ?> -->
                                    </li>
                                    
                                    
                               
                                <!--/.dropdown-->




                                <li class="nav-item">
                                    <a class="nav-link" href="#" id="btnFullscreen"><i class="full-screen_icon typcn typcn-arrow-move-outline"></i></a>
                                </li>

                               
                                
                                <!--/.dropdown-->
                                <li class="nav-item dropdown user-menu">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!--<img src="assets/dist/img/user2-160x160.png" alt="">-->
                                        <i class="typcn typcn-user-add-outline"></i>
                                    </a>
                                    <div class="dropdown-menu" >
                                        <div class="dropdown-header d-sm-none">
                                            <a href="" class="header-arrow"><i class="icon ion-md-arrow-back"></i></a>
                                        </div>
                                        <div class="user-header">
                                            <div class="img-user">
                                                <img src="<?php echo  $sessiondata->get('profile_pic');?>" alt="">
                                            </div><!-- img-user -->
                                            <h6><?php echo  $sessiondata->get('first_name');?> <?php echo  $sessiondata->get('last_name');?></h6>
                                            
                                        </div><!-- user-header -->
                                        
                                        <a href="<?php echo base_url(route_to( 'editprofile-user' )) ?>" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a>
                                        <a href="<?php echo base_url(route_to( 'auth-logout' )) ?>" class="dropdown-item"><i class="typcn typcn-key-outline"></i> Sign Out</a>
                                    </div><!--/.dropdown-menu -->
                                </li>
                            </ul><!--/.navbar nav-->
                            <div class="nav-clock">
                                <div class="time">
                                    <span class="time-hours"></span>
                                    <span class="time-min"></span>
                                    <span class="time-sec"></span>
                                </div>
                            </div><!-- nav-clock -->
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="typcn typcn-th-menu-outline"></i>
                        </button>

                        <input type="hidden" name="baseurl" id="baseurl" value="<?php echo base_url(); ?>">
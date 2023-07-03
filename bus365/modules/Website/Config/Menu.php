<?php
    $sessiondata = \Config\Services::session(); // Needed for Point 5
    use App\Libraries\Rolepermission;
    $rolepermissionLibrary = new Rolepermission();
    
    $frontend = "frontend";
    $frontend = $rolepermissionLibrary->mainmenu($frontend); 

    $sectionone = "sectionone";
    $sectionone = $rolepermissionLibrary->mainmenu($sectionone); 

    $sectiontwo = "sectiontwo";
    $sectiontwo = $rolepermissionLibrary->submainmenu($sectiontwo);

    $sectionthree = "sectionthree";
    $sectionthree = $rolepermissionLibrary->mainmenu($sectionthree); 

    $sectionfour = "sectionfour";
    $sectionfour = $rolepermissionLibrary->submainmenu($sectionfour); 

    $sectionfive = "sectionfive";
    $sectionfive = $rolepermissionLibrary->mainmenu($sectionfive); 

    $sectionsix = "sectionsix";
    $sectionsix = $rolepermissionLibrary->mainmenu($sectionsix); 

    $sectionseven = "sectionseven";
    $sectionseven = $rolepermissionLibrary->mainmenu($sectionseven); 
    
    $footer = "footer";
    $footer = $rolepermissionLibrary->mainmenu($footer); 

    $blog = "blog";
    $blog = $rolepermissionLibrary->submainmenu($blog); 

    $page = "page";
    $page = $rolepermissionLibrary->submainmenu($page); 

    $advertisement = "advertisement";
    $advertisement = $rolepermissionLibrary->submainmenu($advertisement); 

    $language = "language";
    $language = $rolepermissionLibrary->submainmenu($language); 

    $webconfig = "webconfig";
    $webconfig = $rolepermissionLibrary->mainmenu($webconfig);
    
    $social_media_list = "social_media_list";
    $social_media_list = $rolepermissionLibrary->mainmenu($social_media_list);

    $email = "email";
    $webconfig = $rolepermissionLibrary->mainmenu($email);

    $subscribe_list = "subscribe_list";
    $subscribe_list = $rolepermissionLibrary->mainmenu($subscribe_list);

    $db_backup = "db_backup";
    $db_backup = $rolepermissionLibrary->mainmenu($db_backup);
  
?>

<?php if ( ($frontend == true) || ($sectionone == true)  || ($sectiontwo == true) 
            || ($sectionthree == true)  || ($sectionfour == true)  || ($sectionfive == true) 
            || ($sectionsix == true)  || ($sectionseven == true) || ($footer == true) || ($blog == true) 
            || ($page == true) || ($advertisement == true) || ($language == true) || ($webconfig == true) 
            || ($social_media_list == true) || ($email == true) || ($subscribe_list == true) || ($db_backup == true) ) : ?>


<li class="<?php echo ($menuname == "websettings" || $menuname == "socialmedias" || $menuname == "emailsettings" || $menuname == "pages") ? "mm-active" : ""  ?>">
    <a class="has-arrow material-ripple" href="#">
    <i class="fas fa-wrench"></i>
        <?php echo lang("Localize.website_setting") ?>
    </a>


<?php
    $n_frontend = "frontend";
    $frontendresult = $rolepermissionLibrary->mainmenu($n_frontend); 
?>
<?php if ($frontendresult == true) : ?>

<!-- Front-end menu  -->
    <ul class="nav-second-level">
        <li class="<?php echo ($menuname == "frontends" || $menuname == "footers") ? "mm-active" : ""  ?>">
            <a class="has-arrow" href="#" aria-expanded="false">   <?php echo lang("Localize.frontend") ?> </a>
                <ul class="nav-third-level">

                    <!-- section one -->
                    <?php
                        $n_sectionone = "sectionone";
                        $sectiononeresult = $rolepermissionLibrary->read($n_sectionone); 
                    ?>
                    <?php if ($sectiononeresult == true) : ?>
                        <li><a href="<?php echo base_url(route_to( 'edit-section-one' )) ?>"><?php echo lang("Localize.sectionone") ?></a></li>
                    <?php endif ?>
                    <!-- section one -->

                    <?php
                        $n_sectiontwo = "sectiontwo";
                        $sectiontworesult = $rolepermissionLibrary->submainmenu($n_sectiontwo); 
                    ?>
                    <?php if ($sectiontworesult == true) : ?>

                    <!-- section two -->
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><?php echo lang("Localize.sectiontwo") ?></a>
                            <ul class="nav-fourth-level">

                            <?php
                                $sectiontwo_two = "sectiontwo_two";
                                $sectiontwo_two_result = $rolepermissionLibrary->read($sectiontwo_two); 
                            ?>
                            <?php if ($sectiontwo_two_result == true) : ?>
                                <li><a href="<?php echo base_url(route_to( 'edit-section-two' )) ?>"><?php echo lang("Localize.sectiontwo_two") ?></a></li>
                            <?php endif ?>

                            <?php
                                $how_works_list = "how_works_list";
                                $how_works_list_result = $rolepermissionLibrary->read($how_works_list); 
                            ?>
                            <?php if ($how_works_list_result == true) : ?>       
                                <li><a href="<?php echo base_url(route_to( 'index-section-two-deatil' )) ?>"><?php echo lang("Localize.how_works_list") ?></a></a></li>
                            <?php endif ?>

                            </ul>
                        </li>
                    <!-- section two -->
                    <?php endif ?>

                    <!-- section three -->

                        <?php
                            $n_sectionthree = "sectionthree";
                            $sectionthree_result = $rolepermissionLibrary->read($n_sectionthree); 
                        ?>
                        <?php if ($sectionthree_result == true) : ?>  
                            <li><a href="<?php echo base_url(route_to( 'edit-section-three' )) ?>"><?php echo lang("Localize.sectionthree") ?></a></li>
                        <?php endif ?>

                    <!-- section three -->

                     <!-- section four -->
                    <?php
                        $n_sectionfour = "sectionfour";
                        $sectionfourresult = $rolepermissionLibrary->submainmenu($n_sectionfour); 
                    ?>
                    <?php if ($sectionfourresult == true) : ?>

                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><?php echo lang("Localize.sectionfour") ?></a>
                            <ul class="nav-fourth-level">

                            <?php
                                $sectionfour_four = "sectionfour_four";
                                $sectionfour_four_result = $rolepermissionLibrary->read($sectionfour_four); 
                            ?>
                            <?php if ($sectionfour_four_result == true) : ?>
                                <li><a href="<?php echo base_url(route_to( 'edit-section-four' )) ?>"><?php echo lang("Localize.sectionfour_four") ?></a></li>
                            <?php endif ?>
                            
                            <?php
                                $comment_list = "comment_list";
                                $comment_list_result = $rolepermissionLibrary->read($comment_list); 
                            ?>
                            <?php if ($comment_list_result == true) : ?>
                                <li><a href="<?php echo base_url(route_to( 'index-section-four-comment' )) ?>"><?php echo lang("Localize.comment_list") ?></a></li>
                            <?php endif ?>
                        </ul>
                    </li>
                    <?php endif ?>
                     <!-- section four -->

                        <?php
                            $n_sectionfive = "sectionfive";
                            $sectionfive_result = $rolepermissionLibrary->read($n_sectionfive); 
                        ?>
                        <?php if ($sectionfive_result == true) : ?>            
                            <li><a href="<?php echo base_url(route_to( 'edit-section-five' )) ?>"><?php echo lang("Localize.sectionfive") ?></a></li>
                        <?php endif ?>

                        <?php
                            $n_sectionsix = "sectionsix";
                            $sectionsix_result = $rolepermissionLibrary->read($n_sectionsix); 
                        ?>
                        <?php if ($sectionsix_result == true) : ?> 
                            <li><a href="<?php echo base_url(route_to( 'edit-section-six' )) ?>"> <?php echo lang("Localize.sectionsix") ?></a></li>
                        <?php endif ?>

                        <?php
                            $n_sectionseven = "sectionseven";
                            $sectionseven_result = $rolepermissionLibrary->read($n_sectionseven); 
                        ?>
                        <?php if ($sectionseven_result == true) : ?> 
                            <li><a href="<?php echo base_url(route_to( 'edit-section-seven' )) ?>"><?php echo lang("Localize.sectionseven") ?></a></li>
                        <?php endif ?>

                        <?php
                            $n_footer = "footer";
                            $footer_result = $rolepermissionLibrary->read($n_footer); 
                        ?>
                        <?php if ($footer_result == true) : ?>
                            <li><a href="<?php echo base_url(route_to( 'new-footer' )) ?>"><?php echo lang("Localize.footer") ?></a></li>
                        <?php endif ?>
                </ul>
        </li>
    
    </ul>
<?php endif ?>


<?php
    $n_blog = "blog";
    $blogresult = $rolepermissionLibrary->mainmenu($n_blog); 
?>
<?php if ($blogresult == true) : ?>
<!-- Blog menu  -->

    <ul class="nav-second-level">
        <li class="<?php echo ($menuname == "blogs") ? "mm-active" : ""  ?>">
            <a class="has-arrow" href="#" aria-expanded="false">  <?php echo lang("Localize.blog") ?> </a>
                <ul class="nav-third-level">
                    <?php
                        $blog_list = "blog_list";
                        $blog_list_result = $rolepermissionLibrary->read($blog_list); 
                    ?>
                    <?php if ($blog_list_result == true) : ?>
                        <li><a href="<?php echo base_url(route_to( 'index-blog' )) ?>"><?php echo lang("Localize.blog_list") ?></a></li>
                    <?php endif ?>  

                </ul>
        </li>
    
    </ul>

<!-- Blog menu  -->
<?php endif ?>



<?php
    $n_page = "page";
    $pageresult = $rolepermissionLibrary->mainmenu($n_page); 
?>
<?php if ($pageresult == true) : ?>
<!-- Page menu -->

<ul class="nav-second-level">
        <li class="<?php echo ($menuname == "pages") ? "mm-active" : ""  ?>">
            <a class="has-arrow" href="#" aria-expanded="false">  <?php echo lang("Localize.page") ?> </a>
            <ul class="nav-third-level">
                <?php
                    $about = "about";
                    $about_result = $rolepermissionLibrary->read($about); 
                ?>
                <?php if ($about_result == true) : ?>
                    <li><a href="<?php echo base_url(route_to( 'new-about' )) ?>"><?php echo lang("Localize.about") ?></a></li>
                <?php endif ?>

                <?php
                    $privacy = "privacy";
                    $privacy_result = $rolepermissionLibrary->read($privacy); 
                ?>
                <?php if ($privacy_result == true) : ?>
                    <li><a href="<?php echo base_url(route_to( 'new-privacy' )) ?>"><?php echo lang("Localize.privacy") ?></a></li>
                <?php endif ?>

                <?php
                    $cookies = "cookies";
                    $cookies_result = $rolepermissionLibrary->read($cookies); 
                ?>
                <?php if ($cookies_result == true) : ?>
                    <li><a href="<?php echo base_url(route_to( 'new-cooke' )) ?>"><?php echo lang("Localize.cookies") ?></a></li>
                <?php endif ?>

                <?php
                    $terms_conditions = "terms_conditions";
                    $terms_conditions_result = $rolepermissionLibrary->read($terms_conditions); 
                ?>
                <?php if ($terms_conditions_result == true) : ?>
                    <li><a href="<?php echo base_url(route_to( 'new-term' )) ?>"><?php echo lang("Localize.terms_conditions") ?></a></li>
                <?php endif ?>  

                <?php
                    $faq = "faq";
                    $faqresult = $rolepermissionLibrary->submainmenu($faq); 
                ?>
                <?php if ($faqresult == true) : ?>

                    <li>
                        <a class="has-arrow" href="#" aria-expanded="false"><?php echo lang("Localize.faq") ?></a>
                        <ul class="nav-fourth-level">

                            <?php
                                $page_setup = "page_setup";
                                $page_setup_result = $rolepermissionLibrary->read($page_setup); 
                            ?>
                            <?php if ($page_setup_result == true) : ?>
                                <li><a href="<?php echo base_url(route_to( 'new-faq' )) ?>"><?php echo lang("Localize.page_setup") ?></a></li> 
                            <?php endif ?> 

                            <?php
                                $question_list = "question_list";
                                $question_list_result = $rolepermissionLibrary->read($privacy); 
                            ?>
                            <?php if ($question_list_result == true) : ?>
                                <li><a href="<?php echo base_url(route_to( 'index-question' )) ?>"><?php echo lang("Localize.question_list") ?></a></li>
                            <?php endif ?>

                        </ul>
                    </li>
                <?php endif ?> 

            </ul>
        </li>
    
</ul>

<!-- Page menu -->
<?php endif ?>



<?php
    $n_advertisement = "advertisement";
    $advertisementresult = $rolepermissionLibrary->mainmenu($n_advertisement); 
?>
<?php if ($advertisementresult == true) : ?>
<!-- Advertisement menu -->
<ul class="nav-second-level">

        <li class="<?php echo ($menuname == "adds") ? "mm-active" : ""  ?>">
            <a class="has-arrow" href="#" aria-expanded="false"> <?php echo lang("Localize.advertisement") ?> </a>
                <ul class="nav-third-level">
                <?php
                    $advertisement_list = "advertisement_list";
                    $advertisement_list_result = $rolepermissionLibrary->read($advertisement_list); 
                ?>
                <?php if ($advertisement_list_result == true) : ?>
                    <li><a href="<?php echo base_url(route_to( 'index-add' )) ?>"><?php echo lang("Localize.advertisement_list") ?></a></li> 
                <?php endif ?>
                </ul>
        </li>
</ul>
<!-- Advertisement menu -->
<?php endif ?>

<!-- Front-end menu  -->

<?php
    $n_language = "language";
    $languageresult = $rolepermissionLibrary->mainmenu($n_language); 
?>
<?php if ($languageresult == true) : ?>
<!-- Language menu -->
<ul class="nav-second-level">
    <li class="<?php echo ($menuname == "languages" || $menuname == "localizestrings" || $menuname == "lanstrs") ? "mm-active" : ""  ?>">
            <a class="has-arrow" href="#" aria-expanded="false">  <?php echo lang("Localize.language") ?> </a>
                <ul class="nav-third-level">
                    <?php
                        $language_list = "language_list";
                        $language_list_result = $rolepermissionLibrary->read($language_list); 
                    ?>
                    <?php if ($language_list_result == true) : ?>
                        <li><a href="<?php echo base_url(route_to( 'index-language' )) ?>"><?php echo lang("Localize.language_list") ?></a></li>
                    <?php endif ?>
                    
                    <?php
                        $add_language_string = "add_language_string";
                        $add_language_string_result = $rolepermissionLibrary->read($add_language_string); 
                    ?>
                    <?php if ($add_language_string_result == true) : ?>
                        <li><a href="<?php echo base_url(route_to( 'new-langstring' )) ?>"><?php echo lang("Localize.add_language_string") ?></a></li>
                    <?php endif ?>   
              </ul>
        </li>
</ul>
<!-- Language menu -->
<?php endif ?>


    <ul class="nav-second-level">

        <?php
            $n_webconfig = "webconfig";
            $webconfig_result = $rolepermissionLibrary->read($n_webconfig); 
        ?>
        <?php if ($webconfig_result == true) : ?>
            <li><a href="<?php echo base_url(route_to( 'new-websetting' )) ?>"></i><?php echo lang("Localize.webconfig") ?></a></li> 
        <?php endif ?>
        
        <?php
            $n_social_media_list = "social_media_list";
            $social_media_list_result = $rolepermissionLibrary->read($n_social_media_list); 
        ?>
        <?php if ($social_media_list_result == true) : ?>

            <li><a href="<?php echo base_url(route_to( 'index-socialmedia' )) ?>"><?php echo lang("Localize.social_media_list") ?></a></li>
        <?php endif ?>

        <?php
            $n_email = "email";
            $email_result = $rolepermissionLibrary->read($n_email); 
        ?>
        <?php if ($email_result == true) : ?>   

            <li><a href="<?php echo base_url(route_to( 'new-email' )) ?>"><?php echo lang("Localize.email") ?></a></li>
        <?php endif ?>
        
        <?php
            $n_subscribe_list = "subscribe_list";
            $subscribe_list_result = $rolepermissionLibrary->read($n_subscribe_list); 
        ?>
        <?php if ($subscribe_list_result == true) : ?>
            <li><a href="<?php echo base_url(route_to( 'index-subscribe' )) ?>"><?php echo lang("Localize.subscribe_list") ?></a></li>
        <?php endif ?>

        <?php
            $n_db_backup = "db_backup";
            $db_backup_result = $rolepermissionLibrary->read($n_db_backup); 
        ?>
        <?php if ($db_backup_result == true) : ?>
            <li><a href="<?php echo base_url(route_to( 'backupdb-websetting' )) ?>"><?php echo lang("Localize.db_backup") ?></a></li>
        <?php endif ?>
    </ul>


</li>

<?php endif ?>
<header class="header">
        <!-- Header Content -->
        <div class="header_content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main_nav_container_outer d-flex flex-row align-items-end justify-content-center trans_400">
                            <nav class="main_nav">
                                <div class="main_nav_container d-flex flex-row align-items-center justify-content-lg-start justify-content-center">
                                    <div>
                                        <ul class="d-flex flex-row align-items-start justify-content-end">
                                            <li class="<?php if($menu==1){echo 'active';}?>"><a href="<?php echo site_url().'/web';?>">home</a></li>
                                            <li class="<?php if($menu==2){echo 'active';}?>"><a href="<?php echo site_url().'/web/about';?>">about</a></li>
                                            <li class="<?php if($menu==3){echo 'active';}?>"><a href="<?php echo site_url().'/web/admission';?>">admission</a></li>
                                        </ul>
                                    </div>
                                    <div class="logo_container text-center"><div class="trans_400"><a href="#"><img src="<?php echo base_url(). 'assets/images/gdjmLogo.png';?>" alt="" style="max-width: 130px;"></a></div></div>
                                    <div>
                                        <ul class="d-flex flex-row align-items-start justify-content-start">
                                            <li class="<?php if($menu==4){echo 'active';}?>"><a href="<?php echo site_url().'/web/downloads';?>">Downloads</a></li>
                        <li class="<?php if($menu==4){echo 'active';}?>"><a href="<?php echo site_url().'/web/gallery';?>">gallery</a></li>
                                            <li class="<?php if($menu==6){echo 'active';}?>"><a href="<?php echo site_url().'/web/contact';?>">contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="hamburger">
                                <i class="fa fa-bars trans_200"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            
            <!-- Header bar -->

        </div>

    </header>

    <!-- Menu -->
    <div class="menu">
        <div class="menu_background">
            <div class="menu_container d-flex flex-column align-items-end justify-content-start">
                <div class="menu_close">close</div>                
                <nav class="menu_nav">
                    <ul class="text-right">
                        <li class="<?php if($menu==1){echo 'active';}?>"><a href="<?php echo site_url().'/web';?>">home</a></li>
                        <li class="<?php if($menu==2){echo 'active';}?>"><a href="<?php echo site_url().'/web/about';?>">about</a></li>
                        <li class="<?php if($menu==3){echo 'active';}?>"><a href="<?php echo site_url().'/web/admission';?>">admission</a></li>
                        <li class="<?php if($menu==4){echo 'active';}?>"><a href="<?php echo site_url().'/web/uc';?>">Downloads</a></li>
                        <li class="<?php if($menu==4){echo 'active';}?>"><a href="<?php echo site_url().'/web/uc';?>">gallery</a></li>
                        <li class="<?php if($menu==6){echo 'active';}?>"><a href="<?php echo site_url().'/web/contact';?>">contact</a></li>
                    </ul>
                </nav>
                <div class="menu_links">
                    <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="#">facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
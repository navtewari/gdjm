<div class="services animated wow zoomIn" data-wow-delay=".5s" style="margin:0!important;padding:1em!important;">
        <div class="container">
            <h3>Destinations</h3>
        </div>
    </div>
<?php $dest=$_GET['dest'];?>
<?php if($dest=='assam'){?>
<!-- Assam --> 
    <div class="banner-bottom-slider">
            <div class="container">                
                <div class="col-md-4 banner-bottom-slider-left animated wow slideInLeft" data-wow-delay=".1s">
                    <h3 class="destHeading">Let's go to <span>Assam</span></h3>      
                </div>
                <div class="col-md-8 banner-bottom-slider-right animated wow slideInRight" data-wow-delay=".1s">
                    <ul id="flexiselDemo1">
                    <?php for($loop=1; $loop<=6;$loop++){?> 
                        <li>
                            <div class="banner-bottom-slider-right1">
                                <img src="<?php echo base_url(). 'assets/images/slider/Assam'.$loop.'.jpg';?>" alt=" " class="img-responsive" />
                            </div>
                        </li>                        
                    <?php }?>
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="<?php echo base_url(). 'assets/js/jquery.flexisel.js';?>"></script>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>    
    <div class="history" style="background:#FFFACD;">
        <div class="container">
            <div class="col-md-6 history-left animated wow slideInLeft" data-wow-delay=".5s">
                <h3>Best of wild life</h3>                
                <ul class="list-group" style="margin-top: 1em;">
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Camping at Nameri Eco camp at Nameri National Park</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Jungle walk accompanied by forest guard</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> River rafting on Jia Bharali.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Cycle tour to the nearest tribal village.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Visit UNESCO Natural world heritage site of Assam Kaziranga National park & Search for one horned Rhinos, tigers on jeep & Elephants safari.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Introduction of Assamese village life & folk dance &lAssamese traditional cuisines.</li>
                </ul>
            </div>
            <div class="col-md-6 history-right animated wow slideInRight" data-wow-delay=".5s">
                <figure class="blog-figure">
                    <img src="<?php echo base_url(). 'assets/images/slider/Assam2.jpg';?>" alt=" " class="img-responsive" />
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                        <h4><a href="index.html">Destination-Assam</a></h4>                                      
                                        <h4 style="margin-top: 1em;">Best of Wild-life</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="history" style="background:#E6E6FA;">
        <div class="container">                                    
            <div class="col-md-6 history-right animated wow slideInRight" data-wow-delay=".5s">
                <figure class="blog-figure">
                    <img src="<?php echo base_url(). 'assets/images/slider/Assam5.jpg';?>" alt=" " class="img-responsive" />
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                          <h4><a href="index.html">Destination-Assam</a></h4>                                      
                                        <h4 style="margin-top: 1em;">A walk on the historical City "Sivsagar" & largest river Island "Majuli"</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-6 history-left animated wow slideInLeft" data-wow-delay=".5s">
                <h3>A walk on the historical City "Sivsagar" & largest river Island "Majuli"</h3>                
                <ul class="list-group" style="margin-top: 1em;">
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Heritage Neo Vaishnavite Monastry Visit</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Missing Tribal village</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Experiencing the beauty of Monuments of Ahom Kingdom.</li>                    
                </ul>
            </div>            
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="history" style="background: #FAEBD7;">
        <div class="container">                                    
            <div class="col-md-6 history-left animated wow slideInLeft" data-wow-delay=".5s">
                <h3>Delight Of Assam</h3>                
                <ul class="list-group" style="margin-top: 1em;">
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Visit Kamakhya shrine</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Cruise ride on the Mighty River Brahmaputra.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Rafting on Jia Bharali.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Stay at Heritage tea Bunglows.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Track Rhinos & tigers at UNESCO World Heritage Site Kaziranga National Park on Jeep/Elephant Safari.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Walk on the Largest River Island and witness dancing monks of the neo-Vaishnavite sect and their way of life at Majuli.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Glimps of the Monuments of the capital of Ahom Kingdom “Sivsagar”.</li>
                </ul>
            </div>
            <div class="col-md-6 history-right animated wow slideInRight" data-wow-delay=".5s">
                <figure class="blog-figure">
                    <img src="<?php echo base_url(). 'assets/images/slider/Assam4.jpg';?>" alt=" " class="img-responsive" />
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                        <h4><a href="index.html">Destination-Assam</a></h4>                                      
                                        <h4 style="margin-top: 1em;">Delight Of Assam</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>        
        </div>
    </div>
<!-- //Assam -->
<?php }else if($dest=='meghalaya'){?>
<!-- Meghalaya --> 
    <div class="banner-bottom-slider">
        <div class="container">
            <div class="col-md-4 banner-bottom-slider-left animated wow slideInLeft" data-wow-delay=".1s">
                <h3 class="destHeading">Let's go to <span>Meghalaya</span></h3>      
            </div>
            <div class="col-md-8 banner-bottom-slider-right animated wow slideInRight" data-wow-delay=".1s">
                <ul id="flexiselDemo1">
                <?php for($loop=1; $loop<=5;$loop++){?> 
                    <li>
                        <div class="banner-bottom-slider-right1">
                            <img src="<?php echo base_url(). 'assets/images/slider/megh'.$loop.'.jpg';?>" alt=" " class="img-responsive" />
                        </div>
                    </li>                        
                <?php }?>
                </ul>
                <script type="text/javascript">
                    $(window).load(function () {
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 3,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });

                    });
                </script>
                <script type="text/javascript" src="<?php echo base_url(). 'assets/js/jquery.flexisel.js';?>"></script>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>    
    <div class="history" style="background:#F0FFFF;">
        <div class="container">
            <div class="col-md-6 history-left animated wow slideInLeft" data-wow-delay=".5s">
                <h3>Meghalaya Delight</h3>                
                <ul class="list-group" style="margin-top: 1em;">
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Visit World’s wettest place "Cherrapunjee".</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Expeirncinging the beauty of India’s highest waterfall.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Trek & camp in smith village near shillong often called "Scotland of the East"</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Walk on Asia’s cleanest village "Mawlynong"</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Camping & Boating at Dawki & Krang suri falls Jowai</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Discover Ranikor Beach, Mairang & Mawsynram - hunt for the Mahseer in Kynshi river or enjoy hiking on the historic Devid Scott Trail</li>
                </ul>
            </div>
            <div class="col-md-6 history-right animated wow slideInRight" data-wow-delay=".5s">
                <figure class="blog-figure">
                    <img src="<?php echo base_url(). 'assets/images/slider/megh3.jpg';?>" alt=" " class="img-responsive" />
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                        <h4><a href="index.html">Destination-Meghalaya</a></h4>                                     
                                        <h4 style="margin-top: 1em;">Meghalaya Delight</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    
<!-- //Meghalaya -->
<?php }else if($dest=='arunachal'){?>
<!-- Arunanchal --> 
    <div class="banner-bottom-slider">
            <div class="container">
                <div class="col-md-4 banner-bottom-slider-left animated wow slideInLeft" data-wow-delay=".1s">
                    <h3 class="destHeading" style="font-size: 1em!important;line-height: 2.5em!important;">Let's go to <span>Arunachal Pradesh</span></h3>      
                </div>
                <div class="col-md-8 banner-bottom-slider-right animated wow slideInRight" data-wow-delay=".1s">
                    <ul id="flexiselDemo1">
                    <?php for($loop=1; $loop<=5;$loop++){?> 
                        <li>
                            <div class="banner-bottom-slider-right1">
                                <img src="<?php echo base_url(). 'assets/images/slider/aru'.$loop.'.jpg';?>" alt=" " class="img-responsive" />
                            </div>
                        </li>                        
                    <?php }?>
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 3,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 3
                                    }
                                }
                            });

                        });
                    </script>
                    <script type="text/javascript" src="<?php echo base_url(). 'assets/js/jquery.flexisel.js';?>"></script>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>    
    <div class="history" style="background:#FFFACD;">
        <div class="container">
            <div class="col-md-6 history-left animated wow slideInLeft" data-wow-delay=".5s">
                <h3>Land Of Clouds & Mountains</h3>                
                <ul class="list-group" style="margin-top: 1em;">
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Largest Range of Orchid found in India (Bomdila)</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Experience the serenity and beauty of Dirang & Sangti Valley, walk through lovely kiwi plantations.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Drive through some of the highest mountain passes in India</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> 8-Feet high "Golden Budha" In Tawang and you can enjoy the picturesque natural beauty of “Madhuri Lake” & feel the adventure throughout the journey. </li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Monpa tribal villages.</li>                    
                </ul>
            </div>
            <div class="col-md-6 history-right animated wow slideInRight" data-wow-delay=".5s">
                <figure class="blog-figure">
                    <img src="<?php echo base_url(). 'assets/images/slider/aru3.jpg';?>" alt=" " class="img-responsive" />
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                        <h4><a href="index.html">Destination-Arunachal Pradesh</a></h4>                                      
                                        <h4 style="margin-top: 1em;">Land Of Clouds & Mountains</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="history" style="background:#E6E6FA;">
        <div class="container">                                    
            <div class="col-md-6 history-right animated wow slideInRight" data-wow-delay=".5s">
                <figure class="blog-figure">
                    <img src="<?php echo base_url(). 'assets/images/slider/aru1.jpg';?>" alt=" " class="img-responsive" />
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                          <h4><a href="index.html">Destination-Arunachal Pradesh</a></h4>                                      
                                        <h4 style="margin-top: 1em;">The land of APATANIS With Special Glimpses of Dree Festival </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-md-6 history-left animated wow slideInLeft" data-wow-delay=".5s">
                <h3>The land of APATANIS With Special Glimpses of Dree Festival </h3>                
                <ul class="list-group" style="margin-top: 1em;">
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Beautiful Zero valley</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Capture exquisite images of the Dree Tribal Festival of Apatanis & their Life Style.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Stay in the beautiful valley</li>                    
                </ul>
            </div>            
            <div class="clearfix"> </div>
        </div>
    </div>
    
<!-- //Arunanchal -->    
<?php }else if($dest=='nagaland'){?>
<!-- Nagaland --> 
    <div class="banner-bottom-slider">
        <div class="container">
            <div class="col-md-4 banner-bottom-slider-left animated wow slideInLeft" data-wow-delay=".1s">
                <h3 class="destHeading" style="font-size: .8em!important;line-height: 2.5em!important;">Let's go to <span>Manipur & Nagaland</span></h3>      
            </div>
            <div class="col-md-8 banner-bottom-slider-right animated wow slideInRight" data-wow-delay=".1s">
                <ul id="flexiselDemo1">
                <?php for($loop=1; $loop<=6;$loop++){?> 
                    <li>
                        <div class="banner-bottom-slider-right1">
                            <img src="<?php echo base_url(). 'assets/images/slider/naga'.$loop.'.jpg';?>" alt=" " class="img-responsive" />
                        </div>
                    </li>                        
                <?php }?>
                </ul>
                <script type="text/javascript">
                    $(window).load(function () {
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 3,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: true,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint: 480,
                                    visibleItems: 1
                                },
                                landscape: {
                                    changePoint: 640,
                                    visibleItems: 2
                                },
                                tablet: {
                                    changePoint: 768,
                                    visibleItems: 3
                                }
                            }
                        });

                    });
                </script>
                <script type="text/javascript" src="<?php echo base_url(). 'assets/js/jquery.flexisel.js';?>"></script>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>    
    <div class="history" style="background:#F0FFFF;">
        <div class="container">
            <div class="col-md-6 history-left animated wow slideInLeft" data-wow-delay=".5s">
                <h3>Cultural Extravaganza</h3>                
                <ul class="list-group" style="margin-top: 1em;">
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Sangai Festival-Showcase the best of their Heritage at Manipur.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Visit the floating island on the Loktak Lake.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Maybe a short cross over to Myanmar from Moreh</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Interact with Naga tribes as they perform traditional dances, songs and games; taste local delicacies at HORNBILL FESTIVAL.</li>
                    <li class="list-group-item"><i class="fa fa-arrow-circle-right"></i> Trekking from KHONOMA VILLAGE to Dzoukou Valley.</li>                    
                </ul>
            </div>
            <div class="col-md-6 history-right animated wow slideInRight" data-wow-delay=".5s">
                <figure class="blog-figure">
                    <img src="<?php echo base_url(). 'assets/images/slider/naga4.jpg';?>" alt=" " class="img-responsive" />
                    <div class="blog-discription">
                        <div class="theme-border">
                            <div class="tg-display-table">
                                <div class="tg-display-table-cell">
                                    <div class="blog-title">
                                        <h4><a href="index.html">Destination-Manipur & Nagaland</a></h4>                  
                                        <h4 style="margin-top: 1em;">Cultural Extravaganza</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    
<!-- //Nagaland -->
<?php }?>

  
    <!-- Player of the month -->
    <div class="player">
        <div class="container">
            <div class="row">
                <div class="col-xl-6" style="padding-top: 50px;">
                    <div>
                        <div class="section_title_container">
                            <div class="section_title"><h1>Welcome to GDJM</h1></div>                            
                        </div>                        
                        <div style="margin-top:2em;">
                            <p align="justify">Our school is situated far from the hustle and bustle of city life, surrounded by the peaceful mountains terrian a really healthy and congenial atmosphere, plans to introduce a new concept and effective technique of education in English medium. </p>
                            <p align="justify">At our school, we promote a cumulative learning environment that helps in the development of the student's ...</p>
                            <div class="button about_button" style="margin-top: 2em;"><a href="<?php echo site_url('web/about');?>">Read More...</a></div>
                        </div>                        
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="player_content" style="background: #F58A43;">
                        <div class="section_title_container">
                            <div class="section_title"><h2 style="color:#060426">&nbsp;&nbsp;Recent News/ Events</h2></div>
                        </div>                        
                        <div style="margin-top:2em;">
                            <div class="vticker">
                                <ul>
                                <?php foreach ($news as $item) { ?>                  
                                    <li>
                                        <blockquote>
                                        <b><?php echo $item->SUBJECT;?></b><br> <?php echo $item->NEWS;?>
                                        <?php if($item->PATH_ATTACH != 'x'){?>
                                            <a href="<?php ADMIN___.'_assets_/downloads/sample.png';?>" style="color:#ffff00; font-size: 11px">Click for detail...</a>
                                        <?php }?>
                                        </blockquote>
                                    </li>
                                <?php } ?>
                                </ul>    
                            </div>
                            <div style="float:right;">
                                <button class="btn btn-danger up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
                                <button class="btn btn-danger down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
                                <button class="btn btn-primary toggle"></button>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- News -->

    <div class="news">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container">
                        <div class="section_title"><h1>Quick Links</h1></div>                        
                    </div>
                </div>
            </div>
            <div class="row news_row">
                
                <!-- News Post -->
                <div class="col-lg-4">
                    <div class="news_post">
                        <div class="news_post_image">
                            <img src="images/news_1.jpg" alt="">
                            <div class="news_post_date">
                                <a href="#">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div>1</div>
                                        <div></div>
                                    </div>
                                </a>    
                            </div>
                        </div>
                        <div class="news_post_content">
                            <div class="news_post_title"><a href="#">Principal's Desk</a></div>
                            <div class="news_post_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan dolor id enim lacinia, sed feugiat ex suscipit.</p>
                                <div class="button about_button" style="margin-top: 2em;"><a href="#">Read More...</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Post -->
                <div class="col-lg-4">
                    <div class="news_post">
                        <div class="news_post_image">
                            <img src="images/news_2.jpg" alt="">
                            <div class="news_post_date">
                                <a href="#">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div>2</div>
                                        <div></div>
                                    </div>
                                </a>    
                            </div>
                        </div>
                        <div class="news_post_content">                            
                            <div class="news_post_title"><a href="#">Break & Vacations</a></div>
                            <div class="news_post_text">
                                <p>In addition to normal gazetted holidays, the school observes the following vacations breaks :-</p>
                                <p>(a) Summer vacation - May-June 50 days<br/>
                                    (b) Winter Break - Dec –Jan 15 days</p>                                    
                                <div class="button about_button" style="margin-top: 2em;"><a href="#">Read More...</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- News Post -->
                <div class="col-lg-4">
                    <div class="news_post">
                        <div class="news_post_image">
                            <img src="images/news_3.jpg" alt="">
                            <div class="news_post_date">
                                <a href="#">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <div>3</div>
                                        <div></div>
                                    </div>
                                </a>    
                            </div>
                        </div>
                        <div class="news_post_content">                            
                            <div class="news_post_title"><a href="#">Rules & Regulations</a></div>
                            <div class="news_post_text">
                                <p>Regular Parent-Teacher meeting is organized after every Unit Test. Official Hours are as follows</p>
                                <p>(i) Summer : 09:00 AM to 01:00 PM.<br>
                                    (ii) Winter : 09:30 AM to 01:30 PM</p>
                                    <div class="button about_button" style="margin-top: 2em;"><a href="#">Read More...</a></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
   
   
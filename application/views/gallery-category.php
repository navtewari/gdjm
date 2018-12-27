<div class="player">
    <div class="container">
        <div class="row" style="margin-top:5em;">
            <div class="col">
                <div class="section_title_container">
                    <div class="section_title text-center"><h1>Our Gallery</h1></div>
                </div>
            </div>
        </div>
        <div class="row results_row">
            <div class="col">
                <div class="results_title_container text-center">
                    <div class="results_title">GDJM Blossoms</div>                        
                </div>
            </div>
        </div>
    </div>
</div>

<div class="news" style="background: #fff;">
        <div class="container">            
            <div class="row news_row" style="margin-top:0px !important;">                
                <!-- News Post -->
                <?php foreach ($gallery_category as $item) { ?> 
                    <a href="<?php echo site_url('web/gallery_detail/' . $item->CATEG_ID); ?>">
                <div class="col-lg-4">
                    <div class="news_post">
                        <div class="news_post_image">
                            <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive">
                        </div>
                        <div class="news_post_content">                           
                            <div class="news_post_title"><a href="<?php echo site_url('web/gallery_detail/' . $item->CATEG_ID); ?>"><?php echo $item->CATEGORY; ?></a></div>
                            <div class="news_post_text">
                                <p><?php echo $item->DESC; ?></p>
                            </div>
                        </div>
                    </div>
                </div>      
                </a>          
                 <?php } ?> 
            </div>
        </div>
    </div>

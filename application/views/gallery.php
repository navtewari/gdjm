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
                    <div class="results_title">
                        <?php foreach ($gallery as $item) { ?>
                            <h3>Photos of Category: <?php echo $item->CATEGORY; ?></h3>                    
                            <?php break;
                        }
                        ?>  
                    </div>    
                    <a href="<?php echo site_url('web/gallery') ?>"  style="color:#ff6600"><i class="fa fa-undo" aria-hidden="true"></i> Back to Categories</a>                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="news" style="background: #fff;">
        <div class="container">            
            <div class="row news_row" style="margin-top:0px !important;">                
                <!-- News Post -->
                <?php foreach ($gallery as $item) { ?>                    
                <div class="col-lg-4">
                    <div class="news_post">
                        <div class="news_post_image">
                            <div class="gallery-grid1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" rel="GDJM" class="b-link-stripe b-animate-go thickbox">
                                <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive"/>                                
                            </a>
                        </div>
                        </div>                        
                    </div>
                </div>                      
                 <?php } ?> 
            </div>
        </div>
    </div>

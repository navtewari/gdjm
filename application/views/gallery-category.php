<div class="gallery animated wow zoomIn" data-wow-delay=".5s">
    <div class="container"> 
        <div class="row" style="margin-top:5em;">
            <div class="col">
                <div class="section_title_container">
                    <div class="section_title text-center"><h3>Our Gallery</h3></div>
                </div>
            </div>
        </div>
        <div class="gallery-grids">
            <div class="gallery-grid1">
            <?php foreach ($gallery_category as $item) { ?> 
                <a href="<?php echo site_url('web/gallery_detail/' . $item->CATEG_ID); ?>">
                    <div class="col-md-4" style="margin-bottom: 1.5em;">               
                        <div class="gallery-grid1 animated wow slideInUp" data-wow-delay=".5s">                                
                                <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive"><br>
                                <h4 align="center"><?php echo $item->CATEGORY; ?></h4>
                                <?php if ($item->DESC != '') { ?>
                                    <p align="center"><?php echo $item->DESC; ?></p>
                                <?php } ?>
                            </div>                                          
                    </div>
                </a>
            <?php } ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</div>
<!-- //gallery inner -->
<!-- footer -->

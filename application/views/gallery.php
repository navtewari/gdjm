<div class="gallery animated wow zoomIn" data-wow-delay=".5s">
    <div class="container">        
        <?php foreach ($gallery as $item) { ?>
            <h3><?php echo $item->CATEGORY; ?></h3>                    
            <?php break;
        }
        ?>  
        <a href="<?php echo site_url('web/gallery') ?>"  style="color:#ff6600"><i class="fa fa-undo" aria-hidden="true"></i> Back to Categories</a>
        <div class="gallery-grids">
            <div class="gallery-grid1">
            <?php foreach ($gallery as $item) { ?>
                    <div class="col-md-4" style="margin-bottom: 1.5em;">               
                        <div class="gallery-grid1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" rel="Spirit Adventure" class="b-link-stripe b-animate-go thickbox">
                                <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive" />                                
                            </a>
                        </div>                                                            
                    </div>
            <?php } ?>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
<!-- script -->
<script src="<?php echo base_url() . 'assets/js/jquery.chocolat.js'; ?>"></script>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/css/chocolat.css'; ?>" type="text/css" media="screen" charset="utf-8">
<!--light-box-files-->
<script type="text/javascript" charset="utf-8">
    $(function () {
        $('.gallery-grid1 a').Chocolat();
    });
</script>
<!-- script -->
<!-- //gallery inner -->
<!-- footer -->

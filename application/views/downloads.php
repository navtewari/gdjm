<div class="player">
    <div class="container">
        <div class="row" style="margin-top:5em;">
            <div class="col">
                <div class="section_title_container">
                    <div class="section_title text-center"><h1>Downloads @ GDJM</h1></div>
                </div>
            </div>
        </div>
        <div class="row results_row">
            <div class="col">
                <div class="results_title_container text-center">
                    <div class="results_title">Important downloads</div>                        
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="player_content">
                    <div>
                        <p>This section facilitates students/ parents to downloads significant documents in general.</p>
                        <p>
                        	<?php foreach ($downloads as $item) { ?>
                                <?php $stringCut = substr($item->TITLE, 0, 28);?>   
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6" style="border: #000090 solid 0px; float: left; padding: 15px 0px">
                                    <a href="<?php echo ADMIN___.'/_assets_/downloads/'.$item->PATH_;?>" target="_blank">
                                        <img src="<?php echo ADMIN___ . '/_assets_/downloads/sample.png' ;?>?version=1.0" border="0" align="left" width="15%" style="padding: 0px; border: #0000ff solid 0px" />
                                    </a>
                                    <a href="<?php echo ADMIN___.'/_assets_/downloads/'.$item->PATH_;?>" target="_blank" style="font-size: 20px;position: absolute; padding: 2% 4px; border: #0000ff solid 0px; margin-top: 0px">
                                        <?php echo $stringCut;?>
                                    </a>
                                </div>   
                        	<?php } ?>
                        </p>                   
                    </div>                        
                </div>
            </div>
            <div class="col-xl-4">
                <div class="player_content">
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
</div>
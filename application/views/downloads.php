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
                    <div>
                        <div class="card card-body bg-light">
                            <h4><b>RE- ADMISSION</b></h4><br>
                            <p>Regular absence without leave or unexplained absence for more than six consecutive working days or non payment of school fee renders the student liable to his/her name being struck off from the school rolls. Re - admission may be granted only on the payment of fresh admission fee at the discretion of Principal.</p>
                        </div>
                        <br/>
                        <div class="card card-body bg-light">
                            <h4><b>WITHDRAWAL</b></h4><br>
                            <p>A prior one month's notice or school fee in lieu thereof is to be given when the student is to be withdrawn. The school authorities on anyone of the following grounds, can expel a student.</p><br/>
                            <ul class="list-group"style="margin-left:2em;">
                                <li class="list-group-item">Irregularity in attendance</li>
                                <li class="list-group-item">Behaviourial problems</li>
                                <li class="list-group-item">Non-payment of fees/ School dues.</li>                   
                            </ul>
                        </div>
                        <br/>
                        <div class="card card-body bg-light">
                            <h4><b>FEE STRUCTURE</b></h4><br>                
                            <ul class="list-group"style="margin-left:2em;">
                                <li class="list-group-item">Tuition & Hostel fee is payable monthly during first 15 days of the month.</li>
                                <li class="list-group-item">The school accepts fee through cash deposit during first 15 days of month. After that, fine of Rs 50/- will be charged. </li>                                      
                            </ul>
                        </div>                            
                    </div>                        
                </div>
            </div>
        </div>
    </div>
</div>
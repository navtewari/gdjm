<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/styles/contact.css';?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/styles/contact_responsive.css';?>">
<div class="contact">
        <div class="container">
            <div class="row">
                <!-- Content -->
                <div class="col-lg-6">
                    <div class="contact_content">
                        <div class="contact_title">Get in touch with us</div>
                        <div class="contact_text">
                            <p>If you have any questions, please call us or fill in the form below and we will get back to you very soon.</p>
                        </div>
                        <div class="contact_form_container">                            
                                <form action="<?PHP echo site_url('web/contactus'); ?>" method="post" class="contact_form" id="contact_form">
                                    <?php if ($this->session->flashdata('_msg_')) { ?>
                                        <div class="row">
                                            <div class="col-sm-12 border-bottom" style="text-align: center; padding: 5px; color: #ff0000; font-weight: bold; background: #ffff00; border-radius: 10px">
                                                <?php echo $this->session->flashdata('_msg_'); ?>
                                            </div>
                                            <div class="col-sm-12">
                                                &nbsp;
                                            </div>
                                        </div>
                                    <?php } ?>
                                <input type="text" name="txtname" class="contact_input" placeholder="Name" required="required">
                                <input type="email" name="txtemail" class="contact_input" placeholder="Mail" required="required">
                                <input type="text" name="txtPhone" class="contact_input" placeholder="Contact" required="required">
                                <textarea nmae="txtmessage" class="contact_input contact_textarea" placeholder="Message" required="required"></textarea>
                                <input class="contact_button button" type="submit" value="Send Message">
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- Image -->
                <div class="col-lg-6">
                    <div class="contact_image">
                        <div class="background_image" style="background-image:url(<?php echo base_url().'assets/images/contact_image.jpg';?>)"></div>
                        <img src="images/contact_image.jpg" alt="">
                    </div>
                </div>
            </div>            
        </div>
    </div>
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct() {
        parent::__construct();   
         $this->load->model('my_model', 'mm');     
    }

    function index() {        
        $data_['pageName'] = 'Home';
        $data_['menu'] = 1;        
        $this->load->view('templates/header', $data_);
        $this->load->view('templates/menu', $data_);
        $this->load->view('templates/banner-index');       

        $this->load->view('index', $data_);
        $this->load->view('templates/footer');
    }

    function about() {        
        $data_['pageName'] = 'About Us';
        $data_['menu'] = 2;        
        $this->load->view('templates/header', $data_);
        $this->load->view('templates/menu', $data_);
        $this->load->view('templates/banner');        
        
        $this->load->view('about', $data_);
        $this->load->view('templates/footer');
    }

    function admission() {        
        $data_['pageName'] = 'About Us';
        $data_['menu'] = 3;        
        $this->load->view('templates/header', $data_);
        $this->load->view('templates/menu', $data_);
        $this->load->view('templates/banner');
        
        $this->load->view('admissions', $data_);
        $this->load->view('templates/footer');
    }


    function uc() {
        $data_['pageName'] = 'Under Construction';
        $data_['menu'] = 4;        
        $this->load->view('templates/header', $data_);
        $this->load->view('templates/menu', $data_);
        $this->load->view('templates/banner');        
     
        $this->load->view('uc');
        $this->load->view('templates/footer');
    }

    function downloads() {        
        $data_['pageName'] = 'Downloads';
        $data_['menu'] = 4;
        $data_['downloads'] = $this->mm->getDownloads();
        $this->load->view('templates/header', $data_);
        $this->load->view('templates/menu', $data_);
        $this->load->view('templates/banner');

        $this->load->view('downloads', $data_);
        $this->load->view('templates/footer');
    }

    public function gallery() {
        $data['menu'] = 5;
        $data['gallery_category'] = $this->mm->get_gallery_category();    
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('templates/banner');
        $this->load->view('gallery-category',$data);
        $this->load->view('templates/footer');
    }
    
    public function gallery_detail($id) {
        $data['menu'] = 5;
        $data['gallery'] = $this->mm->get_gallery($id);        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('templates/banner');
        $this->load->view('gallery',$data);
        $this->load->view('templates/footer');
    }
    

    function contact() {
        $data_['pageName'] = 'Contact Us';
        $data_['menu'] = 6;        
        $this->load->view('templates/header', $data_);
        $this->load->view('templates/menu', $data_);
        $this->load->view('templates/banner');        
     
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }

    function contactus() {
        $this->email->set_mailtype("html");

        $msg = "Enquiry below:<br /><br />";        
        $msg = $msg . "Message: ".$this->input->post('txtmessage');
        $msg = $msg . "<br />";
        $msg = $msg . "From<br />";
        $msg = $msg . "<br /><br />";

        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . "Name: ".$this->input->post('txtname');
        $msg = $msg . "<br />";
        $msg = $msg . "Email: ".$this->input->post('txtemail');
        $msg = $msg . "<br />";
        $msg = $msg . "Contact Number: ".$this->input->post('txtPhone');

        $to_ = 'navtewari@gmail.com';
        $from_ = $this->input->post('txtemail');
        $name_ = 'Enquiry...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Enquiry from GDJM website');
        $this->email->message($msg);

        if ($this->email->send()) {
            $this->session->set_flashdata('_msg_', 'Thanks for Contacting us. We will get back to you very soon...');
        } else {
            $this->session->set_flashdata('_msg_', 'Something goes wrong. Please try again...');
        }

        redirect('web/contact');
    }
    

}

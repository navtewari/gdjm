<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
        
    function get_gallery($id) {
        $this->db->select('a.*, b.*');
        $this->db->from('gallery a');
        $this->db->from('gallery_category b');

        $this->db->where('a.CATEG_ID', $id);
        $this->db->where('b.CATEG_ID', $id);

        $this->db->where('a.STATUS', 1);
        $query = $this->db->get();
        return $query->result();
    }

    function get_gallery_category() {
        $this->db->select('a.*, b.PHOTO_');
        $this->db->group_by('b.CATEG_ID');
        $this->db->from('gallery_category a');
        $this->db->join('gallery b', 'a.CATEG_ID = b.CATEG_ID');
        $this->db->where('a.STATUS', 1);
        $this->db->order_by('a.DATE_', 'desc');

        $query = $this->db->get();       

        return $query->result();
    }

    function _db_error() {
        //exception handling ------------------
        if ($this->db->trans_status() == FALSE) {
            redirect('web/uc');
        }
        //-------------------------------------
    }
}

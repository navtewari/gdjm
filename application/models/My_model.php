<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function getallnews(){
        $this->db->order_by('ID', 'desc');
        $this->db->where('STATUS',1);
        $query = $this->db->get('newsevents');
        // Exceptional Handling
            $this->_db_error();
        // --------------------
        return $query->result();
    }
    function get_most_recent_news() {
        $this->db->where('DATE_FORMAT(DATE_START, "%Y-%m-%d")<=',date('Y-m-d'));
        $this->db->where('DATE_FORMAT(DATE_END, "%Y-%m-%d")>=',date('Y-m-d'));
        //$this->db->where('(SUBSTRING_INDEX(DATE_, "/", -1))>=',(date('Y')));
        $this->db->order_by('ID', 'desc');
        $this->db->where('STATUS',1);
        $query = $this->db->get('newsevents');
        // Exceptional Handling
            $this->_db_error();
        // --------------------
        return $query->result();
    }
    function get_most_recent_imp_dates(){
        $this->db->order_by('IMPDTID', 'desc');
        $this->db->select('IMPDTID, IMP_DATE_EVENT, IMP_DATE, DESC_, PATH_, DATE(DATE_) as DATE_');
        $this->db->where('STATUS_',1);
        $query = $this->db->get('importantdates');
        // Exceptional Handling
            $this->_db_error();
        // --------------------
        return $query->result();
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

    function getDownloads(){
        $query = $this->db->get('downloads');
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

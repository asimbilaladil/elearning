<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CertificationModel extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    public function insert( $data ){

        if ($this->db->insert('certification', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }

    
    public function getUserById($id){
        $this->db->select('*');
        $this->db->from('certification');
        $this->db->where('user_id', $id);
        $quary_result=$this->db->get();
        $result=$quary_result->row();
        return $result;
    }


    public function update() {

    }
    
}
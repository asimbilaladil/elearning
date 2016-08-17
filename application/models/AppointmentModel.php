<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AppointmentModel extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    public function insert( $data ){

        if ($this->db->insert('appointment', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }

    public function getAppointmentByDate( $date ) {
        $this->db->select('*');
        $this->db->from('appointment');
        $this->db->where('date', $date);
        $quary_result=$this->db->get();
        $result=$quary_result->result();
        return $result;   
    }
    
}
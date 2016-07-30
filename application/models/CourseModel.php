<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CourseModel extends CI_Model {

    
    function __construct() {
        parent::__construct();

    }

    public function insert( $data ){

        if ($this->db->insert('courses', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }

    public function getCourses() {
        $this->db->select('*');
        $this->db->from( 'courses' );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;         
    }
    
    public function update() {

    }
    
}
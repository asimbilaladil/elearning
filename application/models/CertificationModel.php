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

    
    public function update() {

    }
    
}
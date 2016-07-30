<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserAtemptModuleModel extends CI_Model {

    
    function __construct() {
        parent::__construct();

    }

    public function insert( $data ){

        if ($this->db->insert('user_attempt_module', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }
 

    

}
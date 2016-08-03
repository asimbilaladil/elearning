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
 
    //SELECT COUNT(id) as attemptCount FROM user_attempt_module where user_id = 2
    public function getUserAttemptCount($id) {
        $query = $this->db->query('SELECT COUNT(id) as attemptCount FROM user_attempt_module where user_id = ' . $id);
        return $query->row();
    }

}
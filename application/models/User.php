<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User extends CI_Model {

    
    function __construct() {
        parent::__construct();

    }

    public function checkUserLogin($userEmail, $password){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_email', $userEmail);
        $this->db->where('password', $password);
        $quary_result=$this->db->get();
        $result=$quary_result->row();
        
        return $result;
    }


    public function checkIfUserExist($userEmail) {

        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_email', $userEmail);
        $quary_result=$this->db->get();
        $result=$quary_result->row();
        return $result;
    }


    public function insert( $data ){

        if ($this->db->insert('users', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }  

    public function update() {

    }
    
}
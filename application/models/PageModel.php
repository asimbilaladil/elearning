<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class PageModel extends CI_Model {

    
    function __construct() {
        parent::__construct();

    }

    public function insert( $data ){

        if ($this->db->insert('pages', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }

    public function getPages() {
        $this->db->select('*');
        $this->db->from( 'pages' );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
     
        return $result;         
    }

    public function getPageById($id) {

        $this->db->select('*');
        $this->db->from('pages');
        $this->db->where('id', $id);
        $quary_result=$this->db->get();
        $result=$quary_result->result();

        return $result;
    }
    
     
    public function update( $id ,$data ){

        $this->db->where( 'id', $id );
        $result = $this->db->update( 'pages' ,$data);
        if ( $result ) {

            return true;

        } 

        return false;

    }
    
}
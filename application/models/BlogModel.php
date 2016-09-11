<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class BlogModel extends CI_Model {

    
    function __construct() {
        parent::__construct();

    }

    public function insert( $data ){

        if ($this->db->insert('blog', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }

    public function getBlog() {
        $this->db->select('*');
        $this->db->from( 'blog' );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;         
    }

    public function getBlogById($id) {

        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('id', $id);
        $quary_result=$this->db->get();
        $result=$quary_result->result();
        return $result;
    }
    //insert Blog comments
    public function insertComment( $data ){

        if ($this->db->insert('comment', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }
   //get blog comment using blog id
    public function getCommentByBlogId($id) {

        $this->db->select('*');
        $this->db->from('comment');
        $this->db->where('blog_id', $id);
        $quary_result=$this->db->get();
        $result=$quary_result->result();
        return $result;
    }  
    public function update() {

    }
    
}
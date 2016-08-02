<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class QuizModel extends CI_Model {

    
    function __construct() {
        parent::__construct();

    }

    public function insert( $data ){

        if ($this->db->insert('quiz', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }

    public function getCourses() {
        $this->db->select('*');
        $this->db->from( 'quiz' );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;         
    }

    public function getQuizById($id) {

        $this->db->select('*');
        $this->db->from('quiz');
        $this->db->where('course_id', $id);
        $quary_result=$this->db->get();
        $result=$quary_result->result();
        return $result;
    }

    public function update() {

    }


    public function delete($id) {

        $this->db->delete( 'quiz' , array( 'course_id' => $id) ); 

    }

    /*
    *
    * Get courses name and coures id whose quiz is already created
    *
    */

    public function createdQuizCourses() {
        
        $query = $this->db->query('SELECT `name`, `id` FROM `courses` WHERE id in (select DISTINCT(course_id) from quiz )' );
        $query->result();
        
        return $query->result();
    } 
    
    /*
    *
    * Get courses name and coures id  whose quiz is not created
    *
    */

    public function notCreatedQuizCourses() {
        
        $query = $this->db->query('SELECT `name`, `id` FROM `courses` WHERE id not in (select DISTINCT(course_id) from quiz )' );
        $query->result();
        
        return $query->result();
    }  
}
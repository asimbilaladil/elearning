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


    public function getCourseById($id) {

        $this->db->select('*');
        $this->db->from('courses');
        $this->db->where('id', $id);
        $quary_result=$this->db->get();
        $result=$quary_result->row();
        return $result;
    }

    public function getCoursesExceptId( $id ) {
        $query = $this->db->query('SELECT * FROM `courses` WHERE NOT (id = '. $id .')');
        $query->result();
        return $query->result();
    }


    /*SELECT c.name, c.id as courseId, a.id as attempt
    FROM courses as c
    LEFT JOIN user_attempt_module as a
    ON c.id = a.course_id AND a.user_id = 2*/

    public function getCourseAttempt($id) {

        $query = $this->db->query('SELECT c.name, c.id as courseId, a.id as attempt
                                FROM courses as c
                                LEFT JOIN user_attempt_module as a
                                ON c.id = a.course_id AND a.user_id = ' . $id . ' order by c.id  asc');
        
        $query->result();
        return $query->result();

    }

    
    public function update() {

    }
    
}
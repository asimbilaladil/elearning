<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CourseModel extends CI_Model {

    function __construct() {
        parent::__construct();

    }

    //insert row in courses
    public function insert( $data ){

        if ($this->db->insert('courses', $data) ) {
            return $this->db->insert_id();
        } 
        return -1 ;
    }

    //get all courses
    public function getCourses() {
        $this->db->select('*');
        $this->db->from( 'courses' );
        $quary_result=$this->db->get();
        $result = $quary_result->result();
        return $result;         
    }

    //get course by id
    public function getCourseById($id) {

        $this->db->select('*');
        $this->db->from('courses');
        $this->db->where('id', $id);
        $quary_result=$this->db->get();
        $result=$quary_result->row();
        return $result;
    }

    //get courses except the given course id
    public function getCoursesExceptId( $id ) {
        $query = $this->db->query('SELECT * FROM `courses` WHERE NOT (id = '. $id .')');
        $query->result();
        return $query->result();
    }

    //get all courses that user have attempt
    public function getCourseAttempt($id) {

        $query = $this->db->query('SELECT c.name, c.id as courseId, a.id as attempt
                                FROM courses as c
                                LEFT JOIN user_attempt_module as a
                                ON c.id = a.course_id AND a.user_id = ' . $id . ' order by c.id  asc');
        
        $query->result();
        return $query->result();

    }

    //get courses count
    public function getCourseCount() {
        $query = $this->db->query('SELECT COUNT(id) as courseCount from courses');
        return $query->row();
    }


    public function checkUserAttemptCourse($courseId, $userId) {
        $query = $this->db->query('select c.id 
                                FROM courses as c, user_attempt_module as us 
                                WHERE c.id = us.course_id 
                                AND c.id = ' . $courseId . ' 
                                AND us.user_id = ' . $userId);
        return $query->row();
    }



    public function update() {

    }
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewModule extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('CourseModel');

        if (!$this->session->userdata('id')) {
            redirect('register');
        }

    }

    public function index() {

        $courseId = $this->input->get('id');

        if (isset($courseId)) {

            $userId = $this->session->userdata('id');

            $data['course'] = $this->CourseModel->getCourseById($courseId);
            $data['courses'] = $this->CourseModel->getCoursesExceptId($courseId);
            $data['attempt'] = $this->CourseModel->checkUserAttemptCourse($courseId, $userId);

            $this->load->view('common/header');
            $this->load->view('ViewModule', array('data' => $data));
            $this->load->view('common/footer');

        } else {

            redirect('home');

        }
        
        
        
    }
}

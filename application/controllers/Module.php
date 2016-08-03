<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('CourseModel');
        $this->load->model('UserAtemptModuleModel');

        if (!$this->session->userdata('id')) {
            redirect('register');
        }

    }

    public function index() {   
    
        $userId = $this->session->userdata('id');

        $data['courses'] = $this->CourseModel->getCourseAttempt($userId);
    
        $courseCount = $this->CourseModel->getCourseCount();
        $attemptCount = $this->UserAtemptModuleModel->getUserAttemptCount($userId);

        if( $courseCount->courseCount == $attemptCount->attemptCount ) {
            redirect('Congratulations');
        }

        $this->load->view('common/header');
        $this->load->view('Module', array('data' => $data));
        $this->load->view('common/footer');
    }
}

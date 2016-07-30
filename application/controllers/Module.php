<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('CourseModel');
    }

    public function index() {   
        
        $data['courses'] = $this->CourseModel->getCourses();
 
        $this->load->view('common/header');
        $this->load->view('Module', array('data' => $data));
        $this->load->view('common/footer');
    }
}

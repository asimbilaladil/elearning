<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('CourseModel');
    }
    
    public function index() {

        $data['courses'] = $this->CourseModel->getCourses();

        $this->load->view('common/header');
        $this->load->view('course', array('data' => $data));
        $this->load->view('common/footer');

    }

    public function save() {

        $data = array(
            'name' => $this->input->post('name', true),
            'description' => $this->input->post('description', true),
            'url' => $this->input->post('url', true)
        );

        $this->CourseModel->insert($data);

        redirect('Course');

    }

}

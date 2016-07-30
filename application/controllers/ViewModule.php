<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewModule extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('CourseModel');
    }


    public function index() {

        $id = $this->input->get('id');

        if (isset($id)) {

            $data['course'] = $this->CourseModel->getCourseById($id);
            $data['courses'] = $this->CourseModel->getCoursesExceptId($id);

            $this->load->view('common/header');
            $this->load->view('ViewModule', array('data' => $data));
            $this->load->view('common/footer');

        } else {

            redirect('home');

        }
        
        
        
    }
}

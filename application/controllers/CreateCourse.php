<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateCourse extends CI_Controller {

    public function __construct() {

        parent::__construct();
        if( !isset( $_SESSION['admin_id']) ){
          redirect("Login/");
        }
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('CourseModel');
    }
    
    public function index() {

        $data['courses'] = $this->CourseModel->getCourses();

        $this->loadView('admin/CreateCourse', $data);

    }

    public function save() {

        $data = array(
            'name' => $this->input->post('name', true),
            'description' => $this->input->post('description', true),
            'url' => $this->input->post('url', true)
        );

        $this->CourseModel->insert($data);

        redirect('CreateCourse');

    }


    /**
     * Load view 
     * @param 1 : view name
     * @param 2 : data to be render on view. If no data pass null
     */
    function loadView($view, $data) {
        //error_reporting(0);
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view($view, array('data' => $data));
        $this->load->view('admin/common/footer');

    }

}

<?php
date_default_timezone_set('America/Los_Angeles');

defined('BASEPATH') OR exit('No direct script access allowed');

class CreateBlog extends CI_Controller {

    public function __construct() {

        parent::__construct();
        if( !isset( $_SESSION['admin_id']) ){
          redirect("Login/");
        }
        $this->load->helper(array('form', 'url'));
        $this->load->model('BlogModel');
    }
    
    public function index() {


        $this->loadView('admin/createBlog',null);

    }


    //Create blog action method
    public function save() {

        $data = array(
            'title' => $this->input->post('title', true),
            'content' => $this->input->post('content', true),
            'date' => date("F j, Y")
        );

        $this->BlogModel->insert( $data );
        redirect('Admin/');

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

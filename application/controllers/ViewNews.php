<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewNews extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('BlogModel');
        
    }

    public function index() {   
            
        $id = $_GET['id'];
        $data['blogs'] = $this->BlogModel->getBlogById($id);
        $this->load->view('common/header');
        $this->load->view('ViewNews', array('data' => $data));
        $this->load->view('common/footer');            

    }
}

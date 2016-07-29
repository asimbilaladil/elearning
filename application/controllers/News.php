<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('BlogModel');
        
    }

    public function index() {   
            

        $data['blogs'] = $this->BlogModel->getBlog();
        $this->load->view('common/header');
        $this->load->view('News', array('data' => $data));
        $this->load->view('common/footer');            

    }
}

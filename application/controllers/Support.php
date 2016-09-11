<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->model('PageModel');

    }

    public function index() {   
            
        $data["page"] = $this->PageModel->getPageById(11);

        $this->load->view('common/header');
        $this->load->view('Support', array('data' => $data));
        $this->load->view('common/footer');            

    }

    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WhatWeOffer extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('PageModel');
    }
    public function index() {   
        
        $data["page"] = $this->PageModel->getPageById(1);
        $this->load->view('common/header');
        $this->load->view('what-we-offer',array('data' => $data));
        $this->load->view('common/footer');
    }
}

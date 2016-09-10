<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Congratulations extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('UserModel');
        $this->load->model('PageModel');

    }

    public function index() {   
            
        $data["page"] = $this->PageModel->getPageById(5);

        $this->load->view('common/header');
        $this->load->view('Congratulations', array('data' => $data));
        $this->load->view('common/footer');            

    }

    public function success() {   
            

    	redirect("Home/");

    }
    
}

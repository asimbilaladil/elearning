<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Congratulations extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('UserModel');
        
    }

    public function index() {   
            

        $this->load->view('common/header');
        $this->load->view('Congratulations', array('data' => null));
        $this->load->view('common/footer');            

    }

    public function success() {   
            

    	redirect("Home/");

    }
    
}

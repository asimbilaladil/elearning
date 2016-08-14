<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('UserModel');
        
    }

    public function index() {   
            

        $this->load->view('common/header');
        $this->load->view('Profile', array('data' => null));
        $this->load->view('common/footer');            

    }

    
}

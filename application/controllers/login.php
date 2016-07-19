<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {

        parent::__construct();
    }
    
    public function index() {

        $this->load->view('common/header');



        
        //$this->load->view('login');
        $this->load->view('common/footer');

    }

    public function logout() {

        // Destroy session
        session_destroy();

        // Redirect to baseurl
        redirect('login');
    }


}

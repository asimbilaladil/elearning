<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('UserModel');
        
    }

    public function index() {   
            


        $this->load->view('Certificate', array('data' => null));
          

    }


    
}

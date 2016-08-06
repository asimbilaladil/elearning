<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CertificationForm extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('CertificationModel');
        if (!$this->session->userdata('id')) {
         //   redirect('register');
        }
    }

    public function index() {   
            

        $this->load->view('common/header');
        $this->load->view('CertificationForm', array('data' => null));
        $this->load->view('common/footer');            

    }

    public function save() {   
   
        $data = array(
            'name' => $this->input->post('name', true),
            'dob' => $this->input->post('dob', true),
            'address' => $this->input->post('address', true),
            'city' => $this->input->post('city', true),
            'country' => $this->input->post('country', true),
            'tel' => $this->input->post('tel', true),
            'email' => $this->input->post('email', true),
            'user_id' => $this->session->userdata('id')       
            );

        $this->CertificationModel->insert( $data );
      
        redirect("CertificationForm/success");


    }
    
    public function success() {   
    
        $this->load->view('common/header');
        $this->load->view('Success', array('data' => null));
        $this->load->view('common/footer');  

    }
}

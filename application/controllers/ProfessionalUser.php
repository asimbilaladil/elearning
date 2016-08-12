<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfessionalUser extends CI_Controller {

    public function __construct() {

        parent::__construct();

        $this->load->model('CertificationModel');
        $this->load->model('User');

        if (!$this->session->userdata('id')) {
            redirect('register');
        }
    }

    public function index() {   
            
        $this->load->view('common/header');
        $this->load->view('ProfessionalUser', array('data' => null));
        $this->load->view('common/footer');            

    }

    public function save() {   
        
        $userId = $this->session->userdata('id');
        $certificateData = $this->CertificationModel->getUserById($userId);

        $data = array(
            'fullName' => $this->input->post('fullName', true),
            'certificateNumber  ' => $this->input->post('certificateNumber', true),
            'email' => $this->input->post('email', true),
            'businessAddress' => $this->input->post('businessAddress', true),
            'telephoneNumber' => $this->input->post('telNumber', true),
            'userId' => $userId,
            'password' => $this->input->post('password', true),
            'websiteUrl' => $this->input->post('website', true),
            'facebook' => $this->input->post('facebook', true),
            'country' => $certificateData->country,
            'city' => $certificateData->city
            );

        $this->User->professionalUserSave( $data );
      
    }
    
}

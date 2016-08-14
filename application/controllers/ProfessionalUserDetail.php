<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProfessionalUserDetail extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('ProfessionalUserModel');
        $this->load->model('AppointmentModel');
        
        if (!$this->session->userdata('id')) {
            redirect('register');
        }   

    }

    public function index() {   
        
        $id = $this->input->get('id', true);

        if ( isset($id) && $id != '' ) {

            $data['user'] = $this->ProfessionalUserModel->getProfessionalUserById( $id );

            if ( empty($data['user']) ) {
                redirect('SearchProfessionalUser');
            }

            $this->load->view('common/header');
            $this->load->view('ProfessionalUserDetail', array('data' => $data));
            $this->load->view('common/footer');

        } else {
            redirect('SearchProfessionalUser');
        }



    }
}

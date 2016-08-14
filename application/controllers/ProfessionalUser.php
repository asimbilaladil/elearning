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

        $uploadPath = './uploads/ProfilePictures/';                //make upload path 

        //upload image config
        $config['upload_path']          = $uploadPath;      //upload path
        $config['allowed_types']        = '*';              //allow types
        $config['max_size']             = 0;                //file size
        $config['overwrite']            = TRUE;             //over write file

        $this->load->library('upload', $config);            //load upload library 

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('profilePicture')) {      

            echo $this->upload->display_errors();
            $error = array('error' => $this->upload->display_errors());

        } else {

            $upload_data = $this->upload->data();           //Returns array of containing all of the data related to the file you uploaded.
            $file_name = $upload_data['file_name'];
            $uploadPath . '/' . $file_name;                 //upload path with file name
            $data = array('upload_data' => $this->upload->data());

            $uploadPath . '/' . $file_name;

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
                'city' => $certificateData->city,
                'location' => $this->input->post('location', true),
                'imagePath' => $uploadPath
                ); 

            $this->User->professionalUserSave( $data );

            redirect('home');

        }
      
    }
    
}

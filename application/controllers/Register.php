<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('User');
    }
    
    public function index() {

        $this->load->view('common/header');
        $this->load->view('register');
        $this->load->view('common/footer');

    }


    //Register action method
    public function save() {

        //setting validation rules
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[6]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('userEmail', 'Email', 'required|min_length[5]|valid_email|is_unique[users.user_email]');
        $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|min_length[6]|matches[password]');    
        
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {

            $data = array(
                'username' => $this->input->post('username', true),
                'user_email' => $this->input->post('userEmail', true),
                'password' => $this->input->post('password', true),
                'type' => 'TYPE'
            );

            $this->User->insert( $data );
            redirect('Register/');

        }

    }

    //login action method
    public function login() {

        $userEmail = $this->input->post('loginEmail', true);
        $password = $this->input->post('loginPassword', true);

        $user = $this->User->checkUserLogin($userEmail, $password);

        if ($user) {
            redirect('course');
        } else {
            $this->index();
        }

    }

}

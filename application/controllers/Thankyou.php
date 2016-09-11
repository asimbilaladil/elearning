<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thankyou extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('PaymentModel');
        
    }

    public function index() {   
  //          $item_number = $_GET['custom']; 

        if ( $this->input->get() ){
            $data = array(
                'user_id' => $this->input->get('cm', true),
                'paypal_id' => $this->input->get('tx', true),
                'paypal_status' => $this->input->get('st', true)      
            );

            $this->PaymentModel->insert( $data );
            $this->load->view('common/header');
            $this->load->view('Thankyou', array('data' => null));
            $this->load->view('common/footer');     
        } else {
            redirect('Home/');
        }

        


    }


    
}

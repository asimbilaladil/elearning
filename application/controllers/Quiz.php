<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('QuizModel');
        
    }

    public function index() {   
            
        $id = $this->input->get('id', true);

        if(isset( $id )) {

            $quiz = $this->QuizModel->getQuizById($id);

            if( empty($quiz) ) {
                redirect('home');
            }

            $data['questions'] = $quiz;
            $data['courseId'] = $id;

            $this->load->view('common/header');
            $this->load->view('quiz', array('data' => $data));
            $this->load->view('common/footer');            

        } else {
            redirect('home');
        }

    }

    public function save() {

    }
}

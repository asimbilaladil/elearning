<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateQuiz extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));

        $this->load->model('QuizModel');
    }
    
    public function index() {

        $this->load->view('common/header');
        $this->load->view('create_quiz');
        //$this->load->view('common/footer');

    }

    public function save() {
        
        $numberOfQuestions = $this->input->post('numberOfQuestions', true);

        for ( $i=1; $i<=$numberOfQuestions; $i++ ) {

            $data = array();

            $question = $this->input->post('question' . $i, true);

            $options = $this->input->post('option' . $i, true);

            $data['question'] = $question;

            $data['answer'] = $this->input->post('answer' . $i, true);

            for ( $j = 0; $j < count($options) ; $j++ ) {  
                
                $data['option' . ($j + 1)] = $options[$j];    
            }

            $this->QuizModel->insert($data);

        }

        
        redirect('CreateQuiz');

    }



}

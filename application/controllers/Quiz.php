<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('QuizModel');
        $this->load->model('UserAtemptModuleModel');

        if (!$this->session->userdata('id')) {
            redirect('register');
        }        
        
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

        $data = array(
            'user_id' => $this->session->userdata('id'),
            'course_id' => $this->input->post('courseId', true)
        );

        $this->UserAtemptModuleModel->insert($data);

        redirect('Module');

    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CreateQuiz extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->helper(array('form', 'url'));

        $this->load->model('QuizModel');
        $this->load->model('CourseModel');
        
    }
    
    public function index() {
        
        $data['courses'] = $this->CourseModel->getCourses();

        $this->loadView('admin/CreateQuiz', $data);

    }

    public function save() {
        
        $numberOfQuestions = $this->input->post('numberOfQuestions', true);

        for ( $i=1; $i<=$numberOfQuestions; $i++ ) {

            $data = array();

            $question = $this->input->post('question' . $i, true);

            $options = $this->input->post('option' . $i, true);

            $data['question'] = $question;

            $data['answer'] = $this->input->post('answer' . $i, true);

            $data['course_id'] = $this->input->post('course', true);

            for ( $j = 0; $j < count($options) ; $j++ ) {  
                
                $data['option' . ($j + 1)] = $options[$j];    
            }

            $this->QuizModel->insert($data);

        }
        
        redirect('CreateQuiz');

    }


    /**
     * Load view 
     * @param 1 : view name
     * @param 2 : data to be render on view. If no data pass null
     */
    function loadView($view, $data) {
        //error_reporting(0);
        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view($view, array('data' => $data));
        $this->load->view('admin/common/footer');

    }



}

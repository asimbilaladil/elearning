<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewNews extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('BlogModel');


    }

    public function index() {   
            
        $id = $_GET['id'];
        $data['blogs'] = $this->BlogModel->getBlogById($id);
        $data['comments'] = $this->BlogModel->getCommentByBlogId($id);
        $this->load->view('common/header');
        $this->load->view('ViewNews', array('data' => $data));
        $this->load->view('common/footer');            

    }
    
   //post comment method
    public function comment() {   
            
      $data = array(
                'blog_id' => $this->input->post('blog_id', true),
                'username' => $_SESSION['email'],
                'date' => date("F j, Y, g:i a"),
                'comment_text' => $this->input->post('comment', true)
      );

        $data['blogs'] = $this->BlogModel->insertComment($data);
        redirect('ViewNews?id='.$data['blog_id']);            

    }  
}

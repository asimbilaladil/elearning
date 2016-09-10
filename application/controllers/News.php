<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('BlogModel');
        $this->load->library("pagination");
        
    }

    public function index() {   

        $data['blogs'] = $this->BlogModel->getBlog();
        $config = array();
        $config["base_url"] =   "http://www.tdcsinstitute.com/beta/index.php/News";
        $config["total_rows"] = 10;
        $config["per_page"] = 2;
        $this->pagination->initialize($config);
        $data['links'] = $this->pagination->create_links();

        $this->load->view('common/header');
        $this->load->view('News', array('data' => $data));
        $this->load->view('common/footer');            

    }
}

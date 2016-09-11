<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

    public function __construct() {

        parent::__construct();
        if( !isset( $_SESSION['admin_id']) ){
          redirect("Login/");
        }      
        $this->load->model('PageModel');
    }
    
    public function index() {

        $data['pages'] = $this->PageModel->getPages();

        $this->loadView('admin/ListPage', $data);

    }


    //Create blog action method
    public function save() {
        
        $id = $this->input->post('id', true);
        $data = array(
            'content' => $this->input->post('content', true)
        );

        $this->PageModel->update($id , $data );
        redirect('Admin/');

    }

    public function EditPage() {
        
        $id = $this->input->get('page_id', true);      
        $data['pages'] = $this->PageModel->getPageById( $id );
  
       $this->loadView('admin/EditPage', $data);

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

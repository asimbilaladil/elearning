<?php
class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();


    }

    function index()
    {   

        
        $this->loadView('admin/index', null);

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
?>
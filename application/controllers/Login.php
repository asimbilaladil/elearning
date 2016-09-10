<?php
class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();

            $this->load->model('User');
    }



    function index() {
        
        if($this->input->post()) {
           
            $data = array (); 
            $email = $this->input->post('email', true);
            $password =  $this->input->post('password', true);
            $result = $this->User->admin_login($email, $password);

            //if query found any result i.e userfound
            if($result) {
                    
                    $data['admin_id'] = $result->id;
                    $this->session->set_userdata($data);
                    redirect('Admin/');

                
            } else{
                $data['message'] = ' Your Email ID or Password is invalid  !!!!! ';
                redirect('Login/');
            }


        } else {
        

          $this->load->view('admin/Login');


        }

    }


}
?>
<?php
date_default_timezone_set('America/Los_Angeles');

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('ProfessionalUserModel');
        $this->load->model('AppointmentModel');
        $this->load->library('email');
        $this->email->set_mailtype("html");
    }

    public function index() {   
            

        $id = $this->input->get('id', true);
        $status = $this->input->get('status', true);

        if ( isset($id) && $id != '' ) {

            $data['user'] = $this->ProfessionalUserModel->getProfessionalUserById( $id );
            $data['userId'] = $id;
            $data['status'] = $status;

            if ( empty($data['user']) ) {
                redirect('SearchProfessionalUser');
            }
            //var_dump($data);
            $this->load->view('common/header');
            $this->load->view('Profile', array('data' => $data));
            $this->load->view('common/footer');

        } else {
            redirect('SearchProfessionalUser');
        }
         
    }


    public function save() {

        $date = $this->input->post('date', true);
        $endTime = $this->input->post('endTime', true);
        $professionalId = $this->input->post('professionalId', true);

        $result = $this->AppointmentModel->getAppointmentByDate( $date , $professionalId );

        $professionalUser = $this->ProfessionalUserModel->getProfessionalUserById(  $professionalId  );

        $startTime = $this->input->post('startTime', true);

        $endTime = $this->input->post('endTime', true);

        $appoint = true;
        
        $user_email = $this->session->userdata('email');

        foreach ($result as $row) {

            if ( ($startTime >= $row->startTime && $startTime < $row->endTime) ||
                  ($endTime > $row->startTime && $endTime <= $row->endTime) ||
                  $startTime < $row->startTime && $endTime > $row->endTime) {

                $appoint = false;
            }
        }

        if ($appoint) {

            $days = $this->input->post('day', true);
            $dayStr = implode(',', $days);
            
            $data = array(
                'userId' => $this->input->post('userId', true),
                'professionalUserId' =>  $professionalId,
                'date' => $date,
                'startTime' => $this->input->post('startTime', true),
                'endTime' => $this->input->post('endTime', true),
                'days' => $dayStr
            );

              $this->AppointmentModel->insert($data);
              $message_client = '<p>Your request for professional consulting services has been received and forwarded to the consultant of your choosing.  Someone will be contacting you shortly with the confirmation.</p>';

              $message_professionalUser = '<p>Your professional services have been requested.  Please have your client contacted with a confirmation of the booking. </p><br><p>Details are below:</p> <br> <p>Date:'.$data["date"]  .'<br> Start time: '. $data["startTime"] .':00 <br> End time: '. $data["endTime"] .':00 <br>User Email: '.$user_email .'</p>';
              
              $this->sendEmail( $professionalUser->email, $message_professionalUser );
          
              $this->sendEmail( $user_email, $message_client );
          

             redirect('Profile?id=' . $this->input->post('userId', true) . 'status=success');

        } else {
          
             redirect('Profile?id=' . $this->input->post('userId', true) . 'status=error');
        }

    }


    //send appointment email to professional user
    public function sendEmail( $email, $message ) {
        
        $this->email->from('no-reply@tdcsinstitute.com', 'TDCS Institute');
        $this->email->to( $email  );

        $this->email->subject('New Appointment Notification');
        $this->email->message('<h1>HELLOO WORLDS</h1>');

        $this->email->send();

    }
    
}

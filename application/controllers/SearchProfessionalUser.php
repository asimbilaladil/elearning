<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchProfessionalUser extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('ProfessionalUserModel');
        $this->load->model('AppointmentModel');
        
        if (!$this->session->userdata('id')) {
            redirect('register');
        }   

    }

    public function index() {   
            
        $this->load->view('common/header');
        $this->load->view('SearchProfessionalUser');
        $this->load->view('common/footer');

    }


    public function search() {

        $searchData = $this->input->get('state', true);

        $searchText = $searchData['searchText'];
        $searchBy = $searchData['searchBy'];


        $result = $this->ProfessionalUserModel->searchUser($searchText, $searchBy);


        $html = '<table>
            <tr>
              <td> Name </td>
              <td> Certificate No# </td>
              <td> Email </td>
              <td> Business Address </td>
              <td> Phone Number </td>
              <td> Country </td>
              <td> City </td>
              <td> Action </td>
            <tr>';

        foreach ($result as $row) {

            $appointmentUrl = site_url('SearchProfessionalUser/appointment?id=' . $row->userId );

            $html .= '<tr>
                    <td>'. $row->fullName .'</td>
                    <td>'. $row->certificateNumber .'</td>
                    <td>'. $row->email .'</td>
                    <td>'. $row->businessAddress .'</td>
                    <td>'. $row->telephoneNumber .'</td>
                    <td>'. $row->country .'</td>
                    <td>'. $row->city .'</td>
                    <td><a href="'. $appointmentUrl .'"> Appointment </a></td>
                    </tr>';
        }

        $html .= '</table>';


        echo $html;

    }

    public function appointment() {   

        $professionalUserID = $this->input->get('id', true);
        $userId = $this->session->userdata('id');
    
        $data = array(
            'userId' => $userId,
            'professionalUserId' => $professionalUserID
        );

        $this->AppointmentModel->insert($data);

        redirect('SearchProfessionalUser');

    }

}

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

        $name = $searchData['name'];
        $phone = $searchData['phone'];
        $email = $searchData['email'];
        $country = $searchData['country'];
        $city = $searchData['city'];


        $result = $this->ProfessionalUserModel->searchProfessioanUser($name, $phone, $email, $country, $city);


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

            $appointmentUrl = site_url('Profile/index?id=' . $row->userId );

            $html .= '<tr>
                    <td>'. $row->fullName .'</td>
                    <td>'. $row->certificateNumber .'</td>
                    <td>'. $row->email .'</td>
                    <td>'. $row->businessAddress .'</td>
                    <td>'. $row->telephoneNumber .'</td>
                    <td>'. $row->country .'</td>
                    <td>'. $row->city .'</td>
                    <td><a href="'. $appointmentUrl .'"> Show </a></td>
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

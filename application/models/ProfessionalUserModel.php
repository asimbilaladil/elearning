<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class ProfessionalUserModel extends CI_Model {

    
    function __construct() {
        parent::__construct();
    }


    public function searchProfessioanUser( $name, $phone, $email, $country, $city ) {

        $whereArr = array();
        if($name != "") $whereArr[] = "fullName LIKE '%{$name}%'";
        if($phone != "") $whereArr[] = "telephoneNumber LIKE '%{$phone}%'";
        if($email != "") $whereArr[] = "email LIKE '%{$email}%'";
        if($country != "") $whereArr[] = "country LIKE '%{$country}%'";
        if($city != "") $whereArr[] = "city LIKE '%{$city}%'";

        $whereStr = implode(" AND ", $whereArr);

        $query = $this->db->query("select * from professional_users where " . $whereStr);
        return $query->result();                

    }

    
}
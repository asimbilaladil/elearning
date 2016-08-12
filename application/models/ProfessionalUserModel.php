<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class ProfessionalUserModel extends CI_Model {

    
    function __construct() {
        parent::__construct();
    }


    public function searchUser( $searchText, $searchBy ) {

        $query = $this->db->query("select * from professional_users where ". $searchBy ." LIKE '%". $searchText ."%'");
        return $query->result();                

    }

    
}
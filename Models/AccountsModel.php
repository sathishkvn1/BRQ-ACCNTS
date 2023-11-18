<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AccountsModel extends CI_Model {

 
public function get_company_details()
    {
        // Load the database library
        $this->load->database();

        // Select all fields from the companylist table
        $this->db->select('*');
        $this->db->from('acc_company_master');
        $query = $this->db->get();
        // print_r($query->result_array());
       
        // Return the query result as an array
        return $query->result_array();
    }

    public function get_company_details_by_id($companyId) {
        $query = $this->db->get_where('companylist', array('Id' => $companyId));
        //  $last_query = $this->db->last_query();
        //  echo  $last_query;
        return $query->row_array();
    }


    
}



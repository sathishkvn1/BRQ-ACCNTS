<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyModel extends CI_Model {


    public function reset_current_year($company_id)
{
    // Reset all financial years of the company to 'no'
    $this->db->where('company_id', $company_id);
    $this->db->update('acc_financial_year_master', array('is_current_year' => 'no'));
}

public function set_current_year($selected_year_id)
{
    // Set the selected financial year to 'yes'
    $this->db->where('id', $selected_year_id);
    $this->db->update('acc_financial_year_master', array('is_current_year' => 'yes'));
}


    // for inserting the company

    public function insert_company($data)
    {
        $this->db->insert('acc_company_master', $data);
        // $last_query = $this->db->last_query();
        //  echo  "last query is".$last_query;;
        return $this->db->insert_id();
    }

     public function getCountryOptions() {
        
        $query = $this->db->get('acc_country_master');
        return $query->result();
    }

    
    public function getStateOptions($countryId) {
        // Retrieve the state options from the database table based on the selected country ID
        $this->db->where('country_id', $countryId);
         $this->db->or_where('country_id', 1);
        $query = $this->db->get('acc_states_master');
        return $query->result();
    }

    public function getCurrencyOptions($countryId)
    {
        $this->db->where('country_id', $countryId);
        $query = $this->db->get('acc_currency_master');
        return $query->row();
    }
    public function updateCompanyAddressData($companyAddressData, $company_id)
    {
        $this->db->where('company_id', $company_id);
        $this->db->update('acc_company_addresses', $companyAddressData);
    }
    public function updateFinancialYearData($financialYearData, $company_id)
    {
        $this->db->where('company_id', $company_id);
        $this->db->update('acc_financial_year_master', $financialYearData);
    }




    public function update_company($companyId, $companyData, $companyAddressData, $financialYearData)
    {
        // Update the company data in the acc_company_master table
        $this->db->where('company_id', $companyId);
        $this->db->update('acc_company_master', $companyData);

        // Update the company address data in the acc_company_addresses table
        $this->db->where('company_id', $companyId);
        $this->db->update('acc_company_addresses', $companyAddressData);

        // Update the financial year data in the acc_financial_year_master table
        $this->db->where('company_id', $companyId);
        $this->db->update('acc_financial_year_master', $financialYearData);
    }
    
    public function update_company_features( $companyId , $data)
    {
        
        $this->db->where('company_id', $companyId );
        $this->db->update('acc_company_features', $data);
        
    }


 
    public function get_company_details_by_id($company_id) 
    {
        //  echo "companyid is".$companyId;
        $query = $this->db->get_where('acc_company_master_view', array('company_id' => $company_id));
        $last_query = $this->db->last_query();
    
        return $query->row_array();
    }
    public function  get_company_features_by_id($companyId) 
    {
        //  echo "companyid is".$companyId;
        $query = $this->db->get_where('acc_company_features', array('company_id' => $companyId));
        // $last_query = $this->db->last_query();
    
        return $query->row_array();
    }
   

    // for listing the company

    public function get_company_details()
    {
     
        $this->db->select('company_id,company_name,financial_year,address_type');
        $this->db->from('acc_company_master_view');
        $this->db->where('is_deleted', 'no'); 
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_last_financial_year( $company_id) {
      
        $query = $this->db->query("SELECT * FROM acc_financial_year_master WHERE company_id = $company_id ORDER BY id DESC LIMIT 1");

        if ($query->num_rows() > 0) {
        
            return $query->row_array();
        } else {
           
            return null;
        }
    }

    public function getFinancialYearsByCompany($company_id)
    {
        $this->db->where('company_id', $company_id);
        $query = $this->db->get('acc_financial_year_master');
    
        return $query->result_array();
    }


    
    

    public function insert_new_financial_year($data)
    {
       
        $this->db->insert('acc_financial_year_master', $data);
        
     
        return $this->db->affected_rows() > 0;
    }

    //for updating tds
    public function updateTdsDetails($companyId, $data) 
    {
        $this->db->trans_start();

        $this->db->where('company_id', $companyId);
        $this->db->update('acc_company_tds_deductor_collector_details', $data);
    //     $last_query = $this->db->last_query();
    // echo  $last_query;
    // echo "<br>Before tran Affected". $this->db->affected_rows();
        $this->db->trans_complete(); 
    // echo "<br>After tran Affected". $this->db->affected_rows();
    // echo "<br>Tran status". $this->db->trans_status();
    
        return ($this->db->trans_status() > 0);
       
        // return true; // 
    }

    // public function updateGstDetails($company_id, $data)
    // {
    //     $this->db->trans_start();

    //     $this->db->where('company_id', $company_id);
    //     $this->db->update('acc_gst_registration_master', $data);
    //     //  $last_query = $this->db->last_query();
    //     // echo  $last_query;
    //     $this->db->trans_complete(); 
    //     return ($this->db->trans_status() > 0);
    // }
    // public function updateGstDetails($company_id, $data)
    // {
    //     $this->db->trans_start();
    
    //     $this->db->where('company_id', $company_id);
    //     $this->db->update('acc_gst_registration_master', $data);
    
    //     $last_query = $this->db->last_query();
    //     error_log('Last executed query: ' . $last_query); // Output the last executed query to the error log
    
    //     $this->db->trans_complete();
    
    //     if ($this->db->trans_status()) {
    //         echo "<script>console.log('Database transaction completed successfully.');</script>"; 

    //         return 1; // Success
    //     } else {
    //         echo "<script>console.error('Database transaction failed!');</script>"; 
    //         return 0; // Failure
    //     }
    // }
 
    public function updateGstDetails($company_id, $data) {
        $this->db->trans_start();
    
        $this->db->where('company_id', $company_id);
        $this->db->update('acc_gst_registration_master', $data);
    
        $this->db->trans_complete();
    
        if ($this->db->trans_status()) {
            $response = array('status' => 'success', 'message' => 'GST details saved successfully.');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to save GST details.');
        }
    
        return $response;
    }

    




    // fr updating vat
    public function updateVatDetails($companyId, $data) 
    {
        $this->db->trans_start();
        $this->db->where('company_id', $companyId);
        $this->db->update('acc_company_vat_details', $data);
        // $last_query = $this->db->last_query();
        //  echo  $last_query;
        // return true;
        $this->db->trans_complete(); 
        return ($this->db->trans_status() > 0);
    }
 
    public function get_deductor_types() 
    {
        $query = $this->db->get('acc_tds_deductor_collecter_type');
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }



    public function get_excise_registration_types(){
        $query = $this->db->get('acc_excise_registration_type');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

 
    public function get_tax_liability()
    {
        $query = $this->db->get('acc_tax_liability_computation_basis');
        return $query;
    }

    public function valuation_type()
    {
        $query = $this->db->get('acc_excise_valuation_type');
        return $query;
    }

    public function excise_reporting_UoMs()
    {
        $query = $this->db->get('acc_excise_reporting_uoms');
        return $query;
    }

    public function gst_taxability()
    {
        $query = $this->db->get('acc_taxability');
        return $query;
    }

    public function gst_registration_type(){
        $query = $this->db->get('acc_gst_registration_type');
        return $query;
    }


    public function gst_periodicity(){
        $query = $this->db->get('acc_gst_gstr1_periodicity');
        return $query;
    }

    public function gst_registration_status(){
        $query = $this->db->get('acc_gst_registration_status');
        return $query;
    }

    public function get_gst_states(){
        $query = $this->db->get('acc_states_master');
        return $query;
    }

    public function gst_composition_tax_calculation(){
        $query = $this->db->get('acc_gst_composition_tax_calculation_type');
        return $query;
    }



    public function getTdsDetails($tdsValue, $companyId) 
    {
        $this->db->select('*');
        $this->db->where('company_id', $companyId);
       
        $query = $this->db->get('acc_company_tds_deductor_collector_details');
   
      
        return $query;
    }

    public function getGstDetails($gst_value,$companyId)
    {
        $this->db->select('*');
        $this->db->where('company_id', $companyId);
       
        $query = $this->db->get('acc_gst_registration_master');
        return $query;

    }

    public function getRegistrationName($state_id) {
      
        $this->db->select('gst_registration_name');
        $this->db->where('id', $state_id);
        $query = $this->db->get('acc_states_master');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->gst_registration_name;
        }

        return '';
    }

    public function getAddressType($company_id) {
        $query = $this->db->query("SELECT id, address_type FROM acc_company_addresses WHERE company_id = $company_id");
        // $last_query = $this->db->last_query($query);
        // echo $last_query;
        // exit;
        return $query->result_array();
    }

    public function getVatDetails($vatValue,$companyId)
    {
        $this->db->select('*');
        $this->db->where('company_id', $companyId);
       
        $query = $this->db->get('acc_company_vat_details');
        return $query;

    }

    public function get_organization_types()
    {
        $query = $this->db->get('acc_organisation_type');
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    public function updateServiceTaxDetails($companyId, $data){
        $this->db->trans_start();
        $this->db->where('company_id', $companyId);
        $this->db->update('acc_company_service_tax_details', $data);
        //  $last_query = $this->db->last_query();
        //  echo  $last_query;
        // return true;
        $this->db->trans_complete(); 
        return ($this->db->trans_status() > 0);

    }

    public function getServiceTaxDetails($servicetaxValue, $companyId){
        $this->db->select('*');
        $this->db->where('company_id', $companyId);
         $query = $this->db->get('acc_company_service_tax_details');
        //  $last_query = $this->db->last_query( $query);
        //  echo  $last_query;
        return $query;

    }
    public function updateExciseDetails($companyId, $data) {
        $this->db->where('company_id', $companyId);
        $this->db->update('acc_company_excise_details', $data);
                return $this->db->affected_rows() > 0;
    }

    public function getExciseDetails($exciseDetailsValue, $companyId){
        $this->db->select('*');
        $this->db->where('company_id', $companyId);
         $query = $this->db->get('acc_company_excise_details');
        //  $last_query = $this->db->last_query( $query);
        //  echo  $last_query;
        return $query;

    }
    

    
}



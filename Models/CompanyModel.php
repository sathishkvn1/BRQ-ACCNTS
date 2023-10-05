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

    // fr updatind tds
    public function updateTdsDeductorDetails($data1,$company_id)
    {
        $this->db->where('company_id', $company_id);
        $this->db->update('acc_company_tds_tcs_deductor_collector_details', $data1);
    }


    
 
 
    public function updateTdsPersonResponsibleDetails($data2, $company_id)
    {
        // Here, we use two separate where() conditions for the update
        $this->db->where('company_id', $company_id);
        $this->db->where('tds_tcs_collector_deductor_details_id', $company_id);
        $this->db->update('acc_tds_tcs_person_responsible_details', $data2);
    }
    public function updateVatDetails($data1,$company_id)
    {
        $this->db->where('company_id', $company_id);
        $this->db->update('acc_company_vat_details', $data1);
    }
    public function updateVatRateDetails($data2, $company_id)
    {
        // Here, we use two separate where() conditions for the update
        $this->db->where('company_id', $company_id);
 
        $this->db->update('acc_company_vat_rate_details', $data2);
    }


   public function update_company($companyId, $companyData=array(), $companyAddressData, $financialYearData)
    {
        if(!empty($companyData))
        {
             // Update the company data in the acc_company_master table
            $this->db->where('company_id', $companyId);
            $this->db->update('acc_company_master', $companyData);

        }
       
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
       $res= $this->db->update('acc_company_features', $data);
       return $res;
    //     echo $this->db->last_query();
    // //   return $this->db->affected_rows() > 0; 
    // echo $this->db->affected_rows();
    // return $this->db->affected_rows();
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
        // $this->db->update('acc_company_tds_deductor_collector_details', $data);
        $this->db->update('acc_company_tds_tcs_deductor_collector_details', $data);
        
    //     $last_query = $this->db->last_query();
    // echo  $last_query;
    // echo "<br>Before tran Affected". $this->db->affected_rows();
        $this->db->trans_complete(); 
    // echo "<br>After tran Affected". $this->db->affected_rows();
    // echo "<br>Tran status". $this->db->trans_status();
    
        return ($this->db->trans_status() > 0);
       
        // return true; // 
    }

    public function updateGstDetails($gst_row_id, $data) {
        $this->db->trans_start();
        $this->db->where('id', $gst_row_id);
        $this->db->update('acc_gst_registration_master', $data);
        $this->db->trans_complete();
        if ($this->db->trans_status()) 
        {
            $response = array('status' => 'success', 'message' => 'GST details saved successfully.');
        } else 
        {
            $response = array('status' => 'error', 'message' => 'Failed to save GST details.');
        }
        return $response;
    }

    public function insertGstDetails($data,$company_id) {
        $this->db->trans_start();

        $data['company_id'] = $company_id;
        $this->db->insert('acc_gst_registration_master', $data);

        $this->db->trans_complete();

        if ($this->db->trans_status()) {
            $response = array('status' => 'success', 'message' => 'GST details saved successfully.');
        } else {
            $response = array('status' => 'error', 'message' => 'Failed to save GST details.');
        }

        return $response;
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
        if($query->num_rows()>0)
        {
            return($query->result());
        }
        return array();
    }


    public function gst_periodicity(){
        $query = $this->db->get('acc_gst_gstr1_periodicity');
         if($query->num_rows()>0)
            {
                return($query->result());
            }
            return array();
    }
    
    public function vat_periodicity(){
        $query = $this->db->get('acc_e_vat_periodicity');
         if($query->num_rows()>0)
        {
            return($query->result());
        }
        return array();
        // return $query;
    }
    public function  vat_schedule(){
        $query = $this->db->get('acc_vat_schedule_groups');
         if($query->num_rows()>0)
            {
                return($query->result());
            }
            return array();
    }

    public function  vat_type_of_good(){
        $query = $this->db->get('acc_vat_type_of_goods');
        if($query->num_rows()>0)
        {
            return($query->result());
        }
        return array();
    }
  
    public function vat_taxabilitytype(){
        $query = $this->db->get('acc_vat_taxability_type');
       
        if($query->num_rows()>0)
        {
            return($query->result());
        }
        return array();
    }

    public function  collector_deductor_type_details(){
        $query = $this->db->get('acc_tds_tcs_collector_deductor_types');
         if($query->num_rows()>0)
        {
            return($query->result());
        }
        return array();
        // return $query;
    }
   

    public function gst_registration_status(){
        $query = $this->db->get('acc_gst_registration_status');
         if($query->num_rows()>0)
        {
            return($query->result());
        }
        return array();

    }

    public function get_gst_states(){
        $query = $this->db->get('acc_states_master');
      
        if($query->num_rows()>0)
        {
            return($query->result());

        }
           
        return array();
    }

    public function gst_composition_tax_calculation(){
        $query = $this->db->get('acc_gst_composition_tax_calculation_type');
         if($query->num_rows()>0)
            {
                return($query->result());
            }
            return array();
    }



 
    // public function getTdsDetails($company_id)
    // {
    //     $this->db->select('ctd.tan_registration_number, ctd.tan_account_number, ctd.deductor_collector_type_id, ctd.deductor_collector_branch_division, ctd.std_code, ctd.phone_number, ctd.email, ctd.ignore_it_excemption_limit_for_tds, ctd.ignore_it_excemption_limit_for_tcs, ctd.activate_tds_for_stock_items, prd.person_responsible_name, prd.son_daughter_of, prd.designation, prd.pan, prd.flat_house_number, prd.premises_building_name, prd.road_street_lane_name, prd.area_location_name, prd.town_city_district_name, prd.state_id, prd.pincode, prd.mobile, prd.std_code as person_std_code, prd.telephone, prd.email_id, prd.std_code_alternate, prd.telephone_alternate, prd.email_id_alternate');
    //     $this->db->from('acc_company_tds_tcs_deductor_collector_details as ctd');
    //     $this->db->join('acc_tds_tcs_person_responsible_details as prd', 'ctd.company_id = prd.company_id');
    //     $this->db->where('ctd.company_id', $company_id);
    //     $query = $this->db->get();
       
    //     return $query;
        
    //     //  $last_query = $this->db->last_query($query);
    //     //  return $last_query;

    // }

    public function getTdsDetails($company_id)
{
    $this->db->select('ctd.tan_registration_number, ctd.tan_account_number, ctd.deductor_collector_type_id, ctd.deductor_collector_branch_division, ctd.std_code, ctd.phone_number, ctd.email, ctd.ignore_it_excemption_limit_for_tds, ctd.ignore_it_excemption_limit_for_tcs, ctd.activate_tds_for_stock_items, prd.person_responsible_name, prd.son_daughter_of, prd.designation, prd.pan, prd.flat_house_number, prd.premises_building_name, prd.road_street_lane_name, prd.area_location_name, prd.town_city_district_name, prd.state_id, prd.pincode, prd.mobile, prd.std_code as person_std_code, prd.telephone, prd.email_id, prd.std_code_alternate, prd.telephone_alternate, prd.email_id_alternate');
    $this->db->from('acc_company_tds_tcs_deductor_collector_details as ctd');
    $this->db->join('acc_tds_tcs_person_responsible_details as prd', 'ctd.company_id = prd.company_id');
    $this->db->where('ctd.company_id', $company_id);
    $query = $this->db->get();
    // $last_query = $this->db->last_query($query);
    // echo "$last_query";

   
    if ($query) {
      
        return $query->result_array();
    } else {
       
        return array();
    }
}

    

    public function getGstDetails($gst_value,$companyId)
    {
        $this->db->select('*');
        $this->db->where('company_id', $companyId);
       
        $query = $this->db->get('acc_gst_registration_master');
        return $query;

    }

    // public function getGstRowCount($company_id) {
      
    //     $this->db->where('company_id', $company_id);
    //     $query = $this->db->get('acc_gst_registration_master');
    //     return $query->num_rows();
    // }
    public function getGstData($company_id) {
        $this->db->where('company_id', $company_id);
        $query = $this->db->get('acc_gst_registration_master');
        return $query->result_array();
    }
    

    public function get_multiple_gst_details_by_id($company_id){
        $this->db->select('*');
        $this->db->from('acc_gst_registration_master');
        $this->db->where('company_id', $company_id); 
        $query = $this->db->get();
        //   $last_query = $this->db->last_query($query);
        // echo  $last_query;
        return $query->result_array();
    }

    public function getGstDetailsById($gst_id) {
      
        $this->db->where('id', $gst_id);
        $query = $this->db->get('acc_gst_registration_master');

        if ($query->num_rows() > 0) {
            return $query->row_array(); 
        } else {
            return array(); 
        }
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


    public function getVatDetails($companyId)
    {
        $this->db->select('t1.id, t1.company_id, t1.cst_rate_against_form_c, t1.cst_effective_from, t1.cst_effective_to, t1.vat_rate, t1.cess_rate, t1.vat_effective_from, t1.vat_effective_to, t1.vat_tax_type_id, t1.vat_schedule_id, t1.vat_schedule_serial_number, t1.type_of_goods_id, t1.nature_of_goods_id, t1.commodity_name, t1.commodity_code, t1.sub_commodity_code, t2.state_id, t2.vat_applicable_from,t2.vat_tin_number,t2.vat_registration_date,t2.interstate_sales_tax_number,t2.cst_registration_date,t2.e_vat_periodicity_id, t2.enable_vat_calculation_on_quantity, t2.enable_vat_calculation_on_stock_item_rate, t2.is_under_npv_scheme,t2.define_commodity_and_tax_as_masters,t2.deactivate_from, t2.circle_office, t2.status_of_business, t2.nature_of_business, t2.ss_msi_lsi_registration_number, t2.authorised_person, t2.status_designation, t2.place, t2.district');
        $this->db->from('acc_company_vat_rate_details AS t1');
        $this->db->join('acc_company_vat_details AS t2', 't1.company_id = t2.company_id');
        $this->db->where('t1.company_id', $companyId);
        // Execute the query
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return array();
        }
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
    
public function getHsnSacType()
{
     $query = $this->db->get('acc_gst_hsn_sac_related_action');
        
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
}






public function checkCompanyNameExists($company_name, $mode, $company_id)
{
    if ($mode == 0) {
        $this->db->where('company_name', $company_name);
    } elseif ($mode == 1) {
        $this->db->where('company_id !=', $company_id);
        $this->db->where('company_name', $company_name);
    }

    $query = $this->db->get('acc_company_master');
    
    // Get the last executed SQL query
    $lastQuery = $this->db->last_query();

    if($query->num_rows() > 0) {
        return true;
    }
    else{
        return false;
    }
        
        // 'last_query' => $lastQuery, // Include the last query in the response
    
}


public function get_state_code($stateId) {
    $this->db->select('state_code');
    $this->db->from('acc_states_master');
    $this->db->where('id', $stateId);

    $query = $this->db->get();
    $result = $query->row();

    return $result ? $result->state_code : '';
}

public function updateGstOtherDetails($data,$company_id)
    {
        $this->db->where('company_id', $company_id);
        $this->db->update('acc_gst_company_gst_rate_and_other_details', $data);
    }
 
public function getGstRateDetails($company_id){
    
    $this->db->where('company_id', $company_id);
    $query = $this->db->get('acc_gst_company_gst_rate_and_other_details');
    return $query->result_array();

}   

public function hsn_sac_related_action(){
    $query = $this->db->get('acc_gst_hsn_sac_related_action');
     if($query->num_rows()>0)
        {
            return($query->result());
        }
        return array();
}

public function gst_rate(){
    $query = $this->db->get('acc_gst_rate_related_action');
     if($query->num_rows()>0)
   	 {
       		 return($query->result());
   	 }
   	 return array();
}


public function gst_nature_of_transaction(){
    $query = $this->db->get('acc_gst_nature_of_transaction');
     if($query->num_rows()>0)
   	 {
       		 return($query->result());
   	 }
   	 return array();
}

public function  gst_taxability_type(){
    $query = $this->db->get('acc_gst_taxability_type'); 
    if($query ->num_rows()>0)
    {
        return($query ->result());
    }
    return array();
}


public function gst_cess_valuation_type(){
    $query = $this->db->get('acc_gst_cess_valuation_type');
    if($query ->num_rows()>0)
    {
        return($query ->result());
    }
    return array();
}


public function  gst_threshold_limit_values(){
    $query = $this->db->get('acc_gst_threshold_limit_values');
    if($query ->num_rows()>0)
    {
        return($query ->result());
    }
    return array();
}


public function  hsn_gst_classification_name(){
    $query = $this->db->get('acc_gst_classification');
    if($query ->num_rows()>0)
    {
        return($query ->result());
    }
    return array();
}

public function  get_nature_of_goods(){
    $query = $this->db->get('acc_vat_nature_of_goods');
    if($query->num_rows()>0)
    {
        return($query->result());
    }
    return array();
}
public function getGstClassifications() {
  
    $this->db->select('*');
    $this->db->from('acc_gst_classification');

    $query = $this->db->get();
    
   
    if ($query->num_rows() > 0) {
        return $query->result_array();
    } else {
        return array(); 
    }
}

public function getAllGstClassifications() {
  
    $query = $this->db->get('acc_gst_classification');
    
  
    return $query->result();
}


}



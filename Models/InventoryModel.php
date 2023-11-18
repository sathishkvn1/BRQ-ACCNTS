
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InventoryModel extends CI_Model {

    public function insert_inventory_master_settings($data)
    {
        return $this->db->insert('acc_inventory_master_settings', $data); 
    }



    public function insert_inventory_group_settings($data) {
       
        return $this->db->insert('acc_stock_groups', $data);
    }

  
    public function insert_inventory_stock_category($data) {

        return $this->db->insert('acc_stock_category', $data);
    }


    public function  gst_taxability_type(){
        $query = $this->db->get('acc_gst_taxability_type'); 
        if($query ->num_rows()>0)
        {
            return($query ->result());
        }
        return array();
    }

    public function  gst_hsn_sac_related_action(){
        $query = $this->db->get('acc_gst_hsn_sac_related_action'); 
        if($query ->num_rows()>0)
        {
            return($query ->result());
        }
        return array();
    }
   
    public function  gst_rate_related_action(){
        $query = $this->db->get('acc_gst_rate_related_action'); 
        if($query ->num_rows()>0)
        {
            return($query ->result());
        }
        return array();
    }



    public function getHsnSacDetails($selectedOption, $company_id="") {
        $this->db->where('hsn_sac_details_id', $selectedOption);
        if($company_id)
            $this->db->where('company_id', $company_id);
        $query = $this->db->get('acc_gst_company_gst_rate_and_other_details');
        
        if ($query->num_rows() > 0) {
            return $query->row_array(); 
        } else {
            return array(); 
        }
    }
    

    public function getGstClassificationName($selectedOption, $company_id="")
{
    $this->db->select('id, gst_classification_name');
    $this->db->where('hsn_sac_details_id', $selectedOption);
    if($company_id)
        $this->db->where('company_id', $company_id); 
   
    $query = $this->db->get('acc_gst_classification');
   
    if ($query->num_rows() > 0) {
        return $query->result();
    }
    return array();
}

public function getGstClassificationNames($selectedGstRateDetailsOption, $company_id)
{
    $this->db->select('id,hsn_sac_details_id, gst_classification_name'); // Include 'id' in the selection
    $this->db->where('gst_rate_details_id', $selectedGstRateDetailsOption);
    $this->db->where('company_id', $company_id); 
    $query = $this->db->get('acc_gst_classification');
   
    if ($query->num_rows() > 0) {
        return $query->result(); 
    }
    
    return array(); 
}


    public function getGstClassificationDetails($selected_classi_Option)
{
    
    $this->db->select('hsn_sac, description');
    
    $this->db->where('id', $selected_classi_Option);
    $query = $this->db->get('acc_gst_classification');
    
    if ($query->num_rows() > 0) {
        return $query->row();
    }
    
    return array();
}

public function getGstRateDetails($selectedGstRateDetailsOption)
{
    
    $this->db->select('*'); // Select all fields
    $this->db->from('acc_gst_classification');
    $this->db->where('id', $selectedGstRateDetailsOption);

    $query = $this->db->get();
    // echo "Last Query: " . $this->db->last_query();

    if ($query->num_rows() > 0) {
        return $query->row_array();
    }

    return array();
}

public function getGstClassification($selectedGstClassificationOption, $company_id)
{
    $this->db->select('*');
    $this->db->from('acc_gst_classification');
    $this->db->where('id', $selectedGstClassificationOption); //23=23
    $this->db->where('company_id', $company_id);

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->row_array();
    }

    return array();
}

public function getStockGroupNames()
{
    $this->db->select('id, stock_group_name');
    $query = $this->db->get('acc_stock_groups');

    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}



public function get_stock_categories()
{
    $company_id = $this->session->userdata('company_id');

    $this->db->where('company_id', $company_id); 
    $this->db->where('is_deleted', 'no');
    $query = $this->db->get('acc_stock_category');

    if ($query->num_rows() > 0) {
        return $query->result_array();
    } else {
        return array();
    }
}


public function delete_stock_category_by_id($id)
    {
        $data = array('is_deleted' => 'yes');
        $this->db->where('id', $id);
        return $this->db->update('acc_stock_category', $data);
    }

    public function get_stock_categories_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('acc_stock_category');
    
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function update_inventory_stock_category($hidden_id, $data){
        $this->db->where('id', $hidden_id);
        $this->db->update('acc_stock_category', $data);
       
        if ($this->db->affected_rows() > 0) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }

    public function get_stock_category() {
        $this->db->select('id, stock_category_name');
        $this->db->from('acc_stock_category');
        $this->db->where('is_deleted', 'no');
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    
        return array(); 
    }
    


public function check_stock_category_name($stock_category_name, $company_id, $flag_id, $hidden_id)
{
    if ($flag_id == 0) {
        $this->db->where("(`company_id` = '$company_id' AND `stock_category_name` = '$stock_category_name' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `stock_category_alternate_name` = '$stock_category_name' AND `is_deleted` = 'no')");
    } else {
       
        $this->db->where("(`company_id` = '$company_id' AND `stock_category_name` = '$stock_category_name' AND `id` != '$hidden_id' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `stock_category_alternate_name` = '$stock_category_name' AND `id` != '$hidden_id' AND `is_deleted` = 'no')");
    }
    $query = $this->db->get('acc_stock_category');
    return ($query->num_rows() > 0);
}


public function check_stock_category_alternate_name($stock_category_alternate_name, $company_id, $flag_id, $hidden_id)
{
    if ($flag_id == 0) {
        $this->db->where("(`company_id` = '$company_id' AND `stock_category_alternate_name` = '$stock_category_alternate_name' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `stock_category_name` = '$stock_category_alternate_name' AND `is_deleted` = 'no')");
    } else {
       
        $this->db->where("(`company_id` = '$company_id' AND `stock_category_alternate_name` = '$stock_category_alternate_name' AND `id` != '$hidden_id' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `stock_category_name` = '$stock_category_alternate_name' AND `id` != '$hidden_id' AND `is_deleted` = 'no')");
    }
    $query = $this->db->get('acc_stock_category');
    return ($query->num_rows() > 0);
}


public function insert_cost_centre($data) {

    return $this->db->insert('acc_cost_centres', $data);
}


public function get_cost_centre_names() {
    $this->db->select('id, cost_centre_name');
    $this->db->from('acc_cost_centres');
    $this->db->where('is_deleted', 'no');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->result_array();
    }

    return array(); 
}

public function getBankTransactionTypes()
{
    $company_id = $this->session->userdata('company_id');
    $this->db->select('*');
   
    $query = $this->db->get('acc_bank_transaction_types');
    // echo "Last Query: " . $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}

public function get_cost_centre_details()
{
    $company_id = $this->session->userdata('company_id');
  
    $this->db->where('company_id', $company_id); 
    $this->db->where('is_deleted', 'no');
    $query = $this->db->get('acc_cost_centres');

    if ($query->num_rows() > 0) {
        return $query->result_array();
    } else {
        return array();
    }
}


public function delete_cost_centre_by_id($id)
    {
        $data = array('is_deleted' => 'yes');
        $this->db->where('id', $id);
        return $this->db->update('acc_cost_centres', $data);
       
    }


    public function get_cost_centre_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('acc_cost_centres');
    
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

 
    public function update_cost_centre($row_id, $data){
        $this->db->where('id', $row_id);
        $this->db->update('acc_cost_centres', $data);
       
        if ($this->db->affected_rows() > 0) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }


    // public function checkCostCentreName($cost_centre_name, $company_id, $flag_id, $row_id)
    // {
    //     if ($flag_id == 0) {
    //         $this->db->where("(`company_id` = '$company_id' AND `cost_centre_name` = '$cost_centre_name') OR (`company_id` = '$company_id' AND `cost_centre_alternate_name` = '$cost_centre_name')");
    //     } else {
    //         $this->db->where("(`company_id` = '$company_id' AND `cost_centre_name` = '$cost_centre_name' AND `id` != '$row_id') OR (`company_id` = '$company_id' AND `cost_centre_alternate_name` = '$cost_centre_name' AND `id` != '$row_id')");
    //     }
    //     $query = $this->db->get('acc_cost_centres');
    //     return ($query->num_rows() > 0);
    // }
    public function checkCostCentreName($cost_centre_name, $company_id, $flag_id, $row_id)
        {
            if ($flag_id == 0) {
                $this->db->where("(`company_id` = '$company_id' AND `cost_centre_name` = '$cost_centre_name' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `cost_centre_alternate_name` = '$cost_centre_name' AND `is_deleted` = 'no')");
            } else {
                $this->db->where("(`company_id` = '$company_id' AND `cost_centre_name` = '$cost_centre_name' AND `id` != '$row_id' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `cost_centre_alternate_name` = '$cost_centre_name' AND `id` != '$row_id' AND `is_deleted` = 'no')");
            }
            $query = $this->db->get('acc_cost_centres');
            return ($query->num_rows() > 0);
        }


    public function checkCostCenterAlternateName($cost_centre_alternate_name, $company_id, $flag_id, $row_id)
{
    if ($flag_id == 0) {
        $this->db->where("(`company_id` = '$company_id' AND `cost_centre_alternate_name` = '$cost_centre_alternate_name' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `cost_centre_name` = '$cost_centre_alternate_name' AND `is_deleted` = 'no')");
    } else {
        $this->db->where("(`company_id` = '$company_id' AND `cost_centre_alternate_name` = '$cost_centre_alternate_name' AND `id` != '$hidden_id' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `cost_centre_name` = '$cost_centre_alternate_name' AND `id` != '$row_id' AND `is_deleted` = 'no')");
    }
    $query = $this->db->get('acc_cost_centres');
    return ($query->num_rows() > 0);
}


    
    // public function getCostCentreNames()
    // {
    //     $company_id = $this->session->userdata('company_id');
    //     $this->db->select('id, cost_centre_name');
    //     $this->db->where('company_id', $company_id);
    //     $query = $this->db->get('acc_cost_centres');
    //     //  echo "Last Query: " . $this->db->last_query();
    //     if ($query->num_rows() > 0) {
    //         return $query->result();
    //     }

    //     return array();
    // }

   
public function insert_tcs_nature_of_goods($data) {

    return $this->db->insert('acc_tcs_nature_of_goods', $data);
}


public function get_tcs_nature_of_goods()
{
    $company_id = $this->session->userdata('company_id');
  
    $this->db->where('company_id', $company_id); 
    $this->db->where('is_deleted', 'no');

    $query = $this->db->get('acc_tcs_nature_of_goods');

    if ($query->num_rows() > 0) {
        return $query->result_array();
    } else {
        return array();
    }
}




public function delete_tcs_nature_of_goods_by_id($id) {
    $data = array('is_deleted' => 'yes');
    $this->db->where('id', $id);
    return $this->db->update('acc_tcs_nature_of_goods', $data);
}


    
    
    public function get_tcs_goods_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('acc_tcs_nature_of_goods');
    
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }


   
    public function  update_tcs_nature_of_goods($row_id, $data){
        $this->db->where('id', $row_id);
        $this->db->update('acc_tcs_nature_of_goods', $data);
       
        if ($this->db->affected_rows() > 0) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }

    
    public function check_tcs_nature_of_goods_exist($tcs_nature_good_name, $flag,$row_id)
    {
        $company_id = $this->session->userdata('company_id');
        
        if ($flag == 1) {
            $this->db->where('id !=', $row_id);
        }
    
        $this->db->where('nature_of_payment_name', $tcs_nature_good_name);
        $this->db->where('company_id',$company_id);
        $this->db->where('is_deleted','no');
        $query = $this->db->get('acc_tcs_nature_of_goods');
        // $lastQuery = $this->db->last_query();
        // echo "last query".$lastQuery;
        if($query->num_rows() > 0) {
            return true;
        }
        else{
            return false;
        }
            
        
    }

// vaishakk code
	public function get_stock_item_data_table()
{
  
    $query = $this->db->where('is_deleted', 'no')->get('acc_stock_item_master');
    
    if ($query->num_rows() > 0) {
        
        return $query->result_array();
    } else {
        
        return array();
    }
}
public function get_stock_item_master_bill_of_material_data_table2()

{
  
    $query = $this->db->get('acc_stock_bom_master');
    
    
    

    if ($query->num_rows() > 0) {
        
        return $query->result_array();
    } else {
        
        return array();
    }
}

public  function get_godown_name(){
		  
    $SQL="SELECT *
      FROM  acc_godown ";

       $res 	 = $this->db->query($SQL);
          if($res->num_rows() > 0)
          {	
              
              return ($res->result());
          }
          return array();

   }

public function get_stock_item_master_bill_of_material()
{
  
    $query = $this->db->where('is_deleted', 'no')->get('acc_stock_bom_master');
    
    if ($query->num_rows() > 0) {
        
        return $query->result_array();
    } else {
        
        return array();
    }
}




public function saveStockItem($data) {

    $this->db->insert('acc_stock_item_master', $data);
    return $this->db->insert_id(); 
}

public function updateStockItem($rowID, $data){

       $now 					= date("Y-m-d H:i:s");

    $data1 =  array(
        
        "modfied_on"  =>  $now

    );
    $this->db->where('id', $rowID);

    $this->db->update('acc_stock_item_master', $data);
    $this->db->update('acc_stock_item_master', $data1);
   
    if ($this->db->affected_rows() > 0) {
        return true; 
    } else {
        return false; 
    }
}


public function update_stock_item_behaviour_setting($rowID, $data){
    $this->db->where('id', $rowID);
    $this->db->update('acc_stock_item_master', $data);

    if ($this->db->affected_rows() > 0) {
        return true;
    } else {
        return false; // Update failed
    }
}

public function update_gst_rate_details($rowID, $data){
    $this->db->where('id', $rowID);
    $this->db->update('acc_stock_item_master', $data);
   
    if ($this->db->affected_rows() > 0) {
        return true;
    } else {
        return false; // Update failed
    }
}


public function save_stock_item_master_set_vat_details($data) {

    $this->db->insert('acc_stock_vat_rate_details', $data);
    return $this->db->insert_id(); 
}


public function update_stock_item_master_set_vat_details($rowID, $data){

   
      $this->db->where('item_master_id', $rowID);
      $query = $this->db->get('acc_stock_vat_rate_details');
      
      if ($query->num_rows() === 0) {
        
          $now = date("Y-m-d H:i:s");
          $data['item_master_id'] = $rowID;
          $data['created_on'] = $now;
          $this->db->insert('acc_stock_vat_rate_details', $data);
      } else {
         
          $now = date("Y-m-d H:i:s");
          $data1 = array(
              "modfied_on" => $now
          );
  
      
          $this->db->where('item_master_id', $rowID);
          $this->db->update('acc_stock_vat_rate_details', $data);
          $this->db->update('acc_stock_vat_rate_details', $data1);
      }
  
      if ($this->db->affected_rows() > 0) {
          return true; 
      } else {
          return false; 
      }
}
public function save_stock_item_master_set_opening_balance($data) {

    $this->db->insert('acc_stock_opening_balance', $data);
    return $this->db->insert_id(); 
}


public function update_stock_item_master_set_opening_balance($currentDynamicRowID, $data,$rowID){

    $this->db->where('id', $currentDynamicRowID);
    $query = $this->db->get('acc_stock_opening_balance');
    
    if ($query->num_rows() === 0) {
      
        $now = date("Y-m-d H:i:s");
        $data['item_master_id'] = $rowID;
        $data['created_on'] = $now;
        $this->db->insert('acc_stock_opening_balance', $data);
    } else {
       
        $now = date("Y-m-d H:i:s");
        $data1 = array(
            "modfied_on" => $now
        );

        $this->db->where('id', $currentDynamicRowID);
        $this->db->update('acc_stock_opening_balance', $data);
        $this->db->update('acc_stock_opening_balance', $data1);
    }

    if ($this->db->affected_rows() > 0) {
        return true; 
    } else {
        return false; 
    }



}

public function save_stock_item_master_bill_of_material($data1) {

    $this->db->insert('acc_stock_bom_master', $data1);
    return $this->db->insert_id(); 
}

public function update_stock_item_master_bill_of_material($rowID, $data1) {
    
    $this->db->where('item_master_id', $rowID);
    $query = $this->db->get('acc_stock_bom_master');
    
    if ($query->num_rows() === 0) {
        $data1['item_master_id'] = $rowID;
        $this->db->insert('acc_stock_bom_master', $data1);
      
        $insert_id = $this->db->insert_id();
      
       
    } else {
        $this->db->where('item_master_id', $rowID);
        $this->db->update('acc_stock_bom_master', $data1);
       
       
    }

    if ($this->db->affected_rows() > 0) {
        return true; 
    } else {
        return false; 
    }
}


public function save_stock_item_master_bill_of_material_details($data) {

    $this->db->insert('acc_stock_bom_details', $data);
    return $this->db->insert_id(); 
}


public function update_stock_item_master_bill_of_material_details($currentDynamicRowID, $data){

    
    $this->db->where('id', $currentDynamicRowID);
    $this->db->update('acc_stock_bom_details', $data);
   
    if ($this->db->affected_rows() > 0) {
        return true; 
    } else {
        return false; 
    }
}


public function get_stock_item_by_id($id)
{
    $this->db->from('view_acc_stock_item_master');
    $this->db->where('id', $id);

    $query = $this->db->get();

    if ($query->num_rows() == 1) {
        return $query->row();
    } else {
        return false;
    }
}

public function delete_stock_item($id)
{

    $now 					= date("Y-m-d H:i:s");

    $data1 =  array(
        "is_deleted"  => "yes",
        "deleted_on"  =>  $now

    );

    $this->db->where('id', $id);
    $this->db->update('acc_stock_item_master',$data1);
    if ($this->db->affected_rows() > 0) {
        return true; 
    } else {
        return false; 
    }
}
public function get_acc_stock_groups(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, stock_group_name');
   
    $query = $this->db->get('acc_stock_groups');
   
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}

public function get_acc_stock_category(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, stock_category_name');

    $query = $this->db->get('acc_stock_category');
  
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_stock_units(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, stock_unit_name');
    $query = $this->db->get('acc_stock_units');
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_stock_units_bom(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, stock_unit_name');
    $query = $this->db->get('acc_stock_units');
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}


public function get_acc_stock_costing_methods(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, costing_method');
    $query = $this->db->get('acc_stock_costing_methods');
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_stock_market_valuation_methods(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, market_valuation_method');
    $query = $this->db->get('acc_stock_market_valuation_methods');
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}

public function get_acc_stock_gst_applicability(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, gst_applicability');
    $query = $this->db->get('acc_stock_gst_applicability');
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_gst_hsn_sac_related_action(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, hsn_sac_related_action');
    $query = $this->db->get('acc_gst_hsn_sac_related_action');
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_gst_classification(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, gst_classification_name');
    $query = $this->db->get('acc_gst_classification');
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_rate_related_gst_classification(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, gst_classification_name');
    // // $this->db->where('company_id', $company_id);
    $query = $this->db->get('acc_gst_classification');
    //  echo "Last Query: " . $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_gst_taxability_type(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, gst_taxability_type');
    $query = $this->db->get('acc_gst_taxability_type');
    //  echo "Last Query: " . $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_gst_cess_valuation_type(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, gst_cess_valuation_type');
    $query = $this->db->get('acc_gst_cess_valuation_type');
    //  echo "Last Query: " . $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_stock_type_of_supply(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, type_of_supply');
    $query = $this->db->get('acc_stock_type_of_supply');
    //  echo "Last Query: " . $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}

public function get_acc_vat_type_of_goods(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, vat_type_of_goods');
    $query = $this->db->get('acc_vat_type_of_goods');
    //  echo "Last Query: " . $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_vat_nature_of_goods(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, acc_vat_nature_of_goods');
    $query = $this->db->get('acc_vat_nature_of_goods');
    //  echo "Last Query: " . $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_vat_taxability_type(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, vat_taxability_type');
    $query = $this->db->get('acc_vat_taxability_type');
    //  echo "Last Query: " . $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}
public function get_acc_vat_schedule_groups(){
    $company_id = $this->session->userdata('company_id');
    $this->db->select('id, vat_schedule_group');
    $query = $this->db->get('acc_vat_schedule_groups');
    //  echo "Last Query: " . $this->db->last_query();
    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array();
}

public function get_unit_name()
{
    $query = $this->db->get('acc_stock_units');
    return $query->result();
}
public function get_unit_type_id($insert_id)
{
    $query = $this->db->get_where('acc_stock_units', array('id' => $insert_id));
    return $query->result();
}

public function insert_inventory_unit($data){
    return $this->db->insert('acc_stock_units', $data);
}
public function update_stock_unit($id, $data) {
    $this->db->where('id', $id);
    return $this->db->update('acc_stock_units', $data);

}

public function get_stock_unit()
{
    $company_id = $this->session->userdata('company_id');
    $this->db->select('acc_stock_units.*, 
    acc_stock_unit_types.unit_type AS unit_type,
    acc_stock_unit_quantity_code.quantity_code AS quantity_code');
    $this->db->from('acc_stock_units');
    $this->db->join('acc_stock_unit_types', 'acc_stock_units.stock_unit_type_id = acc_stock_unit_types.id', 'left');
    $this->db->join('acc_stock_unit_quantity_code', 'acc_stock_units.acc_stock_unit_quantity_code_id = acc_stock_unit_quantity_code.id', 'left');
    $this->db->order_by('acc_stock_units.id', 'DESC'); // Order by 'id' field in descending order
    $this->db->where('acc_stock_units.company_id', $company_id);
    $this->db->where('acc_stock_units.is_deleted', 'no');
    $query = $this->db->get();


    if ($query->num_rows() > 0) {
        
        return $query->result_array();
    } else {
        
        return array();
    }
}

public function get_Stock_unit_by_id($id)
{
    $this->db->where('id', $id);
    $query = $this->db->get('acc_stock_units');

    if ($query->num_rows() == 1) {
        return $query->row();
    } else {
        return false;
    }
}
public function update_inventory_stock_units($row_id, $data){
    
    $this->db->where('id', $row_id);
    $this->db->update('acc_stock_units', $data);
       return $this->db->affected_rows() > 0; 
}


public function get_parent_unit($edited_row_id) {
    $company_id = $this->session->userdata('company_id');
    
    $this->db->select('id, stock_unit_name')
        ->from('acc_stock_units')
        ->where('company_id', $company_id)
        ->where('is_deleted', 'no');

    // Add a condition if $edited_row_id is greater than 0
    if ($edited_row_id > 0) {
        $this->db->where('id !=', $edited_row_id);
    }

    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->result();
    }

    return array(); 
}


public function delete_stock_unit_by_id($id)
{
 
    $this->db->where('id', $id);
    $this->db->set('is_deleted','yes');

    $this->db->update('acc_stock_units');
    return $this->db->affected_rows() > 0;
}


public function check_unit_name_exist($unit_name, $flag,$row_id)
{
    $company_id = $this->session->userdata('company_id');
    
    if ($flag == 1) {
        $this->db->where('id !=', $row_id);
    }

    $this->db->where('stock_unit_name', $unit_name);
    $this->db->where('company_id',$company_id);
    $this->db->where('is_deleted','no');
    $query = $this->db->get('acc_stock_units');
    
    // Get the last executed SQL query
    // $lastQuery = $this->db->last_query();

    if($query->num_rows() > 0) {
        return true;
    }
    else{
        return false;
    }
        
    
}




// save tds nature code start here 
public function insert_tds_nature_of_payment($data){
    return $this->db->insert('acc_tds_nature_of_payment', $data);
}
// save tds nature code end  here  

public function get_load_tds_nature_of_payment()
{
    $company_id = $this->session->userdata('company_id');
    $this->db->select("id, nature_of_payment_name, payment_section,payment_code");
    $this->db->from('acc_tds_nature_of_payment');
    $this->db->where('company_id', $company_id);
    $this->db->where('is_deleted', 'no');
    $this->db->order_by('id', 'asc');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->result();
    }
    return array(); 
}
public function get_tds_nature_of_payment_by_id($id){
    $this->db->where('id', $id);
    $query = $this->db->get('acc_tds_nature_of_payment');

    if ($query->num_rows() == 1) {
        return $query->row();
    } else {
        return false;
    }
}
public function update_tds_nature_of_payment($row_id, $data){
    
    $this->db->where('id', $row_id);
    $this->db->update('acc_tds_nature_of_payment', $data);
       return $this->db->affected_rows() > 0; 
}
public function delete_tds_nature_of_payment($id)
{
 
    $this->db->where('id', $id);
    $this->db->set('is_deleted','yes');

    $this->db->update('acc_tds_nature_of_payment');
    return $this->db->affected_rows() > 0;
}

public function check_tds_nature_payment_exist($tds_nature_payment_name, $flag,$row_id)
{
    $company_id = $this->session->userdata('company_id');
    
    if ($flag == 1) {
        $this->db->where('id !=', $row_id);
    }

    $this->db->where('nature_of_payment_name', $tds_nature_payment_name);
    $this->db->where('company_id',$company_id);
    $this->db->where('is_deleted','no');
    $query = $this->db->get('acc_tds_nature_of_payment');
    if($query->num_rows() > 0) {
        return true;
    }
    else{
        return false;
    }
        
    
}

public function get_unit_quantity_code()
{
    $query = $this->db->get('acc_stock_unit_quantity_code');
    return $query->result();
}

public function get_unit_type()
{
    $query = $this->db->get('acc_stock_unit_types');
    return $query->result();
}


public function cost_cenrtre_name()
{
   $query = $this->db->get('acc_cost_centres');
   return $query->result();
}


public function insert_godown_creation($data) {

    return $this->db->insert('acc_godown', $data);
}


public function get_godown_creation() {
    $this->db->select('id, godown_name,godown_address_line_1');
    $this->db->from('acc_godown');
    $this->db->where('is_deleted', 'no');
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->result_array();
    }

    return array(); 
}


public function get_godown_names()
{
    $company_id = $this->session->userdata('company_id');

    $this->db->where('company_id', $company_id); 
    $this->db->where('is_deleted', 'no');
    $query = $this->db->get('acc_godown');

    if ($query->num_rows() > 0) {
        return $query->result_array();
    } else {
        return array();
    }
}



public function delete_godown_by_id($id)
    {
        $data = array('is_deleted' => 'yes');
        $this->db->where('id', $id);
        return $this->db->update('acc_godown', $data);
    }
  

    public function  get_godown_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('acc_godown');
    
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }
 
    public function update_godown_creation($hidden_id, $data){
        $this->db->where('id', $hidden_id);
        $this->db->update('acc_godown', $data);
       
        if ($this->db->affected_rows() > 0) {
            return true; // Update successful
        } else {
            return false; // Update failed
        }
    }

  
    public function check_godown_name_exists($godown_name, $company_id, $flag_id, $hidden_id)
    {
        if ($flag_id == 0) {
            $this->db->where("(`company_id` = '$company_id' AND `godown_name` = '$godown_name' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `godown_alternate_name` = '$godown_name' AND `is_deleted` = 'no')");
        } else {
           
            $this->db->where("(`company_id` = '$company_id' AND `godown_name` = '$godown_name' AND `id` != '$hidden_id' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `godown_alternate_name` = '$godown_name' AND `id` != '$hidden_id' AND `is_deleted` = 'no')");
        }
        $query = $this->db->get('acc_godown');
        return ($query->num_rows() > 0);
    }

   
public function  check_godown_alternate_name_exists($godown_alternate_name, $company_id, $flag_id, $hidden_id)
{
    if ($flag_id == 0) {
        $this->db->where("(`company_id` = '$company_id' AND `godown_alternate_name` = '$godown_alternate_name' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `godown_name` = '$godown_alternate_name' AND `is_deleted` = 'no')");
    } else {
       
        $this->db->where("(`company_id` = '$company_id' AND `godown_alternate_name` = '$godown_alternate_name' AND `id` != '$hidden_id' AND `is_deleted` = 'no') OR (`company_id` = '$company_id' AND `godown_name` = '$godown_alternate_name' AND `id` != '$hidden_id' AND `is_deleted` = 'no')");
    }
    $query = $this->db->get('acc_godown');
    return ($query->num_rows() > 0);
}
  
   
   
public  function get_stock_bom_component_type(){
		  
    $SQL="SELECT *
      FROM  acc_stock_bom_component_type ";

       $res 	 = $this->db->query($SQL);
          if($res->num_rows() > 0)
          {	
              
              return ($res->result());
          }
          return array();

   }


   
   public function get_acc_stock_opening_balance($row_id) {

    // $testId =$row_id;
    // echo $row_id;




    $this->db->select('*');
    $this->db->from('acc_stock_opening_balance');
    $this->db->where('item_master_id', $row_id);
    $query = $this->db->get();
  


   
   
    if ($query->num_rows() > 0) {
        return $query->result();
    } else {
        return array();
    }
} 

public function get_acc_stock_bill_of_material_details($row_id) {

    $this->db->select('*');
    $this->db->from('acc_stock_bom_details');
    $this->db->where('item_master_id', $row_id);
    $query = $this->db->get();
  
   
   
    if ($query->num_rows() > 0) {
        return $query->result();
    } else {
        return array();
    }
} 
public function get_acc_stock_bill_of_material($row_id) {

    $this->db->select('*');
    $this->db->from('acc_stock_bom_master');
    $this->db->where('item_master_id', $row_id);
    $query = $this->db->get();
  
   
   
    if ($query->num_rows() > 0) {
        return $query->result();
    } else {
        return array();
    }
} 

 public  function get_stock_item_master(){
		  
    $SQL="SELECT *
      FROM  acc_stock_item_master ";

       $res 	 = $this->db->query($SQL);
          if($res->num_rows() > 0)
          {	
              
              return ($res->result());
          }
          return array();

}   

public function getHsnSacData($gst_classification_id)
{
      $this->db->where('id', $gst_classification_id);
    $query = $this->db->get('acc_gst_classification');
    return $query->result_array();
}
}
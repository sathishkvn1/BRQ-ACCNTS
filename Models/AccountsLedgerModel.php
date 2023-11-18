
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountsLedgerModel extends CI_Model {

    var $table = 'acc_accounts_ledgers';

    var $column_order 	= array('Title','Status','CreatedOn','CreatedBy'); //set column field database for datatable orderable
	var $column_search 	= array('Title','Status','CreatedOn','CreatedBy'); //set column field database for datatable searchable.
	var $order = array('id' => 'desc'); // default order 

  
    public function get_acc_accounts_group(){
        $query = $this->db->query("(SELECT id, company_id, accounts_group_name, link FROM acc_accounts_groups ORDER BY accounts_group_name ASC) UNION (SELECT id, company_id, accounts_group_alternate_name AS accounts_group_name, link FROM acc_accounts_groups WHERE accounts_group_alternate_name IS NOT NULL )");
    
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }

    public function saveSupplierCreation($data, $data2) {

        $this->db->insert('acc_accounts_ledgers', $data);
        $ledgerID = $this->db->insert_id();
        
        $data2['ledger_id'] = $ledgerID;
        $this->db->insert('acc_accounts_ledger_address_and_contact_details', $data2);
        
        return $ledgerID; 
    }

    public function saveBankAccountCreation($data, $data2) {

        $this->db->insert('acc_accounts_ledgers', $data);
        $ledgerID = $this->db->insert_id();
        
        $data2['ledger_id'] = $ledgerID;
        $this->db->insert('acc_accounts_ledger_address_and_contact_details', $data2);
        
        return $ledgerID; 
    }

    public function get_acc_edit_supplier_details($row_id) {

        $this->db->select('*');
        $this->db->from('view_acc_accounts_ledgers');
        $this->db->where('ledger_id', $row_id);
        $query = $this->db->get();
      
       
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    } 
    public function get_acc_edit_multiple_address($row_id) {

        $this->db->select('*');
        $this->db->from('acc_accounts_ledger_address_and_contact_details');
        $this->db->where('id', $row_id);
        $this->db->where('is_primary_address', 'no');

        $query = $this->db->get();
      
       
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    } 
    public function get_acc_stock_supplier_bank_details($row_id) {

        $this->db->select('*');
       
        $this->db->from('acc_accounts_ledger_bank_details');
        $this->db->where('ledger_id', $row_id);
      
        $query = $this->db->get();
      
       
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    } 
    public function get_acc_ledger_gst_van_pan_details($row_id) {

        $this->db->select('*');
       
        $this->db->from('acc_accounts_ledger_gst_vat_pan_details');
        $this->db->where('ledger_id', $row_id);
      
        $query = $this->db->get();
      
       
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    } 

    public function get_acc_accounts_ledger_tds_tcs_details($row_id) {

        $this->db->select('*');
       
        $this->db->from('acc_accounts_ledger_tds_tcs_details');
        $this->db->where('ledger_id', $row_id);
      
        $query = $this->db->get();
      
       
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    } 
    public function get_acc_accounts_ledger_stock_and_bill_settings($row_id) {

        $this->db->select('*');
       
        $this->db->from('acc_accounts_ledger_stock_and_bill_settings');
        $this->db->where('ledger_id', $row_id);
      
        $query = $this->db->get();
      
       
       
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return array();
        }
    } 
    

    
    public function save_ledger_gst_vat_pan_details_modal($data) {

        $this->db->insert('acc_accounts_ledger_gst_vat_pan_details', $data);
        return $this->db->insert_id();

    }

    public function update_ledger_gst_vat_pan_details_modal($rowID, $data){
        $this->db->where('ledger_id', $rowID);
        $query = $this->db->get('acc_accounts_ledger_gst_vat_pan_details');
        
        if ($query->num_rows() === 0) {
            $data['ledger_id'] = $rowID;
            $this->db->insert('acc_accounts_ledger_gst_vat_pan_details', $data);
        } else {
            $this->db->where('ledger_id', $rowID);
            $this->db->update('acc_accounts_ledger_gst_vat_pan_details', $data);
        }
        
        return true;
    }

    
    public function save_stock_and_bill_settings($data) {

        $this->db->insert('acc_accounts_ledger_stock_and_bill_settings', $data);
        return $this->db->insert_id();

    }

    public function update_stock_and_bill_settings($rowID, $data){
        $this->db->where('ledger_id', $rowID);
        $query = $this->db->get('acc_accounts_ledger_stock_and_bill_settings');
        
        if ($query->num_rows() === 0) {
            $data['ledger_id'] = $rowID;
            $this->db->insert('acc_accounts_ledger_stock_and_bill_settings', $data);
        } else {
            $this->db->where('ledger_id', $rowID);
            
            $this->db->update('acc_accounts_ledger_stock_and_bill_settings', $data);
        }
        
        return true;
    }

   
    public function save_multiple_address_details($data) {

        $this->db->insert('acc_accounts_ledger_address_and_contact_details', $data);
        return $this->db->insert_id();

    }

    public function update_multiple_address_details($rowID,$multiplerowID, $data){
       
        $this->db->where('id', $multiplerowID);
        $query = $this->db->get('acc_accounts_ledger_address_and_contact_details');
        
        if ($query->num_rows() === 0) {
            $data['ledger_id'] = $rowID;
            $this->db->insert('acc_accounts_ledger_address_and_contact_details', $data);
        } else {
            $this->db->where('id', $multiplerowID);
            $this->db->update('acc_accounts_ledger_address_and_contact_details', $data);
        }
        
        return true;
    }

    public function save_tcs_tds_details($data) {

        $this->db->insert('acc_accounts_ledger_tds_tcs_details', $data);
        return $this->db->insert_id();

    }

    public function update_tcs_tds_details($rowID, $data){
        $this->db->where('ledger_id', $rowID);
        $query = $this->db->get('acc_accounts_ledger_tds_tcs_details');
        
        if ($query->num_rows() === 0) {
            $data['ledger_id'] = $rowID;
            $this->db->insert('acc_accounts_ledger_tds_tcs_details', $data);
        } else {
            $this->db->where('ledger_id', $rowID);
            $this->db->update('acc_accounts_ledger_tds_tcs_details', $data);
        }
        
        return true;
    }




    public function updateSupplierCreation($rowID, $data){

    $now 					= date("Y-m-d H:i:s");
    $data1 =  array(
        
        "modfied_on"  =>  $now

    );

     $this->db->where('ledger_id', $rowID);
     $this->db->update('acc_accounts_ledgers', $data);

     $this->db->where('ledger_id', $rowID);
     $this->db->update('acc_accounts_ledgers', $data1);

   
    
    
     if ($this->db->affected_rows() > 0) {
         return true; 
     } else {
         return false; 
     }
 }

 public function updateSupplierCreationContactDetails($rowID, $data2){



   $this->db->where('ledger_id', $rowID);
   $this->db->where('is_primary_address','yes');
   $this->db->update('acc_accounts_ledger_address_and_contact_details', $data2);
   
   
    if ($this->db->affected_rows() > 0) {
        return true; 
    } else {
        return false; 
    }
}

    public function updateBankAccountCreation($rowID, $data){

    $now 					= date("Y-m-d H:i:s");
    $data1 =  array(
        
        "modfied_on"  =>  $now

    );

     $this->db->where('ledger_id', $rowID);
     $this->db->update('acc_accounts_ledgers', $data);

     $this->db->where('ledger_id', $rowID);
     $this->db->update('acc_accounts_ledgers', $data1);

   
    
    
     if ($this->db->affected_rows() > 0) {
         return true; 
     } else {
         return false; 
     }
 }

 public function updateBankAccountCreationContactDetails($rowID, $data2){



   $this->db->where('ledger_id', $rowID);
   $this->db->update('acc_accounts_ledger_address_and_contact_details', $data2);
   
   
    if ($this->db->affected_rows() > 0) {
        return true; 
    } else {
        return false; 
    }
}

public function save_supplier_contact_details($rowID, $data) {
    $this->db->where('ledger_id', $rowID);
    $this->db->where('is_primary_address','yes');
    $this->db->update('acc_accounts_ledger_address_and_contact_details', $data);

    return true; 
}

 

    public function get_supplier_data_table()
    {
      
        $query = $this->db->get('view_acc_accounts_ledgers');
        
        if ($query->num_rows() > 0) {
            
            return $query->result_array();
        } else {
            
            return array();
        }
    }
    public function get_supplier_contact_table($rowID)
    {

        $this->db->select('*');
        $this->db->from('acc_accounts_ledger_address_and_contact_details');
        $this->db->where('ledger_id', $rowID);
        $this->db->where('is_primary_address', 'no'); 

        $query = $this->db->get();

        
        if ($query->num_rows() > 0) {
            
            return $query->result_array();
        } else {
            
            return array();
        }
        
    }

    

    public function save_bank_account_details($data) {

        $this->db->insert('acc_accounts_ledger_bank_details', $data);
        return $this->db->insert_id(); 
    }

    public function update_bank_account_details($rowID, $data){

   
        $this->db->where('ledger_id', $rowID);
        $query = $this->db->get('acc_accounts_ledger_bank_details');
        
        if ($query->num_rows() === 0) {
          
      
            $data['ledger_id'] = $rowID;
       
            $this->db->insert('acc_accounts_ledger_bank_details', $data);
        } else {
           
        
            $this->db->where('ledger_id', $rowID);
            $this->db->update('acc_accounts_ledger_bank_details', $data);
            
        }
    
        if ($this->db->affected_rows() > 0) {
            return true; 
        } else {
            return false; 
        }
  }
    



    public function get_acc_state_master(){
        $this->db->select('id, state_name');
    
        $query = $this->db->get('acc_states_master');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }
    public function get_country_master(){
        $this->db->select('id, country_name');
    
        $query = $this->db->get('acc_country_master');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }
    public function get_acc_gst_registration_type(){
        $this->db->select('id, gst_registration_type');
    
        $query = $this->db->get('acc_gst_registration_type');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }
    public function get_acc_bank_transaction_types(){
        $this->db->select('id, bank_transaction_type');
    
        $query = $this->db->get('acc_bank_transaction_types');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }

    public function get_acc_accounts_voucher_date_type(){
        $this->db->select('id, voucher_date_type');
    
        $query = $this->db->get('acc_accounts_voucher_date_type');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }

    public function get_acc_accounts_dealer_vat_type(){
        $this->db->select('id, dealer_vat_type');
    
        $query = $this->db->get('acc_accounts_dealer_vat_type');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }

    public function get_acc_tds_tcs_collector_deductor_types(){
        $this->db->select('id, collector_deductor_type');
    
        $query = $this->db->get('acc_tds_tcs_collector_deductor_types');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }

    public function get_acc_tds_nature_of_payment(){
        $this->db->select('id, nature_of_payment_name');
    
        $query = $this->db->get('acc_tds_nature_of_payment');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }

    public function get_acc_accounts_interest_style(){
        $this->db->select('id, interest_style');
    
        $query = $this->db->get('acc_accounts_interest_style');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }
    
    public function get_acc_accounts_interest_balances_style(){
        $this->db->select('id, interest_balances_style');
    
        $query = $this->db->get('acc_accounts_interest_balances_style');
      
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    
        return array();
    }

    


    public function delete_supplier_by_id($id) {
        $data = array(
            'is_deleted' => 'yes'
        );
        $this->db->where('ledger_id', $id);
        return $this->db->update('acc_accounts_ledgers', $data);
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
    
    


}
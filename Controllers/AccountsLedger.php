<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

class AccountsLedger extends MY_Controller 
{
    var $inventory_controller      ="";
    var $headTitle                  = "";
    var $adminController            = "";
    
    var $payrollController          = "";
    var $hrController               = "";
    var $leadController             = "";
    
    var $reportController           = "";

    function __construct()
    {
        parent::__construct();
        parent::updateSys_counterWithAllTables(); // Defined in My_Controller
        $this->load->model("AdminModel");
		$this->load->model("Common_model");

        $this->load->model('accounts/AccountsLedgerModel');
    }



     public function legder_bank_account_creation(){

        $data["acc_state_master"]	           = $this->AccountsLedgerModel->get_acc_state_master();
        $data["acc_state_master2"]	           = $this->AccountsLedgerModel->get_acc_state_master();
        $data["acc_state_master3"]	           = $this->AccountsLedgerModel->get_acc_state_master();
        $data["acc_country_master"]            = $this->AccountsLedgerModel->get_country_master();
        $data["acc_country_master2"]            = $this->AccountsLedgerModel->get_country_master();
        $data["acc_gst_registration_type"]     = $this->AccountsLedgerModel->get_acc_gst_registration_type();
        $data["acc_bank_transaction_types"]     = $this->AccountsLedgerModel->get_acc_bank_transaction_types();
        $data["acc_accounts_dealer_vat_type"]     = $this->AccountsLedgerModel->get_acc_accounts_dealer_vat_type();


        
     
         $this->load->view('brq-accounts/ledger/legder_bank_account_creation',$data);
        

    }   
     public function ledger_index(){

        $data["acc_accounts_group"]     = $this->AccountsLedgerModel->get_acc_accounts_group();

     
        $this->load->view('brq-accounts/ledger/ledger_index',$data);
        

    }   
    
 
    public function ledger_supplier_customer_creation(){

        $data["acc_state_master"]	           = $this->AccountsLedgerModel->get_acc_state_master();
        $data["acc_state_master2"]	           = $this->AccountsLedgerModel->get_acc_state_master();
        $data["acc_state_master3"]	           = $this->AccountsLedgerModel->get_acc_state_master();
        $data["acc_country_master"]            = $this->AccountsLedgerModel->get_country_master();
        $data["acc_country_master2"]            = $this->AccountsLedgerModel->get_country_master();
        $data["acc_gst_registration_type"]     = $this->AccountsLedgerModel->get_acc_gst_registration_type();
        $data["acc_bank_transaction_types"]     = $this->AccountsLedgerModel->get_acc_bank_transaction_types();
        $data["acc_accounts_dealer_vat_type"]     = $this->AccountsLedgerModel->get_acc_accounts_dealer_vat_type();
        $data["acc_accounts_voucher_date_type"]     = $this->AccountsLedgerModel->get_acc_accounts_voucher_date_type();
        
        $data["acc_tds_tcs_collector_deductor_types"]	= $this->AccountsLedgerModel->get_acc_tds_tcs_collector_deductor_types();
        $data["acc_tds_nature_of_payment"]	= $this->AccountsLedgerModel->get_acc_tds_nature_of_payment();
        $data["acc_accounts_interest_style"]	= $this->AccountsLedgerModel->get_acc_accounts_interest_style();
        $data["acc_accounts_interest_balances_style"]	= $this->AccountsLedgerModel->get_acc_accounts_interest_balances_style();

        $data["AllGodownName"]	= $this->AccountsLedgerModel->get_godown_name();
     
         $this->load->view('brq-accounts/ledger/ledger_supplier_customer_creation',$data);
        

    }   
    function saveSupplierCreation()
    {
            
            
            $data 					= array(); 
            $data2 					= array();   
            $now 					= date("Y-m-d H:i:s");
    
            $company_id = $this->session->userdata('company_id');
            
                
            $account_head_name  			        = $this->input->post('account_head_name');
            $head_alternate_name 				    = $this->input->post('head_alternate_name');
            $description 		                    = $this->input->post('description');
            $notes 		                            = $this->input->post('notes');

            $address_line_one		                = $this->input->post('address_line_one');
            $address_line_two				        = $this->input->post('address_line_two');
            $address_line_three 				    = $this->input->post('address_line_three');
            $state_id			                    = $this->input->post('state_id');
            $country_id 			                = $this->input->post('country_id');
            $pin_code 			                    = $this->input->post('pin_code');
            $mobile_number		     	            = $this->input->post('mobile_number');

            
            $data					= array(
                                                'account_group_id'  		    =>   5001,  	                                                            
                                                'account_head_name'   		    =>   $account_head_name,                                  
                                                'head_alternate_name'  	  		=>   $head_alternate_name, 	
                                                'description'  	                =>   $description,                                        
                                                'notes'  	  		            =>   $notes,    

                                                'created_on'	                =>   $now,
                                                'company_id'                    =>   $company_id
                                            );

            $data2					= array(
                                                'is_primary_address'   		            =>   'yes',                                  
                                                'address_line_1'  	  		            =>   $address_line_one, 	
                                                'address_line_2'  	                    =>   $address_line_two,                                        
                                                'address_line_3'  	  		            =>   $address_line_three,                                            
                                                'state_id'	                            =>   $state_id,	                                                            
                                                'country_id'		                    =>   $country_id,                                  
                                                'pin_code'	                            =>   $pin_code,                              
                                                'mobile_number'  	  	                =>   $mobile_number

                                             );
    
                                            
                                            
        $flag_id=$_POST['flag_id'];
        if ($flag_id === "0") {
           
            $insertedRowId = $this->AccountsLedgerModel->saveSupplierCreation($data,$data2);
           
    
                if ($insertedRowId) {
                    $response = array(
                        'success' => true,
                        'message' => 'Supplier Created successfully.',
                        'insertedRowId' => $insertedRowId
    
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in saving Supplier Details.'
                    );
            }
        }
        elseif ($flag_id === "1") {
            
            $rowID = $this->input->post('rowID'); 
            $res = $this->AccountsLedgerModel->updateSupplierCreation($rowID, $data,$data2);
            $res1 =$this->AccountsLedgerModel->updateSupplierCreationContactDetails($rowID,$data2);
            
    
    
            if ($res) {
                $response = array(
                    'success' => true,
                    'message' => 'Updated Succesfully .',
                    'rowID'   => $rowID
                );
    
            }
            else {
                $response = array(
                    'success' => false,
                    'message' => 'Failed Updating'
                );
        }
           
        }
     
        echo json_encode($response);
       
    
    }
    function saveBankAccountCreation()
    {
            
            
            $data 					= array(); 
            $data2 					= array();   
            $now 					= date("Y-m-d H:i:s");
    
            $company_id = $this->session->userdata('company_id');
            
                
            $account_head_name  			            = $this->input->post('account_head_name');
            $head_alternate_name 				        = $this->input->post('head_alternate_name');
          
            $address_line_one		                    = $this->input->post('address_line_one');
            $address_line_two				            = $this->input->post('address_line_two');
            $address_line_three 				        = $this->input->post('address_line_three');
            $state_id			                        = $this->input->post('state_id');
            $country_id 			                    = $this->input->post('country_id');
            $pin_code 			                        = $this->input->post('pin_code');
            $mobile_number		     	                = $this->input->post('mobile_number');
            $description 		                        = $this->input->post('description');
            $notes 		                                = $this->input->post('notes');

            $pricing_level_applicable 			        = $this->input->post('pricing_level_applicable');
            $cost_centers_are_applicable 			    = $this->input->post('cost_centers_are_applicable');
            $is_payment_gateway		     	            = $this->input->post('is_payment_gateway');
            $effective_date_for_reconcillation 		    = $this->input->post('effective_date_for_reconcillation');
            $gstin_uin 	                                = $this->input->post('gstin_uin');




            
            $data					= array(
                                                'account_group_id'  		    =>   5001,  	                                                            
                                                'account_head_name'   		    =>   $account_head_name,                                  
                                                'head_alternate_name'  	  		=>   $head_alternate_name,  	
                                                'description'  	                =>   $description,                                        
                                                'notes'  	  		            =>   $notes,    

                                                'created_on'	                =>   $now,
                                                'company_id'                    =>   $company_id
                                            );

            $data2					= array(
                                                'is_primary_address'   		            =>   'yes',                                  
                                                'address_line_1'  	  		            =>   $address_line_one, 	
                                                'address_line_2'  	                    =>   $address_line_two,                                        
                                                'address_line_3'  	  		            =>   $address_line_three,                                            
                                                'state_id'	                            =>   $state_id,	                                                            
                                                'country_id'		                    =>   $country_id,                                  
                                                'pin_code'	                            =>   $pin_code,                              
                                                'mobile_number'  	  	                =>   $mobile_number

                                             );
   

           
    
                                            
                                            
        $flag_id=$_POST['flag_id'];
        if ($flag_id === "0") {
           
            $insertedRowId = $this->AccountsLedgerModel->saveBankAccountCreation($data,$data2);
           
    
                if ($insertedRowId) {
                    $response = array(
                        'success' => true,
                        'message' => 'Supplier Created successfully.',
                        'insertedRowId' => $insertedRowId
    
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in saving Supplier Details.'
                    );
            }
        }
        elseif ($flag_id === "1") {
            
            $rowID = $this->input->post('rowID'); 
            $res = $this->AccountsLedgerModel->updateBankAccountCreation($rowID, $data,$data2);
            $res1 =$this->AccountsLedgerModel->updateBankAccountCreationContactDetails($rowID,$data2);
            
    
    
            if ($res) {
                $response = array(
                    'success' => true,
                    'message' => 'Updated Succesfully .',
                    'rowID'   => $rowID
                );
    
            }
            else {
                $response = array(
                    'success' => false,
                    'message' => 'Failed Updating'
                );
        }
           
        }
     
        echo json_encode($response);
       
    
    }
    public function get_edit_supplier_details()
    {
        $id = $this->input->post('id');
        

        $result = $this->AccountsLedgerModel->get_acc_edit_supplier_details($id);
        $data["acc_stock_supplier_bank_details"] = $this->AccountsLedgerModel->get_acc_stock_supplier_bank_details($id);
        $data["acc_ledger_gst_van_pan_details"] = $this->AccountsLedgerModel->get_acc_ledger_gst_van_pan_details($id);
        $data["acc_accounts_ledger_tds_tcs_details"] = $this->AccountsLedgerModel->get_acc_accounts_ledger_tds_tcs_details($id);
        $data["acc_accounts_ledger_stock_and_bill_settings"] = $this->AccountsLedgerModel->get_acc_accounts_ledger_stock_and_bill_settings($id);
       
        if ($result) {
                    $response = [
                        'success' => true,
                        'data'    => $result,
                        'data3'   => $data["acc_ledger_gst_van_pan_details"],
                        'data4'   => $data["acc_stock_supplier_bank_details"],
                        'data5'   => $data["acc_accounts_ledger_tds_tcs_details"],
                        'data6'   => $data["acc_accounts_ledger_stock_and_bill_settings"]
                      
                        
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Stock list item not found'
                    ];
                }
            echo json_encode($response);


    }

    public function get_edit_multiple_address()
    {
        $id = $this->input->post('id');
        

        $result = $this->AccountsLedgerModel->get_acc_edit_multiple_address($id);
        // $data["acc_stock_supplier_bank_details"] = $this->AccountsLedgerModel->get_acc_stock_supplier_bank_details($id);
        // $data["acc_ledger_gst_van_pan_details"] = $this->AccountsLedgerModel->get_acc_ledger_gst_van_pan_details($id);
       
        if ($result) {
                    $response = [
                        'success' => true,
                        'data'    => $result,
                        // 'data3'   => $data["acc_ledger_gst_van_pan_details"],
                        // 'data4'   => $data["acc_stock_supplier_bank_details"]
                      
                        
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Address not found'
                    ];
                }
            echo json_encode($response);


    }


    public function get_supplier_table()
    {
        $suppierCreation = $this->AccountsLedgerModel->get_supplier_data_table();
    
        
        echo json_encode(['data' => $suppierCreation]);
    }

    public function get_supplier_contact_table()
    {
        $rowID = $this->input->post('rowID'); 
        $multipleAddress = $this->AccountsLedgerModel->get_supplier_contact_table($rowID);
       
        echo json_encode(['data' => $multipleAddress]);
    }

    
    function save_supplier_contact_details()
    {
            
            
            $data 					= array();  
          
    
            $rowID = $this->input->post('rowID'); 
                
            $contact_person_name  			      = $this->input->post('contact_person_name');
            $contact_person_designation  	      = $this->input->post('contact_person_designation');
            $contact_person_mobile_number 		  = $this->input->post('contact_person_mobile_number');
            $email 		                          = $this->input->post('email');
            $contact_person_email 		          = $this->input->post('contact_person_email');
            $website			                  = $this->input->post('website');
    
            
            $data	= array(
                                                'ledger_id'                    =>   $rowID,
                                                'contact_person_name'          =>   $contact_person_name,  	                                                            
                                                'contact_person_designation'   =>   $contact_person_designation,  
                                                'contact_person_mobile_number' =>   $contact_person_mobile_number,                          
                                                'email'  	  	               =>   $email, 	
                                                'contact_person_email'  	   =>   $contact_person_email,                                        
                                                'website'  	  		           =>   $website                                          
                                                                                
                                            
                            );
                                            
      
           
            $insertedRowId = $this->AccountsLedgerModel->save_supplier_contact_details($rowID,$data);
     
    
                if ($insertedRowId) 
                {
                    $response = array(
                        'success' => true,
                        'message' => 'Contact Details Updated successfully.'
                         
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in Bank Details Saving.'
                    );
                
                }
        
        echo json_encode($response);
       
    
    }
    
    function save_bank_account_details()
    {
            
            
            $data 					= array();  
            $now 					= date("Y-m-d H:i:s");
    
            $company_id = $this->session->userdata('company_id');
            $rowID = $this->input->post('rowID'); 
                
            $bank_transaction_type_id  			      = $this->input->post('bank_transaction_type_id');
            $bank_account_holders_name  			      = $this->input->post('bank_account_holders_name');
            $bank_account_number 				  = $this->input->post('bank_account_number');
            $bank_ifsc_code 		          = $this->input->post('bank_ifsc_code');
            $bank_swift_code 		                  = $this->input->post('bank_swift_code');
            $bank_name			          = $this->input->post('bank_name');
            $bank_branch 				          = $this->input->post('bank_branch');
            $bank_bsr_code 				          = $this->input->post('bank_bsr_code');
    
            
            $data					= array(
                                                'ledger_id'                 =>$rowID,
                                                'bank_transaction_type_id'          =>   $bank_transaction_type_id,  	                                                            
                                                'bank_account_holders_name'        =>   $bank_account_holders_name,  
                                                'bank_account_number'            =>      $bank_account_number,                          
                                                'bank_ifsc_code'  	  	    =>   $bank_ifsc_code, 	
                                                'bank_swift_code'  	        =>   $bank_swift_code,                                        
                                                'bank_name'  	  		    =>   $bank_name,                                            
                                                'bank_branch'	                =>   $bank_branch,	                                                            
                                                'bank_bsr_code'		   =>   $bank_bsr_code                                 
                                            
                                            );
                                            
        $flag_id=$_POST['flag_id'];
        if ($flag_id === "0") {
           
            $insertedRowId = $this->AccountsLedgerModel->save_bank_account_details($data);
     
    
                if ($insertedRowId) {
                    $response = array(
                        'success' => true,
                        'message' => 'Bank Details Saved successfully.',
                        'insertedRowId' => $insertedRowId, 
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in Bank Details Saving.'
                    );
            }
        }
        elseif ($flag_id === "1") {
            
            $rowID = $this->input->post('rowID'); 
            $res = $this->AccountsLedgerModel->update_bank_account_details($rowID, $data);
    
    
            if ($res) {
                $response = array(
                    'success' => true,
                    'message' => 'Updated Succesfully .',
                    'rowID'   => $rowID
                );
    
            }
            else {
                $response = array(
                    'success' => false,
                    'message' => 'Failed Updating'
                );
        }
           
        }
     
        echo json_encode($response);
       
    
    }

    
    function save_multiple_address_details()
    {
            
            
            $data 					= array();  
            $now 					= date("Y-m-d H:i:s");
    
            $company_id = $this->session->userdata('company_id');
            $rowID = $this->input->post('rowID'); 
                
            $address_line_1  			      = $this->input->post('address_line_1');
            $address_line_2  		          = $this->input->post('address_line_2');
            $address_line_3 				  = $this->input->post('address_line_3');
            $state_mutiple_address 		      = $this->input->post('state_mutiple_address');
            $country_multiple_address 		  = $this->input->post('country_multiple_address');
            $pincode_multiple_address		  = $this->input->post('pincode_multiple_address');
            $mobile_multiple_address		  = $this->input->post('mobile_multiple_address');
            $email_multiple_address 		  = $this->input->post('email_multiple_address');

            $name_of_person 				  = $this->input->post('name_of_person');
            $designation_contact  	          = $this->input->post('designation_contact');
            $mobile_contact  			      = $this->input->post('mobile_contact');
            $email_contact 				      = $this->input->post('email_contact');
           
    
            
            $data					= array(
                                                'address_line_1'                   =>   $address_line_1,
                                                'address_line_2'                   =>   $address_line_2,  	                                                            
                                                'address_line_3'                   =>   $address_line_3,  
                                                'state_id'                         =>   $state_mutiple_address,     
                                                'country_id'                       =>   $country_multiple_address,                           
                                                'pin_code'  	                   =>   $pincode_multiple_address, 	
                                                'mobile_number'                    =>   $mobile_multiple_address,                              
                                                'email'  	  	                   =>   $email_multiple_address,
                                                'ledger_id'                        =>   $rowID,                  
                                               

                                                'contact_person_name'		       =>   $name_of_person, 
                                                'contact_person_designation'  	   =>   $designation_contact,                                        
                                                'contact_person_mobile_number'     =>   $mobile_contact,                                            
                                                'contact_person_email'	           =>   $email_contact,
                                                'is_primary_address'               =>   'no'
                                            
                                            );
                                            
        $flag_id=$_POST['flag_id'];
        if ($flag_id === "0") {
           
            $insertedRowId = $this->AccountsLedgerModel->save_multiple_address_details($data);
                    
    
                if ($insertedRowId) {
                    $response = array(
                        'success' => true,
                        'message' => 'Multiple Address Details Saved Successfully.',
                        'insertedRowId' => $insertedRowId, 
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in Mutiple Address Details Saving.'
                    );
            }
        }
        elseif ($flag_id === "1") {
            
          
            $multiplerowID = $this->input->post('multiplerowID');  

            $rowID = $this->input->post('rowID');  
            $res = $this->AccountsLedgerModel->update_multiple_address_details($rowID,$multiplerowID, $data);
    
    
            if ($res) {
                $response = array(
                    'success' => true,
                    'message' => 'Updated Succesfully .',
                    'rowID'   => $rowID
                );
    
            }
            else {
                $response = array(
                    'success' => false,
                    'message' => 'Failed Updating'
                );
        }
           
        }
     
        echo json_encode($response);
       
    
    }

    

        
    function save_ledger_gst_vat_pan_details_modal()
    {
            
            
            $data 					= array();  
            $now 					= date("Y-m-d H:i:s");
    
            $company_id = $this->session->userdata('company_id');
            $rowID = $this->input->post('rowID'); 
                
            $gst_registration_type_id  			      = $this->input->post('gst_registration_type_id');
            $is_assessee_of_other_territory  		  = $this->input->post('is_assessee_of_other_territory');
            $gstin_uin 				                  = $this->input->post('gstin_uin');
            $is_party_a_transporter 		          = $this->input->post('is_party_a_transporter');
            $transporter_id 		                  = $this->input->post('transporter_id');
            $vat_type_id			                  = $this->input->post('vat_type_id');
            $place_of_supply_for_outwards			  = $this->input->post('place_of_supply_for_outwards');
            $vat_tin_number 				          = $this->input->post('vat_tin_number');
            $cst_number 				              = $this->input->post('cst_number');
            $sales_purchase_against_form_c  	      = $this->input->post('sales_purchase_against_form_c');
            $pan_number  			                  = $this->input->post('pan_number');
            $pan_effective_date 				      = $this->input->post('pan_effective_date');
            $name_on_the_pan 		                  = $this->input->post('name_on_the_pan');
           
    
            
            $data					= array(
                                                'ledger_id'                         =>   $rowID,
                                                'gst_registration_type_id'          =>   $gst_registration_type_id,  	                                                            
                                                'is_assessee_of_other_territory'    =>   $is_assessee_of_other_territory,  
                                                'is_party_a_transporter'            =>  $is_party_a_transporter,     
                                                'gstin_uin'                         =>   $gstin_uin,                           
                                                'transporter_id'  	  	            =>   $transporter_id, 	
                                                'vat_type_id'  	                    =>   $vat_type_id,   
                                                'place_of_supply_for_outwards'      =>   $place_of_supply_for_outwards,                              
                                                'vat_tin_number'  	  		        =>   $vat_tin_number,                                            
                                                'cst_number'	                    =>   $cst_number,	                                                            
                                                'sales_purchase_against_form_c'		=>   $sales_purchase_against_form_c, 
                                                'pan_number'  	                    =>   $pan_number,                                        
                                                'pan_effective_date'  	  		    =>   $pan_effective_date,                                            
                                                'name_on_the_pan'	                =>   $name_on_the_pan                                                            
                                                
                                            
                                            );
                                            
        $flag_id=$_POST['flag_id'];
        if ($flag_id === "0") {
           
            $insertedRowId = $this->AccountsLedgerModel->save_ledger_gst_vat_pan_details_modal($data);
                    
    
                if ($insertedRowId) {
                    $response = array(
                        'success' => true,
                        'message' => 'GST and PAN details Saved successfully.',
                        'insertedRowId' => $insertedRowId, 
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in GST & PAN Details Saving.'
                    );
            }
        }
        elseif ($flag_id === "1") {
            
            $rowID = $this->input->post('rowID'); 
            $res = $this->AccountsLedgerModel->update_ledger_gst_vat_pan_details_modal($rowID, $data);
    
    
            if ($res) {
                $response = array(
                    'success' => true,
                    'message' => 'Updated Succesfully .',
                    'rowID'   => $rowID
                );
    
            }
            else {
                $response = array(
                    'success' => false,
                    'message' => 'Failed Updating'
                );
        }
           
        }
     
        echo json_encode($response);
       
    
    }


            
    function save_stock_and_bill_settings()
    {
            
            
            $data 					= array();  
            $now 					= date("Y-m-d H:i:s");
    
            $company_id = $this->session->userdata('company_id');
            $rowID = $this->input->post('rowID'); 
                
            $applicable_price_level_id  			             = $this->input->post('applicable_price_level_id');
            $maintain_balances_bill_by_bill  		             = $this->input->post('maintain_balances_bill_by_bill');
            $default_credit_period 				                 = $this->input->post('default_credit_period');
            $check_for_credit_days_during_voucher_entry 		 = $this->input->post('check_for_credit_days_during_voucher_entry');
            $credit_limit 		                                 = $this->input->post('credit_limit');
            $cost_centers_are_applicable			             = $this->input->post('cost_centers_are_applicable');
            $activate_interest_calculation			             = $this->input->post('activate_interest_calculation');
            $calculate_interest_transaction_by_transaction 		 = $this->input->post('calculate_interest_transaction_by_transaction');
            $override_parameter_for_each_transaction 			 = $this->input->post('override_parameter_for_each_transaction');
            $calculate_interest_based_on_id  	                 = $this->input->post('calculate_interest_based_on_id');
            $include_trasaction_date_for_amount_added  			 = $this->input->post('include_trasaction_date_for_amount_added');
            $include_trasaction_date_for_amount_deducted 		 = $this->input->post('include_trasaction_date_for_amount_deducted');
            $interest_rate 		                                 = $this->input->post('interest_rate');
            $calculation_period_id 		                         = $this->input->post('calculation_period_id');
            $calculate_on_id 		                             = $this->input->post('calculate_on_id');
           
    
            
            $data					= array(
                                                'ledger_id'                                     =>   $rowID,
                                                'applicable_price_level_id'                     =>  $applicable_price_level_id,  	                                                            
                                                'maintain_balances_bill_by_bill'                =>  $maintain_balances_bill_by_bill,  
                                                'default_credit_period'                         =>  $default_credit_period,     
                                                'check_for_credit_days_during_voucher_entry'    =>   $check_for_credit_days_during_voucher_entry,                           
                                                'credit_limit'  	  	                        =>   $credit_limit, 	
                                                'cost_centers_are_applicable'  	                =>   $cost_centers_are_applicable,   
                                                'activate_interest_calculation'                 =>   $activate_interest_calculation,                              
                                                'calculate_interest_transaction_by_transaction' =>   $calculate_interest_transaction_by_transaction,                                            
                                                'calculate_interest_based_on_id'                =>   $calculate_interest_based_on_id,                                            
                                                'include_trasaction_date_for_amount_added'	    =>   $include_trasaction_date_for_amount_added,	                                                            
                                                'include_trasaction_date_for_amount_deducted'	=>   $include_trasaction_date_for_amount_deducted, 
                                                'interest_rate'  	                            =>   $interest_rate,                                        
                                                'calculation_period_id'  	  		            =>   $calculation_period_id,                                            
                                                'calculate_on_id'	                            =>   $calculate_on_id                                                            
                                                
                                            
                                            );
                                            
        $flag_id=$_POST['flag_id'];
        if ($flag_id === "0") {
           
            $insertedRowId = $this->AccountsLedgerModel->save_stock_and_bill_settings($data);
                    
    
                if ($insertedRowId) {
                    $response = array(
                        'success' => true,
                        'message' => 'GST and PAN details Saved successfully.',
                        'insertedRowId' => $insertedRowId, 
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in GST & PAN Details Saving.'
                    );
            }
        }
        elseif ($flag_id === "1") {
            
            $rowID = $this->input->post('rowID'); 
            $res = $this->AccountsLedgerModel->update_stock_and_bill_settings($rowID, $data);
    
    
            if ($res) {
                $response = array(
                    'success' => true,
                    'message' => 'Updated Succesfully .',
                    'rowID'   => $rowID
                );
    
            }
            else {
                $response = array(
                    'success' => false,
                    'message' => 'Failed Updating'
                );
        }
           
        }
     
        echo json_encode($response);
       
    
    }




    function save_tcs_tds_details()
    {
            
            
            $data 					= array();  
            $now 					= date("Y-m-d H:i:s");
    
            $company_id = $this->session->userdata('company_id');
            $rowID = $this->input->post('rowID'); 
                
            $is_tds_deductable  			      = $this->input->post('is_tds_deductable');
            $tds_deductee_type_id  		          = $this->input->post('tds_deductee_type_id');
            $deduct_tds_in_same_voucher 		  = $this->input->post('deduct_tds_in_same_voucher');
            $use_advanced_tds_entries 		      = $this->input->post('use_advanced_tds_entries');
            $tds_ignore_surcharge_excemption_limit 	  = $this->input->post('tds_ignore_surcharge_excemption_limit');
            $tds_ignore_income_tax_excemption_limit	  = $this->input->post('tds_ignore_income_tax_excemption_limit');
            $set_zero_lower_rate_for_tds_deduction		  = $this->input->post('set_zero_lower_rate_for_tds_deduction');


            $is_tcs_applicable 				               = $this->input->post('is_tcs_applicable');
            $buyer_lessee_type_id 				               = $this->input->post('buyer_lessee_type_id');
            $use_advanced_configuration_for_tcs  	           = $this->input->post('use_advanced_configuration_for_tcs');
            $tcs_ignore_surcharge_excemption_limit  	   = $this->input->post('tcs_ignore_surcharge_excemption_limit');
            $tcs_ignore_income_tax_excemption_limit 	   = $this->input->post('tcs_ignore_income_tax_excemption_limit');
            $set_zero_lower_rate_for_tcs_collection 	   = $this->input->post('set_zero_lower_rate_for_tcs_collection');
            $override_realisation_based_nature_of_goods 		               = $this->input->post('override_realisation_based_nature_of_goods');
           
    
            
            $data					= array(
                                                'ledger_id'                             =>   $rowID,

                                                'is_tds_deductable'                          =>   $is_tds_deductable,  	                                                            
                                                'tds_deductee_type_id'                       =>   $tds_deductee_type_id,  
                                                'deduct_tds_in_same_voucher'                 =>  $deduct_tds_in_same_voucher,     
                                                'use_advanced_tds_entries'                   =>   $use_advanced_tds_entries,                           
                                                'tds_ignore_surcharge_excemption_limit'      =>   $tds_ignore_surcharge_excemption_limit, 	
                                                'tds_ignore_income_tax_excemption_limit'     =>   $tds_ignore_income_tax_excemption_limit,   
                                                'set_zero_lower_rate_for_tds_deduction'      =>   $set_zero_lower_rate_for_tds_deduction,                              


                                                'is_tcs_applicable'  	  		             =>   $is_tcs_applicable,                                            
                                                'buyer_lessee_type_id'	                     =>   $buyer_lessee_type_id,	                                                            
                                                'use_advanced_configuration_for_tcs'		 =>   $use_advanced_configuration_for_tcs, 
                                                'tcs_ignore_surcharge_excemption_limit'      =>   $tcs_ignore_surcharge_excemption_limit,                                        
                                                'tcs_ignore_income_tax_excemption_limit'     =>   $tcs_ignore_income_tax_excemption_limit,                                            
                                                'set_zero_lower_rate_for_tcs_collection'	 =>   $set_zero_lower_rate_for_tcs_collection,                                                            
                                                'override_realisation_based_nature_of_goods' =>   $override_realisation_based_nature_of_goods                                                            
                                                
                                            
                                            );
                                            
        $flag_id=$_POST['flag_id'];
        if ($flag_id === "0") {
           
            $insertedRowId = $this->AccountsLedgerModel->save_tcs_tds_details($data);
                    
    
                if ($insertedRowId) {
                    $response = array(
                        'success' => true,
                        'message' => 'Saved successfully.',
                        'insertedRowId' => $insertedRowId, 
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in Saving.'
                    );
            }
        }
        elseif ($flag_id === "1") {
            
            $rowID = $this->input->post('rowID'); 
            $res = $this->AccountsLedgerModel->update_tcs_tds_details($rowID, $data);
    
    
            if ($res) {
                $response = array(
                    'success' => true,
                    'message' => 'Updated Succesfully .',
                    'rowID'   => $rowID
                );
    
            }
            else {
                $response = array(
                    'success' => false,
                    'message' => 'Failed Updating'
                );
        }
           
        }
     
        echo json_encode($response);
       
    
    }

    



    public function delete_supplier_by_id() {
        $id = $this->input->post('id');
        $result = $this->AccountsLedgerModel->delete_supplier_by_id($id);
    
        if ($result) {
            $response = ['success' => true, 'message' => 'Item marked as deleted successfully'];
        } else {
            $response = ['success' => false, 'message' => 'Failed to mark item as deleted'];
        }
    
        echo json_encode($response);
    }
    
}



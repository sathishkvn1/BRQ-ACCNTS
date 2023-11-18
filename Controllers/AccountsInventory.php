<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

class AccountsInventory extends MY_Controller 
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

        $this->load->model('accounts/InventoryModel');
    }

    public function inventory_master_settings(){
        $this->load->view('brq-accounts/inventory/inventory_master_settings');
    }

    public function save_inventory_master_settings()
    {
        //  echo "inside save_inventory_master_settings";
        
        $company_id = $this->session->userdata('company_id');
        //  echo "Company ID: " . $company_id; 
      
        $data = array(
            'company_id'                                         => $company_id,
            'provide_alternate_name_for_stock_items'            => $this->input->post('provide_alternate_name_for_stock_items'),
            'provide_name_in_local_language_for_stock_items'    => $this->input->post('provide_name_in_local_language_for_stock_items'),
            'provide_part_number_for_stock_items'               => $this->input->post('provide_part_number_for_stock_items'),
            'provide_descriptions_for_stock_items'              => $this->input->post('provide_descriptions_for_stock_items'),
            'provide_notes_for_stock_items'                     => $this->input->post('provide_notes_for_stock_items'),
            'use_stock_group_for_stock_items'                   => $this->input->post('use_stock_group_for_stock_items'),
            'use_stock_category_for_stock_items'                => $this->input->post('use_stock_category_for_stock_items'),
            'provide_units_of_measure_for_stock_items'          => $this->input->post('provide_units_of_measure_for_stock_items'),
            'use_alternate_units_for_stock_items'               => $this->input->post('use_alternate_units_for_stock_items'),
            'maintain_stock_items_in_batches'                   => $this->input->post('maintain_stock_items_in_batches'),
            'set_bom_for_stock_items'                           => $this->input->post('set_bom_for_stock_items'),
            'provide_standard_buying_and_selling_rates'         => $this->input->post('provide_standard_buying_and_selling_rates'),
            'provide_mrp_details_for_stock_items'               => $this->input->post('provide_mrp_details_for_stock_items'),
            'is_cost_tracking_applicable_for_stock_items'       => $this->input->post('is_cost_tracking_applicable_for_stock_items'),
            'set_default_accounting_allocations_for_stock_items'=> $this->input->post('set_default_accounting_allocations_for_stock_items'),
            'use_costing_and_market_valuation_methods_for_stock_items' => $this->input->post('use_costing_and_market_valuation_methods_for_stock_items'),
            'set_options_for_stock_item_behaviour'                     => $this->input->post('set_options_for_stock_item_behaviour'),
            'provide_opening_balances_for_stock_items'                 => $this->input->post('provide_opening_balances_for_stock_items'),
            'provide_gst_details_for_stock_items'                      => $this->input->post('provide_gst_details_for_stock_items'),
            'provide_hsn_sac_details_for_stock_items'                  => $this->input->post('provide_hsn_sac_details_for_stock_items'),
            'provide_hsn_sac_description_for_stock_items'              => $this->input->post('provide_hsn_sac_description_for_stock_items'),
            'provide_breakup_of_tax_rate'                              => $this->input->post('provide_breakup_of_tax_rate'),
            'provide_cess_rate_details'                                => $this->input->post('provide_cess_rate_details'),
            'enable_reverse_charge_calculation'                        => $this->input->post('enable_reverse_charge_calculation'),
            'eligible_for_input_tax_credit'                            => $this->input->post('eligible_for_input_tax_credit'),
            'select_type_of_supply'                                    => $this->input->post('select_type_of_supply'),
            'set_inclusive_of_duties_and_taxes_option'                 => $this->input->post('set_inclusive_of_duties_and_taxes_option'),
            'provide_rate_of_duty'                                      => $this->input->post('provide_rate_of_duty')
        
        );
      
        $res = $this->InventoryModel->insert_inventory_master_settings($data);
        
        //  var_dump(  $data );
        if($res)
        {
        $response = array(
            'success' => true,
            'message' => 'Saved successfully.'
        );
        }
        else
        {
            $response = array(
            'success' => false,
            'message' => 'Error in Company inventory master settings updation.'
            );
        }
       
        echo json_encode($response);
    
    }

    public function stock_group_creation(){
        // echo "inside inventory";
        $data['company_id']             =$this->session->userdata('company_id');

        $data = array();
        $data["gst_taxability_type"]   = $this->InventoryModel-> gst_taxability_type();
        $data["hsn_sac_related_action"]   = $this->InventoryModel->  gst_hsn_sac_related_action();
        $data["gst_rate_related_action"]   = $this->InventoryModel->gst_rate_related_action();
        $data["stock_group_names"]          = $this->InventoryModel->getStockGroupNames();
        
        $this->load->view('brq-accounts/inventory/stock_group_creation', $data);
    }

    public function save_inventory_group_settings()
    {
        //  echo "inside save_inventory_master_settings";
        $company_id = $this->session->userdata('company_id');
        //  echo "Company ID: " . $company_id; 
       
      
        
        $data = array(
            'company_id'                                        => $company_id,
            'stock_group_name'                                  => $this->input->post('stock_group_name'),
            'stock_group_alternate_name'                        => $this->input->post('stock_group_alternate_name'),
           
            'parent_group_id'                                   => (int)$this->input->post('parent_group_id'),
            'should_quantities_of_items_to_be_added'            => $this->input->post('should_quantities_of_items_to_be_added'),
            'hsn_sac_details_id'                                 => $this->input->post('hsn_sac_details_id'),
            'hsn_gst_classification_id'                         => $this->input->post('hsn_gst_classification_id'),
            'hsn_sac_number'                                    => $this->input->post('hsn_sac_number'),
            'hsn_sac_description'                               => $this->input->post('hsn_sac_description'),
            'gst_rate_details_id'                               => $this->input->post('gst_rate_details_id'),
            'gst_gst_classification_id'                         => $this->input->post('gst_gst_classification_id'),
            'taxability_type_id'                                => $this->input->post('taxability_type_id'),
            'igst_rate'                                          => $this->input->post('igst_rate'),
            'cgst_rate'                                          => $this->input->post('cgst_rate'),
            'sgst_utgst_rate'                                    => $this->input->post('sgst_utgst_rate'),
            'cess_valuation_type_id'                             => $this->input->post('cess_valuation_type_id'),
            'cess_rate'                                          => $this->input->post('cess_rate'),
            'applicable_for_reverse_charge'                      => $this->input->post('applicable_for_reverse_charge'),
            'eligible_for_input_tax_credit'                      => $this->input->post('eligible_for_input_tax_credit'),
        );
        // var_dump($data);
        // exit;
       
        if ($data['parent_group_id'] == 0) {
            // Set is_primary to "yes"
            $data['is_primary'] = 'yes';
        } 
        
      
        $res = $this->InventoryModel->insert_inventory_group_settings($data);
        
        
        if($res)
        {
        $response = array(
            'success' => true,
            'message' => 'Company inventory master settings updated successfully.'
        );
        }
        else
        {
            $response = array(
            'success' => false,
            'message' => 'Error in Company inventory master settings updation.'
            );
        }
       
        echo json_encode($response);
    
    }

    public function gst_hsn_sac_details_items() {
        $company_id = $this->session->userdata('company_id');
     
        $selectedOption = $this->input->post('selectedOption');
        if ($selectedOption === "5") {
          
            $data = $this->InventoryModel->getHsnSacDetails($selectedOption,$company_id);
            echo json_encode($data);
        } else {
            echo json_encode(array('error' => 'Invalid Option'));
        }
    }

    public function getGstClassificationOptions()
    {
         $company_id = $this->session->userdata('company_id');
        //  echo "Company ID from session: " . $company_id;
        $selectedOption = $this->input->post('selectedOption');
        $gstClassificationOptions = $this->InventoryModel->getGstClassificationName($selectedOption,$company_id);
       
        echo json_encode($gstClassificationOptions);
    }

public function getGstClassificationDetails()
{
    $selected_classi_Option = $this->input->post('selected_classi_Option');
    $gstClassificationDetails = $this->InventoryModel->getGstClassificationDetails($selected_classi_Option);
    echo json_encode($gstClassificationDetails);
}

public function getGstClassificationNames()
{
    $company_id = $this->session->userdata('company_id');
    $selectedGstRateDetailsOption = $this->input->post('selectedGstRateDetailsOption');
    $gstClassificationName = $this->InventoryModel->getGstClassificationNames($selectedGstRateDetailsOption,$company_id);
    // var_dump($gstClassificationName);
    echo json_encode($gstClassificationName);
}


public function getGstClassification()
{
    $company_id = $this->session->userdata('company_id');
    $selectedGstClassificationOption = $this->input->post('selectedGstClassificationOption');
    $gstClassificationDetails = $this->InventoryModel->getGstClassification($selectedGstClassificationOption, $company_id);
    echo json_encode($gstClassificationDetails);
}


public function stock_category_creation()
{
    $data = array();
    $this->load->view('brq-accounts/inventory/stock_category_creation',$data);
}

public function save_inventory_stock_category(){

    $company_id = $this->session->userdata('company_id');
    // $hidden_id=$_POST['hidden_id'];
   
  
    $data = array(
        'company_id'                    => $company_id,
        'stock_category_name'           => $this->input->post('stock_category_name'),
        'stock_category_alternate_name' => $this->input->post('stock_category_alternate_name'),
        'parent_category_id'            => (int)$this->input->post('parent_category_id'),
        
    );
    // var_dump($data);

    if ($data['parent_category_id'] == 0) {
        // Set is_primary to "yes"
        $data['is_primary'] = 'yes';
    } 
    
    // $flag_id = $this->input->post('flag_id');
    $flag_id=$_POST['flag_id'];
   
  
    if ($flag_id === "0") {
       
        $res = $this->InventoryModel->insert_inventory_stock_category($data);
    }
    elseif ($flag_id === "1") {
        
        $hidden_id = $this->input->post('hidden_id'); 
        $res = $this->InventoryModel->update_inventory_stock_category($hidden_id, $data);
       
    }
  
    // $res = $this->InventoryModel->insert_inventory_stock_category($data);
    
    
    if($res)
    {
    $response = array(
        'success' => true,
        'message' => 'Saved successfully.'
    );
    }
    else
    {
        $response = array(
        'success' => false,
        'message' => 'Error in updation.'
        );
    }
   
    echo json_encode($response);

}

//datatable




public function get_stock_category()
{
    // $company_id = $this->session->userdata('company_id');
    $stockCategories = $this->InventoryModel->get_stock_category();
    
    echo json_encode(['data' => $stockCategories]);
}

public function delete_stock_category_by_id()
{
    $id  = $this->input->post('id');
    $result = $this->InventoryModel->delete_stock_category_by_id($id);

    if ($result) {
        $response = ['success' => true, 'message' => 'Item deleted successfully'];
    } else {
        $response = ['success' => false, 'message' => 'Failed to mark item as deleted'];
    }

    echo json_encode($response);
}

public function get_stock_categories_by_id()
{
    $id = $this->input->post('id');
    $result = $this->InventoryModel->get_stock_categories_by_id($id);

    if ($result) {
        $response = [
            'success' => true,
            'data' => $result
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Stock category not found'
        ];
    }

    echo json_encode($response);
}



public function check_stock_category_name()
{
    $stock_category_name = $this->input->post('stock_category_name');
    $company_id = $this->session->userdata('company_id');
    $flag_id = $this->input->post('flag_id');  
    $hidden_id = $this->input->post('hidden_id');  

    $result = $this->InventoryModel->check_stock_category_name($stock_category_name, $company_id, $flag_id, $hidden_id);

    echo json_encode(['exists' => $result]);
}


public function check_stock_category_alternate_name()
{
    $stock_category_alternate_name = $this->input->post('stock_category_alternate_name');
    $company_id = $this->session->userdata('company_id');
    $flag_id = $this->input->post('flag_id');  
    $hidden_id = $this->input->post('hidden_id');  

    $result = $this->InventoryModel->check_stock_category_alternate_name($stock_category_alternate_name, $company_id, $flag_id, $hidden_id);

    echo json_encode(['exists' => $result]);
}

public function get_stock_categories() {
 
    $stockCategories = $this->InventoryModel->get_stock_categories();
    echo json_encode($stockCategories);
}



public function inventory_cost_creation(){
    $data = array();
    $data["bank_transaction_types"]          = $this->InventoryModel->getBankTransactionTypes();
    // $data["cost_centre_names"]          = $this->InventoryModel->getCostCentreNames();
    // var_dump($data["cost_centre_name"]); 
    // die;

    $this->load->view('brq-accounts/inventory/cost_centre_creation',$data);

}

public function save_cost_centre(){

    $company_id = $this->session->userdata('company_id');

    $data = array(
        'company_id'                    => $company_id,
        'cost_centre_name'              => $this->input->post('cost_centre_name'),
        'cost_centre_alternate_name'    => $this->input->post('cost_centre_alternate_name'),
        'parent_cost_centre_id'         => (int)$this->input->post('parent_cost_centre_id'),
        'show_opening_balance_for_revenue_items_in_reports'           => $this->input->post('show_opening_balance_for_revenue_items_in_reports'),
        'use_for_job_costing'           => $this->input->post('use_for_job_costing'),
        'bank_transaction_type_id'      => $this->input->post('bank_transaction_type_id'),
        'bank_account_number'          => $this->input->post('bank_account_number'),
        'ifsc_code'                     => $this->input->post('ifsc_code'),
        'bank_name'                     => $this->input->post('bank_name'),
        'bank_branch'                   => $this->input->post('bank_branch'),
        'email'                         => $this->input->post('email'),
  
    );
   

    if ($data['parent_cost_centre_id'] == 0) {
        // Set is_primary to "yes"
        $data['is_primary'] = 'yes';
    } 
    
    
    $flag_id=$_POST['flag_id'];
  
  
    if ($flag_id === "0") {
       
        $res = $this->InventoryModel->insert_cost_centre($data);
    }
    elseif ($flag_id === "1") {
        
        $row_id = $this->input->post('row_id'); 
        $res = $this->InventoryModel->update_cost_centre($row_id, $data);
       
    }
    if($res)
    {
    $response = array(
        'success' => true,
        'message' => ' Saved successfully.'
    );
    }
    else
    {
        $response = array(
        'success' => false,
        'message' => 'Error in updation.'
        );
    }
    echo json_encode($response);
}

// for loading datatable in cost centre

public function get_cost_centre_details()
{
    // $company_id = $this->session->userdata('company_id');
    $costCentreCreation = $this->InventoryModel->get_cost_centre_details();
    
    echo json_encode(['data' => $costCentreCreation]);
}

// deleting the data table

public function delete_cost_centre_by_id()
{
    $id  = $this->input->post('id');
    $res = $this->InventoryModel->delete_cost_centre_by_id($id);

    if ($result) {
        $response = ['success' => true, 'message' => 'Item marked as deleted successfully'];
    } else {
        $response = ['success' => false, 'message' => 'Failed to mark item as deleted'];
    }

    echo json_encode($response);
}


public function get_cost_centre_by_id()
{
    $id = $this->input->post('id');
    $result = $this->InventoryModel->get_cost_centre_by_id($id);

    if ($result) {
        $response = [
            'success' => true,
            'data' => $result
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Stock category not found'
        ];
    }

    echo json_encode($response);
}



// validation function for cost centre name

public function checkCostCentreName()
{
    $cost_centre_name = $this->input->post('cost_centre_name');
    $company_id = $this->session->userdata('company_id');
    $flag_id = $this->input->post('flag_id');  
    $row_id = $this->input->post('row_id');  

    $result = $this->InventoryModel->checkCostCentreName($cost_centre_name, $company_id, $flag_id, $row_id);

    echo json_encode(['exists' => $result]);
}

//validation fr cost centre alternative name

public function checkCostCenterAlternateName()
{
    $cost_centre_alternate_name  = $this->input->post('cost_centre_alternate_name');
    $company_id = $this->session->userdata('company_id');
    $flag_id = $this->input->post('flag_id');  
    $row_id = $this->input->post('row_id');  

    $result = $this->InventoryModel->checkCostCenterAlternateName($cost_centre_alternate_name, $company_id, $flag_id, $row_id);

    echo json_encode(['exists' => $result]);
}

public function get_cost_centre_names() {
 
    $costCentreNames = $this->InventoryModel->get_cost_centre_names();
    echo json_encode($costCentreNames);
}


// TCS NATURE OF PATMENTS
public function tcs_nature_of_goods(){
    $data = array();
   
    $this->load->view('brq-accounts/inventory/tcs_nature_of_goods',$data);

}


public function save_tcs_nature_of_goods(){

    $company_id = $this->session->userdata('company_id');

    $data = array(
        'company_id'                           => $company_id,
        'nature_of_payment_name'               => $this->input->post('nature_of_payment_name'),
        'payment_section'                      => $this->input->post('payment_section'),
        'payment_code'                         => $this->input->post('payment_code'),
        'rate_for_individual_with_pan'         => $this->input->post('rate_for_individual_with_pan'),
        'rate_for_individual_without_pan'      => $this->input->post('rate_for_individual_without_pan'),
        'rate_for_other_deductee_with_pan'     => $this->input->post('rate_for_other_deductee_with_pan'),
        'rate_for_other_deductee_without_pan'  => $this->input->post('rate_for_other_deductee_without_pan'),
        'tax_calculation_based_on_realisation' => $this->input->post('tax_calculation_based_on_realisation'),
        'threshold_or_excemption_limit'         => $this->input->post('threshold_or_excemption_limit'),
        'calculate_tax_on_value_exceeding_limit'  => $this->input->post('calculate_tax_on_value_exceeding_limit'),
  
    );
   
    $flag_id=$_POST['flag_id'];
   
    if ($flag_id === "0") {
       
        $res = $this->InventoryModel->insert_tcs_nature_of_goods($data);
    }
    elseif ($flag_id === "1") {
        
        $row_id = $this->input->post('row_id'); 
        $res = $this->InventoryModel->update_tcs_nature_of_goods($row_id, $data);
       
    }
  
    
    if($res)
    {
    $response = array(
        'success' => true,
        'message' => 'TCS Nature of payment saved successfully.'
    );
    }
    else
    {
        $response = array(
        'success' => false,
        'message' => 'Error in TCS Nature of payment.'
        );
    }
   
    echo json_encode($response);

}


public function get_tcs_nature_of_goods()
{
    // $company_id = $this->session->userdata('company_id');
    $tcsNatureOfGoods = $this->InventoryModel->get_tcs_nature_of_goods();
    
    echo json_encode(['data' => $tcsNatureOfGoods]);
}




public function delete_tcs_nature_of_goods_by_id() {
    $id = $this->input->post('id');
    $result = $this->InventoryModel->delete_tcs_nature_of_goods_by_id($id);

    if ($result) {
        $response = ['success' => true, 'message' => 'Item marked as deleted successfully'];
    } else {
        $response = ['success' => false, 'message' => 'Failed to mark item as deleted'];
    }

    echo json_encode($response);
}



public function get_tcs_goods_by_id()
{
    $id = $this->input->post('id');
    $result = $this->InventoryModel->get_tcs_goods_by_id($id);

    if ($result) {
        $response = [
            'success' => true,
            'data' => $result
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Goods not found'
        ];
    }

    echo json_encode($response);
}


public function check_tcs_nature_of_goods_exist(){
    $tcs_nature_good_name    = $this->input->post('tcs_nature_goods_name');
    $flag               = $this->input->post('flag'); // Get the mode from the AJAX call
    $row_id               = $this->input->post('row_id'); // Get the mode from the AJAX call

    $response             = $this->InventoryModel->check_tcs_nature_of_goods_exist($tcs_nature_good_name, $flag,$row_id);
// var_dump($response);
// die;
    echo json_encode($response);

    }

    // stat of vaishak code

    public function stock_item_creation(){
        
        $data['company_id']             =$this->session->userdata('company_id');

        $data["acc_stock_item_master"]	= $this->InventoryModel->get_stock_item_master();
        $data["acc_stock_groups"]     = $this->InventoryModel->get_acc_stock_groups();
        $data["acc_stock_category"]     = $this->InventoryModel->get_acc_stock_category();
        $data["acc_stock_units"]     = $this->InventoryModel->get_acc_stock_units();
        $data["acc_stock_costing_methods"]     = $this->InventoryModel->get_acc_stock_costing_methods();
        $data["acc_stock_market_valuation_methods"]     = $this->InventoryModel->get_acc_stock_market_valuation_methods();
        $data["acc_stock_gst_applicability"]     = $this->InventoryModel->get_acc_stock_gst_applicability();
        $data["acc_gst_hsn_sac_related_action"]     = $this->InventoryModel->get_acc_gst_hsn_sac_related_action();
        $data["acc_gst_classification"]     = $this->InventoryModel->get_acc_gst_classification();
        $data["acc_rate_related_gst_classification"]     = $this->InventoryModel->get_acc_rate_related_gst_classification();
        $data["acc_gst_taxability_type"]     = $this->InventoryModel->get_acc_gst_taxability_type();
        $data["acc_gst_cess_valuation_type"]     = $this->InventoryModel-> get_acc_gst_cess_valuation_type();
        $data["acc_stock_type_of_supply"]     = $this->InventoryModel-> get_acc_stock_type_of_supply();

        $data["acc_vat_type_of_goods"]     = $this->InventoryModel-> get_acc_vat_type_of_goods();
        $data["acc_vat_nature_of_goods"]     = $this->InventoryModel-> get_acc_vat_nature_of_goods();
        $data["acc_vat_taxability_type"]     = $this->InventoryModel-> get_acc_vat_taxability_type();
        $data["acc_vat_schedule_groups"]     = $this->InventoryModel-> get_acc_vat_schedule_groups();
        
        $data["acc_stock_units_bom"]     = $this->InventoryModel-> get_acc_stock_units_bom();

        
        $data["acc_stock_bom_component_type"]	= $this->InventoryModel->get_stock_bom_component_type();

         $data["AllGodownName"]	= $this->InventoryModel->get_godown_name();
        // $data["financial_year"]                     = $this->company_financial_year_master();
$data["financial_year"]                         =$this->session->userdata('financial_year');
       
        $this->load->view('brq-accounts/inventory/stock_item_creation',$data);
        

    } 
  
    public function get_stock_item_data_table()
{
    $stockItemCreation = $this->InventoryModel->get_stock_item_data_table();

    
    echo json_encode(['data' => $stockItemCreation]);
}
  
   public function get_stock_item_master_bill_of_material_data_table()
{
    $get_stock_item_master_bill_of_material = $this->InventoryModel->get_stock_item_master_bill_of_material();

    
    echo json_encode(['data' => $get_stock_item_master_bill_of_material]);
}

    function saveStockItem()
{
        
		
		$data 					= array();  
        
		$now 					= date("Y-m-d H:i:s");

        $company_id = $this->session->userdata('company_id');
		
			
// 		$stock_item_name  			            = $this->input->post('stock_item_name');
// 		$stock_item_alternate_name  			= $this->input->post('stock_item_alternate_name');
// 		$stock_item_part_number 				= $this->input->post('stock_item_part_number');
// 		$stock_item_alternate_part_number 		= $this->input->post('stock_item_alternate_part_number');
// 		$stock_item_description 		        = $this->input->post('stock_item_description');
// 		$stock_item_notes			            = $this->input->post('stock_item_notes');
// 		$stock_item_group_id 				    = $this->input->post('stock_item_group_id');
// 		$stock_item_category_id 				= $this->input->post('stock_item_category_id');
// 		$stock_item_unit_id			            = $this->input->post('stock_item_unit_id');

//         $stock_item_alternate_unit_id 			= $this->input->post('stock_item_alternate_unit_id');
// 		$maintain_in_batches 			        = $this->input->post('maintain_in_batches');
// 		$set_date_of_manufacturing		     	= $this->input->post('set_date_of_manufacturing');
// 		$set_expiry_date 				        = $this->input->post('set_expiry_date');
// 		$costing_method_id 				        = $this->input->post('costing_method_id');
// 		$market_valuation_method_id		     	= $this->input->post('market_valuation_method_id');
		
		$data					= array(
											'stock_item_name'  		                =>   $this->input->post('stock_item_name'),  	                                                            
                                            'stock_item_alternate_name'   		    =>   $this->input->post('stock_item_alternate_name'),                                  
											'stock_item_part_number'  	  		    =>   $this->input->post('stock_item_part_number'), 	
                                            'stock_item_alternate_part_number'  	=>   $this->input->post('stock_item_alternate_part_number'),                                        
											'stock_item_description'  	  		    =>   $this->input->post('stock_item_description'),                                            
											'stock_item_notes'	                    =>   $this->input->post('stock_item_notes'),	                                                            
											'stock_item_group_id'		            =>   $this->input->post('stock_item_group_id'),                                  
											'stock_item_category_id'	            =>   $this->input->post('stock_item_category_id'),                              
											'stock_item_unit_id'  	  	            =>   $this->input->post('stock_item_unit_id'),		                          

											'stock_item_alternate_unit_id'      	=>   $this->input->post('stock_item_alternate_unit_id'),                                
                                            'maintain_in_batches'	                =>   $this->input->post('maintain_in_batches'),                            
                                            'set_date_of_manufacturing'		        =>   $this->input->post('set_date_of_manufacturing'),                      
											'set_expiry_date'	                    =>   $this->input->post('set_expiry_date'),                    
											'costing_method_id'  	  	            =>   $this->input->post('costing_method_id'), 		                   
                                            'market_valuation_method_id'  	    	=>   $this->input->post('market_valuation_method_id'),
                                            'created_on'	                        =>   $now,
                                            'company_id'                            =>   $company_id
										);

                                        
										
    $flag_id=$_POST['flag_id'];
    if ($flag_id === "0") {
       
        $insertedRowId = $this->InventoryModel->saveStockItem($data);
       
        // $stock_item_name  			            = $this->input->post('stock_item_name');

            if ($insertedRowId) {
                $response = array(
                    'success' => true,
                    'message' => 'Company inventory stock category saved successfully.',
                    'insertedRowId' => $insertedRowId,
                    'itemName'      => $this->input->post('stock_item_name')  

                );

            }
            else {
                $response = array(
                    'success' => false,
                    'message' => 'Error in saving company inventory stock category.'
                );
        }
    }
    elseif ($flag_id === "1") {
        
        $rowID = $this->input->post('rowID'); 
        $res = $this->InventoryModel->updateStockItem($rowID, $data);


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

    public function delete_stock_item()
    {
        $id  = $this->input->post('id');
        $res = $this->InventoryModel->delete_stock_item($id);

        $response = ['success' => true, 'message' => 'Item deleted successfully'];
        echo json_encode($response);
    }
    
    
    
         function save_stock_item_behaviour_setting()
    {
            
             // collecting the posted data
            
            $data 					= array();  
            $now 					= date("Y-m-d H:i:s");
            
                
            // $ignore_difference_in_physical_stock  			            = $this->input->post('ignore_difference_in_physical_stock');
            // $ignore_neagative_stock  			                        = $this->input->post('ignore_neagative_stock');
            // $treat_all_sales_as_new_manufacture 				        = $this->input->post('treat_all_sales_as_new_manufacture');
            // $treat_all_purchases_as_consumed 		                    = $this->input->post('treat_all_purchases_as_consumed');
            // $treat_all_rejections_inward_as_scrap 		                = $this->input->post('treat_all_rejections_inward_as_scrap');
            // $use_expired_batches_during_voucher_entry			        = $this->input->post('use_expired_batches_during_voucher_entry');
            
            $data					= array(
                                                'ignore_difference_in_physical_stock'  		                =>   $this->input->post('ignore_difference_in_physical_stock'),  	                                                            
                                                'ignore_neagative_stock'   		                            =>   $this->input->post('ignore_neagative_stock'),                                  
                                                'treat_all_sales_as_new_manufacture'  	  		            =>   $this->input->post('treat_all_sales_as_new_manufacture'), 	
                                                'treat_all_purchases_as_consumed'                       	=>   $this->input->post('treat_all_purchases_as_consumed'),                                        
                                                'treat_all_rejections_inward_as_scrap'  	  		        =>   $this->input->post('treat_all_rejections_inward_as_scrap'),                                            
                                                'use_expired_batches_during_voucher_entry'	                =>   $this->input->post('use_expired_batches_during_voucher_entry'),	                                                            
                                                           
                                            );
                                            
            
            $rowID = $this->input->post('rowID'); 
         

            $res = $this->InventoryModel->update_stock_item_behaviour_setting($rowID, $data);
           
        if($res)
        {
        $response = array(
            'success' => true,
            'message' => 'Company behaviour setting updated successfully.'
        );
        }
        else
        {
            $response = array(
            'success' => false,
            'message' => 'No Change is made through Company behaviour setting updation .'
            );
        }
       
        echo json_encode($response);
    
    }

    function save_gst_rate_details()
    {
            
             // collecting the posted data
            
            $data 					= array();  
            $now 					= date("Y-m-d H:i:s");
            
            
            
            $data					= array(
                                                'gst_applicability_id'  			             => $this->input->post('gst_applicable'),
                                                'hsn_sac_details_id'  			                => $this->input->post('hsn_sac_details_id'),
                                                'hsn_gst_classification_id' 				    => $this->input->post('hsn_gst_classification_id'),
                                                'hsn_sac_number' 		                        => $this->input->post('hsn_sac_number'),
                                                'hsn_sac_description'	                        => $this->input->post('hsn_sac_description'),
                                                'gst_rate_details_id'			                => $this->input->post('gst_rate_details_id'),
                                                'gst_gst_classification_id '				    => $this->input->post('gst_gst_classification_id'),
                                                'taxability_type_id'                            => $this->input->post('taxability_type_id'),
                                                'igst_rate '		                            => $this->input->post('igst_rate'),
                                                'cgst_rate '		                            => $this->input->post('cgst_rate'),
                                                'sgst_utgst_rate'			                    => $this->input->post('sgst_utgst_rate'),
                                                'cess_valuation_type_id'				        => $this->input->post('cess_valuation_type_id'),
                                                'cess_rate '		                            => $this->input->post('cess_rate'),
                                                'applicable_for_reverse_charge' 		        => $this->input->post('applicable_for_reverse_charge'),
                                                'eligible_for_input_tax_credit'			        => $this->input->post('eligible_for_input_tax_credit'),
                                                'type_of_supply_id'			                    => $this->input->post('type_of_supply')      
                                            );
                                            
        
      

                        $rowID = $this->input->post('rowID'); 


                        $res = $this->InventoryModel->update_gst_rate_details($rowID, $data);
                        
                    if($res)
                    {
                        $response = array(
                            'success' => true,
                            'message' => 'Company inventory stock category updated successfully.'
                        );
                    }
                    else
                    {
                        $response = array(
                        'success' => false,
                        'message' => 'Error in Company inventory stock category supdation.'
                        );
                    }
                    
                    echo json_encode($response);
    
    }


    function save_stock_item_master_set_vat_details()
    {
            
            
            $data 					= array();  
            $now 					= date("Y-m-d H:i:s");
    
            $company_id = $this->session->userdata('company_id');
            $rowID = $this->input->post('rowID'); 
                
            // $type_of_goods  			      = $this->input->post('type_of_goods');
            // $nature_of_goods  			      = $this->input->post('nature_of_goods');
            // $commodity_name 				  = $this->input->post('commodity_name');
            // $commodity_code 		          = $this->input->post('commodity_code');
            // $tax_rate 		                  = $this->input->post('tax_rate');
            // $cess_rate_vat			          = $this->input->post('cess_rate_vat');
            // $tax_type 				          = $this->input->post('tax_type');
            // $schedule 				          = $this->input->post('schedule');
            // $schedule_serial_no			      = $this->input->post('schedule_serial_no');
    
            
            $data					= array(
                                                'type_of_goods_id'          =>    $this->input->post('type_of_goods'),  	                                                            
                                                'nature_of_goods_id'        =>   $this->input->post('nature_of_goods'),  
                                                'item_master_id'            =>      $rowID,                          
                                                'commodity_name'  	  	    =>   $this->input->post('commodity_name'), 	
                                                'commodity_code'  	        =>   $this->input->post('commodity_code'),                                        
                                                'vat_rate'  	  		    =>   $this->input->post('tax_rate'),                                            
                                                'cess_rate'	                =>   $this->input->post('cess_rate_vat'),	                                                            
                                                'taxability_type_id'		=>   $this->input->post('tax_type'),                                  
                                                'vat_schedule_id'	        =>   $this->input->post('schedule'),                              
                                                'schedule_serial_number'    =>   $this->input->post('schedule_serial_no'),	
                                                'created_on'	            =>   $now,
                                                'company_id'                =>   $company_id,
                                            );
                                            
        $flag_id=$_POST['flag_id'];
        if ($flag_id === "0") {
           
            $insertedRowId = $this->InventoryModel->save_stock_item_master_set_vat_details($data);
     
    
                if ($insertedRowId) {
                    $response = array(
                        'success' => true,
                        'message' => 'Company inventory stock category saved successfully.',
                        'insertedRowId' => $insertedRowId, 
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in saving company inventory stock category.'
                    );
            }
        }
        elseif ($flag_id === "1") {
            
            $rowID = $this->input->post('rowID'); 
            $res = $this->InventoryModel->update_stock_item_master_set_vat_details($rowID, $data);
    
    
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
        
    function save_stock_item_master_bill_of_material()
    {
        $data = array();
        $data1 = array(); 
        $now = date("Y-m-d H:i:s");
    
        $company_id = $this->session->userdata('company_id');
        $flag_id = $_POST['flag_id'];
        $rowID =  $_POST['rowID'];
       
        
        $bom_name = $_POST['bom_name'];
        $manufacturing_quantity = $_POST['manufacturing_quantity'];
        $manufacturing_unit_id = $_POST['manufacturing_unit_id'];
        $component_type_specified = $_POST['component_type_specified'];


      

        $data1 =array(
            'item_master_id'  	             =>   $rowID, 
            'bom_name'                       =>   $bom_name,  	                                                            
            'manufacturing_quantity'         =>   $manufacturing_quantity,  
            'manufacturing_unit_id'          =>   $manufacturing_unit_id,                          
            'component_type_specified'  	 =>   $component_type_specified, 	
            'created_on'	                 =>   $now,
            'company_id'                     =>   $company_id
        );


        $flag_id=$_POST['flag_id'];
        if ($flag_id === "0") {     // for normal save
           
            $insertedRowId = $this->InventoryModel->save_stock_item_master_bill_of_material($data1);
     
    
                if ($insertedRowId) {
                    $response = array(
                        'success' => true,
                        'message' => 'Company inventory stock category saved successfully.',
                        'insertedRowId' => $insertedRowId, 
                    );
    
                }
                else {
                    $response = array(
                        'success' => false,
                        'message' => 'Error in saving company inventory stock category.'
                    );



            }
        }
        elseif ($flag_id === "1") {
            
            $rowID =  $_POST['rowID'];
            $res = $this->InventoryModel->update_stock_item_master_bill_of_material($rowID, $data1);
    
            
    
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

        $godown_id_bom = $_POST['godown_id_bom'];
        $item_master_id_bom = $_POST['item_master_id_bom'];
        $component_quantity = $_POST['component_quantity'];
        $component_type_id = $_POST['component_type_id'];
        $component_unit_id = $_POST['component_unit_id'];
        $rate_percentage = $_POST['rate_percentage'];

        

        $dynamicrowID = $_POST['bill_row_id'];

    
   
     
        foreach ($godown_id_bom as $key => $value)   // for dynamic row save 
        {
                $currentDynamicRowID = $dynamicrowID[$key];
                $data = array(
                    'item_master_id'        =>  $rowID,
                    'godown_id'             => $value,
                    'component_type_id'     => $component_type_id[$key],
                    'component_quantity'    => $component_quantity[$key],
                    'component_unit_id'     => $component_unit_id[$key],
                    'rate_percentage'       => $rate_percentage[$key],
                    'bom_master_id'         => $insertedRowId
                );
                
    
                if ($flag_id === "0" || $currentDynamicRowID === "0") {
                    $insertedRowIdDetails = $this->InventoryModel->save_stock_item_master_bill_of_material_details($data);
        
                    if ($insertedRowId) {
                        $response = array(
                            'success' => true,
                            'message' => 'Company inventory stock category saved successfully.',
                            'insertedRowId' => $insertedRowIdDetails, 
                        );
                    } else {
                        $response = array(
                            'success' => false,
                            'message' => 'Error in saving company inventory stock category.'
                        );
                    }
                }
                elseif ($flag_id === "1") {

                        $res = $this->InventoryModel->update_stock_item_master_bill_of_material_details($currentDynamicRowID, $data);
                
                        if ($res) {
                            
                            $response = array(
                                'success' => true,
                                'message' => 'Updated Successfully.',
                                'rowID'   => $rowID
                            );
                            
                        } else {
                            $response = array(
                                'success' => true,
                                'message' => 'Updated Successfully.',
                                'rowID'   => $rowID
                            );

                        }
                    }
             
        }
     
        echo json_encode($response);

        
    }   
    
    function save_stock_item_master_set_opening_balance()
    {
        $data = array();
        $now = date("Y-m-d H:i:s");
    
        $company_id = $this->session->userdata('company_id');

        $flag_id = $_POST['flag_id'];
        $rowID =  $_POST['rowID'];
       

    
        $godown_ids = $_POST['godown_id'];
        $batch_number = $_POST['batch_number'];
        $expiry_dates = $_POST['expiry_date'];
        $manufacture_date = $_POST['manufacture_date'];
        $quantities = $_POST['quantity'];
        $rates = $_POST['rate'];
        $dynamicrowID = $_POST['opening_row_id'];



        
        
    
        foreach ($godown_ids as $key => $value) 
        {
                $currentDynamicRowID = $dynamicrowID[$key];
                $data = array(
                    'item_master_id'        =>  $rowID,
                    'godown_id'             => $value,
                    'batch_number'          => $batch_number[$key],
                    'expiry_date'           => $expiry_dates[$key],
                    'manufacture_date'      => $manufacture_date[$key],
                    'quantity'              => $quantities[$key],
                    'rate'                  => $rates[$key],
                    'created_on'            => $now,
                    'company_id'            => $company_id
                );
                
    
                if ($flag_id === "0" || $currentDynamicRowID === "0") {
                    $insertedRowId = $this->InventoryModel->save_stock_item_master_set_opening_balance($data);
        
                    if ($insertedRowId) {
                        $response = array(
                            'success' => true,
                            'message' => 'Company inventory stock category saved successfully.',
                            'insertedRowId' => $insertedRowId, 
                        );
                    } else {
                        $response = array(
                            'success' => false,
                            'message' => 'Error in saving company inventory stock category.'
                        );
                    }
                }
                elseif ($flag_id === "1") {

                        $res = $this->InventoryModel->update_stock_item_master_set_opening_balance($currentDynamicRowID, $data,$rowID);
                
                        if ($res) {
                            
                            $response = array(
                                'success' => true,
                                'message' => 'Updated Successfully.',
                                'rowID'   => $rowID
                            );
                            
                        } else {
                            $response = array(
                                'success' => true,
                                'message' => 'Updated Successfully.',
                                'rowID'   => $rowID
                            );

                        }
                    }
             
        }

        echo json_encode($response);
    }

           
    public function get_edit_stock_list()
		{
            $id = $this->input->post('id');

			$result = $this->InventoryModel->get_stock_item_by_id($id);
            // $os =  $this->InventoryModel->get_os_by_id($id);
            $data["acc_stock_opening_balance"] = $this->InventoryModel->get_acc_stock_opening_balance($id);
            $data["acc_stock_bill_of_material_details"] = $this->InventoryModel->get_acc_stock_bill_of_material_details($id);
            $data["acc_stock_bill_of_material"] = $this->InventoryModel->get_acc_stock_bill_of_material($id);

           

           
			if ($result) {
                        $response = [
                            'success' => true,
                            'data' => $result,
                            'data2' => $data["acc_stock_opening_balance"],
                            'data3' => $data["acc_stock_bill_of_material_details"],
                            'data4' => $data["acc_stock_bill_of_material"]
                            
                        ];
                    } else {
                        $response = [
                            'success' => false,
                            'message' => 'Stock list item not found'
                        ];
                    }
                echo json_encode($response);

                // echo json_encode($data["acc_stock_bill_of_material_details"]);
                // echo json_encode($data["acc_stock_bill_of_material"]);
                
                


        }
        
    public function  get_stock_item_master_bill_of_material_data_table2()
    {
        // $id = $this->input->post('id');
      
        $result = $this->InventoryModel->get_stock_item_master_bill_of_material_data_table2();
        //var_dump($result);
       
        if ($result) {
                    $response = [
                        'success' => true,
                        'data' => $result
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Stock list item not found'
                    ];
                }
                  echo json_encode($response);
    }
    public function  get_godown_name()
    {
        // $id = $this->input->post('id');
      
        $result = $this->InventoryModel->get_godown_name();
        //var_dump($result);
       
        if ($result) {
                    $response = [
                        'success' => true,
                        'data' => $result
                    ];
                } else {
                    $response = [
                        'success' => false,
                        'message' => 'Stock list item not found'
                    ];
                }
                  echo json_encode($response);
    }
    
    
    public function delete_supplier_by_id() {
    $id = $this->input->post('id');
    $result = $this->InventoryModel->delete_supplier_by_id($id);

    if ($result) {
        $response = ['success' => true, 'message' => 'Item marked as deleted successfully'];
    } else {
        $response = ['success' => false, 'message' => 'Failed to mark item as deleted'];
    }

    echo json_encode($response);
}
        
 //stock unit creation start from here 
 public function stock_unit_creation(){
        $data = array();
        $data["unit_type"]  = $this->InventoryModel->get_unit_type();
        $data["unit_name"]  = $this->InventoryModel->get_unit_name();
        $data["unit_quantity_code"]  = $this->InventoryModel->get_unit_quantity_code();
        $this->load->view('brq-accounts/inventory/stock_unit_creation',$data);
    }
 //stock unit creation end from here 

//save unit start from here
public function save_inventory_unit()
    {
        
        $company_id = $this->session->userdata('company_id');
        
        $flag_id=(int)$this->input->post('flag_id');
     
        // $hidden_id=$_POST['hidden_id'];
        $data = array(
            'company_id'                    => $company_id,
            'stock_unit_type_id'           => (int)$this->input->post('stock_unit_type_id'),
            'stock_unit_name' => $this->input->post('stock_unit_type_name'),
            'acc_stock_unit_quantity_code_id'    => (int)$this->input->post('stock_unit_gst_code_id'),
                
        );
        
       
        if ($data['stock_unit_type_id'] == 1) {// simple
            // Set is_primary to "yes"
            $data['conversion_rate'] = '1';//default  value is one

           
        } 
        else
        {
            $data['conversion_rate'] = (int)$this->input->post('conversion_rate');
          
        }
        
        // $flag_id = $this->input->post('flag_id');
       
       
        if ($flag_id == "0") {
        
            $res = $this->InventoryModel->insert_inventory_unit($data);
            if($res)
            {
                

                $insert_id=$this->db->insert_id();
                $res3=$this->InventoryModel->get_unit_type_id($insert_id);
                $stock_unit_type_id = $res3[0]->stock_unit_type_id; 
                if($stock_unit_type_id=="2")
                {
                    
                    $data['parent_unit_id'] = (int)$this->input->post('parent_unit_id'); 
                }
                else
                {
                    $data['parent_unit_id'] = $insert_id; 
                }
            }
            $res2 = $this->InventoryModel->update_stock_unit($insert_id, $data);
            

        }

        elseif ($flag_id == "1") {// in edit 
            $row_id = $this->input->post('row_id'); 
           
                if ($data['stock_unit_type_id'] == 1)
                {
                    $data['parent_unit_id'] =  $row_id;
                }
                else
                {
                    $data['parent_unit_id'] = $this->input->post('parent_unit_id');
                }
           
            $res = $this->InventoryModel->update_inventory_stock_units($row_id, $data);

        }

      
    
        // $res = $this->InventoryModel->insert_inventory_stock_category($data);
        
        
        if($res)
        {
        $response = array(
            'success' => true,
            'message' => 'Company inventory stock category saved successfully.'
        );
        }
        else
        {
            $response = array(
            'success' => false,
            'message' => 'Error in Company inventory stock category supdation.'
            );
        }
    
        echo json_encode($response);
    }
//save units end here

// get stock unit id start from here 

    public function get_stock_unit_by_id()
{
    $id = $this->input->post('id');
    $result = $this->InventoryModel->get_Stock_unit_by_id($id);

    if ($result) {
        $response = [
            'success' => true,
            'data' => $result
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Stock category not found'
        ];
    }

    echo json_encode($response);
}
//get stock unit id end here 

//get stock unit start here 

    public function get_stock_unit()
    {
    
        $stockCategories = $this->InventoryModel->get_stock_unit();
         
        echo json_encode(['data' => $stockCategories]);
    }
    

        public function get_parent_unit() {
            // Load the InventoryModel
            $company_id = $this->session->userdata('company_id');
            $edited_row_id = $this->input->post('edited_row_id');
         

            $this->load->model('InventoryModel');
    
            // Call the model function to get options
            $options = $this->InventoryModel->get_parent_unit($edited_row_id);
    
            // Send data as JSON response
            header('Content-Type: application/json');
            echo json_encode($options);
        }
//get stock end here 

 //get delete stock ubit by id start here    
public function delete_stock_unit_by_id()
{
    $id  = $this->input->post('id');
     $res = $this->InventoryModel->delete_stock_unit_by_id($id);

    $response = ['success' => true, 'message' => 'Item deleted successfully'];
    echo json_encode($response);
}
//get delete stock ubit by id end here

//check unit name exist or not function start from here    
public function check_unit_name_exist()
{
    $unit_name       = $this->input->post('unit_name');
    $flag               = $this->input->post('flag'); // Get the mode from the AJAX call
    $row_id               = $this->input->post('row_id'); // Get the mode from the AJAX call
    // $company_id = $this->input->post('company_id'); // Get the company_id from the AJAX call

    $response             = $this->InventoryModel->check_unit_name_exist($unit_name, $flag,$row_id);

    echo json_encode($response);
}
//check unit name exist or not function end from here   





 public function tds_nature_payment(){
  if($this->session->userdata('company_id'))
            $data['company_id'] =$this->session->userdata('company_id');
  $this->load->view('brq-accounts/inventory/tds_nature_of_payment',$data);
    }
  
    
// tds nature of payment save 
    public function save_tds_nature_of_payment()
    {
        $company_id = $this->session->userdata('company_id');
        
        $flag_id=(int)$this->input->post('flag_id');
        $data = array(
            'company_id'                          => $company_id,
            'nature_of_payment_name'             => $this->input->post('nature_of_payment_name'),
            'payment_section'                    => $this->input->post('payment_section'),
            'payment_code'                       => $this->input->post('payment_code'),
            'remittance_code'                    => $this->input->post('remittance_code'),
            'is_transporter'                     => $this->input->post('is_transporter'),
            'is_software_loyalty'                => $this->input->post('is_software_loyalty'),
            'relaxation_for_non_residents'       => $this->input->post('relaxation_for_non_residents'),
            'rate_for_individual_with_pan'       => $this->input->post('rate_for_individual_with_pan'),
            'rate_for_individual_without_pan'    => $this->input->post('rate_for_individual_without_pan'), 
            'rate_for_other_deductee_with_pan'   => $this->input->post('rate_for_other_deductee_with_pan'),
            'rate_for_other_deductee_without_pan' => $this->input->post('rate_for_other_deductee_without_pan'),
            'threshold_or_excemption_limit'       => $this->input->post('threshold_or_excemption_limit')
        );
     
       
       
        if ($flag_id == "0") {
        
            $res = $this->InventoryModel->insert_tds_nature_of_payment($data);

        }

        elseif ($flag_id == "1") {
            $row_id = $this->input->post('row_id'); 
            $res = $this->InventoryModel->update_tds_nature_of_payment($row_id, $data);
        }
        if($res)
        {
        $response = array(
            'success' => true,
            'message' => 'Company inventory stock category saved successfully.'
        );
        }
        else
        {
            $response = array(
            'success' => false,
            'message' => 'Error in Company inventory stock category supdation.'
            );
        }
    
        echo json_encode($response);
    }
     // for load data table of tds nature of payment
    public function load_tds_nature_of_payment()
    {
    
        $get_data = $this->InventoryModel->get_load_tds_nature_of_payment();
        echo json_encode(['data' => $get_data]);
    }
    public function get_tds_nature_of_payment_by_id()
    {
        $id = $this->input->post('id');
        $result = $this->InventoryModel->get_tds_nature_of_payment_by_id($id);
    
        if ($result) {
            $response = [
                'success' => true,
                'data' => $result
            ];
        } else {
            $response = [
                'success' => false,
                'message' => 'Stock category not found'
            ];
        }
    
        echo json_encode($response);
    }
   

    public function delete_tds_nature_of_payment()
    {
        $id  = $this->input->post('id');
         $res = $this->InventoryModel->delete_tds_nature_of_payment($id);
    
        $response = ['success' => true, 'message' => 'Item deleted successfully'];
        echo json_encode($response);
    }
       
    public function check_tds_nature_of_payment_exist(){
    $tds_nature_payment_name    = $this->input->post('tds_nature_payment_name');
    $flag               = $this->input->post('flag'); // Get the mode from the AJAX call
    $row_id               = $this->input->post('row_id'); // Get the mode from the AJAX call

    $response             = $this->InventoryModel->check_tds_nature_payment_exist($tds_nature_payment_name, $flag,$row_id);

    echo json_encode($response);

    }

    public function godown_creation(){
        $data = array();
        $data["cost_cenrtre_names"]  = $this->InventoryModel->cost_cenrtre_name();
        $this->load->view('brq-accounts/inventory/godown_creation',$data);

    }

    public function save_godown_creation(){

        $company_id = $this->session->userdata('company_id');
        // $hidden_id=$_POST['hidden_id'];
        // $gid=(int)$this->input->post('parent_godown_id');
        // echo "gis id".$gid;
      
        $data = array(
            'company_id'                    => $company_id,
            'godown_name'                   => $this->input->post('godown_name'),
            'godown_alternate_name'         => $this->input->post('godown_alternate_name'),
            'parent_godown_id'              => (int)$this->input->post('parent_godown_id'),
            'godown_address_line_1'         => $this->input->post('godown_address_line_1'),
            'godown_address_line_2'         => $this->input->post('godown_address_line_2'),
            'godown_address_line_3'         => $this->input->post('godown_address_line_3'),
            'godown_address_line_4'         => $this->input->post('godown_address_line_4'),
            'allow_storage_of_materials'    => $this->input->post('allow_storage_of_materials'),
            'cost_centre_id'                => (int)$this->input->post('cost_centre_id'),
            'used_for_stock_with_third_party'   => $this->input->post('used_for_stock_with_third_party'),
            'used_for_third_party_stock_with_us' => $this->input->post('used_for_third_party_stock_with_us'),
          
            
        );
        // var_dump($data);
    
        if ($data['parent_godown_id'] == 0) {
            // Set is_primary to "yes"
            $data['is_primary'] = 'yes';
        } 
        
        
   
        $flag_id=$_POST['flag_id'];
       
      
        if ($flag_id === "0") {
           
           $res = $this->InventoryModel->insert_godown_creation($data);
        }
        elseif ($flag_id === "1") {
            
            $hidden_id = $this->input->post('hidden_id'); 
            $res = $this->InventoryModel->update_godown_creation($hidden_id, $data);
           
        }
      
        if($res)
        {
        $response = array(
            'success' => true,
            'message' => 'Saved successfully.'
        );
        }
        else
        {
            $response = array(
            'success' => false,
            'message' => 'Error in updation.'
            );
        }
       
        echo json_encode($response);
    
    }

  
public function  get_godown_creation()
{
  
    $godownCreation = $this->InventoryModel->get_godown_creation();
    
    echo json_encode(['data' => $godownCreation]);
}


public function get_godown_names() {
 
    $stockCategories = $this->InventoryModel->get_godown_names();
    echo json_encode($stockCategories);
}


public function delete_godown_by_id()
{
    $id  = $this->input->post('id');
    $result = $this->InventoryModel->delete_godown_by_id($id);

    if ($result) {
        $response = ['success' => true, 'message' => 'Item deleted successfully'];
    } else {
        $response = ['success' => false, 'message' => 'Failed to mark item as deleted'];
    }

    echo json_encode($response);
}


public function get_godown_by_id()
{
    $id = $this->input->post('id');
    $result = $this->InventoryModel->get_godown_by_id($id);

    if ($result) {
        $response = [
            'success' => true,
            'data' => $result
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Not found'
        ];
    }

    echo json_encode($response);
}


public function check_godown_name_exists()
{
    $godown_name = $this->input->post('godown_name');
    $company_id = $this->session->userdata('company_id');
    $flag_id = $this->input->post('flag_id');  
    $hidden_id = $this->input->post('hidden_id');  

    $result = $this->InventoryModel->check_godown_name_exists($godown_name, $company_id, $flag_id, $hidden_id);

    echo json_encode(['exists' => $result]);
}


public function check_godown_alternate_name_exists()
{
    $godown_alternate_name = $this->input->post('godown_alternate_name');
    $company_id = $this->session->userdata('company_id');
    $flag_id = $this->input->post('flag_id');  
    $hidden_id = $this->input->post('hidden_id');  

    $result = $this->InventoryModel->check_godown_alternate_name_exists($godown_alternate_name, $company_id, $flag_id, $hidden_id);

    echo json_encode(['exists' => $result]);
}

public function get_hsn_sac_details()
{
   $gst_classification_id       = $this->input->post('hsn_gst_classification_id');
   $results = $this->InventoryModel->getHsnSacData($gst_classification_id); 
   if(!empty($results))
   {
      echo  json_encode($results) ;
   
   }
}
public function get_gst_rate_details()
{
    $gst_classification_id  = $this->input->post('gst_classification_id');
    
    $result                 = $this->InventoryModel->getHsnSacDetails($gst_classification_id);

    echo json_encode($result);
    
}

}
    
    




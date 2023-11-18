<?php
ini_set('display_errors', 1);
error_reporting(E_ALL); 
//include_once(APPPATH."third_party/PhpWord/Autoloader.php");
ob_start();// this is required to session start error in the server version only;
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

class Accounts extends MY_Controller 
{
	var $headTitle                  ="";
    var $adminController            ="";
	
	var $payrollController          ="";
	var $hrController          		="";
    var $leadController          	="";
    
	var $reportController			="";	
	
	function __construct()
	{
		parent::__construct();
		parent::updateSys_counterWithAllTables(); // Defined in My_Controller
		
		//------ ini settings --->
// 		ini_set('max_execution_time',400);
//         ini_set('memory_limit', '64M'); //Raise to 512 MB
//         ini_set('post_max_size', '64M');
//         ini_set('upload_max_filesize', '64M');
//         ini_set("date.timezone", "Asia/Kolkata");
//         date_default_timezone_set('Asia/Kolkata');
		
		
		// ======== Loading Models ======================
		
		$this->load->model("AdminModel");
		$this->load->model("Common_model");
	
		 $this->load->model('accounts/CompanyModel');
	    $this->load->model('accounts/AccountsModel');
		
		
		//===============End Loading Model===============
		
		$this->load->helper("brq");
	
	}

 /*	
   private function redirect()
    {
         if (!$this->input->is_ajax_request()) 
           exit("Access denied");
    } 	
	
	private function isSessionSet()
	{
	if(!isset($_SESSION['ADMIN_ID']) && !isset($_SESSION['ADMIN_USER_TYPE']) && !isset($_SESSION['ADMIN_LOGIN_ID']))
	   return FALSE;
	else
	    return TRUE;	
	}*/



//fillCombo() function for loading the table values into select box's option
	public function fillCombo()
	{
		$table 		= 	isset($_REQUEST["tbl"]) ? $_REQUEST["tbl"] : "" ;
		$where 		=  	isset($_REQUEST["where"]) ? $_REQUEST["where"] : "";
		$dField1 	= 	isset($_REQUEST["dField1"]) ? $_REQUEST["dField1"] : "";
		$dField2 	= 	isset($_REQUEST["dField2"]) ? $_REQUEST["dField2"] : "";
		$order 		= 	isset($_REQUEST["order"]) ? $_REQUEST["order"] : "";
		$vField	 	= 	isset($_REQUEST["vFiled"]) ? $_REQUEST["vFiled"] : "";
		
		$select 			= isset($_REQUEST["sel"]) ? $_REQUEST["sel"] : "";
		$defaultSelectText 	= isset($_REQUEST["dSelect"]) ? $_REQUEST["dSelect"] : ""; // this is the default select option value.
		
		$db 		= new Database();
		echo $db->fillCombo($table, $dField1, $select, $dField2="", $vField, $where, $order, $defaultSelectText);
		$db = NULL;
               
	}	
	
	
	

function index()
{
    
	  $data = array();
     $_SESSION['user_id'] = 1; 
    // $data['company_details'] =$this->AccountsModel->get_company_details();
        $data['state'] = $this->input->post('state') ?: 'Not Applicable';
        $data["gst_registration_type"]              = $this->CompanyModel->gst_registration_type();
        $data["gst_periodicity_type"]               = $this->CompanyModel->gst_periodicity();
        $data["vat_periodicity_type"]               = $this->CompanyModel->vat_periodicity();
        $data["vat_schedule_type"]                  = $this->CompanyModel->vat_schedule();
        $data["vat_type_of_goods"]                  = $this->CompanyModel->vat_type_of_good();
        $data["vat_taxability_type"]                = $this->CompanyModel->vat_taxabilitytype();
        $data["tds_tcs_collector_deductor_type"]    = $this->CompanyModel->collector_deductor_type_details();
        $data["gst_registration_status_type"]       = $this->CompanyModel->gst_registration_status();
        $data["gst_states"]                         = $this->CompanyModel->get_gst_states();
        $data["gst_tax_calculation_type_id"]        = $this->CompanyModel->gst_composition_tax_calculation();
        $data["company_detail_fetch"]               = $this->get_company_detail();
        $data["financial_year"]                     = $this->company_financial_year_master();
        $data["gst_hsn_sac_type"]                   = $this->CompanyModel->getHsnSacType();
        $data["hsn_sac_action"]                     = $this->CompanyModel->hsn_sac_related_action();
        $data["gst_rate"]                           = $this->CompanyModel->gst_rate();
        $data["gst_classi_nature_of_transaction"]   = $this->CompanyModel->gst_nature_of_transaction();
        $data["gst_taxability_type"]                = $this->CompanyModel-> gst_taxability_type();
        $data["gst_cess_valuation_type"]            = $this->CompanyModel->gst_cess_valuation_type();
        $data["gst_threshold_limit_values"]         = $this->CompanyModel->gst_threshold_limit_values();
        $data["classification_name"]                = $this-> CompanyModel->hsn_gst_classification_name();
        $data["nature_of_goods"]                    = $this->CompanyModel->get_nature_of_goods();
        $data['gst_classifications']                = $this->CompanyModel->getGstClassifications();
       
        $_SESSION['financial_year'] = $this->company_financial_year_master();;
         $_SESSION['gst_classifications'] = $this->CompanyModel->getGstClassifications();
         $_SESSION['nature_of_goods'] =$this->CompanyModel->get_nature_of_goods();
         $_SESSION['classification_name'] =$this-> CompanyModel->hsn_gst_classification_name();
         $_SESSION['gst_threshold_limit_values'] =$this->CompanyModel->gst_threshold_limit_values();
         $_SESSION['gst_cess_valuation_type'] =$this->CompanyModel->gst_cess_valuation_type();
         $_SESSION['gst_taxability_type'] =$this->CompanyModel-> gst_taxability_type();
         $_SESSION['gst_classi_nature_of_transaction'] =$this->CompanyModel->gst_nature_of_transaction();
         $_SESSION['gst_classi_nature_of_transaction'] =$this->CompanyModel->gst_rate();
    if( $this->session->userdata('company_id'))
    {
        // echo "inside if condition";
        // exit;
        $company_id = $this->session->userdata('company_id');

       $data["address_type"]                       = $this->getAddressTypes();
       $data["company_id"]                          = $company_id;
        $data['gst_classifications']                = $this->CompanyModel->getGstClassifications($company_id);
    } else {

        $data["company_id"]= 0;
    
    }

    $this->load->view('brq-accounts/company/index', $data);
		
}


  public function create_new_financial_year()
    {
        $company_id = $this->session->userdata('company_id');
        $last_financial_year = $this->CompanyModel->get_last_financial_year($company_id);
    
        // Calculate the next financial year details
        if ($last_financial_year) {
          
            $latest_financial_year_end_date = date('d-m-Y', strtotime($last_financial_year['financial_year_end_date']));
            $next_financial_year_begin_date = date('d-m-Y', strtotime('+1 day', strtotime($latest_financial_year_end_date)));
            $book_begin_date = $next_financial_year_begin_date;
            $financial_year_end_date = date('d-m-Y', strtotime('-1 day', strtotime('+1 year', strtotime($next_financial_year_begin_date))));
            // $starting_year = date('Y', strtotime($next_financial_year_begin_date));
            // $ending_year = date('Y', strtotime($financial_year_end_date));
            $year_new = date('Y', strtotime($next_financial_year_begin_date)) . '-' . date('Y', strtotime($financial_year_end_date));
            // echo "<script> alert('$year_new'); </script>";
   
        } else {
            // If no financial year record is found for the company set all dates as the current date
            $next_financial_year_begin_date = date('d/m/Y');
            $book_begin_date = date('d/m/Y');
            $financial_year_end_date = date('d/m/Y');
        }
 
        $data = array(
            'last_financial_year' => $last_financial_year,
            'next_financial_year_begin_date' => $next_financial_year_begin_date,
            'book_begin_date' => $book_begin_date,
            'financial_year_end_date' => $financial_year_end_date,
            'financial_year'=> $year_new
        );
    
        $this->load->view("accounts/create_new_financial_year", $data);
    
    }

    public function create_new_financial_year_for_modal(){
        if(!$this->isSessionSet())
		{
			$this->index();
			return;
		}
        $company_id             = $this->session->userdata('company_id');
        $last_financial_year    = $this->CompanyModel->get_last_financial_year($company_id);
       
        // Calculate the next financial year details
        if ($last_financial_year)
        {
              $latest_financial_year_end_date = date('Y-m-d', strtotime($last_financial_year['financial_year_end_date']));
              $next_financial_year_begin_date = date('Y-m-d', strtotime('+1 day', strtotime($latest_financial_year_end_date)));
              $financial_year_end_date        = date('Y-m-d', strtotime('-1 day', strtotime('+1 year', strtotime($next_financial_year_begin_date))));
              $starting_year                  = date('Y', strtotime($next_financial_year_begin_date));
              $ending_year                    = date('Y', strtotime($financial_year_end_date));
              $year_new                       = $starting_year . '-' . $ending_year;
                // echo "<script> alert('$year_new'); </script>";
        } else {
            // If no financial year record is found for the company set all dates as the current date
          
            $next_financial_year_begin_date = date('Y/m/d');
            
            $financial_year_end_date        = date('Y/m/d');
        }
        $data = array(
            'last_financial_year'            => $last_financial_year,
            'next_financial_year_begin_date' => $next_financial_year_begin_date,
            'financial_year_end_date'        => $financial_year_end_date,
            'financial_year'                 => $year_new
        );

            header('Content-Type: application/json');
            echo json_encode($data);
            exit;
    }



public function save_new_financial_year()
{
   
    $company_id = $this->session->userdata('company_id');

    // Prepare the data to be inserted into the database
    $data = array(
        'company_id'                => $company_id,
        'financial_year_begin_date' => date('Y-m-d', strtotime($this->input->post('new_financial_year_begin_date'))), 
        'financial_year_end_date'   => date('Y-m-d', strtotime($this->input->post('new_financial_year_end_date'))), 
        'financial_year'           => $this->input->post('new_financial_year'), 
        'is_current_year'           => 'no', 
    );

    $res    =   $this->CompanyModel->insert_new_financial_year($data);
    if($res)
    {
        $response = array(
            'status' => 'success',
            'message' => 'Financial year created successfully.',
        );
    }
     header('Content-Type: application/json');

   
    echo json_encode($response);
    exit;

}

    
    

    public function company_financial_year_master()
{
    $company_id = $this->session->userdata('company_id');
    $res =  $this->CompanyModel->getFinancialYearsByCompany($company_id);

    if (count($res) > 0) {
        return $res; 
    }
    return array();
}



public function update_current_year()
{
    $company_id = $this->session->userdata('company_id');
    $selected_year_id = $this->input->post('selected_year_id'); 
    $this->CompanyModel->reset_current_year($company_id);
    
    $this->CompanyModel->set_current_year($selected_year_id); // Set the selected financial year to 'yes'
     $response = array('status' => 'success', 'message' => 'Financial year updated successfully.');
    echo json_encode($response);
}


 //////////////////START OF  SAVING THE  COMPANY ////////////////////////////////////   

 public function save_company_data()
{

    // Retrieve the user ID from the session
    $hiddenId=$_POST['hidden_Id'];
   // echo "hiddenId id is:" .  $hiddenId;
//  $hiddenId=$this->input->post('hidden_Id');

     // Retrieve the company data 
   $companyData = array(
       
                'company_name'              => $this->input->post('company_name'),
                'state_id'                  => $this->input->post('state'),
                'country_id'                => $this->input->post('country'),
                'base_currency_id'          => $this->input->post('currency_id'),
                'suffix_symbol_to_amount'   => $this->input->post('suffix_symbol_to_amount'), 
                'show_amount_in_millions'   => $this->input->post('show_amount_in_millions'), 
                'book_begin_date'           => date('Y-m-d', strtotime($this->input->post('books_beginning_date'))),
                'created_by'                => $_SESSION['EMPLOYEE_ID'],
                'created_on'                =>date('Y-m-d H:i:s'),
        );
    $companyAddressData = array(
  
            'mailing_name'      => $this->input->post('company_mailing_name'),
            'address_line_1'    => $this->input->post('company_address_1'),
            'address_line_2'    => $this->input->post('company_address_2'),
            'address_line_3'    => $this->input->post('company_address_3'),
            'address_line_4'    => $this->input->post('company_address_4'),
            'address_line_5'    => $this->input->post('company_address_5'),
            'pin_code'          => $this->input->post('company_pincode'),
            'phone_number'      => $this->input->post('company_telephone'),
            'mobile_number'     => $this->input->post('company_mobile'),
            'fax_number'        => $this->input->post('company_fax'),
            'e_mail'            => $this->input->post('company_email'),
            'web_site'          => $this->input->post('company_website'),
        );
    $financialYearData = array(
     
        'financial_year_begin_date' => date('Y-m-d', strtotime($this->input->post('financial_year_begin_date'))),
        'financial_year_end_date'   => date('Y-m-d', strtotime($this->input->post('financial_year_end_date'))),
        'financial_year'            => $this->input->post('financial_year'),
        'is_current_year'           => 'yes'
    );

   if ($hiddenId == '0') // fr insertion
   {
        // Insert the company data into the acc_company_master table
        $this->db->insert('acc_company_master', $companyData);
        $company_id = $this->db->insert_id();
    
        // Store the company_id in the session
        $_SESSION['company_id'] = $company_id;
    
         $this->CompanyModel->update_company($company_id,array() , $companyAddressData, $financialYearData);
        $response = array(
            'success' => true,
            'message' => 'Company inserted successfully.'
        );
    }
    
    else
     {
        // Update code
        $companyId = $this->session->userdata('company_id');
     
        $this->CompanyModel->update_company($companyId, $companyData, $companyAddressData, $financialYearData);
        $response = array(
            'success' => true,
            'message' => 'Company updated successfully.'
        );
    }

// Send the JSON response
echo json_encode($response);
}

//////////////////END OF SAVING THE  COMPANY ////////////////////////////////////   

//////////////////START OF  COMPANY  FEATURES SAVE////////////////////////////////////   
public function save_company_features_data()
{
    $companyId = $this->session->userdata('company_id');
   
    $data = array(
        'provide_contact_details'                   => $this->input->post('provide_contact_details'),
        'provide_additional_base_currency_details'  => $this->input->post('provide_additional_base_currency_details'),
        'maintain_accounts'                         => $this->input->post('maintain_accounts'),
        'enable_bill_wise_entry'                    => $this->input->post('enable_bill_wise_entry'),
        'enable_cost_centres'                       => $this->input->post('enable_cost_centres'),
        'enable_interest_calculation'               => $this->input->post('enable_interest_calculation'),
        'maintain_inventory'                        => $this->input->post('maintain_inventory'),
        'integrate_accounts_with_inventory'         => $this->input->post('integrate_accounts_with_inventory'),
        'enable_multiple_price_levels'              => $this->input->post('enable_multiple_price_levels'),
        'enable_batches'                            => $this->input->post('enable_batches'),
        'maintain_expiry_date_for_batches'          => $this->input->post('maintain_expiry_date_for_batches'),
        'enable_job_order_processing'               => $this->input->post('enable_job_order_processing'),
        'enable_cost_tracking'                      => $this->input->post('enable_cost_tracking'),
        'enable_job_costing'                        => $this->input->post('enable_job_costing'),
        'use_discount_column_in_invoices'           => $this->input->post('use_discount_column_in_invoices'),
        'use_actual_and_billed_columns_in_invoices' => $this->input->post('use_actual_and_billed_columns_in_invoices'),
        'enable_gst'                                => $this->input->post('enable_gst'),
        'enable_tds'                                => $this->input->post('enable_tds'),
        'enable_tcs'                                => $this->input->post('enable_tcs'),
        'enable_vat'                                => $this->input->post('enable_vat'),
        // 'enable_excise'                             => $this->input->post('enable_excise'),
        'enable_service_tax'                        => $this->input->post('enable_service_tax'),
        'enable_upi_payment_request'                => $this->input->post('enable_upi_payment_request'),
        'enable_multiple_addresses'                 => $this->input->post('enable_multiple_addresses'),
        'mark_modified_vouchers'                    => $this->input->post('mark_modified_vouchers')
    );
    // var_dump($data);
    // die; 
    $res = $this->CompanyModel->update_company_features($companyId , $data);
   
    if($res)
    {
    $response = array(
        'success' => true,
        'message' => 'Company features updated successfully.'
    );
    }
    else
    {
        $response = array(
        'success' => false,
        'message' => 'Error in Company features updation.'
        );
    }
    // Send the JSON response
    echo json_encode($response);

}
////////// fr updating company_features//////
public function get_company_features_details()
{
    $companyId = $this->session->userdata('company_id');
    $companyFeatures = $this->CompanyModel->get_company_features_by_id($companyId);
    $this->output->set_content_type('application/json');
    $this->output->set_output(json_encode($companyFeatures));
}


/////////////////END  OF  COMPANY  FEATURES SAVE////////////////////////////////////   
    public function get_company_details_json()
{
     $company_id = $this->input->post('companyId');
    //  echo "Company Id".$company_id;
  if($company_id)
  {
          $this->session->set_userdata('company_id',  $company_id);
    
  }
    $company_details = $this->CompanyModel->get_company_details();
    echo json_encode($company_details);
}


    public function get_company_detail()
{
   
    $company_details = $this->CompanyModel->get_company_details();
    // var_dump( $company_details);
    
    if (count($company_details) > 0) {
              return $company_details; // Return the array of address types
           }
    return array();
}



public function get_company_info()
{
    $company_id = $this->session->userdata('company_id'); 
    $this->load->model('CompanyModel');
    // Retrieve the company details from the database
    $companyDetails = $this->CompanyModel->get_company_details_by_id($company_id);
    // print_r($companyDetails);
    $this->output->set_content_type('application/json');
    $this->output->set_output(json_encode($companyDetails));
}

/// function to retrieve country option

public function getCountryOption() 
{
     // Retrieve the country options from the model
    $countryOptions = $this->CompanyModel->getCountryOptions();
    $response = array();
    foreach ($countryOptions as $country) {
        $response[$country->id] = $country->country_name;
    }
    // Send the response as JSON
    // header('Content-Type: application/json');
    echo json_encode($response);
}


public function getStateOption() 
{
    $countryId = $this->input->get('country_id');
    $stateOptions = $this->CompanyModel->getStateOptions($countryId);
    $response = array();
    foreach ($stateOptions as $state) {
      $response[$state->id] = $state->state_name;
    }
    
    // Send the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
  }

  public function getCurrencyOption()
{
   
    $countryId = $this->input->get('country_id');
   
    $currencyOptions = $this->CompanyModel->getCurrencyOptions($countryId);
    // print_r($currencyOptions);
    $response = array(
        'currency_symbol' => $currencyOptions->currency_symbol,
        'currency_formal_name' => $currencyOptions->currency_formal_name,
        // 'suffix_symbol_to_amount' => $currencyOptions->suffix_symbol_to_amount,
        // 'show_amount_in_millions' => $currencyOptions->show_amount_in_millions,
        'number_of_decimal_places' => $currencyOptions->number_of_decimal_places,
         'currency_id' => $currencyOptions->id
    );
    header('Content-Type: application/json');
    echo json_encode($response);
}


public function save_tds_details() {
     //Set/alter details of person responsible
         $set_alter_person_tds  =  $this->input->post('tds_person_responsible_activate');
         $company_id            =  $this->session->userdata('company_id');
    $data1=array(
      
        'tan_registration_number'               => $this->input->post('tds_tan_registration_number'),
        'tan_account_number'                    => $this->input->post('tds_tan_account_number'),
        'deductor_collector_type_id'            => $this->input->post('tds_deductor_collector_type_id'),
        'deductor_collector_branch_division'    => $this->input->post('tds_deductor_collector_branch_division'),
        'std_code'                              => $this->input->post('tds_std_code'),
        'phone_number'                          => $this->input->post('tds_phone_number'),
        'email'                                 => $this->input->post('tds_email'),
        'ignore_it_excemption_limit_for_tds'    => $this->input->post('ignore_it_Exception_limit_for_tds_deduction'),
        'activate_tds_for_stock_items'          => $this->input->post('activate_tds_for_stock_items'),
        // 'tan_registration_number' =>  $this->input->post('tds_surcharge_cess_details'),
    );
        $this->CompanyModel->updateTdsDeductorDetails($data1, $company_id);
        $response = array(
            'success' => true,
            'message' => 'Tdsdetails inserted successfully.'
        );

        if ($set_alter_person_tds === 'yes') {
          
            $data2 = array(
                'person_responsible_name'   =>  $this->input->post('tds_person_responsible_name'),
                'son_daughter_of'           =>  $this->input->post('tds_son_daughter_of'),
                'designation'               =>  $this->input->post('tds_designation'),
                'pan'                       =>  $this->input->post('tds_pan'),
                'flat_house_number'         =>  $this->input->post('tds_flat_house_number'),
                'premises_building_name'    =>  $this->input->post('tds_premises_building_name'),
                'road_street_lane_name'     =>  $this->input->post('tds_road_street_lane_name'),
                'area_location_name'        =>  $this->input->post('tds_area_location_name'),
                'town_city_district_name'   =>  $this->input->post('tds_town_city_district_name'),
                'state_id'                  =>  $this->input->post('tds_state_id'),
                'pincode'                   =>  $this->input->post('tds_pincode'),
                'mobile'                    =>  $this->input->post('tds_mobile'),
                'std_code'                  =>  $this->input->post('person_std_code'),
                'telephone'                 =>  $this->input->post('tds_telephone'),
                'email_id'                  =>  $this->input->post('tds_email_id'),
                'std_code_alternate'        =>  $this->input->post('tds_std_code_alternate'),
                'telephone_alternate'       =>  $this->input->post('tds_telephone_alternate'),
                'email_id_alternate'        =>  $this->input->post('tds_email_id_alternate'),
            );

            $this->CompanyModel->updateTdsPersonResponsibleDetails($data2, $company_id);
            $response = array(
                'success' => true,
                'message' => 'Tds inserted successfully.'
            );
           
        }
      
   // Send the JSON response back to the client
header('Content-Type: application/json');
echo json_encode($response);

}

public function get_tds_details() {
      $company_id = $this->session->userdata('company_id');

    // $company_id = $this->input->post('company_id');
    if (empty($company_id)) {
        http_response_code(400);
        echo json_encode(array('error' => 'companyId is missing from session data'));
        return;
    }
    // $tds_value = $this->input->post('tds_value');
    // if (!in_array($tds_value, array('yes', 'no'))) {
       
    //     http_response_code(400);
    //     echo json_encode(array('error' => 'invalid tdsValue'));
    //     return;
    // }
    $results = $this->CompanyModel->getTdsDetails($company_id);
    // echo $query;
    // exit;
    if (!empty($results)) {
        $row = $results[0];
             $tdsDetails = array(
                'tan_registration_number'                   => $row['tan_registration_number'],
                'tan_account_number'                        => $row['tan_account_number'],
                'tan_registration_number'                   => $row['tan_registration_number'],
                'tan_account_number'                        => $row['tan_account_number'],
                'deductor_collector_type_id'                => $row['deductor_collector_type_id'],
                'deductor_collector_branch_division'        => $row['deductor_collector_branch_division'],
                'std_code'                                  => $row['std_code'],
                'phone_number'                              => $row['phone_number'],
                'email'                                     => $row['email'],
                'ignore_it_excemption_limit_for_tds'        =>$row['ignore_it_excemption_limit_for_tds'],
                'ignore_it_excemption_limit_for_tcs'        => $row['ignore_it_excemption_limit_for_tcs'],
                'activate_tds_for_stock_items'              => $row['activate_tds_for_stock_items'],
                'person_responsible_name'                   => $row['person_responsible_name'],
                'son_daughter_of'                           => $row['son_daughter_of'],
                'designation'                               =>$row['designation'],
                'pan'                                       => $row['pan'],
                'flat_house_number'                         => $row['flat_house_number'],
                'premises_building_name'                    => $row['premises_building_name'],
                'road_street_lane_name'                     => $row['road_street_lane_name'],
                'area_location_name'                        => $row['area_location_name'],
                'town_city_district_name'                   => $row['town_city_district_name'],
                 'state_id'                                 => $row['state_id'],
                'pincode'                                   => $row['pincode'],
                'mobile'                                    => $row['mobile'],
                'person_std_code'                           => $row['person_std_code'],
                'telephone'                                 => $row['telephone'],
                'email_id'                                  => $row['email_id'],
                'std_code_alternate'                        => $row['std_code_alternate'],
                'telephone_alternate'                       => $row['telephone_alternate'],
                'email_id_alternate'                        => $row['email_id_alternate'],
                    );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($tdsDetails));
    } else {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array()));
    }

   
}


// ////////////////////////////gst//////////////////////////////////////
public function fetch_registration_name() {
    $state_id = $this->input->post('state_id');
    $registrationName = $this->CompanyModel->getRegistrationName($state_id);
    // echo $registrationName;
    $response = array(
        'registration_name' => $registrationName
    );
    echo json_encode($response);
}

public function getAddressTypes() {
    $company_id = $this->session->userdata('company_id');
    $res = $this->CompanyModel->getAddressType($company_id);
  
   
 
    if (count($res) > 0) {
        return $res; // Return the array of address types
    }
    return array();
   
}
public function get_address_types() {
    $company_id = $this->session->userdata('company_id');
   
    $res = $this->CompanyModel->getAddressType($company_id);
   
    $response = array();
    foreach ($res as $address) {
        
        $response[$address[id]] = $address[address_type];
    }
   
    // Send the response as JSON
    // header('Content-Type: application/json');
    echo json_encode($response);
   
 
    
   
}

// for saving the gst
// for saving the gst
public function save_gst_details() {
        $company_id = $this->session->userdata('company_id');
        $gst_row_id = $this->input->post('gst_row_id');
       
        // ($setAlterPersonTDS == 'yes') ? 'Y' : 'N',
    $data = array(
        // GST Registration Details
       
        // 'id' => $gst_row_id,
        'gst_registration_status_id'                                 => $this->input->post('gst_registration_status_id'),
        'state_id'                                                   => $this->input->post('gst_state_id'),
        'address_type_id'                                            => $this->input->post('gst_address_type_id'),
        'gst_registration_type_id'                                   => $this->input->post('gst_registration_type_id'),
        'is_assessee_of_other_territory'                             => $this->input->post('gst_assessee_of_other_territory'),
        'gstin_uin'                                                  => $this->input->post('gstin_uin'),
        'gstr1_periodicity_id'                                       => $this->input->post('gstr1_periodicity_id'),
        'place_of_supply_id'                                         => $this->input->post('gst_place_of_supply_id'),
        'is_e_invoicing_applicable'                                  => $this->input->post('gst_is_e_invoicing_applicable'),
        'e_invoice_bill_from_place'                                  => $this->input->post('gst_e_invoice_bill_from_place'),
        'e_invoicing_applicable_from_date'                           => $this->input->post('gst_e_invoicing_applicable_from_date'),
        'tax_rate_for_taxable_turnover'                              => $this->input->post('gst_tax_rate_for_taxable_turnover'),
        'composition_tax_calculation_type_id'                        => $this->input->post('gst_composition_tax_calculation_type_id'),
        'revised_gst_effective_date'                                 => $this->input->post('revised_gst_effective_date'),
        'is_e_way_bill_applicable'                                   => $this->input->post('gst_is_e_way_bill_applicable'),
       'e_way_bill_applicable_from_date'                             => $this->input->post('gst_e_way_bill_applicable_from_date'),
        ' is_e_way_bill_applicable_for_intrastate'                   => $this->input->post('gst_is_e_way_bill_applicable_for_intrastate'),
        'goods_dispatched_from_id'                                   => $this->input->post('gst_goods_dispatched_from_id') ,
        'use_voucher_number_and_date_as_in_supplier_invoice'         => $this->input->post('gst_use_voucher_number_and_date_as_in_supplier_invoice'),
        'ignore_zero_prefixed_in_supplier_document_number'           => $this->input->post('gst_ignore_zero_prefixed_in_supplier_document_number'),
        'ignore_special_characters_used_in_supplier_document_number' => $this->input->post('gst_ignore_special_characters_used_in_supplier_document_number'),
        'gst_registration_name'                                      => $this->input->post('gst_registration_name'),
    );
    if ($gst_row_id == 0) {
               $result = $this->CompanyModel->insertGstDetails($data,$company_id);
    } else {
              $result = $this->CompanyModel->updateGstDetails($gst_row_id, $data);
    }
 
    // $result = $this->CompanyModel->updateGstDetails($gst_row_id, $data);
    if ($result['status'] === 'success') {
        $response = array('status' => 'success', 'message' => 'GST details saved successfully.');
    } else {
        $response = array('status' => 'error', 'message' => 'Failed to save GST details.');
    }

  
    header('Content-Type: application/json');
    echo json_encode($response);

}
//////////////////////////////////////

public function get_gst_details() {
    $companyId = $this->input->post('company_id');
    if (empty($companyId)) {
        
        http_response_code(400);
        echo json_encode(array('error' => 'companyId is missing from session data'));
        return;
    }

    $gst_value = $this->input->post('gst_value');
    if (!in_array($gst_value, array('yes', 'no'))) {
      
        http_response_code(400);
        echo json_encode(array('error' => 'invalid gstValue'));
        return;
    }
    $query = $this->CompanyModel->getGstDetails($gst_value, $companyId);
    if ($query->num_rows() > 0) {
        $row = $query->row();
        $gstDetails = array(
            'id'=>$row->id,
            'gst_registration_status_id'          => $row->gst_registration_status_id,
            'state_id'                            => $row->state_id,
            'address_type_id'                     => $row->address_type_id,
            'gst_registration_type_id'            => $row->gst_registration_type_id,
            'is_assessee_of_other_territory'      => $row->is_assessee_of_other_territory,
            'gstin_uin'                           => $row->gstin_uin,
            'gstr1_periodicity_id'                => $row->gstr1_periodicity_id,
            'place_of_supply_id'                  => $row->place_of_supply_id,
            'tax_rate_for_taxable_turnover'       => $row->tax_rate_for_taxable_turnover,
            'composition_tax_calculation_type_id' => $row->composition_tax_calculation_type_id,
            'revised_gst_effective_date'          => $row->revised_gst_effective_date,
            'is_e_invoicing_applicable'           => $row->is_e_invoicing_applicable,
            'e_invoicing_applicable_from_date'    => $row->e_invoicing_applicable_from_date,
            'e_invoice_bill_from_place'           => $row->e_invoice_bill_from_place,
            'is_e_way_bill_applicable'            => $row->is_e_way_bill_applicable,
            'e_way_bill_applicable_from_date'     => $row->e_way_bill_applicable_from_date,
            'is_e_way_bill_applicable_for_intrastate'            => $row->is_e_way_bill_applicable_for_intrastate,
            'goods_dispatched_from_id'                           => $row->goods_dispatched_from_id,
            'use_voucher_number_and_date_as_in_supplier_invoice' => $row->use_voucher_number_and_date_as_in_supplier_invoice,
            'ignore_zero_prefixed_in_supplier_document_number'   => $row->ignore_zero_prefixed_in_supplier_document_number,
            'ignore_special_characters_used_in_supplier_document_number' => $row->ignore_special_characters_used_in_supplier_document_number,
            'gst_registration_name'                                      => $row->gst_registration_name,
        );

       
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($gstDetails));
    } else {
       
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array()));
    }
}

public function get_gst_row_count() {
    $company_id = $this->session->userdata('company_id');
    $data = $this->CompanyModel->getGstData($company_id);
    $row_count = count($data);

    $response = array('row_count' => $row_count, 'data' => $data);
    header('Content-Type: application/json');
    echo json_encode($response);
}

public function get_gst_details_by_id(){
    // $company_id= $this->input->post('company_id');
    $company_id = $this->session->userdata('company_id');
    // echo( $companyid);
    if (empty($company_id)) {
        
        http_response_code(400);
        echo json_encode(array('error' => 'companyId is missing from session data'));
        return;
    }
   
   
    $res =  $this->CompanyModel->get_multiple_gst_details_by_id($company_id);
    echo json_encode($res);

}

 public function get_single_gst_details_by_id() {
      
        $gst_id = $this->input->post('gst_id');
      
        $gst_details = $this->CompanyModel->getGstDetailsById($gst_id);
      
        // header('Content-Type: application/json');
        echo json_encode($gst_details);
    }


public function save_vat_details() {
    //Set/alter details of person responsible
        $vat_rate_details   =  $this->input->post('vat_rate_details');
        $company_id         =  $this->session->userdata('company_id');
   $data1=array(
     // 20 fiels in db but only 18 in form 2 extra posted
       'state_id'                       => $this->input->post('vat_state_id'),
       'vat_applicable_from'            =>  $this->input->post('vat_applicable_from'),
       'vat_tin_number'                 => $this->input->post('vat_tin_number'),
       'interstate_sales_tax_number'   =>  $this->input->post('interstate_sales_tax_number'),
       'vat_registration_date'         =>  $this->input->post('vat_registration_date'),
         //cst_registration_date
        
       'e_vat_periodicity_id'                       =>  $this->input->post('e_vat_periodicity_id'),
       'is_under_npv_scheme'                        =>  $this->input->post('is_under_npv_scheme'),
       'enable_vat_calculation_on_quantity'         =>  $this->input->post('enable_vat_calculation_on_quantity'),
       'enable_vat_calculation_on_stock_item_rate'  =>  $this->input->post('enable_vat_calculation_on_stock_item_rate'),
       'define_commodity_and_tax_as_masters'        =>  $this->input->post('define_commodity_and_tax_as_masters'),
       'deactivate_from'                            =>  $this->input->post('deactivate_from'),
       'circle_office'                              =>  $this->input->post('circle_office'),
       'status_of_business'                         =>  $this->input->post('status_of_business'),
       'nature_of_business'                         =>  $this->input->post('nature_of_business'),
 
       'authorised_person'                          =>  $this->input->post('authorised_person'),
       'status_designation'                         =>  $this->input->post('vat_status_designation'),
       'place'                                      =>  $this->input->post('vat_place'),
       'district'                                   =>  $this->input->post('vat_district'),
    );
       $this->CompanyModel->updateVatDetails($data1, $company_id);
       $response = array(
           'success' => true,
           'message' => 'Vatdetails inserted successfully.'
       );

       if ($vat_rate_details === 'yes') {
         
           $data2 = array(
           
               'cst_effective_from'         =>  $this->input->post('cst_effective_date'),
               'cst_rate_against_form_c'    =>  $this->input->post('cst_rate_against_form_c'),
               'vat_effective_to'           =>  $this->input->post('vat_effective_date'),
               'vat_rate'                   =>  $this->input->post('vat_rate'),
               'cess_rate'                  =>  $this->input->post('vat_cess'),
               'vat_tax_type_id'            =>  $this->input->post('vat_tax_type_id'),
               'vat_schedule_id'            =>  $this->input->post('vat_schedule_id'),
               'type_of_goods_id'           =>  $this->input->post('type_of_goods_id'),
               'nature_of_goods_id'         =>  $this->input->post('nature_of_goods_id'),
               'commodity_name'             =>  $this->input->post('commodity_name'),
               'commodity_code'             =>  $this->input->post('commodity_code'),
               'sub_commodity_code'         =>  $this->input->post('sub_commodity_code'),
            
           );

           $this->CompanyModel->updateVatRateDetails($data2, $company_id);
           $response = array(
               'success' => true,
               'message' => 'VAT Rate Details inserted successfully.'
           );
          
       }

 
  // Send the JSON response back to the client
header('Content-Type: application/json');
echo json_encode($response);

}


public function get_vat_details(){
    $company_id = $this->input->post('company_id');
    if (empty($company_id)) {
        http_response_code(400);
        echo json_encode(array('error' => 'companyId is missing from session data'));
        return;
    }
    // $vat_value = $this->input->post('vat_value');
    // if (!in_array($vat_value, array('yes', 'no'))) {
       
    //     http_response_code(400);
    //     echo json_encode(array('error' => 'invalid tdsValue'));
    //     return;
    // }
    $results = $this->CompanyModel->getVatDetails($company_id);
    // echo $query;
    // exit;
    if (!empty($results)) {
        $row = $results[0];
             $vatDetails = array(
                'state_id'              => $row['state_id'],
                'vat_applicable_from'   => $row['vat_applicable_from'],
                'vat_tin_number'        => $row['vat_tin_number'],
                'tan_account_number'    => $row['tan_account_number'],
                'vat_registration_date' => $row['vat_registration_date'],
                'interstate_sales_tax_number'   => $row['interstate_sales_tax_number'],
                'cst_registration_date'         => $row['cst_registration_date'],
                'e_vat_periodicity_id'          => $row['e_vat_periodicity_id'],
                'enable_vat_calculation_on_quantity'        => $row['enable_vat_calculation_on_quantity'],
                'enable_vat_calculation_on_stock_item_rate' =>$row['enable_vat_calculation_on_stock_item_rate'],
                'is_under_npv_scheme'                       => $row['is_under_npv_scheme'],
                'define_commodity_and_tax_as_masters'       => $row['define_commodity_and_tax_as_masters'],
                'deactivate_from'                           => $row['deactivate_from'],
                'circle_office'                             => $row['circle_office'],
                'status_of_business'                        =>$row['status_of_business'],
                'nature_of_business'                        => $row['nature_of_business'],
                'ss_msi_lsi_registration_number'            => $row['ss_msi_lsi_registration_number'],
                'authorised_person'                         => $row['authorised_person'],
                'status_designation'                        => $row['status_designation'],
                'place'                                     => $row['place'],
                'district'                                  => $row['district'],
                ////////
                'cst_rate_against_form_c'                   => $row['cst_rate_against_form_c'],
                'cst_effective_from'                        => $row['cst_effective_from'],
                'cst_effective_to'                          => $row['cst_effective_to'],
                'vat_rate'                      => $row['vat_rate'],
                'cess_rate'                     => $row['cess_rate'],
                'vat_effective_from'            => $row['vat_effective_from'],
                'vat_effective_to'              => $row['vat_effective_to'],
                'vat_tax_type_id'               => $row['vat_tax_type_id'],
                'vat_schedule_id'               => $row['vat_schedule_id'],
                'vat_schedule_serial_number'    => $row['vat_schedule_serial_number'],
                'type_of_goods_id'              => $row['type_of_goods_id'],
                'nature_of_goods_id'            => $row['nature_of_goods_id'],
                'commodity_name'                => $row['commodity_name'],
                'commodity_code'                => $row['commodity_code'],
                'sub_commodity_code'            => $row['sub_commodity_code'],
                    );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($vatDetails));
    } else {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array()));
    }
}




// fetch organization  type
public function fetch_organization_types() {
   

    $organization_types = $this->CompanyModel->get_organization_types();

    if ($organization_types !== null) {
        $response = array(
            'status' => 'success',
            'data' => $organization_types
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Failed to fetch organization types.'
        );
    }

    echo json_encode($response);
}

// saving setvice tax details
public function save_service_tax_details(){
       // Retrieve the posted data
       $service_tax_registration_number = $this->input->post('service_tax_registration_number');
       $organisation_type_id = $this->input->post('organisation_type_id');
       $set_alter_service_tax = $this->input->post('set_alter_service_tax');

       $is_monthly_format_field = $this->input->post('is_monthly_format_field');
       $tax_liability_based_on = $this->input->post('tax_liability_based_on');

       $define_service_as_masters = $this->input->post('define_service_as_masters');
       $is_reverse_charge_applicable = $this->input->post('is_reverse_charge_applicable');
       $service_tax_deactivate_from = $this->input->post('service_tax_deactivate_from');

       // st2 details fetched
       $st2_service_tax_name = $this->input->post('st2_service_tax_name');
       $st2_service_tax = $this->input->post('st2_service_tax');
       $st2_educational_cess = $this->input->post('st2_educational_cess');
       $st2_secondary_educational_cess = $this->input->post('st2_secondary_educational_cess');
       $st2_swatch_bharath_cess = $this->input->post('st2_swatch_bharath_cess');
       $st2_krishy_kalyan_cess = $this->input->post('st2_krishy_kalyan_cess');

       $companyId = $this->session->userdata('companyId');

       $data = array(
           'company_id'              =>$companyId,
           'service_tax_registration_number' => $service_tax_registration_number,
           'organisation_type_id' =>  $organisation_type_id,
           'is_monthly_format'=>$is_monthly_format_field,
           'tax_liability_computation_basis_id'=>$tax_liability_based_on,

           //st2 values
           'service_tax_name'=>$st2_service_tax_name,
            'service_tax'=>$st2_service_tax,
            'educational_cess'=>$st2_educational_cess,
            'secondary_educational_cess'=>$st2_secondary_educational_cess,
            'swatch_bharath_cess'=>$st2_swatch_bharath_cess,
            'krishy_kalyan_cess'=>$st2_krishy_kalyan_cess,
            //

           'set_service_tax' => $set_alter_service_tax,
           'define_service_as_masters' =>$define_service_as_masters,
           'ir_reverse_charge_applicable' =>$is_reverse_charge_applicable,
           'deactivate_from' => $service_tax_deactivate_from
         
       );
    //    print_r($data);
   
     
       $result = $this->CompanyModel->updateServiceTaxDetails($companyId, $data);
       //var_dump($result);
   
       if ($result==1) {
           $response = array('status' => 'success', 'message' => 'TDS details saved successfully.');
       } else {
           $response = array('status' => 'error', 'message' => 'Failed to save TDS details.');
       }
     
     
   header('Content-Type: application/json');
   echo json_encode($response);

}

public function get_service_tax_details(){
    $companyId = $this->input->post('company_id');
    if (empty($companyId)) {
      
        http_response_code(400);
        echo json_encode(array('error' => 'companyId is missing from session data'));
        return;
    }

    $servicetaxValue = $this->input->post('servicetaxValue');
    if (!in_array($servicetaxValue, array('yes', 'no'))) {
     
        http_response_code(400);
        echo json_encode(array('error' => 'invalid servicetaxValue'));
        return;
    }


    $query = $this->CompanyModel->getServiceTaxDetails($servicetaxValue, $companyId);

   
    if ($query->num_rows() > 0) {
      
        $row = $query->row();

      
        $serviceTaxDetails = array(
            
            'service_tax_registration_number' => $row->service_tax_registration_number,
            'organisation_type_id' => $row->organisation_type_id,
            'set_service_tax' => $row->set_service_tax,
            'define_service_as_masters' => $row->define_service_as_masters,
            'ir_reverse_charge_applicable' => $row->ir_reverse_charge_applicable,
            'service_tax_deactivate_from' => $row->deactivate_from,

            'is_monthly_format' => $row->is_monthly_format,
            'tax_liability_computation_basis_id' => $row->tax_liability_computation_basis_id,
            'service_tax_name' => $row->service_tax_name,
            'service_tax' => $row->service_tax,
            'secondary_educational_cess' => $row->secondary_educational_cess,
        
             'educational_cess' => $row->educational_cess,
            'swatch_bharath_cess' => $row->swatch_bharath_cess,
            'krishy_kalyan_cess' => $row->krishy_kalyan_cess,
           

            
        );

       
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($serviceTaxDetails));
    } else {
        
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array()));
    }

}

public function fetch_excise_registration_types(){
    $registration_type = $this->CompanyModel->get_excise_registration_types();
   

    if ($registration_type !== null) {
        $response = array(
            'status' => 'success',
            'data' => $registration_type
        );
    } else {
        $response = array(
            'status' => 'error',
            'message' => 'Failed to fetch registration types.'
        );
    }

    echo json_encode($response);

}
public function save_excise_details()
{
   
  
  
    $companyId = $this->session->userdata('companyId');
    // echo $companyId;
    // Retrieve the form data
    $unit_name = $this->input->post('unit_name');
    $excise_address_1 = $this->input->post('excise_address_1');
    $excise_address_2 = $this->input->post('excise_address_2');
    $excise_address_3 = $this->input->post('excise_address_3');
    $excise_address_4 = $this->input->post('excise_address_4');
    $excise_address_5 = $this->input->post('excise_address_5');
    $state = $this->input->post('state');
    $excise_pincode = $this->input->post('excise_pincode');
    $excise_phone = $this->input->post('excise_phone');
    $registrationTypeId = $this->input->post('registration_type');
    $ecc_number = $this->input->post('ecc_number');
    $set_alter_excise_tariff_details = $this->input->post('set_alter_excise_tariff_details');
    $excise_tariff_name = $this->input->post('excise_tariff_name');
    $hsn_code = $this->input->post('hsn_code');
    $reporting_unit_of_measure_id = $this->input->post('reporting_unit_of_measure_id');
    $valuation_type_id = $this->input->post('valuation_type_id');
    // echo $valuationTypeId;
    $excise_rate = $this->input->post('excise_rate');
    $appicable_from = $this->input->post('appicable_from');
    $define_excise_tariff_details_masters = $this->input->post('define_excise_tariff_details_masters');
    $deductive_from = $this->input->post('deductive_from');
    
    
    $data = array(
      
        'unit_name' => $unit_name,
        'address_line_1' => $excise_address_1,
        'address_line_2' => $excise_address_2,
        'address_line_3' => $excise_address_3,
        'address_line_4' => $excise_address_4,
        'address_line_5' => $excise_address_5,
        'state' => $state,
        'pin_code' => $excise_pincode,
        'telephone' => $excise_phone,
        'registration_type_id' => $registrationTypeId,
        'ecc_number' => $ecc_number,
        'set_excise_tariff_details' =>$set_alter_excise_tariff_details,
        'tariff_name' => $excise_tariff_name,
        'hsn_code' => $hsn_code,
        'reporting_unit_of_measure_id' => $reporting_unit_of_measure_id,
        'valuation_type_id' => $valuation_type_id,
        'rate' => $excise_rate,
        'appicable_from' => $appicable_from,
        'define_tariff_as_master' => $define_excise_tariff_details_masters,
        'deactivate_from'=>$deductive_from
    );
//  print_r($data);

    $updated = $this->CompanyModel->updateExciseDetails($companyId, $data);

    if ($updated) {
        echo json_encode(array('status' => 'success'));
    } else {
        echo json_encode(array('status' => 'failure'));
    }
}

public function get_excise_details(){
    $companyId = $this->input->post('company_id');
    if (empty($companyId)) {
       
        http_response_code(400);
        echo json_encode(array('error' => 'companyId is missing from session data'));
        return;
    }

    $exciseDetailsValue = $this->input->post('exciseDetailsValue');
    if (!in_array($exciseDetailsValue, array('yes', 'no'))) {
        
        http_response_code(400);
        echo json_encode(array('error' => 'invalid exciseDetailsValue'));
        return;
    }

  
    $query = $this->CompanyModel->getExciseDetails($exciseDetailsValue, $companyId);


    if ($query->num_rows() > 0) {
      
        $row = $query->row();

        
        $exciseTaxDetails = array(
            
            'unit_name'      => $row->unit_name,
            'address_line_1' => $row->address_line_1,
            'address_line_2' => $row->address_line_2,
            'address_line_3' => $row->address_line_3,
            'address_line_4' => $row->address_line_4,
            'address_line_5' => $row->address_line_5,
            'state' => $row->state,
            'pin_code' => $row->pin_code,
            'telephone' => $row->telephone,
            'registration_type_id' => $row->registration_type_id,
            'ecc_number' => $row->ecc_number,
            'set_excise_tariff_details' => $row->set_excise_tariff_details,
            'excise_tariff_name' => $row->tariff_name,
            'valuation_type_id' => $row->valuation_type_id,
            'hsn_code' => $row->hsn_code,
            'reporting_unit_of_measure_id' => $row->reporting_unit_of_measure_id,
            'rate' => $row->rate,
            'appicable_from' => $row->appicable_from,
            'define_tariff_as_master' => $row->define_tariff_as_master,
            'deactivate_from' => $row->deactivate_from,
           
        );

       
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($exciseTaxDetails ));
    } else {
       
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array()));
    }

}
public function get_tax_liability_service_tax()
{
    $res=$this->CompanyModel->get_tax_liability();
    if($res->num_rows()>0)
    {
        return($res->result());
    }
    return array();
}

public function get_tariff_details_valuation_type()
{
    $res=$this->CompanyModel->valuation_type();
    if($res->num_rows()>0)
    {
        return($res->result());
    }
    return array();
}

public function get_tariff_details_excise_reporting_UoMs()
{
    $res=$this->CompanyModel->excise_reporting_UoMs();
    if($res->num_rows()>0)
    {
        return($res->result());
    }
    return array();
}

public function get_gst_taxability_details(){
    $res=$this->CompanyModel->gst_taxability();
    if($res->num_rows()>0)
    {
        return($res->result());
    }
    return array();
}

public function checkCompanyNameExists()
{
    $company_id         = $this->session->userdata('company_id');
    $company_name       = $this->input->post('company_name');
    $mode               = $this->input->post('mode'); // Get the mode from the AJAX call
    // $company_id = $this->input->post('company_id'); // Get the company_id from the AJAX call

    $response             = $this->CompanyModel->checkCompanyNameExists($company_name, $mode, $company_id);

    echo json_encode($response);
}



 public function fetch_state_code() 
    {
        $stateId = $this->input->post('state_id');
        $stateCode = $this->CompanyModel->get_state_code($stateId);
     
        $response = array('state_code' => $stateCode);
        echo json_encode($response);
    }

public function save_gst_other_details() {
    $company_id = $this->session->userdata('company_id');
$data = array(
    'hsn_sac_details_id' =>$this->input->post('hsn_sac_details_id'),
     'hsn_gst_classification_id' =>$this->input->post('hsn_gst_classification_id'),
    'hsn_sac_number' =>$this->input->post('hsn_sac_number'),
    'hsn_sac_description' =>$this->input->post('hsn_sac_description'),
    'gst_rate_details_id' =>$this->input->post('gst_rate_details_id'),
    'gst_gst_classification_id' =>$this->input->post('gst_classification_id'),
    'taxability_type_id' =>$this->input->post('taxability_type_id'),
    'igst_rate' =>$this->input->post('igst_rate'),
    'cgst_rate'=>$this->input->post('cgst_rate'),
    'sgst_utgst_rate'=>$this->input->post('sgst_utgst_rate'),
    'cess_valuation_type_id'=>$this->input->post('cess_valuation_type_id'),
    'cess_rate' =>$this->input->post('cess_rate'),

    'applicable_for_reverse_charge' =>$this->input->post('applicable_for_reverse_charge'),
    'eligible_for_input_tax_credit'=>$this->input->post('eligible_for_input_tax_credit'),
    'interstate_threshold_limit'=>$this->input->post('interstate_threshold_limit'),
    'intrastate_threshold_limit'=>$this->input->post('intrastate_threshold_limit'),
    'threshold_limit_id'=>$this->input->post('threshold_limit_id'),
    'print_e_way_bill_with_invoice' =>$this->input->post('print_e_way_bill_with_invoice'),
    

     'send_e_way_bill_with_e_invoice_in_sales' =>$this->input->post('send_e_way_bill_with_e_invoice_in_sales'),
    'ignore_differences_in_tax_values_up_to' =>$this->input->post('ignore_differences_in_tax_values_up_to'),
    'ignore_differences_in_tax_id' =>$this->input->post('ignore_differences_in_tax_id'),
    'show_gst_advances_for_adjustments_in_trasaction'=>$this->input->post('show_gst_advances_for_adjustments_in_trasaction'),
    'gst_advances_for_adjustments_applicable_from'=>$this->input->post('gst_advances_for_adjustments_applicable_from')
);


$this->CompanyModel->updateGstOtherDetails($data, $company_id);
$response = array(
    'success' => true,
    'message' => 'Gst other details inserted successfully.'
);

header('Content-Type: application/json');
echo json_encode($response);

}
public function get_gstrate_details(){
    $company_id = $this->input->post('company_id');
    // $companyId = $this->session->userdata('company_id');
    if (empty($company_id)) {
        http_response_code(400);
        echo json_encode(array('error' => 'companyId is missing from session data'));
        return;
    }
    $gatrate_value = $this->input->post('gatrate_value');
    if (!in_array($gatrate_value, array('yes', 'no'))) {
       
        http_response_code(400);
        echo json_encode(array('error' => 'invalid tdsValue'));
        return;
    }
    $results = $this->CompanyModel->getGstRateDetails($company_id);
    // echo $query;
    // exit;
    if (!empty($results)) {
        $row = $results[0];
             $gstRateDetails = array(
                'hsn_sac_details_id' => $row['hsn_sac_details_id'],
                'hsn_gst_classification_id' => $row['hsn_gst_classification_id'],
                'hsn_sac_number' => $row['hsn_sac_number'],
                'hsn_sac_description' => $row['hsn_sac_description'],
                'gst_rate_details_id' => $row['gst_rate_details_id'],
                'gst_gst_classification_id' => $row['gst_gst_classification_id'],
                'taxability_type_id' => $row['taxability_type_id'],
                'igst_rate' => $row['igst_rate'],
                'cgst_rate' => $row['cgst_rate'],
                'sgst_utgst_rate' =>$row['sgst_utgst_rate'],
                'cess_valuation_type_id' => $row['cess_valuation_type_id'],
                'cess_rate' => $row['cess_rate'],
                'applicable_for_reverse_charge' => $row['applicable_for_reverse_charge'],
                'eligible_for_input_tax_credit' => $row['eligible_for_input_tax_credit'],
                'interstate_threshold_limit' =>$row['interstate_threshold_limit'],
                'intrastate_threshold_limit' => $row['intrastate_threshold_limit'],
                'threshold_limit_id' => $row['threshold_limit_id'],
                'print_e_way_bill_with_invoice' => $row['print_e_way_bill_with_invoice'],
                'send_e_way_bill_with_e_invoice_in_sales' => $row['send_e_way_bill_with_e_invoice_in_sales'],
                'ignore_differences_in_tax_values_up_to' => $row['ignore_differences_in_tax_values_up_to'],
                'ignore_differences_in_tax_id' => $row['ignore_differences_in_tax_id'],
                 'show_gst_advances_for_adjustments_in_trasaction' => $row['show_gst_advances_for_adjustments_in_trasaction'],
                'gst_advances_for_adjustments_applicable_from' => $row['gst_advances_for_adjustments_applicable_from'],
               
                    );

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($gstRateDetails));
    } else {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array()));
    }
}
public function get_gst_rate_details()
{
    $gst_classification_id  = $this->input->post('gst_classification_id');
    $result                 = $this->CompanyModel->getHsnSacDetails($gst_classification_id);
// print_r($result);
// exit;
    echo json_encode($result);
    
}
public function get_hsn_sac_details()
{
   $gst_classification_id       = $this->input->post('hsn_gst_classification_id');
   $results = $this->CompanyModel->getHsnSacDetails($gst_classification_id); 
   if(!empty($results))
   {
      echo  json_encode($results) ;
    //   $row = $results[0];
    //          $gstHsnSacDetails = array(
    //                                 'hsn_sac' => $row['hsn_sac'],
    //                                 'hsn_sac_description' => $row['description'],
    //                                 );
    //     $this->output
    //         ->set_content_type('application/json')
            // ->set_output(json_encode($gstHsnSacDetails));
   }
}

public function save_gst_classification() {
    $company_id = $this->session->userdata('company_id');
   
    $gst_classi_hidden_id=$_POST['gst_classi_hidden_id'];
    
    $hid_row_id=$_POST['hid_row_id'];
    
$data = array(

    'company_id'                    =>$company_id,
    'gst_classification_name'       => $this->input->post('gst_classification_class_name'),
    'hsn_sac_details_id'                         => $this->input->post('gst_classification_hsn_sac_details'),
    'hsn_sac'                  => $this->input->post('gst_classification_hsn_sac_number'),
    'description'         => $this->input->post('gst_classification_hsn_sac_description'),
    'gst_rate_details_id'   => $this->input->post('gst_classification_rate_details_id'),
    'taxability_type_id'                        => $this->input->post('gst_classification_taxability_type_id'),
    'nature_of_trasaction_id'               => $this->input->post('gst_classification_nature_of_transaction_id'),
    'igst_rate'                 => $this->input->post('gst_classification_igst_rate'),
    'cgst_rate'          => $this->input->post('gst_classification_cgst_rate'),
    'sgst_utgst_rate'          => $this->input->post('gst_classification_sgst_utgst_rate'),
    'cess_valuation_type_id'    => $this->input->post('gst_classification_cess_valuation_type_id'),
    'cess_rate'       => $this->input->post('gst_classification_cess_rate'),
    'applicable_for_reverse_charge' => $this->input->post('gst_classification_applicable_for_reverse_charge'),
    'eligible_for_input_tax_credit'          => $this->input->post('gst_classification_eligible_for_input_tax_credit'),
 
);

    if ($gst_classi_hidden_id == '0') {
        
        $this->db->insert('acc_gst_classification', $data);
    } 
    else {
      
        $this->db->where('id', $hid_row_id);
        $this->db->update('acc_gst_classification', $data);
    }

    $response = array(
        'status' => 'success',
        'message' => 'Saved' 
    );

    header('Content-Type: application/json');
    echo json_encode($response);

}

public function fetch_gst_classification() {
   
    $data = $this->CompanyModel->getAllGstClassifications();
    header('Content-Type: application/json');
    echo json_encode($data);
}


public function get_gst_classification_details()
{
    // $company_id = $this->session->userdata('company_id');
    $gst_classification = $this->CompanyModel->get_gst_classification_details();
    echo json_encode(['data' => $gst_classification]);

}

public function delete_gst_classification_by_id()
{
    $id  = $this->input->post('id');
    $res = $this->CompanyModel->delete_gst_classification_by_id($id);

    if ($result) {
        $response = ['success' => true, 'message' => 'Item marked as deleted successfully'];
    } else {
        $response = ['success' => false, 'message' => 'Failed to mark item as deleted'];
    }

    echo json_encode($response);
}


public function get_gst_classification_by_id()
{
    $id = $this->input->post('id');
    $result = $this->CompanyModel->get_gst_classification_by_id($id);

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

public function check_gst_classification_name_exist(){
    $gst_classification_name    = $this->input->post('gst_classification_name');
    $gst_classi_hidden_id       = $this->input->post('gst_classi_hidden_id'); // Get the mode from the AJAX call
    $hid_row_id                 = $this->input->post('hid_row_id'); // Get the mode from the AJAX call

    $response             = $this->CompanyModel->check_gst_classification_name_exist($gst_classification_name, $gst_classi_hidden_id ,$hid_row_id );
// var_dump($response);
// die;
    echo json_encode($response);

    }






} // =========== class End	

?>
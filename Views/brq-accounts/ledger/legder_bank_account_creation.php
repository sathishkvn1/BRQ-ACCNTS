<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Creation</title>
    <?php include("application/views/brq-accounts/top-css.php"); ?>
    
</head>
<body>

<div class="wrapper">
    	<!-- Navbar  TOP NAV BAR MESSAGES & SEARCH -->
		<?php include("application/views/brq-accounts/header-nav-search-messages.php"); ?>
		<!-- /.navbar  TOP NAVE BAR MESSAGES & SEARCH-->


		<!--- For sidebar Right Navigation for Short Cut Key like Tally -->
		<?php include("application/views/brq-accounts/index-sidebar-navigation-right.php"); ?>
		<!--- End : For sidebar Right Navigation for Short Cut Key like Tally -->

</div>


<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modal" 
        id="legder_bank_account_creation" data-value="enable_tds" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                    <?php

                            $group_name = $_GET['group_name'];
                            $group_id = $_GET['group_id'];

                            if ($group_name === "Bank OD A/c" || $group_name === "Bank OCC A/c") {
                                $modal_heading = "Loan Account Creation";
                            } else {
                                $modal_heading = "Bank Account Creation";
                            }
                           
                    ?>
                        <h6 class="inventory_modal_headding"><?php echo $modal_heading ?></h6>
                        <i class="fa fa-close close_modal"  onclick="cancelBankAccountCreation();"></i>
                    </div>
                </div>
                <div class="modal-body bg-white">
                    <div class="row gst-full-content-row">
                        <!-- Left Side Start Here -->
                        <div class="col-md-6 left_side_content" style="height:100%">
                            <!-- Left Content -->
                            <div class="row" style="padding-top:8px">
                                <!-- Single features Section Start Here -->
                                <div class="col-md-12" >
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-8">
                                            <label>Bank Account Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable"
                                                name="account_head_name" id="account_head_name"
                                                tabindex="25000">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Alternate Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable"  name="head_alternate_name"
                                                id="head_alternate_name" tabindex="25001">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Address<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                        <input class="enable" name="address_line_one" id="address_line_one" tabindex="25002" >
                                        <input class="enable" name="address_line_two" id="address_line_two" tabindex="25003" >
                                        <input class="enable" name="address_line_three" id="address_line_three" tabindex="25004" >
                                        </div>
                                    </div>
                                    

                                    <input type="hidden" id="flag_id" value="0" >
                                    <input type="hidden" id="rowID" value="0" >
                                    <!-- ---single row start here---- -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>State<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                        <select class="enable " tabindex="25005" name="state_id" id="state_id">
                                                        <?php foreach ($acc_state_master as $acc_state_master): ?>
                                                            <option value="<?php echo $acc_state_master->id; ?>"><?php echo $acc_state_master->state_name; ?></option>
                                                        <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Country<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable " tabindex="25006" name="country_id" id="country_id">
                                                        <?php foreach ($acc_country_master as $acc_country_master): ?>
                                                            <option value="<?php echo $acc_country_master->id; ?>"><?php echo $acc_country_master->country_name; ?></option>
                                                        <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                            <div class="col-md-8">
                                                <label>Pin Code<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" tabindex="25007" name="pin_code"
                                                    id="pin_code">
                                            </div>
                                        </div>
                                    <!-- Single Row End Here -->
                                   <!-- Single Row Start Here -->
                                 <div class="row">
                                        <div class="col-md-8">
                                            <label>Mobile No<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" tabindex="25008" name="mobile_number"
                                                id="mobile_number">
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label for="description">Description<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <textarea class="enable" name="description" id="description" tabindex="25009" rows="1" oninput="resizeTextarea(this)"></textarea>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                            <div class="col-md-8">
                                                <label>Notes<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <textarea class="enable"  name="notes"
                                                    id="notes" tabindex="25010" rows="1" oninput="resizeTextarea(this)"></textarea>
                                            </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                     <!-- Single Row Start Here -->
                                     <div class="row ">
                                            <div class="col-md-8">
                                                <label>Pricing level applicable<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable " tabindex="25011" name="pricing_level_applicable" id="pricing_level_applicable">
                                                    <?php foreach ($acc_stock_gst_applicability as $acc_stock_gst_applicability): ?>
                                                        <option value="<?php echo $acc_stock_gst_applicability->id; ?>"><?php echo $acc_stock_gst_applicability->gst_applicability; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                    </div>
                                        <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Cost Centers are applicable<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="25012"
                                                name="cost_centers_are_applicable"
                                                id="cost_centers_are_applicable">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Is Payment Gateway<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="25013"
                                                name="is_payment_gateway"
                                                id="is_payment_gateway">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-8">
                                            <label>Payment Gateway Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable"
                                                name="payment_gateway_name" id="payment_gateway_name"
                                                tabindex="25014">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-8">
                                            <label>Effective Date for Reconcillation<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" class="enable "
                                                name="effective_date_for_reconcillation" id="effective_date_for_reconcillation"
                                                tabindex="25015">
                                        </div>
                                    </div>
                                    <!-- ---single row start here------>
                                    <!-- ---single row start here------>
									<div class="row">
                                        <div class="col-md-8">
                                            <label>GSTIN/UIN<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="gstin_uin" id="gstin_uin"
                                                tabindex="25016">
                                        </div>
                                    </div>
                                    <!-- ---single row start here------>
                            <div id="additional_details_holder">
                                <h6 class="h6 bold">Additional Details</h6>
                           

                               

                                        

                                
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Provide Contact Person Details <span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="yes_no  enable" tabindex="25018"
                                            name="provide_stock_and_bill_details"
                                            id="provide_stock_and_bill_details">
                                            <option value="yes">Yes</option>
                                            <option value="no" selected>No</option>
                                         </select>
                                        </div>
                                    </div>
                                 <!-- Single Row End Here -->
                           

                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Provide Bank Details<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="25019"
                                                name="provide_contact_person_details"
                                                id="provide_contact_person_details">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                 <!-- Single Row Start Here -->
                                 <div class="row">
                                        <div class="col-md-8">
                                            <label>Provide Cheque Book Details Address<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="25020"
                                                name="provide_mutiple_mailing_address"
                                                id="provide_mutiple_mailing_address">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                        <div class="col-md-8">
                                            <label>Enable Cheque Printing<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="25021"
                                                name="provide_gst_vat_pan_details"
                                                id="provide_gst_vat_pan_details">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                 <!-- Single Row Start Here -->
                                 <div class="row">
                                        <div class="col-md-8">
                                            <label>Set/After Cheque Printing configuration<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="25022"
                                                name="provide_bank_details"
                                                id="provide_bank_details">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                    <div class="row pb-5">
                                        <div class="col-md-8">
                                            <label>Use as National Bank for Post Dated Vouchers<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="25023"
                                                name="use_as_national_bank_for_post_dated_vouchers"
                                                id="use_as_national_bank_for_post_dated_vouchers">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->

                            </div>
                            
                                    
                        </div>
                    </div>

						
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content tabular_formate">
                  <!-- <h6 class="cost_centre_headding">Cost Centre</h6> -->
					<div class="row" >		
                        <table id="bank_account_creation_table" class="display">
                        <thead>
								<tr>
									<th style="padding-left:6px">Acc.Name</th>
                                    <th class="action">Acc.No</th>
                                    <th class="action">Holder</th>
									<th class="action">Bank</th>
                                    <th class="action">Pincode</th>
									<th class="action">Action</th>
								</tr>
                        </thead>
                        <tbody>
                                    <!-- Dynamic content -->
                        </tbody>
                          
                        </table>
                        
					</div>
                    <div class="border_bottom_for_save_cancel">

                    </div>
                    <div class="row save_cancel_section">
                        <div class="col-12" style="display: flex !important;flex-direction: row-reverse !important;">
                        
                            <button id="cancel_bank_account_creation" onclick="cancelBankAccountCreation();" class="cancel_bank_account_creation_btn btn ml-4" type="button" tabindex="25025" >
                                <span>C</span>ancel
                            </button>
                            <button id="new_bank_account_creation_btn" class="new_bank_account_creation_btn btn ml-4"  type="button" tabindex="25024" >
                                <span>N</span>ew
                            </button>
                            <button id="save_bank_account_creation_btn"   class="save_bank_account_creation_btn btn ml-4 " tabindex="25017" type="button">
                                <i class="fas fa-calendar-check"></i><span>S</span>ave
                            </bottom>

                            
                        </div>
				    </div>
				</div>

            </div>
        </div>
        
  
    <!----------- bottom-js ---------------------->
	<?php include("application/views/brq-accounts/bottom-js.php"); ?>
	<!------------- bottom-js end --------------->   
   


    
</body>
</html>
<script>

$(document).ready(function() {


    $("#additional_details_holder").hide();
    $("#additional_details_holder select").removeClass('enable');
    $("#payment_gateway_name").removeClass('enable');   


    var isFirstLoad = true;

    var lastChangedSelect; 

    $('#legder_bank_account_creation').modal('show');
    $('#additional_details_holder select').prop('disabled', true);

    $('#additional_details_holder select').on('change', function() {
        lastChangedSelect = this; 
    });

    $('#legder_bank_account_creation').on('shown.bs.modal', function () {
        if (isFirstLoad) {
            $("#account_head_name").focus();
            isFirstLoad = false;
        }
        else {
            if (lastChangedSelect) {
                $(lastChangedSelect).focus(); // Focus on the last changed select element
            } else {
                $("#account_head_name").focus();
            }
        }
    });

    loadDataTableBankAccountCreation();




});
   

</script>

<script>

     $(".yes_no,.enable").keypress(function (event) {
        if ($("#legder_bank_account_creation").hasClass("show")) {
            if (event.key === "Enter") {
                // event.preventDefault();
                itype = $(this).prop('type');


                currentId = $(this).attr('id');
                if(currentId == 'gstin_uin' ){
                    $('#save_bank_account_creation_btn').focus();
                    event.preventDefault();
                }
                if(currentId == 'use_as_national_bank_for_post_dated_vouchers' ){
                    $('#new_bank_account_creation_btn').focus();
                    event.preventDefault();
                }
         
                
                if (itype !== 'submit') {
                    current_gst_classification_tabindex = $(this).attr('tabindex');
                    var company_gst_classification_field_id = $(this).attr('id');
                    var next = parseInt(current_gst_classification_tabindex) + 1;
                    if(company_gst_classification_field_id==='gst_classification_eligible_for_input_tax_credit')
                    {
                        $('#gstmodal_classification').modal('show');
                    }

                    if (current_gst_classification_tabindex >= 25000 && current_gst_classification_tabindex < 25200) {
                        while (next < 25200) {

                            if ($('[tabindex^="' + (parseInt(next)) + '"]').hasClass('enable')) {
                                nextInput = $('[tabindex^="' + next + '"]');
                                if (nextInput.length) {
                                    nextInput.focus();
                                    return false;
                                }
                            }
                            next++;
                        }
                    }
              
                }
            }
     
    
        }

    });
</script>



<script>
function loadDataTableBankAccountCreation() {
    var token = "<?php echo $_SESSION['li_token']; ?>";

    var table = $('#bank_account_creation_table').DataTable();
    if (table) {
        table.destroy();
    }

    var table = $('#bank_account_creation_table').DataTable({
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": BASE_URL + "index.php/AccountsLedger/get_supplier_table/",
            "type": "POST",
            "dataType": "json",
            "dataSrc": "data",
            "data": {
                "li_token": token
            },
            "error": function(xhr, textStatus, error) {
                console.error("Error loading data:", error);
            }
        },
        "columns": [
            { "data": "account_head_name" },
            { "data": "address_line_1" },
            { "data": "state_id" },
            { "data": "pin_code" },
            { "data": "mobile_number" },

           
            {
                "data": "id",
                "render": function(data, type, full, meta) {
                    var id = full.ledger_id; 

                    return '<div class="operations">' +
                        '<a href="#" class="btn btn-xs first_a" title="Edit" onclick="editBank(event,' + id + ');"><i class="fas fa-edit"></i></a>' +
                        '<a href="#" class="btn btn-xs" title="Delete" onclick="deleteBank(event,' + id + ');"><i class="fas fa-trash"></i></a>' +
                        '</div>';
                }
            }
        ],
        "createdRow": function(row, data, dataIndex)
     {
        $(row).addClass("clickable-row");
     },// call the customised data table
     "initComplete": function(settings, json) {
        // Call the customizeDataTableBankAccountCreation function after DataTable initialization
        customizeDataTableBankAccountCreation('bank_account_creation_table');// call the data table function , type id of data table as parameter
   
    }
    });

}
</script>

<script>

var token 				= $("#csrf-token").attr('content'); //CSRF token newly added by sandeep
var BASE_URL = "<?php echo base_url(); ?>";


$('#save_bank_account_creation_btn').click(function() {

    $('#additional_details_holder select').prop('disabled', false); // in success
    $('#provide_stock_and_bill_details').focus();
   

    var formData  = new FormData();
	formData.append('account_head_name', $("#account_head_name").val()); 
	formData.append('head_alternate_name', $("#head_alternate_name").val()); 
    formData.append('address_line_one', $("#address_line_one").val()); 
	formData.append('address_line_two', $("#address_line_two").val());
	formData.append('address_line_three', $("#address_line_three").val());
	formData.append('state_id', $("#state_id").val());
	formData.append('country_id', $("#country_id").val());
	formData.append('pin_code', $("#pin_code").val());
    formData.append('mobile_number', $("#mobile_number").val());
	formData.append('description', $("#description").val());
	formData.append('notes', $("#notes").val());

	formData.append('pricing_level_applicable', $("#pricing_level_applicable").val());
	formData.append('cost_centers_are_applicable', $("#cost_centers_are_applicable").val());
	formData.append('is_payment_gateway', $("#is_payment_gateway").val());
	formData.append('effective_date_for_reconcillation', $("#effective_date_for_reconcillation").val());
	formData.append('gstin_uin', $("#gstin_uin").val());

    

	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsLedger/saveBankAccountCreation/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
            
        loadDataTableBankAccountCreation();

          flag_id=($("#flag_id").val());

          if(flag_id === "0")
          {
                $("#rowID").val(response.insertedRowId); //if Insert, rowId value changes to insertRowId
              
                $('#additional_details_holder select').prop('disabled', false); // in success
                $('#provide_stock_and_bill_details').focus();
                $('#save_bank_account_creation_btn').prop('disabled', false); // in success

                toast_message('success','',response.message);
                
             
          }
          else if(flag_id === "1")
          {

                $('#provide_stock_and_bill_details').focus();
                $('#save_bank_account_creation_btn').prop('disabled', false); // in success

                toast_message('success','Updated',response.message)
          }

        },
        error: function(xhr, status, error) {
            $('#additional_details_holder select').prop('disabled', false); // in success
   
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
});

</script>



<script>


function editBank(event,id)  
{   
    event.preventDefault();
    $("#rowID").val(id);
    flag_id=$("#flag_id").val("1");
    
    $('#ledger_bank_account_details_modal input').val('');
    $('#ledger_gst_vat_pan_details_modal input').val('');
    $('#ledger_address_and_contact_details_modal input').val('');
    $('#additional_details_holder select').val('no'); 

    $.ajax({
       
            url: BASE_URL + "index.php/AccountsLedger/get_edit_supplier_details",
            type: "POST",
            data: { id: id, li_token: token,flag_id: $("#flag_id").val() },
           
            dataType: "json",
            success: function (response) {
                if (response.success) {

                 
                    $('#additional_details_holder select').prop('disabled', false); // in success
                    $('#account_head_name').focus();
                    
                
                    $('[name="account_head_name"]').val(response.data[0].account_head_name);
            		$('[name="head_alternate_name"]').val(response.data[0].head_alternate_name);			
            		$('[name="description"]').val(response.data[0].description);
            		$('[name="notes"]').val(response.data[0].notes);
            		$('[name="address_line_one"]').val(response.data[0].address_line_1);
                    $('[name="address_line_two"]').val(response.data[0].address_line_2);
                    $('[name="address_line_three"]').val(response.data[0].address_line_3);

                    $('[name="state_id"]').val(response.data[0].state_id);
            		$('[name="country_id"]').val(response.data[0].country_id);
                    $('[name="pin_code"]').val(response.data[0].pin_code);
                    $('[name="mobile_number"]').val(response.data[0].mobile_number);

                    
                    $('[name="contact_person_name"]').val(response.data[0].contact_person_name);
            		$('[name="contact_person_designation"]').val(response.data[0].contact_person_designation);
                    $('[name="contact_person_mobile_number"]').val(response.data[0].contact_person_mobile_number);
                    $('[name="contact_person_email"]').val(response.data[0].contact_person_email);
                    $('[name="email"]').val(response.data[0].email);
                    $('[name="website"]').val(response.data[0].website);

                
                    
               
                    if (response.data4 && response.data4.length > 0) {
                        $('[name="bank_transaction_type_id"]').val(response.data4[0].bank_transaction_type_id);
                        $('[name="bank_account_holders_name"]').val(response.data4[0].bank_account_holders_name);
                        $('[name="bank_account_number"]').val(response.data4[0].bank_account_number);
                        $('[name="bank_ifsc_code"]').val(response.data4[0].bank_ifsc_code);
                        $('[name="bank_swift_code"]').val(response.data4[0].bank_swift_code);
                        $('[name="account_head_name"]').val(response.data4[0].account_head_name);
                        $('[name="bank_branch"]').val(response.data4[0].bank_branch);
                        $('[name="bank_bsr_code"]').val(response.data4[0].bank_bsr_code);
                    }
                    if (response.data3 && response.data3.length > 0) {
                        $('[name="gst_registration_type_id"]').val(response.data3[0].gst_registration_type_id);
                        $('[name="is_assessee_of_other_territory"]').val(response.data3[0].is_assessee_of_other_territory);
                        $('[name="gstin_uin"]').val(response.data3[0].gstin_uin);
                        $('[name="use_ledger_as_common_party"]').val(response.data3[0].use_ledger_as_common_party);
                        $('[name="is_party_a_transporter"]').val(response.data3[0].is_party_a_transporter);
                        $('[name="transporter_id"]').val(response.data3[0].transporter_id);
                        $('[name="vat_type_id"]').val(response.data3[0].vat_type_id);
                        $('[name="place_of_supply_for_outwards"]').val(response.data3[0].place_of_supply_for_outwards);
                        $('[name="vat_tin_number"]').val(response.data3[0].vat_tin_number);
                        $('[name="cst_number"]').val(response.data3[0].cst_number);
                        $('[name="sales_purchase_against_form_c"]').val(response.data3[0].sales_purchase_against_form_c);
                        $('[name="pan_number"]').val(response.data3[0].pan_number);
                        $('[name="pan_effective_date"]').val(response.data3[0].pan_effective_date);
                        $('[name="name_on_the_pan"]').val(response.data3[0].name_on_the_pan);
                    }

                    
                } else {
                    alert("Failed to fetch stock category details.");
                    
                }
            },
            error: function (xhr, status, error) {
                alert("Error fetching stock category details.");
            }
        });
}
function generateDynamicTableRowsForOpeningBalance(data = null) {

    isLastRow = true;

    if (!data || data.length === 0) {
        addRow(true, '', '', '', '', '', '', '', isLastRow);
    }
     else {
        
        const dataLength = data.length;
        

        for (let i = 0; i < data.length; i++) {
            if (i === dataLength - 1) {

                isLastRow = true;
                
            }
            else{

                isLastRow = false;

            }

            addRow(data[i].godown_id || '', data[i].batch_number || '', data[i].expiry_date || '', data[i].manufacture_date || '', data[i].quantity || '', data[i].rate || '', data[i].id || '','',isLastRow);

            // Only show the button in the last row
           
        }
    }
}

function generateDynamicTableRowsForBillOfMaterial(data=null) 
{
    
    isLastRowBom = true;
        
    if (!data || data.length === 0) 
            {
               
                addRowBom(true, true, true, '',true, '', '',isLastRowBom);
            }
            else{
                const dataLengthBom = data.length;

                    for (let i = 0; i < data.length; i++)
                    {
                        if (i === dataLengthBom - 1) {

                            isLastRowBom = true;
                            

                            }
                            else{

                            isLastRowBom = false;

                            }
                        addRowBom(data[i].item_master_id || '', data[i].godown_id || '', data[i].component_type_id || '', data[i].component_quantity || '',data[i].component_unit_id || '', data[i].rate_percentage || '', data[i].id || '',isLastRowBom);
                    }
                }
            return;
            
}
     
                         
           

function deleteBank(event,id) {
   
    event.preventDefault();
   
   if (confirm("Are you sure you want to delete this item?")) {
       $.ajax({
            url: BASE_URL + "index.php/AccountsLedger/delete_supplier_by_id",
          
           type: "POST",
           data: { id: id, li_token: token },
           dataType: "json",
           success: function (response) {
               
               toast_message("success", "Successful", "Item deleted successfully");
               location.reload();

           },
           error: function (xhr, status, error) {
               
               
               alert_message("failure", "Error", "Error deleting item.");
           }
       });
   }
 
}



</script>




<script>
$(document).ready(function () {
   $('#legder_bank_account_creation select:not(.yes_no)').select2();


    });
</script>
<script>
$("#provide_stock_and_bill_details").on("change", function() {
var provide_stock_and_bill_details_val = $("#provide_stock_and_bill_details").val();


if (provide_stock_and_bill_details_val === "yes") {
    $("#legder_bank_account_creation").modal('hide');
    $('[id^=modal]').modal('hide');
    
    
    $("#ledger_stock_and_bill_settings_modal").modal('show');
}
 else if (provide_behaviour_option_val == "no") {
    
}
});
</script>
<script>
$("#provide_contact_person_details").on("change", function() {
var provide_contact_person_details_val = $("#provide_contact_person_details").val();


if (provide_contact_person_details_val === "yes") {
    $("#legder_bank_account_creation").modal('hide');
    
    $("#ledger_address_and_contact_details_modal").modal('show');
}
 else if (provide_contact_person_details_val == "no") {
    
}
});
</script>

<script>
$("#provide_mutiple_mailing_address").on("change", function() {
var provide_mutiple_mailing_address_val = $("#provide_mutiple_mailing_address").val();


if (provide_mutiple_mailing_address_val === "yes") {
    $("#legder_bank_account_creation").modal('hide');
    $('[id^=modal]').modal('hide');
    
    $("#ledger_multiple_address_details_modal").modal('show');
}
 else if (provide_mutiple_mailing_address_val == "no") {
    
}
});
</script>
<script>
$("#provide_gst_vat_pan_details").on("change", function() {
var provide_gst_vat_pan_details_val = $("#provide_gst_vat_pan_details").val();


if (provide_gst_vat_pan_details_val === "yes") {
    $("#legder_bank_account_creation").modal('hide');
    $('[id^=modal]').modal('hide');
    
  
    $("#ledger_gst_vat_pan_details_modal").modal('show');
}
 else if (provide_gst_vat_pan_details_val == "no") {
    
}
});
</script>

<script>
$("#provide_bank_details").on("change", function() {
var provide_bank_details_val = $("#provide_bank_details").val();


if (provide_bank_details_val === "yes") {

    $("#legder_bank_account_creation").modal('hide');
    $('[id^=modal]').modal('hide');
    
   
    $("#ledger_bank_account_details_modal").modal('show');
}
 else if (provide_bank_details_val == "no") {
    
}
});
</script>


<script>
$("#is_payment_gateway").on("change", function() {
var is_payment_gateway_val = $("#is_payment_gateway").val();

if (is_payment_gateway_val === "yes") {

    $("#additional_details_holder").show();
    $("#additional_details_holder select").addClass('enable');
    $("#payment_gateway_name").addClass('enable');
}
 else if (is_payment_gateway_val == "no") {
    $("#additional_details_holder").hide();
    $("#additional_details_holder select").removeClass('enable');
    $("#payment_gateway_name").removeClass('enable');
}
});
</script>

<script>
function resizeTextarea(textarea) {
  
    const textArea = textarea;
    const content = textArea.value;
    const container = document.createElement("div");
    container.style.visibility = "hidden";
    container.style.whiteSpace = "pre-wrap";
    container.style.wordWrap = "break-word";
    container.style.width = "auto";
    container.textContent = content;
    document.body.appendChild(container);
    const width = container.offsetWidth;
    document.body.removeChild(container);
    const threshold = 18;
    const rows = Math.max(1, Math.ceil(width / threshold));
    
    if (rows > 2) {
        textArea.rows = 2;
    } else {
        textArea.rows = rows;
    }
}


</script>
<script>
$('#new_bank_account_creation_btn').click(function(){



$('#legder_bank_account_creation input,#legder_bank_account_creation textarea').val('');

        var selectElements = document.querySelectorAll('select:not(.yes_no)');
        selectElements.forEach(function(select) {
            select.selectedIndex = 0;
        });
       

        $("#account_head_name").focus();

});

function cancelBankAccountCreation()
{
    window.history.back();
}

function handleEscapeBankAccountCreation(event) {
    if (event.key === "Escape") {
  
        window.history.back();
        cancelBankAccountCreation();    
        
    }
}
$('#legder_bank_account_creation').on('keydown', handleEscapeBankAccountCreation);

</script>
<script>

function customizeDataTableBankAccountCreation(tableId) {// customized datatable function
   
   var table = $('#' + tableId).dataTable();// table id
   var filterInput = document.querySelector('#' + tableId + '_filter input');// search input
 
 
   var iconElement = document.createElement('i');// create i tag
   iconElement.className = 'fas fa-search'; // search i tag
 
   // Add the icon element as a child of the label element
   var labelElement = filterInput.parentElement;
   labelElement.insertBefore(iconElement, filterInput); // Insert the icon before the input element
 
   // Remove the "Search:" text node
   labelElement.removeChild(labelElement.firstChild);
 
   // Set a placeholder for the search input
   $('#' + tableId + '_filter input[type="search"]').attr('placeholder', 'Search...');
 
   // Iterate through each page
   for (var i = 0; i < table.fnSettings().fnRecordsTotal(); i++) {
       // Go to the next page
       table.fnPageChange(i);
 
       // Select all rows in the current page
       var rows = table.$('tr');
 
       // Iterate through each row and remove the "sorting_1" class from its cells
       rows.each(function() {
           $(this).find('td').removeClass('sorting_1').addClass("first_td");// remove all sorting td class in each modal
       });
   }
 }
 




 // data table key movement start here 
const table = $('#bank_account_creation_table').DataTable();
let focusedRowIndex = -1; // Track the index of the currently focused row
let currentPage = table.page(); // Track the current pagination page
//  click event handler to table rows
table.on('click', 'tr.clickable-row', function () {

  $(".focus-tr").removeClass("focus-tr");
  $(".focus-atag").removeClass("focus-atag");
  const clickedRow = $(this);
  clickedRow.addClass("focus-tr");

  const firstAnchor = clickedRow.find('a:visible:first');
  firstAnchor.addClass("focus-atag");
});
table.on('click', 'tr.clickable-row a', function () {
    $(".focus-tr").removeClass("focus-tr");
    $(".focus-atag").removeClass("focus-atag");
    if (target.is('a')) {
    $(".focus-tr").removeClass("focus-tr");
    $(".focus-atag").removeClass("focus-atag");
    return; // Exit the function to prevent further processing
  }
});


//  click event handler to the document to remove focus class when clicking outside of the table
$(document).on('click', function (e) {
  const target = $(e.target);

  // Check if the clicked element is not within the table
  if (!target.closest('table').length) {
    $(".focus-tr").removeClass("focus-tr");
    $(".focus-atag").removeClass("focus-atag");
  }
});



$(document).on('keydown', function (e) {
  if (e.keyCode === 37 || e.keyCode === 39) {
    // Check if the pressed key is the left or right arrow
    const focusedRow = $(".focus-tr");

    if (focusedRow.length) {
      const focusAtag = focusedRow.find(".focus-atag");
      const allAtags = focusedRow.find("a:visible");

      if (allAtags.length > 1) {
        if (e.keyCode === 37) { // If left arrow, focus on the first <a> tag
          focusAtag.removeClass("focus-atag");
          allAtags.eq(0).addClass("focus-atag");
        } else if (e.keyCode === 39) { // If right arrow, focus on the second <a> tag
          focusAtag.removeClass("focus-atag");
          allAtags.eq(1).addClass("focus-atag");
        }
      }
    }
  } 
 else if (e.keyCode === 40 || e.keyCode === 38) {
    // Check if the pressed key is the down or up arrow
    const focusedRow = $(".focus-tr");

    if (focusedRow.length)
     {
        let targetRow;
       if (e.keyCode === 40)
        { // If down arrow, find the next visible row
          targetRow = focusedRow.nextAll('tr:visible').first();
          if (!targetRow.length)
           {
            // If no more visible rows, go to the first visible row
            targetRow = focusedRow.siblings('tr:visible').first();
          }
       } 
      else if (e.keyCode === 38) 
      { // If up arrow, find the previous visible row
        targetRow = focusedRow.prevAll('tr:visible').first();
        if (!targetRow.length) {
          // If no previous visible row, go to the last visible row
          targetRow = focusedRow.siblings('tr:visible').last();
        }
      }

      if (targetRow.length) {
        focusedRow.removeClass("focus-tr");
        $(".focus-atag").removeClass("focus-atag");

        targetRow.addClass("focus-tr");
        const firstAnchor = targetRow.find('a:visible:first');
        firstAnchor.addClass("focus-atag");
      }
    }
  }
  else if (e.keyCode === 13) { // Check if the pressed key is the Enter key (key code 13)
    const focusedRow = $(".focus-tr");
    if (focusedRow.length) {
      const focusAtag = focusedRow.find(".focus-atag");
      if (focusAtag.length) {
        // Trigger a click event on the focused anchor tag
        focusAtag.click();
        focusedRow.removeClass("focus-tr");
        $(".focus-atag").removeClass("focus-atag");

      }
    }
  }
});
 // data table key movement ends here 
</script>














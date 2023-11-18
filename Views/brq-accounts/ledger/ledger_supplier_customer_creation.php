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
		<?php include('application/views/brq-accounts/header_nav_bar.php');?>
		<!-- /.navbar  TOP NAVE BAR MESSAGES & SEARCH-->


		<!--- For sidebar Right Navigation for Short Cut Key like Tally -->
		<?php include("application/views/brq-accounts/index-sidebar-navigation-right.php"); ?>
		<!--- End : For sidebar Right Navigation for Short Cut Key like Tally -->

</div>



<!-- including modal of provide stock and bill details  -->
<?php include('ledger_stock_and_bill_settings.php'); ?>  

<!-- including modal of supplier contact details  -->
<?php include('ledger_address_and_contact_details.php'); ?>  

<!-- including modal of supplier multiple address  -->
<?php include('ledger_multiple_address_details.php'); ?> 

<!-- including modal of supplier tax pan registered details  -->
<?php include('ledger_gst_vat_pan_details.php'); ?> 

<!-- including modal of supplier bank account details  -->
<?php include('ledger_bank_account_details.php'); ?> 

<!-- including modal of TDS TCS details  -->
<?php include('ledger_tds_tcs_details.php'); ?>

<!-- including modal of TDS deductable same voucher details  -->
<?php include('ledger_tds_deductable_in_same_voucher.php'); ?> 

<!-- including modal of TDS deductable same voucher details  -->
<?php include('ledger_tds_ignore_income_tax_excemption_limit.php'); ?> 





<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modal" 
        id="ledger_supplier_customer_creation_modal" data-value="enable_tds" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6 class="inventory_modal_headding">Supplier Creation</h6>
                        <i class="fa fa-close close_modal" onclick="cancelSupplierCustomerCreation();"></i>
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
                                            <label>Supplier Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="account_head_name" id="account_head_name"
                                                tabindex="20000">
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
                                                id="head_alternate_name" tabindex="20001">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Address<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                        <input class="enable" name="address_line_one" id="address_line_one" tabindex="20002" >
                                        <input class="enable" name="address_line_two" id="address_line_two" tabindex="20003" >
                                        <input class="enable" name="address_line_three" id="address_line_three" tabindex="20004" >
                                        </div>
                                    </div>
                                    <!-- Single Row Start Here -->
                                            <div class="row">
                                            <div class="col-md-8">
                                                <label>Description<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <textarea class="enable"  name="description"
                                                    id="description" tabindex="20005" rows="1" oninput="resizeTextarea(this)"></textarea>
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
                                                    id="notes" tabindex="20006" rows="1" oninput="resizeTextarea(this)"></textarea>
                                            </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <input type="hidden" id="flag_id" value="0" >
                                    <input type="hidden" id="rowID" value="0" >

                               
                                    <!-- ---single row start here---- -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>State<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                        <select class="enable " tabindex="20007" name="state_id" id="state_id">
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
                                            <select class="enable " tabindex="20008" name="country_id" id="country_id">
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
                                                <input type="text" class="enable" tabindex="20009" name="pin_code"
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
                                            <input type="text" class="enable" tabindex="20010" name="mobile_number"
                                                id="mobile_number">
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                            <div id="additional_details_holder">
                                <h6 class="h6_underline">Additional Details</h6>
                           


                                
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Provide Stock and Bill Details<span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="yes_no  enable" tabindex="20011"
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
                                            <label>Provide Contact Person Details<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="20012"
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
                                            <label>Provide Mutiple Mailing Address<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="20013"
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
                                            <label>Provide GST / VAT / PAN Details<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="20014"
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
                                            <label>Provide Bank Details<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="20015"
                                                name="provide_bank_details"
                                                id="provide_bank_details">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>In Docs No. for reconcillation<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="20016"
                                                name="in_docs_no_for_reconcillation"
                                                id="in_docs_no_for_reconcillation">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Provide Excise Details<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="20017"
                                                name="provide_excise_details"
                                                id="provide_excise_details">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                             <!-- Single Row Start Here -->
                                             <div class="row">
                                        <div class="col-md-8">
                                            <label>Provide Opening Balance<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="20018"
                                                name="provide_opening_balance"
                                                id="provide_opening_balance">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Provide TDS / TCS Details<span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="yes_no  enable" tabindex="20019"
                                            name="provide_tds_tcs_details"
                                            id="provide_tds_tcs_details">
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
                        <table id="account_supplier_creation_table" class="display">
                        <thead>
								<tr>
									<th style="padding-left:6px">Supplier</th>
                                    <th class="action">Address</th>
                                    <th class="action">State</th>
									<th class="action">PIN code</th>
                                    <th class="action">GST</th>
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
                        
                            <button id="cancel_account_suplier_creation" onclick="cancelSupplierCustomerCreation();" class="cancel_account_supplier_creation_btn btn ml-4" type="button" tabindex="20021" >
                                <span>C</span>ancel
                            </button>
                            <button id="new_account_supplier_creation_btn" class="enable new_account_supplier_creation_btn btn ml-4"  type="button" tabindex="20020" >
                                <span>N</span>ew
                            </button>
                            <button id="save_account_supplier_creation_btn"   class="save_account_supplier_creation_btn btn ml-4" tabindex="20011" type="button">
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
    // addRowTdsDeductable(true);
    // addRowTdsIgnoreIncomeTax(true);
  
    
    var isFirstLoad = true;
    var lastChangedSelect; 

    $('#ledger_supplier_customer_creation_modal').modal('show');
    $('#additional_details_holder select').prop('disabled', true);

    $('#additional_details_holder select').on('change', function() {
        lastChangedSelect = this; 
    });

    $('#ledger_supplier_customer_creation_modal').on('shown.bs.modal', function () {
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

    loadDataTableSupplierCreation();
   
});
   

</script>



<script>

     $(".yes_no,.enable").keypress(function (event) {
        if ($("#ledger_supplier_customer_creation_modal").hasClass("show")) {
            if (event.key === "Enter") {
                // event.preventDefault();
                itype = $(this).prop('type');


                currentId = $(this).attr('id');
                if(currentId == 'supplier_mobile_number' ){
                    $('#save_account_supplier_creation_btn').focus();
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

                    if (current_gst_classification_tabindex >= 20000 && current_gst_classification_tabindex < 20400) {
                        while (next < 20400) {

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
            if (event.key === "Tab") {
            // Prevent the default Tab behavior
             event.preventDefault();

            // Your custom Tab key handling code here
            alert("Tab key pressed!");
        }
    
        }

    });
</script>


<script>
function loadDataTableSupplierCreation() {
    var token = "<?php echo $_SESSION['li_token']; ?>";

    var table = $('#account_supplier_creation_table').DataTable();
    if (table) {
        table.destroy();
    }

    var table = $('#account_supplier_creation_table').DataTable({
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
                        '<a href="#" class="btn btn-xs first_a" title="Edit" onclick="editSupplier(' + id + ');"><i class="fas fa-edit"></i></a>' +
                        '<a href="#" class="btn btn-xs" title="Delete" onclick="deleteSupplier(' + id + ');"><i class="fas fa-trash"></i></a>' +
                        '</div>';
                }
            }
        ],
        "createdRow": function(row, data, dataIndex)
     {
    // Add a class to the <tr> element here
          $(row).addClass("clickable-row");
     },// call the customised data table
     "initComplete": function(settings, json) {
        // Call the customizeDataTableSupplierCreation function after DataTable initialization
        customizeDataTableSupplierCreation('account_supplier_creation_table');// call the data table function , type id of data table as parameter
   
    }
    });

}
</script>

<script>

var token 				= $("#csrf-token").attr('content'); //CSRF token newly added by sandeep
var BASE_URL = "<?php echo base_url(); ?>";


$('#save_account_supplier_creation_btn').click(function() {

    
   

    var formData  = new FormData();
	formData.append('account_head_name', $("#account_head_name").val()); 
	formData.append('head_alternate_name', $("#head_alternate_name").val()); 
	formData.append('description', $("#description").val());
	formData.append('notes', $("#notes").val());


    formData.append('address_line_one', $("#address_line_one").val()); 
	formData.append('address_line_two', $("#address_line_two").val());
	formData.append('address_line_three', $("#address_line_three").val());
	formData.append('state_id', $("#state_id").val());
	formData.append('country_id', $("#country_id").val());
	formData.append('pin_code', $("#pin_code").val());
    formData.append('mobile_number', $("#mobile_number").val());
	
	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsLedger/saveSupplierCreation/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
            
        loadDataTableSupplierCreation();

          flag_id=($("#flag_id").val());

          if(flag_id === "0")
          {
                $("#rowID").val(response.insertedRowId); //if Insert, rowId value changes to insertRowId
              
                $('#additional_details_holder select').prop('disabled', false); // in success
                $('#provide_stock_and_bill_details').focus();

                toast_message('success','',response.message);
                
             
          }
          else if(flag_id === "1")
          {
                $('#provide_stock_and_bill_details').focus();

                toast_message('success','Updated',response.message)
          }

        },
        error: function(xhr, status, error) {
           
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
});

</script>



<script>


function editSupplier(id)
{
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

                
                    // generateDynamicTableRowsForTdsDeductInSameVoucher(response.data);
               
                    if (response.data4 && response.data4.length > 0) {
                        $('[name="bank_transaction_type_id"]').val(response.data4[0].bank_transaction_type_id);
                        $('[name="bank_account_holders_name"]').val(response.data4[0].bank_account_holders_name);
                        $('[name="bank_account_number"]').val(response.data4[0].bank_account_number);
                        $('[name="bank_ifsc_code"]').val(response.data4[0].bank_ifsc_code);
                        $('[name="bank_swift_code"]').val(response.data4[0].bank_swift_code);
                        $('[name="bank_name"]').val(response.data4[0].bank_name);
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
                    if (response.data5 && response.data5.length > 0) {
                        
                        $('[name="is_tds_deductable"]').val(response.data5[0].is_tds_deductable);
                        $('[name="is_tcs_applicable"]').val(response.data5[0].is_tcs_applicable);

                        $('[name="tds_deductee_type_id"]').val(response.data5[0].tds_deductee_type_id);
                        $('[name="deduct_tds_in_same_voucher"]').val(response.data5[0].deduct_tds_in_same_voucher);
                        $('[name="use_advanced_tds_entries"]').val(response.data5[0].use_advanced_tds_entries);
                        $('[name="tds_ignore_surcharge_excemption_limit"]').val(response.data5[0].tds_ignore_surcharge_excemption_limit);
                        $('[name="tds_ignore_income_tax_excemption_limit"]').val(response.data5[0].tds_ignore_income_tax_excemption_limit);


                        $('[name="buyer_lessee_type_id"]').val(response.data5[0].buyer_lessee_type_id);
                        $('[name="deduct_tds_in_same_voucher"]').val(response.data5[0].deduct_tds_in_same_voucher);
                        $('[name="use_advanced_configuration_for_tcs"]').val(response.data5[0].use_advanced_configuration_for_tcs);
                        $('[name="tcs_ignore_surcharge_excemption_limit"]').val(response.data5[0].tcs_ignore_surcharge_excemption_limit);
                        $('[name="tcs_ignore_income_tax_excemption_limit"]').val(response.data5[0].tcs_ignore_income_tax_excemption_limit);
                        $('[name="set_zero_lower_rate_for_tcs_collection"]').val(response.data5[0].set_zero_lower_rate_for_tcs_collection);
                        $('[name="override_realisation_based_nature_of_goods"]').val(response.data5[0].override_realisation_based_nature_of_goods);
                        
                        
                    }

                    if (response.data6 && response.data6.length > 0) {
                        
                        $('[name="applicable_price_level_id"]').val(response.data6[0].applicable_price_level_id);
                        $('[name="maintain_balances_bill_by_bill"]').val(response.data6[0].maintain_balances_bill_by_bill);

                        $('[name="default_credit_period"]').val(response.data6[0].default_credit_period);
                        $('[name="check_for_credit_days_during_voucher_entry"]').val(response.data6[0].check_for_credit_days_during_voucher_entry);
                        $('[name="credit_limit"]').val(response.data6[0].credit_limit);
                        $('[name="inventory_values_are_affected"]').val(response.data6[0].inventory_values_are_affected);
                        $('[name="cost_centers_are_applicable"]').val(response.data6[0].cost_centers_are_applicable);


                        $('[name="activate_interest_calculation"]').val(response.data6[0].activate_interest_calculation);
                        $('[name="calculate_interest_transaction_by_transaction"]').val(response.data6[0].calculate_interest_transaction_by_transaction);
                        $('[name="calculate_interest_based_on_id"]').val(response.data6[0].calculate_interest_based_on_id);
                        $('[name="include_trasaction_date_for_amount_added"]').val(response.data6[0].include_trasaction_date_for_amount_added);
                        $('[name="include_trasaction_date_for_amount_deducted"]').val(response.data6[0].include_trasaction_date_for_amount_deducted);
                        $('[name="interest_rate"]').val(response.data6[0].interest_rate);
                        $('[name="calculation_period_id"]').val(response.data6[0].calculation_period_id);
                        $('[name="calculate_on_id"]').val(response.data6[0].calculate_on_id);
                        
                        
                    }

                    $("#is_tds_deductable").trigger("change");
                    $("#is_tcs_applicable").trigger("change");
                    $("#use_advanced_tds_entries").trigger("change");
                    $("#use_advanced_configuration_for_tcs").trigger("change");

                    
                } else {
                    alert("Failed to fetch stock category details.");
                    
                }
            },
            error: function (xhr, status, error) {
                alert("Error fetching stock category details.");
            }
        });
}


function deleteSupplier(id) {
   
   
   
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
$("#provide_stock_and_bill_details").on("change", function() {
var provide_stock_and_bill_details_val = $("#provide_stock_and_bill_details").val();


if (provide_stock_and_bill_details_val === "yes") {
    $("#ledger_supplier_customer_creation_modal").modal('hide');
    $('[id^=modal]').modal('hide');
    
    
    $("#ledger_stock_and_bill_settings_modal").modal('show');
}
 else if (provide_stock_and_bill_details_val == "no") {
    
}
});
</script>
<script>
$("#provide_contact_person_details").on("change", function() {
var provide_contact_person_details_val = $("#provide_contact_person_details").val();


if (provide_contact_person_details_val === "yes") {
    $("#ledger_supplier_customer_creation_modal").modal('hide');
    
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
    $("#ledger_supplier_customer_creation_modal").modal('hide');
    $('[id^=modal]').modal('hide');
    
    $("#ledger_multiple_address_details_modal").modal('show');
    loadDataTableMultipleAddress();
}
 else if (provide_mutiple_mailing_address_val == "no") {
    
}
});
</script>

<script>
$("#provide_gst_vat_pan_details").on("change", function() {
var provide_gst_vat_pan_details_val = $("#provide_gst_vat_pan_details").val();


if (provide_gst_vat_pan_details_val === "yes") {
    $("#ledger_supplier_customer_creation_modal").modal('hide');
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

    $("#ledger_supplier_customer_creation_modal").modal('hide');
    $('[id^=modal]').modal('hide');
    
   
    $("#ledger_bank_account_details_modal").modal('show');
}
 else if (provide_bank_details_val == "no") {
    
}
});
</script>
<script>
$("#provide_tds_tcs_details").on("change", function() {
var provide_tds_tcs_details_val = $("#provide_tds_tcs_details").val();


if (provide_tds_tcs_details_val === "yes") {

    $("#ledger_supplier_customer_creation_modal").modal('hide');
    $('[id^=modal]').modal('hide');
    
   
    $("#ledger_tds_tcs_details_modal").modal('show');
}
 else if (provide_tds_tcs_details_val == "no") {
    
}
});
</script>

<script>
$("#deduct_tds_in_same_voucher").on("change", function() {
var deduct_tds_in_same_voucher_val = $("#deduct_tds_in_same_voucher").val();


if (deduct_tds_in_same_voucher_val === "yes") {

    $("#ledger_tds_tcs_details_modal").modal('hide');
    $('[id^=modal]').modal('hide');
    
   
    $("#ledger_tds_deductable_in_same_voucher_modal").modal('show');
}
 else if (deduct_tds_in_same_voucher_val == "no") {
    
}
});
</script>

<script>
$("#ignore_income_tax_exemption_limit").on("change", function() {
var ignore_income_tax_exemption_limit_val = $("#ignore_income_tax_exemption_limit").val();


if (ignore_income_tax_exemption_limit_val === "yes") {

    $("#ledger_tds_tcs_details_modal").modal('hide');
    $('[id^=modal]').modal('hide');
    
   
    $("#ledger_tds_ignore_income_tax_excemption_limit").modal('show');
}
 else if (deduct_tds_in_same_voucher_val == "no") {
    
}
});
</script>

<script>
$("#set_alter_zero_lower_deduction").on("change", function() {
var set_alter_zero_lower_deduction_val = $("#set_alter_zero_lower_deduction").val();


if (set_alter_zero_lower_deduction_val === "yes") {

    $("#ledger_tds_tcs_details_modal").modal('hide');
    $('[id^=modal]').modal('hide');
    
   
    $("#ledger_tds_zero_lower_deduction_details").modal('show');
}
 else if (deduct_tds_in_same_voucher_val == "no") {
    
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
    
$('#new_account_supplier_creation_btn').click(function(){

// $('#ledger_supplier_customer_creation_modal input').val('');

//         var selectElements = document.querySelectorAll('select:not(.yes_no)');
//         selectElements.forEach(function(select) {
//             select.selectedIndex = 0;
//         });
//         $("#account_head_name").focus();

});

function cancelSupplierCustomerCreation()
{
    window.history.back();
}

function handleEscapeSupplierCustomerCreation(event) {
    if (event.key === "Escape") {
        cancelSupplierCustomerCreation();
        window.history.back();
        
    }
}
$('#ledger_supplier_customer_creation_modal').on('keydown', handleEscapeSupplierCustomerCreation);



</script>

<!-- <script>
function generateDynamicTableRowsForTdsDeductInSameVoucher(data = null) {

    isLastRow = true;


    if (!data || data.length === 0) {
        addRowTdsDeduct(true);
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

            addRowTdsDeduct(data[i].state_id || '',isLastRow);      

            // Only show the button in the last row
           
        }
    }
}

</script> -->
<script>
function customizeDataTableSupplierCreation(tableId) {// customized datatable function
   
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
const table = $('#account_supplier_creation_table').DataTable();
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
























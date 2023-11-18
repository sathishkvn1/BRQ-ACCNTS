<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplier Creation</title>
    <?php include("application/views/brq-accounts/top-css.php"); ?>
    <style>
       
  
    
    </style>
   
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





<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modal" 
        id="ledger_supplier_customer_creation_modal" data-value="enable_tds" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6 class="inventory_modal_headding">Supplier Creation</h6>
                        <i class="fa fa-close close_modal" id="stock_cost_center_cancel_icon"></i>
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
                        
                            <button id="cancel_account_suplier_creation" onclick="closeModal();" class="cancel_account_supplier_creation_btn btn ml-4" type="button" tabindex="20021" >
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
        ]
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

$('#new_account_supplier_creation_btn').click(function(){

    location.reload();

});





</script>



<script>
$("#provide_stock_and_bill_details").on("change", function() {
var provide_stock_and_bill_details_val = $("#provide_stock_and_bill_details").val();


if (provide_stock_and_bill_details_val === "yes") {
    $("#ledger_supplier_customer_creation_modal").modal('hide');
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











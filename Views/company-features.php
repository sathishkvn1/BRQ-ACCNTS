

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* .modal_common .modal-body label.left_space
        {
            padding-left:6px;
        } */
    </style>
</head>

<body>

    <div class="modal fade backdrop modal_common modal_centered_lg company_features mainmodal my-modal modal-open"
        id="company_features" data-keyboard="false" data-value="company_creation" data-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Company Created Successfully</h6>
                        <em>(Enable the features as per your business needs.)</em>
                    </div>
                    <div class="payment_sub_head">
                        <div class="row">
                            <div class="col-md-2">Company<span>:</span></div>
                            <!--<div class="col-md-10">Company Name</div>-->
                            <div class="col-md-10 " id="feature_company_name">Company Name</div>
                            
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Left Side Start Here -->
                        <div class="col-md-6 left_side_content">

                            <!-- Left Content -->
                            <div class="row">
                                <div class="col-md-12">
                                    <h6>Master</h6>
                                    <div class="row" id="maintain_master">
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label>Provide Contact Details<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="yes_no enable autofocus" id="provide_contact_details"
                                                name="provide_contact_details" tabindex="10200">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-10">
                                            <label>Provide Additional Base Currency details<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="yes_no enable" id="provide_additional_base_currency_details"
                                                name="provide_additional_base_currency_details" tabindex="10201">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                    </div>
                                </div>

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>Accounting</h6>
                                    <div class="row main_features" id="maintain_accounts">

                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label>Maintain Accounts<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="yes_no enable enabled_disabled_select" id="maintain_account"
                                                name="maintain_accounts" tabindex="10202">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->

                                        <!-- Sub Content Start Here -->
                                        <div class="col-md-12 sub_features disabled">

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Enable Bill-wise entry<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select"
                                                        id="enable_bill_wise_entry" name="enable_bill_wise_entry"
                                                        tabindex="10203" disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Enable Cost Centres<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select" id="enable_cost_centres"
                                                        name="enable_cost_centres" tabindex="10204" disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Enable Intrest Calculation<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select"
                                                        id="enable_interest_calculation"
                                                        name="enable_interest_calculation" tabindex="10205" disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                        </div>
                                        <!-- Sub Content End Here -->

                                    </div>
                                </div>
                                <!-- Single features Section End Here -->

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>Inventory</h6>
                                    <div class="row main_features" id="maintain_inventory">
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label>Maintain Inventory<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="yes_no enabled_disabled_select enable"
                                                id="maintain_inventories" name="maintain_inventory" tabindex="10206">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->

                                        <!-- Sub Content Start Here -->
                                        <div class="col-md-12 sub_features disabled">

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Integrate Accounts with Inventory<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select"
                                                        id="integrate_accounts_with_inventory"
                                                        name="integrate_accounts_with_inventory" tabindex="10207"
                                                        disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Enable Multiple Price Levels<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2" disabled>
                                                    <select class="yes_no sub_features_select"
                                                        id="enable_multiple_price_levels"
                                                        name="enable_multiple_price_levels" tabindex="10208" disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row" id="enable_batches">
                                                <div class="col-md-10">
                                                    <label>Enable Batches<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select" id="enable_batch"
                                                        name="enable_batch" tabindex="10209" disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>

                                                <!-- Under Sub features Start here -->
                                                <div class="col-md-12 under_sub_features disabled">

                                                    <!-- Single Row Start Here -->
                                                    <div class="row">
                                                        <div class="col-md-10">
                                                            <label>Maintain Expiry Date For Batches<span
                                                                    class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="yes_no under_sub_features_select"
                                                                tabindex="10210" id="maintain_expiry_date_for_batches"
                                                                name="maintain_expiry_date_for_batches" disabled>
                                                                <option value="yes">Yes</option>
                                                                <option value="no" selected>No</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- Single Row Start Here -->

                                                </div>
                                                <!-- Under Sub features End here -->

                                            </div>
                                            <!-- Single Row Start Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Enable Job Order Processing<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select"
                                                        id="enable_job_order_processing"
                                                        name="enable_job_order_processing" tabindex="10211" disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Enable Cost Tracking<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select" id="enable_cost_tracking"
                                                        name="enable_cost_tracking" tabindex="10212" disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Enable Job Costing<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select" id="enable_job_costing"
                                                        name="enable_job_costing" tabindex="10213" disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Use Discount Columns in Invoices<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select"
                                                        id="use_discount_column_in_invoices"
                                                        name="use_discount_column_in_invoices" tabindex="10214"
                                                        disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label>Use Seperate Actual and Billed Quantity Columns in
                                                        Invoices<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <select class="yes_no sub_features_select"
                                                        id="use_actual_and_billed_columns_in_invoices"
                                                        name="use_actual_and_billed_columns_in_invoices"
                                                        tabindex="10215" disabled>
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row Start Here -->

                                        </div>
                                        <!-- Sub Content End Here -->
                                    </div>
                                </div>
                                <!-- Single features Section End Here -->


                            </div>
                            <!-- Left Content -->

                        </div>
                        <!-- Left Side End Here -->

                        <!-- Right Side Start Here -->
                        <div class="col-md-6 right_side_content">

                            <!-- Right Content -->
                            <div class="row">

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>Taxation</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label>Enable Goods and Service Tax (GST)<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <!-- onchange="getGstDetails()"  -->
                                            <!-- data-target="#gst_modal" -->
                                            <select id="enable_gst" name="enable_gst" tabindex="10216"  
                                                class="yes_no with_backdrop_modal_val_yes enable">
                                                <option value="no" selected>No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                    </div>
                                    <!-- Single Row End Here -->
                                    <div class="row">
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label class="left_space">Set/Alter Company GST Rate and Other Details<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select id="gst_rate" tabindex="10217"
                                                class="with_backdrop_modal_val_yes yes_no  enable"
                                                data-target="#company_gst_an_other_details">
                                                <option value="no" selected>No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label>Enable Tax Deducted at Source (TDS)<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select  name="enable_tds"
                                                class="yes_no with_backdrop_modal_val_yes enable" id="enable_tds"
                                                data-target="#tds_details_modal" tabindex="10218">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label>Enable Tax Collected at Source (TCS)<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select 
                                                class="yes_no with_backdrop_modal_val_yes enable" id="enable_tcs"
                                                name="enable_tcs" data-target="#tcs_details_modal" tabindex="10219">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label>Enable Value Added Tax (VAT)<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select 
                                                class="yes_no with_backdrop_modal_val_yes enable" id="enable_vat"
                                                name="enable_vat" data-target="#vat_details_modal" tabindex="10220">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                    </div>
                                    <!-- Single Row End Here -->

                

                                </div>
                                <!-- Single features Section End Here -->

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>Others</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row main_features">
                                        <!-- Main Content Start Here -->
                                        <div class="colenable_tdsmaster-md-10">
                                            <label>Enable Payment Request to share payment link/QR code<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="yes_no with_backdrop_modal_val_yes enable"
                                                id="enable_upi_payment_request" name="enable_upi_payment_request"
                                                tabindex="10223">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row main_features">
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label>Enable Multiple Addresses<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="yes_no with_backdrop_modal_val_yes enable"
                                                id="enable_multiple_addresses" name="enable_multiple_addresses"
                                                data-target="#multiple_addresses_modal" tabindex="10224">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row main_features">
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-10">
                                            <label>Mark Modified Vouchers<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-2">
                                            <select class="yes_no enable" id="mark_modified_vouchers"
                                                name="mark_modified_vouchers" tabindex="10225"
                                                data-target="#company_feature_save">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                    </div>
                                    <!-- Single Row End Here -->

                                </div>
                                <!-- Single features Section End Here -->

                            </div>
                            <!-- Right Content -->

                        </div>
                        <!-- Right Side End Here -->
                    </div>

                </div>
            </div>
        </div>
    </div>



    <!-- save modal start here -->
    <div class="modal fade backdrop bottom modal-old-vouchers masters_add_edit accept_feature_save"
        id="company_feature_save">
        <div class="modal-dialog modal-full-height modal-bottom">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div>Confirm</div>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h6>Accept & Save ? </h6>
                        </div>

                        <div class="col-md-12">
                            <a class="btn" href="#" id="savebtn_company_features" onclick="enableSubmenu();"><i
                                    class="fas fa-save"></i><span>S</span>ave</a>
                            <!-- <a class="btn" href="#" onclick="validateAndOpenCloseModal();" id="saveBtn"><i class="fas fa-save"></i><span>S</span>ave</a> -->
                            <a class="btn" href="#" class="close" data-dismiss="modal" aria-label="Close"><i
                                    class="fas fa-times-circle"></i><span>C</span>ancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- save modal start here -->
</body>

</html>
<script>


// $('#company_features').on('hidden.bs.modal', function (e) {
// //   alert('The modal is about to be hidden.');
// $('#savebtn_company_features').click();
// });
// $('#company_features').on('shown.bs.modal', function (e) {
 
//  $('body').addClass('modal-open');
// })

// $('#company_features').modal({
//     backdrop: 'static',
//     keyboard: false
// });

$('#enable_gst').on('change', function() {
  
  var selectedValue = $(this).val();
  if (selectedValue === 'yes') {
    // $('#gst_modal').modal('show');
    $('#gst_rate').focus();
    getGstDetails();
  } else {
   
    $('#gst_modal').modal('hide');
  }
});
$('#enable_gst').on('keydown', function(e) {
   
   if (e.key === 'Enter') {
 
       var selectedValue = $(this).val();
    
       if (selectedValue === 'yes') {
        $('#gst_rate').focus();
           getGstDetails();
       } else {
           $('#gst_modal').modal('hide');
       }
   }
});



    var BASE_URL = "<?php echo base_url(); ?>";
    var accountsController = "<?php echo CONTROLLER_ACCOUNTS; ?>";
    // var company_id = <?php //echo $this->session->userdata('company_id'); ?>;
    var token = "<?php echo $_SESSION['li_token']; ?>";

    //  $(document).ready(function(){


    $('#savebtn_company_features').click(function (e) {
        e.preventDefault();
       

        $.ajax({
            type: 'POST',
            dataType: "json",
            url: BASE_URL + "index.php/" + accountsController + "/save_company_features_data",
            data: {
                provide_contact_details: $('#provide_contact_details').val(),
                provide_additional_base_currency_details: $('#provide_additional_base_currency_details').val(),
                maintain_accounts: $('#maintain_account').val(),
                enable_bill_wise_entry: $('#enable_bill_wise_entry').val(),
                enable_cost_centres: $('#enable_cost_centres').val(),
                enable_interest_calculation: $('#enable_interest_calculation').val(),
                maintain_inventory: $('#maintain_inventories').val(),
                integrate_accounts_with_inventory: $('#integrate_accounts_with_inventory').val(),
                enable_multiple_price_levels: $('#enable_multiple_price_levels').val(),
                enable_batches: $('#enable_batch').val(),
                maintain_expiry_date_for_batches: $('#maintain_expiry_date_for_batches').val(),
                enable_job_order_processing: $('#enable_job_order_processing').val(),
                enable_cost_tracking: $('#enable_cost_tracking').val(),
                enable_job_costing: $('#enable_job_costing').val(),
                use_discount_column_in_invoices: $('#use_discount_column_in_invoices').val(),
                use_actual_and_billed_columns_in_invoices: $('#use_actual_and_billed_columns_in_invoices').val(),
                enable_gst: $('#enable_gst').val(),
                enable_tds: $('#enable_tds').val(),
                enable_tcs: $('#enable_tcs').val(),
                enable_vat: $('#enable_vat').val(),
                enable_excise: $('#enable_excise').val(),
                enable_service_tax: $('#enable_service_tax').val(),
                enable_upi_payment_request: $('#enable_upi_payment_request').val(),
                enable_multiple_addresses: $('#enable_multiple_addresses').val(),
                mark_modified_vouchers: $('#mark_modified_vouchers').val(),
                li_token: token
            },
            success: function (response) {
                toast_message("success", "Successful", response.message);
                 $('#company_feature_save').modal('hide');
                 $('#company_features').modal('hide');
                 
            },
            error: function (xhr, status, error) {
                // Log the error details
                alert('Error saving company:');
                console.log('XHR:', xhr);
                console.log('Status:', status);
                console.log('Error:', error);
                // Optionally, display an error message to the user
            }
        });
    });

   
    function setFocusOnEnableGst() {
        $('#enable_gst').focus();
    }

    // Function to handle modal hidden event
    $('#gst_modal').on('hidden.bs.modal', function () {
        setTimeout(function () {
            setFocusOnEnableGst();
        }, 300);
    });



    //  }); // end of document.ready


function getGstDetails() {
    var enable_gst = $("#enable_gst").val();

    if (enable_gst === 'yes') {
        // var company_id = <?php //echo $this->session->userdata('company_id'); ?>;
        var token = "<?php echo $_SESSION['li_token']; ?>";

        $.ajax({
            url: BASE_URL + "index.php/" + accountsController + "/get_gst_row_count",
            type: 'GET',
            dataType: 'json',
            data: {
                li_token: token
                // company_id: company_id, li_token: token
            },
         
            success: function (response) {
                console.log("gstdata is",response);
                var rowCount = response.row_count;
                var gstData = response.data;
              
             
                if (rowCount > 1) {
                   
                    $('#company_multiple_gst').modal('show');
                  
                    loadMultipleGst()                           //defined in company_multiple_gst.php file
                } else {
                   // this is fr loading single gst
                   // this is the  primary key value
                   var gst_id = gstData[0].id; 
                   getGstDetailsById(gst_id);
                    getAddressType();
                    $('#gst_modal').modal('show');
                    
                    $('#gst_row_id').val(gst_id);
                
                }
            },
            error: function (xhr, status, error) {
                console.log('Error response:', xhr.responseText);
                console.log('An error occurred:', error);
                // Handle the error here
            }
        });
    }
}


/////////////// populating the values fr tds///////////////

    $('#enable_tds').on('change', function () {
         var tds_value = $(this).val();
         alert(tds_value);
        
        if (tds_value === 'yes') {
           
            populateTDSModal();
           
        }
    });

    function populateTDSModal(){
        //  $('#tds_details_modal').modal('show');
        url = BASE_URL + "index.php/" + accountsController + "/get_tds_details";
        $.ajax({
            url: url,
            type: 'POST',
            data: { li_token: token, company_id: company_id },
            dataType: 'json',
            success: function (response) {
                console.log("respone of tds is",response);
               
               
                $('#tds_tan_registration_number').val(response.tan_registration_number);
                $('#tds_tan_account_number').val(response.tan_account_number);
                $('#tds_deductor_collector_type_id').val(response.deductor_collector_type_id);
                $('#tds_deductor_collector_branch_division').val(response.deductor_collector_branch_division);
                $('#tds_std_code').val(response.std_code);
                $('#tds_phone_number').val(response.phone_number);
                $('#tds_email').val(response.email);
                $('#ignore_it_excemption_limit_for_tds').val(response.ignore_it_excemption_limit_for_tds);
                 $('#deductor_collector_type_id').val(response.ignore_it_excemption_limit_for_tcs);
                $('#activate_tds_for_stock_items').val(response.activate_tds_for_stock_items);
                // tds_surcharge_cess_details
               
                $('#tds_person_responsible_name').val(response.person_responsible_name);
                $('#tds_son_daughter_of').val(response.son_daughter_of);
                $('#tds_designation').val(response.designation);
                $('#tds_pan').val(response.pan);
                $('#tds_flat_house_number').val(response.flat_house_number);
                $('#tds_premises_building_name').val(response.premises_building_name);
                $('#tds_road_street_lane_name').val(response.road_street_lane_name);
                $('#tds_area_location_name').val(response.area_location_name);
                $('#tds_town_city_district_name').val(response.town_city_district_name);
                $('#tds_state_id').val(response.state_id);
                $('#tds_pincode').val(response.pincode);
                $('#tds_mobile').val(response.mobile);
                 $('#tcs_person_std_code').val(response.person_std_code);
                // tds_std_code
               
                $('#tds_telephone').val(response.telephone);
                $('#tds_email_id').val(response.email_id);
                $('#tds_std_code_alternate').val(response.std_code_alternate);
                $('#tds_telephone_alternate').val(response.telephone_alternate);
                $('#tds_email_id_alternate').val(response.email_id_alternate);
             
               
             
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    }
//////////////////////////////end of populating the values fr tds

$('#enable_tcs').on('change', function () {
         var tcs_value = $(this).val();
         alert(tcs_value);
        
        if (tcs_value === 'yes') {
 
             populateTCSModal();
           
        }
    });//////////// populating the values fr tcs///////////////


     function populateTCSModal(){
       
        url = BASE_URL + "index.php/" + accountsController + "/get_tds_details";
        $.ajax({
            url: url,
            type: 'POST',
            data: {li_token: token, company_id: company_id },
            dataType: 'json',
            success: function (response) {
                // console.log("respone of tds is",response);
                
               
                $('#tcs_tan_registration_number').val(response.tan_registration_number);
                $('#tcs_tan_account_number').val(response.tan_account_number);
                $('#tcs_deductor_collector_type_id').val(response.deductor_collector_type_id);
                $('#tcs_deductor_collector_branch_division').val(response.deductor_collector_branch_division);
                $('#tcs_std_code').val(response.std_code);
                $('#tcs_phone_number').val(response.phone_number);
                $('#tcs_email').val(response.email);
                $('#ignore_it_excemption_limit_for_tcs').val(response.ignore_it_excemption_limit_for_tds);
                $('#ignore_it_excemption_limit_for_tcs').val(response.ignore_it_excemption_limit_for_tcs);
                $('#activate_tds_for_stock_items').val(response.activate_tds_for_stock_items);
                // tds_surcharge_cess_details
               
                $('#tcs_person_responsible_name').val(response.person_responsible_name);
                $('#tcs_son_daughter_of').val(response.son_daughter_of);
                $('#tcs_designation').val(response.designation);
                $('#tcs_pan').val(response.pan);
                $('#tcs_flat_house_number').val(response.flat_house_number);
                $('#tcs_premises_building_name').val(response.premises_building_name);
                $('#tcs_road_street_lane_name').val(response.road_street_lane_name);
                $('#tcs_area_location_name').val(response.area_location_name);
                $('#tcs_town_city_district_name').val(response.town_city_district_name);
                $('#tcs_state_id').val(response.state_id);
                $('#tcs_pincode').val(response.pincode);
                $('#tcs_mobile').val(response.mobile);
                 $('#tcs_person_std_code').val(response.person_std_code);
                // tds_std_code
               
                $('#tcs_telephone').val(response.telephone);
                $('#tcs_email_id').val(response.email_id);
                $('#tcs_std_code_alternate').val(response.std_code_alternate);
                $('#tcs_telephone_alternate').val(response.telephone_alternate);
                $('#tcs_email_id_alternate').val(response.email_id_alternate);
             
           
             
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
 }
    ///////////////////// populating values fr vat
    $('#enable_vat').on('change', function () {
         var vat_value = $(this).val();
         alert(vat_value);
          if (vat_value === 'yes') {
            populateVATModal();
        //  url = BASE_URL + "index.php/" + accountsController + "/get_vat_details";
        // $.ajax({
        //     url: url,
        //     type: 'POST',
        //     data: { vat_value: vat_value, li_token: token, company_id: company_id },
        //     dataType: 'json',
        //     success: function (response) {
        //         console.log("respone of vat is is",response);
              
        //         $('#vat_state_id').val(response.state_id);
        //         $('#vat_applicable_from').val(response.vat_applicable_from);
        //         $('#vat_tin_number').val(response.vat_tin_number);
        //         $('#vat_registration_date').val(response.vat_registration_date);
        //         $('#interstate_sales_tax_number').val(response.interstate_sales_tax_number);
        //         // $('#vat_registration_date').val(response.cst_registration_date);
        //         $('#e_vat_periodicity_id').val(response.e_vat_periodicity_id);
        //         $('#enable_vat_calculation_on_quantity').val(response.enable_vat_calculation_on_quantity);
        //         $('#enable_vat_calculation_on_stock_item_rate').val(response.enable_vat_calculation_on_stock_item_rate);
        //         // $('#activate_tds_for_stock_items').val(response.is_under_npv_scheme);
        //         // tds_surcharge_cess_details
               
        //         $('#define_commodity_and_tax_as_masters').val(response.define_commodity_and_tax_as_masters);
        //         $('#deactivate_from').val(response.deactivate_from);
        //         $('#circle_office').val(response.circle_office);
        //         $('#status_of_business').val(response.status_of_business);
        //         $('#nature_of_business').val(response.nature_of_business);
        //         // $('#tcs_premises_building_name').val(response.ss_msi_lsi_registration_number);
        //         $('#authorised_person').val(response.authorised_person);
        //         $('#vat_status_designation').val(response.status_designation);
        //         $('#vat_place').val(response.place);
        //         $('#vat_district').val(response.district);
        //         $('#cst_rate_against_form_c').val(response.cst_rate_against_form_c);
        //         $('#cst_effective_date').val(response.cst_effective_from);
        //          $('#tcs_person_std_code').val(response.cst_effective_to);
        //         // tds_std_code
               
        //         $('#vat_rate').val(response.vat_rate);
        //         $('#vat_cess').val(response.cess_rate);
        //         $('#vat_effective_date').val(response.vat_effective_from);
        //         $('#vat_effective_date').val(response.vat_effective_to);
        //         $('#vat_tax_type_id').val(response.vat_tax_type_id);
        //         $('#vat_schedule_id').val(response.vat_schedule_id);
        //         // $('#tcs_email_id').val(response.vat_schedule_serial_number);
        //         $('#type_of_goods_id').val(response.type_of_goods_id);
        //         $('#nature_of_goods_id').val(response.nature_of_goods_id);
        //         $('#commodity_name').val(response.commodity_name);
        //         $('#commodity_code').val(response.commodity_code);
        //         $('#sub_commodity_code').val(response.sub_commodity_code);
             
            
             
        //     },
        //     error: function (jqXHR, textStatus, errorThrown) {
        //         console.log(textStatus, errorThrown);
        //     }
        // });
          }
    });

    function populateVATModal(){
        $('#vat_details_modal').modal('show');
        
        url = BASE_URL + "index.php/" + accountsController + "/get_vat_details";
        $.ajax({
            url: url,
            type: 'POST',
            data: {li_token: token, company_id: company_id },
            dataType: 'json',
            success: function (response) {
                console.log("respone of vat is is",response);
              
                $('#vat_state_id').val(response.state_id);
                $('#vat_applicable_from').val(response.vat_applicable_from);
                $('#vat_tin_number').val(response.vat_tin_number);
                $('#vat_registration_date').val(response.vat_registration_date);
                $('#interstate_sales_tax_number').val(response.interstate_sales_tax_number);
                // $('#vat_registration_date').val(response.cst_registration_date);
                $('#e_vat_periodicity_id').val(response.e_vat_periodicity_id);
                $('#enable_vat_calculation_on_quantity').val(response.enable_vat_calculation_on_quantity);
                $('#enable_vat_calculation_on_stock_item_rate').val(response.enable_vat_calculation_on_stock_item_rate);
                // $('#activate_tds_for_stock_items').val(response.is_under_npv_scheme);
                // tds_surcharge_cess_details
               
                $('#define_commodity_and_tax_as_masters').val(response.define_commodity_and_tax_as_masters);
                $('#deactivate_from').val(response.deactivate_from);
                $('#circle_office').val(response.circle_office);
                $('#status_of_business').val(response.status_of_business);
                $('#nature_of_business').val(response.nature_of_business);
                // $('#tcs_premises_building_name').val(response.ss_msi_lsi_registration_number);
                $('#authorised_person').val(response.authorised_person);
                $('#vat_status_designation').val(response.status_designation);
                $('#vat_place').val(response.place);
                $('#vat_district').val(response.district);
                $('#cst_rate_against_form_c').val(response.cst_rate_against_form_c);
                $('#cst_effective_date').val(response.cst_effective_from);
                 $('#tcs_person_std_code').val(response.cst_effective_to);
                // tds_std_code
               
                $('#vat_rate').val(response.vat_rate);
                $('#vat_cess').val(response.cess_rate);
                $('#vat_effective_date').val(response.vat_effective_from);
                $('#vat_effective_date').val(response.vat_effective_to);
                $('#vat_tax_type_id').val(response.vat_tax_type_id);
                $('#vat_schedule_id').val(response.vat_schedule_id);
                // $('#tcs_email_id').val(response.vat_schedule_serial_number);
                $('#type_of_goods_id').val(response.type_of_goods_id);
                $('#nature_of_goods_id').val(response.nature_of_goods_id);
                $('#commodity_name').val(response.commodity_name);
                $('#commodity_code').val(response.commodity_code);
                $('#sub_commodity_code').val(response.sub_commodity_code);
             
            
             
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });

    }


$('.yes_no,.enable').keydown(function (e) {

if ($("#company_features").hasClass("show")) {
    if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');
        currentId = $(this).attr('id');
        if (company_feature_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');

            var next = parseInt(currentTabindex) + 1;

            var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

            if (currentTabindex >= 10200 && currentTabindex < 10400) {

                if ($("#" + currentId).is('[data-target~="#company_feature_save"]')) {//when you press enter key from last input of company creation
                    $('#company_feature_save').modal('toggle');
                }
                

                while (next < 10400) {

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

$('#gst_rate').on('change', function () {
         var gatrate_value = $(this).val();
        

         url = BASE_URL + "index.php/" + accountsController + "/get_gstrate_details";
        $.ajax({
            url: url,
            type: 'POST',
            data: { gatrate_value: gatrate_value, li_token: token, company_id: company_id },
            dataType: 'json',
            success: function (response) {
                console.log("respone of gst rate details  is",response);
                if (gatrate_value === 'yes') {
               
                $('#hsn_sac_details_id').val(response.hsn_sac_details_id);
                $('#hsn_gst_classification_id').val(response.hsn_gst_classification_id);
                
                $('#hsn_sac_number').val(response.hsn_sac_number);
                $('#hsn_sac_description').val(response.hsn_sac_description);
                $('#gst_rate_details_id').val(response.gst_rate_details_id);
                $('#gst_classification_id').val(response.gst_gst_classification_id);
                $('#taxability_type_id').val(response.taxability_type_id);
                
                $('#igst_rate').val(response.igst_rate);
                $('#cgst_rate').val(response.cgst_rate);
                $('#sgst_utgst_rate').val(response.sgst_utgst_rate);
                $('#cess_valuation_type_id').val(response.cess_valuation_type_id);
                $('#cess_rate').val(response.cess_rate);
                $('#applicable_for_reverse_charge').val(response.applicable_for_reverse_charge);
                $('#eligible_for_input_tax_credit').val(response.eligible_for_input_tax_credit);
                $('#interstate_threshold_limit').val(response.interstate_threshold_limit);
                $('#intrastate_threshold_limit').val(response.intrastate_threshold_limit);
                $('#threshold_limit_id').val(response.threshold_limit_id);
                $('#print_e_way_bill_with_invoice').val(response.print_e_way_bill_with_invoice);
                $('#send_e_way_bill_with_e_invoice_in_sales').val(response.send_e_way_bill_with_e_invoice_in_sales);
                $('#ignore_differences_in_tax_values_up_to').val(response.ignore_differences_in_tax_values_up_to);
                $('#ignore_differences_in_tax_id').val(response.ignore_differences_in_tax_id);
                $('#show_gst_advances_for_adjustments_in_trasaction').val(response.show_gst_advances_for_adjustments_in_trasaction);
                $('#gst_advances_for_adjustments_applicable_from').val(response.gst_advances_for_adjustments_applicable_from);
                             
            }
             
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });



</script>
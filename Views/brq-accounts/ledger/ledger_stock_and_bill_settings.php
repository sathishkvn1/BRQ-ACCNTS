<div class="modal fade backdrop modal_common modal_centered_lg inventory_modal" 
            id="ledger_stock_and_bill_settings_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="main_head">
                            <h6>Stock and Bill Settings</h6>
                            <i class="fa fa-close" onclick="cancelAccountSupplier();"></i>
                        </div>
                    </div>
                    <!-- <div class="modal-body" style="max-height: 70vh; overflow-y: auto;"> -->
                    <div class="modal-body" >
                        <div class="row">
                            <!-- Left Side Start Here -->
                            <div class="col-md-12">

                                <!-- Left Content -->
                                <div class="row">

                                    <!-- Single features Section Start Here -->
                                    <div class="col-md-12">
                                   
                                       <!-- Single Row Start Here -->
                                         <div class="row mt-3">
                                            <div class="col-md-6">
                                                <label>Pricing level applicable<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable " tabindex="20400" name="pricing_level_applicable" id="pricing_level_applicable">
                                                    <?php foreach ($acc_stock_gst_applicability as $acc_stock_gst_applicability): ?>
                                                        <option value="<?php echo $acc_stock_gst_applicability->id; ?>"><?php echo $acc_stock_gst_applicability->gst_applicability; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                          </div>
                                        <!-- Single Row End Here -->
                                         <!-- Single Row Start Here -->
                                        <div class="row" >
                                            <div class="col-md-6">
                                                <label>Maintain balances bil by bill<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="maintain_balances_bil_by_bill"
                                                    name="maintain_balances_bil_by_bill" tabindex="20401">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <div id="maintain_balance_bill_by_bill_sub_content">

                                            <!-- Single Row start Here -->
                                            <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Default Credit Period<span class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <input type="text" class="enable ratewithpercentage"  name="default_credit_period"
                                                            id="default_credit_period" tabindex="20402">
                                                        <span>Days</span>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row" >
                                                <div class="col-md-6">
                                                    <label>Check for credit days during voucher entry<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="yes_no enable" id="check_fo_credit_days_during_voucher_entry"
                                                        name="check_fo_credit_days_during_voucher_entry" tabindex="20403">
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                        </div>
                                            <!-- Single Row Start Here -->
                                            <div class="row" >
                                                <div class="col-md-6">
                                                    <label>Inventory values are affected<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="yes_no enable" id="inventory_values_are_affected"
                                                        name="inventory_values_are_affected" tabindex="20404">
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row" >
                                                <div class="col-md-6">
                                                    <label>Cost centres are applicable<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="yes_no enable" id="cost_centres_are_applicable"
                                                        name="cost_centres_are_applicable" tabindex="20405">
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row" >
                                                <div class="col-md-6">
                                                    <label>Activate interest calculation<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="yes_no enable" id="activate_interest_calculation"
                                                        name="activate_interest_calculation" tabindex="20406">
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <div id="activate_interest_calculation_subcontent">
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Calculate Interest Transaction-by-Transaction<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="calculate_interest_transaction_by_transaction"
                                                            name="calculate_interest_transaction_by_transaction" tabindex="20407">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                   <!-- Single Row End Here -->
                                           
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Calculate Interest Transaction-by-Transaction<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="calculate_interest_transaction_by_transaction"
                                                            name="calculate_interest_transaction_by_transaction" tabindex="20408">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Override Parameter for each Transaction<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="override_parameter_for_each_transaction"
                                                            name="override_parameter_for_each_transaction" tabindex="20409">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Include Transaction date for interest calculation<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="calculate_interest_transaction_by_transaction"
                                                            name="calculate_interest_transaction_by_transaction" tabindex="20410">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Include Transaction date for interest calculation<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="calculate_interest_transaction_by_transaction"
                                                            name="calculate_interest_transaction_by_transaction" tabindex="20411">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>For ammounts added<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="for_ammounts_added"
                                                            name="for_ammounts_added" tabindex="20412">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>For ammounts deducted<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="for_ammounts_deducted"
                                                            name="for_ammounts_deducted" tabindex="20413">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Single Row start Here -->
                                                <div class="row">
                                                        <div class="col-md-6">
                                                            <label>Interest Rate<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable ratewithpercentage"  name="interest_rate"
                                                                id="interest_rate" tabindex="20414">
                                                            <span>%</span>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                                 <!-- Single Row start Here -->
                                                 <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Calculation peroid<span class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="enable"  name="calculation_period" id="calculation_period" tabindex="20415">
                                                                <?php foreach ($acc_gst_taxability_type as $acc_gst_taxability_type): ?>
                                                                    <option value="<?php echo $acc_gst_taxability_type->id; ?>"><?php echo $acc_gst_taxability_type->gst_taxability_type; ?></option>
                                                                <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Calculation on<span class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select  class="enable"  name="calculation_on" id="calculation_on" tabindex="20416">
                                                                <?php foreach ($acc_gst_taxability_type as $acc_gst_taxability_type): ?>
                                                                    <option value="<?php echo $acc_gst_taxability_type->id; ?>"><?php echo $acc_gst_taxability_type->gst_taxability_type; ?></option>
                                                                <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Single Row End Here -->
                                            


                                            </div>

                                     
                                    </div>
                                    <!-- Single features Section End Here -->

                                    

                                </div>
                                     <!-- Single  Section Start Here -->

                                </div>
                                <!-- Left Content -->
                            </div>
                            <!-- Left Side End Here -->

                        </div>
                        
                   
                        <div class="border_bottom_for_save_cancel"> </div>
                            <div class="row save_cancel_section ">
                                <div class="col-12">
                                     <button id="save_account_supplier_creation_bill_btn" class="save_account_supplier_creation_btn  btn" type="button" tabindex="20417">
                                        <i class="fas fa-calendar-check"></i><span>S</span>ave
                                    </button>
                                    <button onclick="cancelAccountSupplier();" class="cancel_account_supplier_creation_btn btn" type="button" tabindex="20418">
                                        <span>C</span>ancel
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
    </div>
      <!----------- bottom-js ---------------------->
		<?php include("application/views/brq-accounts/bottom-js.php"); ?>
		<!------------- bottom-js end --------------->
        <script>
         
           
           $( document ).ready(function() {

           
            $('#ledger_stock_and_bill_settings_modal').on('shown.bs.modal', function () {
            $('#pricing_level_applicable').focus();

             });
            

            $('#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input').prop('disabled', true); // in success
            $("#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input").removeClass("enable");
         
            $('#activate_interest_calculation_subcontent select,#activate_interest_calculation_subcontent input').prop('disabled', true); // in success
            $("#activate_interest_calculation_subcontent select,#activate_interest_calculation_subcontent input").removeClass("enable");
         


    
           });

    </script>
    <script>
     
        $("#maintain_balances_bil_by_bill").on("change",function(){
          
            
            var maintain_balances_bil_by_bill_val = $("#maintain_balances_bil_by_bill").val();
            if(maintain_balances_bil_by_bill_val=="yes")
            {
            
                $('#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input').prop('disabled', false);
                $("#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input").addClass("enable");

            }
           
            else if(maintain_balances_bil_by_bill_val=="no")
            {
               
                $('#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input').prop('disabled', true);
                $("#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input").removeClass("enable");

      
            }
           


        });
        $("#activate_interest_calculation").on("change",function()
        {
       
           
           
            var activate_interest_calculation_val = $("#activate_interest_calculation").val();
            if(activate_interest_calculation_val=="yes")//if Asper Company /Stock Group disable all ement under sac
            {
                
                $('#activate_interest_calculation_subcontent select,#activate_interest_calculation_subcontent input').prop('disabled', false);
                $("#activate_interest_calculation_subcontent select,#activate_interest_calculation_subcontent input").addClass("enable");


            }
            else if(activate_interest_calculation_val=="no")//if Asper Company hide gst_classification_id
            {
                $('#activate_interest_calculation_subcontent select,#activate_interest_calculation_subcontent input').prop('disabled', true);
                $("#activate_interest_calculation_subcontent select,#activate_interest_calculation_subcontent input").removeClass("enable");
            }
            
           
        });


    

      

    </script>
    <script>


</script>

<script>
$('.yes_no,.enable').keydown(function (e) {

    if ($("#ledger_stock_and_bill_settings_modal").hasClass("show")) {
        if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');
        currentId = $(this).attr('id');
                if(currentId == 'calculation_on' ){
                    $('#save_account_supplier_creation_bill_btn').focus();
                    event.preventDefault();
                }
                else if(currentId == 'activate_interest_calculation'){
                    $('#save_account_supplier_creation_bill_btn').focus();
                    event.preventDefault();
                }


        if (company_feature_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');

            var next = parseInt(currentTabindex) + 1;

            var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

            if (currentTabindex >= 20400  && currentTabindex < 20600 ) {

                // if ($("#" + currentId).is('[data-target~="#company_feature_save"]')) {//when you press enter key from last input of company creation
                //     $('#company_feature_save').modal('toggle');
                // }
                

                while (next < 20600  ) {

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
      
        if (e.which === 67) {

        }
       
    }


});
    </script>

    <script>

var token 				= $("#csrf-token").attr('content'); //CSRF token newly added by sandeep
var BASE_URL = "<?php echo base_url(); ?>";
 
$('#save_gst_rate_details').click(function() {
               
    
    var formData  = new FormData();

    
    formData.append('gst_applicable', $("#gst_applicable").val()); 
    formData.append('hsn_sac_details_id', $("#hsn_sac_details_id").val()); 
    

	formData.append('source_of_details', $("#source_of_details").val()); 
	formData.append('hsn_gst_classification_id', $("#hsn_gst_classification_id").val()); 
	formData.append('hsn_sac_number', $("#hsn_sac_number").val()); 
	formData.append('hsn_sac_description', $("#hsn_sac_description").val());
	formData.append('gst_rate_details_id', $("#gst_rate_details_id").val());
	formData.append('gst_gst_classification_id', $("#gst_gst_classification_id").val());
	formData.append('taxability_type_id', $("#taxability_type_id").val());
	
	formData.append('igst_rate', $("#igst_rate").val());
	formData.append('cgst_rate', $("#cgst_rate").val());
	formData.append('sgst_utgst_rate', $("#sgst_utgst_rate").val());


    formData.append('cess_valuation_type_id', $("#cess_valuation_type_id").val());

	formData.append('cess_rate', $("#cess_rate").val());
	formData.append('applicable_for_reverse_charge', $("#applicable_for_reverse_charge").val());
    formData.append('eligible_for_input_tax_credit', $("#eligible_for_input_tax_credit").val());
    formData.append('type_of_supply', $("#type_of_supply").val());
    
	

	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsInventory/save_gst_rate_details/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {

            $("#rowID").val(response.insertedRowId);
            $('#provide_stock_and_bill_details').modal('hide'); 
            $('stock_item_master_additional_details').show();
            $("#set_hsn_sac_gst_details").focus();

            flag_id=($("#flag_id").val());

            if(flag_id === "0")
            {
                toast_message('success','Saved',response.message)
            }
            else if(flag_id === "1")
            {
            
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

function cancelAccountSupplier()
{
    $('#ledger_stock_and_bill_settings_modal').modal('hide');
    $("#provide_contact_person_details").focus();
    $("#ledger_supplier_customer_creation_modal").modal('show');

   
}

function handleEscapeKeyAccountSupplier(event) {
    if (event.key === "Escape") {
        cancelAccountSupplier();
        
    }
}
$('#ledger_stock_and_bill_settings_modal').on('keydown', handleEscapeKeyAccountSupplier);
</script>
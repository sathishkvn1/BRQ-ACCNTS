<style>
#ledger_stock_and_bill_settings_modal .modal-content  {
    min-height: 582px!important;
}

</style>


<div class="modal fade backdrop modal_common modal_centered_lg inventory_modal" 
            id="ledger_stock_and_bill_settings_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="main_head">
                            <h6>Stock and Bill Settings</h6>
                            <i class="fa fa-close" onclick="cancelBillSetting();"></i>
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
                                                <select class="enable " tabindex="20400" name="applicable_price_level_id" id="applicable_price_level_id">
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
                                                <select class="yes_no enable" id="maintain_balances_bill_by_bill"
                                                    name="maintain_balances_bill_by_bill" tabindex="20401">
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
                                                    <select class="yes_no enable" id="check_for_credit_days_during_voucher_entry"
                                                        name="check_for_credit_days_during_voucher_entry" tabindex="20403">
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                        </div>
                                           <!-- Single Row start Here -->
                                           <div class="row">
                                                    <div class="col-md-6">
                                                        <label>Credit Limit<span class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="text" class="enable"  name="credit_limit"
                                                            id="credit_limit" tabindex="20404">
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row" >
                                                <div class="col-md-6">
                                                    <label>Inventory values are affected<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="yes_no enable" id="inventory_values_are_affected"
                                                        name="inventory_values_are_affected" tabindex="20405">
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
                                                    <select class="yes_no enable" id="cost_centers_are_applicable"
                                                        name="cost_centers_are_applicable" tabindex="20406">
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
                                                        name="activate_interest_calculation" tabindex="20407">
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
                                                            name="calculate_interest_transaction_by_transaction" tabindex="20408">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                   <!-- Single Row End Here -->
                                           
                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Override Parameter for each Transaction<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="override_parameter_for_each_transaction"
                                                            name="override_parameter_for_each_transaction" tabindex="20410">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                 <!-- Single Row Start Here -->
                                                <div class="row mt-3">
                                                    <div class="col-md-6">
                                                        <label>Calculate Interest Based On<span class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="enable " tabindex="20411" name="calculate_interest_based_on_id" id="calculate_interest_based_on_id">
                                                            <?php foreach ($acc_accounts_voucher_date_type as $acc_accounts_voucher): ?>
                                                                <option value="<?php echo $acc_accounts_voucher->id; ?>"><?php echo $acc_accounts_voucher->voucher_date_type; ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Single Row End Here -->

                                                <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Include Transaction date for interest calculation<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="calculate_interest_transaction_by_transaction"
                                                            name="calculate_interest_transaction_by_transaction" tabindex="20412">
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
                                                        <select class="yes_no enable" id="include_trasaction_date_for_amount_added"
                                                            name="include_trasaction_date_for_amount_added" tabindex="20413">
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
                                                        <select class="yes_no enable" id="include_trasaction_date_for_amount_deducted"
                                                            name="include_trasaction_date_for_amount_deducted" tabindex="20414">
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
                                                                id="interest_rate" tabindex="20415">
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
                                                        <select  class="enable"  name="calculation_period_id" id="calculation_period_id" tabindex="20416">
                                                                <?php foreach ($acc_accounts_interest_style  as $acc_interest_style ): ?>
                                                                    <option value="<?php echo $acc_interest_style ->id; ?>"><?php echo $acc_interest_style ->interest_style; ?></option>
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
                                                        <select  class="enable"  name="calculate_on_id" id="calculate_on_id" tabindex="20417">
                                                                <?php foreach ($acc_accounts_interest_balances_style as $acc_interest_balances_style): ?>
                                                                    <option value="<?php echo $acc_interest_balances_style->id; ?>"><?php echo $acc_interest_balances_style->interest_balances_style; ?></option>
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
                                     <button id="save_account_supplier_creation_bill_btn" class="save_account_supplier_creation_btn  btn" type="button" tabindex="20419">
                                        <i class="fas fa-calendar-check"></i><span>S</span>ave
                                    </button>
                                    <button onclick="cancelBillSetting();" class="cancel_account_supplier_creation_btn btn" type="button" tabindex="20420">
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
            $('#applicable_price_level_id').focus();

             });

               
        $("#maintain_balances_bill_by_bill").on("change",function(){
          
            
          var maintain_balances_bill_by_bill_val = $("#maintain_balances_bill_by_bill").val();
          if(maintain_balances_bill_by_bill_val=="yes")
          {
          
              $('#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input').prop('disabled', false);
              $("#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input").addClass("enable");

          }
         
          else if(maintain_balances_bill_by_bill_val=="no")
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


            $('#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input').prop('disabled', true); // in success
            $("#maintain_balance_bill_by_bill_sub_content select,#maintain_balance_bill_by_bill_sub_content input").removeClass("enable");
         
            $('#activate_interest_calculation_subcontent select,#activate_interest_calculation_subcontent input').prop('disabled', true); // in success
            $("#activate_interest_calculation_subcontent select,#activate_interest_calculation_subcontent input").removeClass("enable");
         

    
           });

    </script>



<script>
$('.yes_no,.enable').keydown(function (e) {

    if ($("#ledger_stock_and_bill_settings_modal").hasClass("show")) {
        if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');
        currentId = $(this).attr('id');
                if(currentId == 'calculate_on_id' ){
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
 
$('#save_account_supplier_creation_bill_btn').click(function() {
               
    
    var formData  = new FormData();

    
    formData.append('applicable_price_level_id', $("#applicable_price_level_id").val()); 
    formData.append('maintain_balances_bill_by_bill', $("#maintain_balances_bill_by_bill").val()); 
	formData.append('default_credit_period', $("#default_credit_period").val()); 
	formData.append('check_for_credit_days_during_voucher_entry', $("#check_for_credit_days_during_voucher_entry").val()); 
	formData.append('credit_limit', $("#credit_limit").val()); 
	formData.append('inventory_values_are_affected', $("#inventory_values_are_affected").val());
	formData.append('cost_centers_are_applicable', $("#cost_centers_are_applicable").val());
	formData.append('activate_interest_calculation', $("#activate_interest_calculation").val());
	formData.append('calculate_interest_transaction_by_transaction', $("#calculate_interest_transaction_by_transaction").val());
	formData.append('override_parameter_for_each_transaction', $("#override_parameter_for_each_transaction").val());
	formData.append('calculate_interest_based_on_id', $("#calculate_interest_based_on_id").val());
	formData.append('include_trasaction_date_for_amount_added', $("#include_trasaction_date_for_amount_added").val());
    formData.append('include_trasaction_date_for_amount_deducted', $("#include_trasaction_date_for_amount_deducted").val());
    formData.append('interest_rate', $("#interest_rate").val());
    formData.append('calculation_period_id', $("#calculation_period_id").val());
    formData.append('calculate_on_id', $("#calculate_on_id").val());
    
	

	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsLedger/save_stock_and_bill_settings/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {


            flag_id=($("#flag_id").val());

            if(flag_id === "0")
            {
                $("#rowID").val(response.insertedRowId);
                toast_message('success','Saved',response.message);
                
            }
            else if(flag_id === "1")
            {
            
                    toast_message('success','Updated',response.message)
            }
            cancelBillSetting();

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

function cancelBillSetting()
{
    $('#ledger_stock_and_bill_settings_modal').modal('hide');
    $("#provide_contact_person_details").focus();
    $("#ledger_supplier_customer_creation_modal").modal('show');

   
}

function handleEscapeKeyAccountSupplier(event) {
    if (event.key === "Escape") {
        cancelBillSetting();
        
    }
}
$('#ledger_stock_and_bill_settings_modal').on('keydown', handleEscapeKeyAccountSupplier);
</script>
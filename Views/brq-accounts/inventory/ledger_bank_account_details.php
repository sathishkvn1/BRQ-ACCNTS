
    <div class="modal fade backdrop modal_common modal_centered_lg  inventory_modal " 
        id="ledger_bank_account_details_modal"  tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Bank Account Details </h6>
                        <i class="fa fa-close close_modal" onclick="cancelBankAccountDetails();" id=""></i>
                    </div>
                </div>
                <div class="modal-body ">
                    <div class="row ">
                        <!-- Left Side Start Here -->
                        <div class="col-md-12 ">
                            <!-- Left Content -->   
                            <div class="row" style="padding-top:8px">
                                <!-- Single features Section Start Here -->
                                <div class="col-md-12" >
                                    <!-- ---single row start here---- -->
                               

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Transaction Type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable" tabindex="21400" name="bank_transaction_type_id" id="bank_transaction_type_id">
                                                <?php foreach ($acc_bank_transaction_types as $acc_bank_transaction_types): ?>
                                                        <option value="<?php echo $acc_bank_transaction_types->id; ?>"><?php echo $acc_bank_transaction_types->bank_transaction_type; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                    
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Account Holder's Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="bank_account_holders_name" id="bank_account_holders_name"
                                                tabindex="21401">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                     <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Bank Account Number<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable "
                                                name="bank_account_number" id="bank_account_number"
                                                tabindex="21402">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>IFSC Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable "
                                                name="bank_ifsc_code" id="bank_ifsc_code"
                                                tabindex="21403">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Swift Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable "
                                                name="bank_swift_code" id="bank_swift_code"
                                                tabindex="21404">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Bank Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="bank_name" id="bank_name"
                                                tabindex="21405">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                     <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Branch<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="bank_branch" id="bank_branch"
                                                tabindex="21406">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                            <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>BSR Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="bank_bsr_code" id="bank_bsr_code"
                                                tabindex="21407">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                            
                            </div>
                    	</div>

						
                </div>
			
                    <div class="border_bottom_for_save_cancel">

                    </div>
                    <div class="row save_cancel_section">
                        <div class="col-12" style="display: flex !important;flex-direction: row-reverse !important;">
                        
                            <button  onclick="cancelBankAccountDetails();" class="cancel_account_supplier_creation_btn btn ml-4" type="button" tabindex="21409" >
                                <span>C</span>ancel
                            </button>
                           
                            <button id="save_bank_account_details"  class="save_account_supplier_creation_btn btn ml-4" tabindex="21408" type="button">
                                <i class="fas fa-calendar-check"></i><span>S</span>ave
                            </bottom>

                            
                        </div>
				    </div>
				

            </div>
        </div>
    </div> 
</div>
</div>

    <!-- --------- bottom-js ---------------------->
	<?php include("application/views/brq-accounts/bottom-js.php"); ?>
	<!------------- bottom-js end -------------  -->
    <script>
         
           
           $( document ).ready(function() {
            
         
            $('#ledger_bank_account_details_modal').on('shown.bs.modal', function () {
                $('#bank_transaction_type_id').focus();

                });


              

           });
    
    </script>
  
    <script>
$('.yes_no,.enable').keydown(function (e) {

if ($("#ledger_bank_account_details_modal").hasClass("show")) {
    if (e.which === 13) {
    company_feature_field_id = $(this).prop('type');

    currentId = $(this).attr('id');
   
   if(currentId == 'bank_bsr_code' ){
       $('#save_bank_account_details').focus();
       event.preventDefault();
   }

    if (company_feature_field_id !== 'submit') {
        currentTabindex = $(this).attr('tabindex');

        var next = parseInt(currentTabindex) + 1;

        var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

        if (currentTabindex >= 21400 && currentTabindex < 21600) {

            // if ($("#" + currentId).is('[data-target~="#company_feature_save"]')) {//when you press enter key from last input of company creation
            //     $('#company_feature_save').modal('toggle');
            // }
            

            while (next < 21800) {

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


$('#save_bank_account_details').click(function() {
               
    
    var formData  = new FormData();

	formData.append('bank_transaction_type_id', $("#bank_transaction_type_id").val()); 
	formData.append('bank_account_holders_name', $("#bank_account_holders_name").val()); 
	formData.append('bank_account_number', $("#bank_account_number").val()); 
	formData.append('bank_ifsc_code', $("#bank_ifsc_code").val());
	formData.append('bank_swift_code', $("#bank_swift_code").val());
	formData.append('bank_name', $("#bank_name").val());
	formData.append('bank_branch', $("#bank_branch").val());
	formData.append('bank_bsr_code', $("#bank_bsr_code").val());
	
	
	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsLedger/save_bank_account_details/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
            

          flag_id=($("#flag_id").val());

          if(flag_id === "0")
          {
            $("#rowID").val(response.insertedRowId); //if Insert, rowId value changes to insertRowId
            
             toast_message('success','Saved',response.message);
             cancelBankAccountDetails();
             
          }
          else if(flag_id === "1")
          {
           
            toast_message('success','Updated',response.message);
            cancelBankAccountDetails();
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
function cancelBankAccountDetails()
{

    $('#ledger_bank_account_details_modal').modal('hide');
    // $("#set_vat_details").focus()
    $("#ledger_supplier_customer_creation_modal").modal('show');
   
}

function handleEscapeBankAccountDetails(event) {
    if (event.key === "Escape") {
        cancelBankAccountDetails();
        
    }
}
$('#ledger_bank_account_details_modal').on('keydown', handleEscapeBankAccountDetails);

</script>

  
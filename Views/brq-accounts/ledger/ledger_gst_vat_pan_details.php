
    <div class="modal fade backdrop modal_common modal_centered_lg  inventory_modal " 
        id="ledger_gst_vat_pan_details_modal"  tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>TAX / PAN Registered Details </h6>
                        <i class="fa fa-close close_modal" onclick="cancelTaxPanDetails();" id=""></i>
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
                                    <h6 class="h6 bold">GST Details</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Registration Type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable" tabindex="21201" name="gst_registration_type_id" id="gst_registration_type_id">
                                                <?php foreach ($acc_gst_registration_type as $acc_gst_registration_type): ?>
                                                        <option value="<?php echo $acc_gst_registration_type->id; ?>"><?php echo $acc_gst_registration_type->gst_registration_type; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                     <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Assessee of Other Territory<span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="yes_no  enable" tabindex="21202"
                                            name="is_assessee_of_other_territory"
                                            id="is_assessee_of_other_territory">
                                            <option value="yes">Yes</option>
                                            <option value="no" selected>No</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Row End Here -->
                                <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>GSTIN/UIN<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable"
                                                name="gstin_uin" id="gstin_uin"
                                                tabindex="21203">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Use Legder as common Party<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="21204"
                                                name="use_ledger_as_common_party"
                                                id="use_ledger_as_common_party">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Place of Supply(for Outwards)<span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="yes_no  enable" tabindex="21205"
                                            name="place_of_supply_for_outwards"
                                            id="place_of_supply_for_outwards">
                                            <?php foreach ($acc_state_master2 as $acc_state_master2): ?>
                                                            <option value="<?php echo $acc_state_master2->id; ?>"><?php echo $acc_state_master2->state_name; ?></option>
                                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Is the Party a Transporter<span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="yes_no  enable" tabindex="21206"
                                            name="is_party_a_transporter"
                                            id="is_party_a_transporter">
                                            <option value="yes">Yes</option>
                                            <option value="no" selected>No</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Row End Here -->
                                  <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Transporter ID<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable "
                                                name="transporter_id" id="transporter_id"
                                                tabindex="21207">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                         

                                    <h6 class="h6 bold">Vat Details</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Type of Dealers<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable" tabindex="21208" name="vat_type_id" id="vat_type_id">
                                                <?php foreach ($acc_accounts_dealer_vat_type as $acc_accounts_dealer_vat_type): ?>
                                                        <option value="<?php echo $acc_accounts_dealer_vat_type->id; ?>"><?php echo $acc_accounts_dealer_vat_type->dealer_vat_type; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>VAT TIN No<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable "
                                                name="vat_tin_number" id="vat_tin_number"
                                                tabindex="21209">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>CST No<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable "
                                                name="cst_number" id="cst_number"
                                                tabindex="21210">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                   <!-- Single Row Start Here -->
                                  <div class="row">
                                    <div class="col-md-6">
                                        <label>Sales/purchases Against Form C<span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="yes_no  enable" tabindex="21211"
                                            name="sales_purchase_against_form_c"
                                            id="sales_purchase_against_form_c">
                                            <option value="yes">Yes</option>
                                            <option value="no" selected>No</option>
                                        </select>
                                    </div>
                                 </div>
                                <!-- Single Row End Here -->
                             

                                    <h6 class="h6 bold">PAN Details</h6>

                                     <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>PAN No<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable "
                                                name="pan_number" id="pan_number"
                                                tabindex="21212">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>PAN Effective Date<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" class="enable "
                                                name="pan_effective_date" id="pan_effective_date"
                                                tabindex="21213">
                                        </div>
                                    </div>
                                   <!-- Single Row End Here -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Name on PAN<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="name_on_the_pan" id="name_on_the_pan"
                                                tabindex="21214">
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
                        
                            <button  onclick="cancelTaxPanDetails();" class="cancel_account_supplier_creation_btn btn ml-4" type="button" tabindex="21217" >
                                <span>C</span>ancel
                            </button>
                            <button id="new_tax_pan_details" class="new_account_supplier_creation_btn btn ml-4"  type="button" tabindex="21216" >
                                <span>N</span>ew
                            </button>
                           
                            <button id="save_tax_pan_details"  class="save_account_supplier_creation_btn btn ml-4" tabindex="21215" type="button">
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
         
           
           $(document).ready(function() {
            
         
            $('#ledger_gst_vat_pan_details_modal').on('shown.bs.modal', function () {
                $('#gst_registration_type_id').focus();

                });


              

           });
    
    </script>
  
    <script>
$('.yes_no,.enable').keydown(function (e) {

if ($("#ledger_gst_vat_pan_details_modal").hasClass("show")) {
    if (e.which === 13) {
    company_feature_field_id = $(this).prop('type');

    currentId = $(this).attr('id');
   
   if(currentId == 'name_on_the_pan' ){
       $('#save_tax_pan_details').focus();
       event.preventDefault();
   }

    if (company_feature_field_id !== 'submit') {
        currentTabindex = $(this).attr('tabindex');

        var next = parseInt(currentTabindex) + 1;

        var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

        if (currentTabindex >= 21200 && currentTabindex < 21400) {

            // if ($("#" + currentId).is('[data-target~="#company_feature_save"]')) {//when you press enter key from last input of company creation
            //     $('#company_feature_save').modal('toggle');
            // }
            

            while (next < 21400) {

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


$('#save_tax_pan_details').click(function() {
               
    
    var formData  = new FormData();
	formData.append('gst_registration_type_id', $("#gst_registration_type_id").val()); 
	formData.append('is_assessee_of_other_territory', $("#is_assessee_of_other_territory").val()); 
	formData.append('gstin_uin', $("#gstin_uin").val()); 
	formData.append('use_ledger_as_common_party', $("#use_ledger_as_common_party").val());
	formData.append('is_party_a_transporter', $("#is_party_a_transporter").val());
	formData.append('transporter_id', $("#transporter_id").val());
	formData.append('vat_type_id', $("#vat_type_id").val());
	formData.append('place_of_supply_for_outwards', $("#place_of_supply_for_outwards").val());
    
	
	formData.append('vat_tin_number', $("#vat_tin_number").val());
	formData.append('cst_number', $("#cst_number").val());
    	
	formData.append('sales_purchase_against_form_c', $("#sales_purchase_against_form_c").val());
	formData.append('pan_number', $("#pan_number").val());
	formData.append('pan_effective_date', $("#pan_effective_date").val());
	formData.append('name_on_the_pan', $("#name_on_the_pan").val());
	
	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsLedger/save_ledger_gst_vat_pan_details_modal/",
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
             cancelTaxPanDetails();

             
          }
          else if(flag_id === "1")
          {
      
         
            toast_message('success','Updated',response.message);
            cancelTaxPanDetails();
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
$('#new_tax_pan_details').click(function(){



$('#ledger_gst_vat_pan_details_modal input,#ledger_gst_vat_pan_details_modal textarea').val('');

        var selectElements = document.querySelectorAll('select:not(.yes_no)');
        selectElements.forEach(function(select) {
            select.selectedIndex = 0;
        });
       

        $("#gst_registration_type_id").focus();

});

function cancelTaxPanDetails()
{

    $('#ledger_gst_vat_pan_details_modal').modal('hide');
    // $("#set_vat_details").focus()
    $("#ledger_supplier_customer_creation_modal").modal('show');
   
}

function handleEscapeTaxPanDetails(event) {
    if (event.key === "Escape") {
        cancelTaxPanDetails();
        
    }
}
$('#ledger_gst_vat_pan_details_modal').on('keydown', handleEscapeTaxPanDetails);

</script>

  
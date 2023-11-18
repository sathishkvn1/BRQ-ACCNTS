
    <div class="modal fade backdrop modal_common modal_centered_lg inventory_modal " 
            id="stock_item_master_additional_details"  tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="main_head">
                            <h6>Additional Details</h6>
                            <i class="fa fa-close" onclick="closeModalAdditionalDetails()"; id="stock_group_creation_cancel_icon"></i>
                        </div>
                    </div>
                    <div class="modal-body" >
                        <div class="row">
                            <!-- Left Side Start Here -->
                            <div class="col-md-12">

                                <!-- Left Content -->
                                <div class="row">

                                    <!-- Single features Section Start Here -->
                                    <div class="col-md-12">

                                           <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Provide Behaviour Options<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable " id="provide_behaviour_option"
                                                            name="provide_behaviour_option" tabindex="12600">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Set Components (BOM)<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="set_component_bill_of_material"
                                                            name="set_component_bill_of_material" tabindex="12601">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Set Standard Rates<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="set_standard_rates"
                                                            name="set_standard_rates" tabindex="12602">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Set/Modify default ledger for invoicing<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="set_modify_default_ledger_for_invoicing"
                                                            name="set_modify_default_ledger_for_invoicing" tabindex="12603">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Set HSN/SAC Gst Details<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="set_hsn_sac_gst_details"
                                                            name="set_hsn_sac_gst_details" tabindex="12604">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Set VAT Details<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="set_vat_details"
                                                            name="set_vat_details" tabindex="12605">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Set Opening Balance<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="set_opening_balance"
                                                            name="set_opening_balance" tabindex="12606">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->

                                    </div>
                                    <!-- Single features Section End Here -->

                                </div>
                                <!-- Left Content -->
                            </div>
                            <!-- Left Side End Here -->

                        </div>
                        
                    </div>
                    <div class="border_bottom_for_save_cancel"> </div>
                            <div class="row save_cancel_section ">
                                <div class="col-12">
                                    <button id="cancel_inventory_group_settings_btn" onclick="closeModalAdditionalDetails();" class="cancel_stock_btn btn" type="button" data-dismiss="modal"  tabindex="12607">
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
$('.yes_no,.enable').keydown(function (e) {

    if ($("#stock_item_master_additional_details").hasClass("show")) {
        if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');
        currentId = $(this).attr('id');
       
                if(currentId == 'set_opening_balance' ){
                    $('#cancel_inventory_group_settings_btn').focus();
                    event.preventDefault();
                }
                
        if (company_feature_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');

            var next = parseInt(currentTabindex) + 1;

            var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

            if (currentTabindex >= 12600 && currentTabindex < 12800) {


                while (next < 12800) {

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

$(document).ready(function() {
   
         // Replace 'myModal' with your actual modal ID
       
         $('#stock_item_master_additional_details').on('shown.bs.modal', function () {
            $('#provide_behaviour_option').focus();
            
            });
});

    </script>

<script>
$("#provide_behaviour_option").on("change", function() {
var provide_behaviour_option_val = $("#provide_behaviour_option").val();

if (provide_behaviour_option_val === "yes") {
    // Hide all modals except for the desired one
    $('[id^=modal]').modal('hide');
    
    // Show the desired modal
    $("#stock_item_master_behaviour_setting").modal('show');
}
 else if (provide_behaviour_option_val == "no") {
    
}
});
</script>

<script>
$("#set_hsn_sac_gst_details").on("change", function() {
var set_hsn_sac_gst_details_val = $("#set_hsn_sac_gst_details").val();

if (set_hsn_sac_gst_details_val === "yes") {
    // Hide all modals except for the desired one
    $('[id^=modal]').modal('hide');
    
    // Show the desired modal
    $("#stock_item_master_gst_rate_details").modal('show');
}
 else if (set_hsn_sac_gst_details_val == "no") {
    
}
});
</script>



<script>
$("#set_vat_details").on("change", function() {
var set_vat_details_val = $("#set_vat_details").val();


if (set_vat_details_val === "yes") {
    // Hide all modals except for the desired one
    $('[id^=modal]').modal('hide');
    
    // Show the desired modal
    $('#stock_item_master_set_vat_details').modal('show');
} else if (set_vat_details_val == "no") {
    
}
});
</script>
<script>
$("#set_component_bill_of_material").on("change", function() {
var set_component_bill_of_material_val = $("#set_component_bill_of_material").val();


if (set_component_bill_of_material_val === "yes") {
    // Hide all modals except for the desired one
    $('[id^=modal]').modal('hide');
    
    // Show the desired modal
    $('#stock_item_master_bill_of_material').modal('show');
} else if (set_component_bill_of_material_val == "no") {
    
}
});
</script>

<script>
$("#set_opening_balance").on("change", function() {
var set_opening_balance_val = $("#set_opening_balance").val();


if (set_opening_balance_val === "yes") {
    // Hide all modals except for the desired one
    $('[id^=modal]').modal('hide');
    


    // Show the desired modal
    $('#stock_item_master_set_opening_balance').modal('show');
  

} else if (set_opening_balance_val == "no") {
    
}
});
</script>





<script>

function closeModalAdditionalDetails()
{
    $('#stock_item_master_additional_details').modal('hide');
    $('#stock_item_creation_modal').modal('show');

   
}

function handleEscapeKeyAdditionalDetails(event) {
    if (event.key === "Escape") {
        closeModalAdditionalDetails();
        
    }
}
$('#stock_item_master_additional_details').on('keydown', handleEscapeKeyAdditionalDetails);
</script>




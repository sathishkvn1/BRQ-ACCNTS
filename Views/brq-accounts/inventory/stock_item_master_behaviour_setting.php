

    <div class="modal fade backdrop modal_common modal_centered_lg inventory_modal" 
            id="stock_item_master_behaviour_setting" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="main_head">
                            <h6>Item Behaviour Setting</h6>
                            <i class="fa fa-close" onclick="cancelBehaviourSetting()"; id="stock_group_creation_cancel_icon"></i>
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
                                                        <label>Ignore difference due to  physical counting <span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="ignore_difference_in_physical_stock"
                                                            name="ignore_difference_in_physical_stock" tabindex="12800">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Ignore negative balance<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="ignore_neagative_stock"
                                                            name="ignore_neagative_stock" tabindex="12801">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Treat all sales as new manufacture<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="treat_all_sales_as_new_manufacture"
                                                            name="treat_all_sales_as_new_manufacture" tabindex="12802">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Treat all purchase as consumed<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="treat_all_purchases_as_consumed"
                                                            name="treat_all_purchases_as_consumed" tabindex="12803">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Treat all rejections inward as scrap<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="treat_all_rejections_inward_as_scrap"
                                                            name="treat_all_rejections_inward_as_scrap" tabindex="12804">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row Start Here -->
                                           <div class="row" >
                                                    <div class="col-md-6">
                                                        <label>Use expired batches during voucher entry<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="use_expired_batches_during_voucher_entry"
                                                            name="use_expired_batches_during_voucher_entry" tabindex="12805">
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
                                <button id="save_behaviour_setting"  class="save_stock_btn btn" type="button" tabindex="12806">
                                    <i class="fas fa-calendar-check"></i><span>S</span>ave
                                </button>
                                <button onclick="cancelBehaviourSetting();" class="cancel_stock_btn btn" type="button" tabindex="12807">
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
         
            $('#stock_item_master_behaviour_setting').on('shown.bs.modal', function () {
            $('#ignore_difference_in_physical_stock').focus();

            });

           });
         
    </script>
  
    <script>
$('.yes_no,.enable').keydown(function (e) {

    if ($("#stock_item_master_behaviour_setting").hasClass("show")) {
        if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');

        currentId = $(this).attr('id');
       
       if(currentId == 'use_expired_batches_during_voucher_entry' ){
           $('#save_behaviour_setting').focus();
           event.preventDefault();
       }

        if (company_feature_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');

            var next = parseInt(currentTabindex) + 1;

            var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

            if (currentTabindex >= 12800 && currentTabindex < 13000) {

                
                

                while (next < 13000) {

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
 
$('#save_behaviour_setting').click(function() {

    
               
    var formData  = new FormData();
    formData.append('ignore_difference_in_physical_stock', $("#ignore_difference_in_physical_stock").val()); 
	formData.append('ignore_neagative_stock', $("#ignore_neagative_stock").val()); 
	formData.append('treat_all_sales_as_new_manufacture', $("#treat_all_sales_as_new_manufacture").val()); 
	formData.append('treat_all_purchases_as_consumed', $("#treat_all_purchases_as_consumed").val());
	formData.append('treat_all_rejections_inward_as_scrap', $("#treat_all_rejections_inward_as_scrap").val());
	formData.append('use_expired_batches_during_voucher_entry', $("#use_expired_batches_during_voucher_entry").val());
	formData.append('gst_applicability_id', $("#gst_applicability_id").val());
	
	
	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsInventory/save_stock_item_behaviour_setting",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
            toast_message('success','Saved',response.message)

             $('#stock_item_master_behaviour_setting').modal('hide'); 
             $("#provide_behaviour_option").focus();

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
function cancelBehaviourSetting()
{
    $('#stock_item_master_behaviour_setting').modal('hide');
    $("#provide_behaviour_option").focus();

   
}

function handleEscapeKeyBehaviourSetting(event) {
    if (event.key === "Escape") {
        cancelBehaviourSetting();
        
    }
}
$('#stock_item_master_behaviour_setting').on('keydown', handleEscapeKeyBehaviourSetting);

</script>

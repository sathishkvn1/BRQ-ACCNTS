
       
    <div class="modal fade backdrop modal_common modal_centered_lg  inventory_modal " 
        id="stock_item_master_set_vat_details"  tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Stock Item Master Set Vat Details </h6>
                        <i class="fa fa-close close_modal" onclick="cancelVatDetails();" id=""></i>
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
                                    <h6 class="h6 bold">Other info</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Type of goods<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable" tabindex="14000" name="type_of_goods" id="type_of_goods">
                                                <?php foreach ($acc_vat_type_of_goods as $acc_vat_type_of_goods): ?>
                                                        <option value="<?php echo $acc_vat_type_of_goods->id; ?>"><?php echo $acc_vat_type_of_goods->vat_type_of_goods; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nature of goods<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable" tabindex="14001" name="nature_of_goods" id="nature_of_goods">
                                                <?php foreach ($acc_vat_nature_of_goods as $acc_vat_nature_of_goods): ?>
                                                        <option value="<?php echo $acc_vat_nature_of_goods->id; ?>"><?php echo $acc_vat_nature_of_goods->acc_vat_nature_of_goods; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Commodity name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="commodity_name" id="commodity_name"
                                                tabindex="14002">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row End Here -->
									<div class="row">
                                        <div class="col-md-6">
                                            <label>Commodity code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="commodity_code" id="commodity_code"
                                                tabindex="14003">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->

                                    <h6 class="h6 bold">Other info</h6>

                                     <!-- Single Row start Here -->
                                     <div class="row">
                                            <div class="col-md-6">
                                                <label>Tax Rate<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                            <input type="text" class="enable ratewithpercentage"  name="tax_rate"
                                                    id="tax_rate" tabindex="14004">
                                                <span>%</span>
                                            </div>
                                        </div>
                                    <!-- Single Row End Here -->
                                      <!-- Single Row start Here -->
                                      <div class="row">
                                            <div class="col-md-6">
                                                <label>Cess Rate<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                            <input type="text" class="enable ratewithpercentage"  name="cess_rate_vat"
                                                    id="cess_rate_vat" tabindex="14005">
                                                <span>%</span>
                                            </div>
                                        </div>
                                    <!-- Single Row End Here -->

                                    <h6 class="h6 bold">Other info</h6>

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tax type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable" tabindex="14006" name="tax_type" id="tax_type">
                                                <?php foreach ($acc_vat_taxability_type as $acc_vat_taxability_type): ?>
                                                        <option value="<?php echo $acc_vat_taxability_type->id; ?>"><?php echo $acc_vat_taxability_type->vat_taxability_type; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Schedule<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable" tabindex="14007" name="schedule" id="schedule">
                                                <?php foreach ($acc_vat_schedule_groups as $acc_vat_schedule_groups): ?>
                                                        <option value="<?php echo $acc_vat_schedule_groups->id; ?>"><?php echo $acc_vat_schedule_groups->vat_schedule_group; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Schedule Serial No<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="schedule_serial_no" id="schedule_serial_no"
                                                tabindex="14008">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                   
                                       
                            
                            </div>
                    	</div>

						
                </div>
			
                    <div class="border_bottom_for_save_cancel">

                    </div>
                    <div class="row save_cancel_section">
                        <div class="col-12" style="display: flex !important;flex-direction: row-reverse !important;">
                        
                            <button  onclick="cancelVatDetails();" class="cancel_stock_btn btn ml-4" type="button" tabindex="14011" >
                                <span>C</span>ancel
                            </button>
                           
                            <button id="save_vat_details_btn"  class="save_stock_btn btn ml-4" tabindex="14009" type="button">
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
            
         
            $('#stock_item_master_set_vat_details').on('shown.bs.modal', function () {
                $('#type_of_goods').focus();

                });


              

           });
    
    </script>
  
    <script>
$('.yes_no,.enable').keydown(function (e) {

if ($("#stock_item_master_set_vat_details").hasClass("show")) {
    if (e.which === 13) {
    company_feature_field_id = $(this).prop('type');

    currentId = $(this).attr('id');
   
   if(currentId == 'schedule_serial_no' ){
       $('#save_vat_details_btn').focus();
       event.preventDefault();
   }

    if (company_feature_field_id !== 'submit') {
        currentTabindex = $(this).attr('tabindex');

        var next = parseInt(currentTabindex) + 1;

        var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

        if (currentTabindex >= 14000 && currentTabindex < 14200) {

            

            while (next < 14200) {

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


$('#save_vat_details_btn').click(function() {
               
    
    var formData  = new FormData();
	formData.append('type_of_goods', $("#type_of_goods").val()); 
	formData.append('nature_of_goods', $("#nature_of_goods").val()); 
	formData.append('commodity_name', $("#commodity_name").val()); 
	formData.append('commodity_code', $("#commodity_code").val());
	formData.append('tax_rate', $("#tax_rate").val());
	formData.append('cess_rate_vat', $("#cess_rate_vat").val());
	formData.append('tax_type', $("#tax_type").val());
	
	formData.append('schedule', $("#schedule").val());
	formData.append('schedule_serial_no', $("#schedule_serial_no").val());
	
	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsInventory/save_stock_item_master_set_vat_details/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
            
          

          flag_id=($("#flag_id").val());
          cancelVatDetails();
          
          if(flag_id === "0")
          {
            $("#rowID").val(response.insertedRowId); //if Insert, rowId value changes to insertRowId
            
         
             $('#stock_item_master_set_vat_details').modal('hide');
             $("#set_vat_details").focus();
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
function cancelVatDetails()
{

    $('#stock_item_master_set_vat_details').modal('hide');
        $("#set_vat_details").focus()
   
}

function handleEscapeVatDetails(event) {
    if (event.key === "Escape") {
        cancelVatDetails();
        
    }
}
$('#stock_item_master_set_vat_details').on('keydown', handleEscapeVatDetails);

</script>

  
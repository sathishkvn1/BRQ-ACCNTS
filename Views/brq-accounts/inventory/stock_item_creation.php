<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Item Creation</title>
    <?php include("application/views/brq-accounts/top-css.php"); ?>
    

   
</head>
<body class="stock_item_creation_body">
    
<div class="wrapper">
    	<!-- Navbar  TOP NAV BAR MESSAGES & SEARCH -->
		<?php include("application/views/brq-accounts/header_nav_bar.php"); ?>
		<!-- /.navbar  TOP NAVE BAR MESSAGES & SEARCH-->


		<!--- For sidebar Right Navigation for Short Cut Key like Tally -->
		<?php include("application/views/brq-accounts/index-sidebar-navigation-right.php"); ?>
		<!--- End : For sidebar Right Navigation for Short Cut Key like Tally -->

</div>



<!-- including modal of additional details -->
<?php include('stock_item_master_additional_details.php'); ?>  

<!-- including modal of behaviour setting -->
<?php include('stock_item_master_behaviour_setting.php'); ?>  

<!-- including modal of stock item master gst rate detail -->
<?php include('stock_item_master_gst_rate_details.php'); ?>

<!-- including modal of stock item master vat detail -->
<?php include('stock_item_master_set_vat_details.php'); ?>

<!-- including modal of stock item master bom detail -->
<?php include('stock_item_master_bill_of_material.php'); ?>

<!-- including modal of stock item master opening balance detail -->
<?php include('stock_item_master_set_opening_balance.php'); ?>



<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modal " 
        id="stock_item_creation_modal" data-value="enable_tds" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6 class="inventory_modal_headding">Stock Item Creation</h6>
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
                                            <label>Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable "
                                                name="stock_item_name" id="stock_item_name"
                                                tabindex="12400">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>(alias)<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="cost_centre_alternate_name enable"  name="stock_item_alternate_name"
                                                id="stock_item_alternate_name" tabindex="12401">
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->

                                        <input type="hidden" id="flag_id" value="0" >
                                        <input type="hidden" id="rowID" value="0" >

                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Part No<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class=" enable"
                                                name="stock_item_part_number" id="stock_item_part_number"
                                                tabindex="12402">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Part Alternate No<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="cost_centre_alternate_name enable"  name="stock_item_alternate_part_number"
                                                id="stock_item_alternate_part_number" tabindex="12403">
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <div class="row">
                                        <div class="col-md-8">
                                            <label>Description<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class=" enable"
                                                name="stock_item_description" id="stock_item_description"
                                                tabindex="12404">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Notes<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="cost_centre_alternate_name enable" tabindex="12405" name="stock_item_notes"
                                                id="stock_item_notes">
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                 <div class="row">
                                    <div class="col-md-8">
                                        <label>Group<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="enable" tabindex="12406" name="stock_item_group_id" id="stock_item_group_id">
                                            <?php foreach ($acc_stock_groups as $acc_stock_groups): ?>
                                                    <option value="<?php echo $acc_stock_groups->id; ?>"><?php echo $acc_stock_groups->stock_group_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                    <div class="col-md-8">
                                        <label>Category<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="enable" tabindex="12407" name="stock_item_category_id" id="stock_item_category_id">
                                            <?php foreach ($acc_stock_category as $acc_stock_category): ?>
                                                    <option value="<?php echo $acc_stock_category->id; ?>"><?php echo $acc_stock_category->stock_category_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Units<span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="enable" tabindex="12408" name="stock_item_unit_id" id="stock_item_unit_id">
                                        <?php foreach ($acc_stock_units as $acc_stock_unit): ?>
                                                <option value="<?php echo $acc_stock_unit->id; ?>"><?php echo $acc_stock_unit->stock_unit_name; ?></option>
                                        <?php endforeach; ?>
                                        
                                        </select>
                                        
                                    </div>
                                </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Alternate Units<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="enable" tabindex="12409" name="stock_item_alternate_unit_id" id="stock_item_alternate_unit_id">
                                            <?php foreach ($acc_stock_units as $acc_stock_alt): ?>
                                                    <option value="<?php echo $acc_stock_alt->id; ?>"><?php echo $acc_stock_alt->stock_unit_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Row End Here -->
                                <h6 class="h6_underline">Batches and Costing</h6>

                                
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Maintain in Batches<span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="yes_no  enable" tabindex="12410"
                                            name="maintain_in_batches"
                                            id="maintain_in_batches">
                                            <option value="yes">Yes</option>
                                            <option value="no" selected>No</option>
                                         </select>
                                        </div>
                                    </div>
                                 <!-- Single Row End Here -->
                           

                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Track date of manufacturing<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="12412"
                                                name="set_date_of_manufacturing"
                                                id="set_date_of_manufacturing">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                 <!-- Single Row Start Here -->
                                 <div class="row">
                                        <div class="col-md-8">
                                            <label>Use expiry dates<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="12413"
                                                name="set_expiry_date"
                                                id="set_expiry_date">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                 </div>
                                <!-- Single Row End Here -->
                                   <!-- Single Row Start Here -->
                                   <div class="row">
                                        <div class="col-md-8">
                                            <label>Enable cost tracking<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable " tabindex="12414"
                                                name="enable_cost_tracking"
                                                id="enable_cost_tracking" >
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                        <div class="col-md-8">
                                            <label>Costing method<span
                                                class="colon">:</span></label>
                                        </div>
                                            <div class="col-md-4" >
                                                <select  class="enable " tabindex="12415"   name="costing_method_id" id="costing_method_id"  data-live-search="true">
                                                    <?php foreach ($acc_stock_costing_methods as $acc_stock_costing_methods): ?>
                                                        <option value="<?php echo $acc_stock_costing_methods->id; ?>"><?php echo $acc_stock_costing_methods->costing_method; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Market valuation method<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                                <select class="enable"  name="market_valuation_method_id" id="market_valuation_method_id" tabindex="12416">
                                                    <?php foreach ($acc_stock_market_valuation_methods as $acc_stock_market_valuation_methods): ?>
                                                        <option value="<?php echo $acc_stock_market_valuation_methods->id; ?>"><?php echo $acc_stock_market_valuation_methods->market_valuation_method; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                    </div>
                                <!-- Single Row End Here -->

                                  <!-- Single Row Start Here -->
                                    <div class="row mt-2">
                                        <div class="col-md-8">
                                            <label>Set Additional Details<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" 
                                                name="set_additional_details"
                                                id="set_additional_details" >
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                    	</div>

						
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content tabular_formate">
					<div class="row" >		
                        <table id="stock_item_creation_table" class="display">
                        <thead>
								<tr>
									<th style="padding-left:6px">Stock name</th>
                                    <th class="action">Description</th>
                                    <th class="action">Group</th>
									<th class="action">Actions</th>
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
                        
                            <button id="cancel_stock_item_creation" onclick="cancelStockItemCreation();" class="cancel_stock_btn btn ml-4" type="button" tabindex="12420" >
                                <span>C</span>ancel
                            </button>
                            <button id="new_stock_btn" class="new_stock_btn btn ml-4"  type="button" tabindex="12419" >
                                <span>N</span>ew
                            </button>
                            <button id="save_stock_btn"   class=" save_stock_btn btn ml-4" tabindex="12417" type="button">
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
    var BASE_URL = "<?php echo base_url(); ?>";
    var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
    var token = "<?php echo $_SESSION['li_token']; ?>"; 
     $(document).ready(function() { 
       

        $('#stock_item_creation_modal').modal('show');
        $('#stock_item_creation_modal').on('shown.bs.modal', function () {
           
            $("#stock_item_name").focus();

            });


        loadDataTable();


        $("#set_date_of_manufacturing,#set_expiry_date").prop('disabled', true);
        $("#set_date_of_manufacturing,#set_expiry_date").removeClass("enable");

        $("#set_additional_details").prop('disabled', true);

        var opened_modal_id = $('.inventory_modal').attr('id');
        tableId=$("#"+ opened_modal_id+" .tabular_formate table").attr("id");
 
            
    });
   

</script>

<script>

     $(".yes_no,.enable").keypress(function (event) {
        if ($("#stock_item_creation_modal").hasClass("show")) {
            if (event.key === "Enter") {
                itype = $(this).prop('type');


                currentId = $(this).attr('id');
                if(currentId == 'market_valuation_method_id' ){
                    $('#save_stock_btn').focus();
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

                    if (current_gst_classification_tabindex >= 12400 && current_gst_classification_tabindex < 12600) {
                        while (next < 12600) {

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
</script>

<script>
      $("#maintain_in_batches").on("change",function()
        {

           var maintain_in_batches_val=$("#maintain_in_batches").val();
           if(maintain_in_batches_val=="no")
           {
            $("#set_date_of_manufacturing,#set_expiry_date").prop('disabled', true);
            $("#set_date_of_manufacturing,#set_expiry_date").removeClass("enable");
            $("#set_date_of_manufacturing,#set_expiry_date").val("no");
            
           }
           else if(maintain_in_batches_val=="yes")
           {

            $("#set_date_of_manufacturing,#set_expiry_date").prop('disabled', false);
            $("#set_date_of_manufacturing,#set_expiry_date").addClass("enable");

           }

        })

</script>

<script>

    $("#set_additional_details").on("change", function() {
    var set_additional_details_val = $("#set_additional_details").val();

    if (set_additional_details_val == "yes") {
        $('#stock_item_master_additional_details').modal('show');

        $('#stock_item_creation_modal').modal('hide'); 
        $('#stock_item_master_behaviour_setting').modal('hide');
        $('#stock_item_master_gst_rate_details').modal('hide');
        $('#stock_item_master_set_vat_details').modal('hide');

    } else if (set_additional_details_val == "no") 
    {
        
    }
});

</script>

<script>
function loadDataTable() {
    var token = "<?php echo $_SESSION['li_token']; ?>";

    var table = $('#stock_item_creation_table').DataTable();
    if (table) {
        table.destroy();
    }

    var table = $('#stock_item_creation_table').DataTable({
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": BASE_URL + "index.php/AccountsInventory/get_stock_item_data_table/",
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
            { "data": "stock_item_name" },
            { "data": "stock_item_description" },
            { "data": "stock_item_group_id" },

           
            {
                "data": "id",
                "render": function(data, type, full, meta) {
                    var id = full.id; 

                    return '<div class="operations">' +
                        '<a href="#" class="btn btn-xs first_a" title="Edit" onclick="editStock(' + id + ');"><i class="fas fa-edit"></i></a>' +
                        '<a href="#" class="btn btn-xs" title="Delete" onclick="deleteStock(' + id + ');"><i class="fas fa-trash"></i></a>' +
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
        // Call the customizeDataTableStockItem function after DataTable initialization
        customizeDataTableStockItem('stock_item_creation_table');// call the data table function , type id of data table as parameter
   
    }
    });

}
</script>

<script>

var token 				= $("#csrf-token").attr('content'); //CSRF token newly added by sandeep
var BASE_URL = "<?php echo base_url(); ?>";


$('#save_stock_btn').click(function() {

    
    var formData  = new FormData();

	formData.append('stock_item_name', $("#stock_item_name").val()); 
	formData.append('stock_item_alternate_name', $("#stock_item_alternate_name").val()); 
	formData.append('stock_item_part_number', $("#stock_item_part_number").val()); 
	formData.append('stock_item_alternate_part_number', $("#stock_item_alternate_part_number").val());
	formData.append('stock_item_description', $("#stock_item_description").val());
	formData.append('stock_item_notes', $("#stock_item_notes").val());
	formData.append('stock_item_group_id', $("#stock_item_group_id").val());
	
	formData.append('stock_item_category_id', $("#stock_item_category_id").val());
	formData.append('stock_item_unit_id', $("#stock_item_unit_id").val());
	formData.append('stock_item_alternate_unit_id', $("#stock_item_alternate_unit_id").val());


    formData.append('maintain_in_batches', $("#maintain_in_batches").val());
	formData.append('set_date_of_manufacturing', $("#set_date_of_manufacturing").val());


	
	formData.append('set_expiry_date', $("#set_expiry_date").val());
	formData.append('costing_method_id', $("#costing_method_id").val());
	formData.append('market_valuation_method_id', $("#market_valuation_method_id").val());
	
	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsInventory/saveStockItem/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
            
        loadDataTable();

          flag_id=($("#flag_id").val());

          if(flag_id === "0")
          {
                $("#rowID").val(response.insertedRowId); //if Insert, rowId value changes to insertRowId
                $("#item_name").text(response.itemName);

                
                $("#set_additional_details").prop('disabled', false);
                $("#set_additional_details").focus();

                toast_message('success','Saved',response.message);
                
                generateDynamicTableRowsForOpeningBalance();

                generateDynamicTableRowsForBillOfMaterial();

                var selectedUnit = $('#stock_item_unit_id option:selected').text();
                $("#unit_name").text(selectedUnit);  
                $("#per").val(selectedUnit);  

                $("#save_stock_btn").prop('disabled', true);
                 
            
             
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


function editStock(id)
{
   

    $("#rowID").val(id);
    flag_id=$("#flag_id").val("1");
    $('#stock_item_master_additional_details select').val('no');
  


    var selectedUnit = $('#stock_item_unit_id option:selected').text();
    $("#unit_name").text(selectedUnit); 

    $("#set_additional_details").prop('disabled', false);
    $("#set_additional_details").focus();
   
        $("#set_item_master_set_opening_balance_table tbody").empty();
        $("#bill_of_material_dynamic_table tbody").empty();
        

    $.ajax({
       
            url: BASE_URL + "index.php/AccountsInventory/get_edit_stock_list",
            type: "POST",
            data: { id: id, li_token: token,flag_id: $("#flag_id").val() },
           
            dataType: "json",
            success: function (response) {
                if (response.success) {
                 
                    
                
                    $('[name="stock_item_name"]').val(response.data.stock_item_name);
            		$('[name="stock_item_alternate_name"]').val(response.data.stock_item_alternate_name);			
            		$('[name="stock_item_part_number"]').val(response.data.stock_item_part_number);
            		$('[name="stock_item_alternate_part_number"]').val(response.data.stock_item_alternate_part_number);
            		$('[name="stock_item_description"]').val(response.data.stock_item_description);
                    $('[name="stock_item_notes"]').val(response.data.stock_item_notes);
                    $('[name="stock_item_group_id"]').val(response.data.stock_item_group_id);

                    $('[name="stock_item_category_id"]').val(response.data.stock_item_category_id);
            		$('[name="stock_item_unit_id"]').val(response.data.stock_item_unit_id);
                    $('[name="stock_item_alternate_unit_id"]').val(response.data.stock_item_alternate_unit_id);
                    $('[name="maintain_in_batches"]').val(response.data.maintain_in_batches);
                    
                    if(response.data.set_date_of_manufacturing=="yes")
                        {
                            $("#set_date_of_manufacturing,#set_expiry_date").prop('disabled', false);
                            $("#set_date_of_manufacturing,#set_expiry_date").addClass("enable");
                        }
                    
                    if(response.data.gst_applicability_id=="1")
                        {
                             
                            $("#hsn_sac_details_id,#hsn_gst_classification_id,#gst_rate_details_id,#gst_gst_classification_id,#type_of_supply").prop('disabled', true);
                        }
                    else if(response.data.gst_applicability_id=="2")
                        {
                             
                            $("#hsn_sac_details_id,#hsn_gst_classification_id,#gst_rate_details_id,#gst_gst_classification_id,#type_of_supply").prop('disabled', false);
                        }
                    

                    $('[name="set_date_of_manufacturing"]').val(response.data.set_date_of_manufacturing);
            		$('[name="set_expiry_date"]').val(response.data.set_expiry_date);
                    $('[name="costing_method_id"]').val(response.data.costing_method_id);
                    $('[name="market_valuation_method_id"]').val(response.data.market_valuation_method_id);

                    
                    $('[name="ignore_difference_in_physical_stock"]').val(response.data.ignore_difference_in_physical_stock);
                    $('[name="ignore_neagative_stock"]').val(response.data.ignore_neagative_stock);
            		$('[name="treat_all_sales_as_new_manufacture"]').val(response.data.treat_all_sales_as_new_manufacture);
                    $('[name="treat_all_purchases_as_consumed"]').val(response.data.treat_all_purchases_as_consumed);
                    $('[name="treat_all_rejections_inward_as_scrap"]').val(response.data.treat_all_rejections_inward_as_scrap);
                    $('[name="use_expired_batches_during_voucher_entry"]').val(response.data.use_expired_batches_during_voucher_entry);

                    if (response.data && response.data.gst_applicability_id) {
                        
                        $('[name="gst_applicable"]').val(response.data.gst_applicability_id);
                    }
                    if (response.data && response.data.hsn_sac_details_id) {
                        $('[name="hsn_sac_details_id"]').val(response.data.hsn_sac_details_id);
                    }
                    if (response.data && response.data.taxability_type_id) {
                        $('[name="taxability_type_id"]').val(response.data.taxability_type_id);
                    }
                    if (response.data && response.data.cess_valuation_type_id) {
                        $('[name="cess_valuation_type_id"]').val(response.data.cess_valuation_type_id);
                    }
                    if (response.data && response.data.gst_gst_classification_id) {
                        $('[name="gst_gst_classification_id"]').val(response.data.gst_gst_classification_id);
                    }
                  
                    if (response.data && response.data.gst_rate_details_id) {
                        $('[name="gst_rate_details_id"]').val(response.data.gst_rate_details_id);
                    }
                    
                    if (response.data && response.data.type_of_supply_id) {
                        $('[name="type_of_supply"]'). val(response.data.type_of_supply_id);
                    }

                    

                    $('[name="source_of_details"]'). val(response.data.source_of_details); 
                    $('[name="hsn_gst_classification_id"]'). val(response.data.hsn_gst_classification_id); 
                    $('[name="hsn_sac_number"]'). val(response.data.hsn_sac_number); 
                    $('[name="hsn_sac_description"]'). val(response.data.hsn_sac_description);
                    $('[name="igst_rate"]'). val(response.data.igst_rate);
                    $('[name="cgst_rate"]'). val(response.data.cgst_rate);
                    $('[name="sgst_utgst_rate"]'). val(response.data.sgst_utgst_rate);

                        

                    $('[name="cess_rate"]'). val(response.data.cess_rate);
                    $('[name="applicable_for_reverse_charge"]'). val(response.data.applicable_for_reverse_charge);
                    $('[name="eligible_for_input_tax_credit"]'). val(response.data.eligible_for_input_tax_credit);


                    if (response.data && response.data.type_of_goods_id) {
                        $('[name="type_of_goods"]').val(response.data.type_of_goods_id);
                    }
                    if (response.data && response.data.nature_of_goods) {
                        $('[name="nature_of_goods"]').val(response.data.nature_of_goods);
                    }
                    $('[name="commodity_name"]'). val(response.data.commodity_name);
                    $('[name="commodity_code"]'). val(response.data.commodity_code);
                    $('[name="tax_rate"]'). val(response.data.vat_rate);
                    $('[name="cess_rate_vat"]'). val(response.data.vat_cess_rate);
                    $('[name="eligible_for_input_tax_credit"]'). val(response.data.eligible_for_input_tax_credit);
                    if (response.data && response.data.vat_taxability_type_id) {
                        $('[name="tax_type"]').val(response.data.vat_taxability_type_id);
                    }
                    if (response.data && response.data.vat_schedule_id) {
                        $('[name="schedule"]').val(response.data.vat_schedule_id);
                    }
                    $('[name="schedule_serial_no"]'). val(response.data.schedule_serial_number);

                    $('[name="bill_of_material_name"]'). val(response.data.bill_of_material_name);
                    $('[name="manufacturing_quantity"]'). val(response.data.manufacturing_quantity);
                    if (response.data && response.data.manufacturing_unit_id) {
                        $('[name="manufacturing_unit_id"]').val(response.data.manufacturing_unit_id);
                    }
                    if (response.data && response.data.component_type_specified) {
                        $('[name="component_type_specified"]').val(response.data.component_type_specified);
                    }
                   
                    generateDynamicTableRowsForOpeningBalance(response.data2);
                    generateDynamicTableRowsForBillOfMaterial(response.data3);

                   

                    if (response.data4 && response.data4.length > 0) {
                        $("#bom_name").val(response.data4[0].bom_name);
                        $("#manufacturing_quantity").val(response.data4[0].manufacturing_quantity);
                        $("#manufacturing_unit_id").val(response.data4[0].manufacturing_unit_id);
                        $("#component_type_specified").val(response.data4[0].component_type_specified);
                    }
                    
                  
                    $("#item_name").text(response.data.stock_item_name);
                    $(".per").val(response.data.stock_unit_name);
               

                    

                    $("#stock_item_creation_modal").modal("show");
                    $("#stock_item_name").focus();

                    
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

function generateDynamicTableRowsForBillOfMaterial(data = null) 
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
            
}
                         

function deleteStock(id) {
        $.ajax({
            url: BASE_URL + "index.php/AccountsInventory/delete_stock_item/",
            type: "POST",
            data: { id: id, li_token: token },
            dataType: "json",
            success: function (response) {
                
                $('#stock_item_creation_table').DataTable().ajax.reload();
            },
            error: function (xhr, status, error) {
                
                alert("Error deleting item");
            }
        });
}

</script>

<script>
$('#new_stock_btn').click(function(){

    location.reload();

});
</script>


<script>
function cancelStockItemCreation() {
    localStorage.setItem('cancelFlag', 'stock_item_creation');
    window.history.back();
}


function handleEscapeStockItemCreation(event) {
    if (event.key === "Escape") {

      
        cancelStockItemCreation();
        window.history.back();
        
    }
}
$('#stock_item_creation_modal').on('keydown', handleEscapeStockItemCreation);




</script>
<script>

function customizeDataTableStockItem(tableId) {// customized datatable function
   
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
const table = $('#stock_item_creation_table').DataTable();
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





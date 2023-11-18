<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brq-glob-tech | Accounts</title>
    <?php include('application/views/brq-accounts/top-css.php');?>
    <style>
        .main-header.navbar.navbar-expand.navbar-white.navbar-light
        {
            width: -webkit-fill-available;
        }
        .row
        {
            align-items: baseline;
        }
    </style>
</head>
<body>
<div class="wrapper">
    	<!-- Navbar  TOP NAV BAR MESSAGES & SEARCH -->
        <?php include('application/views/brq-accounts/header_nav_bar.php');?>
		<!-- /.navbar  TOP NAVE BAR MESSAGES & SEARCH-->
       


		<!--- For sidebar Right Navigation for Short Cut Key like Tally -->
        <?php include('application/views/brq-accounts/index-sidebar-navigation-right.php');?>
		<!--- End : For sidebar Right Navigation for Short Cut Key like Tally -->
</div>

    <div class="modal fade backdrop modal_common modal_centered_lg inventory_modal" 
            id="inventory_group_creation_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="main_head">
                            <h6>Inventory Group Creation</h6>
                            <i class="fa fa-close" id="stock_group_creation_cancel_icon"></i>
                        </div>
                    </div>
                    <!-- <div class="modal-body" style="max-height: 70vh; overflow-y: auto;"> -->
                    <div class="modal-body" >
                        <div class="row">
                            <!-- Left Side Start Here -->
                            <div class="col-md-6 left_side_content">

                                <!-- Left Content -->
                                <div class="row">

                                    <!-- Single features Section Start Here -->
                                    <div class="col-md-12">
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label> Name<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                            <input type="text" class="autofocus enable" tabindex="11800" name="stock_group_name"
                                                id="stock_group_name">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>(alias)<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                            <input type="text" class="enable" tabindex="11801" name="stock_group_alternate_name"
                                                id="stock_group_alternate_name">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                       <!-- Single Row Start Here -->
                                         <div class="row">
                                            <div class="col-md-8">
                                                <label>Under<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable" tabindex="11802" name="parent_group_id" id="parent_group_id">
                                                    <option value="0" >Primary</option>
                                                    <?php foreach ($stock_group_names as $stockGroup): ?>
                                                            <option value="<?php echo $stockGroup->id; ?>"><?php echo $stockGroup->stock_group_name; ?></option>
                                                    <?php endforeach; ?>
                                                
                                                </select>
                                            </div>
                                          </div>
                                        <!-- Single Row End Here -->
                                         <!-- Single Row Start Here -->
                                         <div class="row">
                                            <div class="col-md-8">
                                                <label>Should quantities of items to be added<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="should_quantities_of_items_to_be_added"
                                                    name="should_quantities_of_items_to_be_added" tabindex="11803">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                    </div>
                                    <!-- Single features Section End Here -->

                                    <!-- Single  Section Start Here -->
                                    <div class="col-md-12">
                                        <h6 class="h6_underline">Statutory Details</h6>
                                        <h6>HSN/SAC & Related Details</h6>
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>HSN/SAC Details<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable" tabindex="11804" name="hsn_sac_details_id_for_stock" id="hsn_sac_details_id_for_stock">
                                               
                                                    <?php
                                                if (isset($hsn_sac_related_action)): foreach ($hsn_sac_related_action as $row):
                                                        $name = $row->hsn_sac_related_action;
                                                        $id = $row->id;
                                                       
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>"><?php echo $name; ?>
                                                        </option>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>

                                                </select>
                                            </div>
                                          </div>
                                        <!-- Single Row End Here -->
                                        <div class="hide_show_based_on_hsn_sac_field">
                                            <!-- Single Row Start Here -->
                                            <div class="row" id="hsn_gst_classification_section">
                                                <div class="col-md-8">
                                                    <label>Classification<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="enable" tabindex="11805" name="hsn_gst_classification_id_for_stock" id="hsn_gst_classification_id_for_stock">
                                                            <!-- <option value="1" data-value="Dummy_1">Dummy 1</option>
                                                            <option value="2" data-value="Dummy_2">Dummy 2</option> -->
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label class="enable_disable">HSN/SAC<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                <input type="text" class="enable" tabindex="11806" name="hsn_sac_number"
                                                    id="hsn_sac_number">
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label class="enable_disable">Description<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                <input type="text" class="enable" tabindex="11807" name="hsn_sac_description"
                                                    id="hsn_sac_description">
                                                </div>

                                        </div>
                                        <!-- Single Row End Here -->
                                    </div>
                                    </div>
                                    <!-- Single  Section Start Here -->
                                    <div class="col-md-12">
                                        <h6 class="h6_underline">Statutory Details</h6>
                                        <h6>GST Rate & Related Details</h6>
                                        <!-- Single Row start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>GST Rate Details<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="enable" tabindex="11808" name="gst_rate_details_id_for_stock" id="gst_rate_details_id_for_stock">
                                                        <!-- <option value="1" data-value="As_per_Company_Stock Group">As per Company/Stock Group</option>
                                                        <option value="2" data-value="Specify_details_here" >Specify Details Here</option>
                                                        <option value="3" data-value="use_gst_classification " selected>Use Gst Classification</option> -->
                                                        <?php
                                                            if (isset($gst_rate_related_action)): foreach ($gst_rate_related_action as $row):
                                                                    $name = $row->gst_rate_related_action;
                                                                    $id = $row->id;
                                                                
                                                                
                                                                    ?>
                                                                    <option value="<?php echo $id; ?>"><?php echo $name; ?>
                                                                    </option>
                                                                    <?php
                                                                endforeach;
                                                            endif;
                                                            ?>
                                                    </select>
                                                </div>
                                            </div>
                                        <!-- Single Row End Here -->



                                        <div class="element_under_gst_rate_details">
                                                <!-- Single Row start Here -->
                                                    <div class="row"  id="gst_classification_section">
                                                        <div class="col-md-8">
                                                            <label>GST Classification<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <select class="enable" tabindex="11809" name="gst_gst_classification_id" id="gst_gst_classification_id">
                                                                <!-- <option value="1" data-value="demo1">demo1</option>
                                                                <option value="2" data-value="demo2">demo2</option>
                                                                <option value="3" data-value="demo3">demo3</option> -->
                                                              
                                                              
                                                       
                                                             </select>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                            <!-- Single Row start Here -->
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <label>Taxability Type<span class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                 <!-- <input type="text" class="enable" tabindex="11810" name="taxability_type_id"
                                                            id="taxability_type_id">  -->
                                                     <select class="enable" name="taxability_type_id" id="taxability_type_id" tabindex="10606">
                                                
                                                        <?php
                                                if (isset($gst_taxability_type)): foreach ($gst_taxability_type as $row):
                                                        $name = $row->gst_taxability_type;
                                                        $id = $row->id;
                                                       
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>"><?php echo $name; ?>
                                                        </option>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                                    
                                                    </select>
                                               
                                                    </div>
                                                </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label>IGST Rate<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable ratewithpercentage" tabindex="11811" name="igst_rate"
                                                                id="igst_rate">
                                                            <span>%</span>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label>CGST Rate<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable ratewithpercentage" tabindex="11812" name="cgst_rate"
                                                                id="cgst_rate">
                                                                <span>%</span>
                                                        </div>
                                                    </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label>SGST/UTGST Rate<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable ratewithpercentage" tabindex="11813" name="sgst_utgst_rate"
                                                                id="sgst_utgst_rate">
                                                                <span>%</span>
                                                        </div>
                                                    </div>
                                            <!-- Single Row End Here -->
                                                <!-- Single Row start Here -->
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <label>Cess Valuation Type<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable" tabindex="11814" name="cess_valuation_type_id"
                                                                id="cess_valuation_type_id">
                                                        </div>
                                                    </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row start Here -->
                                            <div class="row">
                                                        <div class="col-md-8">
                                                            <label>Cess Rate<span class="colon">:</span></label>
                                                        </div>
                                                        <div class="col-md-4">
                                                        <input type="text" class="enable ratewithpercentage" tabindex="11815" name="cess_rate"
                                                                id="cess_rate">
                                                            <span>%</span>
                                                        </div>
                                                    </div>
                                                <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row" >
                                                    <div class="col-md-8">
                                                        <label>Applicable for Reverse Charge<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="applicable_for_reverse_charge"
                                                            name="applicable_for_reverse_charge" tabindex="11816">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                                <div class="row" >
                                                    <div class="col-md-8">
                                                        <label>Eligible for Input Tax Credit<span
                                                                class="colon">:</span></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="yes_no enable" id="eligible_for_input_tax_credit"
                                                            name="eligible_for_input_tax_credit" tabindex="11817">
                                                            <option value="yes">Yes</option>
                                                            <option value="no" selected>No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <!-- Single Row End Here -->
                                        </div>    
                                </div>
                                     <!-- Single  Section Start Here -->

                                </div>
                                <!-- Left Content -->
                            </div>
                            <!-- Left Side End Here -->

                            <!-- Right Side Start Here -->
                            <div class="col-md-6 right_side_content">

                                <!-- Right Content -->
                                <div class="row">

                                    <!-- Single features Section End Here -->
                                    <div class="col-md-12" id="additional_configuration_section">
                                        <h6>Other Statury  Details</h6>

                                        <!-- <div class="row main_content"> -->
                                        <!-- Main Content Start Here -->
                                        <!-- --------- single row start here --------------- -->
                                            <!-- Single Row Start Here -->
                                        
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Set/Alter TDS details<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="set_alter_tds_details" name="set_alter_tds_details" tabindex="11818"  
                                                    class="yes_no with_backdrop_modal_val_yes enable">
                                                    <option value="no" selected>No</option>
                                                    <option value="yes" >Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->

                                            <!-- Single Row Start Here -->
                                        
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Set/Alter TCS details<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="set_alter_tcs_details" name="set_alter_tcs_details" tabindex="11819"  
                                                    class="yes_no with_backdrop_modal_val_yes enable">
                                                    <option value="no" selected>No</option>
                                                    <option value="yes" >Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                        
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Set/Alter VAT details<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="set_alter_vat_details" name="set_alter_vat_details" tabindex="11820"  
                                                    class="yes_no with_backdrop_modal_val_yes enable">
                                                    <option value="no" selected>No</option>
                                                    <option value="yes" >Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Set/Alter sales tax cess<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="set_alter_sales_tax_cess" name="set_alter_sales_tax_cess" tabindex="11821"  
                                                    class="yes_no with_backdrop_modal_val_yes enable">
                                                    <option value="no" selected>No</option>
                                                    <option value="yes" >Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Set/Alter excise details<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="set_alter_excise_details" name="set_alter_excise_details" tabindex="11822"  
                                                    class="yes_no with_backdrop_modal_val_yes enable">
                                                    <option value="no" selected>No</option>
                                                    <option value="yes" >Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                           
                 
                                        </div>


                                    </div>
                                    <div class="border_bottom_for_save_cancel">

                                </div>
                                <div class="row save_cancel_section">
                                    <div class="col-9">
                                       
                                        <button id="save_inventory_group_settings_btn" class="save_inventory_btn btn"   tabindex="11823" type="button"  >
                                             <i class="fas fa-calendar-check"></i><span>S</span>ave
                                        </button>
                                        <button id="cancel_inventory_group_settings_btn" class="cancel_inventory_btn btn" type="button" tabindex="11824">
                                            <span>C</span>ancel
                                        </button>
                                    </div>
                                    <div class="col-2">
                                        
                                    </div>              
                                </div>
                                </div>
                                
                            </div>
                            <!-- Right Side End Here -->

                        </div>

                    </div>
                </div>
            </div>
        </div>

      <!----------- bottom-js ---------------------->
      <?php include('application/views/brq-accounts/bottom-js.php');?>
		<!------------- bottom-js end --------------->
<script>
     
    var BASE_URL = "<?php echo base_url(); ?>";
    var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
    var token = "<?php echo $_SESSION['li_token']; ?>";     
 $(document).ready(function() {
    //   $("#gst_classification_section").hide();
    $('#inventory_group_creation_modal').modal('show');
}); // document.ready
             $('#save_inventory_group_settings_btn').click(function() {
                var parentGroupId = $("#parent_group_id").val();
                    var formData  = new FormData();
                    formData.append('stock_group_name', $("#stock_group_name").val()); 
                    formData.append('stock_group_alternate_name', $("#stock_group_alternate_name").val());
                    formData.append('parent_group_id', $("#parent_group_id").val()); 
                    formData.append('should_quantities_of_items_to_be_added', $("#should_quantities_of_items_to_be_added").val()); 
                    formData.append('hsn_sac_details_id', $("#hsn_sac_details_id_for_stock").val()); 
                    formData.append('hsn_gst_classification_id', $("#hsn_gst_classification_id_for_stock").val()); 
                    formData.append('hsn_sac_number', $("#hsn_sac_number").val()); 
                    formData.append('hsn_sac_description', $("#hsn_sac_description").val()); 
                    formData.append('gst_rate_details_id', $("#gst_rate_details_id_for_stock").val()); 
                    formData.append('gst_gst_classification_id', $("#gst_gst_classification_id").val()); 
                    formData.append('taxability_type_id', $("#taxability_type_id").val()); 
                    formData.append('igst_rate', $("#igst_rate").val()); 
                    formData.append('cgst_rate', $("#cgst_rate").val()); 
                    formData.append('sgst_utgst_rate', $("#sgst_utgst_rate").val()); 
                    formData.append('cess_valuation_type_id', $("#cess_valuation_type_id").val()); 
                    formData.append('cess_rate', $("#cess_rate").val()); 
                    formData.append('applicable_for_reverse_charge', $("#applicable_for_reverse_charge").val()); 
                    formData.append('eligible_for_input_tax_credit', $("#eligible_for_input_tax_credit").val()); 
                    formData.append('li_token', token); 
             
         $.ajax({
             url: BASE_URL + "index.php/" + inventoryController + "/save_inventory_group_settings",
             type: 'POST',
             data:  formData,
             dataType: "JSON",
             processData: false,
             contentType: false,
             success: function(response) {
                
                 console.log("response",response);
                 
                 toast_message("success", "Successful", response.message);
                 location.reload();
                //  toast_message("success", "Successful", response.message);
 
                 // Close the modal
                 // $('#acc_inventory_master_settings').modal('hide');
             },
             error: function(xhr, status, error) {
                 console.log(xhr.responseText);
                 console.log(status);
                 console.log(error);
             }
         });
    });


/// on select of As per company/Stock Group

$("#hsn_sac_details_id_for_stock").change(function() {
        var selectedOption = $(this).val(); 

        if (selectedOption === "5") {
           
            $.ajax({
                url: BASE_URL + "index.php/" + inventoryController + "/gst_hsn_sac_details_items",
                type: 'POST',
                data: {selectedOption: selectedOption,li_token:token },
                dataType: 'json',
                success: function(data) {
                   
                    if (data) {
                       
                        $("#hsn_sac_number").val(data.hsn_sac_number);
                        $("#hsn_sac_description").val(data.hsn_sac_description);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        } else {
            // Clear the input fields if a different option is selected
            $("#hsn_sac_number").val("");
            $("#hsn_sac_description").val("");
        }
//  on selclect of gst classification
        if (selectedOption === "3") { 
        $.ajax({
            url: BASE_URL + "index.php/" + inventoryController + "/getGstClassificationOptions",
            type: 'POST',
            data: {selectedOption: selectedOption,li_token:token },
            dataType: 'json',
            success: function(data) {
                console.log(data);
                if (data) {
                   
                    // $("#hsn_gst_classification_id").empty();
             
                   $.each(data, function(index, option) {
                        $("#hsn_gst_classification_id_for_stock").append('<option value="' + option.id + '">' + option.gst_classification_name + '</option>');
                    });
                }
            },
            error: function(xhr, status, error) 
            
            {
                console.error(error);
            }
        });
    } else {
       
        $("#hsn_gst_classification_id_for_stock").empty();
    }
    });


$("#hsn_gst_classification_id_for_stock").change(function() {
        var selected_classi_Option = $(this).val(); 

        $.ajax({
            url: BASE_URL + "index.php/" + inventoryController + "/getGstClassificationDetails",
            type: 'POST',
            data: { selected_classi_Option: selected_classi_Option, li_token: token },
            dataType: 'json',
            success: function(data) {
                if (data) {
                    
                    $("#hsn_sac_number").val(data.hsn_sac);
                    $("#hsn_sac_description").val(data.description);
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
});



$("#gst_rate_details_id_for_stock").change(function() {
    var selectedGstRateDetailsOption = $(this).val();
    var gstClassificationDropdown = $("#gst_gst_classification_id");

        if (selectedGstRateDetailsOption === "4") {
            
            gstClassificationDropdown.prop("disabled", false);
             $("#gst_gst_classification_id").addClass("enable");
              $("#gst_classification_section").show();
            
        } else {
           
            gstClassificationDropdown.prop("disabled", true);
            $("#gst_classification_section").hide();
                $("#gst_gst_classification_id").removeClass("enable");
        }

    
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/getGstClassificationNames",
        type: 'POST',
        data: { selectedGstRateDetailsOption: selectedGstRateDetailsOption, li_token: token },
        dataType: 'json',
        success: function(data) {
        // console.log("data is" ,data);
        $.each(data, function(index, classification) {
        $("#gst_gst_classification_id").append('<option value="' + classification.id + '">' + classification.gst_classification_name + '</option>');
    });

        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});

$("#gst_gst_classification_id").change(function() {
    var selectedGstClassificationOption = $(this).val();

    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/getGstClassification",
        type: 'POST',
        data: { selectedGstClassificationOption: selectedGstClassificationOption, li_token: token },
        dataType: 'json',
        success: function(data) {
            console.log(data);
            $("#taxability_type_id").val(data.taxability_type_id);
            $("#igst_rate").val(data.igst_rate);
            $("#cgst_rate").val(data.cgst_rate);
            $("#sgst_utgst_rate").val(data.sgst_utgst_rate);
            $("#cess_valuation_type_id").val(data.cess_valuation_type_id);
            $("#cess_rate").val(data.cess_rate);
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
});


            var hsn_sac_details_id_val = $("#hsn_sac_details_id_for_stock").val();
              //1-Asper Company /Stock Group
             // 2-Specify details Here
             //3-use gst classification
             //4-specify in voucher
            
             if(hsn_sac_details_id_val=="1")//if Asper Company /Stock Group disable all ement under sac
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                $(".hide_show_based_on_hsn_sac_field .row").show();
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select, .hide_show_based_on_hsn_sac_field .col-md-4 input")
                .prop('disabled', true);
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select.enable, .hide_show_based_on_hsn_sac_field .col-md-4 input.enable").removeClass("enable");
                $(".hide_show_based_on_hsn_sac_field .col-md-8 label.enable_disable").css("color", "#888");

            }
           
            else if(hsn_sac_details_id_val=="2")//if Specify details Here ,hide  hsn_gst_classification_section
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_section").hide();
                if($(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id_for_stock").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id_for_stock").removeClass("enable");
                    }
                if(!$(".hide_show_based_on_hsn_sac_field #hide_show_based_on_hsn_sac_field").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hide_show_based_on_hsn_sac_field").removeClass("enable");
                    }
                if(!$(".hide_show_based_on_hsn_sac_field #hsn_sac_description").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").removeClass("enable");
                    }

            }
            else if(hsn_sac_details_id_val=="3")//if use gst classification enable classification ,disable hsn sac and description
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                if($(".hide_show_based_on_hsn_sac_field #hsn_sac_description").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").removeClass("enable");
                    }
                if($(".hide_show_based_on_hsn_sac_field #hsn_sac_number").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_number").removeClass("enable").prop('disabled', false);
                    }
                    
                if(!$(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id_for_stock").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id_for_stock").addClass("enable").prop('disabled', false);
                    }
                    $(".hide_show_based_on_hsn_sac_field .col-md-8 label.enable_disable").css("color", "#888");
                    $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").prop('disabled', true);
                    $(".hide_show_based_on_hsn_sac_field #hsn_sac_number").prop('disabled', true);
                    $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_section").show();
                    

            }
            else if(hsn_sac_details_id_val=="4")// hide all three element under hsn_sac_details_id_val
            {
                $(".hide_show_based_on_hsn_sac_field").hide();
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select,.hide_show_based_on_hsn_sac_field .col-md-4 input").removeClass("enable");

            }




            var gst_rate_details_id_val = $("#gst_rate_details_id_for_stock").val();
            if(gst_rate_details_id_val=="1")//if Asper Company /Stock Group disable all ement under sac
            {
                $(".element_under_gst_rate_details .row").show();
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', true).removeClass("enable");
                $(".element_under_gst_rate_details .col-md-8 label,.element_under_gst_rate_details .col-md-4 span").css('color','#888');


            }
            if(gst_rate_details_id_val=="2")//if Asper Company hide gst_classification_id
            {
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', false).addClass("enable");
                $(".element_under_gst_rate_details .col-md-8 label,.element_under_gst_rate_details .col-md-4 span").css('color','#000');
                $("#gst_classification_section").hide();
                $("#gst_gst_classification_id").removeClass("enable");
            }
            if(gst_rate_details_id_val=="3")//disable all element ,but visible gst_classification_section
            {
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', true).removeClass("enable");
                $(".element_under_gst_rate_details .col-md-8 label,.element_under_gst_rate_details .col-md-4 span").css('color','#000');
                $("#gst_classification_section").show();
                $("#gst_gst_classification_id").addClass("enable").prop('disabled', false);
            }
 

    </script>

    <script>
        // on change function working in HSN/SAC Details
     
        $("#hsn_sac_details_id_for_stock").on("change",function(){
            //1-Asper Company /Stock Group
            // 2-Specify details Here
            //3-use gst classification
            //4-specify in voucher
            
            var hsn_sac_details_id_val = $("#hsn_sac_details_id_for_stock").val();
            if(hsn_sac_details_id_val=="1")//if Asper Company /Stock Group disable all ement under sac
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                $(".hide_show_based_on_hsn_sac_field .row").show();
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select, .hide_show_based_on_hsn_sac_field .col-md-4 input")
                .prop('disabled', true);
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select.enable, .hide_show_based_on_hsn_sac_field .col-md-4 input.enable").removeClass("enable");
                $(".hide_show_based_on_hsn_sac_field .col-md-8 label.enable_disable").css("color", "#888");

            }
           
            else if(hsn_sac_details_id_val=="2")//if Specify details Here ,hide  hsn_gst_classification_section
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_section").hide();
                if($(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id_for_stock").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id_for_stock").removeClass("enable");
                    }
                if(!$(".hide_show_based_on_hsn_sac_field #hide_show_based_on_hsn_sac_field").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hide_show_based_on_hsn_sac_field").removeClass("enable");
                    }
                if(!$(".hide_show_based_on_hsn_sac_field #hsn_sac_description").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").removeClass("enable");
                    }

            }
            else if(hsn_sac_details_id_val=="3")//if use gst classification enable classification ,disable hsn sac and description
            {
                $(".hide_show_based_on_hsn_sac_field").show();
                if($(".hide_show_based_on_hsn_sac_field #hsn_sac_description").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").removeClass("enable");
                    }
                if($(".hide_show_based_on_hsn_sac_field #hsn_sac_number").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_sac_number").removeClass("enable").prop('disabled', false);
                    }
                    
                if(!$(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id_for_stock").hasClass("enable"))
                    {
                        $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_id_for_stock").addClass("enable").prop('disabled', false);
                    }
                    $(".hide_show_based_on_hsn_sac_field .col-md-8 label.enable_disable").css("color", "#888");
                    $(".hide_show_based_on_hsn_sac_field #hsn_sac_description").prop('disabled', true);
                    $(".hide_show_based_on_hsn_sac_field #hsn_sac_number").prop('disabled', true);
                    $(".hide_show_based_on_hsn_sac_field #hsn_gst_classification_section").show();
                    

            }
            else if(hsn_sac_details_id_val=="4")// hide all three element under hsn_sac_details_id_val
            {
                $(".hide_show_based_on_hsn_sac_field").hide();
                $(".hide_show_based_on_hsn_sac_field .col-md-4 select,.hide_show_based_on_hsn_sac_field .col-md-4 input").removeClass("enable");

            }

            


        });


        // gst_rate_details_id on change
        $("#gst_rate_details_id").on("change",function()
        {
           //1-Asper Company /Stock Group
            // 2-Specify details Here
           
           
            var gst_rate_details_id_val = $("#gst_rate_details_id_for_stock").val();
            if(gst_rate_details_id_val=="1")//if Asper Company /Stock Group disable all ement under sac
            {
                $(".element_under_gst_rate_details .row").show();
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', true).removeClass("enable");
                $(".element_under_gst_rate_details .col-md-8 label,.element_under_gst_rate_details .col-md-4 span").css('color','#888');


            }
            if(gst_rate_details_id_val=="2")//if Asper Company hide gst_classification_id
            {
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', false).addClass("enable");
                $(".element_under_gst_rate_details .col-md-8 label,.element_under_gst_rate_details .col-md-4 span").css('color','#000');
                $("#gst_classification_section").hide();
                $("#gst_gst_classification_id").removeClass("enable");
            }
            if(gst_rate_details_id_val=="3")//disable all element ,but visible gst_classification_section
            {
                $(".element_under_gst_rate_details .col-md-4 select,.element_under_gst_rate_details .col-md-4 input").prop('disabled', true).removeClass("enable");
                $(".element_under_gst_rate_details .col-md-8 label,.element_under_gst_rate_details .col-md-4 span").css('color','#000');
                $("#gst_classification_section").show();
                $("#gst_gst_classification_id").addClass("enable").prop('disabled', false);
            }
           
        })


    </script>
    <script>
$('.yes_no,.enable').keydown(function (e) {

    if ($("#inventory_group_creation_modal").hasClass("show")) {
        if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');
        currentId = $(this).attr('id');
        if (company_feature_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');

            var next = parseInt(currentTabindex) + 1;

            var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

            if (currentTabindex >= 11800 && currentTabindex < 12000) {

                // if ($("#" + currentId).is('[data-target~="#company_feature_save"]')) {//when you press enter key from last input of company creation
                //     $('#company_feature_save').modal('toggle');
                // }
                if (currentId === "set_alter_excise_details") {
                  $("#save_inventory_group_settings_btn").focus();
                  event.preventDefault(); 
                  }
                

                while (next < 12000) {

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
        // if (e.which === 83) {
        //     $("#save_inventory_master_settings_btn").click();
        // }
        if (e.which === 67) {//c
        // alert("hai");
        }
        // if (e.which === 27) {//ecc
        
        // }
    }


});


function handleCancel() {

const urlParams = new URLSearchParams(window.location.search);
const source = urlParams.get('source');

if (source === 'from_master_stock_group') {
    $('#inventory_group_creation_modal').modal('hide');
    window.location.href = '<?php echo base_url(); ?>Accounts?openModal=true';
    
}

}

$('#cancel_inventory_group_settings_btn').click(handleCancel);
$('#stock_group_creation_cancel_icon').click(handleCancel);
$(document).keydown(function (event) {
    if (event.which == 27) { 
        handleCancel();
    }
});


    </script>


</body>
</html>
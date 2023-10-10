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
		
        <?php include('application/views/brq-accounts/header-nav-search-messages.php');?>
		<!-- /.navbar  TOP NAVE BAR MESSAGES & SEARCH-->
		<!--- For sidebar Right Navigation for Short Cut Key like Tally -->
        <?php include('application/views/brq-accounts/index-sidebar-navigation-right.php');?>
		<!--- End : For sidebar Right Navigation for Short Cut Key like Tally -->
</div>

    <div class="modal fade backdrop modal_common modal_centered_lg inventory_modal" 
            id="acc_inventory_master_settings2" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="main_head">
                            <h6>Inventory Master Settings </h6>
                            <i class="fa fa-close" id="stock_item_cancel_icon"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <!-- Left Side Start Here -->
                            <div class="col-md-6 left_side_content">

                                <!-- Left Content -->
                                <div class="row">

                                    <!-- Single features Section Start Here -->
                                    <div class="col-md-12">
                                        <h6 class="side_headding">General Details</h6>
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Provide aliases for Name<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable autofocus" id="provide_alternate_name_for_stock_items"
                                                    name="provide_alternate_name_for_stock_items" tabindex="11600">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row" style="align-items: baseline;">
                                            <div class="col-md-8">
                                                <label>Provide language aliases for Name<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="provide_name_in_local_language_for_stock_items"
                                                    name="provide_name_in_local_language_for_stock_items" tabindex="11601">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Provide Part No for StockItems<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="provide_part_number_for_stock_items"
                                                    name="provide_part_number_for_stock_items" tabindex="11602">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Provide Description for StockItems<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="provide_descriptions_for_stock_items"
                                                    name="provide_descriptions_for_stock_items" tabindex="11603">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Provide Notes for StockItems<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="provide_notes_for_stock_items"
                                                    name="provide_notes_for_stock_items" tabindex="11604">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                    </div>
                                    <!-- Single features Section End Here -->

                                    <!-- Single features Section Start Here -->
                                    <div class="col-md-12">
                                        <h6>Inventory Details</h6>
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Use Stock Group for stockItems<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="use_stock_group_for_stock_items"
                                                    name="use_stock_group_for_stock_items" tabindex="11605">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Use Stock Category for stockItems<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="use_stock_category_for_stock_items"
                                                    name="use_stock_category_for_stock_items" tabindex="11606">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>

                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Provide Units of Measurment(UoM) for stockItems<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="provide_units_of_measure_for_stock_items"
                                                    name="provide_units_of_measure_for_stock_items" tabindex="11607">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Use Alternate Units<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="use_alternate_units_for_stock_items"
                                                    name="use_alternate_units_for_stock_items" tabindex="11608">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Maintain Stock Item in Batches<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="maintain_stock_items_in_batches"
                                                    name="maintain_stock_items_in_batches" tabindex="11609">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Set Components List in StockItems<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="set_bom_for_stock_items"
                                                    name="set_bom_for_stock_items" tabindex="11610">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Provide Standard Buying and Selling Rates<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="provide_standard_buying_and_selling_rates"
                                                    name="provide_standard_buying_and_selling_rates" tabindex="11611">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Provide MRP Details<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="provide_mrp_details_for_stock_items"
                                                    name="provide_mrp_details_for_stock_items" tabindex="11612">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Is Cost Tracking Applicable for StockItems<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="is_cost_tracking_applicable_for_stock_items"
                                                    name="is_cost_tracking_applicable_for_stock_items" tabindex="11613">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Set default Accounting Alocation for StockItems<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="set_default_accounting_allocations_for_stock_items"
                                                    name="set_default_accounting_allocations_for_stock_items" tabindex="11614">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Use Costing and Market Valluation method for Stock Items<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable " id="use_costing_and_market_valuation_methods_for_stock_items"
                                                    name="use_costing_and_market_valuation_methods_for_stock_items" tabindex="11615">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Set Options for Stock Items Behaviour<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="set_options_for_stock_item_behaviour"
                                                    name="set_options_for_stock_item_behaviour" tabindex="11616">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Provide Opening Balances for Stock Items<span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no enable" id="provide_opening_balances_for_stock_items"
                                                    name="provide_opening_balances_for_stock_items" tabindex="11617">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                    </div>
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
                                        <h6>GST Details</h6>

                                        <!-- <div class="row main_content"> -->
                                        <!-- Main Content Start Here -->
                                        <!-- --------- single row start here --------------- -->
                                        <!-- Single Row Start Here -->
                                        
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Provide (GST)Details <span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="provide_gst_details_for_stock_items" name="provide_gst_details_for_stock_items" tabindex="11618"  
                                                    class="yes_no with_backdrop_modal_val_yes enable">
                                                    <option value="no" >No</option>
                                                    <option value="yes" selected>Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                         <div class="inventory_gst_active_inactive">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Provide HSN/SAC Details<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="provide_hsn_sac_details_for_stock_items" name="provide_hsn_sac_details_for_stock_items" tabindex="11619"
                                                        class="with_backdrop_modal_val_yes yes_no  enable">
                                                         <option value="no" >No</option>
                                                         <option value="yes"selected>Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Provide HSN/SAC Description<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select  name="enable_tds"
                                                    class="yes_no with_backdrop_modal_val_yes enable" id="provide_hsn_sac_description_for_stock_items"
                                                    name="provide_hsn_sac_description_for_stock_items" tabindex="11620">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Provide Breakup of TaxRate<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                <select 
                                                    class="yes_no with_backdrop_modal_val_yes enable" id="provide_breakup_of_tax_rate"
                                                    name="provide_breakup_of_tax_rate" tabindex="11621">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                 </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Provide Cess Rate Details<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select 
                                                    class="yes_no with_backdrop_modal_val_yes enable" id="provide_cess_rate_details"
                                                    name="provide_cess_rate_details" tabindex="11622">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Enable reverse charge Calculation<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select 
                                                    class="yes_no with_backdrop_modal_val_yes enable" id="enable_reverse_charge_calculation"
                                                    name="enable_reverse_charge_calculation" tabindex="11623">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Eligible for Input Tax Credit<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select 
                                                        class="yes_no with_backdrop_modal_val_yes enable" id="eligible_for_input_tax_credit"
                                                        name="eligible_for_input_tax_credit"tabindex="11624">
                                                        <option value="yes" selected>Yes</option>
                                                        <option value="no" >No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Select Type of Supply<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select 
                                                    class="yes_no with_backdrop_modal_val_yes enable" id="select_type_of_supply	"
                                                        name="select_type_of_supply	" tabindex="11625">
                                                        <option value="yes" selected>Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->

                                           


                                        </div>


                                    </div>
                                    <div class="col-md-12" >
                                        <h6>Statutory Details</h6>
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                                <div class="col-md-8">
                                                    <label>Set Inclusive of duties and taxes option<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select 
                                                        class="yes_no with_backdrop_modal_val_yes enable" id="set_inclusive_of_duties_and_taxes_option"
                                                        name="set_inclusive_of_duties_and_taxes_option" tabindex="11626">
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->
                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Provide rate of duty<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select 
                                                        class="yes_no with_backdrop_modal_val_yes enable" id="provide_rate_of_duty"
                                                        name="provide_rate_of_duty" tabindex="11627">
                                                        <option value="yes" selected>Yes</option>
                                                        <option value="no" >No</option>
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
                                        <button id="save_inventory_master_settings_btn" class="save_inventory_btn btn" type="button" tabindex="11628">
                                             <i class="fas fa-calendar-check"></i><span>S</span>ave
                                        </button>
                                        <button id="cancel_inventory_master_settings_btn" class="cancel_inventory_btn btn" type="button" tabindex="11629">
                                            <span>C</span>ancel
                                        </button>
                                        
                                    </div>
                                    <div class="col-2">
                                        
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
            $('#acc_inventory_master_settings2').modal('show');

            $('#save_inventory_master_settings_btn').click(function() {
                url= BASE_URL + inventoryController + "/save_inventory_master_settings";
                var formData  = new FormData();
            formData.append('provide_alternate_name_for_stock_items', $("#provide_alternate_name_for_stock_items").val()); 
            formData.append('provide_name_in_local_language_for_stock_items', $("#provide_name_in_local_language_for_stock_items").val());
            formData.append('provide_part_number_for_stock_items', $("#provide_part_number_for_stock_items").val()); 
            formData.append('provide_descriptions_for_stock_items', $("#provide_descriptions_for_stock_items").val()); 
            formData.append('provide_notes_for_stock_items', $("#provide_notes_for_stock_items").val()); 
            formData.append('use_stock_group_for_stock_items', $("#use_stock_group_for_stock_items").val()); 
            formData.append('use_stock_category_for_stock_items', $("#use_stock_category_for_stock_items").val()); 
            formData.append('provide_units_of_measure_for_stock_items', $("#provide_units_of_measure_for_stock_items").val()); 
            formData.append('use_alternate_units_for_stock_items', $("#use_alternate_units_for_stock_items").val()); 
            formData.append('maintain_stock_items_in_batches', $("#maintain_stock_items_in_batches").val()); 
            formData.append('set_bom_for_stock_items', $("#set_bom_for_stock_items").val()); 
            formData.append('provide_standard_buying_and_selling_rates', $("#provide_standard_buying_and_selling_rates").val()); 
            formData.append('provide_mrp_details_for_stock_items', $("#provide_mrp_details_for_stock_items").val()); 
            
            formData.append('is_cost_tracking_applicable_for_stock_items', $("#is_cost_tracking_applicable_for_stock_items").val()); 
            formData.append('set_default_accounting_allocations_for_stock_items', $("#set_default_accounting_allocations_for_stock_items").val()); 
            formData.append('use_costing_and_market_valuation_methods_for_stock_items', $("#use_costing_and_market_valuation_methods_for_stock_items").val()); 
          
            formData.append('set_options_for_stock_item_behaviour', $("#set_options_for_stock_item_behaviour").val()); 
            formData.append('provide_opening_balances_for_stock_items', $("#provide_opening_balances_for_stock_items").val()); 
            formData.append('provide_gst_details_for_stock_items', $("#provide_gst_details_for_stock_items").val()); 
            formData.append('provide_hsn_sac_details_for_stock_items', $("#provide_hsn_sac_details_for_stock_items").val()); 
            formData.append('provide_hsn_sac_description_for_stock_items', $("#provide_hsn_sac_description_for_stock_items").val()); 
            formData.append('provide_breakup_of_tax_rate', $("#provide_breakup_of_tax_rate").val()); 
            formData.append('provide_cess_rate_details', $("#provide_cess_rate_details").val()); 
            formData.append('enable_reverse_charge_calculation', $("#enable_reverse_charge_calculation").val()); 
            formData.append('eligible_for_input_tax_credit', $("#eligible_for_input_tax_credit").val()); 
            formData.append('select_type_of_supply', $("#select_type_of_supply").val()); 
            formData.append('set_inclusive_of_duties_and_taxes_option', $("#set_inclusive_of_duties_and_taxes_option").val()); 
            formData.append('provide_rate_of_duty', $("#provide_rate_of_duty").val());       

            formData.append('li_token', token); 
           
        $.ajax({
            url: BASE_URL + "index.php/" + inventoryController + "/save_inventory_master_settings",
            type: 'POST',
            data:  formData,
            dataType: "JSON",
            processData: false,
            contentType: false,
            success: function(response) {
                toast_message("success", "Successful", response.message);
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                console.log(status);
                console.log(error);
            }
        });
    });
 });


$('.yes_no,.enable').keydown(function (e) {

if ($("#acc_inventory_master_settings2").hasClass("show")) {
   
    if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');
        currentId = $(this).attr('id');

        if (company_feature_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');

            var next = parseInt(currentTabindex) + 1;

            var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

            if (currentTabindex >= 11600 && currentTabindex < 11800) {

                if ($("#" + currentId).is('[data-target~="#company_feature_save"]')) {//when you press enter key from last input of company creation
                    $('#company_feature_save').modal('toggle');
                }
                else if(currentId =="provide_rate_of_duty")
                {
                  $("#save_inventory_master_settings_btn").focus();
                }

                

                while (next < 11800) {

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
    if (e.which === 83) {
        $("#save_inventory_master_settings_btn").click();
    }
    if (e.which === 67) {
        handleCancel();
    }
    // if (e.which === 27) {//ecc
      
    // }
}


});


function handleCancel() {

    const urlParams = new URLSearchParams(window.location.search);
    const source = urlParams.get('source');
    alert(source); 
   
    if (source === 'fromListIcon') {
        $('#acc_inventory_master_settings2').modal('hide');
        window.location.href = '<?php echo base_url(); ?>/Accounts?openModal=true';
        
    } else if (source === 'fromHeaderNav') {
        // window.location.href = '<-?php echo base_url(); ?>';
        window.location.href = '<?php echo base_url(); ?>/Accounts';
    }
}


$('#cancel_inventory_master_settings_btn').click(handleCancel);

$(document).keydown(function(e) {
    if (e.key === "Escape") {
        handleCancel();
    }
});

$('#stock_item_cancel_icon').click(handleCancel);

    </script>
    <script>
         $(document).ready(function() {
                $('#acc_inventory_master_settings2').modal('show');
                  // check the value on Set Components List in StockItems
                if($("#provide_units_of_measure_for_stock_items").val()=='no')
                {
                    $("#use_alternate_units_for_stock_items").attr('disabled', true);
                    if($("#use_alternate_units_for_stock_items").hasClass("enable"))
                    {
                        $("#use_alternate_units_for_stock_items").removeClass("enable");
                    }
                }
                if($("#provide_units_of_measure_for_stock_items").val()=='yes')
                {
                    $("#use_alternate_units_for_stock_items").attr('disabled', false);
                    if(!$("#use_alternate_units_for_stock_items").hasClass("enable"))
                    {
                        $("#use_alternate_units_for_stock_items").addClass("enable");
                    }
                }   
            if($("#provide_gst_details_for_stock_items").val()=='no')
                {
                    $(".inventory_gst_active_inactive select").attr('disabled', true);
                    $(".inventory_gst_active_inactive select.enable").removeClass("enable");
                }
            if($("#provide_gst_details_for_stock_items").val()=='yes')
                {
                    
                    $(".inventory_gst_active_inactive select").attr('disabled', false);
                    $(".inventory_gst_active_inactive select").addClass("enable");
                    if($("#provide_hsn_sac_details_for_stock_items").val()=='no')
                {
                    $("#provide_hsn_sac_description_for_stock_items").attr('disabled', true);
                    if($("#provide_hsn_sac_description_for_stock_items").hasClass("enable"))
                        {
                            $("#provide_hsn_sac_description_for_stock_items").removeClass("enable");
                        }
                }
            if($("#provide_hsn_sac_details_for_stock_items").val()=='yes')
                {
                    $("#provide_hsn_sac_description_for_stock_items").attr('disabled', false);
                    if(!$("#provide_hsn_sac_description_for_stock_items").hasClass("enable"))
                        {
                            $("#provide_hsn_sac_description_for_stock_items").addClass("enable");
                        }
                }

                }

            });//document ready close




       
       // on change on Set Components List in StockItems
            $("#provide_units_of_measure_for_stock_items").on("change",function(){
            if($(this).val()=='no')
                {
                    $("#use_alternate_units_for_stock_items").attr('disabled', true);
                    if($("#use_alternate_units_for_stock_items").hasClass("enable"))
                    {
                        $("#use_alternate_units_for_stock_items").removeClass("enable");
                    }
                   
                }
            if($(this).val()=='yes')
                {
                    $("#use_alternate_units_for_stock_items").attr('disabled', false);
                    if(!$("#use_alternate_units_for_stock_items").hasClass("enable"))
                    {
                        $("#use_alternate_units_for_stock_items").addClass("enable");
                    }
                   
                }
        });
        $("#provide_gst_details_for_stock_items").on("change",function(){
            if($(this).val()=='no')
                {
                    $(".inventory_gst_active_inactive select").attr('disabled', true);
                    $(".inventory_gst_active_inactive select.enable").removeClass("enable");
                }
            if($(this).val()=='yes')
                {
                    $(".inventory_gst_active_inactive select").attr('disabled', false);
                    $(".inventory_gst_active_inactive select").addClass("enable");
                }
        });

        //provide_hsn_sac_details_for_stock_items on change 
        $("#provide_hsn_sac_details_for_stock_items").on("change",function(){
            if($(this).val()=='no')
                {
                    $("#provide_hsn_sac_description_for_stock_items").attr('disabled', true);
                    if($("#provide_hsn_sac_description_for_stock_items").hasClass("enable"))
                        {
                            $("#provide_hsn_sac_description_for_stock_items").removeClass("enable");
                        }
                }
            if($(this).val()=='yes')
                {
                    $("#provide_hsn_sac_description_for_stock_items").attr('disabled', false);
                    if(!$("#provide_hsn_sac_description_for_stock_items").hasClass("enable"))
                        {
                            $("#provide_hsn_sac_description_for_stock_items").addClass("enable");
                        }
                }
        });
        
       
        

    </script>

</body>
</html>
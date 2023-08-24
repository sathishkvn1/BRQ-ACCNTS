<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <style>
        /* .error_mg {
            color: Red;
        } */
        #company_gst_an_other_details select {}
    </style>
</head>

<body>

    <!------------------------------------------------------------------
                    Modal for GST Details Start 
    ------------------------------------------------------------------>
    <div class="modal  modal_common modal_centered_lg gst_details my-modal" id="company_gst_an_other_details" tabindex="-1" data-backdrop="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>gst Rate and Other Details</h6>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row gst-full-content-row">
                        <!-- Left Side Start Here -->
                        <div class="col-md-6 left_side_content">

                            <!-- Left Content -->
                            <div class="row">

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>HSN/SAC & Related Details</h6>

                                    <!-- Single Row Start Here -->
                                    <!--  start of GST Registration Details -->

                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>HSN/SAC Details<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable autofocus" tabindex="10600" class="hsn_sac_details_id" name="hsn_sac_details_id"  id="hsn_sac_details_id">
                                                <!-- <option value="0">Not Defines</option>
                                                <option value="1">Specify Details Here</option>
                                                <option value="2">Use Gst Classification</option>
                                                <option value="3">Specify in Voucher</option> -->
                                                <?php
                                                if (isset($hsn_sac_action)): foreach ($hsn_sac_action as $row):
                                                        $name = $row->hsn_sac_related_action;
                                                        $id = $row->id;
                                                        $defaultOptionId = 1;
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>" ><?php echo $name; ?>
                                                        </option>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <div class="voucher_hide_first">
                                        <!-- Single Row Start Here -->
                                        <div class="row" id="hsn_gst_classification_row">
                                            <div class="col-md-8">
                                                <label>Classification<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- <input type="text" class="hsn_gst_classification_id enable" name="hsn_gst_classification_id" id="hsn_gst_classification_id" tabindex="10601"> -->
                                                <select class="enable autofocus" tabindex="10600" class="hsn_sac_details_id" name="hsn_gst_classification_id"  id="hsn_gst_classification_id">
                                               
                                                <?php
                                                if (isset($classification_name)): foreach ($classification_name as $row):
                                                        $name = $row->gst_classification_name;
                                                        $id = $row->id;
                                                        $defaultOptionId = 1;
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>" ><?php echo $name; ?>
                                                        </option>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>HSN/SAC<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" name="hsn_sac_number" id="hsn_sac_number" tabindex="10602">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Description<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" name="hsn_sac_description" id="hsn_sac_description" tabindex="10603">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                    </div>

                                </div>
                                <!--  start of GST Registration Details -->
                                <!-- Single features Section End Here -->

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12" id="gst_rate_and_ralated_details_section">
                                    <h6>GST Rate & Related Details</h6>
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>GST Rate Details<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select tabindex="10604" class="enable" name="gst_rate_details_id" id="gst_rate_details_id">
                                                <!-- <option value="0">Not Defines</option>
                                                <option value="1">Specify Details Here</option>
                                                <option value="2">Specify Slab-Based Rates</option>
                                                <option value="3">Use Gst Classification</option>
                                                <option value="4">Specify in Voucher</option> -->
                                                <?php
                                                if (isset($gst_rate)): foreach ($gst_rate as $row):
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



                                    <div class="voucher_hide_second">
                                        <!--show and hide section-->

                                        <!-- Single Row Start Here -->
                                        <div class="row" id="set_gst_classification_row">
                                            <div class="col-md-8">
                                                <label>Classification<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- <input type="text" class="enable" name="gst_classification_id" id="gst_classification_id" tabindex="10605"> -->
                                                <select class="enable autofocus" tabindex="10600" class="hsn_sac_details_id" name="gst_classification_id"  id="gst_classification_id">
                                               
                                               <?php
                                               if (isset($classification_name)): foreach ($classification_name as $row):
                                                       $name = $row->gst_classification_name;
                                                       $id = $row->id;
                                                       $defaultOptionId = 1;
                                                      
                                                       ?>
                                                       <option value="<?php echo $id; ?>" ><?php echo $name; ?>
                                                       </option>
                                                       <?php
                                                   endforeach;
                                               endif;
                                               ?>
                                           </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Taxability Type <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable" name="taxability_type_id" id="taxability_type_id" tabindex="10606">
                                                    <!-- <option value="1">Exempt</option>
                                                    <option value="2">Nil Rated</option>
                                                    <option value="3">Taxable</option> -->
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


                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>IGST Rate <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="igst_rate" name="igst_rate" style="width:30px !important;margin-right:3px !important" value="1" class="enable" tabindex="10607">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>CGST Rate <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="cgst_rate" name="cgst_rate" style="width:30px !important;margin-right:3px !important" value="1" class="enable" tabindex="10608">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>SGST/UTGST Rate <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="sgst_utgst_rate" name="sgst_utgst_rate" style="width:30px !important;margin-right:3px !important" value="1" class="enable" tabindex="10609">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Cess Valuation Type <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select tabindex="10610" class="enable" name="cess_valuation_type_id" id="cess_valuation_type_id">
                                                    <!-- <option value="0">Not Application</option>
                                                    <option value="1">Based on Quantity</option>
                                                    <option value="2">Based on Value</option>
                                                    <option value="3">Based on Value and Quantity</option> -->
                                                    <?php
                                                if (isset($gst_cess_valuation_type)): foreach ($gst_cess_valuation_type as $row):
                                                        $name = $row->gst_cess_valuation_type;
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
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Cess Rate <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="cess_rate" name="cess_rate" style="width:30px !important;margin-right:3px !important" value="1" class="enable" tabindex="10611">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Application for Reverse Charge <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no  enable" tabindex="10612" name="applicable_for_reverse_charge" id="applicable_for_reverse_charge">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Eligible for Input Tax Credit <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no  enable" tabindex="10613" name="eligible_for_input_tax_credit" id="eligible_for_input_tax_credit">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                    </div>
                                    <!-- Single features Section End Here -->
                                </div>
                            </div>
                            <!-- Left Content -->

                        </div>
                        <!-- Left Side End Here -->

                        <!-- Right Side Start Here -->
                        <div class="col-md-6 right_side_content">

                            <!-- Right Content -->
                            <div class="row">

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12">
                                    <h6>e-Way Bill Details</h6>

                                    <div class="row main_content">

                                        <!-- Main Content Start Here -->
                                        <div class="col-md-8">
                                            <label>Interstate Threshold Limit<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="input" tabindex="10614" class="enable" name="interstate_threshold_limit" id="interstate_threshold_limit">
                                        </div>
                                        
                                        <div class="col-md-8">
                                            <label>Intrastate Threshold Limit<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="input" tabindex="10615" class="enable" name="intrastate_threshold_limit" id="intrastate_threshold_limit">
                                        </div>
                                        <!-- Main Content End Here -->
                                        <!-- Main Content Start Here -->
                                        
                                        <!-- Main Content End Here -->
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-8">
                                            <label>Threshold Limit included<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class=" show_hide_select enable" tabindex="10616" id="threshold_limit_id" class="threshold_limit_id">
                                                <!-- <option value="1">Value of Invoice</option>
                                                <option value="2">Value of Taxable & Exempt Goods</option>
                                                <option value="3">Value of Taxable Goods</option> -->
                                                <?php
                                                if (isset($gst_threshold_limit_values)): foreach ($gst_threshold_limit_values as $row):
                                                        $name = $row->threshold_limit_value;
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
                                        <!-- Main Content End Here -->
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-8">
                                            <label>Print e-Way Bill with Invoice <span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="10617" name="print_e_way_bill_with_invoice" id="print_e_way_bill_with_invoice">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->

                                        <!-- Sub Content Start here -->
                                    </div>
                                </div>

                                <!-- Single features Section End Here -->
                                <div class="col-md-12" id="additional_configuration_section">
                                    <h6>additional Configuration</h6>

                                    <!-- <div class="row main_content"> -->
                                    <!-- Main Content Start Here -->
                                    <!-- --------- single row start here --------------- -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Ignore difference in tax values up <span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="ignore_differences_in_tax_values_up_to" id="ignore_differences_in_tax_values_up_to" tabindex="10618"></input>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>When actual tax is <span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                        <select class="yes_no enable" tabindex="10617" name="ignore_differences_in_tax_id"  id="ignore_differences_in_tax_id">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                           
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Send e-way bill with invoice <span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                        <select class="yes_no enable" tabindex="10617"  name="send_e_way_bill_with_e_invoice_in_sales" id="send_e_way_bill_with_e_invoice_in_sales">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                        </select>
                                           
                                        </div>
                                    </div>
                                    <!-- --------- single end here start here --------------- -->
                                    <!-- --------- single row start here --------------- -->
                                    <div class="row" style="align-items: baseline;">
                                        <div class="col-md-8">
                                            <label>Show GST Advances for adjustments in transaction<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="10619" name="show_gst_advances_for_adjustments_in_trasaction" id="show_gst_advances_for_adjustments_in_trasaction">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- --------- single end here start here --------------- -->




                                    <!-- --------- single row start here --------------- -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Applicable From<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" tabindex="10620" class="yes_no  enable" name="gst_advances_for_adjustments_applicable_from" id="gst_advances_for_adjustments_applicable_from" data-target="#gst-other_details_Modal">
                                        </div>
                                    </div>
                                    <!-- --------- single row start here --------------- -->
                                    <!-- Main Content End Here -->



                                    <!-- </div> -->
                                </div>
                            </div>
                            <!-- Right Content -->

                        </div>
                        <!-- Right Side End Here -->
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade backdrop bottom modal-old-vouchers masters_add_edit accept_save" id="gst_other_details_Modal">
        <div class="modal-dialog modal-full-height modal-bottom">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div>Confirm</div>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h6>Accept & Save ? </h6>
                        </div>

                        <div class="col-md-12">
                            <a class="btn" href="#" id="save_btn_gst_other_details" onclick=""><i class="fas fa-save"></i><span>S</span>ave</a>
                            <a class="btn" href="#" class="close" data-dismiss="modal" id="btn_gst_cancel" aria-label="Close"><i class="fas fa-times-circle"></i><span>C</span>ancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
////// fr saving
$('#save_btn_gst_other_details').click(function () {
            //////////////fr console////////
          

            var token = "<?php echo $_SESSION['li_token']; ?>";
            // Save the changes made in the gst_modal
      
            $.ajax({
                url: BASE_URL + "index.php/" + accountsController + "/save_gst_other_details",
                type: 'POST',
                dataType: 'json',
                data: {
                    hsn_sac_details_id: $("#hsn_sac_details_id").val(),
                    hsn_gst_classification_id: $("#hsn_gst_classification_id").val(),
                    hsn_sac_number: $("#hsn_sac_number").val(),
                    hsn_sac_description: $("#hsn_sac_description").val(),
                    gst_rate_details_id: $("#gst_rate_details_id").val(),
                    gst_classification_id: $("#gst_classification_id").val(),
                    taxability_type_id: $("#taxability_type_id").val(),
                    igst_rate: $("#igst_rate").val(),
                    cgst_rate: $("#cgst_rate").val(),
                    sgst_utgst_rate: $("#sgst_utgst_rate").val(),
                    cess_valuation_type_id: $("#cess_valuation_type_id").val(),
                    cess_rate: $("#cess_rate").val(),
                    applicable_for_reverse_charge: $("#applicable_for_reverse_charge").val(),
                    eligible_for_input_tax_credit: $("#eligible_for_input_tax_credit").val(),
                    interstate_threshold_limit: $("#interstate_threshold_limit").val(),
                    intrastate_threshold_limit: $("#intrastate_threshold_limit").val(),
                    threshold_limit_id: $('#threshold_limit_id').val(),
                    print_e_way_bill_with_invoice: $("#print_e_way_bill_with_invoice").val(),
                    send_e_way_bill_with_e_invoice_in_sales:$("#send_e_way_bill_with_e_invoice_in_sales").val(),
                    ignore_differences_in_tax_values_up_to: $("#ignore_differences_in_tax_values_up_to").val(),
                    ignore_differences_in_tax_id:$("#ignore_differences_in_tax_id").val(),
                    show_gst_advances_for_adjustments_in_trasaction: $("#show_gst_advances_for_adjustments_in_trasaction").val(),
                    gst_advances_for_adjustments_applicable_from: $("#gst_advances_for_adjustments_applicable_from").val(),
                     li_token: token
                },
                success: function (response) {
                    console.log("response of other details gst is",response);
                    if (response.message === 'Gst other details inserted successfully.') {
                    toast_message("success", "Successful", response.message);
                    $('#gst_other_details_Modal').modal('hide');
                    $('#company_gst_an_other_details').modal('hide');
                   
                } else {
                    toast_message("failure", "Failed", response.message);
                }
                  
                },
                error: function (xhr, status, error) {
                console.log('Error response:', xhr.responseText);
                console.log('An error occurred:', error);
                alert('An error occurred while saving GST details. Please check the console for more information.');
            }
            });
 });
 //////////////////////

    $('.yes_no,.enable').on('keydown', function(e) {
    if ($("#company_gst_an_other_details").hasClass("show")) {
        if (e.key === "Enter" || e.key === "Tab") {
            if (e.key === "Tab") {
                e.preventDefault(); 
            }
            
            company_feature_field_id = $(this).prop('type');
            currentId = $(this).attr('id');
            if (company_feature_field_id !== 'submit') {
                currentTabindex = $(this).attr('tabindex');

                var next = parseInt(currentTabindex) + 1;

                var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');
                
              
                if (currentId == "igst_rate") {
                    var igst_rate = document.getElementById("igst_rate").value;
                    if (igst_rate < 0) {
                        alert_message("warning", "warning", "IGST rate cannot be negative..");
                        return;
                    }
                }
                if (currentId == "cgst_rate") {
                    // alert("HAIU");
                    var cgst_rate = document.getElementById("cgst_rate").value;
                   
                    if (cgst_rate < 0) {
                        alert_message("warning", "warning", "CESS rate cannot be negative..");
                        return;
                    }
                  }
                if (currentId == "sgst_utgst_rate") {
                  
                    var sgst_utgst_rate = document.getElementById("sgst_utgst_rate").value;
                   
                    if (sgst_utgst_rate < 0) {
                        alert_message("warning", "warning", "SGST/UTGST Rate  rate cannot be negative..");
                        return;
                    }
                  }
                  if (currentId == "cess_rate") {
                  
                    var cess_rate = document.getElementById("cess_rate").value;
                   
                    if (cess_rate < 0) {
                        alert_message("warning", "warning", "Cess Rate  rate cannot be negative..");
                        return;
                    }
                  }
                
                if (currentId == "gst_advances_for_adjustments_applicable_from") {
                    $("#gst_other_details_Modal").modal("show");
                }
                
                if (currentTabindex >= 10600 && currentTabindex < 10800) {
                    while (next < 10800) {
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

 //////////////////////

    // ===== hide show classification based on option select in ready function=====
    var hsn_sac_details_id_selected_option_ready = ($("#hsn_sac_details_id option:selected").text().toLowerCase());
    var gst_rate_details_id_selected_option_ready = ($("#gst_rate_details_id option:selected").text().toLowerCase());
    if (hsn_sac_details_id_selected_option_ready == 'use gst classification') {
        $("#hsn_gst_classification_row").show();
        if (!$("#hsn_gst_classification_id").hasClass("enable")) {
            $("#hsn_gst_classification_id").addClass("enable");
        }
    }
    if (hsn_sac_details_id_selected_option_ready != '3') //use gst classification
     {
        $("#hsn_gst_classification_row").hide();
        if ($("#hsn_gst_classification_id").hasClass("enable")) {
            $("#hsn_gst_classification_id").removeClass("enable");
        }
    }
    if (gst_rate_details_id_selected_option_ready == '3') {
        $("#set_gst_classification_row").show();
        if (!$("#gst_classification_id").hasClass("enable")) {
            $("#gst_classification_id").addClass("enable");
        }
    }
    if (gst_rate_details_id_selected_option_ready != '3') {
        $("#set_gst_classification_row").hide();
        if ($("#gst_classification_id").hasClass("enable")) {
            $("#gst_classification_id").removeClass("enable");
        }
    }

    // ---------- hide and show classification based on select input field start here----------

    $("#hsn_sac_details_id").on("change", function() {
        var hsn_sac_details_id_selected_option = ($("#hsn_sac_details_id option:selected").val());
        if (hsn_sac_details_id_selected_option == '3') {
            $("#hsn_gst_classification_row").show();
            if (!$("#hsn_gst_classification_id").hasClass("enable")) {
                $("#hsn_gst_classification_id").addClass("enable");
            }
        }
        if (hsn_sac_details_id_selected_option != '3') {
            $("#hsn_gst_classification_row").hide();
            if ($("#hsn_gst_classification_id").hasClass("enable")) {
                $("#hsn_gst_classification_id").removeClass("enable");
            }
        }
        if (hsn_sac_details_id_selected_option == '4') //Specify in Voucher
         {
            $(".voucher_hide_first").hide();
            if ($("#hsn_sac_number").hasClass("enable")) {
                $("#hsn_sac_number").removeClass("enable");
            }
            if ($("#hsn_sac_description").hasClass("enable")) {
                $("#hsn_sac_description").removeClass("enable");
            }
        }
        if (hsn_sac_details_id_selected_option != '4') {
            // alert("hello");
            $(".voucher_hide_first").show();

            if (!$("#hsn_sac_number").hasClass("enable")) {
                $("#hsn_sac_number").addClass("enable");
            }
            if (!$("#hsn_sac_description").hasClass("enable")) {
                $("#hsn_sac_description").addClass("enable");
            }
        }
    })
    $("#gst_rate_details_id").on("change", function() {

        var gst_rate_details_id_option = ($("#gst_rate_details_id option:selected").val());
        if (gst_rate_details_id_option == '4')  //Use GST Classification
         {
            $("#set_gst_classification_row").show();
            if (!$("#gst_classification_id").hasClass("enable")) {
                $("#gst_classification_id").addClass("enable");
            }
        }
        if (gst_rate_details_id_option != '4') {
            $("#set_gst_classification_row").hide();
            if ($("#gst_classification_id").hasClass("enable")) {
                $("#gst_classification_id").removeClass("enable");
            }
        }
        if (gst_rate_details_id_option == '5')  //Specify in Voucher
        {
            $(".voucher_hide_second").hide();
            if ($("#igst_rate").hasClass("enable")) {
                $("#igst_rate").removeClass("enable");
            }
            if ($("#taxability_type_id").hasClass("enable")) {
                $("#taxability_type_id").removeClass("enable");
            }
            if ($("#sgst_utgst_rate").hasClass("enable")) {
                $("#sgst_utgst_rate").removeClass("enable");
            }
            if ($("#cess_valuation_type_id").hasClass("enable")) {
                $("#cess_valuation_type_id").removeClass("enable");
            }
            if ($("#cess_rate").hasClass("enable")) {
                $("#cess_rate").removeClass("enable");
            }
            if ($("#cgst_rate").hasClass("enable")) {
                $("#cgst_rate").removeClass("enable");
            }
            if ($("#applicable_for_reverse_charge").hasClass("enable")) {
                $("#applicable_for_reverse_charge").removeClass("enable");
            }
            if ($("#eligible_for_input_tax_credit").hasClass("enable")) {
                $("#eligible_for_input_tax_credit").removeClass("enable");
            }
        }
        if (gst_rate_details_id_option != '5') {

            $(".voucher_hide_second").show();
            if (!$("#igst_rate").hasClass("enable")) {
                $("#igst_rate").addClass("enable");
            }
            if (!$("#taxability_type_id").hasClass("enable")) {
                $("#taxability_type_id").addClass("enable");
            }
            if (!$("#sgst_utgst_rate").hasClass("enable")) {
                $("#sgst_utgst_rate").addClass("enable");
            }
            if (!$("#cess_valuation_type_id").hasClass("enable")) {
                $("#cess_valuation_type_id").addClass("enable");
            }
            if (!$("#cess_rate").hasClass("enable")) {
                $("#cess_rate").addClass("enable");
            }
            if (!$("#cgst_rate").hasClass("enable")) {
                $("#cgst_rate").addClass("enable");
            }
            if (!$("#applicable_for_reverse_charge").hasClass("enable")) {
                $("#applicable_for_reverse_charge").addClass("enable");
            }
            if (!$("#eligible_for_input_tax_credit").hasClass("enable")) {
                $("#eligible_for_input_tax_credit").addClass("enable");
            }
        }

    })




    // ---------- hide and show classification based on select input field start here----------
</script>
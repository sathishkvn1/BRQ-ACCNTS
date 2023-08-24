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
    <div class="modal  modal_common modal_centered_lg gst_details my-modal" data-value="gst_rate" id="company_gst_an_other_details"
        tabindex="-1" data-backdrop="false">
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
                                            <select class="enable autofocus" tabindex="10600" class="hsn_sac_details_id"
                                                id="hsn_sac_details_id">
                                                <option value="0">Not Defines</option>
                                                <option value="1">Specify Details Here</option>
                                                <option value="2">Use Gst Classification</option>
                                                <option value="3">Specify in Voucher</option>
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
                                                <input type="text" class="hsn_gst_classification_id enable" name="hsn_gst_classification_id"
                                                    id="hsn_gst_classification_id" tabindex="10601">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>HSN/SAC<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" name="hsn_sac_number"
                                                    id="hsn_sac_number" tabindex="10602">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Description<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" name="hsn_sac_description"
                                                    id="hsn_sac_description" tabindex="10603">
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
                                            <select tabindex="10604" class="enable" name="gst_rate_details_id"
                                                id="gst_rate_details_id">
                                                <option value="0">Not Defines</option>
                                                <option value="1">Specify Details Here</option>
                                                <option value="2">Specify Slab-Based Rates</option>
                                                <option value="3">Use Gst Classification</option>
                                                <option value="4">Specify in Voucher</option>
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
                                                <input type="text" class="enable" name="gst_classification_id"
                                                    id="gst_classification_id" tabindex="10605">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Taxability Type <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable" name="taxability_type_id" id="taxability_type_id"
                                                    tabindex="10606">
                                                    <option value="1">Exempt</option>
                                                    <option value="2">Nil Rated</option>
                                                    <option value="3">Taxable</option>
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
                                                <input type="text" id="igst_rate" name="igst_rate"
                                                    style="width:30px !important;margin-right:3px !important" value="1"
                                                    class="enable" tabindex="10607">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>CGST Rate <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="cgst_rate" name="cgst_rate"
                                                    style="width:30px !important;margin-right:3px !important" value="1"
                                                    class="enable" tabindex="10608">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>SGST/UTGST Rate <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="sgst_utgst_rate" name="sgst_utgst_rate"
                                                    style="width:30px !important;margin-right:3px !important" value="1"
                                                    class="enable" tabindex="10609">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Cess Valuation Type <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select tabindex="10610" class="enable" name="cess_valuation_type_id"
                                                    id="cess_valuation_type_id">
                                                    <option value="0">Not Application</option>
                                                    <option value="1">Based on Quantity</option>
                                                    <option value="2">Based on Value</option>
                                                    <option value="3">Based on Value and Quantity</option>
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
                                                <input type="text" id="cess_rate" name="cess_rate"
                                                    style="width:30px !important;margin-right:3px !important" value="1"
                                                    class="enable" tabindex="10611">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Application for Reverse Charge <span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no  enable" tabindex="10612"
                                                    name="applicable_for_reverse_charge"
                                                    id="applicable_for_reverse_charge">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Eligible for Input Tax Credit <span
                                                        class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no  enable" tabindex="10613"
                                                    name="eligible_for_input_tax_credit"
                                                    id="eligible_for_input_tax_credit">
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
                                            <input type="input" tabindex="10614" class="enable"
                                                name="interstate_threshold_limit" id="interstate_threshold_limit">
                                        </div>
                                        <!-- Main Content End Here -->
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-8">
                                            <label>Intrastate Threshold Limit<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="input" tabindex="10615" class="enable"
                                                name="intrastate_threshold_limit" id="intrastate_threshold_limit">
                                        </div>
                                        <!-- Main Content End Here -->
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-8">
                                            <label>Threshold Limit included<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class=" show_hide_select enable" tabindex="10616"
                                                id="threshold_limit_id" class="threshold_limit_id">
                                                <option value="1">Value of Invoice</option>
                                                <option value="2">Value of Taxable & Exempt Goods</option>
                                                <option value="3">Value of Taxable Goods</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->
                                        <!-- Main Content Start Here -->
                                        <div class="col-md-8">
                                            <label>Print e-Way Bill with Invoice <span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="10617"
                                                name="print_e_way_bill_with_invoice" id="print_e_way_bill_with_invoice">
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
                                            <label>Ignore difference in tax values up <span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="gst_registration_name"
                                                id="gst_registration_name" value="kerala" tabindex="10618"></input>
                                        </div>
                                    </div>
                                    <!-- --------- single end here start here --------------- -->
                                    <!-- --------- single row start here --------------- -->
                                    <div class="row" style="align-items: baseline;">
                                        <div class="col-md-8">
                                            <label>Show GST Advances for adjustments in transaction<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="10619"
                                                name="gst_ignore_zero_prefixed_in_supplier_document_number"
                                                id="gst_ignore_zero_prefixed_in_supplier_document_number">
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
                                            <input type="date" tabindex="10620" class="enable"
                                                name="gst_e_way_bill_applicable_from_date"
                                                id="gst_e_way_bill_applicable_from_date">
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

    <div class="modal fade backdrop bottom modal-old-vouchers masters_add_edit accept_save" id="gstModal">
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
                            <a class="btn" href="#" id="save-btn-gst" onclick=""><i
                                    class="fas fa-save"></i><span>S</span>ave</a>
                            <a class="btn" href="#" class="close" data-dismiss="modal" id="btn_gst_cancel"
                                aria-label="Close"><i class="fas fa-times-circle"></i><span>C</span>ancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
     $('.yes_no,.enable').keydown(function (e) {

if ($("#company_gst_an_other_details").hasClass("show")) {
    if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');
        currentId = $(this).attr('id');
        if (company_feature_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');

            var next = parseInt(currentTabindex) + 1;

            var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

            if (currentTabindex >= 10600 && currentTabindex < 10800) {

                // if ($("#" + currentId).is('[data-target~="#company_feature_save"]')) {//when you press enter key from last input of company creation
                //     $('#company_feature_save').modal('toggle');
                // }


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

})

    // ===== hide show classification based on option select in ready function=====
    var hsn_sac_details_id_selected_option_ready = ($("#hsn_sac_details_id option:selected").text().toLowerCase());
    var gst_rate_details_id_selected_option_ready = ($("#gst_rate_details_id option:selected").text().toLowerCase());
    if (hsn_sac_details_id_selected_option_ready == 'use gst classification') {
        $("#hsn_gst_classification_row").show();
        if (!$("#hsn_gst_classification_id").hasClass("enable")) {
            $("#hsn_gst_classification_id").addClass("enable");
        }
    }
    if (hsn_sac_details_id_selected_option_ready != 'use gst classification') {
        $("#hsn_gst_classification_row").hide();
        if ($("#hsn_gst_classification_id").hasClass("enable")) {
            $("#hsn_gst_classification_id").removeClass("enable");
        }
    }
    if (gst_rate_details_id_selected_option_ready == 'use gst classification') {
        $("#set_gst_classification_row").show();
        if (!$("#gst_classification_id").hasClass("enable")) {
            $("#gst_classification_id").addClass("enable");
        }
    }
    if (gst_rate_details_id_selected_option_ready != 'use gst classification') {
        $("#set_gst_classification_row").hide();
        if ($("#gst_classification_id").hasClass("enable")) {
            $("#gst_classification_id").removeClass("enable");
        }
    }

    // ---------- hide and show classification based on select input field start here----------

    $("#hsn_sac_details_id").on("change", function () {
        var hsn_sac_details_id_selected_option = ($("#hsn_sac_details_id option:selected").text().toLowerCase());
        if (hsn_sac_details_id_selected_option == 'use gst classification') {
            $("#hsn_gst_classification_row").show();
            if (!$("#hsn_gst_classification_id").hasClass("enable")) {
                $("#hsn_gst_classification_id").addClass("enable");
            }
        }
        if (hsn_sac_details_id_selected_option != 'use gst classification') {
            $("#hsn_gst_classification_row").hide();
            if ($("#hsn_gst_classification_id").hasClass("enable")) {
                $("#hsn_gst_classification_id").removeClass("enable");
            }
        }
        if (hsn_sac_details_id_selected_option == 'specify in voucher') {
          $(".voucher_hide_first").hide();
            if ($("#hsn_sac_number").hasClass("enable")) {
                $("#hsn_sac_number").removeClass("enable");
            }
            if ($("#hsn_sac_description").hasClass("enable")) {
                $("#hsn_sac_description").removeClass("enable");
            }
         }
         if (hsn_sac_details_id_selected_option != 'specify in voucher')
          {
            alert("hello");
            $(".voucher_hide_first").show();
     
            if (!$("#hsn_sac_number").hasClass("enable")) {
                $("#hsn_sac_number").addClass("enable");
            }
            if (!$("#hsn_sac_description").hasClass("enable")) {
                $("#hsn_sac_description").addClass("enable");
            }
        }
    })
    $("#gst_rate_details_id").on("change", function () {

        var gst_rate_details_id_option = ($("#gst_rate_details_id option:selected").text().toLowerCase());
        if (gst_rate_details_id_option == 'use gst classification') {
            $("#set_gst_classification_row").show();
            if (!$("#gst_classification_id").hasClass("enable")) {
                $("#gst_classification_id").addClass("enable");
            }
        }
        if (gst_rate_details_id_option != 'use gst classification') {
            $("#set_gst_classification_row").hide();
            if ($("#gst_classification_id").hasClass("enable")) {
                $("#gst_classification_id").removeClass("enable");
            }
        }
        if (gst_rate_details_id_option == 'specify in voucher') {
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
        if (gst_rate_details_id_option != 'specify in voucher') {

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
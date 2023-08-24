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

        .gstin_uin {
            text-transform: uppercase;
        }
    </style>
</head>

<body>

    <!------------------------------------------------------------------
                    Modal for GST Details Start 
    ------------------------------------------------------------------>
    <!-- <div class="modal fade backdrop modal_common modal_centered_lg gst_details mainmodal my-modal"
        id="gst_modal" tabindex="-1"> -->
 <div class="modal fade backdrop modal_common modal_centered_lg gst_details my-modal" data-value="enable_gst" id="gst_modal" tabindex="-1"> 
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>GST Details</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Registration Status<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="enable autofocus" tabindex="10400"
                                            name="gst_registration_status_id" id="gst_registration_status_id" >
                                             <?php
                                                if (isset($gst_registration_status_type)):
                                                    foreach ($gst_registration_status_type as $row):
                                                        $name = $row->gst_registration_status;
                                                        $id = $row->id;
                                                     
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>" data-value="<?php echo $name; ?>"
                                                            ><?php echo $name; ?>
                                                        </option>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                        </select>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <h6>GST Registration Details</h6>

                                    <!-- Single Row Start Here -->
                                    <!--  start of GST Registration Details -->

                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>State<span class="colon">:</span></label>
                                            <input type="" id="gst_row_id" name="gst_row_id">
                                        </div>
                                        <div class="col-md-4">
                                        
                                            <select class="enable" tabindex="10401" name="gst_state_id"
                                                id="gst_state_id" >
                                              
                                                <?php
                                                if (isset($gst_states)):
                                                    foreach ($gst_states as $row):
                                                        $name = $row->state_name;
                                                        $id = $row->id;
                                                     
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>" 
                                                            ><?php echo $name; ?>
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
                                    <!-- <div class="row">
                                        <div class="col-md-8">
                                            <label>Address Type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select tabindex="10402" class="enable" id="gst_address_type_id"
                                                name="gst_address_type_id" > -->
                                                <!-- <option value="">Primaryyy</option>
                                                <option value="">Address1</option> -->
                                            <!-- </select>
                                           
                                        </div>
                                    </div> -->
                                    <!-- Single Row End Here -->
                             <div class="row"> 
                                <div class="col-md-8">
                                    <label>Address Type<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <select tabindex="10402" class="enable" id="gst_address_type_id" name="gst_address_type_id">
                                    <?php
                                                if (isset($address_type)):
                                                    foreach ($address_type as $row):
                                                        $name = $row['address_type'];
                                                        $id = $row['id'];
                                                     
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>" 
                                                            ><?php echo $name; ?>
                                                        </option>
                                                        <?php
                                                    endforeach;
                                                endif;
                                        ?>
                                    </select>
                                </div>
                            </div>



                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Registration Type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select tabindex="10403" class="enable" name="gst_registration_type_id"
                                                id="gst_registration_type_id" >
                                                <?php
                                                if (isset($gst_registration_type)):
                                                    foreach ($gst_registration_type as $row):
                                                        $name = $row->gst_registration_type;
                                                        $id = $row->id;
                                                        $defaultOptionId = 1;
                                                        $selected = ($id == $defaultOptionId) ? 'selected' : '';
                                                        ?>
                                                        <option value="<?php echo $id; ?>" data-value="<?php echo $name; ?>"
                                                            <?php echo $selected; ?>><?php echo $name; ?>
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
                                            <label>Assessee of Other Territory<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="10404"
                                                name="gst_assessee_of_other_territory"
                                                id="gst_assessee_of_other_territory">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>GSTIN / UIN<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="10405" name="gstin_uin" id="gstin_uin"
                                                class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row" id="gstr1_periodicity_id_row">
                                        <div class="col-md-8">
                                            <label>Periodicity of GSTR1<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select tabindex="10406" class="enable" name="gstr1_periodicity_id"
                                                id="gstr1_periodicity_id">
                                                <?php
                                                if (isset($gst_periodicity_type)): foreach ($gst_periodicity_type as $row):
                                                        $name = $row->gstr1_periodicity;
                                                        $id = $row->id;
                                                        $defaultOptionId = 1;
                                                        $selected = ($id == $defaultOptionId) ? 'selected' : '';
                                                        ?>
                                                        <option value="<?php echo $id; ?>" <?php echo $selected; ?>><?php echo $name; ?>
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
                                            <label>Place of Supply(for Inward)<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">

                                         
                                            <select tabindex="10407" class="enable" id="gst_place_of_supply_id"
                                                name="gst_place_of_supply_id">
                                                <?php
                                                if (isset($address_type)):
                                                    foreach ($address_type as $row):
                                                        $name = $row['address_type'];
                                                        $id = $row['id'];
                                                     
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>" 
                                                            ><?php echo $name; ?>
                                                        </option>
                                                        <?php
                                                    endforeach;
                                                endif;
                                              ?>
                                            </select>

                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->




                                </div>
                                <!--  start of GST Registration Details -->
                                <!-- Single features Section End Here -->

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12" id="e-Incoice_section">
                                    <h6>e-Invoice Details</h6>
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>e-invoice Applicable<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select tabindex="10408" class="yes_no enable"
                                                name="gst_is_e_invoicing_applicable" id="gst_is_e_invoicing_applicable">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- sub row start here -->
                                    <div class="col-md-12 sub_features_fr_yes">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label> Applicable From<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="date" class="enable" tabindex="10409"
                                                    name="gst_e_invoicing_applicable_from_date"
                                                    id="gst_e_invoicing_applicable_from_date">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Invoice bill from place<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" name="gst_e_invoice_bill_from_place"
                                                    id="gst_e_invoice_bill_from_place"
                                                    class=" gst_e_invoice_bill_from_place enable"
                                                    tabindex="10410"></input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                    </div>
                                    <!-- Single features Section End Here -->
                                </div>

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12" id="tax_Rate_Details_for_Turnover_section">
                                    <h6>Tax Rate Details for Turnover</h6>
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Tax Rate for taxable turnover<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="gst_tax_rate_for_taxable_turnover"
                                                name="gst_tax_rate_for_taxable_turnover"
                                                style="width:30px !important;margin-right:3px !important" value="1"
                                                class="enable" tabindex="10411">%</input>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Calculate tax based on<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select name="gst_composition_tax_calculation_type_id"
                                                id="gst_composition_tax_calculation_type_id" tabindex="10412"
                                                class="enable">
                                               
                                                <?php
                                                if (isset($gst_tax_calculation_type_id)):
                                                    foreach ($gst_tax_calculation_type_id as $row):
                                                        $name = $row->composition_tax_calculation_type;
                                                        $id = $row->id;
                                                     
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>" data-value="<?php echo $name; ?>"
                                                            ><?php echo $name; ?>
                                                        </option>
                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                                <!-- <option>Taxable Value</option>
                                                <option>Taxable,Exempt, & Nill Rated Calues</option> -->
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
                                            <label>e-Way Bill Applicable<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no show_hide_select enable" tabindex="10413"
                                                name="gst_is_e_way_bill_applicable" id="gst_is_e_way_bill_applicable">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- Main Content End Here -->

                                        <!-- Sub Content Start here -->
                                        <div class="col-md-12 sub_features_for_eWayBillApplicable show">

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Applicable From<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="date" tabindex="10414" class="enable"
                                                        name="gst_e_way_bill_applicable_from_date"
                                                        id="gst_e_way_bill_applicable_from_date">
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Goods Dispatched From<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select tabindex="10415" class="enable"
                                                        name="gst_goods_dispatched_from_id"
                                                        id="gst_goods_dispatched_from_id">
                                                        <?php
                                                if (isset($address_type)):
                                                    foreach ($address_type as $row):
                                                        $name = $row['address_type'];
                                                        $id = $row['id'];
                                                     
                                                       
                                                        ?>
                                                        <option value="<?php echo $id; ?>" 
                                                            ><?php echo $name; ?>
                                                        </option>
                                                        <?php
                                                    endforeach;
                                                endif;
                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <label>Application for intrastate<span
                                                            class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="yes_no  enable" tabindex="10416"
                                                        name="gst_is_e_way_bill_applicable_for_intrastate"
                                                        id="gst_is_e_way_bill_applicable_for_intrastate">
                                                        <option value="yes">Yes</option>
                                                        <option value="no" selected>No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Single Row End Here -->



                                        </div>
                                        <!-- Sub Content End here -->

                                        <!-- Sub Content Start here -->
                                    </div>
                                </div>

                                <!-- Single features Section End Here -->
                                <div class="col-md-12" id="reconcilation_configuration_section">
                                    <h6>Reconciliation Configuration</h6>

                                    <!-- <div class="row main_content"> -->
                                    <!-- Main Content Start Here -->
                                    <!-- --------- single row start here --------------- -->
                                    <div class="row" style="align-items:baseline;">
                                        <div class="col-md-8">
                                            <label>Use Voucher No. Date as Supplier Invoice No & Date<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="10417"
                                                name="gst_use_voucher_number_and_date_as_in_supplier_invoice"
                                                id="gst_use_voucher_number_and_date_as_in_supplier_invoice">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- --------- single end here start here --------------- -->
                                    <!-- --------- single row start here --------------- -->
                                    <div class="row" style="align-items: baseline;">
                                        <div class="col-md-8">
                                            <label>Ignore zero(0) if prefixed in Supplier Cocument No<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="10418"
                                                name="gst_ignore_zero_prefixed_in_supplier_document_number"
                                                id="gst_ignore_zero_prefixed_in_supplier_document_number">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- --------- single end here start here --------------- -->
                                    <!-- --------- single row start here --------------- -->
                                    <div class="row" style="align-items: baseline;">
                                        <div class="col-md-8">
                                            <label>Ignore special characters if used in Supplier Document No<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="10419"
                                                name="gst_ignore_special_characters_used_in_supplier_document_number"
                                                id="gst_ignore_special_characters_used_in_supplier_document_number">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- --------- single end here start here --------------- -->

                                    <!-- Main Content End Here -->



                                    <!-- </div> -->
                                </div>
                                <!-- Single features Section End Here -->
                                <div class="col-md-12" id="lut_bond_deatails_section">
                                    <h6>LUT/Bond Details</h6>

                                    <div class="row main_content">
                                        <!-- Main Content Start Here -->
                                        <!-- --------- single row start here --------------- -->
                                        <div class="col-md-8">
                                            <label>Provide LUT / Bond Details<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="10420" name="gst_lut_bond_details"
                                                id="gst_lut_bond_details">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                        <!-- --------- single end here start here --------------- -->


                                        <!-- Main Content End Here -->
                                    </div>
                                </div>
                                <!-- Single features Section End Here -->
                            </div>
                            <!-- Right Content -->

                        </div>
                        <!-- Right Side End Here -->

                        <div class="col-md-12 gst_bottom_side_content">
                            <div class="row">
                                <div class="col-md-6 left">
                                    <!-- Single Row Start Here -->
                                    <div class="row bottom-item">
                                        <div class="col-md-8">
                                            <label class="gst_registration_name_label"
                                                id="gst_registration_name_label">Registration Name<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="gst_registration_name"
                                                id="gst_registration_name" value="kerala" tabindex="10421"></input>

                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row" style="align-items:end;">
                                        <div class="col-md-8">
                                            <label id="gst_another_create_label">Create Another GST Registration<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="10423"
                                                name="gst_create_another_gst_registration"
                                                id="gst_create_another_gst_registration" data-target="#gstModal">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>

                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                </div>
                                <div class="col-md-6 right">
                                    <!-- Single Row Start Here -->
                                    <div class="row bottom-item">
                                        <div class="col-md-8">
                                            <label>Revised GST effective date<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="date" class="enable" id="revised_gst_effective_date" name="revised_gst_effective_date" tabindex="10422"></input>

                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                </div>
                            </div>
                        </div>
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

    //enter key integration in gst start here

    $(".yes_no,.enable").keypress(function (event) {

        if (event.key === "Enter") {
            // event.preventDefault();
            itype = $(this).prop('type');
            if (itype !== 'submit') {
                currentTabindex = $(this).attr('tabindex');//

                var gst_field_id = $(this).attr('id');
               

                //enter key implementation for specific fields by taking id

                if (gst_field_id == "gstin_uin") {
                    var gstNumber = document.getElementById("gstin_uin").value;
                    var GSTexpr = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;//gst number regular expression
                    if (gstNumber == "") {
                        alert_message("warning", "warning", "GSTIN/UIN is not specified.");
                        return;
                    }
                    else if (!GSTexpr.test(gstNumber)) {
                        alert_message("warning", "Warning", "The GSTIN/UIN is invalid or contains special character.\n Enter the GSTIN/UIN manually and try again. For Example 22AAAAA0000A1Z5 ");
                        return;
                    }
                }
                else if ($("#" + gst_field_id).is('[data-target~="#gstModal"]')) {//when you press enter key from last input of company creation
                            $('#gstModal').modal('toggle');
                        }
                else if (gst_field_id == "gst_registration_status_id") {
                    var gst_registration_status_id_val = $("#gst_registration_status_id").val();
                    if (gst_registration_status_id_val == "2") {
                        $("#gst_registration_name").focus();
                    }
                }
                //common  movement of enter key start 
                var next = parseInt(currentTabindex) + 1;

                if (currentTabindex >= 10400 && currentTabindex < 10600) {
                    while (next < 10600) {

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
                //common  movement of enter key end 

            }

        }

    });
    //enter key integration in gst end here


    // ===tab ,tab + shift integration in company gst details start here ===
    $('.yes_no,.enable').keydown(function (e) {

        if (e.shiftKey && e.keyCode == 9) {//shift+alt
           var  company_gst_tab_current_id = $(this).attr('id');
            if(company_gst_tab_current_id=="company_gst_tab_current_id");
            {
                if($(this).val()=='no' )
                {

                }
            }

        }

        else if (e.keyCode == 9) {
            company_gst_tab_current_id = $(this).attr('id');
            if (company_gst_tab_current_id == "gstin_uin") {//gst niumber validation using tab
                var companyName = $(this).val().trim();
                // event.preventDefault();

                var gstNumber = document.getElementById("gstin_uin").value;
                var GSTexpr = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;//gst number regular expression
                if (gstNumber == "") {
                    alert_message("warning", "warning", "GSTIN/UIN is not specified.");

                }
                else if (!GSTexpr.test(gstNumber)) {
                    alert_message("warning", "Warning", "The GSTIN/UIN is invalid or contains special character.\n Enter the GSTIN/UIN manually and try again.");

                }
            }
            else if (company_gst_tab_current_id == "gst_registration_name") {
                var gst_registration_status_id_value = $("#gst_registration_status_id").val();
                if (gst_registration_status_id_value == "2" ) {
                    return false;
                }
            }
            else if ($("#" + company_gst_tab_current_id).is('[data-target~="#gstModal"]')) {//when you press enter key from last input of company creation
                            $('#company_feature_save').modal('toggle');
                        }
            
            //company features
            else if ($("#" + company_gst_tab_current_id).is('[data-target~="#company_feature_save"]')) {//when you press enter key from last input of company creation
                            $('#company_feature_save').modal('toggle');
                        }
                        

        }

    });
    // ===tab ,tab + shift integration in company gst details end here ===

    $("#btn_gst_cancel").on('click', () => {
        var invoice_applicable_value = $("#invoice_applicable").val();
        if (invoice_applicable_value == "no") {
            $("#invoice_applicable").focus();
        }
        else if (invoice_applicable_value == "yes") {
            $("#gst_is_e_way_bill_applicable").focus();
        }
    });
    // ===tab integration in company gst details end here ===
    var BASE_URL = "<?php echo base_url(); ?>";
    var accountsController = "<?php echo CONTROLLER_ACCOUNTS; ?>";

    $(document).on('keydown', function (event) {
        // Check if the pressed key is the "S" key and the gstModal has the "show" class
        if ((event.key === 's' || event.key === 'S') && $("#gstModal").hasClass("show")) {
            event.preventDefault(); // Prevent the default "s" key behavior
            document.getElementById('save-btn-gst').click();

        }
    });

    // for displaying the gst details modal
    $('#set_gst_rate').on('change keypress', function (event) {
        if (event.type === 'change' || (event.type === 'keypress' && (event.which === 13 || event.keyCode === 13))) {
            var value = $(this).val();
            if (value === 'yes') {
                $('#gst_details_for_company_modal').modal('show');
            }

        }
    });


    $(document).ready(function () {

        // remove or add enable class based on gst_is_e_invoicing_applicable val start here
        var check_value_of_gst_is_e_invoicing_applicable = $("#gst_is_e_invoicing_applicable").val();
        if (check_value_of_gst_is_e_invoicing_applicable == "no") {
            $("#gst_e_invoicing_applicable_from_date").removeClass("enable");
            $("#gst_e_invoice_bill_from_place").removeClass("enable");
        }
        else if (check_value_of_gst_is_e_invoicing_applicable == "yes") {
            if (!$("#gst_e_invoicing_applicable_from_date").hasClass("enable")) {
                $("#gst_e_invoicing_applicable_from_date").addClass("enable");
            }
            if (!$("#gst_e_invoice_bill_from_place").hasClass("enable")) {
                $("#gst_e_invoice_bill_from_place").addClass("enable");
            }
        }
        // remove or add enable class based on gst_is_e_invoicing_applicable val end here

        // remove or add enable class based on gst_is_e_way_bill_applicable val start here
        var check_value_of_gst_is_e_way_bill_applicable = $("#gst_is_e_way_bill_applicable").val();
        if (check_value_of_gst_is_e_way_bill_applicable == "no") {
            $("#gst_e_way_bill_applicable_from_date").removeClass("enable");
            $("#gst_goods_dispatched_from_id").removeClass("enable");
            $("#gst_is_e_way_bill_applicable_for_intrastate").removeClass("enable");
        }
        else if (check_value_of_gst_is_e_way_bill_applicable == "yes") {
            if (!$("#gst_e_way_bill_applicable_from_date").hasClass("enable")) {
                $("#gst_e_way_bill_applicable_from_date").addClass("enable");
            }
            if (!$("#gst_goods_dispatched_from_id").hasClass("enable")) {
                $("#gst_goods_dispatched_from_id").addClass("enable");
            }
            if (!$("#gst_is_e_way_bill_applicable_for_intrastate").hasClass("enable")) {
                $("#gst_is_e_way_bill_applicable_for_intrastate").addClass("enable");
            }

        }
        // remove or add enable class based on gst_is_e_way_bill_applicable val end here

    

        //hide and show elements based on registration type
        var re_val_gst_registration_type_id = $("#gst_registration_type_id").val();
        // 1-Regular 2-Composition 3-Regular-sez
        if (re_val_gst_registration_type_id == '2') {//if registration type composition
            $("#gstr1_periodicity_id_row").hide();//hide gstr1_periodicity and remove enable class from gstr1_periodicity field
            if ($("#gstr1_periodicity_id").hasClass("enable")) {
                $("#gstr1_periodicity_id").removeClass("enable");
            }
            $("#tax_Rate_Details_for_Turnover_section").show();//show tax rate details for turnover and add enable class to  fields of tax rate details for turnover
            if (!$("#gst_tax_rate_for_taxable_turnover").hasClass("enable")) {
                $("#gst_tax_rate_for_taxable_turnover").addClass("enable");
            }
            if (!$("#gst_composition_tax_calculation_type_id").hasClass("enable")) {
                $("#gst_composition_tax_calculation_type_id").addClass("enable");
            }
            $("#reconcilation_configuration_section").hide();//hide reconcilation_configuration section and remove enable class from  fields of reconcilation_configuration section
            if ($("#gst_use_voucher_number_and_date_as_in_supplier_invoice").hasClass("enable")) {
                $("#gst_use_voucher_number_and_date_as_in_supplier_invoice").removeClass("enable");
            }
            if ($("#gst_ignore_zero_prefixed_in_supplier_document_number").hasClass("enable")) {
                $("#gst_ignore_zero_prefixed_in_supplier_document_number").removeClass("enable");
            }
            if ($("#gst_ignore_special_characters_used_in_supplier_document_number").hasClass("enable")) {
                $("#gst_ignore_special_characters_used_in_supplier_document_number").removeClass("enable");
            }

            $("#lut_bond_deatails_section").hide();//hide lut_bond_deatails_section section and remove enable class from  fields of lut_bond_deatails_section section
            if ($("#gst_lut_bond_details").hasClass("enable")) {
                $("#gst_lut_bond_details").removeClass("enable");
            }
        }
        else if (re_val_gst_registration_type_id != '2') {
            $("#gstr1_periodicity_id_row").show();//show gstr1_periodicity field and add enable class to gstr1_periodicity
            if (!$("#gstr1_periodicity_id").hasClass("enable")) {
                $("#gstr1_periodicity_id").addClass("enable");
            }
            $("#tax_Rate_Details_for_Turnover_section").hide();//hide tax_Rate_Details_for_Turnover_section and remove enable class from tax_Rate_Details_for_Turnover_section
            if ($("#gst_tax_rate_for_taxable_turnover").hasClass("enable")) {
                $("#gst_tax_rate_for_taxable_turnover").removeClass("enable");
            }
            if ($("#gst_composition_tax_calculation_type_id").hasClass("enable")) {
                $("#gst_composition_tax_calculation_type_id").removeClass("enable");
            }
            $("#reconcilation_configuration_section").show();//show reconcilation_configuration , add enable class to  field of reconcilation_configuration    
            if (!$("#gst_use_voucher_number_and_date_as_in_supplier_invoice").hasClass("enable")) {
                $("#gst_use_voucher_number_and_date_as_in_supplier_invoice").addClass("enable");
            }
            if (!$("#gst_ignore_zero_prefixed_in_supplier_document_number").hasClass("enable")) {
                $("#gst_ignore_zero_prefixed_in_supplier_document_number").addClass("enable");
            }
            if (!$("#gst_ignore_special_characters_used_in_supplier_document_number").hasClass("enable")) {
                $("#gst_ignore_special_characters_used_in_supplier_document_number").addClass("enable");
            }


            $("#lut_bond_deatails_section").show();//show the lut_bond_deatails_section and add enable class to gst_lut_bond_details
            if (!$("#gst_lut_bond_details").hasClass("enable")) {
                $("#gst_lut_bond_details").addClass("enable");
            }
        }
        if (re_val_gst_registration_type_id == '1') {
            $("#e-Incoice_section").show();//show gst_registration_type and add enable class to gst_is_e_invoicing_applicable 
            if (!$("#gst_is_e_invoicing_applicable").hasClass("enable")) {
                $("#gst_is_e_invoicing_applicable").addClass("enable");
                // alert($("#gst_is_e_invoicing_applicable").val());
            }
            var gst_is_e_invoicing_applicable_val = $("#gst_is_e_invoicing_applicable").val();

            if (gst_is_e_invoicing_applicable_val == 'no') {//if gst invoice application value is "no"
                if ($("#gst_e_invoicing_applicable_from_date").hasClass("enable")) {
                    $("#gst_e_invoicing_applicable_from_date").removeClass("enable");
                }
                if ($("#gst_e_invoice_bill_from_place").hasClass("enable")) {
                    $("#gst_e_invoice_bill_from_place").removeClass("enable");
                }
            }
            else if (gst_is_e_invoicing_applicable_val == 'yes') { //if gst invoice application value is "yes"
                if (!$("#gst_e_invoicing_applicable_from_date").hasClass("enable")) {
                    $("#gst_e_invoicing_applicable_from_date").addClass("enable");
                }
                if (!$("#gst_e_invoice_bill_from_place").hasClass("enable")) {
                    $("#gst_e_invoice_bill_from_place").addClass("enable");
                }
            }
        }
        else if (re_val_gst_registration_type_id != '1') {

            $("#e-Incoice_section").hide();//hide e-invoice_section and remove enable class from fielsds ofe-Incoice_section
            if ($("#gst_is_e_invoicing_applicable").hasClass("enable")) {
                $("#gst_is_e_invoicing_applicable").removeClass("enable");
            }
            if ($("#gst_e_invoicing_applicable_from_date").hasClass("enable")) {
                $("#gst_e_invoicing_applicable_from_date").removeClass("enable");
            }
            if ($("#gst_e_invoice_bill_from_place").hasClass("enable")) {
                $("#gst_e_invoice_bill_from_place").removeClass("enable");
            }
        }


        $('.sub_features_fr_yes').hide();

        // Event listener for the dropdown change
        $('#gst_is_e_invoicing_applicable, #gst_is_e_way_bill_applicable').on('change', function () {
            var invoiceApplicableValue = $('#gst_is_e_invoicing_applicable').val();


            var sendEWayBillValue = $('#gst_is_e_way_bill_applicable').val();

            if (invoiceApplicableValue === 'yes') {
                //   $('.sub_features_fr_yes').css('display', 'block');
                $('.sub_features_fr_yes').show();
            } else {
                $('.sub_features_fr_yes').hide();
            }
        });


        $('.sub_features_for_eWayBillApplicable').hide();

        // Event listener for the dropdown change
        $('#gst_is_e_way_bill_applicable').on('change', function () {
            var ewayBillApplicableValue = $('#gst_is_e_way_bill_applicable').val();


            if (ewayBillApplicableValue === 'yes') {
                if (!$("#e_way_bill_applicable_from").hasClass("enable")) {
                    $("#e_way_bill_applicable_from").addClass("enable");
                }

                if (!$("#gst_goods_dispatched_from_id").hasClass("enable")) {
                    $("#gst_goods_dispatched_from_id").addClass("enable");
                }

                if (!$("#gst_is_e_way_bill_applicable_for_intrastate").hasClass("enable")) {
                    $("#gst_is_e_way_bill_applicable_for_intrastate").addClass("enable");
                }
                $('.sub_features_for_eWayBillApplicable').show();

            }
            else {
                $("#gst_e_way_bill_applicable_from_date").removeClass("enable");
                $("#gst_goods_dispatched_from_id").removeClass("enable");
                $("#gst_is_e_way_bill_applicable_for_intrastate").removeClass("enable");
                $('.sub_features_for_eWayBillApplicable').hide();

            }
        });

        $('.sub_features_fr_yes').hide();
        $('#gst_is_e_invoicing_applicable').on('change', function () {
            var ewayInvoiceApplicableValue = $('#gst_is_e_invoicing_applicable').val();


            if (ewayInvoiceApplicableValue === 'yes') {
                if (!$("#gst_e_invoicing_applicable_from_date").hasClass("enable")) {
                    $("#gst_e_invoicing_applicable_from_date").addClass("enable");
                }

                if (!$("#gst_e_invoice_bill_from_place").hasClass("enable")) {
                    $("#gst_e_invoice_bill_from_place").addClass("enable");
                }

                $('.sub_features_fr_yes').show();

            }
            else {
                if ($("#gst_e_invoicing_applicable_from_date").hasClass("enable")) {
                    $("#gst_e_invoicing_applicable_from_date").removeClass("enable");
                }
                if ($("#gst_e_invoice_bill_from_place").hasClass("enable")) {
                    $("#gst_e_invoice_bill_from_place").removeClass("enable");
                }
                $("#sub_features_fr_yes").hide();

            }
        });

        $("#gst_registration_status_id").on("change", function () {

            var gst_reg_status = $("#gst_registration_status_id").val();
            // var gst_reg_status = gst_reg_status_all.toLowerCase();
            if (gst_reg_status === '2') {
                $(".modal-body .gst-full-content-row label").css('color', '#696969');
                $(".modal-body .gst-full-content-row h6").css('color', '#696969');
                $("#gst_registration_name_label").removeAttr("style");
                $(".modal-body .gst-full-content-row select").prop('disabled', true);
                $(".modal-body .gst-full-content-row input").prop('disabled', true);
                $(".modal-body .gst-full-content-row date").prop('disabled', true);
                $("#gst_registration_name").prop('disabled', false)

            }
            else if (gst_reg_status === '1') {
                $(".gst-full-content-row label").prop('disabled', false);
                $(".modal-body .gst-full-content-row label").css('color', '#000000');
                $(".modal-body .gst-full-content-row h6").css('color', '#000000');
                $(".modal-body .gst-full-content-row select").prop('disabled', false);
                $(".modal-body .gst-full-content-row input").prop('disabled', false);
                $(".modal-body .gst-full-content-row date").prop('disabled', false);
            }

        });


        // =============show and remove periodicity of GSR1 section if regiter type composition


        $("#gst_registration_type_id").on("change", () => {

            var val_gst_registration_type_id = $("#gst_registration_type_id").val();
            //1-Regular 2-Composition 3-Regular-sez
            if (val_gst_registration_type_id == '2') { //if you select composition
                $("#gstr1_periodicity_id_row").hide();//hide gstr1_periodicity and remove enable class from gstr1_periodicity field
                if ($("#gstr1_periodicity_id").hasClass("enable")) {
                    $("#gstr1_periodicity_id").removeClass("enable");
                }
                $("#tax_Rate_Details_for_Turnover_section").show();//show tax rate details for turnover and add enable class to  fields of tax rate details for turnover
                if (!$("#gst_tax_rate_for_taxable_turnover").hasClass("enable")) {
                    $("#gst_tax_rate_for_taxable_turnover").addClass("enable");
                }
                if (!$("#gst_composition_tax_calculation_type_id").hasClass("enable")) {
                    $("#gst_composition_tax_calculation_type_id").addClass("enable");
                }
                $("#reconcilation_configuration_section").hide();//hide reconcilation_configuration section and remove enable class from  fields of reconcilation_configuration section
                if ($("#gst_use_voucher_number_and_date_as_in_supplier_invoice").hasClass("enable")) {
                    $("#gst_use_voucher_number_and_date_as_in_supplier_invoice").removeClass("enable");
                }
                if ($("#gst_ignore_zero_prefixed_in_supplier_document_number").hasClass("enable")) {
                    $("#gst_ignore_zero_prefixed_in_supplier_document_number").removeClass("enable");
                }
                if ($("#gst_ignore_special_characters_used_in_supplier_document_number").hasClass("enable")) {
                    $("#gst_ignore_special_characters_used_in_supplier_document_number").removeClass("enable");
                }

                $("#lut_bond_deatails_section").hide();//hide lut_bond_deatails_section section and remove enable class from  fields of lut_bond_deatails_section section
                if ($("#gst_lut_bond_details").hasClass("enable")) {
                    $("#gst_lut_bond_details").removeClass("enable");
                }
            }
            else if (val_gst_registration_type_id != '2') {//if you select not composition
                $("#gstr1_periodicity_id_row").show();//show gstr1_periodicity field and add enable class to gstr1_periodicity
                if (!$("#gstr1_periodicity_id").hasClass("enable")) {
                    $("#gstr1_periodicity_id").addClass("enable");
                }
                $("#tax_Rate_Details_for_Turnover_section").hide();//hide tax_Rate_Details_for_Turnover_section and remove enable class from tax_Rate_Details_for_Turnover_section
                if ($("#gst_tax_rate_for_taxable_turnover").hasClass("enable")) {
                    $("#gst_tax_rate_for_taxable_turnover").removeClass("enable");
                }
                if ($("#gst_composition_tax_calculation_type_id").hasClass("enable")) {
                    $("#gst_composition_tax_calculation_type_id").removeClass("enable");
                }
                $("#reconcilation_configuration_section").show();//show reconcilation_configuration , add enable class to  field of reconcilation_configuration    
                if (!$("#gst_use_voucher_number_and_date_as_in_supplier_invoice").hasClass("enable")) {
                    $("#gst_use_voucher_number_and_date_as_in_supplier_invoice").addClass("enable");
                }
                if (!$("#gst_ignore_zero_prefixed_in_supplier_document_number").hasClass("enable")) {
                    $("#gst_ignore_zero_prefixed_in_supplier_document_number").addClass("enable");
                }
                if (!$("#gst_ignore_special_characters_used_in_supplier_document_number").hasClass("enable")) {
                    $("#gst_ignore_special_characters_used_in_supplier_document_number").addClass("enable");
                }


                $("#lut_bond_deatails_section").show();//show the lut_bond_deatails_section and add enable class to gst_lut_bond_details
                if (!$("#gst_lut_bond_details").hasClass("enable")) {
                    $("#gst_lut_bond_details").addClass("enable");
                }

            }
            if (val_gst_registration_type_id == '1') {//if you select regular
                $("#e-Incoice_section").show();//show gst_registration_type and add enable class to gst_is_e_invoicing_applicable 
                if (!$("#gst_is_e_invoicing_applicable").hasClass("enable")) {
                    $("#gst_is_e_invoicing_applicable").addClass("enable");
                    // alert($("#gst_is_e_invoicing_applicable").val());
                }
                var gst_is_e_invoicing_applicable_val = $("#gst_is_e_invoicing_applicable").val();

                if (gst_is_e_invoicing_applicable_val == 'no') {//if gst invoice application value is "no"
                    if ($("#gst_e_invoicing_applicable_from_date").hasClass("enable")) {
                        $("#gst_e_invoicing_applicable_from_date").removeClass("enable");
                    }
                    if ($("#gst_e_invoice_bill_from_place").hasClass("enable")) {
                        $("#gst_e_invoice_bill_from_place").removeClass("enable");
                    }
                }
                else if (gst_is_e_invoicing_applicable_val == 'yes') { //if gst invoice application value is "yes"
                    if (!$("#gst_e_invoicing_applicable_from_date").hasClass("enable")) {
                        $("#gst_e_invoicing_applicable_from_date").addClass("enable");
                    }
                    if (!$("#gst_e_invoice_bill_from_place").hasClass("enable")) {
                        $("#gst_e_invoice_bill_from_place").addClass("enable");
                    }
                }


            }
            else if (val_gst_registration_type_id != '1') {//if you select not regular

                $("#e-Incoice_section").hide();//hide e-invoice_section and remove enable class from fielsds ofe-Incoice_section
                if ($("#gst_is_e_invoicing_applicable").hasClass("enable")) {
                    $("#gst_is_e_invoicing_applicable").removeClass("enable");
                }
                if ($("#gst_e_invoicing_applicable_from_date").hasClass("enable")) {
                    $("#gst_e_invoicing_applicable_from_date").removeClass("enable");
                }
                if ($("#gst_e_invoice_bill_from_place").hasClass("enable")) {
                    $("#gst_e_invoice_bill_from_place").removeClass("enable");
                }
            }
        });


        // for taxability_revised_applicable_from	date view on select of nill and
        $('.sub_features_fr_taxability').hide();
        $('#taxability_revised_applicable_from').removeClass("enable");
        $('#taxability_id').on('change', function () {
            var taxability_id = $('#taxability_id').val();
            if (taxability_id === '1' || taxability_id === '2') {
                $('.sub_features_fr_taxability').show();
                if (!$("#taxability_revised_applicable_from").hasClass("enable")) {
                    $("#taxability_revised_applicable_from").addClass("enable");
                }

            } else {
                $('.sub_features_fr_taxability').hide();
                $('#taxability_revised_applicable_from').removeClass("enable");

                // $('.sub_features_fr_organization input, .sub_features_fr_organization select').prop('disabled', true);
            }
        });


        $('#save-btn-gst').click(function () {
            //////////////fr console////////

            var token = "<?php echo $_SESSION['li_token']; ?>";
            // Save the changes made in the gst_modal
      
            $.ajax({
                url: BASE_URL + "index.php/" + accountsController + "/save_gst_details",
                type: 'POST',
                dataType: 'json',
                data: {
                    
                    gst_row_id: $("#gst_row_id").val(),
                    gst_registration_status_id: $("#gst_registration_status_id").val(),
                    gst_state_id: $("#gst_state_id").val(),
                    gst_address_type_id: $("#gst_address_type_id").val(),
                    gst_registration_type_id: $("#gst_registration_type_id").val(),
                    gst_assessee_of_other_territory: $("#gst_assessee_of_other_territory").val(),
                    gstin_uin: $("#gstin_uin").val(),
                    gstr1_periodicity_id: $("#gstr1_periodicity_id").val(),
                    gst_place_of_supply_id: $("#gst_place_of_supply_id").val(),
                    gst_is_e_invoicing_applicable: $("#gst_is_e_invoicing_applicable").val(),
                    gst_e_invoicing_applicable_from_date: $("#gst_e_invoicing_applicable_from_date").val(),
                    gst_e_invoice_bill_from_place: $("#gst_e_invoice_bill_from_place").val(),
                    gst_tax_rate_for_taxable_turnover: $("#gst_tax_rate_for_taxable_turnover").val(),
                    gst_composition_tax_calculation_type_id: $("#gst_composition_tax_calculation_type_id").val(),
                    gst_is_e_way_bill_applicable: $("#gst_is_e_way_bill_applicable").val(),
                    gst_e_way_bill_applicable_from_date: $('#gst_e_way_bill_applicable_from_date').val(),
                    gst_goods_dispatched_from_id: $("#gst_goods_dispatched_from_id").val(),
                    gst_is_e_way_bill_applicable_for_intrastate: $("#gst_is_e_way_bill_applicable_for_intrastate").val(),
                    gst_use_voucher_number_and_date_as_in_supplier_invoice: $("#gst_use_voucher_number_and_date_as_in_supplier_invoice").val(),
                    gst_ignore_zero_prefixed_in_supplier_document_number: $("#gst_ignore_zero_prefixed_in_supplier_document_number").val(),
                    gst_ignore_special_characters_used_in_supplier_document_number: $("#gst_ignore_special_characters_used_in_supplier_document_number").val(),
                    gst_registration_name: $("#gst_registration_name").val(),
                    gst_create_another_gst_registration: $("#gst_create_another_gst_registration").val(),
                    revised_gst_effective_date	: $("#revised_gst_effective_date").val(),
                   
                    li_token: token
                },
                success: function (response) {
                    if (response.status === 'success') {
                        // alert('GST details saved successfully.');
                        toast_message("success", "Successful", "GST details saved successfully.");
                        $('#gstModal').modal('hide');
                        var createAnotherGST = $("#gst_create_another_gst_registration").val();
                        alert(createAnotherGST);
                            if (createAnotherGST === "no") {
                              
                                 $('#gst_modal').modal('hide');
                            } else {
                                resetFormFields()
                            }
                                    } 
                    else {
                        // alert('Failed to save GST details.');
                        toast_message("failure", "Failed", "Failed to save GST details.");
                        var invoice_applicable_value = $("#gst_is_e_invoicing_applicable").val();
                        if (invoice_applicable_value == "no") {
                            $("#gst_is_e_invoicing_applicable").focus();
                        }
                        else if (invoice_applicable_value == "yes") {
                            $("#gst_is_e_way_bill_applicable").focus();
                        }
                    }
                },
                error: function (xhr, status, error) {
                    console.log('Error response:', xhr.responseText);
                    console.log('An error occurred:', error);
                    alert('An error occurred while saving GST details. Please check the console for more information.');
                }
            });
 });

        
 // to get the state id fr changing the regsitration name
        $('#gst_state_id').change(function() {
        var stateId = $(this).val();
       
        updateRegistrationName(stateId);
    });

 }); // end of document.ready


 function resetFormFields() {
   
    $('#gst_modal input[type="text"]').val('');
    // $('#gst_modal select').val('');
    $("#gst_row_id").val('0');
  
}

// function to fetch regsitration name based on state selected
    function updateRegistrationName(stateId) {
    $.ajax({
        url: BASE_URL + "index.php/" + accountsController + "/fetch_registration_name",
        method: 'POST',
        data: {state_id: stateId,li_token: token},
        success: function(response) {
            $('#gst_registration_name').val(response);
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}

function populateGstForm(gst_id) {
   
    $('#gst_row_id').val(gst_id);
   
}

  
       





</script>
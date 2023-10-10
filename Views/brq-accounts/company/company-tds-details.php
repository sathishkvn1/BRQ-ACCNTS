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

    </style>
</head>

<body>
    <!------------------------------------------------------------------
                    Modal for TDS Details Start 
    ------------------------------------------------------------------>
    <div class="modal fade backdrop modal_common modal_centered_lg gst_details my-modal" 
        id="tds_details_modal" data-value="enable_tcs" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Company TDS Deductor Details</h6>
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
                                    <h6 class="tds_side_headding">TDS Registration Details</h6>
                                    <!--  start of GST Registration Details -->


                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>TAN Registration Number<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="autofocus enable"
                                                name="tds_tan_registration_number" id="tds_tan_registration_number"
                                                tabindex="10800">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row" style="align-items: baseline;">
                                        <div class="col-md-8">
                                            <label>Tax Deduction and Collection Account Number(TAN)<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" tabindex="10801"
                                                name="tds_tan_account_number" id="tds_tan_account_number">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Deductor Type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select tabindex="10802" class="enable"
                                                name="tds_deductor_collector_type_id"
                                                id="tds_deductor_collector_type_id">
                                                <!-- tds_tcs_collector_deductor_type -->

                                                <?php
                                                if (isset($tds_tcs_collector_deductor_type)):
                                                    foreach ($tds_tcs_collector_deductor_type as $row):
                                                        $name = $row->collector_deductor_type;
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
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Deductor Branch / Division<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="10803"
                                                name="tds_deductor_collector_branch_division"
                                                id="tds_deductor_collector_branch_division" class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>STD Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="10804" name="tds_std_code" id="tds_std_code"
                                                class=" enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Phone No.<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" tabindex="10805" name="tds_phone_number"
                                                id="tds_phone_number" class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Email<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="10806" name="tds_email" id="tds_email"
                                                class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->


                                </div>
                                <!--  start of GST Registration Details -->
                                <!-- Single features Section End Here -->

                                <!-- Single features Section Start Here -->
                                <div class="col-md-12" id="gst_rate_and_ralated_details_section">
                                    <h6> Rate & Exception Details</h6>
                                    <!-- Single Row Start Here -->
                                    <div class="row" id="ignore_it_Exception_limit_for_tds_deduction">
                                        <div class="col-md-8">
                                            <label>Ignore IT Exeption Limit for TDS Deduction<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="10807"
                                                name="ignore_it_excemption_limit_for_tds"
                                                id="ignore_it_excemption_limit_for_tds">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row" id="active_tds_for_stock_items_section">
                                        <div class="col-md-8">
                                            <label>Activate TDS for Stock Items<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable yes_no" name="activate_tds_for_stock_items"
                                                id="activate_tds_for_stock_items" tabindex="10808">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Provide surcharge and cess details<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable yes_no" name="tds_surcharge_cess_details"
                                                id="tds_surcharge_cess_details" tabindex="10809">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                </div>
                            </div>
                            <!-- Left Content -->
                            <div class="bottom_side_in_left_side">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Set/alter details of person responsible<span
                                                class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="enable yes_no" name="tds_person_responsible_activate"
                                            id="tds_person_responsible_activate" tabindex="10810">
                                            <option value="yes">Yes</option>
                                            <option value="no" selected>No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Left Side End Here -->

                        <!-- Right Side Start Here -->
                        <div class="col-md-6 right_side_content">

                            <!-- Right Content -->
                            <div class="row">

                                <!-- Single features Section End Here -->
                                <div class="col-md-12" id="additional_configuration_section">
                                    <h6>Person Responsible Details</h6>

                                    <!-- <div class="row main_content"> -->
                                    <!-- Main Content Start Here -->
                                    <!-- --------- single row start here --------------- -->
                                    <!-- Single Row Start Here -->
                                    <div class="tds_personal_responsible_details_active_inactive">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Name<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_person_responsible_name"
                                                    name="tds_person_responsible_name" class="enable" tabindex="10811">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Son / Daughter of<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_son_daughter_of" name="tds_son_daughter_of"
                                                    class="enable" tabindex="10812">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Designation<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" tabindex="10813" id="tds_designation"
                                                    name="tds_designation">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>PAN<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_pan" name="tds_pan" class="enable"
                                                    tabindex="10814">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Flat No<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_flat_house_number"
                                                    name="tds_flat_house_number" class="enable" tabindex="10815">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Name of Premises / Building<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_premises_building_name"
                                                    name="tds_premises_building_name" class="enable" tabindex="10816">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Road / Street / Lane<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_road_street_lane_name"
                                                    name="tds_road_street_lane_name" class="enable" tabindex="10817">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Area / Location<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" id="tds_area_location_name"
                                                    name="tds_area_location_name" tabindex="10818">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Town / City / District<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_town_city_district_name" class="enable"
                                                    name="tds_town_city_district_name" tabindex="10819">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>State<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- <input type="text" id="tds_state_id" name="tds_state_id"
                                                    class="input_data_value_up_down without_backdrop_modal enable"
                                                    tabindex="10820"> -->
                                                    <select class="enable" tabindex="10401" name="tds_state_id"
                                                id="tds_state_id" >
                                              
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
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Pincode<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_pincode" name="tds_pincode" class="enable"
                                                    tabindex="10821">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Mobile No<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_mobile" name="tds_mobile" class="enable"
                                                    tabindex="10822">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>STD Code<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" id="person_std_code" name="person_std_code"
                                                    tabindex="10823">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Telephone<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_telephone" name="tds_telephone"
                                                    class="enable" tabindex="10824">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>E-mail ID<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_email_id" name="tds_email_id" class="enable"
                                                    tabindex="10825">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>STD Code (Alternate)<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" id="tds_std_code_alternate"
                                                    name="tds_std_code_alternate" tabindex="10826">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Telephone (Alternate)<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_telephone_alternate"
                                                    name="tds_telephone_alternate" class="enable" tabindex="10827">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>E-mail (Alternate)<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tds_email_id_alternate"
                                                    name="tds_email_id_alternate" class=" enable" tabindex="10828">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                    </div>


                                </div>
                            </div>
                            <!-- Right Content -->
                            <div class="bottom_side_in_right_side">
                                <em class="note">(Note : All the above details will be used in Challan,Forms & Returns)
                                </em>
                            </div>
                        </div>
                        <!-- Right Side End Here -->

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade backdrop bottom modal-old-vouchers masters_add_edit accept_save" id="tdsModal">
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
                            <a class="btn" href="#" id="save_btn_tds" onclick=""><i
                                    class="fas fa-save"></i><span>S</span>ave</a>
                            <a class="btn" href="#" class="close" data-dismiss="modal" id="btn_tds_cancel"
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
    

 

/////////////////////// START OF KEY INTERGRATION//////////////////////////

/// validation of different fields//////////////// 

$(".yes_no,.enable").on("keydown", function(event) {
    
    if ($("#tds_details_modal").hasClass("show")) {
        var validationFails = false;
        if ((event.key === "Enter" || (event.key === "Tab" && !event.shiftKey)) && !validationFails)  {
            event.preventDefault();
           
            itype = $(this).prop('type');
            if (itype !== 'submit') {
                currentTabindex = $(this).attr('tabindex');
                var company_tds_field_id = $(this).attr('id');

                // Handle specific input field actions based on ID
                if (company_tds_field_id == "tds_pan") {
                    var panNumber = document.getElementById("tds_pan").value;
                        var panexpr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;
                          if(panNumber =='')
                          {
                            alert_message("warning", "warning", "Pan is not specified.");
                           
                            return;

                          }
                        if (!panexpr.test(panNumber)) {
                            alert_message("warning", "warning", "Invalid PAN format. The PAN must contain 5 alphabets, followed by 4 numbers and then 1 albhabet . For eg.AAAPS1234A");
                            return;
                        }
                } else if (company_tds_field_id == "tds_tan_registration_number") {
                    var tdsTanRegNumber = document.getElementById("tds_tan_registration_number").value;
                        if (tdsTanRegNumber === '') {
                            alert_message("warning", "warning", "TAN Registration Number is not specified.");
                            return;
                        }
                }
                // validation for Tax Deduction and Collection Account Number(TAN)
                else if (company_tds_field_id == "tds_tan_account_number") {
                        var TdsTanNumber = document.getElementById("tds_tan_account_number").value;
                        if (TdsTanNumber === null) {
                           
                            alert_message("warning", "Warning", "TAN number is not specified.");
                            return;
                        }
                        var tdstanexpr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;
                        if (!tdstanexpr.test(TdsTanNumber)) {
                            alert_message("warning", "Warning", "Invalid TAN Structure. Format should be 4 Alphabets, 5 Numbers, and 1 Alphabet. For example: ABCD12345E");
                            return;
                        }
                    }
                    // validation for Deductor Branch / Division
                    else if (company_tds_field_id == "tds_deductor_collector_branch_division") {
                    // Deductor Branch / Division validation
                        var branchDivision = $("#tds_deductor_collector_branch_division").val();
                        if (branchDivision.trim() === '') {
                            alert_message("warning", "warning", "Deductor Branch / Division cannot be empty.");
                            return;
                        }
                    }
                     //validation fro std code
                     else if (company_tds_field_id == "tds_std_code") {
                            var stdCode = $("#tds_std_code").val();
                            var stdCodeRegex = /^\d{2,8}$/; // 2 to 8 digits numeric code

                            if (stdCode.trim() !== '' && !stdCodeRegex.test(stdCode)) {
                                alert_message("warning", "Warning", "Invalid STD Code. Please enter a valid 2 to 8-digit numeric STD Code.");
                                return;
                            }
                        }
                          // validation for phone number
                    else if (company_tds_field_id == "tds_phone_number") {
                        var phoneNumber = $("#tds_phone_number").val();
                        var phoneNumberRegex = /^\d{10}$/; // 10-digit numeric phone number

                        if (phoneNumber.trim() !== '' && !phoneNumberRegex.test(phoneNumber)) {
                            alert_message("warning", "Warning", "Invalid Phone No. Please enter a valid 10-digit numeric Phone No.");
                            return;
                        }
                    }
                    // validation for email
                    else if (company_tds_field_id == "tds_email") {
                        var email = $("#tds_email").val();
                        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                        if (email.trim() !== '' && !emailRegex.test(email)) {
                            alert_message("warning", "Warning", "Invalid Email. Please enter a valid email address.");
                            return;
                        }
                    }

                     // Validation for Name
                     else if (company_tds_field_id == "tds_person_responsible_name") {
                        var name = $("#tds_person_responsible_name").val().trim();
                        if (name === '') {
                            alert_message("warning", "Warning", "Name cannot be empty.");
                            return;
                        }
                    }
                     // Validation for Son / Daughter of
                     else if (company_tds_field_id == "tds_son_daughter_of") {
                        var sonDaughterOf = $("#tds_son_daughter_of").val().trim();
                        if (sonDaughterOf === '') {
                            alert_message("warning", "Warning", "Son / Daughter of field cannot be empty.");
                            return;
                        }
                    }
                     // Validation for Designation
                     else if (company_tds_field_id == "tds_designation") {
                        var designation = $("#tds_designation").val().trim();
                        if (designation === '') {
                            alert_message("warning", "Warning", "Designation field cannot be empty.");
                            return;
                        }
                    }

                     // Validation for Mobile No
                     else if (company_tds_field_id == "tds_mobile") {
                            var mobileNumber = $("#tds_mobile").val().trim();
                            if (mobileNumber !== '') {
                                var mobileRegex = /^[0-9]{10}$/;
                                if (!mobileRegex.test(mobileNumber)) {
                                    alert_message("warning", "Warning", "Invalid Mobile Number. Please enter a valid 10-digit mobile number.");
                                    return;
                                }
                            }
                        }
                        else if (company_tds_field_id == "tds_person_responsible_activate")//tan number validation
                    {
                        if ($("#tds_person_responsible_activate").val() == "no") {
                            $('#tdsModal').modal('show');
                        }
                    }
                    else if (company_tds_field_id == "tds_email_id_alternate")//tan number validation
                    {
                        if ($("#tds_person_responsible_activate").val() == "yes") {
                            $('#tdsModal').modal('show');
                        }


                    }

                // Find the next input field to focus on
                var next = parseInt(currentTabindex) + 1;
                if (currentTabindex >= 10800 && currentTabindex < 11000) {
                    while (next < 11000) {
                        if ($('[tabindex^="' + (parseInt(next)) + '"]').hasClass('enable')) {
                            nextInput = $('[tabindex^="' + next + '"]');
                            if (nextInput.length) {
                                nextInput.focus();
                                return false;
                            }
                        }
                        next++;
                    }
                    if (validationFails) {
                    event.preventDefault();
                    event.stopPropagation();
                    $("#" + currentId).focus();
                     }
                }
                else if (event.key === "Tab" && event.shiftKey) {
                if (validationFails) {
                    event.preventDefault();
                    event.stopPropagation();
                    // Handle Shift + Tab validation behavior...
                }
        }
            }
        }
    }
});


    $("#tds_person_responsible_activate").on("change", function () {
        if ($("#tds_person_responsible_activate").val() == "no") {
            $(".tds_personal_responsible_details_active_inactive input").prop("disabled", true);
            $(".tds_personal_responsible_details_active_inactive label").css("color", "#696969");
        }
        if ($("#tds_person_responsible_activate").val() == "yes") {
            $(".tds_personal_responsible_details_active_inactive input").prop("disabled", false);
            $(".tds_personal_responsible_details_active_inactive label").css("color", "#000000");

        }
    });

    $(document).ready(function () {
        value_tds_person_responsible_activate = $("#tds_person_responsible_activate").val();
        if (value_tds_person_responsible_activate == "no") {
            $(".tds_personal_responsible_details_active_inactive input").prop("disabled", true);
            $(".tds_personal_responsible_details_active_inactive label").css("color", "#696969");

        }
        if (value_tds_person_responsible_activate == "yes") {
            $(".tds_personal_responsible_details_active_inactive input").prop("disabled", false);
            $(".tds_personal_responsible_details_active_inactive label").css("color", "#000000");
        }
    });

    $(window).keydown(function (e) {//focus last element when you press c on save modal
        if (e.keyCode == 67) {//c button press
            if ($("#tdsModal").hasClass("show")) {
                $("#tdsModal").modal("hide");
                e.preventDefault();
                if($("#tds_person_responsible_activate").val()=="yes")
                {
                    $("#tds_email_id_alternate").focus();
                }
                else if($("#tds_person_responsible_activate").val()=="no")
                {
                    $("#tds_person_responsible_activate").focus();
                }
                
            }
        }
 
    });
    $("#btn_tds_cancel").on("click",function()//if you click cancel button of save tds modal
    {
        if ($("#tdsModal").hasClass("show")) {
                if($("#tds_person_responsible_activate").val()=="yes")
                {
                    $("#tds_email_id_alternate").focus();
                }
                else if($("#tds_person_responsible_activate").val()=="no")
                {
                    $("#tds_person_responsible_activate").focus();
                }
                
            }
    });

    $('.yes_no,.enable').keydown(function (e) {
        if (e.shiftKey && e.keyCode == 9) {//shift+alt
            company_tds_tab_current_id = $(this).attr('id');
            if (company_tds_tab_current_id == "tds_tan_registration_number") {
                $("#tds_details_modal").modal('hide')
                e.preventDefault();
                $("#enable_tds").focus();
              ;
            }
         
        }
        else if (e.keyCode == 9) {
            company_tds_tab_current_id = $(this).attr('id');
            if (company_tds_tab_current_id == "tds_pan")//pan number validation
            {
                var panNumber = document.getElementById("tds_pan").value;
                var panexpr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;

                if (!panexpr.test(panNumber)) {
                    alert_message("warning", "warning", "Invalid PAN format. The PAN must contain 5 alphabets, followed by 4 numbers and then 1 albhabet . For eg.AAAPS1234A");
                }
            }
            else if (company_tds_tab_current_id == "tds_tan_account_number")//tan number validation
            {
                var TdsTanNumber = document.getElementById("tds_tan_account_number").value;
                var tdstanexpr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;
                if (!tdstanexpr.test(TdsTanNumber)) {
                    alert_message("warning", "Warning", "Invalid Tan Structure. (Format should be of 4Alpha,5number and 1 Alpha. E.g:-AAAAA12345A");
                }
            }
            else if (company_tds_tab_current_id == "tds_person_responsible_activate")
            {
                if ($("#tds_person_responsible_activate").val() == "no") {
                            $('#tdsModal').modal('show');
                        }
            }
            else if (company_tds_tab_current_id == "tds_email_id_alternate")
            {
                if ($("#tds_person_responsible_activate").val() == "yes") {
                            $('#tdsModal').modal('show');
                        }
            }
        }
    });

    $(document).on('keydown', function (event) {
    
    if ((event.key === 's' || event.key === 'S') && $("#tdsModal").hasClass("show")) {
        event.preventDefault(); // Prevent the default "s" key behavior
        console.log("S key pressed inside tdsModal");
        document.getElementById('save_btn_tds').click();
        var $enable_tcs = $('#enable_tcs'); 
        if ($enable_tcs.length) {
            $enable_tcs.focus();
        }
    }
});

    /////////////////////// END OF KEY INTERGRATION//////////////////////////
$('#save_btn_tds').click(function() {

  var token = "<?php echo $_SESSION['li_token']; ?>";
  $.ajax({
    
      url: BASE_URL +"index.php/" + accountsController +"/save_tds_details",
      type: 'POST',
      dataType: 'json',
      data: {
        tds_tan_registration_number             : $('#tds_tan_registration_number').val(),
        tds_tan_account_number                  : $('#tds_tan_account_number').val(),
        tds_deductor_collector_type_id          : $('#tds_deductor_collector_type_id').val(),
        tds_deductor_collector_branch_division  : $('#tds_deductor_collector_branch_division').val(),
        tds_std_code                            : $('#tds_std_code').val(),
        tds_phone_number                        : $('#tds_phone_number').val(),
        tds_email                               : $('#tds_email').val(),
        ignore_it_Exception_limit_for_tds_deduction: $('#ignore_it_Exception_limit_for_tds_deduction').val(),
        activate_tds_for_stock_items            : $('#activate_tds_for_stock_items').val(),
        tds_surcharge_cess_details              : $('#tds_surcharge_cess_details').val(),

        //Set/alter details of person responsible
        tds_person_responsible_activate         : $('#tds_person_responsible_activate').val(),
        // IF Set/alter details of person responsible =YES ACTIVATE ALL ITEMS BELOW

        tds_person_responsible_name             : $('#tds_person_responsible_name').val(),
        tds_son_daughter_of                     : $('#tds_son_daughter_of').val(),
        tds_designation                         : $('#tds_designation').val(),
        tds_pan                                 : $('#tds_pan').val(),
        tds_flat_house_number                   : $('#tds_flat_house_number').val(),
        tds_premises_building_name              : $('#tds_premises_building_name').val(),
        tds_road_street_lane_name               : $('#tds_road_street_lane_name').val(),
        tds_area_location_name                  : $('#tds_area_location_name').val(),
        tds_town_city_district_name             : $('#tds_town_city_district_name').val(),
        tds_state_id                            : $('#tds_state_id').val(),
        tds_pincode                             : $('#tds_pincode').val(),
        tds_mobile                              : $('#tds_mobile').val(),
        person_std_code                         : $('#person_std_code').val(),
        tds_telephone                           : $('#tds_telephone').val(),
        tds_email_id                            : $('#tds_email_id').val(),
        tds_std_code_alternate                  : $('#tds_std_code_alternate').val(),
        tds_telephone_alternate                 : $('#tds_telephone_alternate').val(),
        tds_email_id_alternate                  : $('#tds_email_id_alternate').val(),
        li_token                                : token
  },
  
      success: function(response) {
        console.log("response",response);
        if (response.success === true) {
       toast_message("success", "Successful", response.message);
        // alert('TDS details saved successfully.');
        $('#tdsModal').modal('hide');
        $('#tds_details_modal').modal('hide');
        

      
    } else {
        alert('Failed to save TDS details.');
    }
      },
      error: function(xhr, status, error) {
          console.log('Error response:', xhr.responseText);
  // console.log(xhr.responseText);
  console.log('An error occurred:', error);
  alert('An error occurred while saving TDS details. Please check the console for more information.');
}

  });
});

</script>
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
                    Modal for GST Details Start 
    ------------------------------------------------------------------>
    <div class="modal fade backdrop modal_common modal_centered_lg gst_details my-modal" data-value="enable_vat" id="tcs_details_modal"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Company TCS Collector Details</h6>
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
                                    <h6 class="tcs_side_headding">TDS Registration Details</h6>

                                    <!--  start of GST Registration Details -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>TAN Registration Number<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="autofocus enable"
                                                name="tcs_tan_registration_number"
                                                id="tcs_tan_registration_number" tabindex="11000">
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
                                            <input type="text" class="enable" tabindex="11001"
                                                name="tcs_tan_account_number" id="tcs_tan_account_number">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Collector Type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                          
                                            <select tabindex="10802" class="enable"
                                                name="tcs_deductor_collector_type_id"
                                                id="tcs_deductor_collector_type_id">
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
                                            <input type="text" tabindex="11003"
                                                name="tcs_deductor_collector_branch_division"
                                                id="tcs_deductor_collector_branch_division" class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>STD Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11004" name="tcs_std_code"
                                                id="tcs_std_code" class=" enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Phone No.<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" tabindex="11005" name="tcs_phone_number"
                                                id="tcs_phone_number" class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Email<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11006" name="tcs_email" id="tcs_email"
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
                                    <div class="row" id="ignore_it_excrption_limit_section">
                                        <div class="col-md-8">
                                            <label>Ignore IT Exception limit<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable yes_no" name="ignore_it_excemption_limit_for_tcs"
                                                id="ignore_it_excemption_limit_for_tcs"
                                                 tabindex="11007">
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
                                            <select class="enable yes_no" name="tcs_surcharge_cess_details"
                                                id="tcs_surcharge_cess_details" tabindex="11008">
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
                                        <select class="enable yes_no" name="tcs_person_responsible_activate"
                                            id="tcs_person_responsible_activate" tabindex="11009">
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
                                    <div class="tcs_personal_responsible_details_active_inactive">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Name<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_person_responsible_name"
                                                    name="tcs_person_responsible_name" class="enable"
                                                    tabindex="11010">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Son / Daughter of<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_son_daughter_of"
                                                    name="tcs_son_daughter_of" class="enable" tabindex="11011">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Designation<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" tabindex="11012"
                                                    id="tcs_designation" name="tcs_designation">
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>PAN<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_pan" name="tcs_pan" class="enable"
                                                    tabindex="11013">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Flat No<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_flat_house_number"
                                                    name="tcs_flat_house_number" class="enable" tabindex="11014">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Name of Premises / Building<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_premises_building_name"
                                                    name="tcs_premises_building_name" class="enable"
                                                    tabindex="11015">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Road / Street / Lane<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_road_street_lane_name"
                                                    name="tcs_road_street_lane_name" class="enable"
                                                    tabindex="11016">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Area / Location<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" id="tcs_area_location_name"
                                                    name="tcs_area_location_name" tabindex="11017">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Town / City / District<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_town_city_district_name" class="enable"
                                                    name="tcs_town_city_district_name" tabindex="11018">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>State<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- <input type="text" id="tcs_state_id" name="tcs_state_id"
                                                    class="input_data_value_up_down without_backdrop_modal enable"
                                                    tabindex="11019"> -->
                                                    <select class="enable" tabindex="10401" name="tcs_state_id"
                                                id="tcs_state_id" >
                                              
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
                                                <input type="text" id="tcs_pincode" name="tcs_pincode"
                                                    class="enable" tabindex="11020">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Mobile No<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_mobile" name="tcs_mobile"
                                                    class="enable" tabindex="11021">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>STD Code<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" id="tcs_person_std_code"
                                                    name="tcs_person_std_code" tabindex="11022">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Telephone<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_telephone" name="tcs_telephone"
                                                    class="enable" tabindex="11023">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>E-mail ID<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_email_id" name="tcs_email_id"
                                                    class="enable" 
                                                    tabindex="11024">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>STD Code (Alternate)<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" id="tcs_std_code_alternate"
                                                    name="tcs_std_code_alternate" tabindex="11025">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Telephone (Alternate)<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_telephone_alternate"
                                                    name="tcs_telephone_alternate" class="enable" tabindex="11026">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>E-mail (Alternate)<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="tcs_email_id_alternate"
                                                    name="tcs_email_id_alternate" class=" enable"
                                                   tabindex="11027">
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

    <div class="modal fade backdrop bottom modal-old-vouchers masters_add_edit accept_save" id="tcsModal">
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
                            <a class="btn" href="#" id="save_btn_tcs" onclick=""><i
                                    class="fas fa-save"></i><span>S</span>ave</a>
                            <a class="btn" href="#" class="close" data-dismiss="modal" id="btn_tcs_cancel"
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

$('#save_btn_tcs').click(function() {
var token = "<?php echo $_SESSION['li_token']; ?>";
$.ajax({
  
    url: BASE_URL +"index.php/" + accountsController +"/save_tds_details",
    type: 'POST',
    dataType: 'json',
    data: {
      tds_tan_registration_number           : $('#tcs_tan_registration_number').val(),
      tds_tan_account_number                : $('#tcs_tan_account_number').val(),
      tds_deductor_collector_type_id        : $('#tcs_deductor_collector_type_id').val(),
      tds_deductor_collector_branch_division: $('#tcs_deductor_collector_branch_division').val(),
      tds_std_code                          : $('#tcs_std_code').val(),
      tds_phone_number                      : $('#tcs_phone_number').val(),
      tds_email                             : $('#tcs_email').val(),
      ignore_it_Exception_limit_for_tds_deduction: $('#ignore_it_excemption_limit_for_tcs').val(),
      tds_surcharge_cess_details            : $('#tcs_surcharge_cess_details').val(),

      //Set/alter details of person responsible
      tds_person_responsible_activate       : $('#tcs_person_responsible_activate').val(),
      // IF Set/alter details of person responsible =YES ACTIVATE ALL ITEMS BELOW

      tds_person_responsible_name           : $('#tcs_person_responsible_name').val(),
      tds_son_daughter_of                   : $('#tcs_son_daughter_of').val(),
      tds_designation                       : $('#tcs_designation').val(),
      tds_pan                               : $('#tcs_pan').val(),
      tds_flat_house_number                 : $('#tcs_flat_house_number').val(),
      tds_premises_building_name            : $('#tcs_premises_building_name').val(),
      tds_road_street_lane_name             : $('#tcs_road_street_lane_name').val(),
      tds_area_location_name                : $('#tcs_area_location_name').val(),
      tds_town_city_district_name           : $('#tcs_town_city_district_name').val(),
      tds_state_id                          : $('#tcs_state_id').val(),
      tds_pincode                           : $('#tcs_pincode').val(),
      tds_mobile                            : $('#tcs_mobile').val(),
      person_std_code                       : $('#tcs_person_std_code').val(),
      tds_telephone                         : $('#tcs_telephone').val(),
      tds_email_id                          : $('#tcs_email_id').val(),
      tds_std_code_alternate                : $('#tcs_std_code_alternate').val(),
      tds_telephone_alternate               : $('#tcs_telephone_alternate').val(),
      tds_email_id_alternate                : $('#tcs_email_id_alternate').val(),
      li_token                              : token
},

    success: function(response) {
      console.log("response",response);
      if (response.success === true) {
     toast_message("success", "Successful", response.message);
      // alert('TDS details saved successfully.');
      $('#tcsModal').modal('hide');
      //$('#tcs_details_modal').removeClass('modal-backdrop');
      $('#tcs_details_modal').modal('hide');
     
    
   
    
     
    
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

////////////////////////////////////////////////////////////////////////
//     $(".yes_no,.enable").keypress(function (event) {
//         if ($("#tcs_details_modal").hasClass("show")) {
//             if (event.key === "Enter") {

//                 // event.preventDefault();
//                 itype = $(this).prop('type');
//                 if (itype !== 'submit') {
//                     current_tcs_tabindex = $(this).attr('tabindex');
//                     var company_tcs_field_id = $(this).attr('id');
//                     if (company_tcs_field_id == "tcs_pan")//pan number validation
//                     {
//                         var tcs_pan_number = document.getElementById("tcs_pan").value;
//                         var tcs_pan_expr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;
//                         //   if(tcs_pan_number =="")
//                         //   {
//                         //     alert_message("warning", "warning", "GSTIN/UIN is not specified.");


//                         //   }
//                         if (!tcs_pan_expr.test(tcs_pan_number)) {
//                             alert_message("warning", "warning", "Invalid PAN format. The PAN must contain 5 alphabets, followed by 4 numbers and then 1 albhabet . For eg.AAAPS1234A");
//                         }
//                     }
//                     else if (company_tcs_field_id == "tcs_tan_registration_number")//tan number validation
//                     {
//                         var tcs_tan_number = document.getElementById("tcs_tan_registration_number").value;
//                         var tcstanexpr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;
//                         if (!tcstanexpr.test(tcs_tan_number)) {
//                             alert_message("warning", "Warning", "Invalid tan Structure. (Format should be of 4Alpha,5number and 1 Alpha. E.g:-AAAAA12345A");
//                         }
//                     }
//                     else if (company_tcs_field_id == "tcs_person_responsible_activate")//tan number validation
//                     {
//                         if ($("#tcs_person_responsible_activate").val() == "no") {
//                             $('#tcsModal').modal('show');
//                         }
//                     }
//                     else if (company_tcs_field_id == "tcs_email_id_alternate")//tan number validation
//                     {
//                         if ($("#tcs_person_responsible_activate").val() == "yes") {
//                             $('#tcsModal').modal('show');
//                         }
//                     }
//                     var next = parseInt(current_tcs_tabindex) + 1;

//                     if (current_tcs_tabindex >= 11000 && current_tcs_tabindex < 11200) {
//                         while (next < 11200) {

//                             if ($('[tabindex^="' + (parseInt(next)) + '"]').hasClass('enable')) {
//                                 nextInput = $('[tabindex^="' + next + '"]');
//                                 if (nextInput.length) {
//                                     nextInput.focus();
//                                     return false;
//                                 }
//                             }
//                             next++;
//                         }
//                     }
//                 }
//             }
//         }

//     });

//     $('.yes_no,.enable').keydown(function (e) {
//     if (e.shiftKey && e.keyCode == 9) {//shift+alt
//         company_tcs_tab_current_id = $(this).attr('id');
//         if (company_tcs_tab_current_id == "tcs_tan_registration_number") {
//             $("#tcs_details_modal").modal('hide')
//             e.preventDefault();
//             $("#enable_tcs").focus();
//           ;
//         }
      
//     }
//     else if (e.keyCode == 9) {
//         company_tcs_tab_current_id = $(this).attr('id');
//         if (company_tcs_tab_current_id == "tcs_pan")//pan number validation
//         {
//             var panNumber = document.getElementById("tcs_pan").value;
//             var panexpr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;

//             if (!panexpr.test(panNumber)) {
//                 alert_message("warning", "warning", "Invalid PAN format. The PAN must contain 5 alphabets, followed by 4 numbers and then 1 albhabet . For eg.AAAPS1234A");
//             }
//         }
//         else if (company_tcs_tab_current_id == "tcs_tan_account_number")//tan number validation
//         {
//             var TdsTanNumber = document.getElementById("tcs_tan_account_number").value;
//             var tcstanexpr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;
//             if (!tcstanexpr.test(TdsTanNumber)) {
//                 alert_message("warning", "Warning", "Invalid Tan Structure. (Format should be of 4Alpha,5number and 1 Alpha. E.g:-AAAAA12345A");
//             }
//         }
//         else if (company_tcs_tab_current_id == "tcs_person_responsible_activate")
//         {
//             if ($("#tcs_person_responsible_activate").val() == "no") {
//                         $('#tcsModal').modal('show');
//                     }
//         }
//         else if (company_tcs_tab_current_id == "tcs_email_id_alternate")
//         {
//             if ($("#tcs_person_responsible_activate").val() == "yes") {
//                         $('#tcsModal').modal('show');
//                     }
//         }
//     }
// });
////////// ooo////////////////
$(".yes_no,.enable").on("keydown", function(event) {
    if ($("#tcs_details_modal").hasClass("show")) {
        var validationFails = false;
        if ((event.key === "Enter" || (event.key === "Tab" && !event.shiftKey)) && !validationFails)  {
            // Prevent the default behavior of the Tab key
            if (event.key === "Tab") {
                event.preventDefault();
            }

            itype = $(this).prop('type');
            if (itype !== 'submit') {
                current_tcs_tabindex = $(this).attr('tabindex');
                var company_tcs_field_id = $(this).attr('id');

               
                if (company_tcs_field_id == "tcs_pan") {
                    var tcs_pan_number = document.getElementById("tcs_pan").value;
                        var tcs_pan_expr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;
                             if (!tcs_pan_expr.test(tcs_pan_number)) {
                            alert_message("warning", "warning", "Invalid PAN format. The PAN must contain 5 alphabets, followed by 4 numbers and then 1 albhabet . For eg.AAAPS1234A");
                            return;
                        }
                } else if (company_tcs_field_id == "tcs_tan_registration_number") {
                    var tdsTanRegNumber = document.getElementById("tcs_tan_registration_number").value;
                        if (tdsTanRegNumber === '') {
                            alert_message("warning", "warning", "TAN Registration Number is not specified.");
                            return;
                        }
                } else if (company_tcs_field_id == "tcs_tan_account_number") {
                    var TdsTanNumber = document.getElementById("tcs_tan_account_number").value;
                        if (TdsTanNumber === null) {
                           
                            alert_message("warning", "Warning", "TAN number is not specified.");
                            return;
                        }
                        var tdstanexpr = /(?:(?=(^[a-zA-Z]{5}\d{4}[a-zA-Z]{1}$))|(?=(^[a-zA-Z]{4}[0-9]{5}[a-zA-Z]{1}?$)))/;
                        if (!tdstanexpr.test(TdsTanNumber)) {
                            alert_message("warning", "Warning", "Invalid TAN Structure. Format should be 4 Alphabets, 5 Numbers, and 1 Alphabet. For example: ABCD12345E");
                            return;
                        }
                } else if (company_tcs_field_id == "tcs_deductor_collector_branch_division") {
                    var branchDivision = $("#tcs_deductor_collector_branch_division").val();
                        if (branchDivision.trim() === '') {
                            alert_message("warning", "warning", "Deductor Branch / Division cannot be empty.");
                            return;
                        }
                } else if (company_tcs_field_id == "tcs_std_code") {
                    var stdCode = $("#tcs_std_code").val();
                            var stdCodeRegex = /^\d{2,8}$/; // 2 to 8 digits numeric code

                            if (stdCode.trim() !== '' && !stdCodeRegex.test(stdCode)) {
                                alert_message("warning", "Warning", "Invalid STD Code. Please enter a valid 2 to 8-digit numeric STD Code.");
                                return;
                            }
                }
                // validation for phone number
                else if (company_tcs_field_id == "tcs_phone_number") {
                        var phoneNumber = $("#tcs_phone_number").val();
                        var phoneNumberRegex = /^\d{10}$/; // 10-digit numeric phone number

                        if (phoneNumber.trim() !== '' && !phoneNumberRegex.test(phoneNumber)) {
                            alert_message("warning", "Warning", "Invalid Phone No. Please enter a valid 10-digit numeric Phone No.");
                            return;
                        }
                    }
                     // validation for email
                     else if (company_tcs_field_id == "tcs_email") {
                        var email = $("#tcs_email").val();
                        var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                        if (email.trim() !== '' && !emailRegex.test(email)) {
                            alert_message("warning", "Warning", "Invalid Email. Please enter a valid email address.");
                            return;
                        }
                    }
                     // Validation for Name
                     else if (company_tcs_field_id == "tcs_person_responsible_name") {
                        var tcs_name = $("#tcs_person_responsible_name").val().trim();
                        if (tcs_name === '') {
                            alert_message("warning", "Warning", "Name cannot be empty.");
                            return;
                        }
                    }
                      // Validation for Son / Daughter of
                      else if (company_tcs_field_id == "tcs_son_daughter_of") {
                        var tcs_sonDaughterOf = $("#tcs_son_daughter_of").val().trim();
                        if (tcs_sonDaughterOf === '') {
                            alert_message("warning", "Warning", "Son / Daughter of field cannot be empty.");
                            return;
                        }
                    }
                      // Validation for Designation
                      else if (company_tcs_field_id == "tcs_designation") {
                        var tcs_designation = $("#tcs_designation").val().trim();
                        if (tcs_designation === '') {
                            alert_message("warning", "Warning", "Designation field cannot be empty.");
                            return;
                        }
                    }
                    // validation for mobile number
                    
                    else if (company_tcs_field_id == "tcs_mobile") {
                            var tcs_mobileNumber = $("#tcs_mobile").val().trim();
                            if (tcs_mobileNumber !== '') {
                                var mobileRegex = /^[0-9]{10}$/;
                                if (!mobileRegex.test(mobileNumber)) {
                                    alert_message("warning", "Warning", "Invalid Mobile Number. Please enter a valid 10-digit mobile number.");
                                    return;
                                }
                            }
                        }
                    else if (company_tcs_field_id == "tcs_person_responsible_activate")
                    {
                        if ($("#tcs_person_responsible_activate").val() == "no") {
                                    $('#tcsModal').modal('show');
                                }
                    }
                    else if (company_tcs_field_id == "tcs_email_id_alternate")
                    {
                        if ($("#tcs_person_responsible_activate").val() == "yes") {
                                    $('#tcsModal').modal('show');
                                }
                    }
                    
                                 
                var next = parseInt(current_tcs_tabindex) + 1;
                if (current_tcs_tabindex >= 11000 && current_tcs_tabindex < 11200) {
                    while (next < 11200) {
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
$(document).on('keydown', function (event) {
    
    if ((event.key === 's' || event.key === 'S') && $("#tcsModal").hasClass("show")) {
        event.preventDefault(); // Prevent the default "s" key behavior
        console.log("S key pressed inside tdsModal");
        document.getElementById('save_btn_tcs').click();
        var $enable_vat = $('#enable_vat'); 
        if ($enable_vat.length) {
            $enable_vat.focus();
        }
    }
});

    $("#tcs_person_responsible_activate").on("change", function () {
        if ($("#tcs_person_responsible_activate").val() == "no") {
            $(".tcs_personal_responsible_details_active_inactive input").prop("disabled", true);
            $(".tcs_personal_responsible_details_active_inactive label").css("color", "#696969");
        }
        if ($("#tcs_person_responsible_activate").val() == "yes") {
            $(".tcs_personal_responsible_details_active_inactive input").prop("disabled", false);
            $(".tcs_personal_responsible_details_active_inactive label").css("color", "#000000");

        }
    });
    $("#btn_tcs_cancel").on("click",function()//if you click cancel button of save tcs modal
    {
        if ($("#tcsModal").hasClass("show")) {
                if($("#tcs_person_responsible_activate").val()=="yes")
                {
                    $("#tcs_email_id_alternate").focus();
                }
                else if($("#tcs_person_responsible_activate").val()=="no")
                {
                    $("#tcs_person_responsible_activate").focus();
                }
                
            }
    });
    $(document).ready(function () {
        value_tcs_person_responsible_activate = $("#tcs_person_responsible_activate").val();
        if (value_tcs_person_responsible_activate == "no") {
            $(".tcs_personal_responsible_details_active_inactive input").prop("disabled", true);
            $(".tcs_personal_responsible_details_active_inactive label").css("color", "#696969");

        }
        if (value_tcs_person_responsible_activate == "yes") {
            $(".tcs_personal_responsible_details_active_inactive input").prop("disabled", false);
            $(".tcs_personal_responsible_details_active_inactive label").css("color", "#000000");
        }
    });
    $(window).keydown(function (e) {//focus last element when you press c on save modal
        if (e.keyCode == 67) {//c button press
            if ($("#tcsModal").hasClass("show")) {
                $("#tcsModal").modal("hide");
                e.preventDefault();
                if($("#tcs_person_responsible_activate").val()=="yes")
                {
                    $("#tcs_email_id_alternate").focus();
                }
                else if($("#tcs_person_responsible_activate").val()=="no")
                {
                    $("#tcs_person_responsible_activate").focus();
                }
                
            }
        }
        if (e.keyCode == 27) {//esc button press
            if ($("#tdsModal").hasClass("show")) {
                $("#tdsModal").modal("hide");
                // $("#enable_tds").show();
                e.preventDefault();
                 return false;
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
    $("#btn_tcs_cancel").on("click",function()//if you click cancel button of save tds modal
    {
        if ($("#tcsModal").hasClass("show")) {
                if($("#tcs_person_responsible_activate").val()=="yes")
                {
                    $("#tcs_email_id_alternate").focus();
                }
                else if($("#tcs_person_responsible_activate").val()=="no")
                {
                    $("#tcs_person_responsible_activate").focus();
                }
                
            }
    })
</script>

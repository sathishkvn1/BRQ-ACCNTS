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
    <div class="modal fade backdrop modal_common modal_centered_lg  my-modal" data-value="enable_vat"
        id="vat_details_modal" tabindex="-1" data-backdrop="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Company VAT Details</h6>
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
                                    <h6 class="tcs_side_headding">VAT Registration Details</h6>

                                    <!--  start of GST Registration Details -->

                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>State<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable autofocus" tabindex="11200" name="vat_state_id"
                                                id="vat_state_id">
                                                <option value="1">Kerala</option>
                                            </select>

                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row End Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Address Type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select tabindex="11201" class="enable" id="vat_applicable_from"
                                                name="vat_applicable_from">
                                                <option value="1">Primary</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row Start Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>TIN<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11202" name="vat_tin_number"
                                                id="vat_tin_number" class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Interstate sales tax number<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11203" name="interstate_sales_tax_number"
                                                id="interstate_sales_tax_number" class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>CST registration date<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11204" name="vat_registration_date"
                                                id="vat_registration_date" class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row start Here -->

                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Periodicity of e-VAT Annexures<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select tabindex="11205" class="enable" name="e_vat_periodicity_id"
                                                id="e_vat_periodicity_id">
                                                <option value="1">Quarterly</option>
                                                <option value="1">Half Yearly</option>
                                                <option value="1">Annuaerly</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Is Under NPV Scheme<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="11206" name="is_under_npv_scheme"
                                                id="is_under_npv_scheme">
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Enable VAT calculation on quantity<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="11207"
                                                name="enable_vat_calculation_on_quantity"
                                                id="enable_vat_calculation_on_quantity">
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Enable VAT calculation on stock item rate<span
                                                    class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="11208"
                                                name="enable_vat_calculation_on_stock_item_rate"
                                                id="enable_vat_calculation_on_stock_item_rate">
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Define VAT commodity and tax details as
                                                masters<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="11209"
                                                name="define_commodity_and_tax_as_masters"
                                                id="define_commodity_and_tax_as_masters">
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Deactive from<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11210" name="deactivate_from"
                                                id="deactivate_from" class="enable">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Set/alter/rate details<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no with_backdrop_modal_val_yes  enable"
                                                data-target="#tax_rate_detail_modal" tabindex="11211"
                                                name="vat_rate_details" id="vat_rate_details">
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </div>
                                    </div>



                                </div>
                                <!--  start of GST Registration Details -->
                            </div>
                        </div>
                        <!-- Left Side End Here -->

                        <!-- Right Side Start Here -->
                        <div class="col-md-6 right_side_content">

                            <!-- Right Content -->
                            <div class="row">

                                <!-- Single features Section End Here -->
                                <div class="col-md-12" id="additional_configuration_section">
                                    <h6>Additional Information</h6>

                                    <!-- <div class="row main_content"> -->
                                    <!-- Main Content Start Here -->
                                    <!-- --------- single row start here --------------- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Circle Office<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" id="circle_office" name="circle_office"
                                                tabindex="11212"></input>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Status of Busines<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" id="status_of_business"
                                                name="status_of_business" tabindex="11213"></input>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Nature of Busines<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" id="nature_of_business"
                                                name="nature_of_business" tabindex="11214"></input>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Fax Number<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" id="vat_fax_number" name="vat_fax_number"
                                                tabindex="11215"></input>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Website Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11216" class="enable" name="vat_website"
                                                id="vat_website">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Authorised Person<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11217" class="enable" name="authorised_person"
                                                id="authorised_person">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Status/designation<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11218" class="enable"
                                                name="vat_status_designation" id="vat_status_designation">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Place<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11219" class="enable" name="vat_place"
                                                id="vat_place">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>District<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" tabindex="11220" class="enable" name="vat_district"
                                                id="vat_district">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
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

    <!-- tax/rate details -->
    <div class="modal fade backdrop modal_common modal_centered_sm vat_details_modal my-modal"
        name="tax_rate_detail_modal" id="tax_rate_detail_modal" tabindex="-1" data-value="vat_rate_details">
        <div class="modal-dialog modal-dialog-centered modal-dialog-md" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Tax/Rate Details</h6>
                    </div>
                    <div
                        style="display: flex; align-items: center; justify-content: center; width: 107%;margin-top:20px;">
                        <h6><u>Service Tax Details</u></h6>
                    </div>
                </div>
                <div class="modal-body">

                    <!-- Single content start here -->
                    <div class="row">
                        <div class="col-md-12">

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>CST effective Date<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="enable autofocus" id="cst_effective_date" tabindex="11221"
                                        name="cst_effective_date">
                                </div>
                            </div>
                            <!-- Single Row End Here -->
                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Against Form C<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="enable" id="cst_rate_against_form_c" tabindex="11222"
                                        name="cst_rate_against_form_c">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <div class="row"
                                style="display: flex; align-items: center; justify-content: center; width: 107%">
                                <h6 style="text-align: center;"><u>VAT Rate</u> </h6>
                            </div>

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>VAT effective Date<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="vat_effective_date" name="vat_effective_date" class="enable"
                                        tabindex="11223">
                                </div>
                            </div>
                            <!-- Single Row End Here -->

                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Tax rate<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="vat_rate" name="vat_rate" class="enable" tabindex="11224">
                                </div>
                            </div>
                            <!-- Single Row End Here -->
                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Cess<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="vat_cess" name="vat_cess" class="enable" tabindex="11225">
                                </div>
                            </div>
                            <!-- Single Row End Here -->
                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Tax Type<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <select name="vat_tax_type_id" class="enable" id="vat_tax_type_id" tabindex="11226">
                                        <option value="">Taxable</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Single Row End Here -->
                            <div class="row"
                                style="display: flex; align-items: center; justify-content: center; width: 107%">
                                <h6 style="text-align: center;"><u>Other Info</u> </h6>
                            </div>
                            <!-- Single Row start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Schedule<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <select tabindex="11227" class="enable" name="vat_schedule_id" id="vat_schedule_id">
                                        <option value="1">Not Applicable</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Single Row End Here -->
                            <!-- Single Row start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Type of goods<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <select tabindex="11228" class="enable" name="type_of_goods_id"
                                        id="type_of_goods_id">
                                        <option value="1">Raw Jute</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Single Row End Here -->
                            <!-- Single Row start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Nature of goods<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <select tabindex="11229" class="enable" name="nature_of_goods_id"
                                        id="nature_of_goods_id">
                                        <option value="1">Non Vatable</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Single Row End Here -->
                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Commodity name<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="enable" id="commodity_name" tabindex="11230"
                                        name="commodity_name">
                                </div>
                            </div>
                            <!-- Single Row End Here -->
                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Commodity code<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="enable" id="commodity_code" tabindex="11231"
                                        name="commodity_code">
                                </div>
                            </div>
                            <!-- Single Row End Here -->
                            <!-- Single Row Start Here -->
                            <div class="row">
                                <div class="col-md-8">
                                    <label>Sub Commodity code<span class="colon">:</span></label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="modal_last_input_field enable" id="sub_commodity_code"
                                        tabindex="11232" name="sub_commodity_code" data-target="#tax_rate_detail_modal">
                                </div>
                            </div>
                            <!-- Single Row End Here -->


                        </div>
                    </div>
                    <!-- Single content start here -->

                </div>
            </div>
        </div>
    </div>





    <div class="modal fade backdrop bottom modal-old-vouchers masters_add_edit accept_save" id="vatModal">
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
                            <a class="btn" href="#" id="save-btn-vat" onclick=""><i
                                    class="fas fa-save"></i><span>S</span>ave</a>
                            <a class="btn" href="#" class="close" data-dismiss="modal" id="btn_vat_cancel"
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
    $(".yes_no,.enable").keypress(function (event) {
        if ($("#vat_details_modal").hasClass("show")) {
            if (event.key === "Enter") {

                // event.preventDefault();
                itype = $(this).prop('type');
                if (itype !== 'submit') {
                    vat_current_tabindex = $(this).attr('tabindex');
                    var company_vat_field_id = $(this).attr('id');
                    if (company_vat_field_id == "vat_rate_details") {
                        var val_company_vat_field_id = $("#vat_rate_details").val();//yes or no
                        if (val_company_vat_field_id === "no")//save modal open when set alter rate details calue no
                        {
                            $("#circle_office").prop('disabled', true);
                            $("#vatModal").modal("show");
                        }
                        else if (val_company_vat_field_id === "yes")//save modal open when set alter rate details calue no
                        {
                            $("#circle_office").removeAttr('disabled');
                        }
                    }
                    if (company_vat_field_id == "vat_district") {
                        var val_company_vat_field_id = $("#vat_rate_details").val();
                        if (val_company_vat_field_id === "yes")//save modal open when set alter rate details calue no
                        {
                            $("#vatModal").modal("show");
                        }

                    }
                    var next = parseInt(vat_current_tabindex) + 1;

                    if (vat_current_tabindex >= 11200 && vat_current_tabindex < 11400) {
                        while (next < 11400) {

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
    $(window).keydown(function (e) {//focus last element when you press c on save modal

        if (e.keyCode == 9) {//tab intex integration
            var company_vat_field_id = $(this).attr('id');
            if (company_vat_field_id == "vat_rate_details") {
                var val_company_vat_field_id = $("#vat_rate_details").val();
                if (val_company_vat_field_id === "no")//save modal open when set alter rate details calue no
                {
                    $("#circle_office").prop('disabled', true);
                    $("#vatModal").modal("show");
                }
                else if (val_company_vat_field_id === "yes")//save modal open when set alter rate details calue no
                {
                    $("#circle_office").removeAttr('disabled');
                }
            }
        }
        if (e.keyCode == 67) {//c button press
            if ($("#vatModal").hasClass("show")) {
                $("#vatModal").modal("hide");
                e.preventDefault();
                if ($("#vat_rate_details").val() == "yes") {
                    $("#vat_district").focus();
                }
                else if ($("#vat_rate_details").val() == "no") { 
                    $("#vat_rate_details").focus();

                }

            }
        }
        if (e.keyCode == 83) {//if you click s 
            if ($("#vatModal").hasClass("show")) {
                alert("plese trigger the save button")
                $("#vatModal").modal("hide");
                $("#vat_details_modal").modal("hide");
                $("#vat_district").focus();
            }
        }

    });
    $("#vat_details_modal").on("click",function(){
        if ($("#vatModal").hasClass("show")) {
                $("#vatModal").modal("hide");
                e.preventDefault();
                if ($("#vat_rate_details").val() == "yes") {
                    $("#vat_district").focus();
                }
                else if ($("#vat_rate_details").val() == "no") {
                 
                    $("#vat_rate_details").focus();

                }
            }
      
    });
</script>
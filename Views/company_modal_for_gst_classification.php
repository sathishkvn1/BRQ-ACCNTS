<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="modal fade backdrop modal_common modal_centered_lg gst_details " 
        id="gst_classification_modal" data-value="enable_tds" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>GST Classification Creation</h6>
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
									<div class="row">
                                        <div class="col-md-8">
                                            <label>Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="autofocus enable"
                                                name="gst_classification_class_name" id="gst_classification_class_name"
                                                tabindex="11400">
                                        </div>
                                    </div>
                                    <h6 class="tds_side_headding">HSN/SAC & Related Details</h6>
                                  	  <!--  start of GST Registration Details -->
                                        <!-- Single Row Start Here -->
										<div class="row">
                                        <div class="col-md-8">
                                            <label>HSN/SAC Details<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable " tabindex="11401" class="gst_classification_hsn_sac_details"
                                                id="gst_classification_hsn_sac_details">
                                                <option value="0">Not Defines</option>
                                                <option value="1">Specify Details Here</option>
                                                <option value="2">Use Gst Classification</option>
                                                <option value="3">Specify in Voucher</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <div class="voucher_hide_first_in_gst_classification">
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>HSN/SAC<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" name="gst_classification_hsn_sac_number"
                                                    id="gst_classification_hsn_sac_number" tabindex="11402">
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->
                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Description<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" name="gst_classification_hsn_sac_description"
                                                    id="gst_classification_hsn_sac_description" tabindex="11403">
                                            </div>
                                        </div>
										  <!-- Single Row End Here -->
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
                                            <select tabindex="11404" class="enable" name="gst_classification_rate_details_id"
                                                id="gst_classification_rate_details_id">
                                                <option value="0">Not Defines</option>
                                                <option value="1">Specify Details Here</option>
                                                <option value="2">Specify Slab-Based Rates</option>
                                                <option value="3">Use Gst Classification</option>
                                                <option value="4">Specify in Voucher</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->



                                    <div class="gst_classification_voucher_hide_second">
                                        <!--show and hide section-->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Taxability Type <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable" name="gst_classification_taxability_type_id" id="gst_classification_taxability_type_id"
                                                    tabindex="11405">
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
                                                <label>Natural of Transaction <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                    <select class="enable" name="gst_classification_nature_of_transaction_id" id="gst_classification_nature_of_transaction_id"
                                                    tabindex="11406">
                                                    <option value="1">Local Sales - Taxable</option>
                                                   
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
                                                <input type="text" id="gst_classification_igst_rate" name="gst_classification_igst_rate"
                                                    style="width:30px !important;margin-right:3px !important" value="1"
                                                    class="enable" tabindex="11407">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>CGST Rate <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="gst_classification_cgst_rate" name="gst_classification_cgst_rate"
                                                    style="width:30px !important;margin-right:3px !important" value="1"
                                                    class="enable" tabindex="11408">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>SGST/UTGST Rate <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="gst_classification_sgst_utgst_rate" name="gst_classification_sgst_utgst_rate"
                                                    style="width:30px !important;margin-right:3px !important" value="1"
                                                    class="enable" tabindex="11409">%</input>
                                            </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Cess Valuation Type <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select tabindex="11410" class="enable" name="gst_classification_cess_valuation_type_id"
                                                    id="gst_classification_cess_valuation_type_id">
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
                                                <input type="text" id="gst_classification_cess_rate" name="gst_classification_cess_rate"
                                                    style="width:30px !important;margin-right:3px !important" value="1"
                                                    class="enable" tabindex="11411">%</input>
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
                                                <select class="yes_no  enable" tabindex="11412"
                                                    name="gst_classification_applicable_for_reverse_charge"
                                                    id="gst_classification_applicable_for_reverse_charge">
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
                                                <select class="yes_no  enable" tabindex="11413"
                                                    name="gst_classification_eligible_for_input_tax_credit"
                                                    id="gst_classification_eligible_for_input_tax_credit">
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
                    	</div>

						
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content">
                <h6 class="gst_classes_headding">GST Classes Available</h6>
					<div class="row">		
						<table class="table table-striped" id="gst_clasification_table">
							<thead>
								<tr>
									<th>GST Class Name</th>
									<th>HSN/SAC</th>
									<th>Taxability Type</th>
									<th>GST Rate</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								
								<tr>
									<td>new</td>
									<td>Item 1</td>
									<td>Description 1</td>
									<td>6%</td>
									<td>
										<div class="operations">
											<a href="#" class="btn btn-xs  first_a" title="Edit">
												<i class="fas fa-edit"></i>
											</a>
											<a href="#" class="btn btn-xs" title="Delete">
												<i class="fas fa-trash"></i>
											</a>
										</div>
										
									</td>
								</tr>
								<tr>
									<td>new</td>
									<td>Item 1</td>
									<td>Description 1</td>
									<td>6%</td>
									<td>
										<div class="operations">
											<a href="#" class="btn btn-xs  first_a" title="Edit">
												<i class="fas fa-edit"></i>
											</a>
											<a href="#" class="btn btn-xs " title="Delete">
												<i class="fas fa-trash"></i>
											</a>
										</div>
										
									</td>
								</tr>
								<tr>
									<td>new</td>
									<td>Item 1</td>
									<td>Description 1</td>
									<td>6%</td>
									<td>
										<div class="operations">
											<a href="#" class="btn btn-xs  first_a" title="Edit">
												<i class="fas fa-edit"></i>
											</a>
											<a href="#" class="btn btn-xs" title="Delete">
												<i class="fas fa-trash"></i>
											</a>
										</div>
										
									</td>
								</tr>
								<!-- Add more rows here -->
							</tbody>
    					</table>

						

					</div>
				</div>

            </div>
        </div>
    </div>


    <div class="modal fade backdrop bottom modal-old-vouchers masters_add_edit accept_save index-modal" id="gstmodal_classification">
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
                            <a class="btn" href="#" id="save-btn-gst-classification" onclick=""><i
                                    class="fas fa-save"></i><span>S</span>ave</a>
                            <a class="btn" href="#" class="close" data-dismiss="modal" id="btn_gst_classification_cancel"
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
        if ($("#gst_classification_modal").hasClass("show")) {
            if (event.key === "Enter") {
                // event.preventDefault();
                itype = $(this).prop('type');
                if (itype !== 'submit') {
                    current_gst_classification_tabindex = $(this).attr('tabindex');
                    var company_gst_classification_field_id = $(this).attr('id');
                    var next = parseInt(current_gst_classification_tabindex) + 1;
                    if(company_gst_classification_field_id==='gst_classification_eligible_for_input_tax_credit')
                    {
                        $('#gstmodal_classification').modal('show');
                    }
                    if (current_gst_classification_tabindex >= 11400 && current_gst_classification_tabindex < 11600) {
                        while (next < 11600) {

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
    $("#btn_gst_classification_cancel").on("click", function(event) {
    event.stopPropagation();
    $("#gstmodal_classification").modal("hide");
        $("#eligible_for_input_tax_credit").focus(); // Adjust the delay as needed
});


$("#gst_classification_hsn_sac_details").on("change", function () {
    var gst_classification_hsn_sac_details_selected_option = ($("#gst_classification_hsn_sac_details option:selected").text().toLowerCase());
    if (gst_classification_hsn_sac_details_selected_option == 'specify in voucher') {
        $(".voucher_hide_first_in_gst_classification").hide();
            if ($("#gst_classification_hsn_sac_description").hasClass("enable")) {
                $("#gst_classification_hsn_sac_description").removeClass("enable");
            }
            if ($("#gst_classification_hsn_sac_number").hasClass("enable")) {
                $("#gst_classification_hsn_sac_number").removeClass("enable");
            }
    }
    if (gst_classification_hsn_sac_details_id_selected_option != 'specify in voucher')
          {
          
            $(".voucher_hide_first_in_gst_classification").show();
            if (!$("#gst_classification_hsn_sac_number").hasClass("enable")) {
                $("#gst_classification_hsn_sac_number").addClass("enable");
            }
            if (!$("#gst_classification_hsn_sac_description").hasClass("enable")) {
                $("#gst_classification_hsn_sac_description").addClass("enable");
            }
        }
});
$("#gst_classification_rate_details_id").on("change", function () 
{
    var gst_classification_gst_classification_rate_details_id = ($("#gst_classification_rate_details_id option:selected").text().toLowerCase());
    if (gst_classification_gst_classification_rate_details_id == 'specify in voucher') {
        $(".gst_classification_voucher_hide_second").hide();
    if ($("#gst_classification_taxability_type_id").hasClass("enable")) {
        $("#gst_classification_taxability_type_id").removeClass("enable");
        }
    if ($("#gst_classification_nature_of_transaction_id").hasClass("enable")) {
        $("#gst_classification_nature_of_transaction_id").removeClass("enable");
        }
    if ($("#gst_classification_igst_rate").hasClass("enable")) {
        $("#gst_classification_igst_rate").removeClass("enable");
        }
    if ($("#gst_classification_cgst_rate").hasClass("enable")) {
        $("#gst_classification_cgst_rate").removeClass("enable");
        }
    if ($("#gst_classification_sgst_utgst_rate").hasClass("enable")) {
        $("#gst_classification_sgst_utgst_rate").removeClass("enable");
        }
    if ($("#gst_classification_cess_valuation_type_id").hasClass("enable")) {
        $("#gst_classification_cess_valuation_type_id").removeClass("enable");
        }
    if ($("#gst_classification_cess_rate").hasClass("enable")) {
        $("#gst_classification_cess_rate").removeClass("enable");
        }
    if ($("#gst_classification_applicable_for_reverse_charge").hasClass("enable")) {
        $("#gst_classification_applicable_for_reverse_charge").removeClass("enable");
        }
    if ($("#gst_classification_eligible_for_input_tax_credit").hasClass("enable")) {
        $("#gst_classification_eligible_for_input_tax_credit").removeClass("enable");
        }
        $('#gstmodal_classification').modal('show');

    }
    if (gst_classification_gst_classification_rate_details_id != 'specify in voucher') {
        $(".gst_classification_voucher_hide_second").show();
        if (!$("#gst_classification_taxability_type_id").hasClass("enable")) {
                $("#gst_classification_taxability_type_id").addClass("enable");
            }
        if (!$("#gst_classification_nature_of_transaction_id").hasClass("enable")) {
            $("#gst_classification_nature_of_transaction_id").addClass("enable");
            }
        if (!$("#gst_classification_igst_rate").hasClass("enable")) {
            $("#gst_classification_igst_rate").addClass("enable");
            }
        if (!$("#gst_classification_sgst_utgst_rate").hasClass("enable")) {
            $("#gst_classification_sgst_utgst_rate").addClass("enable");
            }
        if (!$("#gst_classification_cess_valuation_type_id").hasClass("enable")) {
            $("#gst_classification_cess_valuation_type_id").addClass("enable");
            }
        if (!$("#gst_classification_cess_rate").hasClass("enable")) {
            $("#gst_classification_cess_rate").addClass("enable");
            }
        if (!$("#gst_classification_applicable_for_reverse_charge").hasClass("enable")) {
            $("#gst_classification_applicable_for_reverse_charge").addClass("enable");
            }
        if (!$("#gst_classification_eligible_for_input_tax_credit").hasClass("enable")) {
            $("#gst_classification_eligible_for_input_tax_credit").addClass("enable");
            }

    }
    
   
  
})
</script>
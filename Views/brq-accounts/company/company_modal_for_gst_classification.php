<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #gst_classification_data_table_length
        {
            display:none;
        }
    </style>
</head>
<body>

<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modals my-modal" 
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
                            <div class="row" style="padding-top:8px">
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
                                        <input type="hidden" id="gst_classification_class_name_isValid" value="0">
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
                                                <?php
                                                if (isset($gst_hsn_sac_type)):
                                                    foreach ($gst_hsn_sac_type as $row):
                                                        $name = $row->hsn_sac_related_action;
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
                                                <label>Natural of Transaction <span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable" name="gst_classification_nature_of_transaction_id" id="gst_classification_nature_of_transaction_id"
                                                    tabindex="11406">
                                                    <!-- <option value="1">Local Sales - Taxable</option> -->
                                                    <?php
                                                if (isset($gst_classi_nature_of_transaction)): foreach ($gst_classi_nature_of_transaction as $row):
                                                        $name = $row->nature_of_transaction;
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
                                                <input type="text" id="gst_classification_igst_rate" name="gst_classification_igst_rate"
                                                    style="width:30px !important;margin-right:3px !important" value="1"
                                                    class="enable" tabindex="11407">%
                                                </input>
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
                                            <input type="hidden" id="gst_classi_hidden_id" name="gst_classi_hidden_id" value="0">
                                            <input type="hidden" id="hid_row_id" name="hid_row_id" value="">
                                        </div>
                                        <!-- Single Row End Here -->
                                    </div>
                                    <!-- Single features Section End Here -->
                                </div>
                            </div>
                    	</div>

						
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content tabular_formate">
              
                    <div class="row" >		
                        <table id="gst_classification_data_table" class="col-12 table table-striped display">
                        <thead>
								<tr>
									<th>GST Class Name</th>
                                    <th>Descrition</th>
                                    
                                   
									<th class="action">Actions</th>
								</tr>
							</thead>
							<tbody>
                            <!-- <tr>
									 <td>new</td> 
									<td>
										<div class="operations">
											<a href="#" class="btn btn-xs" title="Edit">
												<i class="fas fa-edit"></i>
											</a>
											<a href="#" class="btn btn-xs" title="Delete">
												<i class="fas fa-trash"></i>
											</a>
										</div>
										
									</td>
							</tr>
                            -->
								
							</tbody>
                          
                        </table>


					</div>
                    <div class="border_bottom_for_save_cancel">

                    </div>
                    <div class="row save_cancel_section">
                        <div class="col-12" style="display: flex !important;flex-direction: row-reverse !important;">
                            <button id="cancel_gst_classification_btn" class="cancel_inventory_btn btn" type="button" tabindex="11416">
                                <span>C</span>ancel
                            </button>
                            <button id="new_gst_classification_btn" class="new_inventory_btn btn ml-2" type="button" tabindex="11415">
                                <i class="fas fa-calendar-check"></i><span>N</span>ew
                            </button>
                            <button id="save_gst_classification_btn" class="save_inventory_btn btn" type="button" tabindex="11414">
                                <i class="fas fa-calendar-check"></i><span>S</span>ave
                            </button>
                          
                            
                        </div>
				    </div>
				</div>

            </div>
        </div>
    </div>


  

</body>
</html>
<script>
    

</script>
<script>

$("#gst_classification_eligible_for_input_tax_credit").on("keydown", function(event) {
    if (event.keyCode === 13) { 
        event.preventDefault(); 
        $("#save_gst_classification_btn").focus(); 
    }
});



$("#new_gst_classification_btn").on("click", function() {
    
    $("input[type='text'], input[type='number']").val("");
    $("#gst_classi_hidden_id").val('0');
    $("#hid_row_id").val('0');
    $("#gst_classification_class_name").focus();


});




     $(".yes_no,.enable").keypress(function (event) {
        if ($("#gst_classification_modal").hasClass("show")) {
            if (event.key === "Enter") {
                
                itype = $(this).prop('type');
                if (itype !== 'submit') {
                    current_gst_classification_tabindex = $(this).attr('tabindex');
                    var company_gst_classification_field_id = $(this).attr('id');
                    var next = parseInt(current_gst_classification_tabindex) + 1;
                    
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
            if (event.key === "Tab") {
            // Prevent the default Tab behavior
             event.preventDefault();

            // Your custom Tab key handling code here
            alert("Tab key pressed!");
        }
        }

    });
//for tab 
    $(document).on("keydown", function(event) {
        if ($("#gst_classification_modal").hasClass("show")) {
            if (event.key === "Tab") {
                // Prevent the default Tab behavior
                // Get the currently focused element
                var focusedElement = $(":focus");

                // Check if the focused element has tabindex and ID attributes
                if (focusedElement.attr('tabindex') && focusedElement.attr('id')) {
                    var current_gst_classification_tabindex = focusedElement.attr('tabindex');
                    var company_gst_classification_field_id = focusedElement.attr('id');
                    var next = parseInt(current_gst_classification_tabindex) + 1;
                    if(company_gst_classification_field_id==='gst_classification_eligible_for_input_tax_credit')
                    {
                        $('#gstmodal_classification').modal('show');
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

$("#cancel_gst_classification_btn").click(function() {


 $("#gst_classification_modal").modal("hide");
    $("#masters_two").modal("show");
});


$("#gst_classification_hsn_sac_details").on("change", function () {
 
    var gst_classification_hsn_sac_details_selected_option = ($("#gst_classification_hsn_sac_details option:selected").text().toLowerCase());

    if (gst_classification_hsn_sac_details_selected_option == 'Specify in Voucher') {
        
            $(".voucher_hide_first_in_gst_classification").hide();
            if ($("#gst_classification_hsn_sac_description").hasClass("enable")) {
                $("#gst_classification_hsn_sac_description").removeClass("enable");
            }
            if ($("#gst_classification_hsn_sac_number").hasClass("enable")) {
                $("#gst_classification_hsn_sac_number").removeClass("enable");
            }
    }
    if (gst_classification_hsn_sac_details_selected_option != 'Specify in Voucher')
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
    if (gst_classification_gst_classification_rate_details_id == 'Specify in Voucher') {
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

    if (gst_classification_gst_classification_rate_details_id != 'Specify in Voucher')
    {
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
});

function customizeDataTable(tableId) {// customized datatable function
   
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


function loadDataTable() {// load data table

var token = "<?php echo $_SESSION['li_token']; ?>";
var table = $('#gst_classification_data_table').DataTable();
var accountsController = "<?php echo CONTROLLER_ACCOUNTS; ?>";
 var url= BASE_URL + "index.php/" + accountsController + "/get_gst_classification_details";

if (table) {
    table.destroy();
}
  


var table = $('#gst_classification_data_table').DataTable({
    "processing": false,
    "serverSide": false,
    "ajax": {
        "url": BASE_URL + "index.php/" + accountsController + "/get_gst_classification_details",
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
        { "data": "gst_classification_name" },
        { "data": "description" },
     
        
        {
            "data": "id",
            "render": function(data, type, full, meta) {
                var id = full.id; 
               
                return '<div class="operations">' +
                
                    '<a href="#" class="btn btn-xs first_a" title="Edit" onclick="editRow(' + id + ');"><i class="fas fa-edit"></i></a>' +
                    '<a href="#" class="btn btn-xs" title="Delete" onclick="deleteRow(' + id + ');"><i class="fas fa-trash"></i></a>' +
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
        // Call the customizeDataTable function after DataTable initialization
        customizeDataTable('gst_classification_data_table');// call the data table function , type id of data table as parameter
    }

});

}


// fr saving gst classification
$('#save_gst_classification_btn').click(function () {
  
            var token = "<?php echo $_SESSION['li_token']; ?>";
           var hidid= $("#gst_classi_hidden_id").val();

           var hid_row_id= $("#hid_row_id").val();
         if ($('#gst_classification_class_name_isValid').val() === "1"){

     
            $.ajax({
                url: BASE_URL + "index.php/" + accountsController + "/save_gst_classification",
                type: 'POST',
                dataType: 'json',
                data: {
                    
                    gst_classi_hidden_id                                    : $("#gst_classi_hidden_id").val(),
                    hid_row_id                                              : $("#hid_row_id").val(),
                    gst_classification_class_name                           : $("#gst_classification_class_name").val(),
                    gst_classification_hsn_sac_details                      : $("#gst_classification_hsn_sac_details").val(),
                    gst_classification_hsn_sac_number                       : $("#gst_classification_hsn_sac_number").val(),
                    gst_classification_hsn_sac_description                  : $("#gst_classification_hsn_sac_description").val(),
                    gst_classification_rate_details_id                      : $("#gst_classification_rate_details_id").val(),
                    gst_classification_taxability_type_id                   : $("#gst_classification_taxability_type_id").val(),
                    gst_classification_nature_of_transaction_id             : $("#gst_classification_nature_of_transaction_id").val(),
                    gst_classification_igst_rate                            : $("#gst_classification_igst_rate").val(),
                    gst_classification_cgst_rate                            : $("#gst_classification_cgst_rate").val(),
                    gst_classification_sgst_utgst_rate                      : $("#gst_classification_sgst_utgst_rate").val(),
                    gst_classification_cess_valuation_type_id               : $("#gst_classification_cess_valuation_type_id").val(),
                    gst_classification_cess_rate                            : $("#gst_classification_cess_rate").val(),
                    gst_classification_applicable_for_reverse_charge        : $("#gst_classification_applicable_for_reverse_charge").val(),
                    gst_classification_eligible_for_input_tax_credit        : $('#gst_classification_eligible_for_input_tax_credit').val(),
                      li_token: token
                },
                success: function (response) 
                {
                    console.log(response);
                    toast_message("success", "Successful", response.message);
                    loadDataTable();
                    $("#new_gst_classification_btn").focus();
                
                },
                error: function (xhr, status, error) {
                    console.log('Error response:', xhr.responseText);
                    console.log('An error occurred:', error);
                    alert('An *********** error occurred while saving GST classification details. Please check the console for more information.');
                }
            });
        }
        else {
        alert_message("failure", "Validation Error", "Please fix validation issues before saving.");
    }
 });

    
 function deleteRow(id) {
    alert('Delete clicked with id: ' + id);
    if (confirm("Are you sure you want to delete this item?")) {
        $.ajax({
            url: BASE_URL + "index.php/" + accountsController + "/delete_gst_classification_by_id",
            type: "POST",
            data: { id: id, li_token: token },
            dataType: "json",
            success: function (response) {
                toast_message("success", "Successful", response.message);
                loadDataTable();
                
           
            },
            error: function (xhr, status, error) {
                alert_message("failure", "Error", "Error deleting item.");
            }
        });
    }
  
}

function editRow(id) {
   
   alert('Edit clicked with id: ' + id);
   $("#hid_row_id").val(id);
   gst_classi_hidden_id=$("#gst_classi_hidden_id").val("1");
 

   $.ajax({
       url: BASE_URL + "index.php/" + accountsController + "/get_gst_classification_by_id",

       type: "POST",
       data: { id: id, li_token: token,gst_classi_hidden_id: $("#gst_classi_hidden_id").val() },
       dataType: "json",
       success: function (data) {
          
           console.log("response is" ,data);
           console.log("gst classification name is ",data.data.gst_classification_name);
         if (data.success == true) {
            $("#gst_classification_class_name").focus();

            $('#gst_classification_taxability_type_id').val(data.data.taxability_type_id);
           $('#gst_classification_nature_of_transaction_id').val(data.data.nature_of_trasaction_id);
           $('#gst_classification_rate_details_id').val(data.data.gst_rate_details_id);
           $('#gst_classification_cess_valuation_type_id').val(data.data.cess_valuation_type_id);
            // Populate the edit modal form fields with data
            $('#gst_classification_class_name').val(data.data.gst_classification_name);
            // $('#gst_classification_hsn_sac_details').val(data.hsn_sac);
            $('#gst_classification_hsn_sac_number').val(data.data.hsn_sac);
            $('#gst_classification_hsn_sac_description').val(data.data.description);
           
            $('#gst_classification_igst_rate').val(data.data.igst_rate);
            $('#gst_classification_cgst_rate').val(data.data.cgst_rate);
            $('#gst_classification_sgst_utgst_rate').val(data.data.sgst_utgst_rate);
        
            $('#gst_classification_cess_rate').val(data.data.cess_rate);
            $('#gst_classification_eligible_for_input_tax_credit').val(data.data.eligible_for_input_tax_credit);
            $('#gst_classification_applicable_for_reverse_charge').val(data.data.applicable_for_reverse_charge);


           } else {
               alert("Failed to fetch stock category details.");
           }
       },
       error: function (xhr, status, error) {
           alert("Error fetching stock category details.");
       }
   });
}

$('#gst_classification_class_name').blur(function() {
    if($(this).val()=="")
    {
        
        alert_message("failure", "Error", " Specify a valid Tds nature of Payment Name.");
        $("#gst_classification_class_name").val('').focus();
        $('#gst_classification_class_name_isValid').val("0");
    }
     else {
           
            var token = "<?php echo $_SESSION['li_token']; ?>";
            var gst_classi_hidden_id = $('#gst_classi_hidden_id').val() === '0' ? 0 : 1; 
            var gst_classification_name = $('#gst_classification_class_name').val();
            var hid_row_id = $('#hid_row_id').val();

               $.ajax({
                    type: 'POST',
                    url: BASE_URL + "index.php/" + accountsController + "/check_gst_classification_name_exist",
                    // url: BASE_URL + "index.php/" + inventoryController + "/check_tcs_nature_of_goods_exist",
                    data: {

                            gst_classi_hidden_id: gst_classi_hidden_id,
                            li_token: token,
                            gst_classification_name: gst_classification_name,
                            hid_row_id: hid_row_id

                    },
                    dataType: 'json',
                   
                    success: function (response) {
                        console.log("Response from server:", response);

                        if (response) {
                          
                            alert_message("failure", "Error", "Name already exists. Please choose a different name for update.");
                            $('#gst_classification_class_name_isValid').val("0");
                            $("#gst_classification_class_name").val('').focus();
                        } 
                        else{
                            $('#gst_classification_class_name_isValid').val("1");
                        }
                        
                    },

                    error: function (xhr, status, error) {
                        console.error('AJAX error:', error);
                    }
                });
            }
    });


//     $('#cost_centre_name').blur(function() {
//     var cost_centre_name = $(this).val();

//     if (cost_centre_name.trim() === "") {
//         alert_message("failure", "Error", "Cost Centre Name should not be empty.");
//         $("#cost_centre_name").val('').focus();
//         $('#cost_centre_name_isValid').val("0");
//     } else {
//         validateCostCenterName();
//     }
// });


 
</script>
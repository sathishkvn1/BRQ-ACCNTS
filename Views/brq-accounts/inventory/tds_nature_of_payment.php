<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TDS Nature of Payment</title>
    <!-- <-?php include("top-css.php"); ?> -->
    <?php include('application/views/brq-accounts/top-css.php');?>
   

    <style>
        .main-header.navbar.navbar-expand.navbar-white.navbar-light
        {
            width: -webkit-fill-available;
        }
      
       
    table.dataTable.display tbody tr.odd>.sorting_1{
        background-color: #def1fc !important;
    }
        /* .focused-row {
            background-color: yellow!important;
        } */
    </style>
    <!-- Include jQuery -->

<!-- Include DataTables CSS and JS -->

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
<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modals" 
        id="tds_nature_payment_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6 class="inventory_modal_headding">TDS Nature of Payment Creation</h6>
                        <i class="fa fa-close close_modal" id="tds_nature_payment_cancel_icon"></i>
                    </div>
                </div>
                <div class="modal-body bg-white">
                    <div class="row gst-full-content-row">
                        <!-- Left Side Start Here -->
                        <div class="col-md-6 left_side_content" style="height:100%">
                            <!-- Left Content -->
                            <div class="row" style="padding-top:8px">
                                <!-- Single features Section Start Here -->
                                <div class="col-md-12" >
                                    <!-- ---single row start here---- -->
                                   
									<div class="row">
                                        <div class="col-md-8">
                                            <label>Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="autofocus enable"
                                                name="nature_of_payment_name" id="nature_of_payment_name"
                                                tabindex="15000">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Section<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" tabindex="15001" name="payment_section"
                                                id="payment_section">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Payment Code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" tabindex="15002" name="payment_code"
                                                id="payment_code">
                                        </div>
                                    </div>
                                     <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Remittance code<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" tabindex="15003" name="remittance_code"
                                                id="remittance_code">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Is transporter category<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="15004"
                                                name="is_transporter"
                                                id="is_transporter">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                            </div>
                                        </div>
                                         <!-- Single Row End Here -->
                               
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Is software royality<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="15005"
                                                name="is_software_loyalty"
                                                id="is_software_loyalty">
                                                <option value="yes" >Yes</option>
                                                <option value="no" selected >No</option>
                                            </select>
                                            </div>
                                        </div>
                                    <!-- Single Row End Here -->
                               
                                    <!-- Single Row Start Here -->
                                    <div class="row" style="align-items: baseline;">
                                        <div class="col-md-8">
                                            <label>Relaxation in rate for Non-Residents(as per Rule 37BC)<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="15006"
                                                name="relaxation_for_non_residents"
                                                id="relaxation_for_non_residents">
                                                <option value="yes">Yes</option>
                                                <option value="no"selected >No</option>
                                            </select>
                                            </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    </div>
                                 <div class="col-md-12" >
                                 <h6>Rate for individuals/HUF</h6>
                                    
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>With PAN <span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" id="rate_for_individual_with_pan" name="rate_for_individual_with_pan" style="width:30px !important;margin-right:3px !important"  class="enable" tabindex="15007">%
                                    </div>
                                 </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Without PAN <span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" id="rate_for_individual_without_pan" name="rate_for_individual_without_pan" style="width:30px !important;margin-right:3px !important" class="enable" tabindex="15008">%
                                    </div>
                                 </div>
                                <!-- Single Row End Here -->
                                </div>
                                 <div class="col-md-12" >
                                   <h6>Rate for other colluctee types</h6>
                                  <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>With PAN <span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" id="rate_for_other_deductee_with_pan" name="rate_for_other_deductee_with_pan" style="width:30px !important;margin-right:3px !important"class="enable" tabindex="15009">%
                                    </div>
                                 </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Without PAN <span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" id="rate_for_other_deductee_without_pan" name="rate_for_other_deductee_without_pan" style="width:30px !important;margin-right:3px !important"  class="enable" tabindex="15010">%
                                    </div>
                                 </div>
                                <!-- Single Row End Here -->

                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Treshold / exemption limit<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable" name="threshold_or_excemption_limit"
                                                id="threshold_or_excemption_limit" tabindex="15011">
                                        </div>
                                    </div>
                                    <input type="hidden" id="flag_id" value="0" >
                                        <input type="hidden" id="row_id" value="0" >
                                <!-- Single Row End Here -->
                           <!-- Single Row End Here -->
                          


                            </div>


                            
                    	</div>

						
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content tabular_formate">
                  <!-- <h6 class="cost_centre_headding">Cost Centre</h6> -->
					<div class="row" >		
                        <table id="tds_nature_of_payment_data_table"  class="table table-striped display">
                        <thead>
								<tr>
									<th  class="enable">Name</th>
									<th  class="enable"> Section</th>
									<th  class="enable"> Code</th>
									<th class="action">Actions</th>
								</tr>
                        </thead>
							<tbody>

                                
							</tbody>
                          
                        </table>
             
					</div>
                    <div class="border_bottom_for_save_cancel">

                    </div>
                    <div class="row save_cancel_section">
                        <div class="col-12" style="display: flex !important;flex-direction: row-reverse !important;">
                            <button id="cancel_inventory_tds_nature__btn"  tabindex="15014" class="cancel_inventory_btn btn" type="button">
                                <span>C</span>ancel
                            </button>
                            <button  class="new_inventory_btn btn" id="new_tds_nature_of_payment_btn" tabindex="15013" type="button">
                                <span>N</span>ew
                            </button>
                            <button id="save_inventory_tds_nature_btn"  tabindex="15012" class="save_inventory_btn btn" type="button" tabindex="12111" >
                                <i class="fas fa-calendar-check"></i><span>S</span>ave
                            </bottom>
                        </div>
				    </div>
				</div>

            </div>
        </div>
    </div>
    <!----------- bottom-js ---------------------->

    <?php include('application/views/brq-accounts/bottom-js.php');?>

	<!------------- bottom-js end --------------->   
   
</body>
</html>

<script>

     $(".yes_no,.enable").keypress(function (event) {
        if ($("#tds_nature_payment_modal").hasClass("show")) {
            if (event.key === "Enter") {
                // event.preventDefault();
                itype = $(this).prop('type');
                if (itype !== 'submit') {
                    current_tds_nature_tabindex = $(this).attr('tabindex');
                    var tds_nature_field_id = $(this).attr('id');
                    var next = parseInt(current_tds_nature_tabindex) + 1;

                    if (tds_nature_field_id === 'threshold_or_excemption_limit') {
                         $(document.activeElement).blur();
                        $("#save_inventory_tds_nature_btn").focus();
                        event.preventDefault();
                    }
                    if (current_tds_nature_tabindex >= 15000 && current_tds_nature_tabindex < 15200) {
                        while (next < 15200) {

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

    $("#new_tds_nature_of_payment_btn,#new_tds_nature_of_payment_btn").on('keydown', function(event) {
    if (event.keyCode === 13) { // Enter key
      if ($(this).is(':focus')) {
        // Click the focused button
        $(this).click();
      }
    }
  });
</script>
<script>
    
    $( document ).ready(function() { 
    $('#tds_nature_payment_modal').modal('show');
    loadDataTable();
    });


    

$("#rate_for_individual_with_pan").blur(function() {
    
    var rate_for_individual_with_pan_value = $(this).val();
    if(rate_for_individual_with_pan_value =="")
    {
        $(this).val("0.0")

    }
    else if (rate_for_individual_with_pan_value <0 || rate_for_individual_with_pan_value > 100) {
     {
         alert_message("failure", "Error", " Rate for individuals with pan should be between 0 to 100.");
         $(this).focus();
         $(this).slect();
     } 
   
}
});
$("#rate_for_individual_without_pan").blur(function() {
    var rate_for_individual_without_pan_value = $(this).val();
    if(rate_for_individual_without_pan_value =="")
    {
        $(this).val("0.0");
    }
    else if (rate_for_individual_without_pan_value < 0 || rate_for_individual_without_pan_value > 100) {
        alert_message("failure", "Error", " Rate for individuals without pan should be between 0 to 100.");
        $(this).focus();
         $(this).select();
    } 
});

$("#rate_for_other_deductee_with_pan").blur(function() {
    var rate_for_individual_without_pan_value = $(this).val();
    if(rate_for_individual_without_pan_value =="")
    {
        $(this).val("0.0");
    }
    else if (rate_for_individual_without_pan_value < 0 || rate_for_individual_without_pan_value > 100) {
        alert_message("failure", "Error", "Rate for  other colluctee with pan should be between 0 to 100.");
        $(this).focus();
         $(this).select();
    } 
});

$("#rate_for_other_deductee_without_pan").blur(function() {
    var rate_for_other_deductee_without_pan_value = $(this).val();
    if(rate_for_other_deductee_without_pan_value =="")
    {
        $(this).val("0.0");
    }
    else if (rate_for_other_deductee_without_pan_value < 0 || rate_for_other_deductee_without_pan_value > 100) {
        alert_message("failure", "Error", "Rate for  other colluctee with pan should be between 0 to 100.");
        $(this).focus();
         $(this).select();
    } 
});

$("#threshold_or_excemption_limit").blur(function() {
    var threshold_or_excemption_limit_value = $(this).val();
    if (threshold_or_excemption_limit_value =='') 
    {
        alert_message("failure", "Error", " The threshold or excemption limit should not be null.");
        $(this).focus();
         $(this).select();
    } 
    else if (threshold_or_excemption_limit_value < 0) 
    {
        alert_message("failure", "Error", " The threshold or excemption limit should not be negative.");
        $(this).focus();
         $(this).select();
    } 
});



    // for click save button
    var BASE_URL = "<?php echo base_url(); ?>";
    var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
    var token = "<?php echo $_SESSION['li_token']; ?>";

    $('#save_inventory_tds_nature_btn').click(function() {
               var formData  = new FormData();
               formData.append('nature_of_payment_name', $("#nature_of_payment_name").val());
               formData.append('payment_section', $("#payment_section").val());
               formData.append('payment_code', $("#payment_code").val());
               formData.append('remittance_code', $("#remittance_code").val());
               formData.append('is_transporter', $("#is_transporter").val());
               formData.append('is_software_loyalty', $("#is_software_loyalty").val());
               formData.append('relaxation_for_non_residents', $("#relaxation_for_non_residents").val());
               formData.append('rate_for_individual_with_pan', $("#rate_for_individual_with_pan").val());
               formData.append('rate_for_individual_without_pan', $("#rate_for_individual_without_pan").val());
               formData.append('rate_for_other_deductee_with_pan', $("#rate_for_other_deductee_with_pan").val());
               formData.append('rate_for_other_deductee_without_pan', $("#rate_for_other_deductee_without_pan").val());
               formData.append('threshold_or_excemption_limit', $("#threshold_or_excemption_limit").val());
               formData.append('flag_id', $("#flag_id").val()); //
               formData.append('row_id', $("#row_id").val()); //
               formData.append('li_token', token); 
       
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/save_tds_nature_of_payment",
        type: 'POST',
        data:  formData,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
           
            console.log("response",response);
            console.log(response.message);
            toast_message("success", "Successful", response.message);
            loadDataTable();
            $("#new_tds_nature_of_payment_btn").focus();
        },
        error: function(xhr, status, error) {
            alert_message("failure", "Error", "Error save item.");
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
 });

</script>
<script>



function loadDataTable() {// load data table
    var BASE_URL = "<?php echo base_url(); ?>";
    var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
    var token = "<?php echo $_SESSION['li_token']; ?>";
    var table = $('#tds_nature_of_payment_data_table').DataTable();
   if (table) {
       table.destroy();
   }

   console.log("Initializing DataTable");
   var table = $('#tds_nature_of_payment_data_table').DataTable({
       "processing": false,
       "serverSide": false,
       "ajax": {
           "url": BASE_URL + "index.php/" + inventoryController + "/load_tds_nature_of_payment",
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
           { "data": "nature_of_payment_name" },
           { "data": "payment_section" },
           { "data": "payment_code" },
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
           customizeDataTable('tds_nature_of_payment_data_table');// call the data table function , type id of data table as parameter
       }

   });


}


// data table key movement start here 

const table = $('#tds_nature_of_payment_data_table').DataTable();
let focusedRowIndex = -1; // Track the index of the currently focused row
let currentPage = table.page(); // Track the current pagination page
//  click event handler to table rows
table.on('click', 'tr.clickable-row', function () {

  $(".focus-tr").removeClass("focus-tr");
  $(".focus-atag").removeClass("focus-atag");
  const clickedRow = $(this);
  clickedRow.addClass("focus-tr");

  const firstAnchor = clickedRow.find('a:visible:first');
  firstAnchor.addClass("focus-atag");
});
table.on('click', 'tr.clickable-row a', function () {
    $(".focus-tr").removeClass("focus-tr");
    $(".focus-atag").removeClass("focus-atag");
    if (target.is('a')) {
    $(".focus-tr").removeClass("focus-tr");
    $(".focus-atag").removeClass("focus-atag");
    return; // Exit the function to prevent further processing
  }
});


//  click event handler to the document to remove focus class when clicking outside of the table
$(document).on('click', function (e) {
  const target = $(e.target);

  // Check if the clicked element is not within the table
  if (!target.closest('table').length) {
    $(".focus-tr").removeClass("focus-tr");
    $(".focus-atag").removeClass("focus-atag");
  }
});


// $(".pagination-button").on("click", function () {
//   // Remove focus classes from previous rows and anchor tags
//   $(".focus-tr").removeClass("focus-tr");
//   $(".focus-atag").removeClass("focus-atag");

//   // Find and focus on the first row of the new pagination
//   const paginationContainer = $(this).closest(".pagination-container");
//   const firstRow = paginationContainer.find("tr.clickable-row:visible:first");
  
//   // Focus on the first row if it exists
//   if (firstRow.length > 0) {
//     firstRow.addClass("focus-tr");
    
//     // Focus on the first anchor tag in the new pagination if it exists
//     const firstAnchor = firstRow.find("a:visible:first");
//     if (firstAnchor.length > 0) {
//       firstAnchor.addClass("focus-atag");
//     }
//   }
// });


$(document).on('keydown', function (e) {
  if (e.keyCode === 37 || e.keyCode === 39) {
    // Check if the pressed key is the left or right arrow
    const focusedRow = $(".focus-tr");

    if (focusedRow.length) {
      const focusAtag = focusedRow.find(".focus-atag");
      const allAtags = focusedRow.find("a:visible");

      if (allAtags.length > 1) {
        if (e.keyCode === 37) { // If left arrow, focus on the first <a> tag
          focusAtag.removeClass("focus-atag");
          allAtags.eq(0).addClass("focus-atag");
        } else if (e.keyCode === 39) { // If right arrow, focus on the second <a> tag
          focusAtag.removeClass("focus-atag");
          allAtags.eq(1).addClass("focus-atag");
        }
      }
    }
  } 
 else if (e.keyCode === 40 || e.keyCode === 38) {
    // Check if the pressed key is the down or up arrow
    const focusedRow = $(".focus-tr");

    if (focusedRow.length)
     {
        let targetRow;
       if (e.keyCode === 40)
        { // If down arrow, find the next visible row
          targetRow = focusedRow.nextAll('tr:visible').first();
          if (!targetRow.length)
           {
            // If no more visible rows, go to the first visible row
            targetRow = focusedRow.siblings('tr:visible').first();
          }
       } 
      else if (e.keyCode === 38) 
      { // If up arrow, find the previous visible row
        targetRow = focusedRow.prevAll('tr:visible').first();
        if (!targetRow.length) {
          // If no previous visible row, go to the last visible row
          targetRow = focusedRow.siblings('tr:visible').last();
        }
      }

      if (targetRow.length) {
        focusedRow.removeClass("focus-tr");
        $(".focus-atag").removeClass("focus-atag");

        targetRow.addClass("focus-tr");
        const firstAnchor = targetRow.find('a:visible:first');
        firstAnchor.addClass("focus-atag");
      }
    }
  }
  else if (e.keyCode === 13) { // Check if the pressed key is the Enter key (key code 13)
    const focusedRow = $(".focus-tr");
    if (focusedRow.length) {
      const focusAtag = focusedRow.find(".focus-atag");
      if (focusAtag.length) {
        // Trigger a click event on the focused anchor tag
        focusAtag.click();
        focusedRow.removeClass("focus-tr");
        $(".focus-atag").removeClass("focus-atag");

      }
    }
  }
});

// customised data table
function customizeDataTable(tableId) {
   
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


</script>
<script>
// edit

function editRow(id) {
     $("#nature_of_payment_name").focus();
   $("#row_id").val(id);
   flag_id=$("#flag_id").val("1");
 

   $.ajax({
       url: BASE_URL + "index.php/" + inventoryController + "/get_tds_nature_of_payment_by_id",
       type: "POST",
       data: { id: id, li_token: token,flag_id: $("#flag_id").val() },
       dataType: "json",
       success: function (response) {
           // console.log(response is ,response);
           if (response.success) {
            console.log("response is" ,response);
               $("#nature_of_payment_name").val(response.data.nature_of_payment_name);
               $("#payment_section").val(response.data.payment_section);
               $("#payment_code").val(response.data.payment_code);
               $("#remittance_code").val(response.data.remittance_code);
               $("#is_transporter").val(response.data.is_transporter);
               $("#is_software_loyalty").val(response.data.is_software_loyalty);
               $("#relaxation_for_non_residents").val(response.data.relaxation_for_non_residents);

               $("#rate_for_individual_with_pan").val(response.data.rate_for_individual_with_pan);
               $("#rate_for_individual_without_pan").val(response.data.rate_for_individual_without_pan);
               $("#rate_for_other_deductee_with_pan").val(response.data.rate_for_other_deductee_with_pan);
               $("#rate_for_other_deductee_without_pan").val(response.data.rate_for_other_deductee_without_pan);
               $("#threshold_or_excemption_limit").val(response.data.threshold_or_excemption_limit);
               $("#tds_nature_of_payment_data_table").modal("show");
               $("#nature_of_payment_name").focus();

           } else {
               alert("Failed to fetch stock category details.");
           }
       },
       error: function (xhr, status, error) {
           alert("Error fetching stock category details.");
       }
   });
}

// delete function
function deleteRow(id) {
    alert('Delete clicked with id: ' + id);
    if (confirm("Are you sure you want to delete this item?")) {
        $.ajax({
            url: BASE_URL + "index.php/" + inventoryController + "/delete_tds_nature_of_payment",
            type: "POST",
            data: { id: id, li_token: token },
            dataType: "json",
            success: function (response) {
                resetFormFields();
                $("#nature_of_payment_name").focus();
                toast_message("success", "Successful", "Item deleted successfully");
                loadDataTable();
                
            },
            error: function (xhr, status, error) {
                
                alert_message("failure", "Error", "Error delete item.");
            }
        });
    }
  
}


// if click new button

// if click new  button

$("#new_tds_nature_of_payment_btn").on("click",()=>{
    resetFormFields();
  $("#nature_of_payment_name").focus();
});


// reset input fields
function resetFormFields()
{
    $("input:text").val('');
    $("#flag_id,#roe_id").val('0');
}


// CANCEL 

// handle cancel function
function handleCancel() {

const urlParams = new URLSearchParams(window.location.search);
const source = urlParams.get('source');


if (source === 'frommastertdsnatureofpayment') {
    $('#tds_nature_payment_modal').modal('hide');
    window.location.href = '<?php echo base_url(); ?>Accounts?openModal=true';
    
} else if (source === 'fromHeaderNav') {
    // window.location.href = '<-?php echo base_url(); ?>';
    window.location.href = '<?php echo base_url(); ?>Accounts';
}
}


$('#cancel_inventory_tds_nature__btn').click(handleCancel);

$(document).keydown(function(e) {
if (e.key === "Escape") {
    handleCancel();
}
});

 $("#cancel_inventory_tds_nature__btn").click(handleCancel);



// if click new  button

$("#new_inventory_unit_creation_btn").on("click",()=>{
resetFormFields();
$("#stock_unit_type_id").focus();
});




$("#nature_of_payment_name").blur(function() {// if null

if($(this).val()=="")
{
    {
     alert_message("failure", "Error", " Specify a valid Tds nature of Payment Name.");
    }
}
else{
        
         var BASE_URL = "<?php echo base_url(); ?>";
          var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
                var token = "<?php echo $_SESSION['li_token']; ?>";
                var flag = $('#flag_id').val() === '0' ? 0 : 1; 
                var tds_nature_payment_name = $('#nature_of_payment_name').val();
                var row_id = $('#row_id').val();

               $.ajax({
                    type: 'POST',
                    url: BASE_URL + "index.php/" + inventoryController + "/check_tds_nature_of_payment_exist",
                    data: {

                            flag: flag,
                            li_token: token,
                            tds_nature_payment_name: tds_nature_payment_name,
                            row_id: row_id

                    },
                    dataType: 'json',
                   
                    success: function (response) {
                        console.log("Response from server:", response);

                        if (response) {
                            console.log("Tds name already exists for update. Handle accordingly.");
                            alert_message("failure", "Error", "TDS Nature of Payment name already exists. Please choose a different name for update.");


                        } 
                        
                    },

                    error: function (xhr, status, error) {
                        console.error('AJAX error:', error);
                    }
                });
}
           

});


</script>
 







            
           







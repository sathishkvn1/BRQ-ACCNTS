<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Unit Creation</title>
    <?php include('application/views/brq-accounts/top-css.php');?>
    <style>
        .main-header.navbar.navbar-expand.navbar-white.navbar-light
        {
            width: -webkit-fill-available;
        }
       
        td{
            text-align: center !important;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: fit-content;
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
<div class="modal fade backdrop modal_common modal_centered_lg inventory_modals gst_details" 
        id="stock_unit_creation" data-value="enable_tds" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>stock unit creation</h6>
                        <i class="fa fa-close" id="stock_unit_creation_cancel_icon"></i>
                    </div>
                </div>
                <div class="modal-body bg-white">
                    <div class="row gst-full-content-row">
                        <!-- Left Side Start Here -->
                        <div class="col-md-6 left_side_content" style="height:100%">
                            <!-- Left Content -->
                            <div class="row" style="padding-top:8px">
                                <!-- Single features Section Start Here -->
                                <div class="col-md-12" style="padding-bottom: 10px;">
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-8">
                                            <label>Unit Type<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable autofocus" tabindex="12400" name="stock_unit_type_id" id="stock_unit_type_id">
                                                <?php foreach ($unit_type as $type): ?>
                                                    <option value="<?php echo $type->id; ?>"><?php echo $type->unit_type; ?></option>
                                                <?php endforeach; ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-8">
                                            <label>Unit Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                      
                                            <input type="text" class=" enable" tabindex="12401" name="stock_unit_type_name"
                                                id="stock_unit_type_name">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- ---single row start here---- -->
									<div class="row">
                                        <div class="col-md-8">
                                        
                                            <label> GST Unit Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                             <select class="enable" tabindex="12402" name="stock_unit_gst_code_id" id="stock_unit_gst_code_id">
                                             <?php foreach ($unit_quantity_code as $uq_code): ?>
                                                 <option value="<?php echo $uq_code->id; ?>"><?php echo $uq_code->quantity_code; ?></option>
                                             <?php endforeach; ?>
                                             </select>
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <div class="stock_unit_inactive_item">
                                        <!-- ---single row start here---- -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label> Convertion Rate<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                            <input type="text" style="width:25% !important" class="enable" tabindex="12403" name="conversion_rate"
                                                    id="conversion_rate">
                                            </div>
                                        </div>
                                        <!-- ---single row start here---- -->
                                        <!-- ---single row start here---- -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label> Base Unit<span class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable" tabindex="12404" name="parent_unit_id" id="parent_unit_id">
                                                       
                                                </select>
                                            </div>
                                        </div>
                                        

                                        <!-- ---single row start here---- -->
                                        <input type="hidden" id="flag_id" value="0" >
                                        <input type="hidden" id="row_id" value="0" >
                                    </div>
                                </div> 
                            </div>
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content tabular_formate" style="height:100%">
					<div class="row">		
						<table class="table table-striped display" id="stock_unit_data_table">
							<thead>
								<tr>
									<th style="width:25%">Unit Type</th>
									<th style="width:25%"> Name</th>
									<th style="width:25%">GST Unit Name</th>
									<th style="width:25%">Operation</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
    					</table>

						

					</div>
                    <div class="border_bottom_for_save_cancel">

                    </div>
                    <div class="row save_cancel_section">
                        <div class="col-12" style="display:flex !important; flex-direction:row-reverse;">
                            <button id="cancel_inventory_unit_creation_btn"  tabindex="12407" class="cancel_inventory_btn btn" type="button">
                                <span>C</span>ancel
                            </button>
                            <button id="new_inventory_unit_creation_btn"  tabindex="12406" class="new_inventory_btn btn" type="button">
                                <span>N</span>ew
                            </button>
                            <button id="save_inventory_unit_creation_btn"  tabindex="12405" class="save_inventory_btn btn" type="button">
                                <i class="fas fa-calendar-check"></i><span>S</span>ave
                            </bottom>
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
    // data table settings
     $( document ).ready(function() {
		$('#stock_unit_creation').modal('show');// modal show
        unitTypeActiveInactive();// call the function when it reload
        loadParentUnit();
        loadDataTable();
       
     });



     function unitTypeActiveInactive()// active inactive of conversion rate and Base Unit based on unit type
        {
            var cost_unit_type_value =$("#stock_unit_type_id").val();
            if(cost_unit_type_value =="1")
            {
                $(".stock_unit_inactive_item .col-md-8 label").css("color", "#888");
                $(".stock_unit_inactive_item .col-md-4 select, .stock_unit_inactive_item .col-md-4 input")
                .prop('disabled', true);
                $(".stock_unit_inactive_item .col-md-4 select.enable, .stock_unit_inactive_item .col-md-4 input.enable").removeClass("enable");
            }
            else 
            {
                $(".stock_unit_inactive_item .col-md-8 label").css("color", "#000");
                $(".stock_unit_inactive_item .col-md-4 select, .stock_unit_inactive_item .col-md-4 input")
                .prop('disabled', false);
                $(".stock_unit_inactive_item .col-md-4 select, .stock_unit_inactive_item .col-md-4 input").addClass("enable");
            }
        }

     $("#stock_unit_type_id").on("change",function(){// unit type onchange
        unitTypeActiveInactive();
        
    });

</script>
<script>

     $(".yes_no,.enable").keypress(function (event) {
        if ($("#stock_unit_creation").hasClass("show")) {
            if (event.key === "Enter") {
                // event.preventDefault();
                itype = $(this).prop('type');
                if (itype !== 'submit') {
                    current_stock_unit_tabindex = $(this).attr('tabindex');
                    var company_stock_unit_field_id = $(this).attr('id');
                    var next = parseInt(current_stock_unit_tabindex) + 1;
                    if (company_stock_unit_field_id === 'stock_unit_gst_code_id' && $('#conversion_rate').prop('disabled')) {
                         $(document.activeElement).blur();
                        $("#save_inventory_unit_creation_btn").focus();
                        event.preventDefault();
                    }
                
                    else if (company_stock_unit_field_id === 'parent_unit_id') {
                         $(document.activeElement).blur();
                        $("#save_inventory_unit_creation_btn").focus();
                        event.preventDefault();
                    }
                    
                   
                      
                 }
                   
                       
                    if (current_stock_unit_tabindex >= 12400 && current_stock_unit_tabindex < 12500) {
                        while (next < 12500) {

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
            else if (event.key === "Tab") {
            // Prevent the default Tab behavior
             event.preventDefault();

            // Your custom Tab key handling code here
            alert("Tab key pressed!");
        }
        

    });

  $("#new_inventory_unit_creation_btn,#cancel_inventory_unit_creation_btn").on('keydown', function(event) {
    if (event.keyCode === 13) { // Enter key
      if ($(this).is(':focus')) {
        // Click the focused button
        $(this).click();
      }
    }
  });
</script>


<script>
   function loadParentUnit() {
            var BASE_URL = "<?php echo base_url(); ?>";
            var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
            var token = "<?php echo $_SESSION['li_token']; ?>";
            var edited_row_id = $("#row_id").val();
            $.ajax({
                type: "POST",
                url: BASE_URL + "index.php/" + inventoryController + "/get_parent_unit",
                data: { edited_row_id:edited_row_id,li_token: token},
                success: function(data) {
                    // Reference to the select element

                    var selectElement = $("#parent_unit_id");

                    // Clear existing options
                    selectElement.empty();

                    // Iterate over the JSON data and add options
                    $.each(data, function(index, optionData) {
                        // Create a new <option> element and append it to the select
                        selectElement.append($('<option>', {
                            value: optionData.id,
                              text: optionData.stock_unit_name // Display quantity_code as text
                        }));
                    });
                },
                error: function(error) {
                    console.error("Error:", error);
                    // Display an error message if the request fails
                    alert("Error loading data: " + error.statusText);
                }
            });
        }
</script>
<script>
    var BASE_URL = "<?php echo base_url(); ?>";
    var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
    var token = "<?php echo $_SESSION['li_token']; ?>";

    $('#save_inventory_unit_creation_btn').click(function() {
        
               var formData  = new FormData();
               formData.append('stock_unit_type_id', $("#stock_unit_type_id").val()); 
               formData.append('stock_unit_type_name', $("#stock_unit_type_name").val());
               formData.append('stock_unit_gst_code_id', $("#stock_unit_gst_code_id").val());
               formData.append('conversion_rate', $("#conversion_rate").val());
               formData.append('parent_unit_id', $("#parent_unit_id").val()); //base id
               formData.append('flag_id', $("#flag_id").val()); //
               formData.append('row_id', $("#row_id").val()); //
               formData.append('li_token', token); 
       
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/save_inventory_unit",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
           
            console.log("response",response);
            console.log(response.message);
            loadDataTable();
            loadParentUnit();
            toast_message("success", "Successful", response.message);
            $("#new_inventory_unit_creation_btn").focus();
           
        },
        error: function(xhr, status, error) {
            alert_message("failure", "Error", "Error save item.");
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
 });



 




 function deleteRow(id) {
    alert('Delete clicked with id: ' + id);
    if (confirm("Are you sure you want to delete this item?")) {
        $.ajax({
            url: BASE_URL + "index.php/" + inventoryController + "/delete_stock_unit_by_id",
            type: "POST",
            data: { id: id, li_token: token },
            dataType: "json",
            success: function (response) {
                resetFormFields();
                $("#new_inventory_unit_creation_btn").focus();
                toast_message("success", "Successful", "Item deleted successfully");
                loadDataTable();
            },
            error: function (xhr, status, error) {
                
                alert_message("failure", "Error", "Error delete item.");
            }
        });
    }
  
}
function editRow(id) {
    alert(id);
     alert('Edit clicked with id: ' + id);
     $("#stock_unit_type_id").focus();
   $("#row_id").val(id);
   flag_id=$("#flag_id").val("1");
 

   $.ajax({
       url: BASE_URL + "index.php/" + inventoryController + "/get_stock_unit_by_id",
       type: "POST",
       data: { id: id, li_token: token,flag_id: $("#flag_id").val() },
       dataType: "json",
       success: function (response) {
           // console.log(response is ,response);
          loadParentUnit();
           if (response.success) {
               $("#stock_unit_type_id").val(response.data.stock_unit_type_id);

               $("#stock_unit_type_name").val(response.data.stock_unit_name);
               $("#stock_unit_gst_code_id").val(response.data.acc_stock_unit_quantity_code_id);
               $("#conversion_rate").val(response.data.conversion_rate);
               $("#parent_unit_id").val(response.data.parent_unit_id);
               
               
               $("#comapny_stock_category_creation_modal").modal("show");
               unitTypeActiveInactive();
            
           } else {
               alert("Failed to fetch stock category details.");
           }
       },
       error: function (xhr, status, error) {
           alert("Error fetching stock category details.");
       }
   });
}


</script>
<script>
    
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

   var table = $('#stock_unit_data_table').DataTable();
  


   if (table) {
       table.destroy();
   }

   console.log("Initializing DataTable");

   var table = $('#stock_unit_data_table').DataTable({
       "processing": false,
       "serverSide": false,
       "ajax": {
           "url": BASE_URL + "index.php/" + inventoryController + "/get_stock_unit",
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
           { "data": "unit_type" },
           { "data": "stock_unit_name" },
           { "data": "quantity_code"},
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
           customizeDataTable('stock_unit_data_table');// call the data table function , type id of data table as parameter
       }

   });


}

// handle cancel function
function handleCancel() {

const urlParams = new URLSearchParams(window.location.search);
const source = urlParams.get('source');
alert(source); 

if (source === 'frominventoryunitcreation') {
    $('#stock_unit_creation').modal('hide');
    window.location.href = '<?php echo base_url(); ?>/Accounts?openModal=true';
    
} else if (source === 'fromHeaderNav') {
    // window.location.href = '<-?php echo base_url(); ?>';
    window.location.href = '<?php echo base_url(); ?>/Accounts';
}
}


$('#cancel_inventory_unit_creation_btn').click(handleCancel);

$(document).keydown(function(e) {
if (e.key === "Escape") {
    handleCancel();
}
});

$('#stock_unit_creation_cancel_icon').click(handleCancel);


// if click new  button

$("#new_inventory_unit_creation_btn").on("click",()=>{
resetFormFields();
$("#stock_unit_type_id").focus();
});



const table = $('#stock_unit_data_table').DataTable();
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
</script>
<script>

// blur in stock_unit_type_name
$("#stock_unit_type_name").blur(function() {// if null

    if($("#stock_unit_type_name").val()=="")
    {
        {
         alert_message("failure", "Error", " Specify a valid conversion rate.");
         $("#stock_unit_type_name").focus();
        }
    }
    else{
            
             var BASE_URL = "<?php echo base_url(); ?>";
              var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
                    var token = "<?php echo $_SESSION['li_token']; ?>";
                    var flag = $('#flag_id').val() === '0' ? 0 : 1; 
                    var unit_name = $('#stock_unit_type_name').val();
                    var row_id = $('#row_id').val();

                   $.ajax({
                        type: 'POST',
                        url: BASE_URL + "index.php/" + inventoryController + "/check_unit_name_exist",
                        data: {

                                flag: flag,
                                li_token: token,
                                unit_name: unit_name,
                                row_id: row_id

                        },
                        dataType: 'json',
                       
                        success: function (response) {
                            console.log("Response from server:", response);

                            if (response) {
                                console.log("Company name already exists for update. Handle accordingly.");
                                alert_message("failure", "Error", "Stock unit  name already exists. Please choose a different name for update.");
                                $("#stock_unit_type_name").focus();
                                $("#stock_unit_type_name").select();
                            } 
                            
                        },

                        error: function (xhr, status, error) {
                            console.error('AJAX error:', error);
                        }
                    });
    }
               

});
// blur in conversion rate field

$("#conversion_rate").blur(function() {
    if (!$(this).prop('disabled')) {
        var conversionRateValue = $(this).val();
        if (conversionRateValue === null || conversionRateValue.trim() === "") {
            // Notify the user about the error
            alert_message("failure", "Error", "Please specify a valid conversion rate.");
            $("#conversion_rate").focus();
            $("#conversion_rate").select();
        }
    }
});



// reset input fields
function resetFormFields()
{
    $("input:text").val('');
    $("#flag_id,#row_id").val('0');
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Godown Creation</title>
    <?php include('application/views/brq-accounts/top-css.php');?>
    <style>
        .main-header.navbar.navbar-expand.navbar-white.navbar-light
        {
            width: -webkit-fill-available;
        }
        .row
        {
            align-items: baseline;
        }
    </style>
</head>
<body>
<div class="wrapper">
    	<!-- Navbar  TOP NAV BAR MESSAGES & SEARCH -->
       <?php include('application/views/brq-accounts/header_nav_bar.php');?>
		<!-- /.navbar  TOP NAVE BAR MESSAGES & SEARCH-->
       


		<!--- For sidebar Right Navigation for Short Cut Key like Tally -->
        <?php include('application/views/brq-accounts/index-sidebar-navigation-right.php');?>
		<!--- End : For sidebar Right Navigation for Short Cut Key like Tally -->
</div>
<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modal" 
        id="godown_creation_modal" data-value="enable_tds" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Godown Creation</h6>
                        <i class="fa fa-close" id="godown_cancel_icon"></i>
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
                                                name="godown_name" id="godown_name"
                                                tabindex="12200">
                                        </div>
                                        <input type="" value="0"
                                           id="godown_name_isValid">
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Alternative Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="godown_alternate_name enable" tabindex="12201" name="godown_alternate_name"
                                                id="godown_alternate_name">
                                               
                                        </div>
                                        <input type="" value="0"
                                           id="godown_alternate_name_isValid">
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                        <div class="row">
                                        <div class="col-md-8">
                                            <label>Under<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="enable" tabindex="12202" name="parent_godown_id" id="parent_godown_id">
                                                    <option value="0" data-value="Primary">Primary</option>
                                            </select>
                                        </div>
                                        </div>
                                    <!-- Single Row End Here -->
                                
                                </div>
                                <div class="col-md-12">
                                    <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8" >
                                                <label>Address<span
                                                    class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" name="godown_address_line_1"
                                                    id="godown_address_line_1" tabindex="12204">
                                            </div>
                                        </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                            <div class="col-md-8">
                                                <label><span
                                                    class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" name="godown_address_line_2"
                                                    id="godown_address_line_2" tabindex="12205">
                                            </div>
                                        </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label><span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="godown_address_line_3"
                                                id="godown_address_line_3" tabindex="12206">
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                            <div class="col-md-8">
                                                <label><span
                                                    class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" class="enable" name="godown_address_line_4"
                                                    id="godown_address_line_4" tabindex="12207">
                                            </div>
                                        </div>
                                    <!-- Single Row End Here -->
                                </div>  
                                <div class="col-md-12" >
                                    <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Allow storage of materials<span
                                                    class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no  enable" tabindex="12208"
                                                    name="allow_storage_of_materials"
                                                    id="allow_storage_of_materials">
                                                    <option value="yes" selected>Yes</option>
                                                    <option value="no" >No</option>
                                                </select>
                                                </div>
                                        </div>
                                    <!-- Single Row End Here -->

                                    <!-- Single Row Start Here -->
                                        <div class="row" id="set_job_costing_section">
                                            <div class="col-md-8">
                                                <label>Set job/project for job costing<span
                                                    class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="enable" tabindex="12209" name="cost_centre_id" id="cost_centre_id">
                                                    <!-- <option value="1" data-value="not_applicable">Not Applicable</option>
                                                    <option value="2" data-value="demo1">demo1</option>
                                                    <option value="3" data-value="demo2">demo2</option> -->
                                                    <?php foreach ($cost_cenrtre_names as $cost_cenrtre_name): ?>
                                                    <option value="<?php echo $cost_cenrtre_name->id; ?>"><?php echo $cost_cenrtre_name->cost_centre_name; ?></option>
                                                     <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    <!-- Single Row End Here -->  
                        	   </div>
                               

                               <div class="col-md-12">
                                <h6 class="h6_underline">Use for</h6>
                                     <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>Our stock with third party<span
                                                    class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no  enable" tabindex="12210"
                                                    name="used_for_stock_with_third_party"
                                                    id="used_for_stock_with_third_party">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                           
                                        </div>
                                       
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label>third party stock with us<span
                                                    class="colon">:</span></label>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="yes_no  enable" tabindex="12211"
                                                    name="used_for_third_party_stock_with_us"
                                                    id="used_for_third_party_stock_with_us">
                                                    <option value="yes">Yes</option>
                                                    <option value="no" selected>No</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" id="flag_id" value="0" >
                                        <input type="hidden" id="hidden_id" value="0" >
                                    <!-- Single Row End Here -->
                                 </div>
                            </div>
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content tabular_formate" >
                <h6 class="cost_centre_headding">Godown Creation</h6>
                
					<div class="row">		
						<table class="table table-striped display" id="godown_creation_data_table">
							<thead>
								<tr>
									<th>Name</th>
									<th>Address</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
                                <tr>
									<td>xyz</td>
									<td>Jappan</td>
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
									<td>abcd</td>
									<td>Korean</td>
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
								
							</tbody>
    					</table>

						

					</div>



                    <div class="border_bottom_for_save_cancel">

                    </div>
                    <div class="row save_cancel_section">
                        <div class="col-12" style="display: flex !important;flex-direction: row-reverse !important;">
                            <button id="cancel_inventory_godown_btn" class="cancel_inventory_btn btn" type="button" tabindex="12214">
                                <span>C</span>ancel
                            </button>
                            <button id="new_inventory_godown_btn" class="new_inventory_btn btn" type="button"  tabindex="12213">
                                <i class="fas fa-calendar-check"></i><span>N</span>ew
                            </bottom>
                            <button id="save_inventory_godown_btn" class="save_inventory_btn btn" type="button"  tabindex="12212">
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

// $( document ).ready(function() { 
       
//        $('#godown_creation_modal').modal('show');
//        populateGodownName();

            
//  });
     // data table settings
     $( document ).ready(function() { 
		$('#godown_creation_modal').modal('show');// modal show
        populateGodownName();
        loadDataTable();
        var opened_modal_id = $('.inventory_modal').attr('id');// take modal id
        tableId=$("#"+ opened_modal_id+" .tabular_formate table").attr("id");// get the data table id
        // var tableId = 'Table_Id';
    function customizeDataTable(tableId) {
        // Replace 'myTable' with the actual ID of your table
        var table = $('#' + tableId).dataTable();
        var filterInput = document.querySelector('#' + tableId + '_filter input');
    
        // Create an icon element (e.g., using Font Awesome)
        var iconElement = document.createElement('i');
        iconElement.className = 'fas fa-search'; // You can change this class to your desired icon class
    
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
                $(this).find('td').removeClass('sorting_1').addClass("first_td");
               
            });
        }
    }
    
    // Usage example:
    customizeDataTable(tableId); // Call the function with your DataTable ID
    
        // Return to the first page if needed
            
    });
   //data table settings end
      
</script>

<script>
      var BASE_URL = "<?php echo base_url(); ?>";
         
         var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
         
         var token = "<?php echo $_SESSION['li_token']; ?>";
    $('#save_inventory_godown_btn').click(function() {
    var stockCategoryNameIsValid = $("#stock_category_name_isValid").val();
        var stockCategoryNameIsValid = $("#stock_category_name_isValid").val();
        var stockCategoryAlternateNameIsValid = $("#stock_category_alternate_name_isValid").val();
      
               var formData  = new FormData();
               formData.append('godown_name', $("#godown_name").val()); 
               formData.append('godown_alternate_name', $("#godown_alternate_name").val());
               formData.append('parent_godown_id', $("#parent_godown_id").val()); 
               formData.append('godown_address_line_1', $("#godown_address_line_1").val()); 
               formData.append('godown_address_line_2', $("#godown_address_line_2").val()); 
               formData.append('godown_address_line_3', $("#godown_address_line_3").val()); 
               formData.append('godown_address_line_4', $("#godown_address_line_4").val()); 
               formData.append('allow_storage_of_materials', $("#allow_storage_of_materials").val());
               formData.append('cost_centre_id', $("#cost_centre_id").val()); 
               formData.append('used_for_stock_with_third_party', $("#used_for_stock_with_third_party").val()); 
               formData.append('used_for_third_party_stock_with_us', $("#used_for_third_party_stock_with_us").val()); 
               formData.append('flag_id', $("#flag_id").val()); 
               formData.append('hidden_id', $("#hidden_id").val()); 
               formData.append('li_token', token); 
       
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/save_godown_creation",
        type: 'POST',
        data:  formData,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
           console.log("response",response);
           toast_message("success", "Successful", response.message);
            loadDataTable();
            populateGodownName();
         $("#new_inventory_godown_btn").focus();
            // Close the modal
            // $('#acc_inventory_master_settings').modal('hide');
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
});


function loadDataTable() {
    var table = $('#godown_creation_data_table').DataTable();
    if (table) {
        table.destroy();
       
    }


    var table = $('#godown_creation_data_table').DataTable({
        "processing": false,
        "serverSide": false,
        "ajax": {
            "url": BASE_URL + "index.php/" + inventoryController + "/get_godown_creation",
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
            { "data": "godown_name" },
            { "data": "godown_address_line_1" },
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
            customizeDataTable('stock_category_data_table');// call the data table function , type id of data table as parameter
        }
    });


}
function editRow(id) {
   alert("hai");
   alert('Edit clicked with id: ' + id);
   $("#hidden_id").val(id);
    flag_id=$("#flag_id").val("1");

   $.ajax({
       url: BASE_URL + "index.php/" + inventoryController + "/get_godown_by_id",
       type: "POST",
       data: { id: id, li_token: token,flag_id: $("#flag_id").val() },
       dataType: "json",
       success: function (response) {
            console.log("response is" ,response);
           if (response.success) {
               $("#godown_name").focus();
               $("#godown_name").val(response.data.godown_name);
               $("#godown_alternate_name").val(response.data.godown_alternate_name);
               $("#parent_godown_id").val(response.data.parent_godown_id);
               $("#godown_address_line_1").val(response.data.godown_address_line_1);
               $("#godown_address_line_2").val(response.data.godown_address_line_2);
               $("#godown_address_line_3").val(response.data.godown_address_line_3);
               $("#godown_address_line_4").val(response.data.godown_address_line_4);
               $("#cost_centre_id").val(response.data.cost_centre_id);
               $("#used_for_stock_with_third_party").val(response.data.used_for_stock_with_third_party);
               $("#used_for_third_party_stock_with_us").val(response.data.used_for_third_party_stock_with_us);
               
               
               
              
           } else {
               alert("Failed to fetch stock category details.");
           }
       },
       error: function (xhr, status, error) {
           alert("Error fetching stock category details.");
       }
   });
 }



function deleteRow(id) {
    alert('Delete clicked with id: ' + id);
    if (confirm("Are you sure you want to delete this item?")) {
        $.ajax({
            url: BASE_URL + "index.php/" + inventoryController + "/delete_godown_by_id",
            type: "POST",
            data: { id: id, li_token: token },
            dataType: "json",
            success: function (response) {
                
                toast_message("success", "Successful", "Item deleted successfully");
                loadDataTable();
                populateGodownName();

            },
            error: function (xhr, status, error) {
                
                alert("Error deleting item");
            }
        });
    }
  
}




function populateGodownName() {
 
 $.ajax({
     url: BASE_URL + "index.php/" + inventoryController + "/get_godown_names",
     type: 'GET',
     dataType: "JSON",
     success: function(response) {
         var select = $("#parent_godown_id");
         select.empty(); 
         select.append($('<option value="0" data-value="Primary">Primary</option>')); // Add the default option
         $.each(response, function(index, category) {
             select.append($('<option></option>').attr('value', category.id).text(category.godown_name));
         });
     },
     error: function(xhr, status, error) {
         console.log(xhr.responseText);
         console.log(status);
         console.log(error);
     }
 });
}

$("#new_inventory_godown_btn").on("click",()=>{
    resetFormFields();
  $("#godown_name").focus();
});
function resetFormFields()
{
    $("input:text").val('');
    $("#flag_id,#hidden_id").val('0');
}


function handleCancel() {

const urlParams = new URLSearchParams(window.location.search);
const source = urlParams.get('source');
// alert(source); 

if (source === 'from_master_godown') {
    $('#godown_creation_modal').modal('hide');
    window.location.href = '<?php echo base_url(); ?>/Accounts?openModal=true';
    
} 
}
$('#cancel_inventory_godown_btn').click(handleCancel);
$('#godown_cancel_icon').click(handleCancel);

$(document).keydown(function(e) {
if (e.key === "Escape") {
    handleCancel();
}
});

$("#godown_name").on('blur', function () {
    var godown_name = $(this).val();
    if (godown_name === '') {
        
        $("#godown_name_isValid").val("0");
        alert_message("failure", "Error", "Name is required and cannot be empty.");
        $("#godown_name").focus();
    } else {
        // Validation passes
        $("#godown_name_isValid").val("1");
        validateGodownName();
    }
});

$("#godown_alternate_name").on('blur', function () {
    var godown_name = $("#godown_name").val();
    var godown_alternate_name = $(this).val();

    if (godown_name === godown_alternate_name) {
        // Validation fails
        $("#godown_alternate_name_isValid").val("0");
        alert_message("failure", "Error", "Name and Alternative Name should not be the same.");
        // $("#godown_alternate_name").focus();
    
    } else {
        // Validation passes
        $("#godown_alternate_name_isValid").val("1");
        validateGodownAlternateName();
    }
});

function validateGodownName() {
 
    var godown_name = $("#godown_name").val();
    var flag_id = $("#flag_id").val(); 
   
    var hidden_id = $("#hidden_id").val(); 
 
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/check_godown_name_exists",
        type: "POST",
        data: {
            godown_name: godown_name,
            li_token: token,
            flag_id: flag_id, 
            hidden_id: hidden_id, 
        },
        dataType: "json",
        success: function(response) {
            console.log(response);
            if (response.exists ) {
               
                alert_message("failure", "Error", "Name already exists.");
                $("#godown_name").val('').focus();
                // validation fails set the value to 0
                $("#godown_name_isValid").val("0");
            }
            else {
                // Validation passes, set to 1
                $("#godown_name_isValid").val("1");
            }
           
        },
        error: function(xhr, status, error) {
            alert("Error checking stock category name.");
        }
    });
}

function validateGodownAlternateName(){
    var godown_alternate_name = $("#godown_alternate_name").val();
    var flag_id = $("#flag_id").val(); 

    var hidden_id = $("#hidden_id").val(); 
    
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/check_godown_alternate_name_exists",
        type: "POST",
        data: {
            godown_alternate_name: godown_alternate_name,
            li_token: token,
            flag_id: flag_id, 
            hidden_id: hidden_id, 
        },
        dataType: "json",
        success: function(response) {
            console.log(response);
            if (response.exists ) {
                // alert("Cost Centre alternate name already exists.");
                alert_message("failure", "Error", "Stock category alternate name already exists.");
               
                $("#godown_alternate_name").val('').focus();
                $("#godown_alternate_name_isValid").val("0");
                
            }
            else {
                // Validation passes, set to 1
                $("#godown_alternate_name_isValid").val("1");
            }
           
        },
        error: function(xhr, status, error) {
            alert("Error checking Cost Centre name.");
        }
    });
 }



</script>



<script>

     $(".yes_no,.enable").keypress(function (event) {
        if ($("#godown_creation_modal").hasClass("show")) {
            if (event.key === "Enter") {
                // event.preventDefault();
                itype = $(this).prop('type');
                if (itype !== 'submit') {
                    current_gst_classification_tabindex = $(this).attr('tabindex');
                    var currentId = $(this).attr('id');
                    var next = parseInt(current_gst_classification_tabindex) + 1;
                    if (currentId === "used_for_third_party_stock_with_us") {
                        
                        $("#save_inventory_godown_btn").focus();
                              event.preventDefault(); 
                        }
                    if (current_gst_classification_tabindex >= 12200 && current_gst_classification_tabindex < 12400) {
                        while (next < 12400) {

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
        if (e.which === 83) {
            $("#save_inventory_godown_btn").click();
        }
        if (e.which === 67) {//c
            $("#cancel_inventory_godown_btn").click();
        }
        if (e.which === 27) {//ecc
            $("#cancel_inventory_godown_btn").click();
        }




        
        }

    });
</script>

<script>
    $("#allow_storage_of_materials").on("change",function(){
        var allow_storage_of_materials_value =$("#allow_storage_of_materials").val();
        if(allow_storage_of_materials_value =="no")
        {
            $("#set_job_costing_section").hide();
            $("#cost_centre_id").removeClass("enable");
        }
        else if (allow_storage_of_materials_value =="yes")
        {
            $("#set_job_costing_section").show();
            $("#cost_centre_id").addClass("enable");

        }
        
    });

    $( document ).ready(function() {
        var allow_storage_of_materials_value =$("#allow_storage_of_materials").val();
        if(allow_storage_of_materials_value =="no")
        {
            $("#set_job_costing_section").hide();
            $("#cost_centre_id").removeClass("enable");
        }
        else if (allow_storage_of_materials_value =="yes")
        {
            $("#set_job_costing_section").show();
            $("#cost_centre_id").addClass("enable");

        }
    });
</script>
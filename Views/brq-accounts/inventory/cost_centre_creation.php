<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost Center Creation</title>
    <!-- <-?php include("top-css.php"); ?> -->
    <?php include('application/views/brq-accounts/top-css.php');?>
    <style>
        .main-header.navbar.navbar-expand.navbar-white.navbar-light
        {
            width: -webkit-fill-available;
        }
      
        tr{
            padding:0px !important;
        }
        td{
            padding:0px !important;
        }
        th{
            padding:0px !important;
        }

        .focused-link {
            background-color: #ffe793!important;
        }
        .focus-atag{
            background-color: #ffe793!important
        }
        .inventory_modals table.dataTable.display tbody tr.odd.focus-tr,
        .inventory_modals table.dataTable.display tbody tr.even.focus-tr{
            background-color: #6090cb !important;
            color:white;
        }
        table#cost_centre_data_table {
    width: -webkit-fill-available !important;
}
table.dataTable.display tbody tr.odd>.sorting_1{
    background-color: #def1fc !important;
}
.save_inventory_btn:focus,
.new_inventory_btn:focus, 
.cancel_inventory_btn:focus
{
    border:2px solid red !important;
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
        id="cost_centre_creation_modal" data-value="enable_tds" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6 class="inventory_modal_headding">Cost Centre Creation</h6>
                        <i class="fa fa-close close_modal" id="stock_cost_center_cancel_icon"></i>
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
                                                name="cost_centre_name" id="cost_centre_name"
                                                tabindex="12100">
                                        </div>
                                        <input type="" 
                                            id="cost_centre_name_isValid"
                                         value ="0"    >
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Alternate Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                         
                                            <input type="text" class="enable" tabindex="12101" name="cost_centre_alternate_name"
                                                id="cost_centre_alternate_name">
                                        </div>
                                        <input type="" 
                                            id="cost_centre_alternate_name_isValid"
                                         value ="0"    >
                                    </div>
                                 <!-- Single Row End Here -->
                                 <!-- Single Row Start Here -->
                                 <div class="row">
                                    <div class="col-md-8">
                                        <label>Under<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <!-- <select class="enable" tabindex="12102" name="cost_centre_is_primary" id="cost_centre_is_primary">
                                            <option value="1" data-value="Primary">Primary</option>
                                            <option value="2" data-value="Category1">Category1</option>
                                            <option value="3" data-value="Category2">Category2</option>
                                        </select> -->
                                        <select class="enable" tabindex="12102" name="cost_centre_is_primary" id="cost_centre_is_primary">
                                                <option value="0" data-value="Primary">Primary</option>
							                                                
                                            </select>
                                    </div>
                                </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                <div class="row" style="align-items: baseline;">
                                    <div class="col-md-8">
                                        <label>Show opening balance for revenue items in reports<span
                                            class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="yes_no  enable" tabindex="12103"
                                            name="show_opening_balance_for_revenue_items_in_reports"
                                            id="show_opening_balance_for_revenue_items_in_reports">
                                            <option value="yes">Yes</option>
                                            <option value="no" selected>No</option>
                                         </select>
                                        </div>
                                    </div>
                                 <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Use for job costing<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="12104"
                                                name="use_for_job_costing"
                                                id="use_for_job_costing">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->

                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Provide bank details<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="12105"
                                                name="cost_centre_bank_detailes"
                                                id="cost_centre_bank_detailes">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->



                            <div class="hide_show_section_depend_provide_bank_details" id="hide_show_section_depend_provide_bank_details">
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Transaction Type<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- <input type="text" class="enable" name="bank_transaction_type_id"
                                                id="bank_transaction_type_id" tabindex="12105"> -->
                                                <select class="enable" tabindex="12106" name="bank_transaction_type_id" id="bank_transaction_type_id">
                                               
												
												
												<?php foreach ($bank_transaction_types as $bank_transaction_type): ?>
                                                            <option value="<?php echo $bank_transaction_type->id; ?>"><?php echo $bank_transaction_type->bank_transaction_type; ?></option>
                                                    <?php endforeach; ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Bank Account Number<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="bank_account_number"
                                                id="bank_account_number" tabindex="12107">
                                        </div>
                                        <input type="" value ="0"
                                                id="bank_account_number_isValid">
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>IFSC Code<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="ifsc_code"
                                                id="ifsc_code" tabindex="12108">
                                        </div>
                                        <input type="" value="0" 
                                                id="ifsc_code_isValid">
                                    </div>
                                <!-- Single Row End Here -->

                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Bank Name<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="bank_name"
                                                id="bank_name" tabindex="12109">
                                        </div>
                                        <input type="" value="0" 
                                                id="bank_name_isValid">
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Branch<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="bank_branch"
                                                id="bank_branch" tabindex="12110">
                                        </div>
                                        <input type="" class="0" 
                                                id="bank_branch_isValid">
                                    </div>
                                <!-- Single Row End Here -->
                             </div>
                                <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>E-mail ID<span
                                                class="colon">:</span></label>
                                        </div>
                                     
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="email_id"
                                                id="email_id" tabindex="12111">
                                        </div>
                                        <input type="" class="0" 
                                                id="email_isValid">

                                        <input type="hidden" id="flag_id" value="0" >
                                        <input type="hidden" id="row_id" value="0" >
                                    </div>
                                <!-- Single Row End Here -->
                           <!-- Single Row End Here -->
                            

                            </div>


                            
                    	</div>

						
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content tabular_formate">
                  <!-- <h6 class="cost_centre_headding">Cost Centre</h6> -->
					<div class="row" >		
                        <table id="cost_centre_data_table" class="display">
                        <thead>
								<tr>
									<th style="padding-left:6px" class="enable">Cost Centre</th>
									<th class="action">Actions</th>
								</tr>
                        </thead>
							<tbody>

                                <!-- <-?php foreach ($sample_data as $row):
                                            $id = $row->id ;
                                            $name = $row->name
                                        ?>
                                    <tr class="clickable-row">

                                          <td><-?php echo $id; ?></td> 
                                          <td><-?php echo $name ?></td> 
                                        <td>
                                           <div class="operations">
                                                <a href="#" class="btn btn-xs  " title="Edit">
                                                    <i class="fas fa-edit" id="cost_center_edit_<-?php echo $id;?>"></i>
                                                </a>
                                                <a href="#" class="btn btn-xs" title="Delete">
                                                    <i class="fas fa-trash" id="cost_center_delete_<-?php echo $id;?>"></i>
                                                </a>
                                            </div>
                                         </td>
                                    </tr>
                             <-?php endforeach; ?> -->
							</tbody>
                          
                        </table>
             
					</div>
                    <div class="border_bottom_for_save_cancel">

                    </div>
                    <div class="row save_cancel_section">
                        <div class="col-12" style="display: flex !important;flex-direction: row-reverse !important;">
                           
                             <button id="cancel_inventory_cost_centre_creation_btn" class="cancel_inventory_btn btn" type="button" tabindex="12114">
                                <span>C</span>ancel
                            </button>

                            <button id="new_inventory_cost_centre_creation_btn" class="new_inventory_btn btn ml-2" type="button" tabindex="12113">
                                <i class="fas fa-calendar-check"></i><span>N</span>ew
                            </button>
                            <button id="save_inventory_cost_centre_creation_btn"  class="save_inventory_btn btn" type="button" tabindex="12112" >
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

var BASE_URL = "<?php echo base_url(); ?>";
var inventoryController = "<?php echo CONTROLLER_INVENTORY; ?>";
var token = "<?php echo $_SESSION['li_token']; ?>";     

function populateCostCentreDropdown() {
   
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/get_cost_centre_names",
        type: 'GET',
        dataType: "JSON",
        success: function(response) {
            var select = $("#cost_centre_is_primary");
            select.empty(); 
            select.append($('<option value="0" data-value="Primary">Primary</option>')); // Add the default option
            $.each(response, function(index, category) {
                select.append($('<option></option>').attr('value', category.id).text(category.cost_centre_name));
            });
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
}

 $( document ).ready(function() { 
    $('#cost_centre_creation_modal').modal('show');
    populateCostCentreDropdown();
});
     
    $('#save_inventory_cost_centre_creation_btn').click(function() {
        
                var formData  = new FormData();
                formData.append('cost_centre_name', $("#cost_centre_name").val()); 
                formData.append('cost_centre_alternate_name', $("#cost_centre_alternate_name").val());
                formData.append('parent_cost_centre_id', $("#cost_centre_is_primary").val()); 
                formData.append('show_opening_balance_for_revenue_items_in_reports', $("#show_opening_balance_for_revenue_items_in_reports").val());
                formData.append('use_for_job_costing', $("#use_for_job_costing").val()); 
                formData.append('bank_transaction_type_id', $("#bank_transaction_type_id").val()); 
                formData.append('bank_account_number', $("#bank_account_number").val()); 
                formData.append('ifsc_code', $("#ifsc_code").val()); 
                formData.append('bank_name', $("#bank_name").val()); 
                formData.append('bank_branch', $("#bank_branch").val()); 
                formData.append('email', $("#email_id").val()); 
                formData.append('flag_id', $("#flag_id").val()); 
                formData.append('row_id', $("#row_id").val()); 

                formData.append('li_token', token); 
        
     $.ajax({
         url: BASE_URL + "index.php/" + inventoryController + "/save_cost_centre",
         type: 'POST',
         data:  formData,
        
         dataType: "JSON",
         processData: false,
         contentType: false,
         success: function(response) {
            
             console.log("response",response);
            //  alert(response.message);
            toast_message("success", "Successful", response.message);
            loadDataTable();
            populateCostCentreDropdown();
            $("#new_inventory_cost_centre_creation_btn").focus();
            

            //  toast_message("success", "Successful", response.message);

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
        


  
$(document).ready(function() {
 loadDataTable();
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
    var table = $('#cost_centre_data_table').DataTable();
    url= BASE_URL + "index.php/" + inventoryController + "/loadCostCentreCreation";

   if (table) {
        table.destroy();
    }

    console.log("Initializing DataTable");

    var table = $('#cost_centre_data_table').DataTable({
        "processing": false,
        "serverSide": false,
        "ajax": {
            "url": BASE_URL + "index.php/" + inventoryController + "/get_cost_centre_details",
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
            { "data": "cost_centre_name" },
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
            customizeDataTable('cost_centre_data_table');// call the data table function , type id of data table as parameter
        }

    });

}

// deletion

function deleteRow(id) {
    alert('Delete clicked with id: ' + id);
    url= BASE_URL + "index.php/" + inventoryController + "/deleteCostCentreCreation";
    // alert(url);
    if (confirm("Are you sure you want to delete this item?")) {
        $.ajax({
            url: BASE_URL + "index.php/" + inventoryController + "/delete_cost_centre_by_id",
            type: "POST",
            data: { id: id, li_token: token },
            dataType: "json",
            success: function (response) {
                
                // alert("Item deleted successfully");
                toast_message("success", "Successful", response.message);
                loadDataTable();
                populateCostCentreDropdown();
                // $('#cost_centre_data_table').DataTable().ajax.reload();
            },
            error: function (xhr, status, error) {
                
                // alert("Error deleting item");
                alert_message("failure", "Error", "Error deleting item.");
            }
        });
    }
  
}

// fr editing
function editRow(id) {
   
   alert('Edit clicked with id: ' + id);
   $("#row_id").val(id);
   flag_id=$("#flag_id").val("1");
 

   $.ajax({
       url: BASE_URL + "index.php/" + inventoryController + "/get_cost_centre_by_id",
       type: "POST",
       data: { id: id, li_token: token,flag_id: $("#flag_id").val() },
       dataType: "json",
       success: function (response) {
           // console.log(response is ,response);
           if (response.success) {
            $("#cost_centre_name").focus();
               $("#cost_centre_name").val(response.data.cost_centre_name);
               $("#cost_centre_alternate_name").val(response.data.cost_centre_alternate_name);
               $("#cost_centre_is_primary").val(response.data.parent_cost_centre_id);
               $("#show_opening_balance_for_revenue_items_in_reports").val(response.data.show_opening_balance_for_revenue_items_in_reports);
               $("#use_for_job_costing").val(response.data.use_for_job_costing);
               $("#bank_transaction_type_id").val(response.data.bank_transaction_type_id);
               $("#bank_account_number").val(response.data.bank_account_number);
               $("#ifsc_code").val(response.data.ifsc_code);
               $("#bank_name").val(response.data.bank_name);
               $("#bank_branch").val(response.data.bank_branch);
               $("#email_id").val(response.data.email);
               $("#comapny_stock_category_creation_modal").modal("show");
           } else {
               alert("Failed to fetch stock category details.");
           }
       },
       error: function (xhr, status, error) {
           alert("Error fetching stock category details.");
       }
   });
}


function resetFormFields() {
    $("#cost_centre_name").val('');
    $("#cost_centre_alternate_name").val('');
    $("#cost_centre_is_primary").val('');
    $("#show_opening_balance_for_revenue_items_in_reports").val('');
    $("#use_for_job_costing").val('');
    $("#bank_transaction_type_id").val('');
    $("#bank_account_number").val('');
    $("#ifsc_code").val('');
    $("#bank_name").val('');
    $("#bank_branch").val('');
    $("#email_id").val('');
    $("#cost_centre_bank_detailes").val('');

  $("#flag_id").val('0');
    $("#row_id").val('0');

}

$('#new_inventory_cost_centre_creation_btn').click(function() {
    resetFormFields();
    // $("input[type='text'], input[type='number']").val("");
    $("#cost_centre_name").focus();

});

// validation function
function validateCostCenterName(){
    var costCentreName = $("#cost_centre_name").val();
    var flag_id = $("#flag_id").val(); 
    // alert(flag_id);
    var row_id = $("#row_id").val(); 
    // alert(hidden_id);
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/checkCostCentreName",
        type: "POST",
        data: {
            cost_centre_name: costCentreName,
            li_token: token,
            flag_id: flag_id, 
            row_id: row_id, 
        },
        dataType: "json",
        
        success: function(response) {
            console.log(response);
            if (response.exists ) {
                 alert_message("failure", "Error", "Cost Centre name already exists.");
                $("#cost_centre_name").val('').focus();
                $('#cost_centre_name_isValid').val("0");
            }
            else {
                $('#cost_centre_name_isValid').val("1"); 
            }
           
        },
        error: function(xhr, status, error) {
            alert("Error checking Cost Centre name.");
            $('#cost_centre_name_isValid').val("0");
        }
    });
}




function validateCostCenterAlternateName(){
    var costCentreAlternateName = $("#cost_centre_alternate_name").val();
   
   var flag_id = $("#flag_id").val(); 
  
   var row_id = $("#row_id").val(); 
   
   $.ajax({
       url: BASE_URL + "index.php/" + inventoryController + "/checkCostCenterAlternateName",
       type: "POST",
       data: {
           cost_centre_alternate_name: costCentreAlternateName,
           li_token: token,
           flag_id: flag_id, 
           row_id: row_id, 
       },
       dataType: "json",
       success: function(response) {
           console.log(response);
           if (response.exists ) {
            //    alert("Stock category alternate name already exists.");
            alert_message("failure", "Error", "Cost Centre alternate name already exists.");
           $("#cost_centre_alternate_name").val('').focus();
           $('#cost_centre_alternate_name_isValid').val("0");
           }
           else {
                $('#cost_centre_alternate_name_isValid').val("1"); 
            }
          
       },
       error: function(xhr, status, error) {
           alert("Error checking stock category name.");
           $('#cost_centre_name_isValid').val("0");
       }
   });
}

///handling the camcel
function handleCancel() {

const urlParams = new URLSearchParams(window.location.search);
const source = urlParams.get('source');
alert(source);

if (source === 'from_master_cost_creation') {
    $('#cost_centre_creation_modal').modal('hide');
    window.location.href = '<?php echo base_url(); ?>/Accounts?openModal=true';
    
}

}

$('#cancel_inventory_cost_centre_creation_btn').click(handleCancel);
$('#stock_cost_center_cancel_icon').click(handleCancel);
$(document).keydown(function (event) {
    if (event.which == 27) { 
        handleCancel();
    }
});


</script>


<script>

     $(".yes_no,.enable").keydown(function (event) {
        if ($("#cost_centre_creation_modal").hasClass("show")) {
            if (event.key === "Enter") {
                // event.preventDefault();
                
                itype = $(this).prop('type');
                currentId = $(this).attr('id');
                // if(currentId =="cost_centre_name")
                // {
                //     validateCostCenterName();
                //     // return false;
                //  }
             
                // if(currentId =="cost_centre_alternate_name")
                // {
                //     var CostCentreValue = $("#cost_centre_name").val();
                
                //     var CostCentreAlternateNameValue = $("#cost_centre_alternate_name").val();
                    
                //     if (CostCentreValue === CostCentreAlternateNameValue) {
                //         // alert("Name and Alternative Name should not be the same.");
                //         alert_message("failure", "Error", "Name and Alternative Name should not be the same.");
                //         e.preventDefault(); 
                //     }
                
                //     validateCostCenterAlternateName();
                   
                    
                    
                // }
               
                if (currentId === "email_id") {
                  
                    $("#save_inventory_cost_centre_creation_btn").focus();
                        e.preventDefault(); 
                    }
                if (itype !== 'submit') {
                    current_cost_centre_creation_tabindex = $(this).attr('tabindex');
                    var cost_centre_creation_field_id = $(this).attr('id');
                    var next = parseInt(current_cost_centre_creation_tabindex) + 1;
                    if (current_cost_centre_creation_tabindex >= 12100 && current_cost_centre_creation_tabindex < 12200) {
                        while (next < 12200) {

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
        //     if (event.key === "Tab") {
        //     // Prevent the default Tab behavior
        //      event.preventDefault();

        //     // Your custom Tab key handling code here
        //     alert("Tab key pressed!");
        // }
         if (e.which === 83) {
            // $("#save_inventory_cost_centre_creation_btn").click();
        }
        if (e.which === 67) {//c
            $("#cancel_inventory_cost_centre_creation_btn").click();
        }
        if (e.which === 27) {//ecc
            $("#cancel_inventory_cost_centre_creation_btn").click();
        }
        }

    });


</script>

<script>
    $("#cost_centre_bank_detailes").on("change",function(){
        var cost_centre_bank_detailes_value =$("#cost_centre_bank_detailes").val();
        if(cost_centre_bank_detailes_value =="yes")
        {
            $(".hide_show_section_depend_provide_bank_details").hide();
            $(".hide_show_section_depend_provide_bank_details .row .col-md-4 input,.hide_show_section_depend_provide_bank_details .row .col-md-4 select").removeClass("enable");
        }
        else if (cost_centre_bank_detailes_value =="no")
        {
            $(".hide_show_section_depend_provide_bank_details").show();
            $(".hide_show_section_depend_provide_bank_details .row .col-md-4 input,.hide_show_section_depend_provide_bank_details .row .col-md-4 select").addClass("enable");

        }
        
    });

    $( document ).ready(function() {
        var cost_centre_bank_detailes_value =$("#cost_centre_bank_detailes").val();
        if(cost_centre_bank_detailes_value =="yes")
        {
            $(".hide_show_section_depend_provide_bank_details").hide();
            $(".hide_show_section_depend_provide_bank_details .row .col-md-4 input,.hide_show_section_depend_provide_bank_details .row .col-md-4 select").removeClass("enable");



        }
        else if (cost_centre_bank_detailes_value =="no")
        {
            $(".hide_show_section_depend_provide_bank_details").show();
            $(".hide_show_section_depend_provide_bank_details .row .col-md-4 input,.hide_show_section_depend_provide_bank_details .row .col-md-4 select").addClass("enable");

        }
    });
</script>




<script>
    

// data table key movement start here
const table = $('#cost_centre_data_table').DataTable();
let focusedRowIndex = -1; // Track the index of the currently focused row
let currentPage = table.page(); // Track the current pagination page
//  click event handler to table rows
table.on('click','tr.clickable-row', function () {

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
const table = $('#cost_centre_data_table').DataTable();
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
      }
    }
  }
});


</script>
<script>
$('#cost_centre_name').blur(function() {
    var cost_centre_name = $(this).val();

    if (cost_centre_name.trim() === "") {
        alert_message("failure", "Error", "Cost Centre Name should not be empty.");
        $("#cost_centre_name").val('').focus();
        $('#cost_centre_name_isValid').val("0");
    } else {
        validateCostCenterName();
    }
});

$('#cost_centre_alternate_name').blur(function() {
    var cost_centre_alternate_name = $(this).val().trim();

    if (cost_centre_alternate_name === "") {
        $('#cost_centre_alternate_name_isValid').val("1");
    } else {
        validateCostCenterAlternateName();
    }
});


$('#bank_account_number').blur(function() {
    var bank_account_number = $(this).val();

    if (bank_account_number.trim() === "") {
        alert_message("failure", "Error", "Bank Account Number should not be empty.");
        
        $("#bank_account_number").val('').focus();
        $('#bank_account_number_isValid').val("0");
    } else {
        $('#bank_account_number_isValid').val("1");
    }
});

$('#ifsc_code').blur(function() {
    var ifsc_code = $(this).val();

    if (ifsc_code.trim() === "") {
        alert_message("failure", "Error", "Bank Account Number should not be empty.");
        
        $("#ifsc_code").val('').focus();
        $('#ifsc_code_isValid').val("0");
    } else {
        $('#ifsc_code_isValid').val("1");
    }
});

$('#bank_name').blur(function() {
    var bank_name = $(this).val();

    if (bank_name.trim() === "") {
        alert_message("failure", "Error", "Bank Account Number should not be empty.");
        
        $("#bank_name").val('').focus();
        $('#bank_name_isValid').val("0");
    } else {
        $('#bank_name_isValid').val("1");
    }
});

$('#bank_branch').blur(function() {
    var bank_branch = $(this).val();

    if (bank_branch.trim() === "") {
        alert_message("failure", "Error", "Bank Account Number should not be empty.");
        
        $("#bank_branch").val('').focus();
        $('#bank_branch_isValid').val("0");
    } else {
        $('#bank_branch_isValid').val("1");
    }
});

$('#email_id').blur(function() {
    var email_id = $(this).val().trim();

    if (email_id === "" || /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email_id)) {
        $('#email_isValid').val("1");
    } else {
        alert_message("failure", "Error", "Invalid E-mail format.");
        $("#email_id").val('').focus();
        $('#email_isValid').val("0");
    }
});






</script>















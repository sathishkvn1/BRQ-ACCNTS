<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('application/views/brq-accounts/top-css.php');?>
    <style>

        .main-header.navbar.navbar-expand.navbar-white.navbar-light
        {
            width: -webkit-fill-available;
        }
      
        tr
        {
            padding:0px !important;
        }
        td
        {
            padding:0px !important;
        }
        th
        {
            padding:0px !important;
        }
        #comapny_stock_category_creation_modal table.dataTable.display tbody tr.odd>.sorting_1
        {
            background-color: #def1fc !important;
        }
        #comapny_stock_category_creation_modal .new_inventory_stock_category_creation_btn 
        {
            background-color: #2a67b1;
            /* margin-left: 20px; */
            color: white;
            padding: 0px 16px;
            border-radius: unset;
        }
        .save_inventory_btn:focus
        {
            border:2px solid red;
        }
        .new_inventory_btn:focus
        {
            border:2px solid red;
        }
        .cancel_inventory_btn:focus
        {
            border:2px solid red !important;
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

<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modals my-modal" 
        id="comapny_stock_category_creation_modal" data-value="enable_tds" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6>Stock Category Creation</h6>
                        <i class="fa fa-close" id="stock_group_creation_cancel_icon"></i>
                    </div>
                </div>
                <div class="modal-body bg-white">
                    <div class="row gst-full-content-row">
                            <div class="col-md-6 left_side_content" style="height:100%">
                                <!-- single row start here -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Name<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" class="autofocus enable"
                                            name="stock_category_name" id="stock_category_name"
                                            tabindex="12000">
                                    </div>
                                    <input type="" value="0"
                                           id="stock_category_name_isValid">
                                </div>
                                <!-- single row start here -->
                                <!-- Single Row Start Here -->
                                <div class="row">
                                        <div class="col-md-4">
                                            <label>Alternative Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" class="enable" tabindex="12001" name="stock_category_alternate_name"
                                                id="stock_category_alternate_name">
                                              
                                        </div>
                                        <input type="" value="0"
                                           id="stock_category_alternate_name_isValid"
                                          > 
                                        <input type="hidden" id="flag_id" value="0" >
                                        <input type="hidden" id="hidden_id" value="0" >
                                </div>
                                    <!-- Single Row End Here -->
                                    <!-- Single Row Start Here -->
							<div class="row">

                            
								<div class="col-md-4">
									<label>Under<span class="colon">:</span></label>
								</div>
								
                                <div class="col-md-8">
                            <select class="enable" tabindex="12002" name="parent_category_id" id="parent_category_id">
                                <option value="0" data-value="Primary">Primary</option>
                               
                            </select>
                        </div>



							</div>

									
                            </div>
                            <div class="col-md-6 right_side_content tabular_formate">
                  <!-- <h6 class="cost_centre_headding">Cost Centre</h6> -->

				  <!-- data table start -->
					<div class="row" >		
                        <table id="stock_category_data_table" class="table table-striped display display">
                        <thead>
								<tr>
									<th>Category</th>
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
                            <button id="cancel_inventory_stock_category_creation_btn" class="cancel_inventory_btn btn" type="button" tabindex="12005">
                                <span>C</span>ancel
                            </button>
                            <button id="new_inventory_stock_category_creation_btn" class="new_inventory_btn btn ml-2" type="button" tabindex="12004">
                                <i class="fas fa-calendar-check"></i><span>N</span>ew
                            </button>
                            <button id="save_inventory_stock_category_creation_btn" class="save_inventory_btn btn" type="button" tabindex="12003">
                                <i class="fas fa-calendar-check"></i><span>S</span>ave
                            </button>
                          
                            
                        </div>
				    </div>
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
    function populateStockCategoryDropdown() {
 
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/get_stock_categories",
        type: 'GET',
        dataType: "JSON",
        success: function(response) {
            var select = $("#parent_category_id");
            select.empty(); 
            select.append($('<option value="0" data-value="Primary">Primary</option>')); // Add the default option
            $.each(response, function(index, category) {
                select.append($('<option></option>').attr('value', category.id).text(category.stock_category_name));
            });
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
}

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


$('#save_inventory_stock_category_creation_btn').click(function() {
    var stockCategoryNameIsValid = $("#stock_category_name_isValid").val();
        var stockCategoryNameIsValid = $("#stock_category_name_isValid").val();
        var stockCategoryAlternateNameIsValid = $("#stock_category_alternate_name_isValid").val();
      
               var formData  = new FormData();
               formData.append('stock_category_name', $("#stock_category_name").val()); 
               formData.append('stock_category_alternate_name', $("#stock_category_alternate_name").val());
               formData.append('parent_category_id', $("#parent_category_id").val()); 
               formData.append('flag_id', $("#flag_id").val()); 
               formData.append('hidden_id', $("#hidden_id").val()); 
               
               formData.append('li_token', token); 
       
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/save_inventory_stock_category",
        type: 'POST',
        data:  formData,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
           console.log("response",response);
           toast_message("success", "Successful", response.message);
           loadDataTable();
           populateStockCategoryDropdown()
           $("#new_inventory_stock_category_creation_btn").focus();
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
 
     $( document ).ready(function() { 
       
		$('#comapny_stock_category_creation_modal').modal('show');
        populateStockCategoryDropdown()

      

              
  });

  

      
      
</script>

<script>

$(document).ready(function() {
 loadDataTable();
});

function loadDataTable() {
    var token = "<?php echo $_SESSION['li_token']; ?>";

    var table = $('#stock_category_data_table').DataTable();
     url= BASE_URL + "index.php/" + inventoryController + "/loadStockCategories";


    if (table) {
        table.destroy();
       
    }

    console.log("Initializing DataTable");

    var table = $('#stock_category_data_table').DataTable({
        "processing": false,
        "serverSide": false,
        "ajax": {
            "url": BASE_URL + "index.php/" + inventoryController + "/get_stock_category",
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
            { "data": "stock_category_name" },
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
   
        alert('Edit clicked with id: ' + id);
        $("#hidden_id").val(id);
        flag_id=$("#flag_id").val("1");
      

        $.ajax({
            url: BASE_URL + "index.php/" + inventoryController + "/get_stock_categories_by_id",
            type: "POST",
            data: { id: id, li_token: token,flag_id: $("#flag_id").val() },
            dataType: "json",
            success: function (response) {
                // console.log(response is ,response);
                if (response.success) {
                    $("#stock_category_name").focus();
                    $("#stock_category_name").val(response.data.stock_category_name);
                    $("#stock_category_alternate_name").val(response.data.stock_category_alternate_name);
                    $("#parent_category_id").val(response.data.parent_category_id);
                    
                    
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


function deleteRow(id) {
    alert('Delete clicked with id: ' + id);
    if (confirm("Are you sure you want to delete this item?")) {
        $.ajax({
            url: BASE_URL + "index.php/" + inventoryController + "/delete_stock_category_by_id",
            type: "POST",
            data: { id: id, li_token: token },
            dataType: "json",
            success: function (response) {
                
                toast_message("success", "Successful", "Item deleted successfully");
                loadDataTable();
                 populateStockCategoryDropdown();

            },
            error: function (xhr, status, error) {
                
                alert("Error deleting item");
            }
        });
    }
  
}


function validateStockCategoryName() {
    var stockCategoryName = $("#stock_category_name").val();
    var flag_id = $("#flag_id").val(); 
    // alert(flag_id);
    var hidden_id = $("#hidden_id").val(); 
    // alert(hidden_id);
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/check_stock_category_name",
        type: "POST",
        data: {
            stock_category_name: stockCategoryName,
            li_token: token,
            flag_id: flag_id, 
            hidden_id: hidden_id, 
        },
        dataType: "json",
        success: function(response) {
            console.log(response);
            if (response.exists ) {
                // alert("Stock category name already exists.");
                alert_message("failure", "Error", "Stock category name already exists.");
                $("#stock_category_name").val('').focus();
                // validation fails set the value to 0
                $("#stock_category_name_isValid").val("0");
            }
            else {
                // Validation passes, set to 1
                $("#stock_category_name_isValid").val("1");
            }
           
        },
        error: function(xhr, status, error) {
            alert("Error checking stock category name.");
        }
    });
}


function validateStockCategoryAlternateName(){
    var stockCategoryAlternateName = $("#stock_category_alternate_name").val();
    var flag_id = $("#flag_id").val(); 

    var hidden_id = $("#hidden_id").val(); 
    
    $.ajax({
        url: BASE_URL + "index.php/" + inventoryController + "/check_stock_category_alternate_name",
        type: "POST",
        data: {
            stock_category_alternate_name: stockCategoryAlternateName,
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
                $("#stock_category_alternate_name").val('').focus();
            }
            else {
                // Validation passes, set to 1
                $("#stock_category_alternate_name_isValid").val("1");
            }
           
        },
        error: function(xhr, status, error) {
            alert("Error checking Cost Centre name.");
        }
    });
 }

</script>


<script>
$('.yes_no,.enable').keydown(function (e) {
    // main if begins here
    if ($("#comapny_stock_category_creation_modal").hasClass("show")) 
        { 
        if (e.which === 13)  //enter key if
            {
               company_stock_category_creation_id = $(this).prop('type');
              
              currentId = $(this).attr('id');

        
            if(currentId =="stock_category_name")
             {
                var stockCategoryNameValue = $("#stock_category_name").val();
               
                if(stockCategoryNameValue === '')
                {
                    alert_message("failure", "Error", "Stock Category Name is required and cannot be empty.");
                    return false;
                }
                validateStockCategoryName();
                
               
             }
      
            if(currentId =="stock_category_alternate_name")
             {
                var stockCategoryNameValue = $("#stock_category_name").val();
               
                var stockCategoryAlternateNameValue = $("#stock_category_alternate_name").val();
                
                if (stockCategoryNameValue === stockCategoryAlternateNameValue ) {
                    // alert("Name and Alternative Name should not be the same.");
                    alert_message("failure", "Error", "Name and Alternative Name should not be the same.");
                    return; 
                }
                // if (stockCategoryAlternateNameValue === '') {
                //     alert_message("failure", "Error", "Stock Category Alternate Name is required and cannot be empty.");
                //     return false;
                // }
              
                validateStockCategoryAlternateName();
                
                
             }
             if (currentId === "parent_category_id") {
             $("#save_inventory_stock_category_creation_btn").focus();
                e.preventDefault(); 
            }
        

             

           if (company_stock_category_creation_id !== 'submit') 
              {
                 currentTabindex = $(this).attr('tabindex');
                 var next = parseInt(currentTabindex) + 1;
                 var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');
                  if (currentTabindex >= 12000 && currentTabindex < 12100) {
                         while (next < 12100) {
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
        } // close of enter key if
		
        if (e.which === 67) {//c
            $("#cancel_inventory_stock_category_creation_btn").click();
        }
        if (e.which === 27) {//ecc

            $("#cancel_inventory_stock_category_creation_btn").click();
        }
    } // main if
      
});

function handleCancel() {

const urlParams = new URLSearchParams(window.location.search);
const source = urlParams.get('source');


if (source === 'from_master_stock_category') {
    $('#comapny_stock_category_creation_modal').modal('hide');
    window.location.href = '<?php echo base_url(); ?>Accounts?openModal=true';
    
}

}

$('#cancel_inventory_stock_category_creation_btn').click(handleCancel);
$('#stock_group_creation_cancel_icon').click(handleCancel);
$(document).keydown(function (event) {
    if (event.which == 27) { 
        handleCancel();
    }
});



function resetFormFields() {
    $("#stock_category_name").val('');
    $("#stock_category_alternate_name").val('');
    $("#flag_id").val('0');
    $("#hidden_id").val('0');

}

$('#new_inventory_stock_category_creation_btn').click(function() {
    resetFormFields();
    $("#stock_category_name").focus();

});


</script>
<script>

$("#stock_category_name").on('blur', function () {
    var stockCategoryName = $(this).val();
    if (stockCategoryName === '') {
        // Validation fails
        $("#stock_category_name_isValid").val("0");
        alert_message("failure", "Error", "Stock Category Name is required and cannot be empty.");
    } else {
        // Validation passes
        $("#stock_category_name_isValid").val("1");
        validateStockCategoryName();
    }
});

$("#stock_category_alternate_name").on('blur', function () {
    var stockCategoryName = $("#stock_category_name").val();
    var stockCategoryAlternateName = $(this).val();

    if (stockCategoryName === stockCategoryAlternateName) {
        // Validation fails
        $("#stock_category_alternate_name_isValid").val("0");
        alert_message("failure", "Error", "Name and Alternative Name should not be the same.");
    
    } else {
        // Validation passes
        $("#stock_category_alternate_name_isValid").val("1");
        validateStockCategoryAlternateName();
    }
});

</script>

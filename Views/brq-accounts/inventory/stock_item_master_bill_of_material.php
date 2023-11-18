
<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modal " 
        id="stock_item_master_bill_of_material" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6 class="inventory_modal_headding">Bill of Material of Product Name</h6>
                        <i class="fa fa-close close_modal" onclick="cancelStockItemBom();" id="stock_cost_center_cancel_icon"></i>
                    </div>
                </div>

                <div class="modal-body bg-white">
                    <div class="row gst-full-content-row">
                        <!-- Left Side Start Here -->
                        <div class="col-md-6 left_side_content">
                            <!-- Left Content -->
                            <div class="row" style="padding-top:8px">
                                <!-- Single features Section Start Here -->
                                <div class="col-md-12 pb-2" >
                                    <!-- ---single row start here---- -->
                            <form method="POST" name="bill_of_material_form" action="#" id="bill_of_material_form" onsubmit="return false;">

									<div class="row">
                                        <div class="col-md-8">
                                                <label>Bill of Material Name<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable"
                                                name="bom_name" id="bom_name"
                                                tabindex="13000">
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Manufacturing Quantity<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class=" enable"  name="manufacturing_quantity"
                                                id="manufacturing_quantity" tabindex="13001">
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                 <!-- Single Row Start Here -->
                                 <div class="row">
                                    <div class="col-md-8">
                                        <label>Manufacturing Unit<span class="colon">:</span></label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="enable" tabindex="13002" name="manufacturing_unit_id" id="manufacturing_unit_id">
                                            <?php foreach ($acc_stock_units_bom as $acc_stock_units_bom): ?>
                                                    <option value="<?php echo $acc_stock_units_bom->id; ?>"><?php echo $acc_stock_units_bom->stock_unit_name; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- Single Row End Here -->

                                   <!-- Single Row Start Here -->
                                   <div class="row mt-3 mb-4">
                                        <div class="col-md-8">
                                            <label>Specify the Component Type<span
                                                class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select class="yes_no  enable" tabindex="13003"
                                                name="component_type_specified"
                                                id="component_type_specified" onchange="handleComponentTypeChange();">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                            

                                
                            <div class="dynamic_content_with_scroll" id="scrollableContainer">

                                <table id="bill_of_material_dynamic_table" class="">
                                    <thead class="">
                             
                                        <tr class="dynamic_table_heading">
                                        <th>Item</th>
                                        <th>Godown</th>
                                        <th>Type</th>
                                        <th>Quantity</th>
                                        <th>Unit</th>
                                        <th>Rate</th>
                                        <th>Actions</th>
                                        </tr>
                                        
                                    </thead>
                                        <tbody id="tableBodyBom">
                                                
                                        </tbody>
                                    </table>
                </form>
                            </div>
                        </div>

                        
                            
                        </div>
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content tabular_formate">
					<div class="row" >		
                        <table id="stock_item_master_bill_of_material_table" class="display">
                            <thead>
								<tr>
									<th style="padding-left:6px">Product name</th>
                                    <th class="action">Bom Name</th>
                                    <th class="action">Qty.Manufacture</th>
									<!-- <th class="action">Actions</th> -->
								</tr>
							</thead>
							<tbody>
                                        <!-- Dynamic content -->
							</tbody>
                          
                        </table>
					</div>
                    <div class="border_bottom_for_save_cancel">

                    </div>
                    <div class="row save_cancel_section">
                        <div class="col-12" style="display: flex !important;flex-direction: row-reverse !important;">
                        
                            <button id="cancel_stock_item_bom" onclick="cancelStockItemBom();" class="cancel_stock_btn btn ml-4" type="button" tabindex="" >
                                <span>C</span>ancel
                            </button>
                            <button id="new_stock_bom_btn" class="new_stock_btn btn ml-4"  type="button" tabindex="" >
                                <span>N</span>ew
                            </button>
                            <button id="save_stock_bom_btn" onclick=billOfMaterialSave();  class=" save_stock_btn btn ml-4" tabindex="" type="button">
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
                                            </div>
  
    <!----------- bottom-js ---------------------->
	<?php include("application/views/brq-accounts/bottom-js.php"); ?>
	<!------------- bottom-js end --------------->   
   
    <script>
    // data table settings
     $(document).ready(function() { 
      
        loadDataTable1();
        logMaxTabIndexBom(6);
        
       
        $('#stock_item_master_bill_of_material').on('shown.bs.modal', function () {
            $("#bom_name").focus();
              
            });

        $('#scrollableContainer').on('scroll', function() {
                var container = $(this);
                if (container[0].scrollHeight > container.outerHeight()) {
                    container.addClass('showBorder');
                } else {
                    container.removeClass('showBorder');
                }
            });


    });
   

</script>


<script>
function loadDataTable1() {
    var token = "<?php echo $_SESSION['li_token']; ?>";

    var table = $('#stock_item_master_bill_of_material_table').DataTable();
    if (table) {
        table.destroy();
    }

    var table = $('#stock_item_master_bill_of_material_table').DataTable({
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": BASE_URL + "index.php/AccountsInventory/get_stock_item_master_bill_of_material_data_table/",
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
            { "data": "bom_name" },
            { "data": "bom_name" },
            { "data": "manufacturing_quantity" }

        ],
        "createdRow": function(row, data, dataIndex)
     {
     },// call the customised data table
     "initComplete": function(settings, json) {
        // Call the customizeDataTableBillOfMaterial function after DataTable initialization
        customizeDataTableBillOfMaterial('stock_item_master_bill_of_material_table');// call the data table function , type id of data table as parameter
   
    }
    });

}
</script>

<script>
function billOfMaterialSave()
{
	
    var token 				= $("#csrf-token").attr('content'); //CSRF token newly added by sandeep
    var BASE_URL = "<?php echo base_url(); ?>";
    var rowID=$("#rowID").val();
    var flag_id=$("#flag_id").val();

	 $.ajax({
	 
	                url	: BASE_URL + "index.php/AccountsInventory/save_stock_item_master_bill_of_material/",
				   type: 'POST',
				   data: $('#bill_of_material_form').serialize() + "&li_token="+ token + "&rowID="+ rowID + "&flag_id="+ flag_id ,
				   dataType:'json', 
				 
                   success: function(response)  
				   {

                       flag_id=($("#flag_id").val());
                       cancelStockItemBom();
                        if(flag_id === "0")
                        {
                            toast_message('success','Saved',response.message);
                            $('#stock_item_master_bill_of_material_table').DataTable().ajax.reload();
                         

                        }
                        else if(flag_id === "1")
                        {
                            toast_message('success','Updated',response.message);
                            $('#stock_item_master_bill_of_material_table').DataTable().ajax.reload();
                          
                        }

						 
				   },
				   
				   
				 error: function (jqXHR, textStatus, errorThrown)
				 {
					$("#divError").html("Oops! Ajax error! unable to connect to the server:" + jqXHR.responseText); 
					alert(jqXHR.responseText);
                    

				 }
	 });
	 
	
		
}


</script>






<script>
    const AllGodownNamebom = <?php echo json_encode($AllGodownName); ?>;
    const acc_stock_units_bom = <?php echo json_encode($acc_stock_units); ?>;
    const acc_stock_bom_component_type_bom = <?php echo json_encode($acc_stock_bom_component_type); ?>;
    const acc_stock_item_master_bom = <?php echo json_encode($acc_stock_item_master); ?>;

    
    
  
let tabIndexCounterBom = 13004; 
let maxTabIndexBom = 13004;   

  function addRowBom(showDropdownItem, showDropdownGodown,showDropdownType,selectedQuantity,showDropdownUnit, selectedRate, dynamicrowID,isLastRowBom) {
    const tableBodyBom = document.getElementById('tableBodyBom');
    const row = document.createElement('tr');

    const handleEnterKeyBom = (event) => {
        if (event.key === 'Enter') {
            event.preventDefault(); 

            const currentTabIndex = event.target.tabIndex;
            const nextTabIndex = currentTabIndex + 1;
            const nextElement = document.querySelector(`[tabIndex="${nextTabIndex}"]`);

            if (nextElement) {
                nextElement.focus();  
            }
        }
    };

    


    
    const cell1 = document.createElement('td');
    if (showDropdownItem) {
      
        const select = document.createElement('select');
      
        select.id = 'item_master_id_bom[]';
        select.name = 'item_master_id_bom[]';
        select.style.width = '100%';
        select.className = 'enable';
        select.value = showDropdownItem || '';
        select.tabIndex = tabIndexCounterBom ;
        
        select.addEventListener('keydown', handleEnterKeyBom);


        if (acc_stock_item_master_bom) {
            acc_stock_item_master_bom.forEach(row => {
                const option = document.createElement('option');
                option.value = row.id;
                option.textContent = row.stock_item_name;
                select.appendChild(option);
            
                if (row.id === showDropdownItem) {
                    option.selected = true;
                }
            });
        }

        cell1.appendChild(select);
    }
    row.appendChild(cell1);


    const cell2 = document.createElement('td');
    if (showDropdownGodown) {
        const select = document.createElement('select');
        select.id = 'godown_id_bom[]';
        select.name = 'godown_id_bom[]';
        select.style.width = '100%';
        select.className = 'enable';
        select.value = showDropdownGodown || '';
        select.tabIndex = tabIndexCounterBom + 1;
        select.addEventListener('keydown', handleEnterKeyBom);


        if (AllGodownNamebom) {
            AllGodownNamebom.forEach(row => {
                const option = document.createElement('option');
                option.value = row.id;
                option.textContent = row.godown_name;
                select.appendChild(option);
                if (row.id === showDropdownGodown) {
                    option.selected = true;
                }
            });
        }

        cell2.appendChild(select);
    }
    row.appendChild(cell2);


    
    const cell3 = document.createElement('td');
    if (showDropdownType) {
        const select = document.createElement('select');
        select.id = 'component_type_id[]';
        select.name = 'component_type_id[]';
        select.style.width = '100%';
        select.className = 'enable';
        select.value = showDropdownType || '';
        select.tabIndex = tabIndexCounterBom + 2;
        select.addEventListener('keydown', handleEnterKeyBom);


        if (acc_stock_bom_component_type_bom) {
            acc_stock_bom_component_type_bom.forEach(row => {
                const option = document.createElement('option');
                option.value = row.id;
                option.textContent = row.component_type;
                select.appendChild(option);
                if (row.id === showDropdownType) {
                    option.selected = true;
                }
            });
        }

        cell3.appendChild(select);
    }
    row.appendChild(cell3);

    const cell4 = document.createElement('td');
    const inputQuantity = document.createElement('input');
    inputQuantity.type = 'number';
    inputQuantity.name = 'component_quantity[]';
    inputQuantity.id = 'component_quantity[]';
    inputQuantity.className = 'enable';
    inputQuantity.tabIndex = tabIndexCounterBom + 3;
    inputQuantity.addEventListener('keydown', handleEnterKeyBom);
    inputQuantity.value = selectedQuantity || '';  // Set default or empty string
    cell4.appendChild(inputQuantity);
    row.appendChild(cell4);


    const cell5 = document.createElement('td');
    if (showDropdownUnit) {
        const select = document.createElement('select');
        select.id = 'component_unit_id[]';
        select.name = 'component_unit_id[]';
        select.style.width = '100%';
        select.className = 'enable';
        select.value = showDropdownUnit || '';
        select.tabIndex = tabIndexCounterBom + 4;
        select.addEventListener('keydown', handleEnterKeyBom);


        if (acc_stock_units_bom) {
            acc_stock_units_bom.forEach(row => {
                const option = document.createElement('option');
                option.value = row.id;
                option.textContent = row.stock_unit_name;
                select.appendChild(option);
                if (row.id === showDropdownUnit) {
                    option.selected = true;
                }
            });
        }

        cell5.appendChild(select);
    }
    row.appendChild(cell5)


   

    const cell6 = document.createElement('td');
    const inputRate = document.createElement('input');
    inputRate.type = 'number';
    inputRate.name = 'rate_percentage[]';
    inputRate.id = 'rate_percentage[]';
    inputRate.className = 'enable';
    inputRate.value = selectedRate || '';
    inputRate.tabIndex = tabIndexCounterBom + 5;
    inputRate.addEventListener('keydown', handleEnterKeyBom);
    cell6.appendChild(inputRate);
    row.appendChild(cell6);


  
        const cell7 = document.createElement('td');
        if (isLastRowBom)
        {
            const button = document.createElement('button');
            button.type = 'button';
            button.className = 'btn add_item_btn_bom fa fa-plus enable';
            button.addEventListener('click', handleClickBom);
            button.addEventListener('keydown', handleClickBom);
            button.addEventListener('keydown', handleEnterKeyBom);
            button.tabIndex = tabIndexCounterBom + 6;
            cell7.appendChild(button);
        }
        row.appendChild(cell7);

        const cell8 = document.createElement('td');
        const hiddenField = document.createElement('input');
        hiddenField.type = 'hidden';
        hiddenField.id = 'bill_row_id[]';
        hiddenField.name = 'bill_row_id[]';
        hiddenField.value = dynamicrowID || ''; 
        hiddenField.style.display = 'none';
        cell8.appendChild(hiddenField);
        row.appendChild(hiddenField);

        tableBodyBom.appendChild(row);
    

    tabIndexCounterBom += 6;
    maxTabIndexBom = Math.max(maxTabIndexBom, tabIndexCounterBom);

   
}

let saveStockButtonBom = document.getElementById("save_stock_bom_btn");
let cancelStockButtonBom = document.getElementById("cancel_stock_item_bom");
let newStockButtonBom = document.getElementById("new_stock_bom_btn");

// function for getting last tabindex number from addRow function
function logMaxTabIndexBom(incrementBy) {
    maxTabIndexBom += incrementBy;

    if (saveStockButton) {
        saveStockButtonBom.tabIndex = maxTabIndexBom + 1;
        newStockButtonBom.tabIndex = maxTabIndexBom + 2;
        cancelStockButtonBom.tabIndex = maxTabIndexBom + 3;
      
       
    }
    
}


function handleClickBom(event) {

    if (event.type === "click" || (event.type === "keydown" && event.key === "Enter")) {

    const clickedButton = event.target;
    const row = clickedButton.closest('tr'); 
    if (!row) {
        console.error('Could not find  row.');
        return;
    }

    const inputs = row.querySelectorAll('input[name^="component_quantity"], input[name^="rate_percentage"]');
    
        let allInputsHaveValue = true;

        inputs.forEach(input => {
            if (!input.value) {
                allInputsHaveValue = false;
                return;
            }
        });

        if (allInputsHaveValue) {

            var $nextTabBom = $(".add_item_btn_bom").next();
                                                             //Removing add button after adding row               
                if ($nextTabBom.length > 0) {
                    $nextTabBom.focus();
                }
                
                
            $(".add_item_btn_bom").hide().removeClass("enable");
            $(".remove_item_btn_bill_of_material").hide().removeClass("enable");

            $("#bill_of_material_dynamic_table").append('<tr>'+
            '<td>'+
                
                    '<select id="item_master_id_bom[]" name="item_master_id_bom[]"  class="enable" >'+
                        '<?php if (isset($acc_stock_item_master)) : foreach ($acc_stock_item_master as $row) : $item_name = $row->stock_item_name;  $item_id=$row->id; ?>'+
                        '<option value="<?php echo $item_id; ?>"><?php echo $item_name; ?></option>'+
                        '<?php endforeach; endif; ?>'+
                    '</select>'+
            '</td>'+
            '<td>'+
            '<select id="godown_id_bom[]" name="godown_id_bom[]"  class="enable" >'+
                        '<?php if (isset($AllGodownName)) : foreach ($AllGodownName as $row) : $godown_name = $row->godown_name;  $godown_id=$row->id; ?>'+
                        '<option value="<?php echo $godown_id; ?>"><?php echo $godown_name; ?></option>'+
                        '<?php endforeach; endif; ?>'+
                    '</select>'+
            '</td>'+
            '<td>'+
            '<select id="component_type_id[]" name="component_type_id[]"  class="enable" >'+
                        '<?php if (isset($acc_stock_bom_component_type)) : foreach ($acc_stock_bom_component_type as $row) : $component_name = $row->component_type;  $component_id=$row->id; ?>'+
                        '<option value="<?php echo $component_id; ?>"><?php echo $component_name; ?></option>'+
                        '<?php endforeach; endif; ?>'+
                    '</select>'+
            '</td>'+
           
            '<td>'+
                    '<input type="number" name="component_quantity[]" id="component_quantity[]"  class="enable"   value="">'+
            '</td>'+
            '<td>'+
            '<select id="component_unit_id[]" name="component_unit_id[]"  class="enable" tabindex="' + (maxTabIndexBom + 4) + '">'+
                        '<?php if (isset($acc_stock_units)) : foreach ($acc_stock_units as $row) : $unit_name = $row->stock_unit_name;  $unit_id=$row->id; ?>'+
                        '<option value="<?php echo $unit_id; ?>"><?php echo $unit_name; ?></option>'+
                        '<?php endforeach; endif; ?>'+
                    '</select>'+
            '</td>'+
            '<td>'+
                    '<input type="number" name="rate_percentage[]" id="rate_percentage[]" class="enable"   value="">'+
                    '<input type="hidden" name="bill_row_id[]" id="bill_row_id[]" class="" value="0">'+

            '</td>'+
            
            '<td >'+
                '<button id="add_item_btn_bill_of_material" onclick="handleClickBom(event);" class="btn add_item_btn_bom fa fa-plus  ml-2 enable" ></button>'+
                '<button id="remove_item_btn_bill_of_material" class="btn fa fa-trash  remove_item_btn_bill_of_material ml-2 enable" ></button>'+
            '</td>'+
        '</tr>');

        const newRowBom = $('#bill_of_material_dynamic_table tr:last-child');
        newRowBom.find('select.enable:first').focus();

        let newTabIndexBom = maxTabIndexBom + 1;
        const inputsInNewRowBom = document.querySelectorAll('#bill_of_material_dynamic_table tr:last-child input.enable, #bill_of_material_dynamic_table tr:last-child select.enable,#bill_of_material_dynamic_table tr:last-child button.enable');
        inputsInNewRowBom.forEach(input => {
            input.tabIndex = newTabIndexBom;
            newTabIndexBom++;
        });

        const numInputFieldsPerRowBom = 7;  
        logMaxTabIndexBom(numInputFieldsPerRowBom)

       //Enter key movement starts here
       $(".yes_no,.enable").keypress(function (event) {
            if ($("#stock_item_master_bill_of_material").hasClass("show")) {
                if (event.key === "Enter") {
                
                    itype = $(this).prop('type');


                    currentId = $(this).attr('id');
                    if(currentId == 'market_valuation_method_id' ){
                        $('#save_stock_btn').focus();
                        event.preventDefault();
                    }
                    
                    if (itype !== 'submit') {
                        current_gst_classification_tabindex = $(this).attr('tabindex');
                        var company_gst_classification_field_id = $(this).attr('id');
                        var next = parseInt(current_gst_classification_tabindex) + 1;
                        if(company_gst_classification_field_id==='gst_classification_eligible_for_input_tax_credit')
                        {
                            $('#gstmodal_classification').modal('show');
                        }

                        if (current_gst_classification_tabindex >= 13000 && current_gst_classification_tabindex < 13200) {
                            while (next < 13200) {

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
            // enter key movement ends here

            toast_message("success","Added ","new row added")
        } else {
            alert_message('warning','Required','please enter required field');
           
        }
    }
  
}


</script>
<script>

     $(".yes_no,.enable").keypress(function (event) {
        if ($("#stock_item_master_bill_of_material").hasClass("show")) {
            if (event.key === "Enter") {
                // event.preventDefault();
                itype = $(this).prop('type');


                currentId = $(this).attr('id');
                if(currentId == 'market_valuation_method_id' ){
                    $('#save_stock_btn').focus();
                    event.preventDefault();
                }
                
                if (itype !== 'submit') {
                    current_gst_classification_tabindex = $(this).attr('tabindex');
                    var company_gst_classification_field_id = $(this).attr('id');
                    var next = parseInt(current_gst_classification_tabindex) + 1;
                    if(company_gst_classification_field_id==='gst_classification_eligible_for_input_tax_credit')
                    {
                        $('#gstmodal_classification').modal('show');
                    }

                    if (current_gst_classification_tabindex >= 13000 && current_gst_classification_tabindex < 13200) {
                        while (next < 13200) {

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
</script>
<script>
    $(document).on('click', '.remove_item_btn_bill_of_material ', function() {

    var closestRowBom = $(this).closest('tr');
    closestRowBom.remove();

    const lastRowBom = $('#bill_of_material_dynamic_table tr:last');
    const lastCellBom = lastRowBom.find('td:last');
    lastCellBom.addClass('enable');
    lastCellBom.show();
    lastCellBom.find('.add_item_btn_bom').show().addClass('enable');
    lastCellBom.find('.remove_item_btn_bill_of_material').show().addClass('enable'); //while deleting add button to last td
    const lastButtonBom = lastRowBom.find('button.add_item_btn_bom:last');
    lastButtonBom.focus();
  
    toast_message("failure","","Deleted a row")

    
    });
</script>


<script>
function cancelStockItemBom()
{

    $('#stock_item_master_bill_of_material').modal('hide');
    $("#set_component_bill_of_material").focus();

   
}

function handleEscapeKeyBom(event) {
    if (event.key === "Escape") {
        cancelStockItemBom();
        
    }
}
$('#stock_item_master_bill_of_material').on('keydown', handleEscapeKeyBom);

</script>
<script>
function customizeDataTableBillOfMaterial(tableId) {// customized datatable function
   
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
  function handleComponentTypeChange() {
    var componentTypeValue = document.getElementById("component_type_specified").value;
    var secondSelect = document.getElementById("component_type_id[]");

    if (componentTypeValue === "yes") {
      for (var i = 0; i < secondSelect.options.length; i++) {
        secondSelect.options[i].style.display = ""; // Show all options
      }
      secondSelect.selectedIndex = 0;
    } else {
      for (var i = 1; i < secondSelect.options.length; i++) {
        secondSelect.options[i].style.display = "none";
      }
      secondSelect.selectedIndex = 0;
    }
  }
</script>
              


<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modal open_modal" 
        id="stock_item_master_set_opening_balance" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6 class="inventory_modal_headding">Set Opening Balance</h6>
                        <i class="fa fa-close close_modal" onclick="cancelSetOpeningBalance();" id="stock_cost_center_cancel_icon"></i>
                    </div>
                </div>
                <div class="modal-body bg-white">
                    <div class="row gst-full-content-row">
                        <!-- Left Side Start Here -->
                        <div class="col-md-12 " >
                        
                            <!-- Left Content -->
                            <div class="row" style="padding-top:8px">
                                <!-- Single features Section Start Here -->
                                <div class="col-md-12 pb-2" >
                                    <!-- ---single row start here---- -->
									<div class="row mb-4 col-md-10">
                                        <div class="col-md-4">
                                            <label>ITEM NAME<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                           
                                               <h6 name="item_name" id="item_name"></h6> 
                                              
                                        </div>
                                    </div>
                                <div class="dynamic_content_with_scroll" id="scrollable_container_for_opening_balance">
                                <form method="POST" name="opening_balance_form" action="#" id="opening_balance_form" onsubmit="return false;">

                                    <table id="set_item_master_set_opening_balance_table" class="mt-1">
                                        <thead class="">
                                            <tr class="dynamic_table_heading">
                                                    <th>Godown</th>
                                                    <th>Batch</th>
                                                    <th>Mfg.Dt</th>
                                                    <th>Expiry.Dt</th>
                                                    <th>Quantity</th>
                                                    <th>Rate</th>
                                                    <th>Per</th>
                                                    <th>Amount</th>
                                                    <th>Actions</th>
                                                </tr>
                                        </thead>
                                        <tbody id="tableBody"></tbody>
                                    
                                    </table>
                                
                               
                            </div>
                            <div class="row total mt-5 float-right col-md-6 " >
                                            <div class="col-md-6 d-flex justify-content-center">
                                                <h6 id="total_quantity"> </h6>
                                                <h6><span class="ml-2" id="unit_name"><span></h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 id="total_ammount"></h6>
                                            </div>
                            </div>
                        </div>
                   
                    </div>
                    <div class="border_bottom_for_save_cancel">

                    </div>  

   <div class="row save_cancel_section">
       <div class="col-12" style="display: flex !important;flex-direction: row-reverse !important;">
       
           <button id="cancel_stock_item_ob" onclick="cancelSetOpeningBalance();" class="cancel_stock_btn btn ml-4" type="button"  >
               <span>C</span>ancel
           </button>
           <button id="new_stock_ob" class="new_stock_btn btn ml-4"  type="button" tabindex="" >
               <span>N</span>ew
           </button>
           <button id="save_stock_ob" onclick="openingBalanceSave()"; class=" save_stock_btn btn ml-4" tabindex="" type="button">
               <i class="fas fa-calendar-check"></i><span>S</span>ave
           </bottom>
       </div>
   </div>
   </form>
</div>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>
        
  

    <script>
    // data table settings
     $(document).ready(function() { 
     
       
        logMaxTabIndex(6);
    

        $('#stock_item_master_set_opening_balance').on('shown.bs.modal', function () {
            $('[tabindex="14200"]').focus();
            calculateTotalQuantity();
            updateTotalQuantity();
            calculateTotalAmmount();
            updateTotalAmmount();   
             
            });

        $('#scrollable_container_for_opening_balance').on('scroll', function() {
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


function openingBalanceSave()
{
	

    var token 				= $("#csrf-token").attr('content'); //CSRF token newly added by sandeep
    var BASE_URL = "<?php echo base_url(); ?>";
    var rowID=$("#rowID").val();
    var flag_id=$("#flag_id").val();

	 $.ajax({
	 
	                url	: BASE_URL + "index.php/AccountsInventory/save_stock_item_master_set_opening_balance/",
				   type: 'POST',
				   data: $('#opening_balance_form').serialize() + "&li_token="+ token + "&rowID="+ rowID + "&flag_id="+ flag_id ,
				   dataType:'json', 
				 
				   success: function(response)  
				   {

                       flag_id=($("#flag_id").val());

                        if(flag_id === "0")
                        {
                            toast_message('success','Saved',response.message);
                        }
                        else if(flag_id === "1")
                        {
                            toast_message('success','Updated',response.message);
                        }

						cancelSetOpeningBalance(); 
				   },
				   
				 error: function (jqXHR, textStatus, errorThrown)
				 {
					$("#divError").html("Oops! Ajax error! unable to connect to the server:" + jqXHR.responseText); 
					alert(jqXHR.responseText);
                    alert_message("failure","Error","");

				 }
	 });
	 
	
		
}
</script>

<script>
const AllGodownName = <?php echo json_encode($AllGodownName) ?>;
 

let tabIndexCounter = 14200;      // primary tabindex number
let maxTabIndex = 14200;         // getting last tabindex number for additional row




function addRow(showDropdown, selectedBatch, selectedManDate, selectedExpDate, selectedQuantity, selectedRate, dynamicrowID, selectedAmount,isLastRow) {
    const tableBody = document.getElementById('tableBody');
    const row = document.createElement('tr');

    
   
    const calculateAmount = () => {
        const rate = inputRate.value ? parseFloat(inputRate.value) : 0;
        const quantity = inputQuantity.value ? parseInt(inputQuantity.value) : 0;
        const calculatedAmount = rate * quantity;
        inputAmount.value = calculatedAmount || '';  
    };

    
    calculateTotalQuantity();
    updateTotalQuantity();
    calculateTotalAmmount();
    updateTotalAmmount();

    // Enter key movement js code starts here
    const handleEnterKey = (event) => {
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
    // Enter key movement js code ends here

    
    const cell1 = document.createElement('td');
    if (showDropdown) {
        const select = document.createElement('select');
        select.id = 'godown_id[]';
        select.name = 'godown_id[]';
        select.style.width = '100%';
        select.value = showDropdown || '';
        select.className = 'enable';
        select.tabIndex = tabIndexCounter;
        select.addEventListener('keydown', handleEnterKey);

        if (AllGodownName) {
            AllGodownName.forEach(row => {
                const option = document.createElement('option');
                option.value = row.id;
                option.textContent = row.godown_name;
                select.appendChild(option);

                // Check if the option value matches the showDropdown value
                if (row.id === showDropdown) {
                    option.selected = true;
                }
            });
        }
       

        cell1.appendChild(select);
    }
    row.appendChild(cell1);

    const cell2 = document.createElement('td');
    const inputBatch = document.createElement('input');
    inputBatch.type = 'number';
    inputBatch.name = 'batch_number[]';
    inputBatch.id = 'batch_number[]';
    inputBatch.className = 'enable';
    inputBatch.tabIndex = tabIndexCounter + 1;
    inputBatch.addEventListener('keydown', handleEnterKey);
    inputBatch.value = selectedBatch || '';  // Set default or empty string
    cell2.appendChild(inputBatch);
    row.appendChild(cell2);

    const cell3 = document.createElement('td');
    const inputManDate = document.createElement('input');
    inputManDate.type = 'date';
    inputManDate.name = 'manufacture_date[]';
    inputManDate.id = 'manufacture_date[]';
    inputManDate.className = 'enable';
    inputManDate.tabIndex = tabIndexCounter + 2;
    inputManDate.addEventListener('keydown', handleEnterKey);
    inputManDate.value = selectedManDate || '';  // Set default or empty string
    cell3.appendChild(inputManDate);
    row.appendChild(cell3);

    const cell4 = document.createElement('td');
    const inputExpDate = document.createElement('input');
    inputExpDate.type = 'date';
    inputExpDate.name = 'expiry_date[]';
    inputExpDate.id = 'expiry_date[]';
    inputExpDate.className = 'enable';
    inputExpDate.tabIndex = tabIndexCounter + 3;
    inputExpDate.addEventListener('keydown', handleEnterKey);
    inputExpDate.value = selectedExpDate || '';  // Set default or empty string
    cell4.appendChild(inputExpDate);
    row.appendChild(cell4);

    const cell5 = document.createElement('td');
    const inputQuantity = document.createElement('input');
    inputQuantity.type = 'number';
    inputQuantity.name = 'quantity[]';
    inputQuantity.id = 'quantity[]';
    inputQuantity.className = 'enable';
    inputQuantity.addEventListener('input', calculateAmount);
    inputQuantity.tabIndex = tabIndexCounter + 4;
    inputQuantity.addEventListener('keydown', handleEnterKey);
    inputQuantity.value = selectedQuantity || '';  // Set default or empty string
    cell5.appendChild(inputQuantity);
    row.appendChild(cell5);

    const cell6 = document.createElement('td');
    const inputRate = document.createElement('input');
    inputRate.type = 'number';
    inputRate.name = 'rate[]';
    inputRate.id = 'rate[]';
    inputRate.className = 'enable';
    inputRate.addEventListener('input', calculateAmount);
    inputRate.tabIndex = tabIndexCounter + 5;
    inputRate.addEventListener('keydown', handleEnterKey);
    inputRate.value = selectedRate || '';  
    cell6.appendChild(inputRate);
    row.appendChild(cell6);

    const cell7 = document.createElement('td');
    const inputPer = document.createElement('input');
    inputPer.type = 'text';
    inputPer.name = 'per[]';
    inputPer.id = 'per';
    inputPer.className = 'per';
    inputPer.readOnly = true;
    cell7.appendChild(inputPer);
    row.appendChild(cell7);

    const cell8 = document.createElement('td');
    const inputAmount = document.createElement('input');
    inputAmount.type = 'number';
    inputAmount.name = 'ammount[]';
    inputAmount.id = 'ammount[]';
    inputAmount.className = '';
    inputAmount.readOnly = true;
    inputAmount.value = selectedAmount || (selectedRate * selectedQuantity) || ''; 
    cell8.appendChild(inputAmount);
    row.appendChild(cell8);

     // Only show the button in the last row
    const cell9 = document.createElement('td');
        if (isLastRow) 
        {
            const button = document.createElement('button');
            button.type = 'button';
            button.className = 'btn add_item_btn fa fa-plus enable';
            button.addEventListener('click', handleClick);
            button.addEventListener('keydown', handleClick);
            button.addEventListener('keydown', handleEnterKey);
            button.tabIndex = tabIndexCounter + 6;
            cell9.appendChild(button);
        }
    row.appendChild(cell9);
   

    const cell10 = document.createElement('td');
    const hiddenField = document.createElement('input');
    hiddenField.type = 'hidden';
    hiddenField.id = 'opening_row_id[]';
    hiddenField.name = 'opening_row_id[]';
    hiddenField.value = dynamicrowID || ''; 
    hiddenField.style.display = 'none';
    cell10.appendChild(hiddenField);
    row.appendChild(hiddenField);
  
    tableBody.appendChild(row);

    
    tabIndexCounter += 6;
    maxTabIndex = Math.max(maxTabIndex, tabIndexCounter);
    


}


let saveStockButton = document.getElementById("save_stock_ob");
let cancelStockButton = document.getElementById("cancel_stock_item_ob");
let newStockButton = document.getElementById("new_stock_ob");

// function for getting last tabindex number from addRow function
function logMaxTabIndex(incrementBy) {
    maxTabIndex += incrementBy;

  
    if (saveStockButton) {
        saveStockButton.tabIndex = maxTabIndex + 1;
        newStockButton.tabIndex = maxTabIndex + 2;
        cancelStockButton.tabIndex = maxTabIndex + 3;
       
    }
    
}



//function for add new rows
function handleClick(event) {

    

    if (event.type === "click" || (event.type === "keydown" && event.key === "Enter")) {
    var selectedUnit = $('#stock_item_unit_id option:selected').text();

    
    const clickedButton = event.target;
    const row = clickedButton.closest('tr'); 
    if (!row) {
        console.error('Could not find  row.');
        return;
    }





    const inputs = row.querySelectorAll('input[name^="batch_number"], input[name^="manufacture_date"], input[name^="expiry_date"], input[name^="quantity"], input[name^="rate"]');
    
        let allInputsHaveValue = true;

        inputs.forEach(input => {
            if (!input.value) {
                allInputsHaveValue = false;
                return;
            }
        });

        if (allInputsHaveValue) {


            var $nextTab = $(".add_item_btn").next();
                                                             //Removing add button after adding row               
                if ($nextTab.length > 0) {
                    $nextTab.focus();
                }
                
                
            $(".add_item_btn").hide().removeClass("enable");
            $(".remove_item_btn_opening_balance").hide().removeClass("enable");
            
          


            $("#set_item_master_set_opening_balance_table").append('<tr>'+
            '<td>'+
                
                    '<select id="godown_id[]" name="godown_id[]"  class="enable" tabindex="' + (maxTabIndex + 2) + '">'+
                        '<?php if (isset($AllGodownName)) : foreach ($AllGodownName as $row) : $godown_name = $row->godown_name;  $godown_id=$row->id; ?>'+
                        '<option value="<?php echo $godown_id; ?>"><?php echo $godown_name; ?></option>'+
                        '<?php endforeach; endif; ?>'+
                    '</select>'+
            '</td>'+
            '<td>'+
                    '<input type="number" name="batch_number[]" id="batch_number[]" class="enable"   value="">'+
            '</td>'+
            '<td>'+
                    '<input type="date" name="manufacture_date[]" id="manufacture_date[]"  class="enable"  value="">'+
            '</td>'+
            '<td>'+
                    '<input type="date" name="expiry_date[]" id="expiry_date[]"  class="enable"   value="">'+
            '</td>'+
            '<td>'+
                    '<input type="number" name="quantity[]" id="quantity[]" oninput="calculateAmount()"  class="enable"   value="">'+
            '</td>'+
            '<td>'+
                    '<input type="number" name="rate[]" id="rate[]" class="enable"   oninput="calculateAmount()"  value="">'+
            '</td>'+
            '<td>'+
                    '<input type="text" name="per_name" id="per_name" class="per" value="' + selectedUnit + '"  >'+
                    '<input type="hidden" name="opening_row_id[]" id="opening_row_id[]" class="" value="0">'+
            '</td>'+
            '<td>'+
                    '<input type="number" name="ammount[]" id="ammount[]"    value="" readonly>'+
            '</td>'+
        
            '<td >'+
                    '<button id="add_item_btn_opening_balance" onclick="handleClick(event);" class="btn add_item_btn fa fa-plus  ml-2 enable" ></button>'+
                    '<button id="remove_item_btn_opening_balance" class="btn fa fa-trash    remove_item_btn_opening_balance ml-2 enable" ></button>'+
            '</td>'+
        '</tr>');

        const newRow = $('#set_item_master_set_opening_balance_table tr:last-child');
        newRow.find('select.enable:first').focus();

        let newTabIndex = maxTabIndex + 1;
        const inputsInNewRow = document.querySelectorAll('#set_item_master_set_opening_balance_table tr:last-child  input.enable, #set_item_master_set_opening_balance_table tr:last-child  select.enable, #set_item_master_set_opening_balance_table tr:last-child button.enable');
        inputsInNewRow.forEach(input => {
            input.tabIndex = newTabIndex;
            newTabIndex++;
        });


        const numInputFieldsPerRow = 7;  
        logMaxTabIndex(numInputFieldsPerRow)

        //Enter key movement starts here
            $(".yes_no,.enable").keypress(function (event) {
            if ($("#stock_item_master_set_opening_balance").hasClass("show")) {
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

                        if (current_gst_classification_tabindex >= 14200 && current_gst_classification_tabindex < 14400) {
                            while (next < 14400) {

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

function calculateAmount() {
    
    var rows = document.querySelectorAll('#set_item_master_set_opening_balance_table tbody tr');

    rows.forEach(function(row, index) {
        var quantityInput = row.querySelector('input[name="quantity[]"]');
        var rateInput = row.querySelector('input[name="rate[]"]');
        var amountInput = row.querySelector('input[name="ammount[]"]');

        var quantity = parseFloat(quantityInput.value) || 0;
        var rate = parseFloat(rateInput.value) || 0;

        if (isNaN(quantity) || isNaN(rate)) {
            amountInput.value = '';
        } else {
            var amount = quantity * rate;
            amountInput.value = amount.toFixed(2);
        }
    });
}

function calculateTotalQuantity() {
    const quantityInputs = document.querySelectorAll('input[name="quantity[]"]');
    let totalQuantity = 0;

    quantityInputs.forEach(input => {
        const quantity = parseFloat(input.value) || 0;
        totalQuantity += quantity;
    });

    return totalQuantity;
}

function updateTotalQuantity() {
    const totalQuantityElement = document.getElementById('total_quantity');
    const totalQuantity = calculateTotalQuantity();
    totalQuantityElement.textContent = totalQuantity.toLocaleString();  
}
document.getElementById('tableBody').addEventListener('input', updateTotalQuantity);



function calculateTotalAmmount() {
    const ammountInputs = document.querySelectorAll('input[name="ammount[]"]');
    let totalAmmount = 0;

    ammountInputs.forEach(input => {
        const ammount = parseFloat(input.value) || 0;
        totalAmmount += ammount;
    });

    return totalAmmount;
}


function updateTotalAmmount() {
    const totalAmmountElement = document.getElementById('total_ammount');
    const totalAmmount = calculateTotalAmmount();
    totalAmmountElement.textContent = totalAmmount.toLocaleString(); 
}

document.getElementById('tableBody').addEventListener('input', updateTotalAmmount);



</script>

<script>
    $(document).on('click', '.remove_item_btn_opening_balance ', function() {

    var closestRow = $(this).closest('tr');
    closestRow.remove(); 


  
                

    const lastRow = $('#set_item_master_set_opening_balance_table tr:last');
    const lastCell = lastRow.find('td:last');
    lastCell.addClass('enable');
    lastCell.show();
    lastCell.find('.add_item_btn').show().addClass('enable');
    lastCell.find('.remove_item_btn_opening_balance').show().addClass('enable'); //while deleting add button to last td
    const lastButton = lastRow.find('button.add_item_btn:last');
    lastButton.focus();
  
  


    toast_message("failure","","Deleted a row")

    calculateTotalQuantity();
    updateTotalQuantity();
    calculateTotalAmmount();
    updateTotalAmmount();

    });
</script>

<script>
function cancelSetOpeningBalance()
{

    $('#stock_item_master_set_opening_balance').modal('hide');
        $("#set_opening_balance").focus();
        // $(".modal").on("hidden.bs.modal", function(){
   

// });

   
}

function handleEscapeOpeningBalance(event) {
    if (event.key === "Escape") {
        cancelSetOpeningBalance();
        
    }
}
$('#stock_item_master_set_opening_balance').on('keydown', handleEscapeOpeningBalance);

</script>



    











             
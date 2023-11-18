<div class="modal fade backdrop modal_common modal_centered_lg gst_details inventory_modal " 
        id="ledger_multiple_address_details_modal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal_header">
                    <div class="main_head">
                        <h6 class="inventory_modal_headding">Manage Multiple Address</h6>
                        <i class="fa fa-close close_modal" onclick="cancelMultipleAddress();" id="stock_cost_center_cancel_icon"></i>
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
                            <form method="POST" name="supplier_multiple_address_form" action="#" id="supplier_multiple_address_form" onsubmit="return false;">

									<div class="row">
                                        <div class="col-md-8">
                                                <label>Address<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input class="enable" name="address_line_1" id="address_line_1" tabindex="21000" >
                                            <input class="enable" name="address_line_2" id="address_line_2" tabindex="21001" >
                                            <input class="enable" name="address_line_3" id="address_line_3" tabindex="21002" >
                                        </div>
                                    </div>
                                    <!-- ---single row start here---- -->
                                    <input type="hidden" id="multiplerowID" value="0">
                                    <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>State<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select  class="enable"  name="state_mutiple_address" id="state_mutiple_address" tabindex="21003">
                                                <?php foreach ($acc_state_master3 as $acc_state_master3): ?>
                                                        <option value="<?php echo $acc_state_master3->id; ?>"><?php echo $acc_state_master3->state_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                <!-- Single Row Start Here -->
                                      <div class="row">
                                        <div class="col-md-8">
                                            <label>Country<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <select  class="enable"  name="country_multiple_address" id="country_multiple_address" tabindex="21004">
                                                <?php foreach ($acc_country_master2 as $acc_country_master2): ?>
                                                            <option value="<?php echo $acc_country_master2->id; ?>"><?php echo $acc_country_master2->country_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                <!-- Single Row End Here -->
                                
                                  <!-- Single Row Start Here -->
									<div class="row">
                                        <div class="col-md-8">
                                                <label>Pincode<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable" name="pincode_multiple_address" id="pincode_multiple_address" tabindex="21005" >
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                      <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                                <label>Mobile<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable" name="mobile_multiple_address" id="mobile_multiple_address" tabindex="21006" >
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                      <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                                <label>Email<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="email" class="enable" name="email_multiple_address" id="email_multiple_address" tabindex="21007" >
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                    <h6 class="h6 bold">Contact Person</h6>

                                            <!-- Single Row Start Here -->
                                            <div class="row">
                                        <div class="col-md-8">
                                                <label>Name of person<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="name_of_person" id="name_of_person" tabindex="21008" >
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->

                                      <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                                <label>Designation<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="enable" name="designation_contact" id="designation_contact" tabindex="21009" >
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                      <!-- Single Row Start Here -->
                                    <div class="row">
                                        <div class="col-md-8">
                                                <label>Mobile<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" class="enable" name="mobile_contact" id="mobile_contact" tabindex="21010" >
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                                      <!-- Single Row Start Here -->
                                      <div class="row">
                                        <div class="col-md-8">
                                                <label>Email<span class="colon">:</span></label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="email" class="enable" name="email_contact" id="email_contact" tabindex="21011" >
                                        </div>
                                    </div>
                                    <!-- Single Row End Here -->
                             </form>
                        </div>
                    </div>
                </div>
				<!-- right side -->
				<div class="col-md-6 right_side_content tabular_formate">
                  <!-- <h6 class="cost_centre_headding">Cost Centre</h6> -->
					<div class="row" >		
                        <table id="ledger_multiple_address_details_modal_table" class="display">
                            <thead>
								<tr>
									<th style="padding-left:6px">Address 1</th>
                                    <th class="action">State</th>
                                    <th class="action">Pincode</th>
                                    <th class="action">Action</th>
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
                        
                            <button id="cancel_mutiple_address_btn" onclick="cancelMultipleAddress();" class="cancel_account_supplier_creation_btn btn ml-4" type="button" tabindex="21013" >
                                <span>C</span>ancel
                            </button>
                            <button id="new_mutiple_address_btn" class="new_account_supplier_creation_btn btn ml-4"  type="button" tabindex="21013" >
                                <span>N</span>ew
                            </button>
                            <button id="save_mutiple_address_btn"   class="save_account_supplier_creation_btn btn ml-4" tabindex="21012" type="button">
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
      
      
        
        
       
        $('#ledger_multiple_address_details_modal').on('shown.bs.modal', function () {
            $("#address_line_1").focus();
            $("#ledger_multiple_address_details_modal td").removeClass('sorting_1');
            
              
            });

     


    });
   

</script>




<script>


var token 				= $("#csrf-token").attr('content'); //CSRF token newly added by sandeep
var BASE_URL = "<?php echo base_url(); ?>";


$('#save_mutiple_address_btn').click(function() {
               
    
    var formData  = new FormData();
	formData.append('address_line_1', $("#address_line_1").val()); 
	formData.append('address_line_2', $("#address_line_2").val()); 
	formData.append('address_line_3', $("#address_line_3").val()); 
	formData.append('state_mutiple_address', $("#state_mutiple_address").val());
	formData.append('country_multiple_address', $("#country_multiple_address").val());
	formData.append('pincode_multiple_address', $("#pincode_multiple_address").val());
	formData.append('mobile_multiple_address', $("#mobile_multiple_address").val());
	formData.append('email_multiple_address', $("#email_multiple_address").val());

	formData.append('name_of_person', $("#name_of_person").val());
	formData.append('designation_contact', $("#designation_contact").val());
	formData.append('mobile_contact', $("#mobile_contact").val());
	formData.append('email_contact', $("#email_contact").val());

	
	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
    formData.append('multiplerowID', $("#multiplerowID").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsLedger/save_multiple_address_details/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {
            
          

          flag_id=($("#flag_id").val());

          if(flag_id === "0")
          {
             $("#rowID").val(response.insertedRowId); //if Insert, rowId value changes to insertRowId
            
             toast_message('success','Saved',response.message);
             loadDataTableMultipleAddress();
             cancelMultipleAddress();

             
          }
          else if(flag_id === "1")
          {
      
         
            toast_message('success','Updated',response.message);
            loadDataTableMultipleAddress();
            cancelMultipleAddress();
          }

        },
        error: function(xhr, status, error) {
           
            console.log(xhr.responseText);
            console.log(status);
            console.log(error);
        }
    });
});

</script>






<script>

     $(".yes_no,.enable").keypress(function (event) {
        if ($("#ledger_multiple_address_details_modal").hasClass("show")) {
            if (event.key === "Enter") {
                // event.preventDefault();
                itype = $(this).prop('type');


                currentId = $(this).attr('id');
                if(currentId == 'email_contact' ){
                    $('#save_mutiple_address_btn').focus();
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

                    if (current_gst_classification_tabindex >= 21000 && current_gst_classification_tabindex < 21200) {
                        while (next < 21200) {

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
function cancelMultipleAddress()
{

    $('#ledger_multiple_address_details_modal').modal('hide');
    $("#ledger_supplier_customer_creation_modal").modal('show');
   
}

function handleEscapeMultipleAddress(event) {
    if (event.key === "Escape") {
        cancelMultipleAddress();
        
    }
}
$('#ledger_multiple_address_details_modal').on('keydown', handleEscapeMultipleAddress);

</script>

<script>
function loadDataTableMultipleAddress() {
    
    var token = "<?php echo $_SESSION['li_token']; ?>";
    var rowID =$("#rowID").val();

    var table = $('#ledger_multiple_address_details_modal_table').DataTable();
    if (table) {
        table.destroy();
    }
    
    var table = $('#ledger_multiple_address_details_modal_table').DataTable({
        "processing": true,
        "serverSide": false,
        "ajax": {
            "url": BASE_URL + "index.php/AccountsLedger/get_supplier_contact_table/",
            "type": "POST",
            "dataType": "json",
            "dataSrc": "data",
            "data": {
                "li_token": token,
                "rowID": rowID
            },
            "error": function(xhr, textStatus, error) {
                console.error("Error loading data:", error);
            }
        },
        "columns": [
            { "data": "address_line_1" },
            { "data": "state_id" },
            { "data": "pin_code" },
         

           
            {
                "data": "id",
                "render": function(data, type, full, meta) {
                    var id = full.id; 

                    return '<div class="operations">' +
                        '<a href="#" class="btn btn-xs first_a" title="Edit" onclick="editMultipleAddress(' + id + ');"><i class="fas fa-edit"></i></a>' +
                        '<a href="#" class="btn btn-xs" title="Delete" onclick="deleteMultipleAddress(' + id + ');"><i class="fas fa-trash"></i></a>' +
                        '</div>';
                }
            }
        ]
    });

}
</script>


<script>


function editMultipleAddress(id)
{
    
    
    // $("#rowID").val(id);
    $("#multiplerowID").val(id);
    
    flag_id=$("#flag_id").val("1");
    
    // $('#ledger_bank_account_details_modal input').val('');
    // $('#ledger_gst_vat_pan_details_modal input').val('');
    // $('#ledger_address_and_contact_details_modal input').val('');
    // $('#additional_details_holder select').val('no'); 

    $.ajax({
       
            url: BASE_URL + "index.php/AccountsLedger/get_edit_multiple_address",
            type: "POST",
            data: { id: id, li_token: token,flag_id: $("#flag_id").val() },
           
            dataType: "json",
            success: function (response) {
                if (response.success) {

                 
                    // $('#additional_details_holder select').prop('disabled', false); // in success
                    $('#address_line_1').focus();
                    
                
                    $('[name="address_line_1"]').val(response.data[0].address_line_1);
            		$('[name="address_line_2"]').val(response.data[0].address_line_2);			
            		$('[name="address_line_3"]').val(response.data[0].address_line_3);
                    $('[name="pincode_multiple_address"]').val(response.data[0].pin_code);
            		$('[name="mobile_multiple_address"]').val(response.data[0].mobile_number);
                    $('[name="email_multiple_address"]').val(response.data[0].email);

                    $('[name="name_of_person"]').val(response.data[0].contact_person_name);
                    $('[name="designation_contact"]').val(response.data[0].contact_person_designation);
                    $('[name="mobile_contact"]').val(response.data[0].contact_person_mobile_number);
                    $('[name="email_contact"]').val(response.data[0].contact_person_email);
               
                    if (response.data && response.data.length > 0) {
                        $('[name="state_mutiple_address"]').val(response.data[0].state_id);
            		    $('[name="country_multiple_address"]').val(response.data[0].country_id);
                    }
               

                    
                } else {
                    alert("Failed to fetch stock category details.");
                    
                }
            },
            error: function (xhr, status, error) {
                alert("Error fetching stock category details.");
            }
        });
}
              
$('#new_mutiple_address_btn').click(function(){



$('#ledger_multiple_address_details_modal input,#ledger_multiple_address_details_modal textarea').val('');

        var selectElements = document.querySelectorAll('select:not(.yes_no)');
        selectElements.forEach(function(select) {
            select.selectedIndex = 0;
        });
       

        $("#address_line_1").focus();

});
</script>
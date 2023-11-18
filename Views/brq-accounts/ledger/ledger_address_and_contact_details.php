
    <div class="modal fade backdrop modal_common modal_centered_lg inventory_modal" 
            id="ledger_address_and_contact_details_modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal_header">
                        <div class="main_head">
                            <h6>Supplier Contact Details</h6>
                            <i class="fa fa-close" onclick="cancelSupplierContactDetails();"></i>
                        </div>
                    </div>
                    <!-- <div class="modal-body" style="max-height: 70vh; overflow-y: auto;"> -->
                    <div class="modal-body" >
                        <div class="row">
                            <!-- Left Side Start Here -->
                            <div class="col-md-12">

                                <!-- Left Content -->
                                <div class="row">

                                

                                    <!-- Single  Section Start Here -->
                                    <div class="col-md-12">
                                        <h6 class="h6 bold">Authorised Person</h6>
                                         <!-- Single Row Start Here -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name of Person<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="enable autofocus"  name="contact_person_name"
                                                        id="contact_person_name" tabindex="20800">
                                                </div>
                                            </div>
                                        <!-- Single Row End Here -->
                                          <!-- Single Row Start Here -->
                                          <div class="row">
                                                <div class="col-md-6">
                                                    <label>Designation<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="enable"  name="contact_person_designation"
                                                        id="contact_person_designation" tabindex="20801">
                                                </div>
                                            </div>
                                        <!-- Single Row End Here -->
                                         <!-- Single Row Start Here -->
                                         <div class="row">
                                                <div class="col-md-6">
                                                    <label>Mobile<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="number" class="enable"  name="contact_person_mobile_number"
                                                        id="contact_person_mobile_number" tabindex="20802">
                                                </div>
                                            </div>
                                        <!-- Single Row End Here -->
                                         <!-- Single Row Start Here -->
                                         <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="email" class="enable"  name="email"
                                                        id="email" tabindex="20803">
                                                </div>
                                        </div>
                                        <!-- Single Row End Here -->

                                        <h6 class="h6 bold mt-3">Company</h6>
                                             <!-- Single Row Start Here -->
                                             <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="email" class="enable"  name="contact_person_email"
                                                        id="contact_person_email" tabindex="20804">
                                                </div>
                                            </div>
                                        <!-- Single Row End Here -->
                                         <!-- Single Row Start Here -->
                                         <div class="row">
                                                <div class="col-md-6">
                                                    <label>Website<span class="colon">:</span></label>
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" class="enable"  name="website"
                                                        id="website" tabindex="20805">
                                                </div>
                                        </div>
                               
                                     
                                    
                                        </div>
                                </div>
                        
                            </div>

                        </div>
                        
                    </div>
                    <div class="border_bottom_for_save_cancel"> </div>
                            <div class="row save_cancel_section ">
                                <div class="col-12">
                                     <button id="save_supplier_contact_details" class="save_account_supplier_creation_btn  btn" type="button" tabindex="20806">
                                        <i class="fas fa-calendar-check"></i><span>S</span>ave
                                    </button>
                                    <button onclick="cancelSupplierContactDetails();" class="cancel_account_supplier_creation_btn btn" type="button" tabindex="20807">
                                        <span>C</span>ancel
                                    </button>
                                 
                                </div>
                                         
                        </div>
                    
                </div>
            </div>
        </div>

      <!----------- bottom-js ---------------------->
		<?php include("application/views/brq-accounts/bottom-js.php"); ?>
		<!------------- bottom-js end --------------->
        <script>
         
           
           $( document ).ready(function() {

            $('#ledger_address_and_contact_details_modal').on('shown.bs.modal', function () {
            $('#contact_person_name').focus();
            

            });

         
           
           });

    </script>
<script>   
$('.yes_no,.enable').keydown(function (e) {

    if ($("#ledger_address_and_contact_details_modal").hasClass("show")) {
        if (e.which === 13) {
        company_feature_field_id = $(this).prop('type');
        currentId = $(this).attr('id');
                if(currentId == 'website' ){
                    $('#save_supplier_contact_details').focus();
                    event.preventDefault();
                }

        if (company_feature_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');

            var next = parseInt(currentTabindex) + 1;

            var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');

            if (currentTabindex >= 20800  && currentTabindex < 21000 ) {

              

                while (next < 21000  ) {

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
      
        if (e.which === 67) {

        }
       
    }


});
    </script>

    <script>

var token 				= $("#csrf-token").attr('content'); //CSRF token newly added by sandeep
var BASE_URL = "<?php echo base_url(); ?>";
 
$('#save_supplier_contact_details').click(function() {
               
    
    var formData  = new FormData();

    
    formData.append('contact_person_name', $("#contact_person_name").val()); 
    formData.append('contact_person_designation', $("#contact_person_designation").val()); 
	formData.append('contact_person_mobile_number', $("#contact_person_mobile_number").val()); 
	formData.append('email', $("#email").val()); 
	formData.append('contact_person_email', $("#contact_person_email").val()); 
	formData.append('website', $("#website").val());

	formData.append('rowID', $("#rowID").val()); // for save or edit.
    formData.append('flag_id', $("#flag_id").val()); 
	formData.append('li_token', token);
            
	
       
    $.ajax({
        "url": BASE_URL + "index.php/AccountsLedger/save_supplier_contact_details/",
        type: 'POST',
        data:  formData,
       
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function(response) {


            cancelSupplierContactDetails();
            toast_message('success','Saved',response.message)

           

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

function cancelSupplierContactDetails()
{
    $('#ledger_address_and_contact_details_modal').modal('hide');
    $("#ledger_supplier_customer_creation_modal").modal('show');
    $("#provide_contact_person_details").focus();

   
}

function handleEscapeKeyContactDetails(event) {
    if (event.key === "Escape") {
        cancelSupplierContactDetails();
        
    }
}
$('#ledger_address_and_contact_details_modal').on('keydown', handleEscapeKeyContactDetails);

</script>
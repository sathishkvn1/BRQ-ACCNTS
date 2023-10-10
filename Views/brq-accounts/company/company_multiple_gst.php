<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>

<body>
<!-- modal fade backdrop modal_common modal_centered_lg company_features mainmodal my-modal -->
    <div class="modal fade bottom backdrop modal-header-create modal_centered  company_multiple_gst library-li-movement my-modal"
        id="company_multiple_gst" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>GST Registration</div>
                    
                    <div class="search_box">
                      <input type="text" placeholder="Search.." name="search">
                    </div>
                    
                    <i class="fa fa-close" id="list_companies_multiple_gst_icon"></i>
                </div>
                <div class="modal-content-header">
                    <div class="row">
                        <div class="col-md-4">Registration Name</div>
                        <div class="col-md-4">GSTIN/UIN</div>
                        <div class="col-md-4">State</div>

                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class='col-md-12 key-control-menu '>
                            <ul class="ul_movement" id="gst_multiple_creation">
                                <li class="card-text btn_activate" data-toggle="modal" data-target="#company_creation"
                                    id="comp_creation_select" data-backdrop="false">Create</li>
                                
                             <!-- <li class=" card-text selected"><a href="#">
                                        <div class="created_company_name" style="width:100%">
                                            <span class="first">Kerala Registration 121212</span>
                                            <span class="second">34343434</span>
                                            <span class="third">Kerala</span>
                                        </div>
                                    </a>
                                </li> -->
                               <span id="company_multiple_list" class="list_of_dynamic_li">
                                   
                               </span>
                               

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for saving the tds -->
    <div class="modal fade backdrop bottom modal-old-vouchers masters_add_edit accept_save" id="save_tds_details_modal">
        <div class="modal-dialog modal-full-height modal-bottom">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <div>Confirm</div>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12 text-center">
                            <h6>Accept & Save ? </h6>
                        </div>

                        <div class="col-md-12">
                            <a class="btn" href="#" id="save-btn-tds" onclick=""><i
                                    class="fas fa-save"></i><span>S</span>ave</a>
                            <!-- <a class="btn" href="#" id="save-btn-tds"><i class="fas fa-save"></i><span>S</span>ave</a>  -->
                            <a class="btn" href="#" class="close" data-dismiss="modal" aria-label="Close"><i
                                    class="fas fa-times-circle"></i><span>C</span>ancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<script>
var BASE_URL="<?php echo base_url();?>";
//  For Accounts-Common JS -
// <?php echo base_url('admin-accounts/dist/js/accounts_common.js');?>
var token = "<?php echo $_SESSION['li_token']; ?>";



function loadMultipleGst(){

       var accountsController = "<?php echo CONTROLLER_ACCOUNTS;?>"; 
       $.ajax({
           type: 'GET',
           url: BASE_URL +"index.php/" + accountsController +"/get_gst_details_by_id",
           dataType: 'json',
           data: {li_token: token },
           cache: true,
           success: function(data) {
            // $('#company_select').modal('show'); 
            //   var gst_multiple_creation = $('#gst_multiple_creation');
            var gst_multiple_creation = $('#company_multiple_list');
             $('#company_multiple_list').html('');
               data.forEach(function(gst) {
                 var id = gst.id;
                   var gst_registration_name = gst.gst_registration_name;
                   var gstin_uin = gst.gstin_uin;
                   var state_id = gst.state_id;
                 
                   var html = '<li class="card-text item_value" data-value="' + id + '">' +
                                   '<a href="#">' +
                                       '<div class="created_company_name">' +
                                           '<span class="first" style="text-align:initial">' + gst_registration_name + '</span>' +
                                           '<span class="second">(' + gstin_uin + ')</span>' +
                                           '<span class="third">(' + state_id + ')</span>' +
                                       '</div>' +
                                   '</a>' +
                               '</li>';
                  
                               gst_multiple_creation.append(html);
                               var firstVisibleLi = $('#company_multiple_gst .ul_movement .list_of_dynamic_li li:visible:first');
                                if (firstVisibleLi.length > 0) {
                                    firstVisibleLi.addClass('element-hover'); // Add the 'element-hover' class to the first visible li
                                }
                });
           }
       });
  
}

$('#company_multiple_gst').on('dblclick', '.card-text', function(event) {
   
   var gst_id = $(this).data('value');
   
     getAddressType();
   $('#gst_modal').modal('show');
   $('#company_multiple_gst').modal('hide');

   getGstDetailsById(gst_id);
 });

  
 $('#company_multiple_gst').on('keypress', function(event) {
   if (event.which === 13) {
     // Enter key is pressed
      
        var gst_id = $('.card-text.item_value.selected').data('value');
     getAddressType();
        $('#gst_modal').modal('show');
      $('#company_multiple_gst').modal('hide');
     
        // $('#company_features').modal('hide');
            if (gst_id) {
                getGstDetailsById(gst_id);
            }
   }
 });

 function getGstDetailsById(gst_id) {
    var token = "<?php echo $_SESSION['li_token']; ?>";
    var accountsController = "<?php echo CONTROLLER_ACCOUNTS; ?>";

    $.ajax({
        url: BASE_URL + "index.php/" + accountsController + "/get_single_gst_details_by_id",
        type: 'POST',
        dataType: 'json',
        data: {
            gst_id: gst_id,
            li_token: token
        },
        success: function(response) {
         
           
          console.log("response of single gst",response);
          
        //   $('#gst_modal').modal('show');
        //   $('select[name="gst_state_id"]').val(response.state_id);
        //   $("#gst_state_id").val("abc");
                        $('input[name="gst_row_id"]').val(response.id);
                        // $('select[name="gst_registration_status_id"] option[value="'+ response.gst_registration_status_id +'"]').attr('selected', 'selected');
                        
                        $('select[name="gst_registration_status_id"]').val(response.gst_registration_status_id);
                            // alert("Response "+ $("#gst_registration_status_id").val());
                        $('select[name="gst_state_id"]').val(response.state_id);
                        $('select[name="gst_address_type_id"]').val(response.address_type_id);
                        $('select[name="gst_registration_type_id"]').val(response.gst_registration_type_id);
                        $('select[name="gst_assessee_of_other_territory"]').val(response.is_assessee_of_other_territory);
                        $('input[name="gstin_uin"]').val(response.gstin_uin);
                        $('select[name="gstr1_periodicity_id"]').val(response.gstr1_periodicity_id);
                        $('select[name="gst_place_of_supply_id"]').val(response.place_of_supply_id);
                        $('select[name="gst_is_e_invoicing_applicable"]').val(response.is_e_invoicing_applicable);
                        $('input[name="gst_e_invoicing_applicable_from_date"]').val(response.e_invoicing_applicable_from_date);
                        $('input[name="gst_e_invoice_bill_from_place"]').val(response.e_invoice_bill_from_place);
                        $('input[name="gst_tax_rate_for_taxable_turnover"]').val(response.tax_rate_for_taxable_turnover);
                        $('select[name="gst_composition_tax_calculation_type_id"]').val(response.composition_tax_calculation_type_id);
                        $('select[name="gst_is_e_way_bill_applicable"]').val(response.is_e_way_bill_applicable);
                        $('input[name="gst_e_way_bill_applicable_from_date"]').val(response.e_way_bill_applicable_from_date);
                        $('select[name="gst_goods_dispatched_from_id"]').val(response.goods_dispatched_from_id);
                        $('select[name="gst_is_e_way_bill_applicable_for_intrastate"]').val(response.is_e_way_bill_applicable_for_intrastate);
                        $('select[name="gst_use_voucher_number_and_date_as_in_supplier_invoice"]').val(response.use_voucher_number_and_date_as_in_supplier_invoice);
                        $('select[name="gst_ignore_zero_prefixed_in_supplier_document_number"]').val(response.ignore_zero_prefixed_in_supplier_document_number);
                        $('select[name="gst_ignore_special_characters_used_in_supplier_document_number"]').val(response.ignore_special_characters_used_in_supplier_document_number);
                        $('input[name="gst_registration_name"]').val(response.gst_registration_name);
                        $('input[name="revised_gst_effective_date"]').val(response.revised_gst_effective_date);
                      
                        // $('#gst_modal').modal('show');
           
        },
        error: function(xhr, status, error) {
            console.log('Error response:', xhr.responseText);
            console.log('An error occurred:', error);
           
        }
    });
}

   </script>
   <script>
    $("#list_companies_multiple_gst_icon").on("click",function()
{
  $("#company_multiple_gst").modal("hide");
})
 
   </script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



</head>
<body>

<div class="modal fade bottom backdrop modal-header-create modal_centered company_select my-modal library-li-movement" id="company_select"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header modal-header-with-close-icon">
                <div>List Of Companies</div>
                <i class="fa fa-close" id="list_companies_select_cancel_icon"></i>
            </div>
            <div class="modal-headding-list">
              <div class="company_name">
                Company Name
              </div>
              <div class="company_period">
                Period
              </div>
              <div class="company_type">
                Type
              </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class='col-md-12 key-control-menu '>
                        <ul class="ul_movement" id="created_comapny_selected">
                        <li class="card-text btn_activate" onclick="companyCreation(); disableSubmenu();"
                                id="comp_creation_select" data-backdrop="false"><span  style="font-weight: 500 !important; color: var(--blue); font-family: system-ui;">C</span>reate Company</li>
                               
                                        <li class="card-text item_value" data-value="AIWA SILKS PRIVATE LIMITED" style="display:none !important;">
                                          <a href="#">
                                              <div class="created_company_name">
                                                  <input type="hidden" name="company_id" value="' + id + '">
                                                  <span class="first" style="text-align: initial !important;"></span>
                                                  <span class="second"></span>
                                                  <span class="third"></span>
                                              </div>
                                          </a>
                                      </li>
                               <span id="list_company" class="list_of_dynamic_li">
                                   
                                </span>
                               
                        </ul>
                       

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
  

function loadCompanyDetails() {

  $('#company_select').on('show.bs.modal', function() {
       var accountsController = "<?php echo CONTROLLER_ACCOUNTS;?>"; 
      
       $.ajax({
           type: 'GET',
           url: BASE_URL +"index.php/" + accountsController +"/get_company_details_json",
           dataType: 'json',
           cache: true,
           success: function(data) {
            
             var companyList = $('#list_company');
             $("#list_company").html('');
              
              data.forEach(function(company) {
               
                var html = '<li class="card-text item_value dynamic-item" id="select_company_list' + company.company_id + '" data-value="' + company.company_id + '">' +
                '<a href="#">' +
                '<div class="created_company_name">' +
                '<span class="first">' + company.company_name + '</span>' +
                '<span class="second">(' + company.financial_year + ')</span>' +
                '<span class="third">(' + company.address_type + ')</span>' +
                '</div>' +
                '</a>' +
                '</li>';
                  companyList.append(html);
                  var firstVisibleLi = $('#company_select .ul_movement .list_of_dynamic_li li:visible:first');
                  if (firstVisibleLi.length > 0) {
                      firstVisibleLi.addClass('element-hover'); // Add the 'element-hover' class to the first visible li
                  }

                  
                });
                
           }
       });
  });
  }


 $('#company_select').on('dblclick', '.card-text', function(event) {

   var companyId = $(this).data('value');
   alert(companyId);
//   <?php echo $this->session->set_userdata('con_id', 'companyId');?>

    updateCompanyName(companyId);
   
 });


 
 $('#company_select').on('keypress', function(event) {
   if (event.which === 13) {
   

     var companyId = $('#created_comapny_selected li.element-hover').attr('data-value');
     alert(companyId);
     if (companyId) {
    
  updateCompanyName(companyId);
     }
   }
 });

function updateCompanyName(companyId) {
    var token = "<?php echo $_SESSION['li_token']; ?>"; 
  var accountsController = "<?php echo CONTROLLER_ACCOUNTS;?>"; 
  $.ajax({
     type: 'POST',
     url: BASE_URL +"index.php/" + accountsController +"/get_company_details_json",
     dataType: 'json',
      data: { companyId: companyId ,li_token: token},
     success: function(data) {
                 console.log('response :',data);  
      var selectedCompany = data.find(function(company) {
          
         return company.company_id == companyId;
      });
   
      if (selectedCompany) {
       
         $('.text-center#header_company_name').text(selectedCompany.company_name);   

         var currentPeriodDates = getCurrentPeriodDates(selectedCompany);
         $('#current_period_dates').html('<strong>' + currentPeriodDates + '</strong>');
      }
            $('#company_select').modal('hide');
             enableSubmenu();
   
     },
     error: function(jqXHR, textStatus, errorThrown) {
      console.log('Error:', textStatus, errorThrown);
      console.log('Response:', jqXHR.responseText);
     
     }
     
  });
}



function getCurrentPeriodDates(company) {
   var financialYearBeginDate = company.financial_year_begin_date;
   var booksBeginningDate = company.books_beginning_date;
   return financialYearBeginDate + ' to ' + booksBeginningDate;
}



</script>



<script>
$(document).on("keyup", function(e) {
    if (e.key === "c" || e.key === "C") {
        // Check if the "C" key was pressed (case-insensitive)
       if($("#company_select").hasClass("show"))
       {
       
            companyCreation();
       }
     
    }
});
$("#list_companies_select_cancel_icon").on("click",function()
{
  $("#company_select").modal("hide");
})

</script>




<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dropdown-item.inactive-link {
		pointer-events: none !important;
		cursor: default !important;
		text-decoration: none !important;
  }
        /* label:not(.form-check-label):not(.custom-file-label){
            font-weight:normal;
        } */
        .company_creation .bottom_side_content input,
        .company_creation .bottom_side_content select
        {
            width:60px;
            margin-left:0px;

        }

        .modal_left_large .modal-dialog .modal-content .modal-body>.row {
            height: 100%;
            margin: 0;
            min-height: 566px !important;
            width: 100% !important;
        }

        .card-current-date .card-body {
            padding: 0;
            min-height: 500px !important;
        }

        .company_select .card-current-date .card-body ul li.selected {
            background: var(--dark-yellow);
            width: 350px !important;
        }

        .bg-success {
            background-color: yellow;

        }
            /* .company_creation  ul li.selected */
      .company_creation .left_side_content li.element-hover {
        background: var(--dark-yellow) !important;
        color: black;
      }
    </style>
    <!-- jQuery UI CSS -->


</head>

<body>

    <!-- ===============================================================
                Company Creation Modal Start Here
================================================================= -->
    <div class="modal fade backdrop modal-payment modal_left_large h_auto company_creation my-modal"
        id="company_creation" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <!-- Left Side Start Here -->
                        <div class="col-md-6 left_side_content">

                            <!-- Left Content -->
                            <div class="row body_content">
                                <div class="col-md-12">

                                    <div class="row">

                                        <div class="col-md-4">Company Name<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <input type="hidden" id="hidden_Id" name="hidden_Id" value="0">
                                            <input type="text" class="autofocus enable" tabindex="1000" name="company_name"
                                                id="company_name">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">Mailing Name<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <input type="text" class="enable" tabindex="1001" name="company_mailing_name"
                                                id="company_mailing_name">
                                        </div>
                                    </div>

                                    <div class="row align-items-baseline">
                                        <div class="col-md-4 ">Address<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <input type="text" tabindex="1002" id="company_address_1"
                                                name="company_address_1" class="enable">
                                            <input type="text" tabindex="1003" id="company_address_2"
                                                name="company_address_2" class="enable">
                                            <input type="text" tabindex="1004" id="company_address_3"
                                                name="company_address_3" class="enable">
                                            <input type="text" tabindex="1005" id="company_address_4"
                                                name="company_address_4" class="enable">
                                            <input type="text" tabindex="1006" id="company_address_5"
                                                name="company_address_5" class="enable">

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">Country<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <div class="dropdown brq_selection" id="company_creation_country" data-value="company_creation">
                                                <input type="text" class="form-control enable" id="CountryInput"
                                                    name="CountryInput" placeholder="Select a country" tabindex="1007">
                                                    <input type="hidden" id="selectedCountryId" name="selectedCountryId" placeholder="countryid">
                                                <ul class="dropdown-menu" id="CountryDropdown"></ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            State<span class="colon">:</span>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="dropdown brq_selection" id="company_creation_state" data-value="company_creation">
                                            <input
                                                type="text"
                                                class="form-control enable"
                                                id="StateInput"
                                                name="StateInput"
                                                placeholder="Select a state"
                                                tabindex="1008"
                                            />
                                            <input
                                                type="hidden"
                                                id="selectedStateId"
                                                name="selectedStateId"
                                                placeholder="stateid"
                                            />
                                            <ul class="dropdown-menu" id="StateDropdown">

                                            </ul>
                                            <!-- //li -->
                                            </div>
                                        </div>
                                    </div>
                                 

             
                                    <div class="row">
                                        <div class="col-md-4 ">Pincode<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <input type="number" tabindex="1009" class="enable" name="company_pincode"
                                                id="company_pincode">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">Telephone<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <input type="number" class="enable" tabindex="1010" name="company_telephone"
                                                id="company_telephone">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 ">Mobile<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <input type="number" class="enable" tabindex="1011" name="company_mobile"
                                                id="company_mobile">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 ">Fax<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <input type="text" class="enable" tabindex="1012" name="company_fax"
                                                id="company_fax">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">E-mail<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <input type="text" class="enable" tabindex="1013" name="company_email"
                                                id="company_email">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">Website<span class="colon">:</span></div>
                                        <div class="col-md-8">
                                            <input type="text" class="enable" tabindex="1014" name="company_website"
                                                id="company_website">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Left Content -->

                        </div>
                        <!-- Left Side End Here -->

                        <!-- Right Side Start Here -->
                        <div class="col-md-6 right_side_content">

                            <!-- Left Content -->
                            <div class="row body_content">
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-md-6">Financial Year Beginning From<span class="colon">:</span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" id="financial_year_begin_date"
                                                name="financial_year_begin_date" tabindex="1015"
                                                class="enable">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">Books Beginning From<span class="colon">:</span></div>
                                        <div class="col-md-6">
                                            <input type="text" id="books_beginning_date" name="books_beginning_date"
                                                tabindex="1016" class="enable">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-6">Financial Year end date<span class="colon">:</span></div> -->
                                        <div class="col-md-6">
                                            <input type="hidden" id="financial_year_end_date" name="financial_year_end_date"
                                                tabindex="1017" class="enable">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-6">financial_year<span class="colon">:</span></div> -->
                                        <div class="col-md-6">
                                            <input type="hidden" id="financial_year" name="financial_year"
                                                tabindex="1018" class="enable ">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- Right Side End Here -->

                        <!-- Bottom Side Start Here -->
                        <div class="col-md-12 bottom_side_content">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="row">
                                        <div class="col-md-8">Base Currency Symbol<span class="colon">:</span></div>
                                        <div class="col-md-4">
                                            <input type="text" id="currency_symbol" name="currency_symbol"
                                                class="enable"  tabindex="1017">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">Formal Name<span class="colon">:</span></div>
                                        <div class="col-md-4">
                                            <input type="text"  id="company_formal_name" name="company_formal_name"
                                                class=" enable"  tabindex="1018">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">Suffix symbol to amount<span class="colon">:</span></div>

                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="1019" id="suffix_symbol_to_amount" name="suffix_symbol_to_amount">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-8">Show amount in millions<span class="colon">:</span></div>

                                        <div class="col-md-4">
                                            <select class="yes_no enable" tabindex="1020" id="show_amount_in_millions" name="show_amount_in_millions">
                                                <option value="yes">Yes</option>
                                                <option value="no" selected>No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">Numbers of decimal places<span class="colon">:</span></div>

                                        <div class="col-md-4">
                                          <input type="number" class="enable with_backdrop_modal_blur" data-target="#accept"  tabindex="1021" name="number_decimal_places"
                                               id="number_decimal_places">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-8">CurrencyID<span class="colon">:</span></div> -->

                                        <div class="col-md-4">
                                          <input type="hidden" class="enable with_backdrop_modal_blur"  tabindex="1022" name="currency_id"
                                               id="currency_id">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Bottom Side End Here -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============================================================== 
                Company Creation Modal End Here
================================================================= -->

    <!-- =============================================================== 
                 Modal for saving the company
================================================================= -->

    <div class="modal fade backdrop bottom modal-old-vouchers masters_add_edit accept_save" id="accept">
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
                            <a class="btn" href="#" onclick="openCloseModal(); enableButtons();" id="saveBtn"><i
                                    class="fas fa-save"></i><span>S</span>ave</a>
                            <!-- <a class="btn" href="#" onclick="validateAndOpenCloseModal();" id="saveBtn"><i class="fas fa-save"></i><span>S</span>ave</a> -->
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
      $("#CountryInput").on("click",()=>{
          // $("#CountryDropdown li:first-child").addClass("element-hover");
          $("#CountryDropdown li").addClass("element");
      });
     
    var BASE_URL = "<?php echo base_url(); ?>";
    //  For Accounts-Common JS -
    <?php echo base_url('admin-accounts/dist/js/accounts_common.js'); ?>

//  $(document).ready(function () {
          var selectedCountryId = $('#CountryInput').data('country-id');
       
//////////////////FOR LISTING  COUNTRY AND STATE IN COMPANY CREATION////////////////////
   
        var input = $('#CountryInput');
              // var defaultCountry = 'India';
              // input.val(defaultCountry);

              var dropdown = $('#CountryDropdown');
              var token = "<?php echo $_SESSION['li_token']; ?>";
              var accountsController = "<?php echo CONTROLLER_ACCOUNTS; ?>";

              // Make an AJAX call to get the country options
              $.ajax({
                  url: BASE_URL + "index.php/" + accountsController + "/getCountryOption",
                  dataType: 'json',
                  data: { li_token: token },
                  success: function (data) {
                      // Populate the country dropdown options with the data
                      $.each(data, function (key, value) {
                          dropdown.append('<li data-value="' + key + '" class="element">' + value + '</li>');
                      });

                      // Show the country dropdown when clicking on the input field
                      input.on('click', function () {
                          dropdown.show();
                      });

              // Filter the country dropdown options based on the input value
                      input.on('input', function () {
                          var inputValue = input.val().toLowerCase();
                          dropdown.find('li').each(function () {
                              var optionText = $(this).text().toLowerCase();
                              var showOption = optionText.includes(inputValue);
                              $(this).toggle(showOption);
                          });
                      });

              // Select a country option when clicking on it in the dropdown
              dropdown.on('click', 'li', function () {
                  var selectedCountryId = $(this).attr('data-value');
                  $('#selectedCountryId').val(selectedCountryId);
                  var selectedCountryText = $(this).text();
                  input.val(selectedCountryText);
                  dropdown.hide();

                  // Make an AJAX call to get the state options based on the selected country
                  $.ajax({
                      url: BASE_URL + "index.php/" + accountsController + "/getStateOption",
                      dataType: 'json',
                      data: { li_token: token, country_id: selectedCountryId },
                      success: function (stateData) {
                          // Populate the state dropdown options with the data
                          var stateInput = $('#StateInput');
                          var stateDropdown = $('#StateDropdown');
                          stateDropdown.empty(); // Clear the existing state dropdown options

                          $.each(stateData, function (key, value) {
                              stateDropdown.append('<li data-value="' + key + '" class="element">' + value + '</li>');
                          });
                          $("#StateInput").focus();
                          var find_focus_element = $("#selectedStateId").val();
                        $('#StateDropdown li').removeClass('element-hover');
                        $('#StateDropdown li[data-value="' + find_focus_element.toString() + '"]').addClass("element-hover");

                          // Show the state dropdown when clicking on the input field
                          stateInput.on('click', function () {
                              stateDropdown.show();
                          });

                          // Filter the state dropdown options based on the input value
                          stateInput.on('input', function () {
                              var stateInputValue = stateInput.val().toLowerCase();
                              stateDropdown.find('li').each(function () {
                                  var stateOptionText = $(this).text().toLowerCase();
                                  var showStateOption = stateOptionText.includes(stateInputValue);
                                  $(this).toggle(showStateOption);
                              });
                          });

                          // Select a state option when clicking on it in the dropdown
                          stateDropdown.on('click', 'li', function () {
                              var selectedStateValue = $(this).attr('data-value');
                              $('#selectedStateId').val(selectedStateValue);// Update the value of the hidden input field
                              var selectedStateText = $(this).text();
                              stateInput.val(selectedStateText);
                              stateDropdown.hide();

                          });

                          // Hide the state dropdown when clicking outside of it
                          $(document).on('click', function (event) {
                              if (!stateDropdown.is(event.target) && !stateInput.is(event.target)) {
                                  stateDropdown.hide();
                              }
                          });
                      }
                  });


          // Make an AJAX call to get the currency options based on the selected country
            $.ajax({
                url: BASE_URL + "index.php/" + accountsController + "/getCurrencyOption",
                dataType: 'json',
                data: { li_token: token, country_id: selectedCountryId },
                success: function (currencyData) {
                    var currencySymbolInput = $('#currency_symbol');
                    var formalNameInput = $('#company_formal_name');
                    var suffixSymbolInput = $('#suffix_symbol_to_amount');
                    var showAmountInput = $('#show_amount_in_millions');
                    var decimalPlacesInput = $('#number_decimal_places');
                    var currency_id = $('#currency_id');

                    currencySymbolInput.val(currencyData.currency_symbol);
                    formalNameInput.val(currencyData.currency_formal_name);
                    // suffixSymbolInput.val(currencyData.suffix_symbol_to_amount);
                    // showAmountInput.val(currencyData.show_amount_in_millions);
                    decimalPlacesInput.val(currencyData.number_of_decimal_places);
                    currency_id.val(currencyData.currency_id);
                }
            });

            });

            // Hide the country dropdown when clicking outside of it
            $(document).on('click', function (event) {
                if (!dropdown.is(event.target) && !input.is(event.target)) {
                    dropdown.hide();
                }
            });
        }
    });


     
        // Save company button click event
        $('#saveBtn').on('click', function () {
           
             var hidden_Id = $('#hidden_Id').val();
            // console.log("hidden_Id" + hidden_Id);
            var company_name = $('#company_name').val();
            // console.log("state is" +  state);
            country= $('#CountryInput').val(),
            console.log("country is" + country);
            var token = "<?php echo $_SESSION['li_token']; ?>";

            var accountsController = "<?php echo CONTROLLER_ACCOUNTS; ?>";
            $.ajax({
                type: 'POST',
                dataType: "json",
                // refresh: true,
                url: BASE_URL + "index.php/" + accountsController + "/save_company_data",
                data: {
                    hidden_Id: hidden_Id,
                    company_name: $('#company_name').val(),
                    company_mailing_name: $('#company_mailing_name').val(),
                    company_address_1: $('#company_address_1').val(),
                    company_address_2: $('#company_address_2').val(),
                    company_address_3: $('#company_address_3').val(),
                    company_address_4: $('#company_address_4').val(),
                    company_address_5: $('#company_address_5').val(),
                    state: $('#selectedStateId').val(),
                   
                    country: $('#selectedCountryId').val(),
                    company_pincode: $('#company_pincode').val(),
                    company_telephone: $('#company_telephone').val(),
                    company_mobile: $('#company_mobile').val(),
                    company_email: $('#company_email').val(),
                    company_website: $('#company_website').val(),
                    company_fax: $('#company_fax').val(),
                    suffix_symbol_to_amount: $('#suffix_symbol_to_amount').val(),
                    show_amount_in_millions: $('#show_amount_in_millions').val(),

                    financial_year_begin_date: $('#financial_year_begin_date').val(),
                    books_beginning_date: $('#books_beginning_date').val(),
                    financial_year_end_date: $('#financial_year_end_date').val(),
                    financial_year: $('#financial_year').val(),
                    currency_id: $('#currency_id').val(),
                    currency_symbol: $('#currency_symbol').val(),
                    currency_name: $('#currency_name').val(),
                    li_token: token
                },
                success: function (response) {
                     console.log("response",response);
                     toast_message("success", "Successful", response.message);
                   
                     closeAllModal("accept");
                     closeAllModal("company_creation");
                     openModal("company_features");
                     $("#company_select_link").removeClass("inactive-link");
                    // alterButton.classList.remove('inactive-link');
                    // selectLink.classList.remove('inactive-link');
                    // financialyearmaster.classList.remove('inactive-link');
                    // createfinancialyear.classList.remove('inactive-link');
                    //  companyfeatures.classList.remove('inactive-link');
            

                    //  var companyFeaturesModal =$('#company_features');
                    //  companyFeaturesModal.addEventListener('.show', enableButtons);

                    // location.reload();
                },
                error: function (xhr, status, error) {
                    // Log the error details
                    alert('Error saving company:');
                    console.log('XHR:', xhr);
                    console.log('Status:', status);
                    console.log('Error:', error);
                  
                }
            });
        }); 


//         function getFinancialYear() {
//             const currentYear = new Date().getFullYear();
//             const currentMonth = 4;
//             const currentDate = 1; // 1st
//             let financialYear;
//             let financialYearEndDate;

//             if (currentMonth >= 4) {
//                 financialYear = currentYear + '-' + (currentYear + 1); // 2023 - 2024
//             } else {
//                 financialYear = (currentYear - 1) + '-' + currentYear; // 2022 - 2023
//             }

//             const formattedDate = currentDate + '-' + new Date(currentYear, currentMonth - 1).toLocaleString('default', { month: 'long' }) + '-' + currentYear;
            
//             const endYear = currentMonth >= 4 ? currentYear + 1 : currentYear;
//             financialYearEndDate = '31-March-' + endYear;

//             return {
//                 financial_year_begin_date: formattedDate,
//                 financial_year_end_date: financialYearEndDate,
//                 financial_year: financialYear
//             };
// }
function getFinancialYear() {
           
        const currentYear   = new Date().getFullYear();
        const currentMonth  =new Date().getMonth();
        const currentDate  =new Date().getDate();
        let financialYear;
        let financialYearEndDate;
      
        if (currentMonth >= 4) {
            financialYear = currentYear + '-' + (currentYear + 1); // 2023 - 2024
        } else {
            financialYear = (currentYear - 1) + '-' + currentYear; // 2022 - 2023
        }
        const formattedDate     = currentYear+'-04-01';
        const endYear           = currentMonth >= 4 ? currentYear + 1 : currentYear;
       financialYearEndDate     =  endYear+'-03-31';

        return {
            financial_year_begin_date: formattedDate,
            financial_year_end_date: financialYearEndDate,
            financial_year: financialYear
        };
    }
        $('#company_creation').on('shown.bs.modal', function () {
        const result = getFinancialYear();
        $('#financial_year_begin_date').val(result.financial_year_begin_date);
        $('#books_beginning_date').val(result.financial_year_begin_date);
        $('#financial_year_end_date').val(result.financial_year_begin_date);
        $('#financial_year').val(result.financial_year_begin_date);
         }).trigger('shown.bs.modal');

   

//  });  // end of document.ready


    //common enter key integration for company creation


    $(".yes_no,.enable").on("keypress", function(event) {
       
        if (event.key === "Enter") {
         
          
        company_creation_field_id = $(this).prop('type');
        if (company_creation_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');
            currentId = $(this).attr('id');
            var next = parseInt(currentTabindex) + 1;

       
             var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');
            

            if (currentTabindex >= 1000 && currentTabindex < 1200) {
                
                if (currentId == "number_decimal_places") {
                   
                    $('#accept').modal('toggle');
                } else if (currentId == "company_mobile") {
                    mobileNumber =$("#"+currentId).val()
                        if (mobileNumber === '')
                         {
                
                            alert_message("failure", "Error", "Unable to create company. Specify a valid Mobile Number.");
                            return;
                         }
                        else
                        {
                            var mobileRegex = /^[0-9]{10}$/;
                            if (!mobileRegex.test(mobileNumber)) {
                               alert_message("failure", "Error", "Invalid Mobile Number. Please enter a valid 10-digit mobile number.");
                                 return;
                                 }
                        }
                            var mobileRegex = /^[0-9]{10}$/;
                        if (!mobileRegex.test(mobileNumber)) {
                                alert_message("failure", "Error", "Invalid Mobile Number. Please enter a valid 10-digit mobile number.");
                           return;
                        }
                }
                if (currentId == "company_name") {
                      companyName = $("#" + currentId).val().trim();
                            if (companyName === '') {
                                alert_message("failure", "Error", "Unable to create company. Specify a valid Company Name.");
                                // $("#" + currentId).focus(); // Focus back on the current input
                                return;
                            }
                            $('#company_mailing_name').val(companyName);
                     }
                     if (next_id == "company_pincode") {//when you press enter key from last input of company creation
                          $("#StateDropdown").css("display","none");
                      }
                      var token = "<?php echo $_SESSION['li_token']; ?>";
                    // var company_id = <?php //echo $_SESSION['company_id']; ?>;
                    var mode = $('#hidden_Id').val() === '0' ? 0 : 1; 

                    $('#company_mailing_name').val(companyName);

                    $.ajax({
                        type: 'POST',
                        url: BASE_URL + "index.php/" + accountsController + "/checkCompanyNameExists",
                        data: {
                            company_id: company_id,
                            company_name: companyName,
                            mode: mode,
                            li_token: token
                        },
                        dataType: 'json',
                       
                        success: function (response) {
                            console.log("Response from server:", response);

                            if (response) {
                                console.log("Company name already exists for update. Handle accordingly.");
                                alert_message("failure", "Error", "Company name already exists. Please choose a different name for update.");
                                $("#" + currentId).focus();
                            } 
                            
                        },

                        error: function (xhr, status, error) {
                            console.error('AJAX error:', error);
                        }
                    });
                

                    // validation for pincode
                     if (currentId == "company_pincode") {
                        pincode =$("#"+currentId).val()
                        if (pincode === '')
                         {
                
                            alert_message("failure", "Error", "Pincode is required.");
                            return;
                         }
                        else
                        {
                            let regex = new RegExp(/^[1-9]{1}[0-9]{2}\s{0,1}[0-9]{3}$/);
                            if (!regex.test(pincode)) {
                            alert_message("failure", "Error", "Invalid Pincode. Please enter a valid Pincode of India.");
                            $(this).focus(); 
                            return;
                             }
                        }
                    }
                    // validation for email
                    if (currentId == "company_email") {
                        email =$("#"+currentId).val()
                        if (email === '')
                         {
                            alert_message("failure", "Error", "Email is required.");
                            return;
                         }
                        else
                        {
                            let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                            if (!emailRegex.test(email)) {
                                alert_message("failure", "Error", "Invalid Email. Please enter a valid email address.");
                            $(this).focus(); 
                            return;
                             }
                        }
                       
                    }

                    // validation for website
                    if (currentId == "company_website")
                    {
                        website =$("#"+currentId).val()
                        if (website !== '')
                        {
                            let websiteRegex = /^(http[s]?:\/\/){0,1}(www\.)?[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}[.]{0,1}$/;
                            if (!websiteRegex.test(website)) 
                            {
                                alert_message("warning", "Warning", "Invalid Website URL. Please enter a valid Website URL.");
                                $(this).focus();
                                return;
                             }
                        }
                    }

                     // validation fr telephone
                     if (currentId == "company_telephone")
                    {
                        telephone =$("#"+currentId).val()
                        if (telephone !== '')
                        {
                            let telephoneRegex = /^[0-9]{10}$/;
                            if (!telephoneRegex.test(telephone)) {
                                alert_message("warning", "Warning", "Invalid Telephone Number. Please enter a valid 10-digit Telephone Number.");
                                return;
                            }
                        }
                    }

                     // validation for address
                     if (currentId.startsWith("company_address_")) 
                    {
                        var addressLine1 = $('#company_address_1').val().trim();
                        var addressLine2 = $('#company_address_2').val().trim();
                        var addressLine3 = $('#company_address_3').val().trim();
                        var addressLine4 = $('#company_address_4').val().trim();
                        var addressLine5 = $('#company_address_5').val().trim();

                        if (addressLine1 === '' && addressLine2 === '' && addressLine3 === '' && addressLine4 === '' && addressLine5 === '') {
                            alert_message("failure", "Error", "Please enter at least one address field.");
                            $(this).focus();
                            return;
                        }
                    }

                     // validation for financial year
                     if (currentId == "financial_year_begin_date") 
                    {
                        var selectedDate = new Date($('#financial_year_begin_date').val());
                        var currentYear = new Date().getFullYear();

                        if (isNaN(selectedDate)) {
                            alert_message("failure", "Error", "Please enter a valid date.");
                            return;
                        }

                        if (selectedDate.getFullYear() > currentYear) {
                            alert_message("failure", "Error", "Financial Year Beginning date cannot be in the future.");
                            return;
                        }
                    }

                while (next < 1200) {
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
    
});


</script>
 



<script>
    function disableButtons() {
        var alterButton = document.getElementById('btnaltercompany');
        var selectLink = document.getElementById('company_select_link');
        var financialyearmaster = document.getElementById('btnfinancialyearmaster');
        var createfinancialyear = document.getElementById('btncreatefinancialyear');
        var companyfeatures = document.getElementById('btnalter_company_features');

        if (alterButton && selectLink && financialyearmaster && createfinancialyear && companyfeatures) {
            alterButton.classList.add('inactive-link');
            selectLink.classList.add('inactive-link');
            financialyearmaster.classList.add('inactive-link');
            createfinancialyear.classList.add('inactive-link');
            companyfeatures.classList.add('inactive-link');
        }
    }
</script>
<script>
    function enableButtons() {
        var alterButton = document.getElementById('btnaltercompany');
        var selectLink = document.getElementById('company_select_link');
        var financialyearmaster = document.getElementById('btnfinancialyearmaster');
        var createfinancialyear = document.getElementById('btncreatefinancialyear');
        var companyfeatures = document.getElementById('btnalter_company_features');

        if (alterButton && selectLink && financialyearmaster && createfinancialyear && companyfeatures) {
            alterButton.classList.remove('inactive-link');
            selectLink.classList.remove('inactive-link');
            financialyearmaster.classList.remove('inactive-link');
            createfinancialyear.classList.remove('inactive-link');
            companyfeatures.classList.remove('inactive-link');
        }
    }
</script>

<script>

    ////////////////
    $('.yes_no,.enable').keydown(function (e) {

if (e.shiftKey && e.keyCode == 9) 
    {
      var  company_company_tab_current_id = $(this).attr('id');
      console.log(company_company_tab_current_id);
      if(company_company_tab_current_id === 'StateInput')
      {
        $("#StateDropdown").css("display","none");
      }
  
    }
else if (e.keyCode == 9)
 {
    event.preventDefault();
   
    company_creation_field_id = $(this).prop('type');
        if (company_creation_field_id !== 'submit') {
            currentTabindex = $(this).attr('tabindex');
            currentId = $(this).attr('id');
            var next = parseInt(currentTabindex) + 1;

        //    same as above
             var next_id = $('[tabindex^="' + (parseInt(next)) + '"]').attr('id');
            

            if (currentTabindex >= 1000 && currentTabindex < 1200) {
                
                if (currentId == "number_decimal_places") {
                   
                    $('#accept').modal('toggle');
                } else if (currentId == "company_mobile") {
                    mobileNumber =$("#"+currentId).val()
                        if (mobileNumber === '')
                         {
                
                            alert_message("failure", "Error", "Unable to create company. Specify a valid Mobile Number.");
                            return;
                         }
                        else
                        {
                            var mobileRegex = /^[0-9]{10}$/;
                            if (!mobileRegex.test(mobileNumber)) {
                               alert_message("failure", "Error", "Invalid Mobile Number. Please enter a valid 10-digit mobile number.");
                                 return;
                                 }
                        }
                            var mobileRegex = /^[0-9]{10}$/;
                        if (!mobileRegex.test(mobileNumber)) {
                                alert_message("failure", "Error", "Invalid Mobile Number. Please enter a valid 10-digit mobile number.");
                           return;
                        }
                }
                if (currentId == "company_name") {
                      companyName = $("#" + currentId).val().trim();
                            if (companyName === '') {
                                alert_message("failure", "Error", "Unable to create company. Specify a valid Company Name.");
                                // $("#" + currentId).focus(); // Focus back on the current input
                                return;
                            }
                            $('#company_mailing_name').val(companyName);
                     }
                     if (next_id == "company_pincode") {//when you press enter key from last input of company creation
                          $("#StateDropdown").css("display","none");
                      }
                     if (next_id == "StateInput") {//when you press enter key from last input of company creation
                          $("#CountryDropdown").css("display","none");
                      }
                      var token = "<?php echo $_SESSION['li_token']; ?>";
                    // var company_id = <?php //echo $_SESSION['company_id']; ?>;
                    var mode = $('#hidden_Id').val() === '0' ? 0 : 1; 

                    $('#company_mailing_name').val(companyName);

                    $.ajax({
                        type: 'POST',
                        url: BASE_URL + "index.php/" + accountsController + "/checkCompanyNameExists",
                        data: {
                            // company_id: company_id,
                            company_name: companyName,
                            mode: mode,
                            li_token: token
                        },
                        dataType: 'json',
                       
                        success: function (response) {
                            console.log("Response from server:", response);

                            if (response) {
                                console.log("Company name already exists for update. Handle accordingly.");
                                alert_message("failure", "Error", "Company name already exists. Please choose a different name for update.");
                                $("#" + currentId).focus();
                            } 
                            
                        },

                        error: function (xhr, status, error) {
                            console.error('AJAX error:', error);
                        }
                    });
                

                    // validation for pincode
                     if (currentId == "company_pincode") {
                        pincode =$("#"+currentId).val()
                        if (pincode === '')
                         {
                
                            alert_message("failure", "Error", "Pincode is required.");
                            return;
                         }
                        else
                        {
                            let regex = new RegExp(/^[1-9]{1}[0-9]{2}\s{0,1}[0-9]{3}$/);
                            if (!regex.test(pincode)) {
                            alert_message("failure", "Error", "Invalid Pincode. Please enter a valid Pincode of India.");
                            $(this).focus(); 
                            return;
                             }
                        }
                    }
                    // validation for email
                    if (currentId == "company_email") {
                        email =$("#"+currentId).val()
                        if (email === '')
                         {
                            alert_message("failure", "Error", "Email is required.");
                            return;
                         }
                        else
                        {
                            let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
                            if (!emailRegex.test(email)) {
                                alert_message("failure", "Error", "Invalid Email. Please enter a valid email address.");
                            $(this).focus(); 
                            return;
                             }
                        }
                       
                    }

                    // validation for website
                    if (currentId == "company_website")
                    {
                        website =$("#"+currentId).val()
                        if (website !== '')
                        {
                            let websiteRegex = /^(http[s]?:\/\/){0,1}(www\.)?[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}[.]{0,1}$/;
                            if (!websiteRegex.test(website)) 
                            {
                                alert_message("warning", "Warning", "Invalid Website URL. Please enter a valid Website URL.");
                                $(this).focus();
                                return;
                             }
                        }
                    }

                     // validation fr telephone
                     if (currentId == "company_telephone")
                    {
                        telephone =$("#"+currentId).val()
                        if (telephone !== '')
                        {
                            let telephoneRegex = /^[0-9]{10}$/;
                            if (!telephoneRegex.test(telephone)) {
                                alert_message("warning", "Warning", "Invalid Telephone Number. Please enter a valid 10-digit Telephone Number.");
                                return;
                            }
                        }
                    }

                     // validation for address
                     if (currentId.startsWith("company_address_")) 
                    {
                        var addressLine1 = $('#company_address_1').val().trim();
                        var addressLine2 = $('#company_address_2').val().trim();
                        var addressLine3 = $('#company_address_3').val().trim();
                        var addressLine4 = $('#company_address_4').val().trim();
                        var addressLine5 = $('#company_address_5').val().trim();

                        if (addressLine1 === '' && addressLine2 === '' && addressLine3 === '' && addressLine4 === '' && addressLine5 === '') {
                            alert_message("failure", "Error", "Please enter at least one address field.");
                            $(this).focus();
                            return;
                        }
                    }

                     // validation for financial year
                     if (currentId == "financial_year_begin_date") 
                    {
                        var selectedDate = new Date($('#financial_year_begin_date').val());
                        var currentYear = new Date().getFullYear();

                        if (isNaN(selectedDate)) {
                            alert_message("failure", "Error", "Please enter a valid date.");
                            return;
                        }

                        if (selectedDate.getFullYear() > currentYear) {
                            alert_message("failure", "Error", "Financial Year Beginning date cannot be in the future.");
                            return;
                        }
                    }

                while (next < 1200) {
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


 


});
////////////
</script>

<script>
	    var alterSubmenu 		        = $('#btnaltercompany');
        var selectLinkSubmenu 		    = $('#company_select_link');
        var financialyearmasterSubmenu 	= $('#btnfinancialyearmaster');
        var createfinancialyearSubmenu 	= $('#btncreatefinancialyear');
        var companyfeaturesSubmenu 	    = $('#btnalter_company_features');

    function disableSubmenu() {

       
        if (alterSubmenu  && selectLinkSubmenu && financialyearmasterSubmenu && createfinancialyearSubmenu && companyfeaturesSubmenu ) {
            $('#btnaltercompany ,#company_select_link,#btnfinancialyearmaster,#btncreatefinancialyear,#btnalter_company_features ').addClass('inactive-link');
           
        }
    }

    function enableSubmenu() {
        alert("hai");
         if (alterSubmenu  && selectLinkSubmenu && financialyearmasterSubmenu && createfinancialyearSubmenu && companyfeaturesSubmenu ) {
            $('#btnaltercompany ,#company_select_link,#btnfinancialyearmaster,#btncreatefinancialyear,#btnalter_company_features ').removeClass('inactive-link');
            
           
        }
    }
   
 

    </script>



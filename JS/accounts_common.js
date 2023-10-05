// <!-- ========================================================
//                 For Script Start Here 
// ===========================================================-->

// Local Storage Initialize
localStorage.setItem("lastFocusInputClass",'');
localStorage.setItem("lastFocusInputClassNew",'');

// <!--  For Modal within Modal Z-Index Value Start Here -->

    // var modal_lv = 0;
    // var modal_backdrop_lv = 0;
    // $('.modal').on('shown.bs.modal', function (e) {
    //     var dataBackdropValue = $(this).attr('data-backdrop');
    //     if( dataBackdropValue === "static")
    //     {
    //         $('.modal-backdrop:last').css('zIndex',1051+modal_backdrop_lv);
    //         $(e.currentTarget).css('zIndex',1052+modal_lv);
    //         modal_backdrop_lv++;
    //         modal_lv++;
    //     }
    // });

// <!--  For Modal within Modal Z-Index Value End Here -->


// <!----------------------------------------------------------------------------------
//     For Modal Open & Close Based on Cursor Focus On Input Field Start Here 
// ------------------------------------------------------------------------------------->

    // For All Input Feild When the input feild focus automatically modal open without backdrop & Close
    
    $('.without_backdrop_modal').focus(function(){
        var withoutBackdrop = $(this).attr('data-target');

        // open bootsrap modal
        setTimeout(function(){
            $(withoutBackdrop).modal({
                backdrop: false,
                keyboard: false
            });
        },100);

        setTimeout(function(){

            $(withoutBackdrop).on("shown.bs.modal", function () { 
            }).modal('show');

        },100);
        

        

    }).blur(function(){
        var withoutBackdrop = $(this).attr('data-target');

        setTimeout(function(){

            $(withoutBackdrop).on("hidden.bs.modal", function () { 
            }).modal('hide');

        },50);

    });

    // For All Input Feild When the input feild focus automatically modal open with backdrop
    $('.with_backdrop_modal').focus(function(){
        var withBackdrop = $(this).attr('data-target');
        var selectIndexValue = $(this).attr('tabindex');
        // open bootsrap modal
        $(withBackdrop).modal({
            backdrop: false,
            keyboard: false
        });
        $(withBackdrop).on("shown.bs.modal", function () { 
        }).modal('show');

        var z = '';
        if(z == '')
        {
            localStorage.setItem("lastFocusInputClass", selectIndexValue);
            z = localStorage.getItem("lastFocusInputClass");
        }
        else if(z !== '')
        {
            localStorage.setItem("lastFocusInputClassNew", selectIndexValue); 
        }

    });

    // For All Input Feild When the input feild Blur automatically modal open with backdrop
    // $('.with_backdrop_modal_blur').blur(function(){
    //     var withBackdropBlur = $(this).attr('data-target');
    //     var selectIndexValue = $(this).attr('tabindex');
    //     //open bootsrap modal
    //     $(withBackdropBlur).modal({
    //         backdrop: false,
    //         keyboard: false
    //     });

    //     $(withBackdropBlur).on("shown.bs.modal", function () { 
    //     }).modal('show');

    //     var z = '';
    //     if(z == '')
    //     {
    //         localStorage.setItem("lastFocusInputClass", selectIndexValue);
    //         z = localStorage.getItem("lastFocusInputClass");
    //     }
    //     else if(z !== '')
    //     {
    //         localStorage.setItem("lastFocusInputClassNew", selectIndexValue); 
    //     }

    // });

    $('.with_backdrop_modal_blur').keydown(function (e) {
        if (e.shiftKey && e.keyCode == 9) {
        }
        else if (e.keyCode == 13 || e.keyCode == 9) {//tab integration
        var withBackdropBlur = $(this).attr('data-target');
        var selectIndexValue = $(this).attr('tabindex');
        //open bootsrap modal
        $(withBackdropBlur).modal({
            backdrop: false,
            keyboard: false
        });

        $(withBackdropBlur).on("shown.bs.modal", function () { 
        }).modal('show');

        var z = '';
        if(z == '')
        {
            localStorage.setItem("lastFocusInputClass", selectIndexValue);
            z = localStorage.getItem("lastFocusInputClass");
        }
        else if(z !== '')
        {
            localStorage.setItem("lastFocusInputClassNew", selectIndexValue); 
        }

    }
});

      //this function helps to remove modal and focus previous modal next input field when you click enter key or tab
    $('.modal_last_input_field').keydown(function (e) {
    if (e.keyCode == 13 || e.keyCode == 9) {//tab integration
       
        var modal_close = $(this).attr('data-target');
        //open bootsrap modal
        $(modal_close).on("hidden.bs.modal", function () { 
        }).modal('hide');
        $('.modal-backdrop:last').remove();
        var a = localStorage.getItem("lastFocusInputClass"); 
        var b = localStorage.getItem("lastFocusInputClassNew"); 
        var pageId = $('.layout-navbar-fixed').attr('id');
        // alert(pageId);
        if(b != '') 
        {
            b = parseInt(b) + 1;
            $('.modal.show').last().find("[tabindex='" + b + "']").focus();

            // To get the correct focus into the specified element other wise not get focused
            setTimeout(function(){$("#" + pageId).find("[tabindex='" + b + "']").focus();},1);
            localStorage.setItem("lastFocusInputClassNew",'');
        }
        else
        {
            a = parseInt(a) + 1;

            $('.modal.show').last().find("[tabindex='" + a + "']").focus();

            // To get the correct focus into the specified element other wise not get focused
            setTimeout(function(){$("#" + pageId).find("[tabindex='" + a + "']").focus();},1);
            localStorage.setItem("lastFocusInputClass",'');
        }
        }
    });

// <!----------------------------------------------------------------------------------
//     For Modal Open & Close Based on Cursor Focus On Input Field End Here 
// ------------------------------------------------------------------------------------->

// <!----------------------------------------------------------------------------------
//     For Modal Open Based on Select valu = Yes Start Here 
// ------------------------------------------------------------------------------------->

    $('.with_backdrop_modal_val_yes').on('change', function(){
        var withoutBackdropValYesDataTarget = $(this).attr('data-target');

        var selectIndexValue = $(this).attr('tabindex');

            if( this.value === "yes" )
            {
                // open bootsrap modal
                $(withoutBackdropValYesDataTarget).modal({
                    backdrop: false,
                    keyboard: false
                });

                $(withoutBackdropValYesDataTarget).on("shown.bs.modal", function () { 
                }).modal('show');
                
                
                var z = localStorage.getItem("lastFocusInputClass");
                
                if(z === '')
                {
                    
                    localStorage.setItem("lastFocusInputClass", selectIndexValue);
                }
                else
                {
                    localStorage.setItem("lastFocusInputClassNew", selectIndexValue); 
                }

            }
    });


    $('.with_backdrop_modal_val_yes').keydown(function (e) {
        if (e.keyCode == 13) {//enter integration
            var withoutBackdropValYesDataTarget = $(this).attr('data-target');

        var selectIndexValue = $(this).attr('tabindex');

            if( this.value === "yes" )
            {
                // open bootsrap modal
                $(withoutBackdropValYesDataTarget).modal({
                    backdrop: false,
                    keyboard: false
                });

                $(withoutBackdropValYesDataTarget).on("shown.bs.modal", function () { 
                }).modal('show');
                
                
                var z = localStorage.getItem("lastFocusInputClass");
                
                if(z === '')
                {
                    
                    localStorage.setItem("lastFocusInputClass", selectIndexValue);
                }
                else
                {
                    localStorage.setItem("lastFocusInputClassNew", selectIndexValue); 
                }

            }
         }
        });
    
// <!----------------------------------------------------------------------------------
//     For Modal Open Based on Select valu = Yes End Here 
// ------------------------------------------------------------------------------------->

// <!-------------------------------------------------------------------------------------
//  All Modal Close & New Modal Open Function Start Here 
// ------------------------------------------------------------------------------------->

    function closeAllModal (modalId)
    {
        $("#" + modalId).hide();
        $("#" + modalId).removeClass('show');
        // $("#" + modalId).remove();
        $('.modal-backdrop').remove();
    }

    function openModal (modalId)
    {
        // $("#" + modalId).show();
        $("#" + modalId).modal({
        show: true,
        backdrop: false,
        keyboard: false
    });
    }
 
      
    // function openCloseModal() {
    //     var companyName = $('#CompanyName').val();
      
    //     console.log('Company Name:', companyName); // Debug statement
      
    //     // Validate the company name field
    //     if (companyName.trim() === '') {
    //       // Display an error message or prevent the action
    //       console.log('Validation failed: Company name is required.'); // Debug statement
    //       alert('Company name is required.');
    //       return; // Stop the execution here
    //     }
      
    //     // If the validation passes, proceed with opening the modal
    //     console.log('Validation passed: Opening the modal.'); // Debug statement
    //     closeAllModal("accept");
    //     closeAllModal("company_creation");
    //     closeAllModal("payment");
    //     openModal("company_features"); // Replace 'company_features' with the correct modal ID
    //   }
      
      

    // function openCloseModal()
    // {
    //     closeAllModal("accept");
    //     closeAllModal("company_creation");
    //     closeAllModal("payment");
    //     openModal("company_features");
    // }

// <!-------------------------------------------------------------------------------------
//      All Modal Close & New Modal Open Function End Here 
// ------------------------------------------------------------------------------------->

// <!-------------------------------------------------------------------------------------
//  Dynamically Enbaled and Disabled JavaScript for all select box based on value Start Here 
// ------------------------------------------------------------------------------------->

    // script for enable and disable for sub features
    $('.enabled_disabled_select').change(function () {

        var enabledDisabled = $(this).parent().parent().attr('id');
        if( this.value === "yes" )
        {
            $('#' + enabledDisabled + ' .sub_features_select').addClass('enable');
            $('#' + enabledDisabled + ' .sub_features').addClass('enabled');
            $('#' + enabledDisabled + ' .sub_features').removeClass('disabled');
            $('#' + enabledDisabled + ' .sub_features .sub_features_select').removeAttr('disabled');
            // $('#' + enabledDisabled + ' .sub_features .sub_features_select').attr('enabled', true);
        }
        else if( this.value === "no")
        {
            $('#' + enabledDisabled + ' .sub_features_select').removeClass('enable');
            $('#' + enabledDisabled + ' .sub_features').addClass('disabled');
            $('#' + enabledDisabled + ' .sub_features').removeClass('enabled');
            $('#' + enabledDisabled + ' .sub_features .sub_features_select').removeAttr('enabled');
            $('#' + enabledDisabled + ' .sub_features .sub_features_select').attr('disabled', true).val('no');
            $('#' + enabledDisabled + ' .under_sub_features').addClass('disabled');
            $('#' + enabledDisabled + ' .under_sub_features').removeClass('enabled');
            $('#' + enabledDisabled + ' .under_sub_features .under_sub_features_select').removeAttr('enabled');
            $('#' + enabledDisabled + ' .under_sub_features .under_sub_features_select').attr('disabled', true).val('no');
        }

    });


    // script for enable and disable for under sub features
    $('.sub_features_select').change(function(){

        var enabledDisabled1 = $(this).parent().parent().attr('id');
        if( this.value === "yes")
        {
            $('#' + enabledDisabled1 + ' .under_sub_features .under_sub_features_select').addClass('enable');
            $('#' + enabledDisabled1 + ' .under_sub_features').addClass('enabled');
            $('#' + enabledDisabled1 + ' .under_sub_features').removeClass('disabled');
            $('#' + enabledDisabled1 + ' .under_sub_features .under_sub_features_select').removeAttr('disabled');
            $('#' + enabledDisabled1 + ' .under_sub_features .under_sub_features_select').attr('enabled', true);
        }
        else if( this.value === "no")
        {
            $('#' + enabledDisabled1 + ' .under_sub_features .under_sub_features_select').removeClass('enable');
            $('#' + enabledDisabled1 + ' .under_sub_features').addClass('disabled');
            $('#' + enabledDisabled1 + ' .under_sub_features').removeClass('enabled');
            $('#' + enabledDisabled1 + ' .under_sub_features .under_sub_features_select').removeAttr('enabled');
            $('#' + enabledDisabled1 + ' .under_sub_features .under_sub_features_select').attr('disabled', true);
        }
    });
    
// <!-------------------------------------------------------------------------------------
//  Dynamically Enbaled and Disabled JavaScript for all select box based on value Start Here 
// ------------------------------------------------------------------------------------->

// <!-------------------------------------------------------------------------------------
//      All Modal Open autofocus on .autofocus class added input Field Start Here 
// ------------------------------------------------------------------------------------->

////////////////////////////// For Autofocus inputfield inside modal///////////////////////////////////////////
    $('.modal').on('shown.bs.modal', function() {
        var MODAL_ID = $(this).attr('id');
        $('#' + MODAL_ID + ' .autofocus').focus();
    
        // Script For Up and Down Arrow to Control Menu & Selected Value add to input field(inpu,select,etc..)
        var li = $('#' + MODAL_ID + ' .mainMenu li');
        var liSelectedClass = $('#' + MODAL_ID + ' .mainMenu li.selected');
        var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');

        $('.input_data_value_up_down:focus').val(liSelectedClassValue);

        $(window).keydown(function(e) {
            if (e.which === 40) { // Down Arrow

                if (liSelectedClass) {
                    liSelectedClass.removeClass('selected');    
                    next = liSelectedClass.next();
                    var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                    $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                    if (!next.hasClass('card-text')) {
                        next = next.next();
                        var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                        $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                    }
                    if (next.length > 0) {
                        liSelectedClass = next.addClass('selected');
                        var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                        $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                    } else {
                        liSelectedClass = li.eq(0).addClass('selected');
                        var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                        $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                    }
                } else {
                    liSelectedClass = li.eq(0).addClass('selected');
                    var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                    $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                }

            } else if (e.which === 38) { // Up Arrow
                
                if (liSelectedClass) {
                    liSelectedClass.removeClass('selected');
                    prev = liSelectedClass.prev();
                    var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                    $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                    if (!prev.hasClass('card-text')) {
                        prev = prev.prev();
                        var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                        $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                    }
                    if (prev.length > 0) {
                        liSelectedClass = prev.addClass('selected');
                        var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                        $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                    } else {
                        liSelectedClass = li.last().addClass('selected');
                        var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                        $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                    }
                } else {
                    liSelectedClass = liSelectedClass.removeClass('selected');
                    liSelected = liSelectedClass.prev().addClass('selected');
                    var liSelectedClassValue = $('#' + MODAL_ID + ' .mainMenu li.selected a').data('value');
                    $('.input_data_value_up_down:focus').val(liSelectedClassValue);
                }
                
            }
        });
        
    });


// <!-------------------------------------------------------------------------------------
//       All Modal Open autofocus on .autofocus class added  input Field Start Here  
// ------------------------------------------------------------------------------------->

// <!-------------------------------------------------------------------------------------
//  Dynamically Enbaled and Disabled JavaScript for all select box based on value Start Here 
// ------------------------------------------------------------------------------------->


    $(document).ready(function() {
        $('.show_hide_select').on('change keydown', function(event){
            console.log("dropdown changed");
            var show_hide = $(this).parent().parent().attr('id');
            if (event.type === 'change' && this.value === "yes") {
                $('#' + show_hide + ' .sub_features').addClass('d-block');
                $('#' + show_hide + ' .sub_features').removeClass('d-none');
            } else if (event.type === 'keydown' && event.key === 'Tab' && this.value === "no") {
                console.log("Showing modal...");
                event.preventDefault();
                $('#myModal').modal('show');
            }
        });
    });
  
    //////////////////////////////// FOR GST MODAL////////////////////////////////

    // $(document).ready(function() {
    //     // Handle the "Save" button click event for gst 
    //     $('#save-btn-gst').click(function() {
    //       // for saving
    //         var gstModal = $('#company_features');
    //         var modal = new bootstrap.Modal(gstModal[0]);
    //         modal.show();
    //     });
    // });

     //////////////////////////////// END OF GST MODAL////////////////////////////////


 /////////////////////////////// FOR TDS MODAL///////////////////////////////////////
//  For selecting tds modal for saving from the input element (Activate TDS for Stock Items)
//  $(document).ready(function() {
//     $('.my_select').on('change', function() {
//         var value = $(this).val();
//         if(value == 'yes' || value == 'no') {
//             $('#save_tds_details_modal').modal('show');
//         }
//     });


    
// });
 /////////////////////////////// END FOR TDS MODAL////////////////////////////////////

      
    
// <!-------------------------------------------------------------------------------------
//  Dynamically Enbaled and Disabled JavaScript for all select box based on value Start Here 
// ------------------------------------------------------------------------------------->

// <!-------------------------------------------------------------------------------------
//  Script for select a row when cursor focus on input or select tag Start Here 
// ------------------------------------------------------------------------------------->

// Script For input field focus row background color change Start Here
var inputs = document.getElementsByTagName("input");
for(var i = 0; i < inputs.length; i++) {
    // Is it the child of a row?
    
    var el = inputs[i];
    while(el = el.parentNode) {
        if(el.nodeName.toLowerCase() === 'tr') {
            inputs[i].onfocus = function() {
                this.parentRow.style.backgroundColor = '#fee8af';
               // for input field in same row
                var inputs = this.parentRow.getElementsByTagName("input");
                
                $(inputs).each(function(){
                    this.style.backgroundColor = '#fee8af';
                    });
            };

            inputs[i].onblur = function() {
                this.parentRow.style.backgroundColor = '';
                var inputs = this.parentRow.getElementsByTagName("input");
                
                $(inputs).each(function(){
                    this.style.backgroundColor = '';
                    });
            };
            inputs[i].parentRow = el;
            break;
        }
    }
}


// Script For Select Tag focus row background color change Start Here
var selects = document.getElementsByTagName("select");
for(var i = 0; i < selects.length; i++) {
    // Is it the child of a row?
    var el = selects[i];
    while(el = el.parentNode) {
        if(el.nodeName.toLowerCase() === 'tr') {
            selects[i].onfocus = function() {
                this.parentRow.style.backgroundColor = '#fee8af';
               // for Select Tag field in same row
                var selects = this.parentRow.getElementsByTagName("select");
                
                $(selects).each(function(){
                    this.style.backgroundColor = '#fee8af';
                    });
            };
            selects[i].onblur = function() {
                this.parentRow.style.backgroundColor = '';
                var selects = this.parentRow.getElementsByTagName("select");
                
                $(selects).each(function(){
                    this.style.backgroundColor = '';
                    });
            };
            selects[i].parentRow = el;
            break;
        }
    }
}

const modalBody = document.querySelector('#company_select .modal-body');



// <!-------------------------------------------------------------------------------------
//  Script for select a row when cursor focus on input or select tag End Here 
// ------------------------------------------------------------------------------------->

document.addEventListener('keydown', function (event) {
    // console.log("KEY DOWN LISTEED");

    if (event.altKey && event.key.toLowerCase() === 'k') {
        // alert("k press");
        var dropdownToggle = document.querySelector('#companydropdownMenuButton');
        dropdownToggle.click();
    }
    // else if ((event.key === 's' || event.key === 'S') && $("#save_tcs_details_modal").hasClass("show") && $("#tcs_details_modal").hasClass("show")){
    //     alert("s press");
    //     document.getElementById('save-btn-tcs').click();
     
    // }
    else if (event.altKey && event.key.toLowerCase() === 'y') {
        var dropdownToggle = document.querySelector('#dataMenuButton');
        dropdownToggle.click();
    } else if (event.altKey && event.key.toLowerCase() === 'z') {
        var dropdownToggle = document.querySelector('#exchangedropdownMenuButton');
        dropdownToggle.click();
    }
    else if (event.altKey && event.key.toLowerCase() === 'o') {

        var dropdownToggle = document.querySelector('#importdropdownMenuButton');
        dropdownToggle.click();
    }
    else if (event.altKey && event.key.toLowerCase() === 'e') {
        var dropdownToggle = document.querySelector('#exportdropdownMenuButton');
        dropdownToggle.click();
    }

    else if (event.altKey && event.key.toLowerCase() === 'p') {
        var dropdownToggle = document.querySelector('#printdropdownMenuButton');
        dropdownToggle.click();
    } 
   else if (event.ctrlKey && event.key === 'F3') {
        if ($("#dropdown_Comapany").hasClass("show")) {
            alert("Shut");
        }
    }
   else if (event.altKey && event.key === 'F3') {
        if ($("#dropdown_Comapany").hasClass("show")) {
            event.preventDefault();
            if ($("#dropdown_Comapany").hasClass("show")) {
             
               
                 $('#company_select_link').click(); 
                loadCompanyDetails();
                $('#company_select').modal('show');
               
              } 
        }
    }
    else if (event.altKey && event.key === 'F1') {
        var dropdownToggle = document.querySelector('#helpdropdownMenuButton');
        dropdownToggle.click();
    }
    else if (event.ctrlKey && event.key === 'F1') {
        if ($("#help_drop_down").hasClass("show")) {
            alert("Tally help");
        }
    }
    else if (event.altKey && event.key.toLowerCase() === 'm') {

        var dropdownToggle =  document.querySelector('#emaildropdownMenuButton');
        dropdownToggle.click();
        
    }
    else if (event.key.toLowerCase() === 'm') {
        if ($("#dropdown_import").hasClass("show")) {
            alert("master");
        }
        else if ($("#dropdown_export").hasClass("show")) {
            alert("master-export");
        }
    

    }
    else if (event.key.toLowerCase() === 'n') {
        if ($("#dropdown_exchange").hasClass("show")) {
            alert("Data Syncrinisation");
        }
        else if ($("#dropdown_import").hasClass("show")) {
            alert("import Configuration");
        }
        else if ($("#dropdown_export").hasClass("show")) {
            alert("export Configuration");
        }
        else if ($("#dropdown_mail").hasClass("show")) {
            alert("mail configuration");
        }
        else if ($("#dropdown_print").hasClass("show")) {
            alert("print configuration");
        }
        else if ($("#help_drop_down").hasClass("show")) {
            alert("whats new");
        }
        
    }
    else if (event.key.toLowerCase() === 'o') {
        if ($("#dropdown_export").hasClass("show")) {
            alert("Print others");
        }
        else if ($("#dropdown_print").hasClass("show")) {
            alert("others");
        }
        else if ($("#dropdown_mail").hasClass("show")) {
            alert("mail others");
        }
        else if ($("#help_drop_down").hasClass("show")) {
            alert("TDLS&ADDONS");
        }
       
    }
    else if (event.key.toLowerCase() === 'b') {
        if ($("#dropdown_Data").hasClass("show")) {
            alert("Back Up");
        }
        else if ($("#dropdown_import").hasClass("show")) {
            alert("Bank Details");
        }
        else if ($("#help_drop_down").hasClass("show")) {
            alert("ABOUT");
        }
    }
    else if (event.key.toLowerCase() === 't') {
        if ($("#dropdown_import").hasClass("show")) {
            alert("import transaction");
        }
        else if ($("#dropdown_export").hasClass("show")) {
            alert("export transaction");
        }
        else if ($("#help_drop_down").hasClass("show")) {
            alert("Tally Shop");
        }
    }
    else if (event.key.toLowerCase() === 's') 
    {
        if ($("#accept").hasClass("show") && $("#company_creation").hasClass("show")) {
    
            document.getElementById('saveBtn').click();
        }
       else if ($("#help_drop_down").hasClass("show")) {
            alert("settings-help");
        }

        else if ($("#dropdown_Comapany").hasClass("show"))
         {
            alert("select");
        }
        else if ($("#dropdown_Data").hasClass("show")) {
            alert("split");
        }
        // for tds modal saving 
        // else if($("#save_tds_details_modal").hasClass("show")){
            
        //     document.getElementById('save-btn-tds').click();
        //     $('#tds_details_modal').modal('hide'); // Hide the current modal
        //     $('#company_features').modal('show'); // Show the previous modal
  
        // }
        // else if($("#save_tcs_details_modal").hasClass("show")){
        //     document.getElementById('save-btn-tcs').click();
        //     $('#tcs_details_modal').modal('hide'); // Hide the current modal
        //     $('#company_features').modal('show'); // Show the previous modal
        // }
        //for gst modal saving
        // else if($("#gst_modal").hasClass("show")){
        //     alert("SAve");
        //     document.getElementById('save-btn-gst').click();
        //     // alert("inside save-btn-gst");
        //     $('#gstModal').modal('hide');
        //     $('#gst_modal').modal('hide'); // Hide the current modal
        //     $('#company_features').modal('show'); // Show the previous modal
  
        // }
        
    }
    else if (event.key.toLowerCase() === 'r') {
        if ($("#dropdown_Data").hasClass("show")) {
            alert("restore");
        }
       else if ($("#help_drop_down").hasClass("show")) {
            alert("trouble shooting");
        }

    }
    else if (event.key.toLowerCase() === 'd') {
        if ($("#dropdown_Data").hasClass("show")) {
            alert("Data Path");
        }
    }
    else if (event.key.toLowerCase() === 'h') {
        if ($("#help_drop_down").hasClass("show")) {
            alert("Tally help");
        }
       else if ($("#dropdown_Comapany").hasClass("show")) {
            alert("shut");
        }
        
    }
    else if (event.key.toLowerCase() === 'u') {
        if ($("#help_drop_down").hasClass("show")) {
            alert("Upgrade");
        }
    }
    else if (event.key.toLowerCase() === 'g') {
        if ($("#dropdown_Comapany").hasClass("show")) {
            alert("change");
        }
    }
    else if (event.key.toLowerCase() === 'c') {
        if ($("#dropdown_Comapany").hasClass("show")) {
            document.getElementById('btnaltercompany').click();
        }
        else if($("#accept").hasClass("show") && $("#company_creation").hasClass("show"))
         {  
            document.getElementById('company_creation_close').click();
        }
        else if($("#gstModal").hasClass("show"))
         {  
            document.getElementById('btn_gst_cancel').click();
        }

       
    }
    else if (event.key.toLowerCase() === 'a') {
        if ($("#dropdown_Comapany").hasClass("show")) {
            document.getElementById('btnaltercompany').click();
        }
    }
    else if (event.key === 'F3')
    {
        if ($("#dropdown_Comapany").hasClass("show")) {
            alert("change");
        }
    }
   
  
});
//////////////////////////    END OF KEY INTEGRATION //////////////////////////////

////////////////////////START OF STACK IMPLEMENTATION//////////////////////////


// $( document ).ready(function() {
//     console.log( "ready!" );

//     var modalStack = []; // initialize the stack

//     // function to add a modal ID to the stack
//     function pushModalId(modalId) { 
//     modalStack.push(modalId);
//     console.log("Pushed modals are: " + modalStack); 
//     }


//     function popModalId() {
//     if (modalStack.length === 0) {
//         return;
//     }

//     var currentModalId = modalStack[modalStack.length - 1];
//     console.log("Last modal in the stack is: " + currentModalId);
//     $('#' + currentModalId).modal('hide');
//     modalStack.pop();
//     console.log("Popped modal is: " + currentModalId);

//     if (modalStack.length > 0) 
//     {
//         var prevModalId = modalStack[modalStack.length - 1];
//         $("#" + prevModalId).modal("hide");
//         $('#' + prevModalId).css('display', 'none');
//     }

//     if (modalStack.length >= 2) { // check if there are at least two modals in the stack
//         var prevModalId = modalStack[modalStack.length - 2];
//         setTimeout(function() {
//         $('#' + prevModalId).css('display', 'block');
//         $('#' + prevModalId).addClass('show');
//         $('#' + prevModalId).find(':select').focus(); // select the first element of the previous modal
//         console.log("Previous modal is: " + prevModalId);
//         }, 500); 
//      } 
//     else if (modalStack.length == 1) { // check if there is only one modal in the stack
//         var prevModalId = modalStack[modalStack.length - 1];
//         setTimeout(function() {
//         $('#' + prevModalId).css('display', 'block');
//         $('#' + prevModalId).addClass('show');
//         $('#' + prevModalId).find(':input:not(:disabled):not([readonly]):not(:hidden):first').focus(); // select the first element of the previous modal
//         console.log("Previous modal is: " + prevModalId);
//         }, 500); 
//     } else { // if there are no modals in the stack, display home page
//         console.log("no previous modals in stack");
     
//     }
//     }

//     // function to handle opening of modals
//     $(document).on("shown.bs.modal", ".my-modal", function () {
//     var modalId = $(this).attr("id"); // get ID of opened modal
//     console.log("Individual opened modal is: " + modalId);
//     pushModalId(modalId); // add modal ID to stack
//     });

//     $(document).on("keyup", ".my-modal", function(e) 
//     {
//     if (e.key === "Escape") { // if escape key is pressed
//         var currentModalId = $(this).attr("id"); // get ID of current modal
//         console.log("current modal id is :" + currentModalId);
//         $("#" + currentModalId).modal("hide"); // hide current modal
        
//         modalStack.pop(); // remove current modal ID from stack
//         if (modalStack.length > 0) { // if there are previous modals in the stack
//         var previousModalId = modalStack[modalStack.length - 1]; // get previous modal ID
//         console.log("previous modal id is :" + previousModalId);
//         $('#' + previousModalId).addClass('show'); // show previous
//         $('#' + previousModalId).css('display', 'block');

//             // set focus to first input element in previous modal
//         $('#' + previousModalId).find('[tabindex]:not(:disabled):not([readonly]):not(:hidden):first').focus();

//             enableSubmenu();
//         // remove the current modal from the DOM
//         $(this).remove();

//         // if there are more modals in the stack, create and show the previous modal
//         if (modalStack.length > 1) {
//             var modalContent = $("#" + previousModalId).html();
//             var newModal = '<div class="modal fade my-modal" id="' + previousModalId + '" tabindex="-1" role="dialog">' + modalContent + '</div>';
//             $(newModal).appendTo('body');
//             $('#' + previousModalId).modal('show');
//         }
//         var prev_focus_id=$(this).attr("data-value");
//         alert(prev_focus_id);
//         $(this).modal("hide");
        
//         $("#"+prev_focus_id).focus();

//         } 
//         else { // if there are no previous modals in the stack
//         console.log("no previous modals in stack");
        
//         }
//     }
// });

// });
  

$(document).ready(function() {
    console.log("ready!");
  
    var modalStack = []; // initialize the stack
  
    function pushModalId(modalId) {
      modalStack.push(modalId);
      console.log("Pushed modals are: " + modalStack); // log contents of the modalStack array
    }
  
    function popModalId() {
      if (modalStack.length === 0) {
        console.log("No previous modals in stack");
        
        return;
      }
  
      var currentModalId = modalStack.pop();
      console.log("Popped modal is: " + currentModalId);
  
      if (modalStack.length > 0) {
        var prevModalId = modalStack[modalStack.length - 1];
        $("#" + prevModalId).modal("show");
        console.log("Previous modal is: " + prevModalId);
      } else {
         enableSubmenu();
        // console.log("No previous modals in stack");
        // Display home page here or handle the case when there are no modals in the stack
      }
    }
  
    $(document).on("shown.bs.modal", ".my-modal", function() {
      var modalId = $(this).attr("id"); // get ID of opened modal
      console.log("Individual opened modal is: " + modalId);
      pushModalId(modalId); // add modal ID to stack
    });
  
    $(document).on("hidden.bs.modal", ".my-modal", function() {
       
      popModalId(); // remove modal ID from stack
    });
  
    $(document).on("keyup", ".my-modal", function(e) {
      if (e.key === "Escape") {
        var prev_focus_id=$(this).attr("data-value");
       
        $(this).modal("hide");
        $("#"+prev_focus_id).focus();
      }
    });
  });

  



///////////////////END OF STACK IMPLEMENTATION/////////////////////////////////



$('#masters, #masters_two,#company_select,#company_multiple_gst').on('show.bs.modal', function () {
    $('.main-header.navbar .dropdown a').addClass("disabled")
    $('.main-header.navbar .dropdown a.disabled').css({
        "color": "#888 !important",
        "pointer-events": "none"
    });
});

$('#masters, #masters_two,#company_select,#company_multiple_gst').on('hidden.bs.modal', function () {
    // Remove the click event listener when the modal is closed
    $('.main-header.navbar .dropdown a').removeClass("disabled")
    $('.main-header.navbar .dropdown a').css({
        "color": "", // Remove the color property
        "pointer-events": "" // Remove the pointer-events property
    });
});


	
// <!-- ========================================================
//                 For Script End Here 
// ===========================================================-->


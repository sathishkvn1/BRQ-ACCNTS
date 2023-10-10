<style>
.dropdown-item.inactive-link {
		pointer-events: none !important;
		cursor: default !important;
		text-decoration: none !important;
  }

	.nav-pills .nav-link {
		color: #c2c7d0;
	}

	.height-20 {
		min-height: 20px !important;
		height: 20px !important;
	}

	/* For Dropdown Backdrop */
	.dropdown.show:before {
		position: fixed;
		top: 49px;
		bottom: 0;
		left: 0;
		right: 0;
		background-color: #b6bcbf;
    	opacity: 0.8 !important;
		content: '';
		z-index: 999 !important;
	}
	.dropdown-divider {
        border-top: 1px solid  #ccc; 
        margin: 8px 0; 
    }
/* css for toast down starts here  */
#snackbar
 {
    visibility: hidden; 
    min-width: 262px;
    margin-left: -125px;
    text-align: center;
    border-radius: 2px;
    padding: 10px 6px;
    position: fixed;
    z-index: 1;
	right: 5px;
	bottom: 0px;
    font-size: 17px;
    height: fit-content;
}
#snackbar h5.title 
{
	font-weight: 700;
    padding-bottom: 9px;
}
#snackbar.success h5.title 
{
    border-bottom: 2px solid green;
}
#snackbar.warning h5.title 
{
    border-bottom: 2px solid orange;
}
#snackbar.failure h5.title 
{
    border-bottom: 2px solid red;
}
#snackbar .content {
    padding: 46px 10px;
}
#snackbar p {
    font-weight: 600;
    color: #171616;
    font-size: 14px;
    max-width: 300px;
}

#snackbar.failure
{
	background-color:white!important;
	color:red!important;
	border: 2px solid red;
	font-weight: 700;
    color: red;
}
#snackbar.warning
{
	background-color:white!important;
	color:orange!important;
	border: 2px solid orange;
	font-weight: 700;
    color: orange;
}
#snackbar.success
{
	background-color:white!important;
	color:green!important;
	border: 2px solid green;
	font-weight: 700;
    color: green;
}

#toast {
	visibility: hidden;
    min-width: 272px;
    margin-left: 0px;
    text-align: center;
    padding: 5px 17px;
    position: fixed;
    z-index: 1;
    right: 0px;
    top:50px;
    font-size: 19px;
    height: fit-content;
    border-radius: 8px;
}

#toast .title
{
    margin:4px;
    font-weight: 900;
}
#toast .content
{
    margin:4px!important;
}

#toast.success
{
	background-color: rgb(10, 146, 55)!important;
	color:white!important;
	font-weight: 500;
}

#toast.warning
{
	background-color: rgb(146, 137, 10)!important;
	color:white!important;
	font-weight: 500;
}

#toast.failure
{
	background-color: rgb(180, 32, 6)!important;
	color:white!important;
	font-weight: 500;
}
#toast.show,
#snackbar.show
{
    visibility: visible!important;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s!important;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* common taost animation starts effect */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
/* common taost animation ends effect */

</style>

<!-- ===== Nav Start ==== -->
<div class="row">
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">

		<!-- Logo Start -->
		<div class="col-lg-1">
			<a href="<?php echo base_url("accounts");?>">
				<img src="<?php echo base_url('admin-accounts/img/admin-accounts-logo.png') ?>">
			</a>
		</div>
		<!-- Logo End -->

		<!-- Left Side Start -->
		<div class="col-lg-4">
			<ul class="navbar-nav">
				<li class="nav-item">
					<div class="dropdown" id="dropdown_Comapany">
						<a href="#" class="nav-link" id="companydropdownMenuButton" data-toggle="dropdown">
							<span>K</span><span>:</span>Company
						</a>
						<div class="dropdown-menu">
						<!-- data-toggle="modal"  data-target="#company_select" -->
							
							<a class="dropdown-item" href="#" id="btncreate" data-backdrop="false" onclick="companyCreation(); disableSubmenu();" tabindex="-1" autofocus><span>C</span>reate</a>
							<a class="dropdown-item" href="#" data-toggle="modal" id="btnaltercompany" data-target="#company_creation" onclick="disableSubmenu();" data-backdrop="false" tabindex="-1" autofocus><span>A</span>lter</a>
							
							<a class="dropdown-item" href="#" id="company_select_link" data-backdrop="false" onclick="disableSubmenu();" autofocus tabindex="-1"><span>S</span>elect <span class="right">Alt + F3</span></a>
							<div class="dropdown-divider"></div>
							 <a class="dropdown-item" href="#" data-toggle="modal" id="btnfinancialyearmaster" data-target="#financial_year_master" onclick="disableSubmenu();" tabindex="-1"><span>F</span></span>inancial Year Master</a> 
						
							<a class="dropdown-item" href="#" data-toggle="modal" id="btncreatefinancialyear" data-target="#create_new_financial_year_modal" onclick="disableSubmenu();" tabindex="-1">C<span>r</span></span>eate Financial Year</a>
							
							<div class="dropdown-divider"></div>
							<a class="dropdown-item"  href="#"  id="btnalter_company_features" data-backdrop="false" onclick="disableSubmenu();" tabindex="-1" autofocus><span>F</span>eatures</a>
							<!-- <a class="dropdown-item" href="<-?php echo base_url('AccountsInventory/inventory_master_settings'); ?>" tabindex="-1" autofocus><span>I</span>nventory</a> -->
		
						</div>
					</div>
				</li>
				<li class="nav-item">
					<div class="dropdown" id="dropdown_Data">
						<a href="#" class="nav-link" id="dataMenuButton" data-toggle="dropdown">
							<span>Y</span><span>:</span>Inventory
						</a>
						<div class="dropdown-menu">
							<p class="inside_content_p">INVENTORY DATA</p>
							<!-- <a class="dropdown-item" href="<-?php  echo base_url("AccountsInventory/inventory_master_settings") ?>" tabindex="-1" autofocus><span>I</span>nventory Master Settings</a> -->
							<a class="dropdown-item" href="<?php echo base_url('AccountsInventory/inventory_master_settings'); ?>?source=fromHeaderNav">
								<span>I</span>nventory Master Settings
							</a>

							<a class="dropdown-item" href="#" tabindex="-1"><span>R</span>estore</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>S</span>plit </a>
							<p class="config_p">CONFIGURE</p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>D</span>ata Path</a>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<div class="dropdown" id="dropdown_exchange">
						<a href="#" class="nav-link" id="exchangedropdownMenuButton" data-toggle="dropdown">
							<span>Z</span><span>:</span>Exchange
						</a>
						<div class="dropdown-menu">
							<p class="config_p">CONFIGURE</p>
							<a class="dropdown-item" href="#" tabindex="-1">Data Sy<span>N</span>chronisation</a>
						</div>
					</div>
				</li>
				</ul>
		</div>
		<!-- Left Side End -->

		<!-- Center Start -->
		<div class="col-lg-2">
			<a href="#" class="nav-link go-to" tabindex="-1"><span>G</span<span>:</span>Go To</a>
		</div>
		<!-- Center End -->

		<!-- Right Start -->
		<div class="col-lg-5">
			<ul class="navbar-nav" style="margin:0 60px 0 -60px;">
				<li class="nav-item">
					<div class="dropdown" id="dropdown_import">
						<a href="#" class="nav-link" id="importdropdownMenuButton" data-toggle="dropdown">
							<span>O</span><span>:</span>Import
						</a>
						<div class="dropdown-menu">
							<p class="inside_content_p">COMPANY DATA</p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>M</span>aster</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>T</span>ransaction</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>B</span>ank Details</a>
							<a class="dropdown-item configuration" href="#" tabindex="-1">Co<span>N</span>figuration</a>
						</div>
					</div>
				</li>
				<li class="nav-item">
					<div class="dropdown" id="dropdown_export">
						<a href="#" class="nav-link" id="exportdropdownMenuButton" data-toggle="dropdown">
							<span>E</span><span>:</span>Export
						</a>
						<div class="dropdown-menu">
							<p class="inside_content_p">REPORTS</p>
							<p class="light_gray_shade">CuRrent<span class="right">Ctrl+E</span></p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>O</span>thers</a>
							<p class="inside_content_p">COMPANY DATA</p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>M</span>asters</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>T</span>ransactions</a>
							<a class="dropdown-item configuration" href="#" tabindex="-1">Co<span>N</span>figuration</a>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<div class="dropdown" id="dropdown_mail">
						<a href="#" class="nav-link" id="emaildropdownMenuButton" data-toggle="dropdown">
							<span>M</span><span>:</span>Email
						</a>
						<div class="dropdown-menu">
							<p class="inside_content_p">REPORTS</p>
							<p class="light_gray_shade">CuRrent<span class="right">Ctrl+M</span></p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>O</span>thers</a>
							<a class="dropdown-item configuration" href="#" tabindex="-1">Co<span>N</span>figuration</a>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<div class="dropdown" id="dropdown_print">
						<a href="#" class="nav-link" id="printdropdownMenuButton" data-toggle="dropdown">
							<span>P</span><span>:</span>Print
						</a>
						<div class="dropdown-menu">
						<p class="inside_content_p">REPORTS</p>
							<p class="light_gray_shade">CuRrent<span class="right">Ctrl+P</span></p>
							<a class="dropdown-item" href="#" tabindex="-1"><span>O</span>thers</a>
							<a class="dropdown-item configuration" href="#" tabindex="-1">Co<span>N</span>figuration</a>
							<a class="dropdown-item" href="inventory.php" tabindex="-1" autofocus><span>I</span>nventory</a>
						</div>
					</div>
				</li>

				<li class="nav-item">
					<div class="dropdown" id="help_drop_down">
						<a href="#" class="nav-link" id="helpdropdownMenuButton" data-toggle="dropdown">
							<span>F1</span><span>:</span>Help <span class="red_dot"></span>
						</a>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#" tabindex="-1" autofocus>Tally<span>H</span>elp <span class="right">ctrl+F1</span></a>
							<a class="dropdown-item" href="#" tabindex="-1">What's<span>N</span>ew</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>U</span>pgrade</a>
							<a class="dropdown-item mb-3" href="#" tabindex="-1"><span>T</span>allyShop</a>
							<a class="dropdown-item " href="#" tabindex="-1">T<span>R</span>oubleshooting</a>
							<a class="dropdown-item" href="#" tabindex="-1"><span>S</span>ettings</a>
							<a class="dropdown-item mb-3" href="#" tabindex="-1">TDLS&Add<span>O</span>ns</a>
							<a class="dropdown-item" href="#" tabindex="-1">A<span>B</span>out</a>
						</div>
					</div>
				</li>

			</ul>
		</div>
		<!-- Right End -->

		 <!-- toast  starts here -->
		 <div class="main_warning" id="snackbar">
			<h5 class="title"></h3>
			<p class="content"></p>
		</div>
		<div class="main_warning" id="toast">
			<h5 class="title"></h3>
			<p class="content"></p>
		</div>
        <!-- toast for ends here -->

	</nav>
</div>
<!-- === NAV END ==== -->

<div class="row">
	<nav class="sub-header navbar navbar-expand navbar-white navbar-light">
		<div class="col-lg-4">
			<div class="text-left">Accounting Voucher Creation</div>
		</div>
		<div class="col-lg-4 text-white">
			<div class="text-center" id="header_company_name">BRQ GLOB TECH PVT LTD</div>
		</div>
		<div class="col-lg-4">
			<div class="text-right"><i class="fas fa-times"></i></div>
		</div>
	</nav>
</div>

 <!--Modals for Headers Start Here -->
<?php include('application/views/brq-accounts/company/modals-for-header.php'); ?>
 <!--Modals for Headers End Here -->

<!-- Modals for Common Start Here -->
<!--<?php //include('modals-for-common.php'); ?>-->
<!-- Modals for Common End Here -->
<script>
function alert_message(type,title,textmsg) {
    //type values :  'success','failure','warning'
    var alertmessage_window = document.getElementById("snackbar");
    alertmessage_window.className = "show","";
    setTimeout(function(){ alertmessage_window.className = alertmessage_window.className.replace("show", ""); }, 3000);

        $('#snackbar').addClass(type);
        $("#snackbar .title").text(title);
        $("#snackbar .content").text(textmsg);
}

function toast_message(type,title,textmsg) {
    //type values :  'success','failure','warning'
    var toast_window = document.getElementById("toast");
    toast_window.className = "show","";
    setTimeout(function(){ toast_window.className = toast_window.className.replace("show", ""); }, 3000);

        $('#toast').addClass(type);
        $("#toast .title").text(title);
        $("#toast .content").text(textmsg);
}
</script>
<script>
	var company_id = <?php echo $company_id; ?>;

    if (company_id == 0) {
        var alterSubMenu                = $('#btnaltercompany');
        var financialyearSubMenu        = $('#btnfinancialyearmaster');
        var craetefinancialyearSubMenu  = $('#btncreatefinancialyear');
        var featuresSubMenu             = $('#btnalter_company_features');
         if (alterSubMenu && financialyearSubMenu &&  craetefinancialyearSubMenu && featuresSubMenu) 
            $('#btnaltercompany, #btnfinancialyearmaster, #btncreatefinancialyear, #btnalter_company_features').addClass('inactive-link');
        
    }


////////////// for altering the company///////////
$(document).on('click', '#btnaltercompany', function() {
    // console.log("btnalter click");
	var token = "<?php echo $_SESSION['li_token']; ?>";
	// console.log("Token:", token);
	var accountsController = "<?php echo CONTROLLER_ACCOUNTS;?>"; 
    $.ajax({
		url : BASE_URL + "index.php/" + accountsController + "/get_company_info",
	 	type: 'POST',
        dataType:'json',
		
        data: {  li_token: token },
        success: function(data) {
			// console.log("inside response");
			//  console.log('Company Details in response :',data); 
				$('input[name="hidden_Id"]').val('1');
				// console.log($('input[name="hidden_Id"]').val());
				$('input[name="company_name"]').val(data.company_name);
				$('input[name="company_mailing_name"]').val(data.mailing_name);
				$('input[name="company_address_1"]').val(data.address_line_1);
				$('input[name="company_address_2"]').val(data.address_line_2);
				$('input[name="company_address_3"]').val(data.address_line_3);
				$('input[name="company_address_4"]').val(data.address_line_4);
				$('input[name="company_address_5"]').val(data.address_line_5);
				$('input[name="StateInput"]').val(data.state_name);
				// fr selecting the coresponding stateid
				$('input[name="selectedStateId"]').val(data.state_id);
				$('input[name="CountryInput"]').val(data.country_name);
				// fr selecting the coresponding countryid
				$('input[name="selectedCountryId"]').val(data.country_id);
				// fr selecting the coresponding currency_id
				$('input[name="currency_id"]').val(data.base_currency_id);

				$('input[name="company_pincode"]').val(data.pin_code);
				$('input[name="company_telephone"]').val(data.phone_number);
				$('input[name="company_mobile"]').val(data.mobile_number);
				$('input[name="company_fax"]').val(data.fax_number);
				$('input[name="company_email"]').val(data.e_mail);
				$('input[name="company_website"]').val(data.web_site);
				$('input[name="financial_year_begin_date"]').val(data.financial_year_begin_date);
				$('input[name="books_beginning_date"]').val(data.book_begin_date);
				$('input[name="financial_year_end_date"]').val(data.financial_year_end_date);
				$('input[name="financial_year"]').val(data.financial_year);
				$('input[name="currency_symbol"]').val(data.currency_symbol);
				$('input[name="company_formal_name"]').val(data.currency_formal_name);
				$('input[name="suffix_symbol_to_amount"]').val(data.suffix_symbol_to_amount);
				$('input[name="show_amount_in_millions"]').val(data.show_amount_in_millions);
				$('input[name="number_decimal_places"]').val(data.number_of_decimal_places);
				// $('#company_creation').modal('hide');
				 // Show the state dropdown when clicking on the state input field
				var stateInput = $('input[name="StateInput"]');
				var stateDropdown = $('#StateDropdown');
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
			 // Make an AJAX call to get the state options based on the selected country
			 $.ajax({
				url: BASE_URL + "index.php/" + accountsController + "/getStateOption",
				dataType: 'json',
				data: { li_token: token, country_id: data.country_id },
				success: function (stateData) {
				stateDropdown.empty(); 
				$.each(stateData, function (key, value) {
					stateDropdown.append('<li data-value="' + key + '">' + value + '</li>');
				});
				}
			});
        }, // suceess
        error: function(jqXHR, textStatus, errorThrown) {
			console.log("inside error callback");
        console.log('AJAX error:', textStatus, errorThrown);
        }
    })
});

$(document).on('click', '#btnalter_company_features', function() {
	 $.ajax({
		url : BASE_URL + "index.php/" + accountsController + "/get_company_features_details",
	 	type: 'GET',
        dataType:'json',
		
        data: {  li_token: token },
        success: function(data) {
		
			console.log("response of company features is",data);
				$('#company_features').modal('show');
			
				$('#provide_contact_details').val(data.provide_contact_details);
			
				$('#provide_additional_base_currency_details').val(data.provide_additional_base_currency_details);
				$('#maintain_account').val(data.maintain_accounts);
				if (data.maintain_accounts === 'yes') {
					$('#enable_bill_wise_entry, #enable_cost_centres, #enable_interest_calculation').prop('disabled', false);
				} else {
					$('#enable_bill_wise_entry, #enable_cost_centres, #enable_interest_calculation').prop('disabled', true);
				}
			
				$('#enable_bill_wise_entry').val(data.enable_bill_wise_entry);
				$('#enable_cost_centres').val(data.enable_cost_centres);
				$('#enable_interest_calculation').val(data.enable_interest_calculation);
				$('#maintain_inventories').val(data.maintain_inventory);
				// if(data.maintain_inventory === 'yes'){
				// 	$('#integrate_accounts_with_inventory, #enable_multiple_price_levels, #enable_batch','#enable_job_order_processing','#enable_cost_tracking','#enable_job_costing','#use_discount_column_in_invoices','#use_actual_and_billed_columns_in_invoices').prop('disabled', false);
				// } else {
				// 	$('#integrate_accounts_with_inventory, #enable_multiple_price_levels, #enable_batch','#enable_job_order_processing','#enable_cost_tracking','#enable_job_costing','#use_discount_column_in_invoices','#use_actual_and_billed_columns_in_invoices').prop('disabled', true);
				// }
				if (data.maintain_inventory === 'yes') {
					$('.sub_features').removeClass('disabled');
					$('.sub_features_select').prop('disabled', false);
				} else {
					$('.sub_features').addClass('disabled');
					$('.sub_features_select').prop('disabled', true);
				}

				$('#integrate_accounts_with_inventory').val(data.integrate_accounts_with_inventory);
				$('#enable_multiple_price_levels').val(data.maintain_inventory);
				
				

				$('#enable_batch').val(data.enable_batches);
				$('#maintain_expiry_date_for_batches').val(data.maintain_expiry_date_for_batches);
				$('#enable_job_order_processing').val(data.enable_job_order_processing);
				
				$('#enable_cost_tracking').val(data.enable_cost_tracking);
				$('#enable_job_costing').val(data.enable_job_costing);
				// fr selecting the coresponding countryid
				$('#use_discount_column_in_invoices').val(data.use_discount_column_in_invoices);
				// fr selecting the coresponding currency_id
				$('#use_actual_and_billed_columns_in_invoices').val(data.use_actual_and_billed_columns_in_invoices);
				
				$('#enable_gst').val(data.enable_gst);
				$('#enable_tds').val(data.enable_tds);
				$('#enable_tcs').val(data.enable_tcs);
				$('#enable_vat').val(data.enable_vat);
				$('#enable_excise').val(data.enable_excise);
				$('#enable_service_tax').val(data.enable_service_tax);
				$('#enable_upi_payment_request').val(data.enable_upi_payment_request);
				$('#enable_multiple_addresses').val(data.enable_multiple_addresses);
				$('#mark_modified_vouchers').val(data.mark_modified_vouchers);
			

       }, // suceess
        error: function(jqXHR, textStatus, errorThrown) {
			console.log("inside error callback");
        console.log('AJAX error:', textStatus, errorThrown);
        }
    })
	


});

$(document).on('click', '#company_select_link', function() {
    // $('#company_select').modal('show'); 
   loadCompanyDetails();
   $('#company_select').modal('show');
});


function companyCreation()
{
    // $('#company_creation input[type="text"]').val('');
    $('#company_mailing_name,#company_name,#company_address_1, #company_address_2, #company_address_3, #company_address_4, #company_address_5, #company_pincode, #company_telephone, #company_mobile, #company_fax, #company_email, #company_website, #currency_symbol, #company_formal_name, #number_decimal_places ').val("");
 $('#CountryInput, #StateInput').val('Not Applicable');
 $(' #suffix_symbol_to_amount, #show_amount_in_millions').val('no');
  $('#company_creation').modal('show');
  $('#company_select').modal('hide');
}

 $(document).on('click', '#btncreatefinancialyear', function() {
	// $company_id = $this->session->userdata('company_id');
	// alert($company_id );
   fetchDataAndDisplayInModal();
});


</script>
